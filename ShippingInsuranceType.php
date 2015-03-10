<?php

namespace EbayWsdl;

class ShippingInsuranceType
{

    /**
     * @var InsuranceOptionCodeType $InsuranceOption
     */
    protected $InsuranceOption = null;

    /**
     * @var FlatRateInsuranceRangeCostType[] $FlatRateInsuranceRangeCost
     */
    protected $FlatRateInsuranceRangeCost = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param InsuranceOptionCodeType $InsuranceOption
     * @param FlatRateInsuranceRangeCostType[] $FlatRateInsuranceRangeCost
     * @param string $any
     */
    public function __construct($InsuranceOption = null, array $FlatRateInsuranceRangeCost = null, $any = null)
    {
      $this->InsuranceOption = $InsuranceOption;
      $this->FlatRateInsuranceRangeCost = $FlatRateInsuranceRangeCost;
      $this->any = $any;
    }

    /**
     * @return InsuranceOptionCodeType
     */
    public function getInsuranceOption()
    {
      return $this->InsuranceOption;
    }

    /**
     * @param InsuranceOptionCodeType $InsuranceOption
     * @return \EbayWsdl\ShippingInsuranceType
     */
    public function setInsuranceOption($InsuranceOption)
    {
      $this->InsuranceOption = $InsuranceOption;
      return $this;
    }

    /**
     * @return FlatRateInsuranceRangeCostType[]
     */
    public function getFlatRateInsuranceRangeCost()
    {
      return $this->FlatRateInsuranceRangeCost;
    }

    /**
     * @param FlatRateInsuranceRangeCostType[] $FlatRateInsuranceRangeCost
     * @return \EbayWsdl\ShippingInsuranceType
     */
    public function setFlatRateInsuranceRangeCost(array $FlatRateInsuranceRangeCost)
    {
      $this->FlatRateInsuranceRangeCost = $FlatRateInsuranceRangeCost;
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
     * @return \EbayWsdl\ShippingInsuranceType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
