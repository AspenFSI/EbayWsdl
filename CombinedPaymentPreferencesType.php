<?php

namespace EbayWsdl;

class CombinedPaymentPreferencesType
{

    /**
     * @var CalculatedShippingPreferencesType $CalculatedShippingPreferences
     */
    protected $CalculatedShippingPreferences = null;

    /**
     * @var CombinedPaymentOptionCodeType $CombinedPaymentOption
     */
    protected $CombinedPaymentOption = null;

    /**
     * @var CombinedPaymentPeriodCodeType $CombinedPaymentPeriod
     */
    protected $CombinedPaymentPeriod = null;

    /**
     * @var FlatShippingPreferencesType $FlatShippingPreferences
     */
    protected $FlatShippingPreferences = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param CalculatedShippingPreferencesType $CalculatedShippingPreferences
     * @param CombinedPaymentOptionCodeType $CombinedPaymentOption
     * @param CombinedPaymentPeriodCodeType $CombinedPaymentPeriod
     * @param FlatShippingPreferencesType $FlatShippingPreferences
     * @param string $any
     */
    public function __construct($CalculatedShippingPreferences = null, $CombinedPaymentOption = null, $CombinedPaymentPeriod = null, $FlatShippingPreferences = null, $any = null)
    {
      $this->CalculatedShippingPreferences = $CalculatedShippingPreferences;
      $this->CombinedPaymentOption = $CombinedPaymentOption;
      $this->CombinedPaymentPeriod = $CombinedPaymentPeriod;
      $this->FlatShippingPreferences = $FlatShippingPreferences;
      $this->any = $any;
    }

    /**
     * @return CalculatedShippingPreferencesType
     */
    public function getCalculatedShippingPreferences()
    {
      return $this->CalculatedShippingPreferences;
    }

    /**
     * @param CalculatedShippingPreferencesType $CalculatedShippingPreferences
     * @return \EbayWsdl\CombinedPaymentPreferencesType
     */
    public function setCalculatedShippingPreferences($CalculatedShippingPreferences)
    {
      $this->CalculatedShippingPreferences = $CalculatedShippingPreferences;
      return $this;
    }

    /**
     * @return CombinedPaymentOptionCodeType
     */
    public function getCombinedPaymentOption()
    {
      return $this->CombinedPaymentOption;
    }

    /**
     * @param CombinedPaymentOptionCodeType $CombinedPaymentOption
     * @return \EbayWsdl\CombinedPaymentPreferencesType
     */
    public function setCombinedPaymentOption($CombinedPaymentOption)
    {
      $this->CombinedPaymentOption = $CombinedPaymentOption;
      return $this;
    }

    /**
     * @return CombinedPaymentPeriodCodeType
     */
    public function getCombinedPaymentPeriod()
    {
      return $this->CombinedPaymentPeriod;
    }

    /**
     * @param CombinedPaymentPeriodCodeType $CombinedPaymentPeriod
     * @return \EbayWsdl\CombinedPaymentPreferencesType
     */
    public function setCombinedPaymentPeriod($CombinedPaymentPeriod)
    {
      $this->CombinedPaymentPeriod = $CombinedPaymentPeriod;
      return $this;
    }

    /**
     * @return FlatShippingPreferencesType
     */
    public function getFlatShippingPreferences()
    {
      return $this->FlatShippingPreferences;
    }

    /**
     * @param FlatShippingPreferencesType $FlatShippingPreferences
     * @return \EbayWsdl\CombinedPaymentPreferencesType
     */
    public function setFlatShippingPreferences($FlatShippingPreferences)
    {
      $this->FlatShippingPreferences = $FlatShippingPreferences;
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
     * @return \EbayWsdl\CombinedPaymentPreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
