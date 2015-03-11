<?php

namespace EbayWsdl\Classes;

class SalesTaxType
{

    /**
     * @var float $SalesTaxPercent
     */
    protected $SalesTaxPercent = null;

    /**
     * @var string $SalesTaxState
     */
    protected $SalesTaxState = null;

    /**
     * @var boolean $ShippingIncludedInTax
     */
    protected $ShippingIncludedInTax = null;

    /**
     * @var AmountType $SalesTaxAmount
     */
    protected $SalesTaxAmount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param float $SalesTaxPercent
     * @param string $SalesTaxState
     * @param boolean $ShippingIncludedInTax
     * @param AmountType $SalesTaxAmount
     * @param string $any
     */
    public function __construct($SalesTaxPercent = null, $SalesTaxState = null, $ShippingIncludedInTax = null, $SalesTaxAmount = null, $any = null)
    {
      $this->SalesTaxPercent = $SalesTaxPercent;
      $this->SalesTaxState = $SalesTaxState;
      $this->ShippingIncludedInTax = $ShippingIncludedInTax;
      $this->SalesTaxAmount = $SalesTaxAmount;
      $this->any = $any;
    }

    /**
     * @return float
     */
    public function getSalesTaxPercent()
    {
      return $this->SalesTaxPercent;
    }

    /**
     * @param float $SalesTaxPercent
     * @return \EbayWsdl\Classes\SalesTaxType
     */
    public function setSalesTaxPercent($SalesTaxPercent)
    {
      $this->SalesTaxPercent = $SalesTaxPercent;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesTaxState()
    {
      return $this->SalesTaxState;
    }

    /**
     * @param string $SalesTaxState
     * @return \EbayWsdl\Classes\SalesTaxType
     */
    public function setSalesTaxState($SalesTaxState)
    {
      $this->SalesTaxState = $SalesTaxState;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShippingIncludedInTax()
    {
      return $this->ShippingIncludedInTax;
    }

    /**
     * @param boolean $ShippingIncludedInTax
     * @return \EbayWsdl\Classes\SalesTaxType
     */
    public function setShippingIncludedInTax($ShippingIncludedInTax)
    {
      $this->ShippingIncludedInTax = $ShippingIncludedInTax;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getSalesTaxAmount()
    {
      return $this->SalesTaxAmount;
    }

    /**
     * @param AmountType $SalesTaxAmount
     * @return \EbayWsdl\Classes\SalesTaxType
     */
    public function setSalesTaxAmount($SalesTaxAmount)
    {
      $this->SalesTaxAmount = $SalesTaxAmount;
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
     * @return \EbayWsdl\Classes\SalesTaxType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
