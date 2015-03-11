<?php

namespace EbayWsdl\Classes;

class PromotionalShippingDiscountDetailsType
{

    /**
     * @var DiscountNameCodeType $DiscountName
     */
    protected $DiscountName = null;

    /**
     * @var AmountType $ShippingCost
     */
    protected $ShippingCost = null;

    /**
     * @var AmountType $OrderAmount
     */
    protected $OrderAmount = null;

    /**
     * @var int $ItemCount
     */
    protected $ItemCount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param DiscountNameCodeType $DiscountName
     * @param AmountType $ShippingCost
     * @param AmountType $OrderAmount
     * @param int $ItemCount
     * @param string $any
     */
    public function __construct($DiscountName = null, $ShippingCost = null, $OrderAmount = null, $ItemCount = null, $any = null)
    {
      $this->DiscountName = $DiscountName;
      $this->ShippingCost = $ShippingCost;
      $this->OrderAmount = $OrderAmount;
      $this->ItemCount = $ItemCount;
      $this->any = $any;
    }

    /**
     * @return DiscountNameCodeType
     */
    public function getDiscountName()
    {
      return $this->DiscountName;
    }

    /**
     * @param DiscountNameCodeType $DiscountName
     * @return \EbayWsdl\Classes\PromotionalShippingDiscountDetailsType
     */
    public function setDiscountName($DiscountName)
    {
      $this->DiscountName = $DiscountName;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getShippingCost()
    {
      return $this->ShippingCost;
    }

    /**
     * @param AmountType $ShippingCost
     * @return \EbayWsdl\Classes\PromotionalShippingDiscountDetailsType
     */
    public function setShippingCost($ShippingCost)
    {
      $this->ShippingCost = $ShippingCost;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getOrderAmount()
    {
      return $this->OrderAmount;
    }

    /**
     * @param AmountType $OrderAmount
     * @return \EbayWsdl\Classes\PromotionalShippingDiscountDetailsType
     */
    public function setOrderAmount($OrderAmount)
    {
      $this->OrderAmount = $OrderAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemCount()
    {
      return $this->ItemCount;
    }

    /**
     * @param int $ItemCount
     * @return \EbayWsdl\Classes\PromotionalShippingDiscountDetailsType
     */
    public function setItemCount($ItemCount)
    {
      $this->ItemCount = $ItemCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \EbayWsdl\Classes\PromotionalShippingDiscountDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
