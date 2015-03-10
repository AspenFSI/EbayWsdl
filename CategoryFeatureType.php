<?php

namespace EbayWsdl;

class CategoryFeatureType
{

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var ListingDurationReferenceType[] $ListingDuration
     */
    protected $ListingDuration = null;

    /**
     * @var boolean $ShippingTermsRequired
     */
    protected $ShippingTermsRequired = null;

    /**
     * @var boolean $BestOfferEnabled
     */
    protected $BestOfferEnabled = null;

    /**
     * @var boolean $DutchBINEnabled
     */
    protected $DutchBINEnabled = null;

    /**
     * @var boolean $UserConsentRequired
     */
    protected $UserConsentRequired = null;

    /**
     * @var boolean $HomePageFeaturedEnabled
     */
    protected $HomePageFeaturedEnabled = null;

    /**
     * @var boolean $ProPackEnabled
     */
    protected $ProPackEnabled = null;

    /**
     * @var boolean $BasicUpgradePackEnabled
     */
    protected $BasicUpgradePackEnabled = null;

    /**
     * @var boolean $ValuePackEnabled
     */
    protected $ValuePackEnabled = null;

    /**
     * @var boolean $ProPackPlusEnabled
     */
    protected $ProPackPlusEnabled = null;

    /**
     * @var AdFormatEnabledCodeType $AdFormatEnabled
     */
    protected $AdFormatEnabled = null;

    /**
     * @var boolean $BestOfferCounterEnabled
     */
    protected $BestOfferCounterEnabled = null;

    /**
     * @var boolean $BestOfferAutoDeclineEnabled
     */
    protected $BestOfferAutoDeclineEnabled = null;

    /**
     * @var boolean $LocalMarketSpecialitySubscription
     */
    protected $LocalMarketSpecialitySubscription = null;

    /**
     * @var boolean $LocalMarketRegularSubscription
     */
    protected $LocalMarketRegularSubscription = null;

    /**
     * @var boolean $LocalMarketPremiumSubscription
     */
    protected $LocalMarketPremiumSubscription = null;

    /**
     * @var boolean $LocalMarketNonSubscription
     */
    protected $LocalMarketNonSubscription = null;

    /**
     * @var boolean $ExpressEnabled
     */
    protected $ExpressEnabled = null;

    /**
     * @var boolean $ExpressPicturesRequired
     */
    protected $ExpressPicturesRequired = null;

    /**
     * @var boolean $ExpressConditionRequired
     */
    protected $ExpressConditionRequired = null;

    /**
     * @var float $MinimumReservePrice
     */
    protected $MinimumReservePrice = null;

    /**
     * @var boolean $SellerContactDetailsEnabled
     */
    protected $SellerContactDetailsEnabled = null;

    /**
     * @var boolean $TransactionConfirmationRequestEnabled
     */
    protected $TransactionConfirmationRequestEnabled = null;

    /**
     * @var boolean $StoreInventoryEnabled
     */
    protected $StoreInventoryEnabled = null;

    /**
     * @var boolean $SkypeMeTransactionalEnabled
     */
    protected $SkypeMeTransactionalEnabled = null;

    /**
     * @var boolean $SkypeMeNonTransactionalEnabled
     */
    protected $SkypeMeNonTransactionalEnabled = null;

    /**
     * @var ClassifiedAdPaymentMethodEnabledCodeType $ClassifiedAdPaymentMethodEnabled
     */
    protected $ClassifiedAdPaymentMethodEnabled = null;

    /**
     * @var boolean $ClassifiedAdShippingMethodEnabled
     */
    protected $ClassifiedAdShippingMethodEnabled = null;

    /**
     * @var ClassifiedAdBestOfferEnabledCodeType $ClassifiedAdBestOfferEnabled
     */
    protected $ClassifiedAdBestOfferEnabled = null;

    /**
     * @var boolean $ClassifiedAdCounterOfferEnabled
     */
    protected $ClassifiedAdCounterOfferEnabled = null;

    /**
     * @var boolean $ClassifiedAdAutoDeclineEnabled
     */
    protected $ClassifiedAdAutoDeclineEnabled = null;

    /**
     * @var boolean $ClassifiedAdContactByPhoneEnabled
     */
    protected $ClassifiedAdContactByPhoneEnabled = null;

    /**
     * @var boolean $ClassifiedAdContactByEmailEnabled
     */
    protected $ClassifiedAdContactByEmailEnabled = null;

    /**
     * @var boolean $SafePaymentRequired
     */
    protected $SafePaymentRequired = null;

    /**
     * @var boolean $ClassifiedAdPayPerLeadEnabled
     */
    protected $ClassifiedAdPayPerLeadEnabled = null;

    /**
     * @var ItemSpecificsEnabledCodeType $ItemSpecificsEnabled
     */
    protected $ItemSpecificsEnabled = null;

    /**
     * @var boolean $PaisaPayFullEscrowEnabled
     */
    protected $PaisaPayFullEscrowEnabled = null;

    /**
     * @var boolean $UPCIdentifierEnabled
     */
    protected $UPCIdentifierEnabled = null;

    /**
     * @var boolean $EANIdentifierEnabled
     */
    protected $EANIdentifierEnabled = null;

    /**
     * @var boolean $ISBNIdentifierEnabled
     */
    protected $ISBNIdentifierEnabled = null;

    /**
     * @var boolean $BrandMPNIdentifierEnabled
     */
    protected $BrandMPNIdentifierEnabled = null;

    /**
     * @var boolean $ClassifiedAdAutoAcceptEnabled
     */
    protected $ClassifiedAdAutoAcceptEnabled = null;

    /**
     * @var boolean $BestOfferAutoAcceptEnabled
     */
    protected $BestOfferAutoAcceptEnabled = null;

    /**
     * @var boolean $CrossBorderTradeNorthAmericaEnabled
     */
    protected $CrossBorderTradeNorthAmericaEnabled = null;

    /**
     * @var boolean $CrossBorderTradeGBEnabled
     */
    protected $CrossBorderTradeGBEnabled = null;

    /**
     * @var boolean $CrossBorderTradeAustraliaEnabled
     */
    protected $CrossBorderTradeAustraliaEnabled = null;

    /**
     * @var boolean $PayPalBuyerProtectionEnabled
     */
    protected $PayPalBuyerProtectionEnabled = null;

    /**
     * @var boolean $BuyerGuaranteeEnabled
     */
    protected $BuyerGuaranteeEnabled = null;

    /**
     * @var boolean $CombinedFixedPriceTreatmentEnabled
     */
    protected $CombinedFixedPriceTreatmentEnabled = null;

    /**
     * @var ListingEnhancementDurationReferenceType $GalleryFeaturedDurations
     */
    protected $GalleryFeaturedDurations = null;

    /**
     * @var boolean $PayPalRequired
     */
    protected $PayPalRequired = null;

    /**
     * @var AdFormatEnabledCodeType $eBayMotorsProAdFormatEnabled
     */
    protected $eBayMotorsProAdFormatEnabled = null;

    /**
     * @var boolean $eBayMotorsProContactByPhoneEnabled
     */
    protected $eBayMotorsProContactByPhoneEnabled = null;

    /**
     * @var int $eBayMotorsProPhoneCount
     */
    protected $eBayMotorsProPhoneCount = null;

    /**
     * @var boolean $eBayMotorsProContactByAddressEnabled
     */
    protected $eBayMotorsProContactByAddressEnabled = null;

    /**
     * @var int $eBayMotorsProStreetCount
     */
    protected $eBayMotorsProStreetCount = null;

    /**
     * @var boolean $eBayMotorsProCompanyNameEnabled
     */
    protected $eBayMotorsProCompanyNameEnabled = null;

    /**
     * @var boolean $eBayMotorsProContactByEmailEnabled
     */
    protected $eBayMotorsProContactByEmailEnabled = null;

    /**
     * @var ClassifiedAdBestOfferEnabledCodeType $eBayMotorsProBestOfferEnabled
     */
    protected $eBayMotorsProBestOfferEnabled = null;

    /**
     * @var boolean $eBayMotorsProAutoAcceptEnabled
     */
    protected $eBayMotorsProAutoAcceptEnabled = null;

    /**
     * @var boolean $eBayMotorsProAutoDeclineEnabled
     */
    protected $eBayMotorsProAutoDeclineEnabled = null;

    /**
     * @var ClassifiedAdPaymentMethodEnabledCodeType $eBayMotorsProPaymentMethodCheckOutEnabled
     */
    protected $eBayMotorsProPaymentMethodCheckOutEnabled = null;

    /**
     * @var boolean $eBayMotorsProShippingMethodEnabled
     */
    protected $eBayMotorsProShippingMethodEnabled = null;

    /**
     * @var boolean $eBayMotorsProCounterOfferEnabled
     */
    protected $eBayMotorsProCounterOfferEnabled = null;

    /**
     * @var boolean $eBayMotorsProSellerContactDetailsEnabled
     */
    protected $eBayMotorsProSellerContactDetailsEnabled = null;

    /**
     * @var AdFormatEnabledCodeType $LocalMarketAdFormatEnabled
     */
    protected $LocalMarketAdFormatEnabled = null;

    /**
     * @var boolean $LocalMarketContactByPhoneEnabled
     */
    protected $LocalMarketContactByPhoneEnabled = null;

    /**
     * @var int $LocalMarketPhoneCount
     */
    protected $LocalMarketPhoneCount = null;

    /**
     * @var boolean $LocalMarketContactByAddressEnabled
     */
    protected $LocalMarketContactByAddressEnabled = null;

    /**
     * @var int $LocalMarketStreetCount
     */
    protected $LocalMarketStreetCount = null;

    /**
     * @var boolean $LocalMarketCompanyNameEnabled
     */
    protected $LocalMarketCompanyNameEnabled = null;

    /**
     * @var boolean $LocalMarketContactByEmailEnabled
     */
    protected $LocalMarketContactByEmailEnabled = null;

    /**
     * @var ClassifiedAdBestOfferEnabledCodeType $LocalMarketBestOfferEnabled
     */
    protected $LocalMarketBestOfferEnabled = null;

    /**
     * @var boolean $LocalMarketAutoAcceptEnabled
     */
    protected $LocalMarketAutoAcceptEnabled = null;

    /**
     * @var boolean $LocalMarketAutoDeclineEnabled
     */
    protected $LocalMarketAutoDeclineEnabled = null;

