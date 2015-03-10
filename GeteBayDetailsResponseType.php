<?php

namespace EbayWsdl;

class GeteBayDetailsResponseType extends AbstractResponseType
{

    /**
     * @var CountryDetailsType[] $CountryDetails
     */
    protected $CountryDetails = null;

    /**
     * @var CurrencyDetailsType[] $CurrencyDetails
     */
    protected $CurrencyDetails = null;

    /**
     * @var DispatchTimeMaxDetailsType[] $DispatchTimeMaxDetails
     */
    protected $DispatchTimeMaxDetails = null;

    /**
     * @var PaymentOptionDetailsType[] $PaymentOptionDetails
     */
    protected $PaymentOptionDetails = null;

    /**
     * @var RegionDetailsType[] $RegionDetails
     */
    protected $RegionDetails = null;

    /**
     * @var ShippingLocationDetailsType[] $ShippingLocationDetails
     */
    protected $ShippingLocationDetails = null;

    /**
     * @var ShippingServiceDetailsType[] $ShippingServiceDetails
     */
    protected $ShippingServiceDetails = null;

    /**
     * @var SiteDetailsType[] $SiteDetails
     */
    protected $SiteDetails = null;

    /**
     * @var TaxJurisdictionType[] $TaxJurisdiction
     */
    protected $TaxJurisdiction = null;

    /**
     * @var URLDetailsType[] $URLDetails
     */
    protected $URLDetails = null;

    /**
     * @var TimeZoneDetailsType[] $TimeZoneDetails
     */
    protected $TimeZoneDetails = null;

    /**
     * @var ItemSpecificDetailsType[] $ItemSpecificDetails
     */
    protected $ItemSpecificDetails = null;

    /**
     * @var UnitOfMeasurementDetailsType[] $UnitOfMeasurementDetails
     */
    protected $UnitOfMeasurementDetails = null;

    /**
     * @var RegionOfOriginDetailsType[] $RegionOfOriginDetails
     */
    protected $RegionOfOriginDetails = null;

    /**
     * @var ShippingPackageDetailsType[] $ShippingPackageDetails
     */
    protected $ShippingPackageDetails = null;

    /**
     * @var ShippingCarrierDetailsType[] $ShippingCarrierDetails
     */
    protected $ShippingCarrierDetails = null;

    /**
     * @var ReturnPolicyDetailsType $ReturnPolicyDetails
     */
    protected $ReturnPolicyDetails = null;

    /**
     * @var ListingStartPriceDetailsType[] $ListingStartPriceDetails
     */
    protected $ListingStartPriceDetails = null;

    /**
     * @var SiteBuyerRequirementDetailsType[] $BuyerRequirementDetails
     */
    protected $BuyerRequirementDetails = null;

    /**
     * @var ListingFeatureDetailsType[] $ListingFeatureDetails
     */
    protected $ListingFeatureDetails = null;

    /**
     * @var VariationDetailsType $VariationDetails
     */
    protected $VariationDetails = null;

    /**
     * @var ExcludeShippingLocationDetailsType[] $ExcludeShippingLocationDetails
     */
    protected $ExcludeShippingLocationDetails = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var RecoupmentPolicyDetailsType[] $RecoupmentPolicyDetails
     */
    protected $RecoupmentPolicyDetails = null;

