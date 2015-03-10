<?php

namespace EbayWsdl;

class TaxDetailsType
{

    /**
     * @var TaxTypeCodeType $Imposition
     */
    protected $Imposition = null;

    /**
     * @var TaxDescriptionCodeType $TaxDescription
     */
    protected $TaxDescription = null;

    /**
     * @var AmountType $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var AmountType $TaxOnSubtotalAmount
     */
    protected $TaxOnSubtotalAmount = null;

    /**
     * @var AmountType $TaxOnShippingAmount
     */
    protected $TaxOnShippingAmount = null;

    /**
     * @var AmountType $TaxOnHandlingAmount
     */
    protected $TaxOnHandlingAmount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param TaxTypeCodeType $Imposition
     * @param TaxDescriptionCodeType $TaxDescription
     * @param AmountType $TaxAmount
     * @param AmountType $TaxOnSubtotalAmount
     * @param AmountType $TaxOnShippingAmount
     * @param AmountType $TaxOnHandlingAmount
     * @param string $any
     */
    public function __construct($Imposition = null, $TaxDescription = null, $TaxAmount = null, $TaxOnSubtotalAmount = null, $TaxOnShippingAmount = null, $TaxOnHandlingAmount = null, $any = null)
    {
      $this->Imposition = $Imposition;
      $this->TaxDescription = $TaxDescription;
      $this->TaxAmount = $TaxAmount;
      $this->TaxOnSubtotalAmount = $TaxOnSubtotalAmount;
      $this->TaxOnShippingAmount = $TaxOnShippingAmount;
      $this->TaxOnHandlingAmount = $TaxOnHandlingAmount;
      $this->any = $any;
    }

    /**
     * @return TaxTypeCodeType
     */
    public function getImposition()
    {
      return $this->Imposition;
    }

    /**
     * @param TaxTypeCodeType $Imposition
     * @return \EbayWsdl\TaxDetailsType
     */
    public function setImposition($Imposition)
    {
      $this->Imposition = $Imposition;
      return $this;
    }

    /**
     * @return TaxDescriptionCodeType
     */
    public function getTaxDescription()
    {
      return $this->TaxDescription;
    }

    /**
     * @param TaxDescriptionCodeType $TaxDescription
     * @return \EbayWsdl\TaxDetailsType
     */
    public function setTaxDescription($TaxDescription)
    {
      $this->TaxDescription = $TaxDescription;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param AmountType $TaxAmount
     * @return \EbayWsdl\TaxDetailsType
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTaxOnSubtotalAmount()
    {
      return $this->TaxOnSubtotalAmount;
    }

    /**
     * @param AmountType $TaxOnSubtotalAmount
     * @return \EbayWsdl\TaxDetailsType
     */
    public function setTaxOnSubtotalAmount($TaxOnSubtotalAmount)
    {
      $this->TaxOnSubtotalAmount = $TaxOnSubtotalAmount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTaxOnShippingAmount()
    {
      return $this->TaxOnShippingAmount;
    }

    /**
     * @param AmountType $TaxOnShippingAmount
     * @return \EbayWsdl\TaxDetailsType
     */
    public function setTaxOnShippingAmount($TaxOnShippingAmount)
    {
      $this->TaxOnShippingAmount = $TaxOnShippingAmount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTaxOnHandlingAmount()
    {
      return $this->TaxOnHandlingAmount;
    }

    /**
     * @param AmountType $TaxOnHandlingAmount
     * @return \EbayWsdl\TaxDetailsType
     */
    public function setTaxOnHandlingAmount($TaxOnHandlingAmount)
    {
      $this->TaxOnHandlingAmount = $TaxOnHandlingAmount;
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
     * @return \EbayWsdl\TaxDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
