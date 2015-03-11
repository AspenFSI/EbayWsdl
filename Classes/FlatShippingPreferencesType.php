<?php

namespace EbayWsdl\Classes;

class FlatShippingPreferencesType
{

    /**
     * @var AmountType $AmountPerAdditionalItem
     */
    protected $AmountPerAdditionalItem = null;

    /**
     * @var AmountType $DeductionAmountPerAdditionalItem
     */
    protected $DeductionAmountPerAdditionalItem = null;

    /**
     * @var FlatRateInsuranceRangeCostType $FlatRateInsuranceRangeCost
     */
    protected $FlatRateInsuranceRangeCost = null;

    /**
     * @var FlatShippingRateOptionCodeType $FlatShippingRateOption
     */
    protected $FlatShippingRateOption = null;

    /**
     * @var InsuranceOptionCodeType $InsuranceOption
     */
    protected $InsuranceOption = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $AmountPerAdditionalItem
     * @param AmountType $DeductionAmountPerAdditionalItem
     * @param FlatRateInsuranceRangeCostType $FlatRateInsuranceRangeCost
     * @param FlatShippingRateOptionCodeType $FlatShippingRateOption
     * @param InsuranceOptionCodeType $InsuranceOption
     * @param string $any
     */
    public function __construct($AmountPerAdditionalItem = null, $DeductionAmountPerAdditionalItem = null, $FlatRateInsuranceRangeCost = null, $FlatShippingRateOption = null, $InsuranceOption = null, $any = null)
    {
      $this->AmountPerAdditionalItem = $AmountPerAdditionalItem;
      $this->DeductionAmountPerAdditionalItem = $DeductionAmountPerAdditionalItem;
      $this->FlatRateInsuranceRangeCost = $FlatRateInsuranceRangeCost;
      $this->FlatShippingRateOption = $FlatShippingRateOption;
      $this->InsuranceOption = $InsuranceOption;
      $this->any = $any;
    }

    /**
     * @return AmountType
     */
    public function getAmountPerAdditionalItem()
    {
      return $this->AmountPerAdditionalItem;
    }

    /**
     * @param AmountType $AmountPerAdditionalItem
     * @return \EbayWsdl\Classes\FlatShippingPreferencesType
     */
    public function setAmountPerAdditionalItem($AmountPerAdditionalItem)
    {
      $this->AmountPerAdditionalItem = $AmountPerAdditionalItem;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getDeductionAmountPerAdditionalItem()
    {
      return $this->DeductionAmountPerAdditionalItem;
    }

    /**
     * @param AmountType $DeductionAmountPerAdditionalItem
     * @return \EbayWsdl\Classes\FlatShippingPreferencesType
     */
    public function setDeductionAmountPerAdditionalItem($DeductionAmountPerAdditionalItem)
    {
      $this->DeductionAmountPerAdditionalItem = $DeductionAmountPerAdditionalItem;
      return $this;
    }

    /**
     * @return FlatRateInsuranceRangeCostType
     */
    public function getFlatRateInsuranceRangeCost()
    {
      return $this->FlatRateInsuranceRangeCost;
    }

    /**
     * @param FlatRateInsuranceRangeCostType $FlatRateInsuranceRangeCost
     * @return \EbayWsdl\Classes\FlatShippingPreferencesType
     */
    public function setFlatRateInsuranceRangeCost($FlatRateInsuranceRangeCost)
    {
      $this->FlatRateInsuranceRangeCost = $FlatRateInsuranceRangeCost;
      return $this;
    }

    /**
     * @return FlatShippingRateOptionCodeType
     */
    public function getFlatShippingRateOption()
    {
      return $this->FlatShippingRateOption;
    }

    /**
     * @param FlatShippingRateOptionCodeType $FlatShippingRateOption
     * @return \EbayWsdl\Classes\FlatShippingPreferencesType
     */
    public function setFlatShippingRateOption($FlatShippingRateOption)
    {
      $this->FlatShippingRateOption = $FlatShippingRateOption;
      return $this;
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
     * @return \EbayWsdl\Classes\FlatShippingPreferencesType
     */
    public function setInsuranceOption($InsuranceOption)
    {
      $this->InsuranceOption = $InsuranceOption;
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
     * @return \EbayWsdl\Classes\FlatShippingPreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
