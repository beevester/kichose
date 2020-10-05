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
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="App\Repository\CompanyRepository")
 * @ApiResource(
 *     attributes={
 *          "normalization_context"={"groups"={"company_read", "read", "is_active_read"}},
 *          "denormalization_context"={"groups"={"company_write", "is_active_write"}},
 *          "order"={"id": "DESC"}
 *     },
 *     collectionOperations={
 *          "get"={
*               "normalization_context"={
 *                  "groups"={"company_read_collection", "read", "is_active_read"}
 *              },
 *              "access_control"="is_granted('ROLE_COMPANY_LIST')"
 *          },
 *          "last"={
 *              "access_control"="is_granted('ROLE_COMPANY_UPDATE')",
 *              "method"="GET",
 *              "path"="/companies/last",
 *              "controller"=CompanyLastAction::class,
 *              "defaults"={"_api_receive"=false}
 *          },
 *          "post"={
 *              "access_control"="is_granted('ROLE_COMPANY_CREATE')"
 *          }
 *     },
 *     itemOperations={
 *          "get"={
 *              "access_control"="is_granted('ROLE_COMPANY_SHOW')"
 *          },
 *          "put"={
 *              "access_control"="is_granted('ROLE_COMPANY_UPDATE')"
 *          },
 *          "delete"={
 *              "access_control"="is_granted('ROLE_COMPANY_DELETE')"
 *          }
 *     })
 * @ApiFilter(DateFilter::class, properties={"createdAt", "updatedAt"})
 * @ApiFilter(SearchFilter::class, properties={
 *     "id": "exact",
 *     "name": "ipartial",
 *     "krs": "ipartial",
 *     "nip": "ipartial",
 *     "contacts.value": "ipartial",
 *     "labels.id": "exact",
 *     "division.id": "ipartial",
 *     "division.name": "ipartial",
 *     "opportunity.id": "ipartial",
 *     "opportunity.name": "ipartial",
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
 *          "division",
 *          "krs",
 *          "nip",
 *          "createdAt",
 *          "updatedAt"
 *     }
 * )
 */
class Company implements SearchInterface
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
     *     "company_read",
     *     "contact_read",
     *     "address_read",
     *     "invoice_header_read",
     *     "invoice_header_write",
     *     "invoice_header_read_collection",
     *     "address_write",
     *     "contact_write",
     *     "document_read",
     *     "document_write",
     *     "company_product_read",
     *     "company_product_write",
     *     "product_sell_price_read",
     *     "company_read_collection",
     *     "opportunity_read",
     *     "opportunity_write",
     *     "division_read",
     *     "division_write",
     * })
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Groups({
     *     "company_read",
     *     "company_write",
     *     "contact_read",
     *     "address_read",
     *     "invoice_header_read",
     *     "invoice_header_read_collection",
     *     "company_product_read",
     *     "product_sell_price_read",
     *     "company_read_collection",
     *     "division_read",
     *     "division_write",
     *     "opportunity.id",
     *     "opportunity.name",
     * })
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "company_read",
     *     "company_write",
     * })
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "company_read",
     *     "company_write",
     * })
     */
    private $krs;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "company_read",
     *     "company_write",
     * })
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "company_read",
     *     "company_write",
     * })
     */
    private $bankName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "company_read",
     *     "company_write",
     * })
     */
    private $bankAccountNumber;

    /**
     * @var string
     *
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({
     *     "company_read",
     *     "company_write",
     * })
     */
    private $isVat;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "company_read",
     *     "company_write",
     * })
     */
    private $vatComment;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Address", inversedBy="companies")
     * @ORM\OrderBy({"id" = "DESC"})
     * @ApiSubresource()
     * @Groups({
     *     "company_read_collection",
     *     "company_read",
     * })
     */
    private $addresses;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Document", mappedBy="companies", orphanRemoval=true)
     * @ORM\OrderBy({"id" = "DESC"})
     * @Groups({
     *     "invoice_header_read"
     * })
     * @ApiSubresource()
     */
    private $documents;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Contact", inversedBy="companies", cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"id" = "ASC"})
     * @Groups({
     *     "company_read",
     *     "company_read_collection",
     *     "company_write",
     * })
     * @ApiSubresource()
     * @Assert\Valid()
     */
    private $contacts;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CompanyProduct", mappedBy="company")
     * @ORM\OrderBy({"id" = "DESC"})
     * @Groups({
     *     "company_write"
     * })
     * @ApiSubresource()
     */
    private $companyProducts;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Opportunity", mappedBy="company")
     * @ORM\OrderBy({"id" = "DESC"})
     * @Groups({
     *     "company_write",
     *     "opportunity_read",
     *     "opportunity_write",
     * })
     * @ApiSubresource()
     */
    private $opportunities;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Division", inversedBy="companies")
     * @Groups({"opportunity_read", "opportunity_write", "task_read"})
     * @Assert\NotBlank()
     */
    private $division;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "company_read",
     *     "company_write",
     *     "company_read_collection"
     * })
     */
    private $contactPerson;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({
     *     "company_read",
     *     "company_write"
     * })
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Label")
     * @ORM\OrderBy({"id" = "ASC"})
     * @Groups({
     *     "company_read",
     *     "company_read_collection",
     *     "company_write"
     * })
     */
    private $labels;

    public function __construct()
    {
        $this->addresses = new ArrayCollection();
        $this->documents = new ArrayCollection();
        $this->contacts = new ArrayCollection();
        $this->companyProducts = new ArrayCollection();
        $this->labels = new ArrayCollection();
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
                $this->getKrs(),
                $this->getNip(),
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

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getKrs(): ?string
    {
        return $this->krs;
    }

    public function setKrs(?string $krs): self
    {
        $this->krs = $krs;

        return $this;
    }

    public function getNip(): ?string
    {
        return $this->nip;
    }

    public function setNip(?string $nip): self
    {
        $this->nip = $nip;

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
            $document->addCompany($this);
        }

        return $this;
    }

    public function removeDocument(Document $document): self
    {
        if ($this->documents->contains($document)) {
            $this->documents->removeElement($document);
            $document->removeCompany($this);
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

    /**
     * @return Collection|CompanyProduct[]
     */
    public function getCompanyProducts(): Collection
    {
        return $this->companyProducts;
    }

    public function addCompanyProduct(CompanyProduct $companyProduct): self
    {
        if (!$this->companyProducts->contains($companyProduct)) {
            $this->companyProducts[] = $companyProduct;
            $companyProduct->setCompany($this);
        }

        return $this;
    }

    public function removeCompanyProduct(CompanyProduct $companyProduct): self
    {
        if ($this->companyProducts->contains($companyProduct)) {
            $this->companyProducts->removeElement($companyProduct);
            // set the owning side to null (unless already changed)
            if ($companyProduct->getCompany() === $this) {
                $companyProduct->setCompany(null);
            }
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

    /**
     * @return Collection|Label[]
     */
    public function getLabels(): Collection
    {
        return $this->labels;
    }

    public function addLabel(Label $label): self
    {
        if (!$this->labels->contains($label)) {
            $this->labels[] = $label;
        }

        return $this;
    }

    public function removeLabel(Label $label): self
    {
        if ($this->labels->contains($label)) {
            $this->labels->removeElement($label);
        }

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
}
