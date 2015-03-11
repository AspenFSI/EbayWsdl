<?php

namespace EbayWsdl\Classes;

class SellerDiscountsType
{

    /**
     * @var AmountType $OriginalItemPrice
     */
    protected $OriginalItemPrice = null;

    /**
     * @var AmountType $OriginalItemShippingCost
     */
    protected $OriginalItemShippingCost = null;

    /**
     * @var SellerDiscountType[] $SellerDiscount
     */
    protected $SellerDiscount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $OriginalItemPrice
     * @param AmountType $OriginalItemShippingCost
     * @param SellerDiscountType[] $SellerDiscount
     * @param string $any
     */
    public function __construct($OriginalItemPrice = null, $OriginalItemShippingCost = null, array $SellerDiscount = null, $any = null)
    {
      $this->OriginalItemPrice = $OriginalItemPrice;
      $this->OriginalItemShippingCost = $OriginalItemShippingCost;
      $this->SellerDiscount = $SellerDiscount;
      $this->any = $any;
    }

    /**
     * @return AmountType
     */
    public function getOriginalItemPrice()
    {
      return $this->OriginalItemPrice;
    }

    /**
     * @param AmountType $OriginalItemPrice
     * @return \EbayWsdl\Classes\SellerDiscountsType
     */
    public function setOriginalItemPrice($OriginalItemPrice)
    {
      $this->OriginalItemPrice = $OriginalItemPrice;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getOriginalItemShippingCost()
    {
      return $this->OriginalItemShippingCost;
    }

    /**
     * @param AmountType $OriginalItemShippingCost
     * @return \EbayWsdl\Classes\SellerDiscountsType
     */
    public function setOriginalItemShippingCost($OriginalItemShippingCost)
    {
      $this->OriginalItemShippingCost = $OriginalItemShippingCost;
      return $this;
    }

    /**
     * @return SellerDiscountType[]
     */
    public function getSellerDiscount()
    {
      return $this->SellerDiscount;
    }

    /**
     * @param SellerDiscountType[] $SellerDiscount
     * @return \EbayWsdl\Classes\SellerDiscountsType
     */
    public function setSellerDiscount(array $SellerDiscount)
    {
      $this->SellerDiscount = $SellerDiscount;
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
     * @return \EbayWsdl\Classes\SellerDiscountsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
