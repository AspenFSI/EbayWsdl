<?php

namespace EbayWsdl\Classes;

class CheckoutOrderDetailType
{

    /**
     * @var AmountType $TotalCartMerchandiseCost
     */
    protected $TotalCartMerchandiseCost = null;

    /**
     * @var AmountType $TotalCartShippingCost
     */
    protected $TotalCartShippingCost = null;

    /**
     * @var AmountType $TotalTaxAmount
     */
    protected $TotalTaxAmount = null;

    /**
     * @var AmountType $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $TotalCartMerchandiseCost
     * @param AmountType $TotalCartShippingCost
     * @param AmountType $TotalTaxAmount
     * @param AmountType $TotalAmount
     * @param string $any
     */
    public function __construct($TotalCartMerchandiseCost = null, $TotalCartShippingCost = null, $TotalTaxAmount = null, $TotalAmount = null, $any = null)
    {
      $this->TotalCartMerchandiseCost = $TotalCartMerchandiseCost;
      $this->TotalCartShippingCost = $TotalCartShippingCost;
      $this->TotalTaxAmount = $TotalTaxAmount;
      $this->TotalAmount = $TotalAmount;
      $this->any = $any;
    }

    /**
     * @return AmountType
     */
    public function getTotalCartMerchandiseCost()
    {
      return $this->TotalCartMerchandiseCost;
    }

    /**
     * @param AmountType $TotalCartMerchandiseCost
     * @return \EbayWsdl\Classes\CheckoutOrderDetailType
     */
    public function setTotalCartMerchandiseCost($TotalCartMerchandiseCost)
    {
      $this->TotalCartMerchandiseCost = $TotalCartMerchandiseCost;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalCartShippingCost()
    {
      return $this->TotalCartShippingCost;
    }

    /**
     * @param AmountType $TotalCartShippingCost
     * @return \EbayWsdl\Classes\CheckoutOrderDetailType
     */
    public function setTotalCartShippingCost($TotalCartShippingCost)
    {
      $this->TotalCartShippingCost = $TotalCartShippingCost;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalTaxAmount()
    {
      return $this->TotalTaxAmount;
    }

    /**
     * @param AmountType $TotalTaxAmount
     * @return \EbayWsdl\Classes\CheckoutOrderDetailType
     */
    public function setTotalTaxAmount($TotalTaxAmount)
    {
      $this->TotalTaxAmount = $TotalTaxAmount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param AmountType $TotalAmount
     * @return \EbayWsdl\Classes\CheckoutOrderDetailType
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
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
     * @return \EbayWsdl\Classes\CheckoutOrderDetailType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
