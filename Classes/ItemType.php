<?php

namespace EbayWsdl\Classes;

class ItemType
{

    /**
     * @var string $ApplicationData
     */
    protected $ApplicationData = null;

    /**
     * @var AttributeSetArrayType $AttributeSetArray
     */
    protected $AttributeSetArray = null;

    /**
     * @var AttributeArrayType $AttributeArray
     */
    protected $AttributeArray = null;

    /**
     * @var LookupAttributeArrayType $LookupAttributeArray
     */
    protected $LookupAttributeArray = null;

    /**
     * @var boolean $AutoPay
     */
    protected $AutoPay = null;

    /**
     * @var PaymentDetailsType $PaymentDetails
     */
    protected $PaymentDetails = null;

    /**
     * @var BiddingDetailsType $BiddingDetails
     */
    protected $BiddingDetails = null;

    /**
     * @var boolean $MotorsGermanySearchable
     */
    protected $MotorsGermanySearchable = null;

    /**
     * @var BuyerProtectionCodeType $BuyerProtection
     */
    protected $BuyerProtection = null;

    /**
     * @var AmountType $BuyItNowPrice
     */
    protected $BuyItNowPrice = null;

    /**
     * @var boolean $CategoryMappingAllowed
     */
    protected $CategoryMappingAllowed = null;

    /**
     * @var CharityType $Charity
     */
    protected $Charity = null;

    /**
     * @var CountryCodeType $Country
     */
    protected $Country = null;

    /**
     * @var CrossPromotionsType $CrossPromotion
     */
    protected $CrossPromotion = null;

    /**
     * @var CurrencyCodeType $Currency
     */
    protected $Currency = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var DescriptionReviseModeCodeType $DescriptionReviseMode
     */
    protected $DescriptionReviseMode = null;

    /**
     * @var DistanceType $Distance
     */
    protected $Distance = null;

    /**
     * @var int $GiftIcon
     */
    protected $GiftIcon = null;

    /**
     * @var GiftServicesCodeType[] $GiftServices
     */
    protected $GiftServices = null;

    /**
     * @var HitCounterCodeType $HitCounter
     */
    protected $HitCounter = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var ListingDetailsType $ListingDetails
     */
    protected $ListingDetails = null;

    /**
     * @var ListingDesignerType $ListingDesigner
     */
    protected $ListingDesigner = null;

    /**
     * @var string $ListingDuration
     */
    protected $ListingDuration = null;

    /**
     * @var ListingEnhancementsCodeType[] $ListingEnhancement
     */
    protected $ListingEnhancement = null;

    /**
     * @var ListingTypeCodeType $ListingType
     */
    protected $ListingType = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var int $LotSize
     */
    protected $LotSize = null;

    /**
     * @var string $PartnerCode
     */
    protected $PartnerCode = null;

    /**
     * @var string $PartnerName
     */
    protected $PartnerName = null;

    /**
     * @var BuyerPaymentMethodCodeType[] $PaymentMethods
     */
    protected $PaymentMethods = null;

    /**
     * @var string $PayPalEmailAddress
     */
    protected $PayPalEmailAddress = null;

    /**
     * @var CategoryType $PrimaryCategory
     */
    protected $PrimaryCategory = null;

    /**
     * @var boolean $PrivateListing
     */
    protected $PrivateListing = null;

    /**
     * @var ProductListingDetailsType $ProductListingDetails
     */
    protected $ProductListingDetails = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $PrivateNotes
     */
    protected $PrivateNotes = null;

    /**
     * @var string $RegionID
     */
    protected $RegionID = null;

    /**
     * @var boolean $RelistLink
     */
    protected $RelistLink = null;

    /**
     * @var AmountType $ReservePrice
     */
    protected $ReservePrice = null;

    /**
     * @var ReviseStatusType $ReviseStatus
     */
    protected $ReviseStatus = null;

    /**
     * @var \DateTime $ScheduleTime
     */
    protected $ScheduleTime = null;

    /**
     * @var CategoryType $SecondaryCategory
     */
    protected $SecondaryCategory = null;

    /**
     * @var CategoryType $FreeAddedCategory
     */
    protected $FreeAddedCategory = null;

    /**
     * @var UserType $Seller
     */
    protected $Seller = null;

    /**
     * @var SellingStatusType $SellingStatus
     */
    protected $SellingStatus = null;

    /**
     * @var ShippingDetailsType $ShippingDetails
     */
    protected $ShippingDetails = null;

    /**
     * @var string[] $ShipToLocations
     */
    protected $ShipToLocations = null;

    /**
     * @var SiteCodeType $Site
     */
    protected $Site = null;

    /**
     * @var AmountType $StartPrice
     */
    protected $StartPrice = null;

    /**
     * @var StorefrontType $Storefront
     */
    protected $Storefront = null;

    /**
     * @var string $SubTitle
     */
    protected $SubTitle = null;

    /**
     * @var duration $TimeLeft
     */
    protected $TimeLeft = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var UUIDType $UUID
     */
    protected $UUID = null;

    /**
     * @var VATDetailsType $VATDetails
     */
    protected $VATDetails = null;

    /**
     * @var string $SellerVacationNote
     */
    protected $SellerVacationNote = null;

    /**
     * @var int $WatchCount
     */
    protected $WatchCount = null;

    /**
     * @var int $HitCount
     */
    protected $HitCount = null;

    /**
     * @var boolean $DisableBuyerRequirements
     */
    protected $DisableBuyerRequirements = null;

    /**
     * @var BestOfferDetailsType $BestOfferDetails
     */
    protected $BestOfferDetails = null;

    /**
     * @var boolean $LocationDefaulted
     */
    protected $LocationDefaulted = null;

    /**
     * @var boolean $ThirdPartyCheckout
     */
    protected $ThirdPartyCheckout = null;

    /**
     * @var boolean $UseTaxTable
     */
    protected $UseTaxTable = null;

    /**
     * @var boolean $GetItFast
     */
    protected $GetItFast = null;

    /**
     * @var boolean $BuyerResponsibleForShipping
     */
    protected $BuyerResponsibleForShipping = null;

    /**
     * @var boolean $LimitedWarrantyEligible
     */
    protected $LimitedWarrantyEligible = null;

    /**
     * @var string $eBayNotes
     */
    protected $eBayNotes = null;

    /**
     * @var int $QuestionCount
     */
    protected $QuestionCount = null;

    /**
     * @var boolean $Relisted
     */
    protected $Relisted = null;

    /**
     * @var int $QuantityAvailable
     */
    protected $QuantityAvailable = null;

    /**
     * @var SKUType $SKU
     */
    protected $SKU = null;

    /**
     * @var boolean $CategoryBasedAttributesPrefill
     */
    protected $CategoryBasedAttributesPrefill = null;

    /**
     * @var SearchDetailsType $SearchDetails
     */
    protected $SearchDetails = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var boolean $ShippingTermsInDescription
     */
    protected $ShippingTermsInDescription = null;

    /**
     * @var ExternalProductIDType $ExternalProductID
     */
    protected $ExternalProductID = null;

    /**
     * @var string $SellerInventoryID
     */
    protected $SellerInventoryID = null;

    /**
     * @var PictureDetailsType $PictureDetails
     */
    protected $PictureDetails = null;

    /**
     * @var int $DispatchTimeMax
     */
    protected $DispatchTimeMax = null;

    /**
     * @var boolean $SkypeEnabled
     */
    protected $SkypeEnabled = null;

    /**
     * @var string $SkypeID
     */
    protected $SkypeID = null;

    /**
     * @var SkypeContactOptionCodeType[] $SkypeContactOption
     */
    protected $SkypeContactOption = null;

    /**
     * @var boolean $BestOfferEnabled
     */
    protected $BestOfferEnabled = null;

    /**
     * @var boolean $LocalListing
     */
    protected $LocalListing = null;

    /**
     * @var boolean $ThirdPartyCheckoutIntegration
     */
    protected $ThirdPartyCheckoutIntegration = null;

    /**
     * @var ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
     */
    protected $ListingCheckoutRedirectPreference = null;

    /**
     * @var AddressType $SellerContactDetails
     */
    protected $SellerContactDetails = null;

    /**
     * @var int $TotalQuestionCount
     */
    protected $TotalQuestionCount = null;

    /**
     * @var boolean $ProxyItem
     */
    protected $ProxyItem = null;

    /**
     * @var ExtendedContactDetailsType $ExtendedSellerContactDetails
     */
    protected $ExtendedSellerContactDetails = null;

    /**
     * @var int $LeadCount
     */
    protected $LeadCount = null;

    /**
     * @var int $NewLeadCount
     */
    protected $NewLeadCount = null;

    /**
     * @var NameValueListArrayType $ItemSpecifics
     */
    protected $ItemSpecifics = null;

    /**
     * @var string $GroupCategoryID
     */
    protected $GroupCategoryID = null;

    /**
     * @var AmountType $ClassifiedAdPayPerLeadFee
     */
    protected $ClassifiedAdPayPerLeadFee = null;

    /**
     * @var boolean $BidGroupItem
     */
    protected $BidGroupItem = null;

    /**
     * @var BuyerProtectionDetailsType $ApplyBuyerProtection
     */
    protected $ApplyBuyerProtection = null;

