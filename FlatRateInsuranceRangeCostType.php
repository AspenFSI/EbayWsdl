<?php

namespace EbayWsdl;

class FlatRateInsuranceRangeCostType
{

    /**
     * @var FlatRateInsuranceRangeCodeType $FlatRateInsuranceRange
     */
    protected $FlatRateInsuranceRange = null;

    /**
     * @var AmountType $InsuranceCost
     */
    protected $InsuranceCost = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param FlatRateInsuranceRangeCodeType $FlatRateInsuranceRange
     * @param AmountType $InsuranceCost
     * @param string $any
     */
    public function __construct($FlatRateInsuranceRange = null, $InsuranceCost = null, $any = null)
    {
      $this->FlatRateInsuranceRange = $FlatRateInsuranceRange;
      $this->InsuranceCost = $InsuranceCost;
      $this->any = $any;
    }

    /**
     * @return FlatRateInsuranceRangeCodeType
     */
    public function getFlatRateInsuranceRange()
    {
      return $this->FlatRateInsuranceRange;
    }

    /**
     * @param FlatRateInsuranceRangeCodeType $FlatRateInsuranceRange
     * @return \EbayWsdl\FlatRateInsuranceRangeCostType
     */
    public function setFlatRateInsuranceRange($FlatRateInsuranceRange)
    {
      $this->FlatRateInsuranceRange = $FlatRateInsuranceRange;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getInsuranceCost()
    {
      return $this->InsuranceCost;
    }

    /**
     * @param AmountType $InsuranceCost
     * @return \EbayWsdl\FlatRateInsuranceRangeCostType
     */
    public function setInsuranceCost($InsuranceCost)
    {
      $this->InsuranceCost = $InsuranceCost;
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
     * @return \EbayWsdl\FlatRateInsuranceRangeCostType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