    /**
     * @var ClassifiedAdPaymentMethodEnabledCodeType $LocalMarketPaymentMethodCheckOutEnabled
     */
    protected $LocalMarketPaymentMethodCheckOutEnabled = null;

    /**
     * @var boolean $LocalMarketShippingMethodEnabled
     */
    protected $LocalMarketShippingMethodEnabled = null;

    /**
     * @var boolean $LocalMarketCounterOfferEnabled
     */
    protected $LocalMarketCounterOfferEnabled = null;

    /**
     * @var boolean $LocalMarketSellerContactDetailsEnabled
     */
    protected $LocalMarketSellerContactDetailsEnabled = null;

    /**
     * @var int $ClassifiedAdPhoneCount
     */
    protected $ClassifiedAdPhoneCount = null;

    /**
     * @var boolean $ClassifiedAdContactByAddressEnabled
     */
    protected $ClassifiedAdContactByAddressEnabled = null;

    /**
     * @var int $ClassifiedAdStreetCount
     */
    protected $ClassifiedAdStreetCount = null;

    /**
     * @var boolean $ClassifiedAdCompanyNameEnabled
     */
    protected $ClassifiedAdCompanyNameEnabled = null;

    /**
     * @var GeographicExposureCodeType $SpecialitySubscription
     */
    protected $SpecialitySubscription = null;

    /**
     * @var GeographicExposureCodeType $RegularSubscription
     */
    protected $RegularSubscription = null;

    /**
     * @var GeographicExposureCodeType $PremiumSubscription
     */
    protected $PremiumSubscription = null;

    /**
     * @var GeographicExposureCodeType $NonSubscription
     */
    protected $NonSubscription = null;

    /**
     * @var INEscrowWorkflowTimelineCodeType $INEscrowWorkflowTimeline
     */
    protected $INEscrowWorkflowTimeline = null;

    /**
     * @var boolean $PayPalRequiredForStoreOwner
     */
    protected $PayPalRequiredForStoreOwner = null;

    /**
     * @var boolean $ReviseQuantityAllowed
     */
    protected $ReviseQuantityAllowed = null;

    /**
     * @var boolean $RevisePriceAllowed
     */
    protected $RevisePriceAllowed = null;

    /**
     * @var boolean $StoreOwnerExtendedListingDurationsEnabled
     */
    protected $StoreOwnerExtendedListingDurationsEnabled = null;

    /**
     * @var StoreOwnerExtendedListingDurationsType $StoreOwnerExtendedListingDurations
     */
    protected $StoreOwnerExtendedListingDurations = null;

    /**
     * @var boolean $ReturnPolicyEnabled
     */
    protected $ReturnPolicyEnabled = null;

    /**
     * @var boolean $HandlingTimeEnabled
     */
    protected $HandlingTimeEnabled = null;

    /**
     * @var AmountType $MaxFlatShippingCost
     */
    protected $MaxFlatShippingCost = null;

    /**
     * @var AmountType $Group1MaxFlatShippingCost
     */
    protected $Group1MaxFlatShippingCost = null;

    /**
     * @var AmountType $Group2MaxFlatShippingCost
     */
    protected $Group2MaxFlatShippingCost = null;

    /**
     * @var AmountType $Group3MaxFlatShippingCost
     */
    protected $Group3MaxFlatShippingCost = null;

    /**
     * @var BuyerPaymentMethodCodeType[] $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var boolean $VariationsEnabled
     */
    protected $VariationsEnabled = null;

    /**
     * @var AttributeConversionEnabledCodeType $AttributeConversionEnabled
     */
    protected $AttributeConversionEnabled = null;

    /**
     * @var boolean $FreeGalleryPlusEnabled
     */
    protected $FreeGalleryPlusEnabled = null;

    /**
     * @var boolean $FreePicturePackEnabled
     */
    protected $FreePicturePackEnabled = null;

    /**
     * @var ItemCompatibilityEnabledCodeType $ItemCompatibilityEnabled
     */
    protected $ItemCompatibilityEnabled = null;

    /**
     * @var int $MinItemCompatibility
     */
    protected $MinItemCompatibility = null;

    /**
     * @var int $MaxItemCompatibility
     */
    protected $MaxItemCompatibility = null;

    /**
     * @var ConditionEnabledCodeType $ConditionEnabled
     */
    protected $ConditionEnabled = null;

    /**
     * @var ConditionValuesType $ConditionValues
     */
    protected $ConditionValues = null;

    /**
     * @var boolean $ValueCategory
     */
    protected $ValueCategory = null;

    /**
     * @var ProductCreationEnabledCodeType $ProductCreationEnabled
     */
    protected $ProductCreationEnabled = null;

    /**
     * @var int $MaxGranularFitmentCount
     */
    protected $MaxGranularFitmentCount = null;

    /**
     * @var string $CompatibleVehicleType
     */
    protected $CompatibleVehicleType = null;

    /**
     * @var PaymentOptionsGroupEnabledCodeType $PaymentOptionsGroup
     */
    protected $PaymentOptionsGroup = null;

    /**
     * @var ProfileCategoryGroupCodeType $ShippingProfileCategoryGroup
     */
    protected $ShippingProfileCategoryGroup = null;

    /**
     * @var ProfileCategoryGroupCodeType $PaymentProfileCategoryGroup
     */
    protected $PaymentProfileCategoryGroup = null;

    /**
     * @var ProfileCategoryGroupCodeType $ReturnPolicyProfileCategoryGroup
     */
    protected $ReturnPolicyProfileCategoryGroup = null;

    /**
     * @var boolean $VINSupported
     */
    protected $VINSupported = null;

    /**
     * @var boolean $VRMSupported
     */
    protected $VRMSupported = null;

    /**
     * @var boolean $SellerProvidedTitleSupported
     */
    protected $SellerProvidedTitleSupported = null;

    /**
     * @var boolean $DepositSupported
     */
    protected $DepositSupported = null;

    /**
     * @var boolean $GlobalShippingEnabled
     */
    protected $GlobalShippingEnabled = null;

