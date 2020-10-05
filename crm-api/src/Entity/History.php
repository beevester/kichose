<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Controller\History\HistoryGetEntityCollectionAction;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;

/**
 * @ORM\Table(name="history")
 * @ORM\Entity(repositoryClass="App\Repository\HistoryRepository")
 * @ApiResource(
 *     attributes={
 *          "normalization_context"={
 *              "groups"={
 *                  "history_read",
 *              }
 *          },
 *          "order"={
 *              "id": "DESC"
 *          }
 *     },
 *     collectionOperations={
 *          "get"={
 *              "access_control"="is_granted('ROLE_HISTORY_LIST')"
 *          },
 *          "getEntity"={
 *              "access_control"="is_granted('ROLE_HISTORY_LIST')",
 *              "method"="GET",
 *              "path"="/histories/{entity}/{entityId}",
 *              "normalization_context"={
 *                  "groups"={"history_get_entity_collection"}
 *              },
 *              "controller"=HistoryGetEntityCollectionAction::class,
 *              "defaults"={"_api_receive"=false},
 *          },
 *     },
 *     itemOperations={
 *          "get"={
 *              "access_control"="is_granted('ROLE_HISTORY_SHOW')"
 *          }
 *     },
 * )
 * @ApiFilter(DateFilter::class, properties={"loggedAt"})
 * @ApiFilter(SearchFilter::class, properties={
 *     "id": "exact",
 *     "action": "ipartial",
 *     "objectId": "ipartial",
 *     "objectClass": "ipartial",
 *     "username": "ipartial",
 * })
 * @ApiFilter(
 *     OrderFilter::class,
 *     properties={
 *          "id",
 *          "action",
 *          "objectId",
 *          "objectClass",
 *          "username",
 *          "loggedAt"
 *     }
 * )
 */
class History
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     * @Groups({
     *     "history_read",
     *     "history_get_entity_collection",
     * })
     */
    protected $id;

    /**
     * @var string $action
     *
     * @ORM\Column(type="string", length=8)
     * @Groups({
     *     "history_read",
     *     "history_get_entity_collection",
     * })
     */
    protected $action;

    /**
     * @ORM\Column(name="logged_at", type="datetime")
     * @Groups({
     *     "history_read",
     *     "history_get_entity_collection",
     * })
     */
    protected $loggedAt;

    /**
     * @ORM\Column(name="object_id", length=64, nullable=true)
     * @Groups({
     *     "history_read",
     *     "history_get_entity_collection",
     * })
     */
    protected $objectId;

    /**
     * @ORM\Column(name="object_class", type="string", length=255)
     * @Groups({
     *     "history_read",
     *     "history_get_entity_collection",
     * })
     */
    protected $objectClass;

    /**
     * @ORM\Column(type="integer")
     * @Groups({
     *     "history_read",
     *     "history_get_entity_collection",
     * })
     */
    protected $version;

    /**
     * @ORM\Column(type="array", nullable=true)
     * @Groups({
     *     "history_read",
     *     "history_get_entity_collection",
     * })
     */
    protected $data;

    /**
     * @ORM\Column(length=255, nullable=true)
     * @Groups({
     *     "history_read",
     *     "history_get_entity_collection",
     * })
     */
    protected $username;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getLoggedAt(): ?\DateTimeInterface
    {
        return $this->loggedAt;
    }

    public function setLoggedAt()
    {
        $this->loggedAt = new \DateTime();
    }

    public function getObjectId(): ?string
    {
        return $this->objectId;
    }

    public function setObjectId(?string $objectId): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    public function getObjectClass(): ?string
    {
        return $this->objectClass;
    }

    public function setObjectClass(string $objectClass): self
    {
        $this->objectClass = $objectClass;

        return $this;
    }

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(int $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getData(): ?array
    {
        return $this->data;
    }

    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }
}