    /**
     * @var ShippingCategoryDetailsType[] $ShippingCategoryDetails
     */
    protected $ShippingCategoryDetails = null;

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
     * @param CountryDetailsType[] $CountryDetails
     * @param CurrencyDetailsType[] $CurrencyDetails
     * @param DispatchTimeMaxDetailsType[] $DispatchTimeMaxDetails
     * @param PaymentOptionDetailsType[] $PaymentOptionDetails
     * @param RegionDetailsType[] $RegionDetails
     * @param ShippingLocationDetailsType[] $ShippingLocationDetails
     * @param ShippingServiceDetailsType[] $ShippingServiceDetails
     * @param SiteDetailsType[] $SiteDetails
     * @param TaxJurisdictionType[] $TaxJurisdiction
     * @param URLDetailsType[] $URLDetails
     * @param TimeZoneDetailsType[] $TimeZoneDetails
     * @param ItemSpecificDetailsType[] $ItemSpecificDetails
     * @param UnitOfMeasurementDetailsType[] $UnitOfMeasurementDetails
     * @param RegionOfOriginDetailsType[] $RegionOfOriginDetails
     * @param ShippingPackageDetailsType[] $ShippingPackageDetails
     * @param ShippingCarrierDetailsType[] $ShippingCarrierDetails
     * @param ReturnPolicyDetailsType $ReturnPolicyDetails
     * @param ListingStartPriceDetailsType[] $ListingStartPriceDetails
     * @param SiteBuyerRequirementDetailsType[] $BuyerRequirementDetails
     * @param ListingFeatureDetailsType[] $ListingFeatureDetails
     * @param VariationDetailsType $VariationDetails
     * @param ExcludeShippingLocationDetailsType[] $ExcludeShippingLocationDetails
     * @param \DateTime $UpdateTime
     * @param RecoupmentPolicyDetailsType[] $RecoupmentPolicyDetails
     * @param ShippingCategoryDetailsType[] $ShippingCategoryDetails
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $CountryDetails = null, array $CurrencyDetails = null, array $DispatchTimeMaxDetails = null, array $PaymentOptionDetails = null, array $RegionDetails = null, array $ShippingLocationDetails = null, array $ShippingServiceDetails = null, array $SiteDetails = null, array $TaxJurisdiction = null, array $URLDetails = null, array $TimeZoneDetails = null, array $ItemSpecificDetails = null, array $UnitOfMeasurementDetails = null, array $RegionOfOriginDetails = null, array $ShippingPackageDetails = null, array $ShippingCarrierDetails = null, $ReturnPolicyDetails = null, array $ListingStartPriceDetails = null, array $BuyerRequirementDetails = null, array $ListingFeatureDetails = null, $VariationDetails = null, array $ExcludeShippingLocationDetails = null, \DateTime $UpdateTime = null, array $RecoupmentPolicyDetails = null, array $ShippingCategoryDetails = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->CountryDetails = $CountryDetails;
      $this->CurrencyDetails = $CurrencyDetails;
      $this->DispatchTimeMaxDetails = $DispatchTimeMaxDetails;
      $this->PaymentOptionDetails = $PaymentOptionDetails;
      $this->RegionDetails = $RegionDetails;
      $this->ShippingLocationDetails = $ShippingLocationDetails;
      $this->ShippingServiceDetails = $ShippingServiceDetails;
      $this->SiteDetails = $SiteDetails;
      $this->TaxJurisdiction = $TaxJurisdiction;
      $this->URLDetails = $URLDetails;
      $this->TimeZoneDetails = $TimeZoneDetails;
      $this->ItemSpecificDetails = $ItemSpecificDetails;
      $this->UnitOfMeasurementDetails = $UnitOfMeasurementDetails;
      $this->RegionOfOriginDetails = $RegionOfOriginDetails;
      $this->ShippingPackageDetails = $ShippingPackageDetails;
      $this->ShippingCarrierDetails = $ShippingCarrierDetails;
      $this->ReturnPolicyDetails = $ReturnPolicyDetails;
      $this->ListingStartPriceDetails = $ListingStartPriceDetails;
      $this->BuyerRequirementDetails = $BuyerRequirementDetails;
      $this->ListingFeatureDetails = $ListingFeatureDetails;
      $this->VariationDetails = $VariationDetails;
      $this->ExcludeShippingLocationDetails = $ExcludeShippingLocationDetails;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->RecoupmentPolicyDetails = $RecoupmentPolicyDetails;
      $this->ShippingCategoryDetails = $ShippingCategoryDetails;
    }

    /**
     * @return CountryDetailsType[]
     */
    public function getCountryDetails()
    {
      return $this->CountryDetails;
    }

    /**
     * @param CountryDetailsType[] $CountryDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setCountryDetails(array $CountryDetails)
    {
      $this->CountryDetails = $CountryDetails;
      return $this;
    }

    /**
     * @return CurrencyDetailsType[]
     */
    public function getCurrencyDetails()
    {
      return $this->CurrencyDetails;
    }

    /**
     * @param CurrencyDetailsType[] $CurrencyDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setCurrencyDetails(array $CurrencyDetails)
    {
      $this->CurrencyDetails = $CurrencyDetails;
      return $this;
    }

    /**
     * @return DispatchTimeMaxDetailsType[]
     */
    public function getDispatchTimeMaxDetails()
    {
      return $this->DispatchTimeMaxDetails;
    }

    /**
     * @param DispatchTimeMaxDetailsType[] $DispatchTimeMaxDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setDispatchTimeMaxDetails(array $DispatchTimeMaxDetails)
    {
      $this->DispatchTimeMaxDetails = $DispatchTimeMaxDetails;
      return $this;
    }

    /**
     * @return PaymentOptionDetailsType[]
     */
    public function getPaymentOptionDetails()
    {
      return $this->PaymentOptionDetails;
    }

    /**
     * @param PaymentOptionDetailsType[] $PaymentOptionDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setPaymentOptionDetails(array $PaymentOptionDetails)
    {
      $this->PaymentOptionDetails = $PaymentOptionDetails;
      return $this;
    }

    /**
     * @return RegionDetailsType[]
     */
    public function getRegionDetails()
    {
      return $this->RegionDetails;
    }

    /**
     * @param RegionDetailsType[] $RegionDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setRegionDetails(array $RegionDetails)
    {
      $this->RegionDetails = $RegionDetails;
      return $this;
    }

    /**
     * @return ShippingLocationDetailsType[]
     */
    public function getShippingLocationDetails()
    {
      return $this->ShippingLocationDetails;
    }

    /**
     * @param ShippingLocationDetailsType[] $ShippingLocationDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setShippingLocationDetails(array $ShippingLocationDetails)
    {
      $this->ShippingLocationDetails = $ShippingLocationDetails;
      return $this;
    }

    /**
     * @return ShippingServiceDetailsType[]
     */
    public function getShippingServiceDetails()
    {
      return $this->ShippingServiceDetails;
    }

    /**
     * @param ShippingServiceDetailsType[] $ShippingServiceDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setShippingServiceDetails(array $ShippingServiceDetails)
    {
      $this->ShippingServiceDetails = $ShippingServiceDetails;
      return $this;
    }

    /**
     * @return SiteDetailsType[]
     */
    public function getSiteDetails()
    {
      return $this->SiteDetails;
    }

    /**
     * @param SiteDetailsType[] $SiteDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setSiteDetails(array $SiteDetails)
    {
      $this->SiteDetails = $SiteDetails;
      return $this;
    }

    /**
     * @return TaxJurisdictionType[]
     */
    public function getTaxJurisdiction()
    {
      return $this->TaxJurisdiction;
    }

    /**
     * @param TaxJurisdictionType[] $TaxJurisdiction
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setTaxJurisdiction(array $TaxJurisdiction)
    {
      $this->TaxJurisdiction = $TaxJurisdiction;
      return $this;
    }

    /**
     * @return URLDetailsType[]
     */
    public function getURLDetails()
    {
      return $this->URLDetails;
    }

    /**
     * @param URLDetailsType[] $URLDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setURLDetails(array $URLDetails)
    {
      $this->URLDetails = $URLDetails;
      return $this;
    }

    /**
     * @return TimeZoneDetailsType[]
     */
    public function getTimeZoneDetails()
    {
      return $this->TimeZoneDetails;
    }

    /**
     * @param TimeZoneDetailsType[] $TimeZoneDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setTimeZoneDetails(array $TimeZoneDetails)
    {
      $this->TimeZoneDetails = $TimeZoneDetails;
      return $this;
    }

    /**
     * @return ItemSpecificDetailsType[]
     */
    public function getItemSpecificDetails()
    {
      return $this->ItemSpecificDetails;
    }

    /**
     * @param ItemSpecificDetailsType[] $ItemSpecificDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setItemSpecificDetails(array $ItemSpecificDetails)
    {
      $this->ItemSpecificDetails = $ItemSpecificDetails;
      return $this;
    }

    /**
     * @return UnitOfMeasurementDetailsType[]
     */
    public function getUnitOfMeasurementDetails()
    {
      return $this->UnitOfMeasurementDetails;
    }

    /**
     * @param UnitOfMeasurementDetailsType[] $UnitOfMeasurementDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setUnitOfMeasurementDetails(array $UnitOfMeasurementDetails)
    {
      $this->UnitOfMeasurementDetails = $UnitOfMeasurementDetails;
      return $this;
    }

    /**
     * @return RegionOfOriginDetailsType[]
     */
    public function getRegionOfOriginDetails()
    {
      return $this->RegionOfOriginDetails;
    }

    /**
     * @param RegionOfOriginDetailsType[] $RegionOfOriginDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setRegionOfOriginDetails(array $RegionOfOriginDetails)
    {
      $this->RegionOfOriginDetails = $RegionOfOriginDetails;
      return $this;
    }

    /**
     * @return ShippingPackageDetailsType[]
     */
    public function getShippingPackageDetails()
    {
      return $this->ShippingPackageDetails;
    }

    /**
     * @param ShippingPackageDetailsType[] $ShippingPackageDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setShippingPackageDetails(array $ShippingPackageDetails)
    {
      $this->ShippingPackageDetails = $ShippingPackageDetails;
      return $this;
    }

    /**
     * @return ShippingCarrierDetailsType[]
     */
    public function getShippingCarrierDetails()
    {
      return $this->ShippingCarrierDetails;
    }

    /**
     * @param ShippingCarrierDetailsType[] $ShippingCarrierDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setShippingCarrierDetails(array $ShippingCarrierDetails)
    {
      $this->ShippingCarrierDetails = $ShippingCarrierDetails;
      return $this;
    }

    /**
     * @return ReturnPolicyDetailsType
     */
    public function getReturnPolicyDetails()
    {
      return $this->ReturnPolicyDetails;
    }

    /**
     * @param ReturnPolicyDetailsType $ReturnPolicyDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setReturnPolicyDetails($ReturnPolicyDetails)
    {
      $this->ReturnPolicyDetails = $ReturnPolicyDetails;
      return $this;
    }

    /**
     * @return ListingStartPriceDetailsType[]
     */
    public function getListingStartPriceDetails()
    {
      return $this->ListingStartPriceDetails;
    }

    /**
     * @param ListingStartPriceDetailsType[] $ListingStartPriceDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setListingStartPriceDetails(array $ListingStartPriceDetails)
    {
      $this->ListingStartPriceDetails = $ListingStartPriceDetails;
      return $this;
    }

    /**
     * @return SiteBuyerRequirementDetailsType[]
     */
    public function getBuyerRequirementDetails()
    {
      return $this->BuyerRequirementDetails;
    }

    /**
     * @param SiteBuyerRequirementDetailsType[] $BuyerRequirementDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setBuyerRequirementDetails(array $BuyerRequirementDetails)
    {
      $this->BuyerRequirementDetails = $BuyerRequirementDetails;
      return $this;
    }

    /**
     * @return ListingFeatureDetailsType[]
     */
    public function getListingFeatureDetails()
    {
      return $this->ListingFeatureDetails;
    }

    /**
     * @param ListingFeatureDetailsType[] $ListingFeatureDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setListingFeatureDetails(array $ListingFeatureDetails)
    {
      $this->ListingFeatureDetails = $ListingFeatureDetails;
      return $this;
    }

    /**
     * @return VariationDetailsType
     */
    public function getVariationDetails()
    {
      return $this->VariationDetails;
    }

    /**
     * @param VariationDetailsType $VariationDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setVariationDetails($VariationDetails)
    {
      $this->VariationDetails = $VariationDetails;
      return $this;
    }

    /**
     * @return ExcludeShippingLocationDetailsType[]
     */
    public function getExcludeShippingLocationDetails()
    {
      return $this->ExcludeShippingLocationDetails;
    }

    /**
     * @param ExcludeShippingLocationDetailsType[] $ExcludeShippingLocationDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setExcludeShippingLocationDetails(array $ExcludeShippingLocationDetails)
    {
      $this->ExcludeShippingLocationDetails = $ExcludeShippingLocationDetails;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return RecoupmentPolicyDetailsType[]
     */
    public function getRecoupmentPolicyDetails()
    {
      return $this->RecoupmentPolicyDetails;
    }

    /**
     * @param RecoupmentPolicyDetailsType[] $RecoupmentPolicyDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setRecoupmentPolicyDetails(array $RecoupmentPolicyDetails)
    {
      $this->RecoupmentPolicyDetails = $RecoupmentPolicyDetails;
      return $this;
    }

    /**
     * @return ShippingCategoryDetailsType[]
     */
    public function getShippingCategoryDetails()
    {
      return $this->ShippingCategoryDetails;
    }

    /**
     * @param ShippingCategoryDetailsType[] $ShippingCategoryDetails
     * @return \EbayWsdl\GeteBayDetailsResponseType
     */
    public function setShippingCategoryDetails(array $ShippingCategoryDetails)
    {
      $this->ShippingCategoryDetails = $ShippingCategoryDetails;
      return $this;
    }

}
