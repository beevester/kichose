<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Traits\Blameable;
use App\Traits\IsActive;
use App\Traits\Timestampable;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;

/**
 * OpportunityStatus
 *
 * @ORM\Entity(repositoryClass="App\Repository\OpportunityStatusRepository")
 * @ApiResource(
 *     attributes={
 *          "normalization_context"={"groups"={"opportunity_status_read", "read", "is_active_read"}},
 *          "denormalization_context"={"groups"={"opportunity_status_write", "is_active_write"}},
 *          "order"={"id": "ASC"}
 *     },
 *     collectionOperations={
 *          "get"={
 *              "access_control"="is_granted('ROLE_OPPORTUNITY_STATUS_LIST')"
 *          },
 *          "post"={
 *              "access_control"="is_granted('ROLE_OPPORTUNITY_STATUS_CREATE')"
 *          }
 *     },
 *     itemOperations={
 *          "get"={
 *              "access_control"="is_granted('ROLE_OPPORTUNITY_STATUS_SHOW')"
 *          },
 *          "put"={
 *              "access_control"="is_granted('ROLE_OPPORTUNITY_STATUS_UPDATE')"
 *          },
 *          "delete"={
 *              "access_control"="is_granted('ROLE_OPPORTUNITY_STATUS_DELETE')"
 *          }
 *     })
 * @ApiFilter(DateFilter::class, properties={"createdAt", "updatedAt"})
 * @ApiFilter(SearchFilter::class, properties={
 *     "id": "exact",
 *     "name": "ipartial",
 * })
 * @ApiFilter(
 *     OrderFilter::class,
 *     properties={
 *          "id",
 *          "name",
 *          "createdAt",
 *          "updatedAt"
 *     }
 * )
 */
class OpportunityStatus
{
    public const STATUS_OPEN = 1;
    public const STATUS_IN_PROGRESS = 2;
    public const STATUS_CLOSED = 3;

    use Timestampable;
    use Blameable;
    use IsActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({
     *     "opportunity_status_read",
     *     "opportunity_read",
     *     "document_read",
     *     "opportunity_write",
     *     "opportunity_read",
     *     "client_read",
     *     "client_write"
     * })
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Groups({"opportunity_status_read", "opportunity_status_write", "opportunity_read", "document_read", "client_read"})
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return OpportunityStatus
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
