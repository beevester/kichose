<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiSubresource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use App\Controller\CompanyLastAction;
use App\Interfaces\SearchInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\Blameable;
use App\Traits\IsActive;
use App\Traits\Timestampable;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;

/**
 * Division
 *
 * @ORM\Table(name="division")
 * @ORM\Entity(repositoryClass="App\Repository\DivisionRepository")
 * @ApiResource(
 *     attributes={
 *          "normalization_context"={"groups"={"division_read", "read", "is_active_read"}},
 *          "denormalization_context"={"groups"={"division_write", "is_active_write"}},
 *          "order"={"id": "DESC"}
 *     },
 *     collectionOperations={
 *          "get"={
 *               "normalization_context"={
 *                  "groups"={"division_read_collection", "read", "is_active_read"}
 *              },
 *              "access_control"="is_granted('ROLE_DIVISION_LIST')"
 *          },
 *          "last"={
 *              "access_control"="is_granted('ROLE_DIVISION_UPDATE')",
 *              "method"="GET",
 *              "path"="/divisions/last",
 *              "controller"=CompanyLastAction::class,
 *              "defaults"={"_api_receive"=false}
 *          },
 *          "post"={
 *              "access_control"="is_granted('ROLE_DIVISION_CREATE')"
 *          }
 *     },
 *     itemOperations={
 *          "get"={
 *              "access_control"="is_granted('ROLE_DIVISION_SHOW')"
 *          },
 *          "put"={
 *              "access_control"="is_granted('ROLE_DIVISION_UPDATE')"
 *          },
 *          "delete"={
 *              "access_control"="is_granted('ROLE_DIVISION_DELETE')"
 *          }
 *     })
 * @ApiFilter(DateFilter::class, properties={"createdAt", "updatedAt"})
 * @ApiFilter(SearchFilter::class, properties={
 *     "id": "exact",
 *     "name": "ipartial",
 *     "contacts.value": "ipartial",
 *     "labels.id": "exact",
 *     "addresses.country.name": "ipartial",
 *     "addresses.city.name": "ipartial",
 *     "addresses.postCode": "ipartial",
 *     "contactPerson": "ipartial",
 * })
 * @ApiFilter(
 *     OrderFilter::class,
 *     properties={
 *          "id",
 *          "name",
 *          "contactPerson",
 *          "createdAt",
 *          "updatedAt"
 *     }
 * )
 */
class Division implements SearchInterface
{
    use Timestampable;
    use Blameable;
    use IsActive;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({
     *     "division_read",
     *     "contact_read",
     *     "address_read",
     *     "invoice_header_read",
     *     "invoice_header_write",
     *     "invoice_header_read_collection",
     *     "address_write",
     *     "contact_write",
     *     "document_read",
     *     "document_write",
     *     "division_product_read",
     *     "division_product_write",
     *     "product_sell_price_read",
     *     "division_read_collection"
     * })
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Groups({
     *     "division_read",
     *     "division_write",
     *     "contact_read",
     *     "address_read",
     *     "invoice_header_read",
     *     "invoice_header_read_collection",
     *     "division_product_read",
     *     "product_sell_price_read",
     *     "division_read_collection",
     *     "opportunity_read",
     *     "company_read",
     * })
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Company", mappedBy="division")
     * @ORM\OrderBy({"id" = "DESC"})
     * @Groups({
     *     "company_read"
     * })
     * @ApiSubresource()
     */
    private $companies;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "division_read",
     *     "division_write",
     * })
     */
    private $bankName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "division_read",
     *     "division_write",
     * })
     */
    private $bankAccountNumber;

    /**
     * @var string
     *
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({
     *     "division_read",
     *     "division_write",
     * })
     */
    private $isVat;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "division_read",
     *     "division_write",
     * })
     */
    private $vatComment;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Address", inversedBy="divisions")
     * @ORM\OrderBy({"id" = "DESC"})
     * @ApiSubresource()
     * @Groups({
     *     "division_read_collection",
     *     "division_read",
     * })
     */
    private $addresses;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Document", inversedBy="divisions")
     * @Groups({"division_read"})
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $documents;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Contact", inversedBy="divisions", cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"id" = "ASC"})
     * @Groups({
     *     "division_read",
     *     "division_read_collection",
     *     "division_write",
     * })
     * @ApiSubresource()
     * @Assert\Valid()
     */
    private $contacts;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "division_read",
     *     "division_write",
     *     "division_read_collection"
     * })
     */
    private $contactPerson;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "division_read",
     *     "division_write"
     * })
     */
    private $description;


    public function __construct()
    {
        $this->addresses = new ArrayCollection();
        $this->documents = new ArrayCollection();
        $this->contacts = new ArrayCollection();
        $this->companies = new ArrayCollection();
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
                $this->getName(),
                $this->getContactPerson(),
                $this->getDescription(),
            ]
        );
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIsVat(): ?bool
    {
        return $this->isVat;
    }

    public function setIsVat(?bool $isVat): self
    {
        $this->isVat = $isVat;

        return $this;
    }

    public function getVatComment(): ?string
    {
        return $this->vatComment;
    }

    public function setVatComment(?string $vatComment): self
    {
        $this->vatComment = $vatComment;

        return $this;
    }

    /**
     * @return Collection|Address[]
     */
    public function getAddresses(): Collection
    {
        return $this->addresses;
    }

    public function addAddress(Address $address): self
    {
        if (!$this->addresses->contains($address)) {
            $this->addresses[] = $address;
        }

        return $this;
    }

    public function removeAddress(Address $address): self
    {
        if ($this->addresses->contains($address)) {
            $this->addresses->removeElement($address);
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
            $document->addDivision($this);
        }

        return $this;
    }

    public function removeDocument(Document $document): self
    {
        if ($this->documents->contains($document)) {
            $this->documents->removeElement($document);
            $document->removeDivision($this);
        }

        return $this;
    }

    /**
     * @return Collection|Contact[]
     */
    public function getContacts(): Collection
    {
        return $this->contacts;
    }

    public function addContact(Contact $contact): self
    {
        if (!$this->contacts->contains($contact)) {
            $this->contacts[] = $contact;
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        if ($this->contacts->contains($contact)) {
            $this->contacts->removeElement($contact);
        }

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }

    public function setContactPerson(?string $contactPerson): self
    {
        $this->contactPerson = $contactPerson;

        return $this;
    }

    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    public function setBankName(?string $bankName): self
    {
        $this->bankName = $bankName;

        return $this;
    }

    public function getBankAccountNumber(): ?string
    {
        return $this->bankAccountNumber;
    }

    public function setBankAccountNumber(?string $bankAccountNumber): self
    {
        $this->bankAccountNumber = $bankAccountNumber;

        return $this;
    }

    /**
     * @return Collection|Company[]
     */
    public function getCompanies(): Collection
    {
        return $this->companies;
    }

    public function addCompany(Company $company): self
    {
        if (!$this->companies->contains($company)) {
            $this->companies[] = $company;
        }

        return $this;
    }

    public function removeRole(Company $company): self
    {
        if ($this->companies->contains($company)) {
            $this->companies->removeElement($company);
        }

        return $this;
    }
}
