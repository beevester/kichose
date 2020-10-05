<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Traits\Blameable;
use App\Traits\IsActive;
use App\Traits\Timestampable;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;

/**
 * StockLine
 *
 * @ORM\Entity(repositoryClass="App\Repository\StockLineRepository")
 * @ApiResource(
 *     attributes={
 *          "normalization_context"={"groups"={"stock_line_read", "read", "is_active_read"}},
 *          "denormalization_context"={"groups"={"stock_line_write", "is_active_write"}},
 *          "order"={"id": "ASC"}
 *     },
 *     collectionOperations={
 *          "get"={
 *              "access_control"="is_granted('ROLE_STOCK_LINE_LIST')"
 *          },
 *          "post"={
 *              "access_control"="is_granted('ROLE_STOCK_LINE_CREATE')"
 *          }
 *     },
 *     itemOperations={
 *          "get"={
 *              "access_control"="is_granted('ROLE_STOCK_LINE_SHOW')"
 *          },
 *          "put"={
 *              "access_control"="is_granted('ROLE_STOCK_LINE_UPDATE')"
 *          },
 *          "delete"={
 *              "access_control"="is_granted('ROLE_STOCK_LINE_DELETE')"
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
class StockLine
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
     * @Groups({
     *     "stock_line_read"
     * })
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\StockLineStatus")
     * @Groups({
     *     "stock_line_read",
     *     "stock_line_write",
     * })
     * @Assert\NotNull()
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product")
     * @Groups({
     *     "stock_line_read",
     *     "stock_line_write",
     * })
     * @Assert\NotNull()
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ShippingNoticeLine")
     * @Groups({
     *     "stock_line_read",
     *     "stock_line_write",
     * })
     * @Assert\NotNull()
     */
    private $shippingNoticeLine;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Warehouse")
     * @Groups({
     *     "stock_line_read",
     *     "stock_line_write",
     * })
     * @Assert\NotNull()
     */
    private $warehouse;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\OrderLine", mappedBy="stockLine")
     * @Groups({
     *     "stock_line_read",
     *     "stock_line_write",
     * })
     */
    private $orderLine;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Currency")
     * @Groups({
     *     "stock_line_read",
     *     "stock_line_write",
     * })
     * @Assert\NotNull()
     */
    private $currency;

    /**
     * @ORM\Column(type="float", nullable=false)
     * @Groups({
     *     "stock_line_read",
     *     "stock_line_write",
     * })
     * @Assert\NotBlank()
     */
    private $priceBuyNetto;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CompanyProduct")
     * @Groups({
     *     "stock_line_read",
     *     "stock_line_write",
     * })
     * @Assert\NotNull()
     */
    private $companyProduct;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPriceBuyNetto(): ?float
    {
        return $this->priceBuyNetto;
    }

    public function setPriceBuyNetto(float $priceBuyNetto): self
    {
        $this->priceBuyNetto = $priceBuyNetto;

        return $this;
    }

    public function getStatus(): ?StockLineStatus
    {
        return $this->status;
    }

    public function setStatus(?StockLineStatus $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getShippingNoticeLine(): ?ShippingNoticeLine
    {
        return $this->shippingNoticeLine;
    }

    public function setShippingNoticeLine(?ShippingNoticeLine $shippingNoticeLine): self
    {
        $this->shippingNoticeLine = $shippingNoticeLine;

        return $this;
    }

    public function getWarehouse(): ?Warehouse
    {
        return $this->warehouse;
    }

    public function setWarehouse(?Warehouse $warehouse): self
    {
        $this->warehouse = $warehouse;

        return $this;
    }

    public function getOrderLine(): ?OrderLine
    {
        return $this->orderLine;
    }

    public function setOrderLine(?OrderLine $orderLine): self
    {
        $this->orderLine = $orderLine;

        // set (or unset) the owning side of the relation if necessary
        $newStockLine = $orderLine === null ? null : $this;
        if ($newStockLine !== $orderLine->getStockLine()) {
            $orderLine->setStockLine($newStockLine);
        }

        return $this;
    }

    public function getCurrency(): ?Currency
    {
        return $this->currency;
    }

    public function setCurrency(?Currency $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getCompanyProduct(): ?CompanyProduct
    {
        return $this->companyProduct;
    }

    public function setCompanyProduct(?CompanyProduct $companyProduct): self
    {
        $this->companyProduct = $companyProduct;

        return $this;
    }
}
