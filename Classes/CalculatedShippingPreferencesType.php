<?php

namespace EbayWsdl\Classes;

class CalculatedShippingPreferencesType
{

    /**
     * @var AmountType $CalculatedShippingAmountForEntireOrder
     */
    protected $CalculatedShippingAmountForEntireOrder = null;

    /**
     * @var CalculatedShippingChargeOptionCodeType $CalculatedShippingChargeOption
     */
    protected $CalculatedShippingChargeOption = null;

    /**
     * @var CalculatedShippingRateOptionCodeType $CalculatedShippingRateOption
     */
    protected $CalculatedShippingRateOption = null;

    /**
     * @var InsuranceOptionCodeType $InsuranceOption
     */
    protected $InsuranceOption = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $CalculatedShippingAmountForEntireOrder
     * @param CalculatedShippingChargeOptionCodeType $CalculatedShippingChargeOption
     * @param CalculatedShippingRateOptionCodeType $CalculatedShippingRateOption
     * @param InsuranceOptionCodeType $InsuranceOption
     * @param string $any
     */
    public function __construct($CalculatedShippingAmountForEntireOrder = null, $CalculatedShippingChargeOption = null, $CalculatedShippingRateOption = null, $InsuranceOption = null, $any = null)
    {
      $this->CalculatedShippingAmountForEntireOrder = $CalculatedShippingAmountForEntireOrder;
      $this->CalculatedShippingChargeOption = $CalculatedShippingChargeOption;
      $this->CalculatedShippingRateOption = $CalculatedShippingRateOption;
      $this->InsuranceOption = $InsuranceOption;
      $this->any = $any;
    }

    /**
     * @return AmountType
     */
    public function getCalculatedShippingAmountForEntireOrder()
    {
      return $this->CalculatedShippingAmountForEntireOrder;
    }

    /**
     * @param AmountType $CalculatedShippingAmountForEntireOrder
     * @return \EbayWsdl\Classes\CalculatedShippingPreferencesType
     */
    public function setCalculatedShippingAmountForEntireOrder($CalculatedShippingAmountForEntireOrder)
    {
      $this->CalculatedShippingAmountForEntireOrder = $CalculatedShippingAmountForEntireOrder;
      return $this;
    }

    /**
     * @return CalculatedShippingChargeOptionCodeType
     */
    public function getCalculatedShippingChargeOption()
    {
      return $this->CalculatedShippingChargeOption;
    }

    /**
     * @param CalculatedShippingChargeOptionCodeType $CalculatedShippingChargeOption
     * @return \EbayWsdl\Classes\CalculatedShippingPreferencesType
     */
    public function setCalculatedShippingChargeOption($CalculatedShippingChargeOption)
    {
      $this->CalculatedShippingChargeOption = $CalculatedShippingChargeOption;
      return $this;
    }

    /**
     * @return CalculatedShippingRateOptionCodeType
     */
    public function getCalculatedShippingRateOption()
    {
      return $this->CalculatedShippingRateOption;
    }

    /**
     * @param CalculatedShippingRateOptionCodeType $CalculatedShippingRateOption
     * @return \EbayWsdl\Classes\CalculatedShippingPreferencesType
     */
    public function setCalculatedShippingRateOption($CalculatedShippingRateOption)
    {
      $this->CalculatedShippingRateOption = $CalculatedShippingRateOption;
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
     * @return \EbayWsdl\Classes\CalculatedShippingPreferencesType
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
     * @return \EbayWsdl\Classes\CalculatedShippingPreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