    /**
     * @var boolean $AdditionalCompatibilityEnabled
     */
    protected $AdditionalCompatibilityEnabled = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $CategoryID
     * @param ListingDurationReferenceType[] $ListingDuration
     * @param boolean $ShippingTermsRequired
     * @param boolean $BestOfferEnabled
     * @param boolean $DutchBINEnabled
     * @param boolean $UserConsentRequired
     * @param boolean $HomePageFeaturedEnabled
     * @param boolean $ProPackEnabled
     * @param boolean $BasicUpgradePackEnabled
     * @param boolean $ValuePackEnabled
     * @param boolean $ProPackPlusEnabled
     * @param AdFormatEnabledCodeType $AdFormatEnabled
     * @param boolean $BestOfferCounterEnabled
     * @param boolean $BestOfferAutoDeclineEnabled
     * @param boolean $LocalMarketSpecialitySubscription
     * @param boolean $LocalMarketRegularSubscription
     * @param boolean $LocalMarketPremiumSubscription
     * @param boolean $LocalMarketNonSubscription
     * @param boolean $ExpressEnabled
     * @param boolean $ExpressPicturesRequired
     * @param boolean $ExpressConditionRequired
     * @param float $MinimumReservePrice
     * @param boolean $SellerContactDetailsEnabled
     * @param boolean $TransactionConfirmationRequestEnabled
     * @param boolean $StoreInventoryEnabled
     * @param boolean $SkypeMeTransactionalEnabled
     * @param boolean $SkypeMeNonTransactionalEnabled
     * @param ClassifiedAdPaymentMethodEnabledCodeType $ClassifiedAdPaymentMethodEnabled
     * @param boolean $ClassifiedAdShippingMethodEnabled
     * @param ClassifiedAdBestOfferEnabledCodeType $ClassifiedAdBestOfferEnabled
     * @param boolean $ClassifiedAdCounterOfferEnabled
     * @param boolean $ClassifiedAdAutoDeclineEnabled
     * @param boolean $ClassifiedAdContactByPhoneEnabled
     * @param boolean $ClassifiedAdContactByEmailEnabled
     * @param boolean $SafePaymentRequired
     * @param boolean $ClassifiedAdPayPerLeadEnabled
     * @param ItemSpecificsEnabledCodeType $ItemSpecificsEnabled
     * @param boolean $PaisaPayFullEscrowEnabled
     * @param boolean $UPCIdentifierEnabled
     * @param boolean $EANIdentifierEnabled
     * @param boolean $ISBNIdentifierEnabled
     * @param boolean $BrandMPNIdentifierEnabled
     * @param boolean $ClassifiedAdAutoAcceptEnabled
     * @param boolean $BestOfferAutoAcceptEnabled
     * @param boolean $CrossBorderTradeNorthAmericaEnabled
     * @param boolean $CrossBorderTradeGBEnabled
     * @param boolean $CrossBorderTradeAustraliaEnabled
     * @param boolean $PayPalBuyerProtectionEnabled
     * @param boolean $BuyerGuaranteeEnabled
     * @param boolean $CombinedFixedPriceTreatmentEnabled
     * @param ListingEnhancementDurationReferenceType $GalleryFeaturedDurations
     * @param boolean $PayPalRequired
     * @param AdFormatEnabledCodeType $eBayMotorsProAdFormatEnabled
     * @param boolean $eBayMotorsProContactByPhoneEnabled
     * @param int $eBayMotorsProPhoneCount
     * @param boolean $eBayMotorsProContactByAddressEnabled
     * @param int $eBayMotorsProStreetCount
     * @param boolean $eBayMotorsProCompanyNameEnabled
     * @param boolean $eBayMotorsProContactByEmailEnabled
     * @param ClassifiedAdBestOfferEnabledCodeType $eBayMotorsProBestOfferEnabled
     * @param boolean $eBayMotorsProAutoAcceptEnabled
     * @param boolean $eBayMotorsProAutoDeclineEnabled
     * @param ClassifiedAdPaymentMethodEnabledCodeType $eBayMotorsProPaymentMethodCheckOutEnabled
     * @param boolean $eBayMotorsProShippingMethodEnabled
     * @param boolean $eBayMotorsProCounterOfferEnabled
     * @param boolean $eBayMotorsProSellerContactDetailsEnabled
     * @param AdFormatEnabledCodeType $LocalMarketAdFormatEnabled
     * @param boolean $LocalMarketContactByPhoneEnabled
     * @param int $LocalMarketPhoneCount
     * @param boolean $LocalMarketContactByAddressEnabled
     * @param int $LocalMarketStreetCount
     * @param boolean $LocalMarketCompanyNameEnabled
     * @param boolean $LocalMarketContactByEmailEnabled
     * @param ClassifiedAdBestOfferEnabledCodeType $LocalMarketBestOfferEnabled
     * @param boolean $LocalMarketAutoAcceptEnabled
     * @param boolean $LocalMarketAutoDeclineEnabled
     * @param ClassifiedAdPaymentMethodEnabledCodeType $LocalMarketPaymentMethodCheckOutEnabled
     * @param boolean $LocalMarketShippingMethodEnabled
     * @param boolean $LocalMarketCounterOfferEnabled
     * @param boolean $LocalMarketSellerContactDetailsEnabled
     * @param int $ClassifiedAdPhoneCount
     * @param boolean $ClassifiedAdContactByAddressEnabled
     * @param int $ClassifiedAdStreetCount
     * @param boolean $ClassifiedAdCompanyNameEnabled
     * @param GeographicExposureCodeType $SpecialitySubscription
     * @param GeographicExposureCodeType $RegularSubscription
     * @param GeographicExposureCodeType $PremiumSubscription
     * @param GeographicExposureCodeType $NonSubscription
     * @param INEscrowWorkflowTimelineCodeType $INEscrowWorkflowTimeline
     * @param boolean $PayPalRequiredForStoreOwner
     * @param boolean $ReviseQuantityAllowed
     * @param boolean $RevisePriceAllowed
     * @param boolean $StoreOwnerExtendedListingDurationsEnabled
     * @param StoreOwnerExtendedListingDurationsType $StoreOwnerExtendedListingDurations
     * @param boolean $ReturnPolicyEnabled
     * @param boolean $HandlingTimeEnabled
     * @param AmountType $MaxFlatShippingCost
     * @param AmountType $Group1MaxFlatShippingCost
     * @param AmountType $Group2MaxFlatShippingCost
     * @param AmountType $Group3MaxFlatShippingCost
     * @param BuyerPaymentMethodCodeType[] $PaymentMethod
     * @param boolean $VariationsEnabled
     * @param AttributeConversionEnabledCodeType $AttributeConversionEnabled
     * @param boolean $FreeGalleryPlusEnabled
     * @param boolean $FreePicturePackEnabled
     * @param ItemCompatibilityEnabledCodeType $ItemCompatibilityEnabled
     * @param int $MinItemCompatibility
     * @param int $MaxItemCompatibility
     * @param ConditionEnabledCodeType $ConditionEnabled
     * @param ConditionValuesType $ConditionValues
     * @param boolean $ValueCategory
     * @param ProductCreationEnabledCodeType $ProductCreationEnabled
     * @param int $MaxGranularFitmentCount
     * @param string $CompatibleVehicleType
     * @param PaymentOptionsGroupEnabledCodeType $PaymentOptionsGroup
     * @param ProfileCategoryGroupCodeType $ShippingProfileCategoryGroup
     * @param ProfileCategoryGroupCodeType $PaymentProfileCategoryGroup
     * @param ProfileCategoryGroupCodeType $ReturnPolicyProfileCategoryGroup
     * @param boolean $VINSupported
     * @param boolean $VRMSupported
     * @param boolean $SellerProvidedTitleSupported
     * @param boolean $DepositSupported
     * @param boolean $GlobalShippingEnabled
     * @param boolean $AdditionalCompatibilityEnabled
     * @param string $any
     */
    public function __construct($CategoryID = null, array $ListingDuration = null, $ShippingTermsRequired = null, $BestOfferEnabled = null, $DutchBINEnabled = null, $UserConsentRequired = null, $HomePageFeaturedEnabled = null, $ProPackEnabled = null, $BasicUpgradePackEnabled = null, $ValuePackEnabled = null, $ProPackPlusEnabled = null, $AdFormatEnabled = null, $BestOfferCounterEnabled = null, $BestOfferAutoDeclineEnabled = null, $LocalMarketSpecialitySubscription = null, $LocalMarketRegularSubscription = null, $LocalMarketPremiumSubscription = null, $LocalMarketNonSubscription = null, $ExpressEnabled = null, $ExpressPicturesRequired = null, $ExpressConditionRequired = null, $MinimumReservePrice = null, $SellerContactDetailsEnabled = null, $TransactionConfirmationRequestEnabled = null, $StoreInventoryEnabled = null, $SkypeMeTransactionalEnabled = null, $SkypeMeNonTransactionalEnabled = null, $ClassifiedAdPaymentMethodEnabled = null, $ClassifiedAdShippingMethodEnabled = null, $ClassifiedAdBestOfferEnabled = null, $ClassifiedAdCounterOfferEnabled = null, $ClassifiedAdAutoDeclineEnabled = null, $ClassifiedAdContactByPhoneEnabled = null, $ClassifiedAdContactByEmailEnabled = null, $SafePaymentRequired = null, $ClassifiedAdPayPerLeadEnabled = null, $ItemSpecificsEnabled = null, $PaisaPayFullEscrowEnabled = null, $UPCIdentifierEnabled = null, $EANIdentifierEnabled = null, $ISBNIdentifierEnabled = null, $BrandMPNIdentifierEnabled = null, $ClassifiedAdAutoAcceptEnabled = null, $BestOfferAutoAcceptEnabled = null, $CrossBorderTradeNorthAmericaEnabled = null, $CrossBorderTradeGBEnabled = null, $CrossBorderTradeAustraliaEnabled = null, $PayPalBuyerProtectionEnabled = null, $BuyerGuaranteeEnabled = null, $CombinedFixedPriceTreatmentEnabled = null, $GalleryFeaturedDurations = null, $PayPalRequired = null, $eBayMotorsProAdFormatEnabled = null, $eBayMotorsProContactByPhoneEnabled = null, $eBayMotorsProPhoneCount = null, $eBayMotorsProContactByAddressEnabled = null, $eBayMotorsProStreetCount = null, $eBayMotorsProCompanyNameEnabled = null, $eBayMotorsProContactByEmailEnabled = null, $eBayMotorsProBestOfferEnabled = null, $eBayMotorsProAutoAcceptEnabled = null, $eBayMotorsProAutoDeclineEnabled = null, $eBayMotorsProPaymentMethodCheckOutEnabled = null, $eBayMotorsProShippingMethodEnabled = null, $eBayMotorsProCounterOfferEnabled = null, $eBayMotorsProSellerContactDetailsEnabled = null, $LocalMarketAdFormatEnabled = null, $LocalMarketContactByPhoneEnabled = null, $LocalMarketPhoneCount = null, $LocalMarketContactByAddressEnabled = null, $LocalMarketStreetCount = null, $LocalMarketCompanyNameEnabled = null, $LocalMarketContactByEmailEnabled = null, $LocalMarketBestOfferEnabled = null, $LocalMarketAutoAcceptEnabled = null, $LocalMarketAutoDeclineEnabled = null, $LocalMarketPaymentMethodCheckOutEnabled = null, $LocalMarketShippingMethodEnabled = null, $LocalMarketCounterOfferEnabled = null, $LocalMarketSellerContactDetailsEnabled = null, $ClassifiedAdPhoneCount = null, $ClassifiedAdContactByAddressEnabled = null, $ClassifiedAdStreetCount = null, $ClassifiedAdCompanyNameEnabled = null, $SpecialitySubscription = null, $RegularSubscription = null, $PremiumSubscription = null, $NonSubscription = null, $INEscrowWorkflowTimeline = null, $PayPalRequiredForStoreOwner = null, $ReviseQuantityAllowed = null, $RevisePriceAllowed = null, $StoreOwnerExtendedListingDurationsEnabled = null, $StoreOwnerExtendedListingDurations = null, $ReturnPolicyEnabled = null, $HandlingTimeEnabled = null, $MaxFlatShippingCost = null, $Group1MaxFlatShippingCost = null, $Group2MaxFlatShippingCost = null, $Group3MaxFlatShippingCost = null, array $PaymentMethod = null, $VariationsEnabled = null, $AttributeConversionEnabled = null, $FreeGalleryPlusEnabled = null, $FreePicturePackEnabled = null, $ItemCompatibilityEnabled = null, $MinItemCompatibility = null, $MaxItemCompatibility = null, $ConditionEnabled = null, $ConditionValues = null, $ValueCategory = null, $ProductCreationEnabled = null, $MaxGranularFitmentCount = null, $CompatibleVehicleType = null, $PaymentOptionsGroup = null, $ShippingProfileCategoryGroup = null, $PaymentProfileCategoryGroup = null, $ReturnPolicyProfileCategoryGroup = null, $VINSupported = null, $VRMSupported = null, $SellerProvidedTitleSupported = null, $DepositSupported = null, $GlobalShippingEnabled = null, $AdditionalCompatibilityEnabled = null, $any = null)
    {
      $this->CategoryID = $CategoryID;
      $this->ListingDuration = $ListingDuration;
      $this->ShippingTermsRequired = $ShippingTermsRequired;
      $this->BestOfferEnabled = $BestOfferEnabled;
      $this->DutchBINEnabled = $DutchBINEnabled;
      $this->UserConsentRequired = $UserConsentRequired;
      $this->HomePageFeaturedEnabled = $HomePageFeaturedEnabled;
      $this->ProPackEnabled = $ProPackEnabled;
      $this->BasicUpgradePackEnabled = $BasicUpgradePackEnabled;
      $this->ValuePackEnabled = $ValuePackEnabled;
      $this->ProPackPlusEnabled = $ProPackPlusEnabled;
      $this->AdFormatEnabled = $AdFormatEnabled;
      $this->BestOfferCounterEnabled = $BestOfferCounterEnabled;
      $this->BestOfferAutoDeclineEnabled = $BestOfferAutoDeclineEnabled;
      $this->LocalMarketSpecialitySubscription = $LocalMarketSpecialitySubscription;
      $this->LocalMarketRegularSubscription = $LocalMarketRegularSubscription;
      $this->LocalMarketPremiumSubscription = $LocalMarketPremiumSubscription;
      $this->LocalMarketNonSubscription = $LocalMarketNonSubscription;
      $this->ExpressEnabled = $ExpressEnabled;
      $this->ExpressPicturesRequired = $ExpressPicturesRequired;
      $this->ExpressConditionRequired = $ExpressConditionRequired;
      $this->MinimumReservePrice = $MinimumReservePrice;
      $this->SellerContactDetailsEnabled = $SellerContactDetailsEnabled;
      $this->TransactionConfirmationRequestEnabled = $TransactionConfirmationRequestEnabled;
      $this->StoreInventoryEnabled = $StoreInventoryEnabled;
      $this->SkypeMeTransactionalEnabled = $SkypeMeTransactionalEnabled;
      $this->SkypeMeNonTransactionalEnabled = $SkypeMeNonTransactionalEnabled;
      $this->ClassifiedAdPaymentMethodEnabled = $ClassifiedAdPaymentMethodEnabled;
      $this->ClassifiedAdShippingMethodEnabled = $ClassifiedAdShippingMethodEnabled;
      $this->ClassifiedAdBestOfferEnabled = $ClassifiedAdBestOfferEnabled;
      $this->ClassifiedAdCounterOfferEnabled = $ClassifiedAdCounterOfferEnabled;
      $this->ClassifiedAdAutoDeclineEnabled = $ClassifiedAdAutoDeclineEnabled;
      $this->ClassifiedAdContactByPhoneEnabled = $ClassifiedAdContactByPhoneEnabled;
      $this->ClassifiedAdContactByEmailEnabled = $ClassifiedAdContactByEmailEnabled;
      $this->SafePaymentRequired = $SafePaymentRequired;
      $this->ClassifiedAdPayPerLeadEnabled = $ClassifiedAdPayPerLeadEnabled;
      $this->ItemSpecificsEnabled = $ItemSpecificsEnabled;
      $this->PaisaPayFullEscrowEnabled = $PaisaPayFullEscrowEnabled;
      $this->UPCIdentifierEnabled = $UPCIdentifierEnabled;
      $this->EANIdentifierEnabled = $EANIdentifierEnabled;
      $this->ISBNIdentifierEnabled = $ISBNIdentifierEnabled;
      $this->BrandMPNIdentifierEnabled = $BrandMPNIdentifierEnabled;
      $this->ClassifiedAdAutoAcceptEnabled = $ClassifiedAdAutoAcceptEnabled;
      $this->BestOfferAutoAcceptEnabled = $BestOfferAutoAcceptEnabled;
      $this->CrossBorderTradeNorthAmericaEnabled = $CrossBorderTradeNorthAmericaEnabled;
      $this->CrossBorderTradeGBEnabled = $CrossBorderTradeGBEnabled;
      $this->CrossBorderTradeAustraliaEnabled = $CrossBorderTradeAustraliaEnabled;
      $this->PayPalBuyerProtectionEnabled = $PayPalBuyerProtectionEnabled;
      $this->BuyerGuaranteeEnabled = $BuyerGuaranteeEnabled;
      $this->CombinedFixedPriceTreatmentEnabled = $CombinedFixedPriceTreatmentEnabled;
      $this->GalleryFeaturedDurations = $GalleryFeaturedDurations;
      $this->PayPalRequired = $PayPalRequired;
      $this->eBayMotorsProAdFormatEnabled = $eBayMotorsProAdFormatEnabled;
      $this->eBayMotorsProContactByPhoneEnabled = $eBayMotorsProContactByPhoneEnabled;
      $this->eBayMotorsProPhoneCount = $eBayMotorsProPhoneCount;
      $this->eBayMotorsProContactByAddressEnabled = $eBayMotorsProContactByAddressEnabled;
      $this->eBayMotorsProStreetCount = $eBayMotorsProStreetCount;
      $this->eBayMotorsProCompanyNameEnabled = $eBayMotorsProCompanyNameEnabled;
      $this->eBayMotorsProContactByEmailEnabled = $eBayMotorsProContactByEmailEnabled;
      $this->eBayMotorsProBestOfferEnabled = $eBayMotorsProBestOfferEnabled;
      $this->eBayMotorsProAutoAcceptEnabled = $eBayMotorsProAutoAcceptEnabled;
      $this->eBayMotorsProAutoDeclineEnabled = $eBayMotorsProAutoDeclineEnabled;
      $this->eBayMotorsProPaymentMethodCheckOutEnabled = $eBayMotorsProPaymentMethodCheckOutEnabled;
      $this->eBayMotorsProShippingMethodEnabled = $eBayMotorsProShippingMethodEnabled;
      $this->eBayMotorsProCounterOfferEnabled = $eBayMotorsProCounterOfferEnabled;
      $this->eBayMotorsProSellerContactDetailsEnabled = $eBayMotorsProSellerContactDetailsEnabled;
      $this->LocalMarketAdFormatEnabled = $LocalMarketAdFormatEnabled;
      $this->LocalMarketContactByPhoneEnabled = $LocalMarketContactByPhoneEnabled;
      $this->LocalMarketPhoneCount = $LocalMarketPhoneCount;
      $this->LocalMarketContactByAddressEnabled = $LocalMarketContactByAddressEnabled;
      $this->LocalMarketStreetCount = $LocalMarketStreetCount;
      $this->LocalMarketCompanyNameEnabled = $LocalMarketCompanyNameEnabled;
      $this->LocalMarketContactByEmailEnabled = $LocalMarketContactByEmailEnabled;
      $this->LocalMarketBestOfferEnabled = $LocalMarketBestOfferEnabled;
      $this->LocalMarketAutoAcceptEnabled = $LocalMarketAutoAcceptEnabled;
      $this->LocalMarketAutoDeclineEnabled = $LocalMarketAutoDeclineEnabled;
      $this->LocalMarketPaymentMethodCheckOutEnabled = $LocalMarketPaymentMethodCheckOutEnabled;
      $this->LocalMarketShippingMethodEnabled = $LocalMarketShippingMethodEnabled;
      $this->LocalMarketCounterOfferEnabled = $LocalMarketCounterOfferEnabled;
      $this->LocalMarketSellerContactDetailsEnabled = $LocalMarketSellerContactDetailsEnabled;
      $this->ClassifiedAdPhoneCount = $ClassifiedAdPhoneCount;
      $this->ClassifiedAdContactByAddressEnabled = $ClassifiedAdContactByAddressEnabled;
      $this->ClassifiedAdStreetCount = $ClassifiedAdStreetCount;
      $this->ClassifiedAdCompanyNameEnabled = $ClassifiedAdCompanyNameEnabled;
      $this->SpecialitySubscription = $SpecialitySubscription;
      $this->RegularSubscription = $RegularSubscription;
      $this->PremiumSubscription = $PremiumSubscription;
      $this->NonSubscription = $NonSubscription;
      $this->INEscrowWorkflowTimeline = $INEscrowWorkflowTimeline;
      $this->PayPalRequiredForStoreOwner = $PayPalRequiredForStoreOwner;
      $this->ReviseQuantityAllowed = $ReviseQuantityAllowed;
      $this->RevisePriceAllowed = $RevisePriceAllowed;
      $this->StoreOwnerExtendedListingDurationsEnabled = $StoreOwnerExtendedListingDurationsEnabled;
      $this->StoreOwnerExtendedListingDurations = $StoreOwnerExtendedListingDurations;
      $this->ReturnPolicyEnabled = $ReturnPolicyEnabled;
      $this->HandlingTimeEnabled = $HandlingTimeEnabled;
      $this->MaxFlatShippingCost = $MaxFlatShippingCost;
      $this->Group1MaxFlatShippingCost = $Group1MaxFlatShippingCost;
      $this->Group2MaxFlatShippingCost = $Group2MaxFlatShippingCost;
      $this->Group3MaxFlatShippingCost = $Group3MaxFlatShippingCost;
      $this->PaymentMethod = $PaymentMethod;
      $this->VariationsEnabled = $VariationsEnabled;
      $this->AttributeConversionEnabled = $AttributeConversionEnabled;
      $this->FreeGalleryPlusEnabled = $FreeGalleryPlusEnabled;
      $this->FreePicturePackEnabled = $FreePicturePackEnabled;
      $this->ItemCompatibilityEnabled = $ItemCompatibilityEnabled;
      $this->MinItemCompatibility = $MinItemCompatibility;
      $this->MaxItemCompatibility = $MaxItemCompatibility;
      $this->ConditionEnabled = $ConditionEnabled;
      $this->ConditionValues = $ConditionValues;
      $this->ValueCategory = $ValueCategory;
      $this->ProductCreationEnabled = $ProductCreationEnabled;
      $this->MaxGranularFitmentCount = $MaxGranularFitmentCount;
      $this->CompatibleVehicleType = $CompatibleVehicleType;
      $this->PaymentOptionsGroup = $PaymentOptionsGroup;
      $this->ShippingProfileCategoryGroup = $ShippingProfileCategoryGroup;
      $this->PaymentProfileCategoryGroup = $PaymentProfileCategoryGroup;
      $this->ReturnPolicyProfileCategoryGroup = $ReturnPolicyProfileCategoryGroup;
      $this->VINSupported = $VINSupported;
      $this->VRMSupported = $VRMSupported;
      $this->SellerProvidedTitleSupported = $SellerProvidedTitleSupported;
      $this->DepositSupported = $DepositSupported;
      $this->GlobalShippingEnabled = $GlobalShippingEnabled;
      $this->AdditionalCompatibilityEnabled = $AdditionalCompatibilityEnabled;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param string $CategoryID
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return ListingDurationReferenceType[]
     */
    public function getListingDuration()
    {
      return $this->ListingDuration;
    }

    /**
     * @param ListingDurationReferenceType[] $ListingDuration
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setListingDuration(array $ListingDuration)
    {
      $this->ListingDuration = $ListingDuration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShippingTermsRequired()
    {
      return $this->ShippingTermsRequired;
    }

    /**
     * @param boolean $ShippingTermsRequired
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setShippingTermsRequired($ShippingTermsRequired)
    {
      $this->ShippingTermsRequired = $ShippingTermsRequired;
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
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setBestOfferEnabled($BestOfferEnabled)
    {
      $this->BestOfferEnabled = $BestOfferEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDutchBINEnabled()
    {
      return $this->DutchBINEnabled;
    }

    /**
     * @param boolean $DutchBINEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setDutchBINEnabled($DutchBINEnabled)
    {
      $this->DutchBINEnabled = $DutchBINEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUserConsentRequired()
    {
      return $this->UserConsentRequired;
    }

    /**
     * @param boolean $UserConsentRequired
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setUserConsentRequired($UserConsentRequired)
    {
      $this->UserConsentRequired = $UserConsentRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHomePageFeaturedEnabled()
    {
      return $this->HomePageFeaturedEnabled;
    }

    /**
     * @param boolean $HomePageFeaturedEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setHomePageFeaturedEnabled($HomePageFeaturedEnabled)
    {
      $this->HomePageFeaturedEnabled = $HomePageFeaturedEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProPackEnabled()
    {
      return $this->ProPackEnabled;
    }

    /**
     * @param boolean $ProPackEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setProPackEnabled($ProPackEnabled)
    {
      $this->ProPackEnabled = $ProPackEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBasicUpgradePackEnabled()
    {
      return $this->BasicUpgradePackEnabled;
    }

    /**
     * @param boolean $BasicUpgradePackEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setBasicUpgradePackEnabled($BasicUpgradePackEnabled)
    {
      $this->BasicUpgradePackEnabled = $BasicUpgradePackEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValuePackEnabled()
    {
      return $this->ValuePackEnabled;
    }

    /**
     * @param boolean $ValuePackEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setValuePackEnabled($ValuePackEnabled)
    {
      $this->ValuePackEnabled = $ValuePackEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProPackPlusEnabled()
    {
      return $this->ProPackPlusEnabled;
    }

    /**
     * @param boolean $ProPackPlusEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setProPackPlusEnabled($ProPackPlusEnabled)
    {
      $this->ProPackPlusEnabled = $ProPackPlusEnabled;
      return $this;
    }

    /**
     * @return AdFormatEnabledCodeType
     */
    public function getAdFormatEnabled()
    {
      return $this->AdFormatEnabled;
    }

    /**
     * @param AdFormatEnabledCodeType $AdFormatEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setAdFormatEnabled($AdFormatEnabled)
    {
      $this->AdFormatEnabled = $AdFormatEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBestOfferCounterEnabled()
    {
      return $this->BestOfferCounterEnabled;
    }

    /**
     * @param boolean $BestOfferCounterEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setBestOfferCounterEnabled($BestOfferCounterEnabled)
    {
      $this->BestOfferCounterEnabled = $BestOfferCounterEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBestOfferAutoDeclineEnabled()
    {
      return $this->BestOfferAutoDeclineEnabled;
    }

    /**
     * @param boolean $BestOfferAutoDeclineEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setBestOfferAutoDeclineEnabled($BestOfferAutoDeclineEnabled)
    {
      $this->BestOfferAutoDeclineEnabled = $BestOfferAutoDeclineEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketSpecialitySubscription()
    {
      return $this->LocalMarketSpecialitySubscription;
    }

    /**
     * @param boolean $LocalMarketSpecialitySubscription
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketSpecialitySubscription($LocalMarketSpecialitySubscription)
    {
      $this->LocalMarketSpecialitySubscription = $LocalMarketSpecialitySubscription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketRegularSubscription()
    {
      return $this->LocalMarketRegularSubscription;
    }

    /**
     * @param boolean $LocalMarketRegularSubscription
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketRegularSubscription($LocalMarketRegularSubscription)
    {
      $this->LocalMarketRegularSubscription = $LocalMarketRegularSubscription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketPremiumSubscription()
    {
      return $this->LocalMarketPremiumSubscription;
    }

    /**
     * @param boolean $LocalMarketPremiumSubscription
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketPremiumSubscription($LocalMarketPremiumSubscription)
    {
      $this->LocalMarketPremiumSubscription = $LocalMarketPremiumSubscription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketNonSubscription()
    {
      return $this->LocalMarketNonSubscription;
    }

    /**
     * @param boolean $LocalMarketNonSubscription
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketNonSubscription($LocalMarketNonSubscription)
    {
      $this->LocalMarketNonSubscription = $LocalMarketNonSubscription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpressEnabled()
    {
      return $this->ExpressEnabled;
    }

    /**
     * @param boolean $ExpressEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setExpressEnabled($ExpressEnabled)
    {
      $this->ExpressEnabled = $ExpressEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpressPicturesRequired()
    {
      return $this->ExpressPicturesRequired;
    }

    /**
     * @param boolean $ExpressPicturesRequired
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setExpressPicturesRequired($ExpressPicturesRequired)
    {
      $this->ExpressPicturesRequired = $ExpressPicturesRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpressConditionRequired()
    {
      return $this->ExpressConditionRequired;
    }

    /**
     * @param boolean $ExpressConditionRequired
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setExpressConditionRequired($ExpressConditionRequired)
    {
      $this->ExpressConditionRequired = $ExpressConditionRequired;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinimumReservePrice()
    {
      return $this->MinimumReservePrice;
    }

    /**
     * @param float $MinimumReservePrice
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setMinimumReservePrice($MinimumReservePrice)
    {
      $this->MinimumReservePrice = $MinimumReservePrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellerContactDetailsEnabled()
    {
      return $this->SellerContactDetailsEnabled;
    }

    /**
     * @param boolean $SellerContactDetailsEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setSellerContactDetailsEnabled($SellerContactDetailsEnabled)
    {
      $this->SellerContactDetailsEnabled = $SellerContactDetailsEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTransactionConfirmationRequestEnabled()
    {
      return $this->TransactionConfirmationRequestEnabled;
    }

    /**
     * @param boolean $TransactionConfirmationRequestEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setTransactionConfirmationRequestEnabled($TransactionConfirmationRequestEnabled)
    {
      $this->TransactionConfirmationRequestEnabled = $TransactionConfirmationRequestEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStoreInventoryEnabled()
    {
      return $this->StoreInventoryEnabled;
    }

    /**
     * @param boolean $StoreInventoryEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setStoreInventoryEnabled($StoreInventoryEnabled)
    {
      $this->StoreInventoryEnabled = $StoreInventoryEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSkypeMeTransactionalEnabled()
    {
      return $this->SkypeMeTransactionalEnabled;
    }

    /**
     * @param boolean $SkypeMeTransactionalEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setSkypeMeTransactionalEnabled($SkypeMeTransactionalEnabled)
    {
      $this->SkypeMeTransactionalEnabled = $SkypeMeTransactionalEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSkypeMeNonTransactionalEnabled()
    {
      return $this->SkypeMeNonTransactionalEnabled;
    }

    /**
     * @param boolean $SkypeMeNonTransactionalEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setSkypeMeNonTransactionalEnabled($SkypeMeNonTransactionalEnabled)
    {
      $this->SkypeMeNonTransactionalEnabled = $SkypeMeNonTransactionalEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdPaymentMethodEnabledCodeType
     */
    public function getClassifiedAdPaymentMethodEnabled()
    {
      return $this->ClassifiedAdPaymentMethodEnabled;
    }

    /**
     * @param ClassifiedAdPaymentMethodEnabledCodeType $ClassifiedAdPaymentMethodEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdPaymentMethodEnabled($ClassifiedAdPaymentMethodEnabled)
    {
      $this->ClassifiedAdPaymentMethodEnabled = $ClassifiedAdPaymentMethodEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClassifiedAdShippingMethodEnabled()
    {
      return $this->ClassifiedAdShippingMethodEnabled;
    }

    /**
     * @param boolean $ClassifiedAdShippingMethodEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdShippingMethodEnabled($ClassifiedAdShippingMethodEnabled)
    {
      $this->ClassifiedAdShippingMethodEnabled = $ClassifiedAdShippingMethodEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdBestOfferEnabledCodeType
     */
    public function getClassifiedAdBestOfferEnabled()
    {
      return $this->ClassifiedAdBestOfferEnabled;
    }

    /**
     * @param ClassifiedAdBestOfferEnabledCodeType $ClassifiedAdBestOfferEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdBestOfferEnabled($ClassifiedAdBestOfferEnabled)
    {
      $this->ClassifiedAdBestOfferEnabled = $ClassifiedAdBestOfferEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClassifiedAdCounterOfferEnabled()
    {
      return $this->ClassifiedAdCounterOfferEnabled;
    }

    /**
     * @param boolean $ClassifiedAdCounterOfferEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdCounterOfferEnabled($ClassifiedAdCounterOfferEnabled)
    {
      $this->ClassifiedAdCounterOfferEnabled = $ClassifiedAdCounterOfferEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClassifiedAdAutoDeclineEnabled()
    {
      return $this->ClassifiedAdAutoDeclineEnabled;
    }

    /**
     * @param boolean $ClassifiedAdAutoDeclineEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdAutoDeclineEnabled($ClassifiedAdAutoDeclineEnabled)
    {
      $this->ClassifiedAdAutoDeclineEnabled = $ClassifiedAdAutoDeclineEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClassifiedAdContactByPhoneEnabled()
    {
      return $this->ClassifiedAdContactByPhoneEnabled;
    }

    /**
     * @param boolean $ClassifiedAdContactByPhoneEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdContactByPhoneEnabled($ClassifiedAdContactByPhoneEnabled)
    {
      $this->ClassifiedAdContactByPhoneEnabled = $ClassifiedAdContactByPhoneEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
      return $this->ClassifiedAdContactByEmailEnabled;
    }

    /**
     * @param boolean $ClassifiedAdContactByEmailEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdContactByEmailEnabled($ClassifiedAdContactByEmailEnabled)
    {
      $this->ClassifiedAdContactByEmailEnabled = $ClassifiedAdContactByEmailEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSafePaymentRequired()
    {
      return $this->SafePaymentRequired;
    }

    /**
     * @param boolean $SafePaymentRequired
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setSafePaymentRequired($SafePaymentRequired)
    {
      $this->SafePaymentRequired = $SafePaymentRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClassifiedAdPayPerLeadEnabled()
    {
      return $this->ClassifiedAdPayPerLeadEnabled;
    }

    /**
     * @param boolean $ClassifiedAdPayPerLeadEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdPayPerLeadEnabled($ClassifiedAdPayPerLeadEnabled)
    {
      $this->ClassifiedAdPayPerLeadEnabled = $ClassifiedAdPayPerLeadEnabled;
      return $this;
    }

    /**
     * @return ItemSpecificsEnabledCodeType
     */
    public function getItemSpecificsEnabled()
    {
      return $this->ItemSpecificsEnabled;
    }

    /**
     * @param ItemSpecificsEnabledCodeType $ItemSpecificsEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setItemSpecificsEnabled($ItemSpecificsEnabled)
    {
      $this->ItemSpecificsEnabled = $ItemSpecificsEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaisaPayFullEscrowEnabled()
    {
      return $this->PaisaPayFullEscrowEnabled;
    }

    /**
     * @param boolean $PaisaPayFullEscrowEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setPaisaPayFullEscrowEnabled($PaisaPayFullEscrowEnabled)
    {
      $this->PaisaPayFullEscrowEnabled = $PaisaPayFullEscrowEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUPCIdentifierEnabled()
    {
      return $this->UPCIdentifierEnabled;
    }

    /**
     * @param boolean $UPCIdentifierEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setUPCIdentifierEnabled($UPCIdentifierEnabled)
    {
      $this->UPCIdentifierEnabled = $UPCIdentifierEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEANIdentifierEnabled()
    {
      return $this->EANIdentifierEnabled;
    }

    /**
     * @param boolean $EANIdentifierEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEANIdentifierEnabled($EANIdentifierEnabled)
    {
      $this->EANIdentifierEnabled = $EANIdentifierEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getISBNIdentifierEnabled()
    {
      return $this->ISBNIdentifierEnabled;
    }

    /**
     * @param boolean $ISBNIdentifierEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setISBNIdentifierEnabled($ISBNIdentifierEnabled)
    {
      $this->ISBNIdentifierEnabled = $ISBNIdentifierEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBrandMPNIdentifierEnabled()
    {
      return $this->BrandMPNIdentifierEnabled;
    }

    /**
     * @param boolean $BrandMPNIdentifierEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setBrandMPNIdentifierEnabled($BrandMPNIdentifierEnabled)
    {
      $this->BrandMPNIdentifierEnabled = $BrandMPNIdentifierEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClassifiedAdAutoAcceptEnabled()
    {
      return $this->ClassifiedAdAutoAcceptEnabled;
    }

    /**
     * @param boolean $ClassifiedAdAutoAcceptEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdAutoAcceptEnabled($ClassifiedAdAutoAcceptEnabled)
    {
      $this->ClassifiedAdAutoAcceptEnabled = $ClassifiedAdAutoAcceptEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBestOfferAutoAcceptEnabled()
    {
      return $this->BestOfferAutoAcceptEnabled;
    }

    /**
     * @param boolean $BestOfferAutoAcceptEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setBestOfferAutoAcceptEnabled($BestOfferAutoAcceptEnabled)
    {
      $this->BestOfferAutoAcceptEnabled = $BestOfferAutoAcceptEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCrossBorderTradeNorthAmericaEnabled()
    {
      return $this->CrossBorderTradeNorthAmericaEnabled;
    }

    /**
     * @param boolean $CrossBorderTradeNorthAmericaEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setCrossBorderTradeNorthAmericaEnabled($CrossBorderTradeNorthAmericaEnabled)
    {
      $this->CrossBorderTradeNorthAmericaEnabled = $CrossBorderTradeNorthAmericaEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCrossBorderTradeGBEnabled()
    {
      return $this->CrossBorderTradeGBEnabled;
    }

    /**
     * @param boolean $CrossBorderTradeGBEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setCrossBorderTradeGBEnabled($CrossBorderTradeGBEnabled)
    {
      $this->CrossBorderTradeGBEnabled = $CrossBorderTradeGBEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCrossBorderTradeAustraliaEnabled()
    {
      return $this->CrossBorderTradeAustraliaEnabled;
    }

    /**
     * @param boolean $CrossBorderTradeAustraliaEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setCrossBorderTradeAustraliaEnabled($CrossBorderTradeAustraliaEnabled)
    {
      $this->CrossBorderTradeAustraliaEnabled = $CrossBorderTradeAustraliaEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPayPalBuyerProtectionEnabled()
    {
      return $this->PayPalBuyerProtectionEnabled;
    }

    /**
     * @param boolean $PayPalBuyerProtectionEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setPayPalBuyerProtectionEnabled($PayPalBuyerProtectionEnabled)
    {
      $this->PayPalBuyerProtectionEnabled = $PayPalBuyerProtectionEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBuyerGuaranteeEnabled()
    {
      return $this->BuyerGuaranteeEnabled;
    }

    /**
     * @param boolean $BuyerGuaranteeEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setBuyerGuaranteeEnabled($BuyerGuaranteeEnabled)
    {
      $this->BuyerGuaranteeEnabled = $BuyerGuaranteeEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCombinedFixedPriceTreatmentEnabled()
    {
      return $this->CombinedFixedPriceTreatmentEnabled;
    }

    /**
     * @param boolean $CombinedFixedPriceTreatmentEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setCombinedFixedPriceTreatmentEnabled($CombinedFixedPriceTreatmentEnabled)
    {
      $this->CombinedFixedPriceTreatmentEnabled = $CombinedFixedPriceTreatmentEnabled;
      return $this;
    }

    /**
     * @return ListingEnhancementDurationReferenceType
     */
    public function getGalleryFeaturedDurations()
    {
      return $this->GalleryFeaturedDurations;
    }

    /**
     * @param ListingEnhancementDurationReferenceType $GalleryFeaturedDurations
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setGalleryFeaturedDurations($GalleryFeaturedDurations)
    {
      $this->GalleryFeaturedDurations = $GalleryFeaturedDurations;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPayPalRequired()
    {
      return $this->PayPalRequired;
    }

    /**
     * @param boolean $PayPalRequired
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setPayPalRequired($PayPalRequired)
    {
      $this->PayPalRequired = $PayPalRequired;
      return $this;
    }

    /**
     * @return AdFormatEnabledCodeType
     */
    public function getEBayMotorsProAdFormatEnabled()
    {
      return $this->eBayMotorsProAdFormatEnabled;
    }

    /**
     * @param AdFormatEnabledCodeType $eBayMotorsProAdFormatEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProAdFormatEnabled($eBayMotorsProAdFormatEnabled)
    {
      $this->eBayMotorsProAdFormatEnabled = $eBayMotorsProAdFormatEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEBayMotorsProContactByPhoneEnabled()
    {
      return $this->eBayMotorsProContactByPhoneEnabled;
    }

    /**
     * @param boolean $eBayMotorsProContactByPhoneEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProContactByPhoneEnabled($eBayMotorsProContactByPhoneEnabled)
    {
      $this->eBayMotorsProContactByPhoneEnabled = $eBayMotorsProContactByPhoneEnabled;
      return $this;
    }

    /**
     * @return int
     */
    public function getEBayMotorsProPhoneCount()
    {
      return $this->eBayMotorsProPhoneCount;
    }

    /**
     * @param int $eBayMotorsProPhoneCount
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProPhoneCount($eBayMotorsProPhoneCount)
    {
      $this->eBayMotorsProPhoneCount = $eBayMotorsProPhoneCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEBayMotorsProContactByAddressEnabled()
    {
      return $this->eBayMotorsProContactByAddressEnabled;
    }

    /**
     * @param boolean $eBayMotorsProContactByAddressEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProContactByAddressEnabled($eBayMotorsProContactByAddressEnabled)
    {
      $this->eBayMotorsProContactByAddressEnabled = $eBayMotorsProContactByAddressEnabled;
      return $this;
    }

    /**
     * @return int
     */
    public function getEBayMotorsProStreetCount()
    {
      return $this->eBayMotorsProStreetCount;
    }

    /**
     * @param int $eBayMotorsProStreetCount
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProStreetCount($eBayMotorsProStreetCount)
    {
      $this->eBayMotorsProStreetCount = $eBayMotorsProStreetCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEBayMotorsProCompanyNameEnabled()
    {
      return $this->eBayMotorsProCompanyNameEnabled;
    }

    /**
     * @param boolean $eBayMotorsProCompanyNameEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProCompanyNameEnabled($eBayMotorsProCompanyNameEnabled)
    {
      $this->eBayMotorsProCompanyNameEnabled = $eBayMotorsProCompanyNameEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEBayMotorsProContactByEmailEnabled()
    {
      return $this->eBayMotorsProContactByEmailEnabled;
    }

    /**
     * @param boolean $eBayMotorsProContactByEmailEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProContactByEmailEnabled($eBayMotorsProContactByEmailEnabled)
    {
      $this->eBayMotorsProContactByEmailEnabled = $eBayMotorsProContactByEmailEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdBestOfferEnabledCodeType
     */
    public function getEBayMotorsProBestOfferEnabled()
    {
      return $this->eBayMotorsProBestOfferEnabled;
    }

    /**
     * @param ClassifiedAdBestOfferEnabledCodeType $eBayMotorsProBestOfferEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProBestOfferEnabled($eBayMotorsProBestOfferEnabled)
    {
      $this->eBayMotorsProBestOfferEnabled = $eBayMotorsProBestOfferEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEBayMotorsProAutoAcceptEnabled()
    {
      return $this->eBayMotorsProAutoAcceptEnabled;
    }

    /**
     * @param boolean $eBayMotorsProAutoAcceptEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProAutoAcceptEnabled($eBayMotorsProAutoAcceptEnabled)
    {
      $this->eBayMotorsProAutoAcceptEnabled = $eBayMotorsProAutoAcceptEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEBayMotorsProAutoDeclineEnabled()
    {
      return $this->eBayMotorsProAutoDeclineEnabled;
    }

    /**
     * @param boolean $eBayMotorsProAutoDeclineEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProAutoDeclineEnabled($eBayMotorsProAutoDeclineEnabled)
    {
      $this->eBayMotorsProAutoDeclineEnabled = $eBayMotorsProAutoDeclineEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdPaymentMethodEnabledCodeType
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled()
    {
      return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
    }

    /**
     * @param ClassifiedAdPaymentMethodEnabledCodeType $eBayMotorsProPaymentMethodCheckOutEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled($eBayMotorsProPaymentMethodCheckOutEnabled)
    {
      $this->eBayMotorsProPaymentMethodCheckOutEnabled = $eBayMotorsProPaymentMethodCheckOutEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEBayMotorsProShippingMethodEnabled()
    {
      return $this->eBayMotorsProShippingMethodEnabled;
    }

    /**
     * @param boolean $eBayMotorsProShippingMethodEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProShippingMethodEnabled($eBayMotorsProShippingMethodEnabled)
    {
      $this->eBayMotorsProShippingMethodEnabled = $eBayMotorsProShippingMethodEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEBayMotorsProCounterOfferEnabled()
    {
      return $this->eBayMotorsProCounterOfferEnabled;
    }

    /**
     * @param boolean $eBayMotorsProCounterOfferEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProCounterOfferEnabled($eBayMotorsProCounterOfferEnabled)
    {
      $this->eBayMotorsProCounterOfferEnabled = $eBayMotorsProCounterOfferEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEBayMotorsProSellerContactDetailsEnabled()
    {
      return $this->eBayMotorsProSellerContactDetailsEnabled;
    }

    /**
     * @param boolean $eBayMotorsProSellerContactDetailsEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setEBayMotorsProSellerContactDetailsEnabled($eBayMotorsProSellerContactDetailsEnabled)
    {
      $this->eBayMotorsProSellerContactDetailsEnabled = $eBayMotorsProSellerContactDetailsEnabled;
      return $this;
    }

    /**
     * @return AdFormatEnabledCodeType
     */
    public function getLocalMarketAdFormatEnabled()
    {
      return $this->LocalMarketAdFormatEnabled;
    }

    /**
     * @param AdFormatEnabledCodeType $LocalMarketAdFormatEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketAdFormatEnabled($LocalMarketAdFormatEnabled)
    {
      $this->LocalMarketAdFormatEnabled = $LocalMarketAdFormatEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketContactByPhoneEnabled()
    {
      return $this->LocalMarketContactByPhoneEnabled;
    }

    /**
     * @param boolean $LocalMarketContactByPhoneEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketContactByPhoneEnabled($LocalMarketContactByPhoneEnabled)
    {
      $this->LocalMarketContactByPhoneEnabled = $LocalMarketContactByPhoneEnabled;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocalMarketPhoneCount()
    {
      return $this->LocalMarketPhoneCount;
    }

    /**
     * @param int $LocalMarketPhoneCount
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketPhoneCount($LocalMarketPhoneCount)
    {
      $this->LocalMarketPhoneCount = $LocalMarketPhoneCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketContactByAddressEnabled()
    {
      return $this->LocalMarketContactByAddressEnabled;
    }

    /**
     * @param boolean $LocalMarketContactByAddressEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketContactByAddressEnabled($LocalMarketContactByAddressEnabled)
    {
      $this->LocalMarketContactByAddressEnabled = $LocalMarketContactByAddressEnabled;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocalMarketStreetCount()
    {
      return $this->LocalMarketStreetCount;
    }

    /**
     * @param int $LocalMarketStreetCount
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketStreetCount($LocalMarketStreetCount)
    {
      $this->LocalMarketStreetCount = $LocalMarketStreetCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketCompanyNameEnabled()
    {
      return $this->LocalMarketCompanyNameEnabled;
    }

    /**
     * @param boolean $LocalMarketCompanyNameEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketCompanyNameEnabled($LocalMarketCompanyNameEnabled)
    {
      $this->LocalMarketCompanyNameEnabled = $LocalMarketCompanyNameEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketContactByEmailEnabled()
    {
      return $this->LocalMarketContactByEmailEnabled;
    }

    /**
     * @param boolean $LocalMarketContactByEmailEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketContactByEmailEnabled($LocalMarketContactByEmailEnabled)
    {
      $this->LocalMarketContactByEmailEnabled = $LocalMarketContactByEmailEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdBestOfferEnabledCodeType
     */
    public function getLocalMarketBestOfferEnabled()
    {
      return $this->LocalMarketBestOfferEnabled;
    }

    /**
     * @param ClassifiedAdBestOfferEnabledCodeType $LocalMarketBestOfferEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketBestOfferEnabled($LocalMarketBestOfferEnabled)
    {
      $this->LocalMarketBestOfferEnabled = $LocalMarketBestOfferEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketAutoAcceptEnabled()
    {
      return $this->LocalMarketAutoAcceptEnabled;
    }

    /**
     * @param boolean $LocalMarketAutoAcceptEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketAutoAcceptEnabled($LocalMarketAutoAcceptEnabled)
    {
      $this->LocalMarketAutoAcceptEnabled = $LocalMarketAutoAcceptEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketAutoDeclineEnabled()
    {
      return $this->LocalMarketAutoDeclineEnabled;
    }

    /**
     * @param boolean $LocalMarketAutoDeclineEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketAutoDeclineEnabled($LocalMarketAutoDeclineEnabled)
    {
      $this->LocalMarketAutoDeclineEnabled = $LocalMarketAutoDeclineEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdPaymentMethodEnabledCodeType
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled()
    {
      return $this->LocalMarketPaymentMethodCheckOutEnabled;
    }

    /**
     * @param ClassifiedAdPaymentMethodEnabledCodeType $LocalMarketPaymentMethodCheckOutEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled($LocalMarketPaymentMethodCheckOutEnabled)
    {
      $this->LocalMarketPaymentMethodCheckOutEnabled = $LocalMarketPaymentMethodCheckOutEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketShippingMethodEnabled()
    {
      return $this->LocalMarketShippingMethodEnabled;
    }

    /**
     * @param boolean $LocalMarketShippingMethodEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketShippingMethodEnabled($LocalMarketShippingMethodEnabled)
    {
      $this->LocalMarketShippingMethodEnabled = $LocalMarketShippingMethodEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketCounterOfferEnabled()
    {
      return $this->LocalMarketCounterOfferEnabled;
    }

    /**
     * @param boolean $LocalMarketCounterOfferEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketCounterOfferEnabled($LocalMarketCounterOfferEnabled)
    {
      $this->LocalMarketCounterOfferEnabled = $LocalMarketCounterOfferEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalMarketSellerContactDetailsEnabled()
    {
      return $this->LocalMarketSellerContactDetailsEnabled;
    }

    /**
     * @param boolean $LocalMarketSellerContactDetailsEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setLocalMarketSellerContactDetailsEnabled($LocalMarketSellerContactDetailsEnabled)
    {
      $this->LocalMarketSellerContactDetailsEnabled = $LocalMarketSellerContactDetailsEnabled;
      return $this;
    }

    /**
     * @return int
     */
    public function getClassifiedAdPhoneCount()
    {
      return $this->ClassifiedAdPhoneCount;
    }

    /**
     * @param int $ClassifiedAdPhoneCount
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdPhoneCount($ClassifiedAdPhoneCount)
    {
      $this->ClassifiedAdPhoneCount = $ClassifiedAdPhoneCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClassifiedAdContactByAddressEnabled()
    {
      return $this->ClassifiedAdContactByAddressEnabled;
    }

    /**
     * @param boolean $ClassifiedAdContactByAddressEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdContactByAddressEnabled($ClassifiedAdContactByAddressEnabled)
    {
      $this->ClassifiedAdContactByAddressEnabled = $ClassifiedAdContactByAddressEnabled;
      return $this;
    }

    /**
     * @return int
     */
    public function getClassifiedAdStreetCount()
    {
      return $this->ClassifiedAdStreetCount;
    }

    /**
     * @param int $ClassifiedAdStreetCount
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdStreetCount($ClassifiedAdStreetCount)
    {
      $this->ClassifiedAdStreetCount = $ClassifiedAdStreetCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClassifiedAdCompanyNameEnabled()
    {
      return $this->ClassifiedAdCompanyNameEnabled;
    }

    /**
     * @param boolean $ClassifiedAdCompanyNameEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setClassifiedAdCompanyNameEnabled($ClassifiedAdCompanyNameEnabled)
    {
      $this->ClassifiedAdCompanyNameEnabled = $ClassifiedAdCompanyNameEnabled;
      return $this;
    }

    /**
     * @return GeographicExposureCodeType
     */
    public function getSpecialitySubscription()
    {
      return $this->SpecialitySubscription;
    }

    /**
     * @param GeographicExposureCodeType $SpecialitySubscription
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setSpecialitySubscription($SpecialitySubscription)
    {
      $this->SpecialitySubscription = $SpecialitySubscription;
      return $this;
    }

    /**
     * @return GeographicExposureCodeType
     */
    public function getRegularSubscription()
    {
      return $this->RegularSubscription;
    }

    /**
     * @param GeographicExposureCodeType $RegularSubscription
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setRegularSubscription($RegularSubscription)
    {
      $this->RegularSubscription = $RegularSubscription;
      return $this;
    }

    /**
     * @return GeographicExposureCodeType
     */
    public function getPremiumSubscription()
    {
      return $this->PremiumSubscription;
    }

    /**
     * @param GeographicExposureCodeType $PremiumSubscription
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setPremiumSubscription($PremiumSubscription)
    {
      $this->PremiumSubscription = $PremiumSubscription;
      return $this;
    }

    /**
     * @return GeographicExposureCodeType
     */
    public function getNonSubscription()
    {
      return $this->NonSubscription;
    }

    /**
     * @param GeographicExposureCodeType $NonSubscription
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setNonSubscription($NonSubscription)
    {
      $this->NonSubscription = $NonSubscription;
      return $this;
    }

    /**
     * @return INEscrowWorkflowTimelineCodeType
     */
    public function getINEscrowWorkflowTimeline()
    {
      return $this->INEscrowWorkflowTimeline;
    }

    /**
     * @param INEscrowWorkflowTimelineCodeType $INEscrowWorkflowTimeline
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setINEscrowWorkflowTimeline($INEscrowWorkflowTimeline)
    {
      $this->INEscrowWorkflowTimeline = $INEscrowWorkflowTimeline;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPayPalRequiredForStoreOwner()
    {
      return $this->PayPalRequiredForStoreOwner;
    }

    /**
     * @param boolean $PayPalRequiredForStoreOwner
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setPayPalRequiredForStoreOwner($PayPalRequiredForStoreOwner)
    {
      $this->PayPalRequiredForStoreOwner = $PayPalRequiredForStoreOwner;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReviseQuantityAllowed()
    {
      return $this->ReviseQuantityAllowed;
    }

    /**
     * @param boolean $ReviseQuantityAllowed
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setReviseQuantityAllowed($ReviseQuantityAllowed)
    {
      $this->ReviseQuantityAllowed = $ReviseQuantityAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRevisePriceAllowed()
    {
      return $this->RevisePriceAllowed;
    }

    /**
     * @param boolean $RevisePriceAllowed
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setRevisePriceAllowed($RevisePriceAllowed)
    {
      $this->RevisePriceAllowed = $RevisePriceAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStoreOwnerExtendedListingDurationsEnabled()
    {
      return $this->StoreOwnerExtendedListingDurationsEnabled;
    }

    /**
     * @param boolean $StoreOwnerExtendedListingDurationsEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setStoreOwnerExtendedListingDurationsEnabled($StoreOwnerExtendedListingDurationsEnabled)
    {
      $this->StoreOwnerExtendedListingDurationsEnabled = $StoreOwnerExtendedListingDurationsEnabled;
      return $this;
    }

    /**
     * @return StoreOwnerExtendedListingDurationsType
     */
    public function getStoreOwnerExtendedListingDurations()
    {
      return $this->StoreOwnerExtendedListingDurations;
    }

    /**
     * @param StoreOwnerExtendedListingDurationsType $StoreOwnerExtendedListingDurations
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setStoreOwnerExtendedListingDurations($StoreOwnerExtendedListingDurations)
    {
      $this->StoreOwnerExtendedListingDurations = $StoreOwnerExtendedListingDurations;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnPolicyEnabled()
    {
      return $this->ReturnPolicyEnabled;
    }

    /**
     * @param boolean $ReturnPolicyEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setReturnPolicyEnabled($ReturnPolicyEnabled)
    {
      $this->ReturnPolicyEnabled = $ReturnPolicyEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHandlingTimeEnabled()
    {
      return $this->HandlingTimeEnabled;
    }

    /**
     * @param boolean $HandlingTimeEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setHandlingTimeEnabled($HandlingTimeEnabled)
    {
      $this->HandlingTimeEnabled = $HandlingTimeEnabled;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMaxFlatShippingCost()
    {
      return $this->MaxFlatShippingCost;
    }

    /**
     * @param AmountType $MaxFlatShippingCost
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setMaxFlatShippingCost($MaxFlatShippingCost)
    {
      $this->MaxFlatShippingCost = $MaxFlatShippingCost;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getGroup1MaxFlatShippingCost()
    {
      return $this->Group1MaxFlatShippingCost;
    }

    /**
     * @param AmountType $Group1MaxFlatShippingCost
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setGroup1MaxFlatShippingCost($Group1MaxFlatShippingCost)
    {
      $this->Group1MaxFlatShippingCost = $Group1MaxFlatShippingCost;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getGroup2MaxFlatShippingCost()
    {
      return $this->Group2MaxFlatShippingCost;
    }

    /**
     * @param AmountType $Group2MaxFlatShippingCost
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setGroup2MaxFlatShippingCost($Group2MaxFlatShippingCost)
    {
      $this->Group2MaxFlatShippingCost = $Group2MaxFlatShippingCost;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getGroup3MaxFlatShippingCost()
    {
      return $this->Group3MaxFlatShippingCost;
    }

    /**
     * @param AmountType $Group3MaxFlatShippingCost
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setGroup3MaxFlatShippingCost($Group3MaxFlatShippingCost)
    {
      $this->Group3MaxFlatShippingCost = $Group3MaxFlatShippingCost;
      return $this;
    }

    /**
     * @return BuyerPaymentMethodCodeType[]
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param BuyerPaymentMethodCodeType[] $PaymentMethod
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setPaymentMethod(array $PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVariationsEnabled()
    {
      return $this->VariationsEnabled;
    }

    /**
     * @param boolean $VariationsEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setVariationsEnabled($VariationsEnabled)
    {
      $this->VariationsEnabled = $VariationsEnabled;
      return $this;
    }

    /**
     * @return AttributeConversionEnabledCodeType
     */
    public function getAttributeConversionEnabled()
    {
      return $this->AttributeConversionEnabled;
    }

    /**
     * @param AttributeConversionEnabledCodeType $AttributeConversionEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setAttributeConversionEnabled($AttributeConversionEnabled)
    {
      $this->AttributeConversionEnabled = $AttributeConversionEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFreeGalleryPlusEnabled()
    {
      return $this->FreeGalleryPlusEnabled;
    }

    /**
     * @param boolean $FreeGalleryPlusEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setFreeGalleryPlusEnabled($FreeGalleryPlusEnabled)
    {
      $this->FreeGalleryPlusEnabled = $FreeGalleryPlusEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFreePicturePackEnabled()
    {
      return $this->FreePicturePackEnabled;
    }

    /**
     * @param boolean $FreePicturePackEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setFreePicturePackEnabled($FreePicturePackEnabled)
    {
      $this->FreePicturePackEnabled = $FreePicturePackEnabled;
      return $this;
    }

    /**
     * @return ItemCompatibilityEnabledCodeType
     */
    public function getItemCompatibilityEnabled()
    {
      return $this->ItemCompatibilityEnabled;
    }

    /**
     * @param ItemCompatibilityEnabledCodeType $ItemCompatibilityEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setItemCompatibilityEnabled($ItemCompatibilityEnabled)
    {
      $this->ItemCompatibilityEnabled = $ItemCompatibilityEnabled;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinItemCompatibility()
    {
      return $this->MinItemCompatibility;
    }

    /**
     * @param int $MinItemCompatibility
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setMinItemCompatibility($MinItemCompatibility)
    {
      $this->MinItemCompatibility = $MinItemCompatibility;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxItemCompatibility()
    {
      return $this->MaxItemCompatibility;
    }

    /**
     * @param int $MaxItemCompatibility
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setMaxItemCompatibility($MaxItemCompatibility)
    {
      $this->MaxItemCompatibility = $MaxItemCompatibility;
      return $this;
    }

    /**
     * @return ConditionEnabledCodeType
     */
    public function getConditionEnabled()
    {
      return $this->ConditionEnabled;
    }

    /**
     * @param ConditionEnabledCodeType $ConditionEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setConditionEnabled($ConditionEnabled)
    {
      $this->ConditionEnabled = $ConditionEnabled;
      return $this;
    }

    /**
     * @return ConditionValuesType
     */
    public function getConditionValues()
    {
      return $this->ConditionValues;
    }

    /**
     * @param ConditionValuesType $ConditionValues
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setConditionValues($ConditionValues)
    {
      $this->ConditionValues = $ConditionValues;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValueCategory()
    {
      return $this->ValueCategory;
    }

    /**
     * @param boolean $ValueCategory
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setValueCategory($ValueCategory)
    {
      $this->ValueCategory = $ValueCategory;
      return $this;
    }

    /**
     * @return ProductCreationEnabledCodeType
     */
    public function getProductCreationEnabled()
    {
      return $this->ProductCreationEnabled;
    }

    /**
     * @param ProductCreationEnabledCodeType $ProductCreationEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setProductCreationEnabled($ProductCreationEnabled)
    {
      $this->ProductCreationEnabled = $ProductCreationEnabled;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxGranularFitmentCount()
    {
      return $this->MaxGranularFitmentCount;
    }

    /**
     * @param int $MaxGranularFitmentCount
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setMaxGranularFitmentCount($MaxGranularFitmentCount)
    {
      $this->MaxGranularFitmentCount = $MaxGranularFitmentCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompatibleVehicleType()
    {
      return $this->CompatibleVehicleType;
    }

    /**
     * @param string $CompatibleVehicleType
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setCompatibleVehicleType($CompatibleVehicleType)
    {
      $this->CompatibleVehicleType = $CompatibleVehicleType;
      return $this;
    }

    /**
     * @return PaymentOptionsGroupEnabledCodeType
     */
    public function getPaymentOptionsGroup()
    {
      return $this->PaymentOptionsGroup;
    }

    /**
     * @param PaymentOptionsGroupEnabledCodeType $PaymentOptionsGroup
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setPaymentOptionsGroup($PaymentOptionsGroup)
    {
      $this->PaymentOptionsGroup = $PaymentOptionsGroup;
      return $this;
    }

    /**
     * @return ProfileCategoryGroupCodeType
     */
    public function getShippingProfileCategoryGroup()
    {
      return $this->ShippingProfileCategoryGroup;
    }

    /**
     * @param ProfileCategoryGroupCodeType $ShippingProfileCategoryGroup
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setShippingProfileCategoryGroup($ShippingProfileCategoryGroup)
    {
      $this->ShippingProfileCategoryGroup = $ShippingProfileCategoryGroup;
      return $this;
    }

    /**
     * @return ProfileCategoryGroupCodeType
     */
    public function getPaymentProfileCategoryGroup()
    {
      return $this->PaymentProfileCategoryGroup;
    }

    /**
     * @param ProfileCategoryGroupCodeType $PaymentProfileCategoryGroup
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setPaymentProfileCategoryGroup($PaymentProfileCategoryGroup)
    {
      $this->PaymentProfileCategoryGroup = $PaymentProfileCategoryGroup;
      return $this;
    }

    /**
     * @return ProfileCategoryGroupCodeType
     */
    public function getReturnPolicyProfileCategoryGroup()
    {
      return $this->ReturnPolicyProfileCategoryGroup;
    }

    /**
     * @param ProfileCategoryGroupCodeType $ReturnPolicyProfileCategoryGroup
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setReturnPolicyProfileCategoryGroup($ReturnPolicyProfileCategoryGroup)
    {
      $this->ReturnPolicyProfileCategoryGroup = $ReturnPolicyProfileCategoryGroup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVINSupported()
    {
      return $this->VINSupported;
    }

    /**
     * @param boolean $VINSupported
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setVINSupported($VINSupported)
    {
      $this->VINSupported = $VINSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVRMSupported()
    {
      return $this->VRMSupported;
    }

    /**
     * @param boolean $VRMSupported
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setVRMSupported($VRMSupported)
    {
      $this->VRMSupported = $VRMSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellerProvidedTitleSupported()
    {
      return $this->SellerProvidedTitleSupported;
    }

    /**
     * @param boolean $SellerProvidedTitleSupported
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setSellerProvidedTitleSupported($SellerProvidedTitleSupported)
    {
      $this->SellerProvidedTitleSupported = $SellerProvidedTitleSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDepositSupported()
    {
      return $this->DepositSupported;
    }

    /**
     * @param boolean $DepositSupported
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setDepositSupported($DepositSupported)
    {
      $this->DepositSupported = $DepositSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGlobalShippingEnabled()
    {
      return $this->GlobalShippingEnabled;
    }

    /**
     * @param boolean $GlobalShippingEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setGlobalShippingEnabled($GlobalShippingEnabled)
    {
      $this->GlobalShippingEnabled = $GlobalShippingEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdditionalCompatibilityEnabled()
    {
      return $this->AdditionalCompatibilityEnabled;
    }

    /**
     * @param boolean $AdditionalCompatibilityEnabled
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setAdditionalCompatibilityEnabled($AdditionalCompatibilityEnabled)
    {
      $this->AdditionalCompatibilityEnabled = $AdditionalCompatibilityEnabled;
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
     * @return \EbayWsdl\CategoryFeatureType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
