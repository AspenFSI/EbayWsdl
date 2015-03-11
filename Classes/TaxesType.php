<?php

namespace EbayWsdl\Classes;

class TaxesType
{

    /**
     * @var AmountType $TotalTaxAmount
     */
    protected $TotalTaxAmount = null;

    /**
     * @var TaxDetailsType[] $TaxDetails
     */
    protected $TaxDetails = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $TotalTaxAmount
     * @param TaxDetailsType[] $TaxDetails
     * @param string $any
     */
    public function __construct($TotalTaxAmount = null, array $TaxDetails = null, $any = null)
    {
      $this->TotalTaxAmount = $TotalTaxAmount;
      $this->TaxDetails = $TaxDetails;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\TaxesType
     */
    public function setTotalTaxAmount($TotalTaxAmount)
    {
      $this->TotalTaxAmount = $TotalTaxAmount;
      return $this;
    }

    /**
     * @return TaxDetailsType[]
     */
    public function getTaxDetails()
    {
      return $this->TaxDetails;
    }

    /**
     * @param TaxDetailsType[] $TaxDetails
     * @return \EbayWsdl\Classes\TaxesType
     */
    public function setTaxDetails(array $TaxDetails)
    {
      $this->TaxDetails = $TaxDetails;
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
     * @return \EbayWsdl\Classes\TaxesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
