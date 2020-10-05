<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use App\Interfaces\ClientInterface;
use App\Interfaces\SearchInterface;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\Blameable;
use App\Traits\IsActive;
use App\Traits\Timestampable;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;

/**
 * Opportunity
 *
 * @ORM\Table(name="opportunity")
 * @ORM\Entity(repositoryClass="App\Repository\OpportunityRepository")
 * @ApiResource(
 *     attributes={
 *          "normalization_context"={"groups"={"opportunity_read", "read", "is_active_read"}},
 *          "denormalization_context"={"groups"={"opportunity_write", "is_active_write"}},
 *          "order"={"id": "DESC"}
 *     },
 *     collectionOperations={
 *          "get"={
 *              "access_control"="is_granted('ROLE_OPPORTUNITY_LIST')"
 *          },
 *          "post"={
 *              "access_control"="is_granted('ROLE_OPPORTUNITY_CREATE')"
 *          }
 *     },
 *     itemOperations={
 *          "get"={
 *              "access_control"="is_granted('ROLE_OPPORTUNITY_SHOW')"
 *          },
 *          "put"={
 *              "access_control"="is_granted('ROLE_OPPORTUNITY_UPDATE')"
 *          },
 *          "delete"={
 *              "access_control"="is_granted('ROLE_OPPORTUNITY_DELETE')"
 *          }
 *     })
 * @ApiFilter(DateFilter::class, properties={"createdAt", "updatedAt"})
 * @ApiFilter(SearchFilter::class, properties={
 *     "id": "exact",
 *     "opportunity": "ipartial",
 *     "status.id": "exact",
 *     "type.id": "exact",
 *     "client.name": "ipartial"
 * })
 * @ApiFilter(
 *     OrderFilter::class,
 *     properties={
 *          "id",
 *          "opportunity",
 *          "status.id",
 *          "type.id",
 *          "clientname",
 *          "createdAt",
 *          "updatedAt"
 *     }
 * )
 */
class Opportunity implements ClientInterface, SearchInterface
{
    use Timestampable;
    use Blameable;
    use IsActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"opportunity_read", "user_read", "document_read", "document_write", "task_read", "task_write", "client_read", "client_write"})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Groups({"opportunity_read", "opportunity_write", "user_read", "document_read", "document_write", "task_read", "task_write", "client_read", "client_write"})
     * @Assert\NotBlank()
     */
    private $opportunity;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", length=60, nullable=true, options={"default" : 0})
     * @Groups({"opportunity_read", "opportunity_write", "user_read", "document_read", "document_write", "task_read", "task_write", "client_read", "client_write"})
     */
    private $probability;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", length=60, nullable=true, options={"default" : 0})
     * @Groups({"opportunity_read", "opportunity_write", "user_read", "document_read", "document_write", "task_read", "task_write", "client_read", "client_write"})
     */
    private $priority;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", length=60, nullable=true, options={"default" : 0})
     * @Groups({"opportunity_read", "opportunity_write", "user_read", "document_read", "document_write", "task_read", "task_write", "client_read", "client_write"})
     */
    private $salesStage;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"opportunity_read", "opportunity_write", "document_read"})
     */
    private $description;

    /***
     * @ORM\Column(type="float", nullable=false)
     * @Groups({"opportunity_read", "opportunity_write", "document_read"})
     */
    private $dealValue;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="opportunities")
     * @Groups({"opportunity_read", "opportunity_write", "task_read"})
     * @Assert\NotBlank()
     */
    private $client;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", length=60, nullable=true)
     * @Groups({"opportunity_read", "opportunity_write", "user_read", "document_read", "document_write", "task_read", "task_write", "client_read", "client_write"})
     */
    private $closeDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Company", inversedBy="opportunities")
     * @Groups({
     *     "opportunity_read",
     *     "opportunity_write",
     *     "task_read",
     *     "company_read",
     *     "company_write"
     * })
     * @Assert\NotBlank()
     */
    private $company;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\OpportunityStatus")
     * @Groups({"opportunity_read", "opportunity_write", "document_read", "client_read", "client_write"})
     * @Assert\NotBlank()
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="DealType")
     * @Groups({"opportunity_read", "opportunity_write", "client_read", "client_write"})
     * @Assert\NotBlank()
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Task", mappedBy="opportunity", cascade={"persist"}, orphanRemoval=true)
     * @Groups({"opportunity_read", "opportunity_write"})
     * @ORM\OrderBy({"id" = "ASC"})
     * @Assert\Valid()
     */
    private $tasks;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Document", inversedBy="opportunities")
     * @Groups({"opportunity_read"})
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $documents;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return OpportunityStatus
     */
    public function getStatus(): OpportunityStatus
    {
        return $this->status;
    }

    /**
     * @param OpportunityStatus|null $status
     */
    public function setStatus(OpportunityStatus $status = null): void
    {
        $this->status = $status;
    }

    /**
     * @return Collection|Task[]
     */
    public function getTasks(): ?Collection
    {
        return $this->tasks;
    }

    public function addTask(Task $task): self
    {
        if (!$this->tasks->contains($task)) {
            $this->tasks[] = $task;
            $task->setOpportunity($this);
        }

        return $this;
    }

    public function removeTask(Task $task): self
    {
        if ($this->tasks->contains($task)) {
            $this->tasks->removeElement($task);
            // set the owning side to null (unless already changed)
            if ($task->getOpportunity() === $this) {
                $task->setOpportunity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Document[]
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Document $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents[] = $document;
        }

        return $this;
    }

    public function removeDocument(Document $document): self
    {
        if ($this->documents->contains($document)) {
            $this->documents->removeElement($document);
        }

        return $this;
    }

    public function getType(): ?DealType
    {
        return $this->type;
    }

    public function setType(?DealType $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Search text
     *
     * @return string
     */
    public function getSearchText(): string
    {
        return implode(
            ' ',
            [
                $this->getOpportunity(),
                $this->getDescription(),
            ]
        );
    }

    /**
     * @return string
     */
    public function getOpportunity(): string
    {
        return $this->opportunity;
    }

    /**
     * @param string $opportunity
     */
    public function setOpportunity(string $opportunity): void
    {
        $this->opportunity = $opportunity;
    }

    /**
     * @return int
     */
    public function getProbability(): ?int
    {
        return $this->probability;
    }

    /**
     * @param int $probability
     */
    public function setProbability(int $probability): void
    {
        $this->probability = $probability;
    }

    /**
     * @return int
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @return int|null
     */
    public function getSalesStage(): ?int
    {
        return $this->salesStage;
    }

    /**
     * @param int $salesStage
     */
    public function setSalesStage(int $salesStage): void
    {
        $this->salesStage = $salesStage;
    }

    /**
     * @return DateTime|null
     */
    public function getCloseDate(): ?DateTime
    {
        return $this->closeDate;
    }

    /**
     * @param DateTime $closeDate
     */
    public function setCloseDate(DateTime $closeDate): void
    {
        $this->closeDate = $closeDate;
    }

    /**
     * @return float
     */
    public function getDealValue(): float
    {
        return $this->dealValue;
    }

    /**
     * @param float $dealValue
     */
    public function setDealValue(float $dealValue): void
    {
        $this->dealValue = $dealValue;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company): void
    {
        $this->company = $company;
    }
}
