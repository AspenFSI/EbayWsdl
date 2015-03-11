<?php

namespace EbayWsdl\Classes;

class SetShippingDiscountProfilesRequestType extends AbstractRequestType
{

    /**
     * @var CurrencyCodeType $CurrencyID
     */
    protected $CurrencyID = null;

    /**
     * @var CombinedPaymentPeriodCodeType $CombinedDuration
     */
    protected $CombinedDuration = null;

    /**
     * @var ModifyActionCodeType $ModifyActionCode
     */
    protected $ModifyActionCode = null;

    /**
     * @var FlatShippingDiscountType $FlatShippingDiscount
     */
    protected $FlatShippingDiscount = null;

    /**
     * @var CalculatedShippingDiscountType $CalculatedShippingDiscount
     */
    protected $CalculatedShippingDiscount = null;

    /**
     * @var CalculatedHandlingDiscountType $CalculatedHandlingDiscount
     */
    protected $CalculatedHandlingDiscount = null;

    /**
     * @var PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
     */
    protected $PromotionalShippingDiscountDetails = null;

    /**
     * @var ShippingInsuranceType $ShippingInsurance
     */
    protected $ShippingInsurance = null;

    /**
     * @var ShippingInsuranceType $InternationalShippingInsurance
     */
    protected $InternationalShippingInsurance = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param CurrencyCodeType $CurrencyID
     * @param CombinedPaymentPeriodCodeType $CombinedDuration
     * @param ModifyActionCodeType $ModifyActionCode
     * @param FlatShippingDiscountType $FlatShippingDiscount
     * @param CalculatedShippingDiscountType $CalculatedShippingDiscount
     * @param CalculatedHandlingDiscountType $CalculatedHandlingDiscount
     * @param PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
     * @param ShippingInsuranceType $ShippingInsurance
     * @param ShippingInsuranceType $InternationalShippingInsurance
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $CurrencyID = null, $CombinedDuration = null, $ModifyActionCode = null, $FlatShippingDiscount = null, $CalculatedShippingDiscount = null, $CalculatedHandlingDiscount = null, $PromotionalShippingDiscountDetails = null, $ShippingInsurance = null, $InternationalShippingInsurance = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->CurrencyID = $CurrencyID;
      $this->CombinedDuration = $CombinedDuration;
      $this->ModifyActionCode = $ModifyActionCode;
      $this->FlatShippingDiscount = $FlatShippingDiscount;
      $this->CalculatedShippingDiscount = $CalculatedShippingDiscount;
      $this->CalculatedHandlingDiscount = $CalculatedHandlingDiscount;
      $this->PromotionalShippingDiscountDetails = $PromotionalShippingDiscountDetails;
      $this->ShippingInsurance = $ShippingInsurance;
      $this->InternationalShippingInsurance = $InternationalShippingInsurance;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getCurrencyID()
    {
      return $this->CurrencyID;
    }

    /**
     * @param CurrencyCodeType $CurrencyID
     * @return \EbayWsdl\Classes\SetShippingDiscountProfilesRequestType
     */
    public function setCurrencyID($CurrencyID)
    {
      $this->CurrencyID = $CurrencyID;
      return $this;
    }

    /**
     * @return CombinedPaymentPeriodCodeType
     */
    public function getCombinedDuration()
    {
      return $this->CombinedDuration;
    }

    /**
     * @param CombinedPaymentPeriodCodeType $CombinedDuration
     * @return \EbayWsdl\Classes\SetShippingDiscountProfilesRequestType
     */
    public function setCombinedDuration($CombinedDuration)
    {
      $this->CombinedDuration = $CombinedDuration;
      return $this;
    }

    /**
     * @return ModifyActionCodeType
     */
    public function getModifyActionCode()
    {
      return $this->ModifyActionCode;
    }

    /**
     * @param ModifyActionCodeType $ModifyActionCode
     * @return \EbayWsdl\Classes\SetShippingDiscountProfilesRequestType
     */
    public function setModifyActionCode($ModifyActionCode)
    {
      $this->ModifyActionCode = $ModifyActionCode;
      return $this;
    }

    /**
     * @return FlatShippingDiscountType
     */
    public function getFlatShippingDiscount()
    {
      return $this->FlatShippingDiscount;
    }

    /**
     * @param FlatShippingDiscountType $FlatShippingDiscount
     * @return \EbayWsdl\Classes\SetShippingDiscountProfilesRequestType
     */
    public function setFlatShippingDiscount($FlatShippingDiscount)
    {
      $this->FlatShippingDiscount = $FlatShippingDiscount;
      return $this;
    }

    /**
     * @return CalculatedShippingDiscountType
     */
    public function getCalculatedShippingDiscount()
    {
      return $this->CalculatedShippingDiscount;
    }

    /**
     * @param CalculatedShippingDiscountType $CalculatedShippingDiscount
     * @return \EbayWsdl\Classes\SetShippingDiscountProfilesRequestType
     */
    public function setCalculatedShippingDiscount($CalculatedShippingDiscount)
    {
      $this->CalculatedShippingDiscount = $CalculatedShippingDiscount;
      return $this;
    }

    /**
     * @return CalculatedHandlingDiscountType
     */
    public function getCalculatedHandlingDiscount()
    {
      return $this->CalculatedHandlingDiscount;
    }

    /**
     * @param CalculatedHandlingDiscountType $CalculatedHandlingDiscount
     * @return \EbayWsdl\Classes\SetShippingDiscountProfilesRequestType
     */
    public function setCalculatedHandlingDiscount($CalculatedHandlingDiscount)
    {
      $this->CalculatedHandlingDiscount = $CalculatedHandlingDiscount;
      return $this;
    }

    /**
     * @return PromotionalShippingDiscountDetailsType
     */
    public function getPromotionalShippingDiscountDetails()
    {
      return $this->PromotionalShippingDiscountDetails;
    }

    /**
     * @param PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
     * @return \EbayWsdl\Classes\SetShippingDiscountProfilesRequestType
     */
    public function setPromotionalShippingDiscountDetails($PromotionalShippingDiscountDetails)
    {
      $this->PromotionalShippingDiscountDetails = $PromotionalShippingDiscountDetails;
      return $this;
    }

    /**
     * @return ShippingInsuranceType
     */
    public function getShippingInsurance()
    {
      return $this->ShippingInsurance;
    }

    /**
     * @param ShippingInsuranceType $ShippingInsurance
     * @return \EbayWsdl\Classes\SetShippingDiscountProfilesRequestType
     */
    public function setShippingInsurance($ShippingInsurance)
    {
      $this->ShippingInsurance = $ShippingInsurance;
      return $this;
    }

    /**
     * @return ShippingInsuranceType
     */
    public function getInternationalShippingInsurance()
    {
      return $this->InternationalShippingInsurance;
    }

    /**
     * @param ShippingInsuranceType $InternationalShippingInsurance
     * @return \EbayWsdl\Classes\SetShippingDiscountProfilesRequestType
     */
    public function setInternationalShippingInsurance($InternationalShippingInsurance)
    {
      $this->InternationalShippingInsurance = $InternationalShippingInsurance;
      return $this;
    }

}