    /**
     * @var ListingSubtypeCodeType $ListingSubtype2
     */
    protected $ListingSubtype2 = null;

    /**
     * @var boolean $MechanicalCheckAccepted
     */
    protected $MechanicalCheckAccepted = null;

    /**
     * @var boolean $UpdateSellerInfo
     */
    protected $UpdateSellerInfo = null;

    /**
     * @var boolean $UpdateReturnPolicy
     */
    protected $UpdateReturnPolicy = null;

    /**
     * @var ItemPolicyViolationType $ItemPolicyViolation
     */
    protected $ItemPolicyViolation = null;

    /**
     * @var string[] $CrossBorderTrade
     */
    protected $CrossBorderTrade = null;

    /**
     * @var BusinessSellerDetailsType $BusinessSellerDetails
     */
    protected $BusinessSellerDetails = null;

    /**
     * @var AmountType $BuyerGuaranteePrice
     */
    protected $BuyerGuaranteePrice = null;

    /**
     * @var BuyerRequirementDetailsType $BuyerRequirementDetails
     */
    protected $BuyerRequirementDetails = null;

    /**
     * @var ReturnPolicyType $ReturnPolicy
     */
    protected $ReturnPolicy = null;

    /**
     * @var SiteCodeType[] $PaymentAllowedSite
     */
    protected $PaymentAllowedSite = null;

    /**
     * @var InventoryTrackingMethodCodeType $InventoryTrackingMethod
     */
    protected $InventoryTrackingMethod = null;

    /**
     * @var boolean $IntegratedMerchantCreditCardEnabled
     */
    protected $IntegratedMerchantCreditCardEnabled = null;

    /**
     * @var VariationsType $Variations
     */
    protected $Variations = null;

    /**
     * @var ItemCompatibilityListType $ItemCompatibilityList
     */
    protected $ItemCompatibilityList = null;

    /**
     * @var int $ItemCompatibilityCount
     */
    protected $ItemCompatibilityCount = null;

    /**
     * @var int $ConditionID
     */
    protected $ConditionID = null;

    /**
     * @var string $ConditionDescription
     */
    protected $ConditionDescription = null;

    /**
     * @var string $ConditionDisplayName
     */
    protected $ConditionDisplayName = null;

    /**
     * @var string $TaxCategory
     */
    protected $TaxCategory = null;

    /**
     * @var QuantityAvailableHintCodeType $QuantityAvailableHint
     */
    protected $QuantityAvailableHint = null;

    /**
     * @var int $QuantityThreshold
     */
    protected $QuantityThreshold = null;

    /**
     * @var boolean $PostCheckoutExperienceEnabled
     */
    protected $PostCheckoutExperienceEnabled = null;

    /**
     * @var DiscountPriceInfoType $DiscountPriceInfo
     */
    protected $DiscountPriceInfo = null;

    /**
     * @var boolean $UseRecommendedProduct
     */
    protected $UseRecommendedProduct = null;

    /**
     * @var string $SellerProvidedTitle
     */
    protected $SellerProvidedTitle = null;

    /**
     * @var string $VIN
     */
    protected $VIN = null;

    /**
     * @var string $VINLink
     */
    protected $VINLink = null;

    /**
     * @var string $VRM
     */
    protected $VRM = null;

    /**
     * @var string $VRMLink
     */
    protected $VRMLink = null;

    /**
     * @var QuantityInfoType $QuantityInfo
     */
    protected $QuantityInfo = null;

    /**
     * @var SellerProfilesType $SellerProfiles
     */
    protected $SellerProfiles = null;

    /**
     * @var ShippingServiceCostOverrideListType $ShippingServiceCostOverrideList
     */
    protected $ShippingServiceCostOverrideList = null;

    /**
     * @var ShipPackageDetailsType $ShippingPackageDetails
     */
    protected $ShippingPackageDetails = null;

    /**
     * @var boolean $TopRatedListing
     */
    protected $TopRatedListing = null;

    /**
     * @var AmountType $FloorPrice
     */
    protected $FloorPrice = null;

    /**
     * @var AmountType $CeilingPrice
     */
    protected $CeilingPrice = null;

    /**
     * @var QuantityRestrictionPerBuyerInfoType $QuantityRestrictionPerBuyer
     */
    protected $QuantityRestrictionPerBuyer = null;

    /**
     * @var boolean $IsIntermediatedShippingEligible
     */
    protected $IsIntermediatedShippingEligible = null;

    /**
     * @var UnitInfoType $UnitInfo
     */
    protected $UnitInfo = null;

    /**
     * @var int $RelistParentID
     */
    protected $RelistParentID = null;

    /**
     * @var string $ConditionDefinition
     */
    protected $ConditionDefinition = null;

    /**
     * @var boolean $HideFromSearch
     */
    protected $HideFromSearch = null;

    /**
     * @var ReasonHideFromSearchCodeType $ReasonHideFromSearch
     */
    protected $ReasonHideFromSearch = null;

    /**
     * @var boolean $IncludeRecommendations
     */
    protected $IncludeRecommendations = null;

    /**
     * @var boolean $OutOfStockControl
     */
    protected $OutOfStockControl = null;

    /**
     * @var PickupInStoreDetailsType $PickupInStoreDetails
     */
    protected $PickupInStoreDetails = null;

