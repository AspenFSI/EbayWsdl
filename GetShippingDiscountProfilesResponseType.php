<?php

namespace EbayWsdl;

class GetShippingDiscountProfilesResponseType extends AbstractResponseType
{

    /**
     * @var CurrencyCodeType $CurrencyID
     */
    protected $CurrencyID = null;

    /**
     * @var FlatShippingDiscountType $FlatShippingDiscount
     */
    protected $FlatShippingDiscount = null;

    /**
     * @var CalculatedShippingDiscountType $CalculatedShippingDiscount
     */
    protected $CalculatedShippingDiscount = null;

    /**
     * @var boolean $PromotionalShippingDiscount
     */
    protected $PromotionalShippingDiscount = null;

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
     * @var CombinedPaymentPeriodCodeType $CombinedDuration
     */
    protected $CombinedDuration = null;

    /**
     * @param \DateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Message
     * @param string $Version
     * @param string $Build
     * @param string $NotificationEventName
     * @param DuplicateInvocationDetailsType $DuplicateInvocationDetails
     * @param string $RecipientUserID
     * @param string $EIASToken
     * @param string $NotificationSignature
     * @param string $HardExpirationWarning
     * @param BotBlockResponseType $BotBlock
     * @param string $ExternalUserData
     * @param string $any
     * @param CurrencyCodeType $CurrencyID
     * @param FlatShippingDiscountType $FlatShippingDiscount
     * @param CalculatedShippingDiscountType $CalculatedShippingDiscount
     * @param boolean $PromotionalShippingDiscount
     * @param CalculatedHandlingDiscountType $CalculatedHandlingDiscount
     * @param PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
     * @param ShippingInsuranceType $ShippingInsurance
     * @param ShippingInsuranceType $InternationalShippingInsurance
     * @param CombinedPaymentPeriodCodeType $CombinedDuration
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $CurrencyID = null, $FlatShippingDiscount = null, $CalculatedShippingDiscount = null, $PromotionalShippingDiscount = null, $CalculatedHandlingDiscount = null, $PromotionalShippingDiscountDetails = null, $ShippingInsurance = null, $InternationalShippingInsurance = null, $CombinedDuration = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->CurrencyID = $CurrencyID;
      $this->FlatShippingDiscount = $FlatShippingDiscount;
      $this->CalculatedShippingDiscount = $CalculatedShippingDiscount;
      $this->PromotionalShippingDiscount = $PromotionalShippingDiscount;
      $this->CalculatedHandlingDiscount = $CalculatedHandlingDiscount;
      $this->PromotionalShippingDiscountDetails = $PromotionalShippingDiscountDetails;
      $this->ShippingInsurance = $ShippingInsurance;
      $this->InternationalShippingInsurance = $InternationalShippingInsurance;
      $this->CombinedDuration = $CombinedDuration;
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
     * @return \EbayWsdl\GetShippingDiscountProfilesResponseType
     */
    public function setCurrencyID($CurrencyID)
    {
      $this->CurrencyID = $CurrencyID;
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
     * @return \EbayWsdl\GetShippingDiscountProfilesResponseType
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
     * @return \EbayWsdl\GetShippingDiscountProfilesResponseType
     */
    public function setCalculatedShippingDiscount($CalculatedShippingDiscount)
    {
      $this->CalculatedShippingDiscount = $CalculatedShippingDiscount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPromotionalShippingDiscount()
    {
      return $this->PromotionalShippingDiscount;
    }

    /**
     * @param boolean $PromotionalShippingDiscount
     * @return \EbayWsdl\GetShippingDiscountProfilesResponseType
     */
    public function setPromotionalShippingDiscount($PromotionalShippingDiscount)
    {
      $this->PromotionalShippingDiscount = $PromotionalShippingDiscount;
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
     * @return \EbayWsdl\GetShippingDiscountProfilesResponseType
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
     * @return \EbayWsdl\GetShippingDiscountProfilesResponseType
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
     * @return \EbayWsdl\GetShippingDiscountProfilesResponseType
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
     * @return \EbayWsdl\GetShippingDiscountProfilesResponseType
     */
    public function setInternationalShippingInsurance($InternationalShippingInsurance)
    {
      $this->InternationalShippingInsurance = $InternationalShippingInsurance;
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
     * @return \EbayWsdl\GetShippingDiscountProfilesResponseType
     */
    public function setCombinedDuration($CombinedDuration)
    {
      $this->CombinedDuration = $CombinedDuration;
      return $this;
    }

}