    /**
     * @var boolean $eBayNowEligible
     */
    protected $eBayNowEligible = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ApplicationData
     * @param AttributeSetArrayType $AttributeSetArray
     * @param AttributeArrayType $AttributeArray
     * @param LookupAttributeArrayType $LookupAttributeArray
     * @param boolean $AutoPay
     * @param PaymentDetailsType $PaymentDetails
     * @param BiddingDetailsType $BiddingDetails
     * @param boolean $MotorsGermanySearchable
     * @param BuyerProtectionCodeType $BuyerProtection
     * @param AmountType $BuyItNowPrice
     * @param boolean $CategoryMappingAllowed
     * @param CharityType $Charity
     * @param CountryCodeType $Country
     * @param CrossPromotionsType $CrossPromotion
     * @param CurrencyCodeType $Currency
     * @param string $Description
     * @param DescriptionReviseModeCodeType $DescriptionReviseMode
     * @param DistanceType $Distance
     * @param int $GiftIcon
     * @param GiftServicesCodeType[] $GiftServices
     * @param HitCounterCodeType $HitCounter
     * @param ItemIDType $ItemID
     * @param ListingDetailsType $ListingDetails
     * @param ListingDesignerType $ListingDesigner
     * @param string $ListingDuration
     * @param ListingEnhancementsCodeType[] $ListingEnhancement
     * @param ListingTypeCodeType $ListingType
     * @param string $Location
     * @param int $LotSize
     * @param string $PartnerCode
     * @param string $PartnerName
     * @param BuyerPaymentMethodCodeType[] $PaymentMethods
     * @param string $PayPalEmailAddress
     * @param CategoryType $PrimaryCategory
     * @param boolean $PrivateListing
     * @param ProductListingDetailsType $ProductListingDetails
     * @param int $Quantity
     * @param string $PrivateNotes
     * @param string $RegionID
     * @param boolean $RelistLink
     * @param AmountType $ReservePrice
     * @param ReviseStatusType $ReviseStatus
     * @param \DateTime $ScheduleTime
     * @param CategoryType $SecondaryCategory
     * @param CategoryType $FreeAddedCategory
     * @param UserType $Seller
     * @param SellingStatusType $SellingStatus
     * @param ShippingDetailsType $ShippingDetails
     * @param string[] $ShipToLocations
     * @param SiteCodeType $Site
     * @param AmountType $StartPrice
     * @param StorefrontType $Storefront
     * @param string $SubTitle
     * @param duration $TimeLeft
     * @param string $Title
     * @param UUIDType $UUID
     * @param VATDetailsType $VATDetails
     * @param string $SellerVacationNote
     * @param int $WatchCount
     * @param int $HitCount
     * @param boolean $DisableBuyerRequirements
     * @param BestOfferDetailsType $BestOfferDetails
     * @param boolean $LocationDefaulted
     * @param boolean $ThirdPartyCheckout
     * @param boolean $UseTaxTable
     * @param boolean $GetItFast
     * @param boolean $BuyerResponsibleForShipping
     * @param boolean $LimitedWarrantyEligible
     * @param string $eBayNotes
     * @param int $QuestionCount
     * @param boolean $Relisted
     * @param int $QuantityAvailable
     * @param SKUType $SKU
     * @param boolean $CategoryBasedAttributesPrefill
     * @param SearchDetailsType $SearchDetails
     * @param string $PostalCode
     * @param boolean $ShippingTermsInDescription
     * @param ExternalProductIDType $ExternalProductID
     * @param string $SellerInventoryID
     * @param PictureDetailsType $PictureDetails
     * @param int $DispatchTimeMax
     * @param boolean $SkypeEnabled
     * @param string $SkypeID
     * @param SkypeContactOptionCodeType[] $SkypeContactOption
     * @param boolean $BestOfferEnabled
     * @param boolean $LocalListing
     * @param boolean $ThirdPartyCheckoutIntegration
     * @param ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
     * @param AddressType $SellerContactDetails
     * @param int $TotalQuestionCount
     * @param boolean $ProxyItem
     * @param ExtendedContactDetailsType $ExtendedSellerContactDetails
     * @param int $LeadCount
     * @param int $NewLeadCount
     * @param NameValueListArrayType $ItemSpecifics
     * @param string $GroupCategoryID
     * @param AmountType $ClassifiedAdPayPerLeadFee
     * @param boolean $BidGroupItem
     * @param BuyerProtectionDetailsType $ApplyBuyerProtection
     * @param ListingSubtypeCodeType $ListingSubtype2
     * @param boolean $MechanicalCheckAccepted
     * @param boolean $UpdateSellerInfo
     * @param boolean $UpdateReturnPolicy
     * @param ItemPolicyViolationType $ItemPolicyViolation
     * @param string[] $CrossBorderTrade
     * @param BusinessSellerDetailsType $BusinessSellerDetails
     * @param AmountType $BuyerGuaranteePrice
     * @param BuyerRequirementDetailsType $BuyerRequirementDetails
     * @param ReturnPolicyType $ReturnPolicy
     * @param SiteCodeType[] $PaymentAllowedSite
     * @param InventoryTrackingMethodCodeType $InventoryTrackingMethod
     * @param boolean $IntegratedMerchantCreditCardEnabled
     * @param VariationsType $Variations
     * @param ItemCompatibilityListType $ItemCompatibilityList
     * @param int $ItemCompatibilityCount
     * @param int $ConditionID
     * @param string $ConditionDescription
     * @param string $ConditionDisplayName
     * @param string $TaxCategory
     * @param QuantityAvailableHintCodeType $QuantityAvailableHint
     * @param int $QuantityThreshold
     * @param boolean $PostCheckoutExperienceEnabled
     * @param DiscountPriceInfoType $DiscountPriceInfo
     * @param boolean $UseRecommendedProduct
     * @param string $SellerProvidedTitle
     * @param string $VIN
     * @param string $VINLink
     * @param string $VRM
     * @param string $VRMLink
     * @param QuantityInfoType $QuantityInfo
     * @param SellerProfilesType $SellerProfiles
     * @param ShippingServiceCostOverrideListType $ShippingServiceCostOverrideList
     * @param ShipPackageDetailsType $ShippingPackageDetails
     * @param boolean $TopRatedListing
     * @param AmountType $FloorPrice
     * @param AmountType $CeilingPrice
     * @param QuantityRestrictionPerBuyerInfoType $QuantityRestrictionPerBuyer
     * @param boolean $IsIntermediatedShippingEligible
     * @param UnitInfoType $UnitInfo
     * @param int $RelistParentID
     * @param string $ConditionDefinition
     * @param boolean $HideFromSearch
     * @param ReasonHideFromSearchCodeType $ReasonHideFromSearch
     * @param boolean $IncludeRecommendations
     * @param boolean $OutOfStockControl
     * @param PickupInStoreDetailsType $PickupInStoreDetails
     * @param boolean $eBayNowEligible
     * @param string $any
     */
    public function __construct($ApplicationData = null, $AttributeSetArray = null, $AttributeArray = null, $LookupAttributeArray = null, $AutoPay = null, $PaymentDetails = null, $BiddingDetails = null, $MotorsGermanySearchable = null, $BuyerProtection = null, $BuyItNowPrice = null, $CategoryMappingAllowed = null, $Charity = null, $Country = null, $CrossPromotion = null, $Currency = null, $Description = null, $DescriptionReviseMode = null, $Distance = null, $GiftIcon = null, array $GiftServices = null, $HitCounter = null, $ItemID = null, $ListingDetails = null, $ListingDesigner = null, $ListingDuration = null, array $ListingEnhancement = null, $ListingType = null, $Location = null, $LotSize = null, $PartnerCode = null, $PartnerName = null, array $PaymentMethods = null, $PayPalEmailAddress = null, $PrimaryCategory = null, $PrivateListing = null, $ProductListingDetails = null, $Quantity = null, $PrivateNotes = null, $RegionID = null, $RelistLink = null, $ReservePrice = null, $ReviseStatus = null, \DateTime $ScheduleTime = null, $SecondaryCategory = null, $FreeAddedCategory = null, $Seller = null, $SellingStatus = null, $ShippingDetails = null, array $ShipToLocations = null, $Site = null, $StartPrice = null, $Storefront = null, $SubTitle = null, $TimeLeft = null, $Title = null, $UUID = null, $VATDetails = null, $SellerVacationNote = null, $WatchCount = null, $HitCount = null, $DisableBuyerRequirements = null, $BestOfferDetails = null, $LocationDefaulted = null, $ThirdPartyCheckout = null, $UseTaxTable = null, $GetItFast = null, $BuyerResponsibleForShipping = null, $LimitedWarrantyEligible = null, $eBayNotes = null, $QuestionCount = null, $Relisted = null, $QuantityAvailable = null, $SKU = null, $CategoryBasedAttributesPrefill = null, $SearchDetails = null, $PostalCode = null, $ShippingTermsInDescription = null, $ExternalProductID = null, $SellerInventoryID = null, $PictureDetails = null, $DispatchTimeMax = null, $SkypeEnabled = null, $SkypeID = null, array $SkypeContactOption = null, $BestOfferEnabled = null, $LocalListing = null, $ThirdPartyCheckoutIntegration = null, $ListingCheckoutRedirectPreference = null, $SellerContactDetails = null, $TotalQuestionCount = null, $ProxyItem = null, $ExtendedSellerContactDetails = null, $LeadCount = null, $NewLeadCount = null, $ItemSpecifics = null, $GroupCategoryID = null, $ClassifiedAdPayPerLeadFee = null, $BidGroupItem = null, $ApplyBuyerProtection = null, $ListingSubtype2 = null, $MechanicalCheckAccepted = null, $UpdateSellerInfo = null, $UpdateReturnPolicy = null, $ItemPolicyViolation = null, array $CrossBorderTrade = null, $BusinessSellerDetails = null, $BuyerGuaranteePrice = null, $BuyerRequirementDetails = null, $ReturnPolicy = null, array $PaymentAllowedSite = null, $InventoryTrackingMethod = null, $IntegratedMerchantCreditCardEnabled = null, $Variations = null, $ItemCompatibilityList = null, $ItemCompatibilityCount = null, $ConditionID = null, $ConditionDescription = null, $ConditionDisplayName = null, $TaxCategory = null, $QuantityAvailableHint = null, $QuantityThreshold = null, $PostCheckoutExperienceEnabled = null, $DiscountPriceInfo = null, $UseRecommendedProduct = null, $SellerProvidedTitle = null, $VIN = null, $VINLink = null, $VRM = null, $VRMLink = null, $QuantityInfo = null, $SellerProfiles = null, $ShippingServiceCostOverrideList = null, $ShippingPackageDetails = null, $TopRatedListing = null, $FloorPrice = null, $CeilingPrice = null, $QuantityRestrictionPerBuyer = null, $IsIntermediatedShippingEligible = null, $UnitInfo = null, $RelistParentID = null, $ConditionDefinition = null, $HideFromSearch = null, $ReasonHideFromSearch = null, $IncludeRecommendations = null, $OutOfStockControl = null, $PickupInStoreDetails = null, $eBayNowEligible = null, $any = null)
    {
      $this->ApplicationData = $ApplicationData;
      $this->AttributeSetArray = $AttributeSetArray;
      $this->AttributeArray = $AttributeArray;
      $this->LookupAttributeArray = $LookupAttributeArray;
      $this->AutoPay = $AutoPay;
      $this->PaymentDetails = $PaymentDetails;
      $this->BiddingDetails = $BiddingDetails;
      $this->MotorsGermanySearchable = $MotorsGermanySearchable;
      $this->BuyerProtection = $BuyerProtection;
      $this->BuyItNowPrice = $BuyItNowPrice;
      $this->CategoryMappingAllowed = $CategoryMappingAllowed;
      $this->Charity = $Charity;
      $this->Country = $Country;
      $this->CrossPromotion = $CrossPromotion;
      $this->Currency = $Currency;
      $this->Description = $Description;
      $this->DescriptionReviseMode = $DescriptionReviseMode;
      $this->Distance = $Distance;
      $this->GiftIcon = $GiftIcon;
      $this->GiftServices = $GiftServices;
      $this->HitCounter = $HitCounter;
      $this->ItemID = $ItemID;
      $this->ListingDetails = $ListingDetails;
      $this->ListingDesigner = $ListingDesigner;
      $this->ListingDuration = $ListingDuration;
      $this->ListingEnhancement = $ListingEnhancement;
      $this->ListingType = $ListingType;
      $this->Location = $Location;
      $this->LotSize = $LotSize;
      $this->PartnerCode = $PartnerCode;
      $this->PartnerName = $PartnerName;
      $this->PaymentMethods = $PaymentMethods;
      $this->PayPalEmailAddress = $PayPalEmailAddress;
      $this->PrimaryCategory = $PrimaryCategory;
      $this->PrivateListing = $PrivateListing;
      $this->ProductListingDetails = $ProductListingDetails;
      $this->Quantity = $Quantity;
      $this->PrivateNotes = $PrivateNotes;
      $this->RegionID = $RegionID;
      $this->RelistLink = $RelistLink;
      $this->ReservePrice = $ReservePrice;
      $this->ReviseStatus = $ReviseStatus;
      $this->ScheduleTime = $ScheduleTime ? $ScheduleTime->format(\DateTime::ATOM) : null;
      $this->SecondaryCategory = $SecondaryCategory;
      $this->FreeAddedCategory = $FreeAddedCategory;
      $this->Seller = $Seller;
      $this->SellingStatus = $SellingStatus;
      $this->ShippingDetails = $ShippingDetails;
      $this->ShipToLocations = $ShipToLocations;
      $this->Site = $Site;
      $this->StartPrice = $StartPrice;
      $this->Storefront = $Storefront;
      $this->SubTitle = $SubTitle;
      $this->TimeLeft = $TimeLeft;
      $this->Title = $Title;
      $this->UUID = $UUID;
      $this->VATDetails = $VATDetails;
      $this->SellerVacationNote = $SellerVacationNote;
      $this->WatchCount = $WatchCount;
      $this->HitCount = $HitCount;
      $this->DisableBuyerRequirements = $DisableBuyerRequirements;
      $this->BestOfferDetails = $BestOfferDetails;
      $this->LocationDefaulted = $LocationDefaulted;
      $this->ThirdPartyCheckout = $ThirdPartyCheckout;
      $this->UseTaxTable = $UseTaxTable;
      $this->GetItFast = $GetItFast;
      $this->BuyerResponsibleForShipping = $BuyerResponsibleForShipping;
      $this->LimitedWarrantyEligible = $LimitedWarrantyEligible;
      $this->eBayNotes = $eBayNotes;
      $this->QuestionCount = $QuestionCount;
      $this->Relisted = $Relisted;
      $this->QuantityAvailable = $QuantityAvailable;
      $this->SKU = $SKU;
      $this->CategoryBasedAttributesPrefill = $CategoryBasedAttributesPrefill;
      $this->SearchDetails = $SearchDetails;
      $this->PostalCode = $PostalCode;
      $this->ShippingTermsInDescription = $ShippingTermsInDescription;
      $this->ExternalProductID = $ExternalProductID;
      $this->SellerInventoryID = $SellerInventoryID;
      $this->PictureDetails = $PictureDetails;
      $this->DispatchTimeMax = $DispatchTimeMax;
      $this->SkypeEnabled = $SkypeEnabled;
      $this->SkypeID = $SkypeID;
      $this->SkypeContactOption = $SkypeContactOption;
      $this->BestOfferEnabled = $BestOfferEnabled;
      $this->LocalListing = $LocalListing;
      $this->ThirdPartyCheckoutIntegration = $ThirdPartyCheckoutIntegration;
      $this->ListingCheckoutRedirectPreference = $ListingCheckoutRedirectPreference;
      $this->SellerContactDetails = $SellerContactDetails;
      $this->TotalQuestionCount = $TotalQuestionCount;
      $this->ProxyItem = $ProxyItem;
      $this->ExtendedSellerContactDetails = $ExtendedSellerContactDetails;
      $this->LeadCount = $LeadCount;
      $this->NewLeadCount = $NewLeadCount;
      $this->ItemSpecifics = $ItemSpecifics;
      $this->GroupCategoryID = $GroupCategoryID;
      $this->ClassifiedAdPayPerLeadFee = $ClassifiedAdPayPerLeadFee;
      $this->BidGroupItem = $BidGroupItem;
      $this->ApplyBuyerProtection = $ApplyBuyerProtection;
      $this->ListingSubtype2 = $ListingSubtype2;
      $this->MechanicalCheckAccepted = $MechanicalCheckAccepted;
      $this->UpdateSellerInfo = $UpdateSellerInfo;
      $this->UpdateReturnPolicy = $UpdateReturnPolicy;
      $this->ItemPolicyViolation = $ItemPolicyViolation;
      $this->CrossBorderTrade = $CrossBorderTrade;
      $this->BusinessSellerDetails = $BusinessSellerDetails;
      $this->BuyerGuaranteePrice = $BuyerGuaranteePrice;
      $this->BuyerRequirementDetails = $BuyerRequirementDetails;
      $this->ReturnPolicy = $ReturnPolicy;
      $this->PaymentAllowedSite = $PaymentAllowedSite;
      $this->InventoryTrackingMethod = $InventoryTrackingMethod;
      $this->IntegratedMerchantCreditCardEnabled = $IntegratedMerchantCreditCardEnabled;
      $this->Variations = $Variations;
      $this->ItemCompatibilityList = $ItemCompatibilityList;
      $this->ItemCompatibilityCount = $ItemCompatibilityCount;
      $this->ConditionID = $ConditionID;
      $this->ConditionDescription = $ConditionDescription;
      $this->ConditionDisplayName = $ConditionDisplayName;
      $this->TaxCategory = $TaxCategory;
      $this->QuantityAvailableHint = $QuantityAvailableHint;
      $this->QuantityThreshold = $QuantityThreshold;
      $this->PostCheckoutExperienceEnabled = $PostCheckoutExperienceEnabled;
      $this->DiscountPriceInfo = $DiscountPriceInfo;
      $this->UseRecommendedProduct = $UseRecommendedProduct;
      $this->SellerProvidedTitle = $SellerProvidedTitle;
      $this->VIN = $VIN;
      $this->VINLink = $VINLink;
      $this->VRM = $VRM;
      $this->VRMLink = $VRMLink;
      $this->QuantityInfo = $QuantityInfo;
      $this->SellerProfiles = $SellerProfiles;
      $this->ShippingServiceCostOverrideList = $ShippingServiceCostOverrideList;
      $this->ShippingPackageDetails = $ShippingPackageDetails;
      $this->TopRatedListing = $TopRatedListing;
      $this->FloorPrice = $FloorPrice;
      $this->CeilingPrice = $CeilingPrice;
      $this->QuantityRestrictionPerBuyer = $QuantityRestrictionPerBuyer;
      $this->IsIntermediatedShippingEligible = $IsIntermediatedShippingEligible;
      $this->UnitInfo = $UnitInfo;
      $this->RelistParentID = $RelistParentID;
      $this->ConditionDefinition = $ConditionDefinition;
      $this->HideFromSearch = $HideFromSearch;
      $this->ReasonHideFromSearch = $ReasonHideFromSearch;
      $this->IncludeRecommendations = $IncludeRecommendations;
      $this->OutOfStockControl = $OutOfStockControl;
      $this->PickupInStoreDetails = $PickupInStoreDetails;
      $this->eBayNowEligible = $eBayNowEligible;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getApplicationData()
    {
      return $this->ApplicationData;
    }

    /**
     * @param string $ApplicationData
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setApplicationData($ApplicationData)
    {
      $this->ApplicationData = $ApplicationData;
      return $this;
    }

    /**
     * @return AttributeSetArrayType
     */
    public function getAttributeSetArray()
    {
      return $this->AttributeSetArray;
    }

    /**
     * @param AttributeSetArrayType $AttributeSetArray
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setAttributeSetArray($AttributeSetArray)
    {
      $this->AttributeSetArray = $AttributeSetArray;
      return $this;
    }

    /**
     * @return AttributeArrayType
     */
    public function getAttributeArray()
    {
      return $this->AttributeArray;
    }

    /**
     * @param AttributeArrayType $AttributeArray
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setAttributeArray($AttributeArray)
    {
      $this->AttributeArray = $AttributeArray;
      return $this;
    }

    /**
     * @return LookupAttributeArrayType
     */
    public function getLookupAttributeArray()
    {
      return $this->LookupAttributeArray;
    }

    /**
     * @param LookupAttributeArrayType $LookupAttributeArray
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setLookupAttributeArray($LookupAttributeArray)
    {
      $this->LookupAttributeArray = $LookupAttributeArray;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoPay()
    {
      return $this->AutoPay;
    }

    /**
     * @param boolean $AutoPay
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setAutoPay($AutoPay)
    {
      $this->AutoPay = $AutoPay;
      return $this;
    }

    /**
     * @return PaymentDetailsType
     */
    public function getPaymentDetails()
    {
      return $this->PaymentDetails;
    }

    /**
     * @param PaymentDetailsType $PaymentDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPaymentDetails($PaymentDetails)
    {
      $this->PaymentDetails = $PaymentDetails;
      return $this;
    }

    /**
     * @return BiddingDetailsType
     */
    public function getBiddingDetails()
    {
      return $this->BiddingDetails;
    }

    /**
     * @param BiddingDetailsType $BiddingDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setBiddingDetails($BiddingDetails)
    {
      $this->BiddingDetails = $BiddingDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMotorsGermanySearchable()
    {
      return $this->MotorsGermanySearchable;
    }

    /**
     * @param boolean $MotorsGermanySearchable
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setMotorsGermanySearchable($MotorsGermanySearchable)
    {
      $this->MotorsGermanySearchable = $MotorsGermanySearchable;
      return $this;
    }

    /**
     * @return BuyerProtectionCodeType
     */
    public function getBuyerProtection()
    {
      return $this->BuyerProtection;
    }

    /**
     * @param BuyerProtectionCodeType $BuyerProtection
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setBuyerProtection($BuyerProtection)
    {
      $this->BuyerProtection = $BuyerProtection;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getBuyItNowPrice()
    {
      return $this->BuyItNowPrice;
    }

    /**
     * @param AmountType $BuyItNowPrice
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setBuyItNowPrice($BuyItNowPrice)
    {
      $this->BuyItNowPrice = $BuyItNowPrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCategoryMappingAllowed()
    {
      return $this->CategoryMappingAllowed;
    }

    /**
     * @param boolean $CategoryMappingAllowed
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setCategoryMappingAllowed($CategoryMappingAllowed)
    {
      $this->CategoryMappingAllowed = $CategoryMappingAllowed;
      return $this;
    }

    /**
     * @return CharityType
     */
    public function getCharity()
    {
      return $this->Charity;
    }

    /**
     * @param CharityType $Charity
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setCharity($Charity)
    {
      $this->Charity = $Charity;
      return $this;
    }

    /**
     * @return CountryCodeType
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param CountryCodeType $Country
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return CrossPromotionsType
     */
    public function getCrossPromotion()
    {
      return $this->CrossPromotion;
    }

    /**
     * @param CrossPromotionsType $CrossPromotion
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setCrossPromotion($CrossPromotion)
    {
      $this->CrossPromotion = $CrossPromotion;
      return $this;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param CurrencyCodeType $Currency
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return DescriptionReviseModeCodeType
     */
    public function getDescriptionReviseMode()
    {
      return $this->DescriptionReviseMode;
    }

    /**
     * @param DescriptionReviseModeCodeType $DescriptionReviseMode
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setDescriptionReviseMode($DescriptionReviseMode)
    {
      $this->DescriptionReviseMode = $DescriptionReviseMode;
      return $this;
    }

    /**
     * @return DistanceType
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param DistanceType $Distance
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

    /**
     * @return int
     */
    public function getGiftIcon()
    {
      return $this->GiftIcon;
    }

    /**
     * @param int $GiftIcon
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setGiftIcon($GiftIcon)
    {
      $this->GiftIcon = $GiftIcon;
      return $this;
    }

    /**
     * @return GiftServicesCodeType[]
     */
    public function getGiftServices()
    {
      return $this->GiftServices;
    }

    /**
     * @param GiftServicesCodeType[] $GiftServices
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setGiftServices(array $GiftServices)
    {
      $this->GiftServices = $GiftServices;
      return $this;
    }

    /**
     * @return HitCounterCodeType
     */
    public function getHitCounter()
    {
      return $this->HitCounter;
    }

    /**
     * @param HitCounterCodeType $HitCounter
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setHitCounter($HitCounter)
    {
      $this->HitCounter = $HitCounter;
      return $this;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return ListingDetailsType
     */
    public function getListingDetails()
    {
      return $this->ListingDetails;
    }

    /**
     * @param ListingDetailsType $ListingDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setListingDetails($ListingDetails)
    {
      $this->ListingDetails = $ListingDetails;
      return $this;
    }

    /**
     * @return ListingDesignerType
     */
    public function getListingDesigner()
    {
      return $this->ListingDesigner;
    }

    /**
     * @param ListingDesignerType $ListingDesigner
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setListingDesigner($ListingDesigner)
    {
      $this->ListingDesigner = $ListingDesigner;
      return $this;
    }

    /**
     * @return string
     */
    public function getListingDuration()
    {
      return $this->ListingDuration;
    }

    /**
     * @param string $ListingDuration
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setListingDuration($ListingDuration)
    {
      $this->ListingDuration = $ListingDuration;
      return $this;
    }

    /**
     * @return ListingEnhancementsCodeType[]
     */
    public function getListingEnhancement()
    {
      return $this->ListingEnhancement;
    }

    /**
     * @param ListingEnhancementsCodeType[] $ListingEnhancement
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setListingEnhancement(array $ListingEnhancement)
    {
      $this->ListingEnhancement = $ListingEnhancement;
      return $this;
    }

    /**
     * @return ListingTypeCodeType
     */
    public function getListingType()
    {
      return $this->ListingType;
    }

    /**
     * @param ListingTypeCodeType $ListingType
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setListingType($ListingType)
    {
      $this->ListingType = $ListingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return int
     */
    public function getLotSize()
    {
      return $this->LotSize;
    }

    /**
     * @param int $LotSize
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setLotSize($LotSize)
    {
      $this->LotSize = $LotSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerCode()
    {
      return $this->PartnerCode;
    }

    /**
     * @param string $PartnerCode
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPartnerCode($PartnerCode)
    {
      $this->PartnerCode = $PartnerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerName()
    {
      return $this->PartnerName;
    }

    /**
     * @param string $PartnerName
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPartnerName($PartnerName)
    {
      $this->PartnerName = $PartnerName;
      return $this;
    }

    /**
     * @return BuyerPaymentMethodCodeType[]
     */
    public function getPaymentMethods()
    {
      return $this->PaymentMethods;
    }

    /**
     * @param BuyerPaymentMethodCodeType[] $PaymentMethods
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPaymentMethods(array $PaymentMethods)
    {
      $this->PaymentMethods = $PaymentMethods;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayPalEmailAddress()
    {
      return $this->PayPalEmailAddress;
    }

    /**
     * @param string $PayPalEmailAddress
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPayPalEmailAddress($PayPalEmailAddress)
    {
      $this->PayPalEmailAddress = $PayPalEmailAddress;
      return $this;
    }

    /**
     * @return CategoryType
     */
    public function getPrimaryCategory()
    {
      return $this->PrimaryCategory;
    }

    /**
     * @param CategoryType $PrimaryCategory
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPrimaryCategory($PrimaryCategory)
    {
      $this->PrimaryCategory = $PrimaryCategory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrivateListing()
    {
      return $this->PrivateListing;
    }

    /**
     * @param boolean $PrivateListing
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPrivateListing($PrivateListing)
    {
      $this->PrivateListing = $PrivateListing;
      return $this;
    }

    /**
     * @return ProductListingDetailsType
     */
    public function getProductListingDetails()
    {
      return $this->ProductListingDetails;
    }

    /**
     * @param ProductListingDetailsType $ProductListingDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setProductListingDetails($ProductListingDetails)
    {
      $this->ProductListingDetails = $ProductListingDetails;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrivateNotes()
    {
      return $this->PrivateNotes;
    }

    /**
     * @param string $PrivateNotes
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPrivateNotes($PrivateNotes)
    {
      $this->PrivateNotes = $PrivateNotes;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegionID()
    {
      return $this->RegionID;
    }

    /**
     * @param string $RegionID
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setRegionID($RegionID)
    {
      $this->RegionID = $RegionID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRelistLink()
    {
      return $this->RelistLink;
    }

    /**
     * @param boolean $RelistLink
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setRelistLink($RelistLink)
    {
      $this->RelistLink = $RelistLink;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getReservePrice()
    {
      return $this->ReservePrice;
    }

    /**
     * @param AmountType $ReservePrice
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setReservePrice($ReservePrice)
    {
      $this->ReservePrice = $ReservePrice;
      return $this;
    }

    /**
     * @return ReviseStatusType
     */
    public function getReviseStatus()
    {
      return $this->ReviseStatus;
    }

    /**
     * @param ReviseStatusType $ReviseStatus
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setReviseStatus($ReviseStatus)
    {
      $this->ReviseStatus = $ReviseStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduleTime()
    {
      if ($this->ScheduleTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScheduleTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScheduleTime
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setScheduleTime(\DateTime $ScheduleTime)
    {
      $this->ScheduleTime = $ScheduleTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return CategoryType
     */
    public function getSecondaryCategory()
    {
      return $this->SecondaryCategory;
    }

    /**
     * @param CategoryType $SecondaryCategory
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSecondaryCategory($SecondaryCategory)
    {
      $this->SecondaryCategory = $SecondaryCategory;
      return $this;
    }

    /**
     * @return CategoryType
     */
    public function getFreeAddedCategory()
    {
      return $this->FreeAddedCategory;
    }

    /**
     * @param CategoryType $FreeAddedCategory
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setFreeAddedCategory($FreeAddedCategory)
    {
      $this->FreeAddedCategory = $FreeAddedCategory;
      return $this;
    }

    /**
     * @return UserType
     */
    public function getSeller()
    {
      return $this->Seller;
    }

    /**
     * @param UserType $Seller
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSeller($Seller)
    {
      $this->Seller = $Seller;
      return $this;
    }

    /**
     * @return SellingStatusType
     */
    public function getSellingStatus()
    {
      return $this->SellingStatus;
    }

    /**
     * @param SellingStatusType $SellingStatus
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSellingStatus($SellingStatus)
    {
      $this->SellingStatus = $SellingStatus;
      return $this;
    }

    /**
     * @return ShippingDetailsType
     */
    public function getShippingDetails()
    {
      return $this->ShippingDetails;
    }

    /**
     * @param ShippingDetailsType $ShippingDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setShippingDetails($ShippingDetails)
    {
      $this->ShippingDetails = $ShippingDetails;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getShipToLocations()
    {
      return $this->ShipToLocations;
    }

    /**
     * @param string[] $ShipToLocations
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setShipToLocations(array $ShipToLocations)
    {
      $this->ShipToLocations = $ShipToLocations;
      return $this;
    }

    /**
     * @return SiteCodeType
     */
    public function getSite()
    {
      return $this->Site;
    }

    /**
     * @param SiteCodeType $Site
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSite($Site)
    {
      $this->Site = $Site;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getStartPrice()
    {
      return $this->StartPrice;
    }

    /**
     * @param AmountType $StartPrice
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setStartPrice($StartPrice)
    {
      $this->StartPrice = $StartPrice;
      return $this;
    }

    /**
     * @return StorefrontType
     */
    public function getStorefront()
    {
      return $this->Storefront;
    }

    /**
     * @param StorefrontType $Storefront
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setStorefront($Storefront)
    {
      $this->Storefront = $Storefront;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubTitle()
    {
      return $this->SubTitle;
    }

    /**
     * @param string $SubTitle
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSubTitle($SubTitle)
    {
      $this->SubTitle = $SubTitle;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTimeLeft()
    {
      return $this->TimeLeft;
    }

    /**
     * @param duration $TimeLeft
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setTimeLeft($TimeLeft)
    {
      $this->TimeLeft = $TimeLeft;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return UUIDType
     */
    public function getUUID()
    {
      return $this->UUID;
    }

    /**
     * @param UUIDType $UUID
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setUUID($UUID)
    {
      $this->UUID = $UUID;
      return $this;
    }

    /**
     * @return VATDetailsType
     */
    public function getVATDetails()
    {
      return $this->VATDetails;
    }

    /**
     * @param VATDetailsType $VATDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setVATDetails($VATDetails)
    {
      $this->VATDetails = $VATDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerVacationNote()
    {
      return $this->SellerVacationNote;
    }

    /**
     * @param string $SellerVacationNote
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSellerVacationNote($SellerVacationNote)
    {
      $this->SellerVacationNote = $SellerVacationNote;
      return $this;
    }

    /**
     * @return int
     */
    public function getWatchCount()
    {
      return $this->WatchCount;
    }

    /**
     * @param int $WatchCount
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setWatchCount($WatchCount)
    {
      $this->WatchCount = $WatchCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getHitCount()
    {
      return $this->HitCount;
    }

    /**
     * @param int $HitCount
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setHitCount($HitCount)
    {
      $this->HitCount = $HitCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableBuyerRequirements()
    {
      return $this->DisableBuyerRequirements;
    }

    /**
     * @param boolean $DisableBuyerRequirements
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setDisableBuyerRequirements($DisableBuyerRequirements)
    {
      $this->DisableBuyerRequirements = $DisableBuyerRequirements;
      return $this;
    }

    /**
     * @return BestOfferDetailsType
     */
    public function getBestOfferDetails()
    {
      return $this->BestOfferDetails;
    }

    /**
     * @param BestOfferDetailsType $BestOfferDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setBestOfferDetails($BestOfferDetails)
    {
      $this->BestOfferDetails = $BestOfferDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocationDefaulted()
    {
      return $this->LocationDefaulted;
    }

    /**
     * @param boolean $LocationDefaulted
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setLocationDefaulted($LocationDefaulted)
    {
      $this->LocationDefaulted = $LocationDefaulted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThirdPartyCheckout()
    {
      return $this->ThirdPartyCheckout;
    }

    /**
     * @param boolean $ThirdPartyCheckout
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setThirdPartyCheckout($ThirdPartyCheckout)
    {
      $this->ThirdPartyCheckout = $ThirdPartyCheckout;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseTaxTable()
    {
      return $this->UseTaxTable;
    }

    /**
     * @param boolean $UseTaxTable
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setUseTaxTable($UseTaxTable)
    {
      $this->UseTaxTable = $UseTaxTable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGetItFast()
    {
      return $this->GetItFast;
    }

    /**
     * @param boolean $GetItFast
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setGetItFast($GetItFast)
    {
      $this->GetItFast = $GetItFast;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBuyerResponsibleForShipping()
    {
      return $this->BuyerResponsibleForShipping;
    }

    /**
     * @param boolean $BuyerResponsibleForShipping
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setBuyerResponsibleForShipping($BuyerResponsibleForShipping)
    {
      $this->BuyerResponsibleForShipping = $BuyerResponsibleForShipping;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLimitedWarrantyEligible()
    {
      return $this->LimitedWarrantyEligible;
    }

    /**
     * @param boolean $LimitedWarrantyEligible
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setLimitedWarrantyEligible($LimitedWarrantyEligible)
    {
      $this->LimitedWarrantyEligible = $LimitedWarrantyEligible;
      return $this;
    }

    /**
     * @return string
     */
    public function getEBayNotes()
    {
      return $this->eBayNotes;
    }

    /**
     * @param string $eBayNotes
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setEBayNotes($eBayNotes)
    {
      $this->eBayNotes = $eBayNotes;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuestionCount()
    {
      return $this->QuestionCount;
    }

    /**
     * @param int $QuestionCount
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setQuestionCount($QuestionCount)
    {
      $this->QuestionCount = $QuestionCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRelisted()
    {
      return $this->Relisted;
    }

    /**
     * @param boolean $Relisted
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setRelisted($Relisted)
    {
      $this->Relisted = $Relisted;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityAvailable()
    {
      return $this->QuantityAvailable;
    }

    /**
     * @param int $QuantityAvailable
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setQuantityAvailable($QuantityAvailable)
    {
      $this->QuantityAvailable = $QuantityAvailable;
      return $this;
    }

    /**
     * @return SKUType
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param SKUType $SKU
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCategoryBasedAttributesPrefill()
    {
      return $this->CategoryBasedAttributesPrefill;
    }

    /**
     * @param boolean $CategoryBasedAttributesPrefill
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setCategoryBasedAttributesPrefill($CategoryBasedAttributesPrefill)
    {
      $this->CategoryBasedAttributesPrefill = $CategoryBasedAttributesPrefill;
      return $this;
    }

    /**
     * @return SearchDetailsType
     */
    public function getSearchDetails()
    {
      return $this->SearchDetails;
    }

    /**
     * @param SearchDetailsType $SearchDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSearchDetails($SearchDetails)
    {
      $this->SearchDetails = $SearchDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShippingTermsInDescription()
    {
      return $this->ShippingTermsInDescription;
    }

    /**
     * @param boolean $ShippingTermsInDescription
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setShippingTermsInDescription($ShippingTermsInDescription)
    {
      $this->ShippingTermsInDescription = $ShippingTermsInDescription;
      return $this;
    }

    /**
     * @return ExternalProductIDType
     */
    public function getExternalProductID()
    {
      return $this->ExternalProductID;
    }

    /**
     * @param ExternalProductIDType $ExternalProductID
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setExternalProductID($ExternalProductID)
    {
      $this->ExternalProductID = $ExternalProductID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerInventoryID()
    {
      return $this->SellerInventoryID;
    }

    /**
     * @param string $SellerInventoryID
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSellerInventoryID($SellerInventoryID)
    {
      $this->SellerInventoryID = $SellerInventoryID;
      return $this;
    }

    /**
     * @return PictureDetailsType
     */
    public function getPictureDetails()
    {
      return $this->PictureDetails;
    }

    /**
     * @param PictureDetailsType $PictureDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPictureDetails($PictureDetails)
    {
      $this->PictureDetails = $PictureDetails;
      return $this;
    }

    /**
     * @return int
     */
    public function getDispatchTimeMax()
    {
      return $this->DispatchTimeMax;
    }

    /**
     * @param int $DispatchTimeMax
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setDispatchTimeMax($DispatchTimeMax)
    {
      $this->DispatchTimeMax = $DispatchTimeMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSkypeEnabled()
    {
      return $this->SkypeEnabled;
    }

    /**
     * @param boolean $SkypeEnabled
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSkypeEnabled($SkypeEnabled)
    {
      $this->SkypeEnabled = $SkypeEnabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkypeID()
    {
      return $this->SkypeID;
    }

    /**
     * @param string $SkypeID
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSkypeID($SkypeID)
    {
      $this->SkypeID = $SkypeID;
      return $this;
    }

    /**
     * @return SkypeContactOptionCodeType[]
     */
    public function getSkypeContactOption()
    {
      return $this->SkypeContactOption;
    }

    /**
     * @param SkypeContactOptionCodeType[] $SkypeContactOption
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSkypeContactOption(array $SkypeContactOption)
    {
      $this->SkypeContactOption = $SkypeContactOption;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBestOfferEnabled()
    {
      return $this->BestOfferEnabled;
    }

    /**
     * @param boolean $BestOfferEnabled
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setBestOfferEnabled($BestOfferEnabled)
    {
      $this->BestOfferEnabled = $BestOfferEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalListing()
    {
      return $this->LocalListing;
    }

    /**
     * @param boolean $LocalListing
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setLocalListing($LocalListing)
    {
      $this->LocalListing = $LocalListing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThirdPartyCheckoutIntegration()
    {
      return $this->ThirdPartyCheckoutIntegration;
    }

    /**
     * @param boolean $ThirdPartyCheckoutIntegration
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setThirdPartyCheckoutIntegration($ThirdPartyCheckoutIntegration)
    {
      $this->ThirdPartyCheckoutIntegration = $ThirdPartyCheckoutIntegration;
      return $this;
    }

    /**
     * @return ListingCheckoutRedirectPreferenceType
     */
    public function getListingCheckoutRedirectPreference()
    {
      return $this->ListingCheckoutRedirectPreference;
    }

    /**
     * @param ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setListingCheckoutRedirectPreference($ListingCheckoutRedirectPreference)
    {
      $this->ListingCheckoutRedirectPreference = $ListingCheckoutRedirectPreference;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getSellerContactDetails()
    {
      return $this->SellerContactDetails;
    }

    /**
     * @param AddressType $SellerContactDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSellerContactDetails($SellerContactDetails)
    {
      $this->SellerContactDetails = $SellerContactDetails;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalQuestionCount()
    {
      return $this->TotalQuestionCount;
    }

    /**
     * @param int $TotalQuestionCount
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setTotalQuestionCount($TotalQuestionCount)
    {
      $this->TotalQuestionCount = $TotalQuestionCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProxyItem()
    {
      return $this->ProxyItem;
    }

    /**
     * @param boolean $ProxyItem
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setProxyItem($ProxyItem)
    {
      $this->ProxyItem = $ProxyItem;
      return $this;
    }

    /**
     * @return ExtendedContactDetailsType
     */
    public function getExtendedSellerContactDetails()
    {
      return $this->ExtendedSellerContactDetails;
    }

    /**
     * @param ExtendedContactDetailsType $ExtendedSellerContactDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setExtendedSellerContactDetails($ExtendedSellerContactDetails)
    {
      $this->ExtendedSellerContactDetails = $ExtendedSellerContactDetails;
      return $this;
    }

    /**
     * @return int
     */
    public function getLeadCount()
    {
      return $this->LeadCount;
    }

    /**
     * @param int $LeadCount
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setLeadCount($LeadCount)
    {
      $this->LeadCount = $LeadCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewLeadCount()
    {
      return $this->NewLeadCount;
    }

    /**
     * @param int $NewLeadCount
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setNewLeadCount($NewLeadCount)
    {
      $this->NewLeadCount = $NewLeadCount;
      return $this;
    }

    /**
     * @return NameValueListArrayType
     */
    public function getItemSpecifics()
    {
      return $this->ItemSpecifics;
    }

    /**
     * @param NameValueListArrayType $ItemSpecifics
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setItemSpecifics($ItemSpecifics)
    {
      $this->ItemSpecifics = $ItemSpecifics;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupCategoryID()
    {
      return $this->GroupCategoryID;
    }

    /**
     * @param string $GroupCategoryID
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setGroupCategoryID($GroupCategoryID)
    {
      $this->GroupCategoryID = $GroupCategoryID;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getClassifiedAdPayPerLeadFee()
    {
      return $this->ClassifiedAdPayPerLeadFee;
    }

    /**
     * @param AmountType $ClassifiedAdPayPerLeadFee
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setClassifiedAdPayPerLeadFee($ClassifiedAdPayPerLeadFee)
    {
      $this->ClassifiedAdPayPerLeadFee = $ClassifiedAdPayPerLeadFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBidGroupItem()
    {
      return $this->BidGroupItem;
    }

    /**
     * @param boolean $BidGroupItem
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setBidGroupItem($BidGroupItem)
    {
      $this->BidGroupItem = $BidGroupItem;
      return $this;
    }

    /**
     * @return BuyerProtectionDetailsType
     */
    public function getApplyBuyerProtection()
    {
      return $this->ApplyBuyerProtection;
    }

    /**
     * @param BuyerProtectionDetailsType $ApplyBuyerProtection
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setApplyBuyerProtection($ApplyBuyerProtection)
    {
      $this->ApplyBuyerProtection = $ApplyBuyerProtection;
      return $this;
    }

    /**
     * @return ListingSubtypeCodeType
     */
    public function getListingSubtype2()
    {
      return $this->ListingSubtype2;
    }

    /**
     * @param ListingSubtypeCodeType $ListingSubtype2
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setListingSubtype2($ListingSubtype2)
    {
      $this->ListingSubtype2 = $ListingSubtype2;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMechanicalCheckAccepted()
    {
      return $this->MechanicalCheckAccepted;
    }

    /**
     * @param boolean $MechanicalCheckAccepted
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setMechanicalCheckAccepted($MechanicalCheckAccepted)
    {
      $this->MechanicalCheckAccepted = $MechanicalCheckAccepted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateSellerInfo()
    {
      return $this->UpdateSellerInfo;
    }

    /**
     * @param boolean $UpdateSellerInfo
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setUpdateSellerInfo($UpdateSellerInfo)
    {
      $this->UpdateSellerInfo = $UpdateSellerInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateReturnPolicy()
    {
      return $this->UpdateReturnPolicy;
    }

    /**
     * @param boolean $UpdateReturnPolicy
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setUpdateReturnPolicy($UpdateReturnPolicy)
    {
      $this->UpdateReturnPolicy = $UpdateReturnPolicy;
      return $this;
    }

    /**
     * @return ItemPolicyViolationType
     */
    public function getItemPolicyViolation()
    {
      return $this->ItemPolicyViolation;
    }

    /**
     * @param ItemPolicyViolationType $ItemPolicyViolation
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setItemPolicyViolation($ItemPolicyViolation)
    {
      $this->ItemPolicyViolation = $ItemPolicyViolation;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCrossBorderTrade()
    {
      return $this->CrossBorderTrade;
    }

    /**
     * @param string[] $CrossBorderTrade
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setCrossBorderTrade(array $CrossBorderTrade)
    {
      $this->CrossBorderTrade = $CrossBorderTrade;
      return $this;
    }

    /**
     * @return BusinessSellerDetailsType
     */
    public function getBusinessSellerDetails()
    {
      return $this->BusinessSellerDetails;
    }

    /**
     * @param BusinessSellerDetailsType $BusinessSellerDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setBusinessSellerDetails($BusinessSellerDetails)
    {
      $this->BusinessSellerDetails = $BusinessSellerDetails;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getBuyerGuaranteePrice()
    {
      return $this->BuyerGuaranteePrice;
    }

    /**
     * @param AmountType $BuyerGuaranteePrice
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setBuyerGuaranteePrice($BuyerGuaranteePrice)
    {
      $this->BuyerGuaranteePrice = $BuyerGuaranteePrice;
      return $this;
    }

    /**
     * @return BuyerRequirementDetailsType
     */
    public function getBuyerRequirementDetails()
    {
      return $this->BuyerRequirementDetails;
    }

    /**
     * @param BuyerRequirementDetailsType $BuyerRequirementDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setBuyerRequirementDetails($BuyerRequirementDetails)
    {
      $this->BuyerRequirementDetails = $BuyerRequirementDetails;
      return $this;
    }

    /**
     * @return ReturnPolicyType
     */
    public function getReturnPolicy()
    {
      return $this->ReturnPolicy;
    }

    /**
     * @param ReturnPolicyType $ReturnPolicy
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setReturnPolicy($ReturnPolicy)
    {
      $this->ReturnPolicy = $ReturnPolicy;
      return $this;
    }

    /**
     * @return SiteCodeType[]
     */
    public function getPaymentAllowedSite()
    {
      return $this->PaymentAllowedSite;
    }

    /**
     * @param SiteCodeType[] $PaymentAllowedSite
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPaymentAllowedSite(array $PaymentAllowedSite)
    {
      $this->PaymentAllowedSite = $PaymentAllowedSite;
      return $this;
    }

    /**
     * @return InventoryTrackingMethodCodeType
     */
    public function getInventoryTrackingMethod()
    {
      return $this->InventoryTrackingMethod;
    }

    /**
     * @param InventoryTrackingMethodCodeType $InventoryTrackingMethod
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setInventoryTrackingMethod($InventoryTrackingMethod)
    {
      $this->InventoryTrackingMethod = $InventoryTrackingMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
      return $this->IntegratedMerchantCreditCardEnabled;
    }

    /**
     * @param boolean $IntegratedMerchantCreditCardEnabled
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setIntegratedMerchantCreditCardEnabled($IntegratedMerchantCreditCardEnabled)
    {
      $this->IntegratedMerchantCreditCardEnabled = $IntegratedMerchantCreditCardEnabled;
      return $this;
    }

    /**
     * @return VariationsType
     */
    public function getVariations()
    {
      return $this->Variations;
    }

    /**
     * @param VariationsType $Variations
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setVariations($Variations)
    {
      $this->Variations = $Variations;
      return $this;
    }

    /**
     * @return ItemCompatibilityListType
     */
    public function getItemCompatibilityList()
    {
      return $this->ItemCompatibilityList;
    }

    /**
     * @param ItemCompatibilityListType $ItemCompatibilityList
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setItemCompatibilityList($ItemCompatibilityList)
    {
      $this->ItemCompatibilityList = $ItemCompatibilityList;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemCompatibilityCount()
    {
      return $this->ItemCompatibilityCount;
    }

    /**
     * @param int $ItemCompatibilityCount
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setItemCompatibilityCount($ItemCompatibilityCount)
    {
      $this->ItemCompatibilityCount = $ItemCompatibilityCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getConditionID()
    {
      return $this->ConditionID;
    }

    /**
     * @param int $ConditionID
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setConditionID($ConditionID)
    {
      $this->ConditionID = $ConditionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getConditionDescription()
    {
      return $this->ConditionDescription;
    }

    /**
     * @param string $ConditionDescription
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setConditionDescription($ConditionDescription)
    {
      $this->ConditionDescription = $ConditionDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getConditionDisplayName()
    {
      return $this->ConditionDisplayName;
    }

    /**
     * @param string $ConditionDisplayName
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setConditionDisplayName($ConditionDisplayName)
    {
      $this->ConditionDisplayName = $ConditionDisplayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxCategory()
    {
      return $this->TaxCategory;
    }

    /**
     * @param string $TaxCategory
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setTaxCategory($TaxCategory)
    {
      $this->TaxCategory = $TaxCategory;
      return $this;
    }

    /**
     * @return QuantityAvailableHintCodeType
     */
    public function getQuantityAvailableHint()
    {
      return $this->QuantityAvailableHint;
    }

    /**
     * @param QuantityAvailableHintCodeType $QuantityAvailableHint
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setQuantityAvailableHint($QuantityAvailableHint)
    {
      $this->QuantityAvailableHint = $QuantityAvailableHint;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityThreshold()
    {
      return $this->QuantityThreshold;
    }

    /**
     * @param int $QuantityThreshold
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setQuantityThreshold($QuantityThreshold)
    {
      $this->QuantityThreshold = $QuantityThreshold;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPostCheckoutExperienceEnabled()
    {
      return $this->PostCheckoutExperienceEnabled;
    }

    /**
     * @param boolean $PostCheckoutExperienceEnabled
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPostCheckoutExperienceEnabled($PostCheckoutExperienceEnabled)
    {
      $this->PostCheckoutExperienceEnabled = $PostCheckoutExperienceEnabled;
      return $this;
    }

    /**
     * @return DiscountPriceInfoType
     */
    public function getDiscountPriceInfo()
    {
      return $this->DiscountPriceInfo;
    }

    /**
     * @param DiscountPriceInfoType $DiscountPriceInfo
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setDiscountPriceInfo($DiscountPriceInfo)
    {
      $this->DiscountPriceInfo = $DiscountPriceInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseRecommendedProduct()
    {
      return $this->UseRecommendedProduct;
    }

    /**
     * @param boolean $UseRecommendedProduct
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setUseRecommendedProduct($UseRecommendedProduct)
    {
      $this->UseRecommendedProduct = $UseRecommendedProduct;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerProvidedTitle()
    {
      return $this->SellerProvidedTitle;
    }

    /**
     * @param string $SellerProvidedTitle
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSellerProvidedTitle($SellerProvidedTitle)
    {
      $this->SellerProvidedTitle = $SellerProvidedTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getVIN()
    {
      return $this->VIN;
    }

    /**
     * @param string $VIN
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setVIN($VIN)
    {
      $this->VIN = $VIN;
      return $this;
    }

    /**
     * @return string
     */
    public function getVINLink()
    {
      return $this->VINLink;
    }

    /**
     * @param string $VINLink
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setVINLink($VINLink)
    {
      $this->VINLink = $VINLink;
      return $this;
    }

    /**
     * @return string
     */
    public function getVRM()
    {
      return $this->VRM;
    }

    /**
     * @param string $VRM
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setVRM($VRM)
    {
      $this->VRM = $VRM;
      return $this;
    }

    /**
     * @return string
     */
    public function getVRMLink()
    {
      return $this->VRMLink;
    }

    /**
     * @param string $VRMLink
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setVRMLink($VRMLink)
    {
      $this->VRMLink = $VRMLink;
      return $this;
    }

    /**
     * @return QuantityInfoType
     */
    public function getQuantityInfo()
    {
      return $this->QuantityInfo;
    }

    /**
     * @param QuantityInfoType $QuantityInfo
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setQuantityInfo($QuantityInfo)
    {
      $this->QuantityInfo = $QuantityInfo;
      return $this;
    }

    /**
     * @return SellerProfilesType
     */
    public function getSellerProfiles()
    {
      return $this->SellerProfiles;
    }

    /**
     * @param SellerProfilesType $SellerProfiles
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setSellerProfiles($SellerProfiles)
    {
      $this->SellerProfiles = $SellerProfiles;
      return $this;
    }

    /**
     * @return ShippingServiceCostOverrideListType
     */
    public function getShippingServiceCostOverrideList()
    {
      return $this->ShippingServiceCostOverrideList;
    }

    /**
     * @param ShippingServiceCostOverrideListType $ShippingServiceCostOverrideList
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setShippingServiceCostOverrideList($ShippingServiceCostOverrideList)
    {
      $this->ShippingServiceCostOverrideList = $ShippingServiceCostOverrideList;
      return $this;
    }

    /**
     * @return ShipPackageDetailsType
     */
    public function getShippingPackageDetails()
    {
      return $this->ShippingPackageDetails;
    }

    /**
     * @param ShipPackageDetailsType $ShippingPackageDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setShippingPackageDetails($ShippingPackageDetails)
    {
      $this->ShippingPackageDetails = $ShippingPackageDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTopRatedListing()
    {
      return $this->TopRatedListing;
    }

    /**
     * @param boolean $TopRatedListing
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setTopRatedListing($TopRatedListing)
    {
      $this->TopRatedListing = $TopRatedListing;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getFloorPrice()
    {
      return $this->FloorPrice;
    }

    /**
     * @param AmountType $FloorPrice
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setFloorPrice($FloorPrice)
    {
      $this->FloorPrice = $FloorPrice;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getCeilingPrice()
    {
      return $this->CeilingPrice;
    }

    /**
     * @param AmountType $CeilingPrice
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setCeilingPrice($CeilingPrice)
    {
      $this->CeilingPrice = $CeilingPrice;
      return $this;
    }

    /**
     * @return QuantityRestrictionPerBuyerInfoType
     */
    public function getQuantityRestrictionPerBuyer()
    {
      return $this->QuantityRestrictionPerBuyer;
    }

    /**
     * @param QuantityRestrictionPerBuyerInfoType $QuantityRestrictionPerBuyer
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setQuantityRestrictionPerBuyer($QuantityRestrictionPerBuyer)
    {
      $this->QuantityRestrictionPerBuyer = $QuantityRestrictionPerBuyer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIntermediatedShippingEligible()
    {
      return $this->IsIntermediatedShippingEligible;
    }

    /**
     * @param boolean $IsIntermediatedShippingEligible
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setIsIntermediatedShippingEligible($IsIntermediatedShippingEligible)
    {
      $this->IsIntermediatedShippingEligible = $IsIntermediatedShippingEligible;
      return $this;
    }

    /**
     * @return UnitInfoType
     */
    public function getUnitInfo()
    {
      return $this->UnitInfo;
    }

    /**
     * @param UnitInfoType $UnitInfo
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setUnitInfo($UnitInfo)
    {
      $this->UnitInfo = $UnitInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelistParentID()
    {
      return $this->RelistParentID;
    }

    /**
     * @param int $RelistParentID
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setRelistParentID($RelistParentID)
    {
      $this->RelistParentID = $RelistParentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getConditionDefinition()
    {
      return $this->ConditionDefinition;
    }

    /**
     * @param string $ConditionDefinition
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setConditionDefinition($ConditionDefinition)
    {
      $this->ConditionDefinition = $ConditionDefinition;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideFromSearch()
    {
      return $this->HideFromSearch;
    }

    /**
     * @param boolean $HideFromSearch
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setHideFromSearch($HideFromSearch)
    {
      $this->HideFromSearch = $HideFromSearch;
      return $this;
    }

    /**
     * @return ReasonHideFromSearchCodeType
     */
    public function getReasonHideFromSearch()
    {
      return $this->ReasonHideFromSearch;
    }

    /**
     * @param ReasonHideFromSearchCodeType $ReasonHideFromSearch
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setReasonHideFromSearch($ReasonHideFromSearch)
    {
      $this->ReasonHideFromSearch = $ReasonHideFromSearch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeRecommendations()
    {
      return $this->IncludeRecommendations;
    }

    /**
     * @param boolean $IncludeRecommendations
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setIncludeRecommendations($IncludeRecommendations)
    {
      $this->IncludeRecommendations = $IncludeRecommendations;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOutOfStockControl()
    {
      return $this->OutOfStockControl;
    }

    /**
     * @param boolean $OutOfStockControl
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setOutOfStockControl($OutOfStockControl)
    {
      $this->OutOfStockControl = $OutOfStockControl;
      return $this;
    }

    /**
     * @return PickupInStoreDetailsType
     */
    public function getPickupInStoreDetails()
    {
      return $this->PickupInStoreDetails;
    }

    /**
     * @param PickupInStoreDetailsType $PickupInStoreDetails
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setPickupInStoreDetails($PickupInStoreDetails)
    {
      $this->PickupInStoreDetails = $PickupInStoreDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEBayNowEligible()
    {
      return $this->eBayNowEligible;
    }

    /**
     * @param boolean $eBayNowEligible
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setEBayNowEligible($eBayNowEligible)
    {
      $this->eBayNowEligible = $eBayNowEligible;
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
     * @return \EbayWsdl\Classes\ItemType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
