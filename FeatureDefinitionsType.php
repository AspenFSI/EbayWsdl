<?php

namespace EbayWsdl;

class FeatureDefinitionsType
{

    /**
     * @var ListingDurationDefinitionsType $ListingDurations
     */
    protected $ListingDurations = null;

    /**
     * @var ShippingTermRequiredDefinitionType $ShippingTermsRequired
     */
    protected $ShippingTermsRequired = null;

    /**
     * @var BestOfferEnabledDefinitionType $BestOfferEnabled
     */
    protected $BestOfferEnabled = null;

    /**
     * @var DutchBINEnabledDefinitionType $DutchBINEnabled
     */
    protected $DutchBINEnabled = null;

    /**
     * @var UserConsentRequiredDefinitionType $UserConsentRequired
     */
    protected $UserConsentRequired = null;

    /**
     * @var HomePageFeaturedEnabledDefinitionType $HomePageFeaturedEnabled
     */
    protected $HomePageFeaturedEnabled = null;

    /**
     * @var ProPackEnabledDefinitionType $ProPackEnabled
     */
    protected $ProPackEnabled = null;

    /**
     * @var BasicUpgradePackEnabledDefinitionType $BasicUpgradePackEnabled
     */
    protected $BasicUpgradePackEnabled = null;

    /**
     * @var ValuePackEnabledDefinitionType $ValuePackEnabled
     */
    protected $ValuePackEnabled = null;

    /**
     * @var ProPackPlusEnabledDefinitionType $ProPackPlusEnabled
     */
    protected $ProPackPlusEnabled = null;

    /**
     * @var AdFormatEnabledDefinitionType $AdFormatEnabled
     */
    protected $AdFormatEnabled = null;

    /**
     * @var BestOfferCounterEnabledDefinitionType $BestOfferCounterEnabled
     */
    protected $BestOfferCounterEnabled = null;

    /**
     * @var BestOfferAutoDeclineEnabledDefinitionType $BestOfferAutoDeclineEnabled
     */
    protected $BestOfferAutoDeclineEnabled = null;

    /**
     * @var LocalMarketSpecialitySubscriptionDefinitionType $LocalMarketSpecialitySubscription
     */
    protected $LocalMarketSpecialitySubscription = null;

    /**
     * @var LocalMarketRegularSubscriptionDefinitionType $LocalMarketRegularSubscription
     */
    protected $LocalMarketRegularSubscription = null;

    /**
     * @var LocalMarketPremiumSubscriptionDefinitionType $LocalMarketPremiumSubscription
     */
    protected $LocalMarketPremiumSubscription = null;

    /**
     * @var LocalMarketNonSubscriptionDefinitionType $LocalMarketNonSubscription
     */
    protected $LocalMarketNonSubscription = null;

    /**
     * @var ExpressEnabledDefinitionType $ExpressEnabled
     */
    protected $ExpressEnabled = null;

    /**
     * @var ExpressPicturesRequiredDefinitionType $ExpressPicturesRequired
     */
    protected $ExpressPicturesRequired = null;

    /**
     * @var ExpressConditionRequiredDefinitionType $ExpressConditionRequired
     */
    protected $ExpressConditionRequired = null;

    /**
     * @var MinimumReservePriceDefinitionType $MinimumReservePrice
     */
    protected $MinimumReservePrice = null;

    /**
     * @var TCREnabledDefinitionType $TransactionConfirmationRequestEnabled
     */
    protected $TransactionConfirmationRequestEnabled = null;

    /**
     * @var SellerContactDetailsEnabledDefinitionType $SellerContactDetailsEnabled
     */
    protected $SellerContactDetailsEnabled = null;

    /**
     * @var StoreInventoryEnabledDefinitionType $StoreInventoryEnabled
     */
    protected $StoreInventoryEnabled = null;

    /**
     * @var SkypeMeTransactionalEnabledDefinitionType $SkypeMeTransactionalEnabled
     */
    protected $SkypeMeTransactionalEnabled = null;

    /**
     * @var SkypeMeNonTransactionalEnabledDefinitionType $SkypeMeNonTransactionalEnabled
     */
    protected $SkypeMeNonTransactionalEnabled = null;

    /**
     * @var LocalListingDistancesRegularDefinitionType $LocalListingDistancesRegular
     */
    protected $LocalListingDistancesRegular = null;

    /**
     * @var LocalListingDistancesSpecialtyDefinitionType $LocalListingDistancesSpecialty
     */
    protected $LocalListingDistancesSpecialty = null;

    /**
     * @var LocalListingDistancesNonSubscriptionDefinitionType $LocalListingDistancesNonSubscription
     */
    protected $LocalListingDistancesNonSubscription = null;

    /**
     * @var ClassifiedAdPaymentMethodEnabledDefinitionType $ClassifiedAdPaymentMethodEnabled
     */
    protected $ClassifiedAdPaymentMethodEnabled = null;

    /**
     * @var ClassifiedAdShippingMethodEnabledDefinitionType $ClassifiedAdShippingMethodEnabled
     */
    protected $ClassifiedAdShippingMethodEnabled = null;

    /**
     * @var ClassifiedAdBestOfferEnabledDefinitionType $ClassifiedAdBestOfferEnabled
     */
    protected $ClassifiedAdBestOfferEnabled = null;

    /**
     * @var ClassifiedAdCounterOfferEnabledDefinitionType $ClassifiedAdCounterOfferEnabled
     */
    protected $ClassifiedAdCounterOfferEnabled = null;

    /**
     * @var ClassifiedAdAutoDeclineEnabledDefinitionType $ClassifiedAdAutoDeclineEnabled
     */
    protected $ClassifiedAdAutoDeclineEnabled = null;

    /**
     * @var ClassifiedAdContactByPhoneEnabledDefinitionType $ClassifiedAdContactByPhoneEnabled
     */
    protected $ClassifiedAdContactByPhoneEnabled = null;

    /**
     * @var ClassifiedAdContactByEmailEnabledDefintionType $ClassifiedAdContactByEmailEnabled
     */
    protected $ClassifiedAdContactByEmailEnabled = null;

    /**
     * @var SafePaymentRequiredDefinitionType $SafePaymentRequired
     */
    protected $SafePaymentRequired = null;

    /**
     * @var ClassifiedAdPayPerLeadEnabledDefinitionType $ClassifiedAdPayPerLeadEnabled
     */
    protected $ClassifiedAdPayPerLeadEnabled = null;

    /**
     * @var ItemSpecificsEnabledDefinitionType $ItemSpecificsEnabled
     */
    protected $ItemSpecificsEnabled = null;

    /**
     * @var PaisaPayFullEscrowEnabledDefinitionType $PaisaPayFullEscrowEnabled
     */
    protected $PaisaPayFullEscrowEnabled = null;

    /**
     * @var ISBNIdentifierEnabledDefinitionType $ISBNIdentifierEnabled
     */
    protected $ISBNIdentifierEnabled = null;

    /**
     * @var UPCIdentifierEnabledDefinitionType $UPCIdentifierEnabled
     */
    protected $UPCIdentifierEnabled = null;

    /**
     * @var EANIdentifierEnabledDefinitionType $EANIdentifierEnabled
     */
    protected $EANIdentifierEnabled = null;

    /**
     * @var BrandMPNIdentifierEnabledDefinitionType $BrandMPNIdentifierEnabled
     */
    protected $BrandMPNIdentifierEnabled = null;

    /**
     * @var BestOfferAutoAcceptEnabledDefinitionType $BestOfferAutoAcceptEnabled
     */
    protected $BestOfferAutoAcceptEnabled = null;

    /**
     * @var ClassifiedAdAutoAcceptEnabledDefinitionType $ClassifiedAdAutoAcceptEnabled
     */
    protected $ClassifiedAdAutoAcceptEnabled = null;

    /**
     * @var CrossBorderTradeNorthAmericaEnabledDefinitionType $CrossBorderTradeNorthAmericaEnabled
     */
    protected $CrossBorderTradeNorthAmericaEnabled = null;

    /**
     * @var CrossBorderTradeGBEnabledDefinitionType $CrossBorderTradeGBEnabled
     */
    protected $CrossBorderTradeGBEnabled = null;

    /**
     * @var CrossBorderTradeAustraliaEnabledDefinitionType $CrossBorderTradeAustraliaEnabled
     */
    protected $CrossBorderTradeAustraliaEnabled = null;

    /**
     * @var PayPalBuyerProtectionEnabledDefinitionType $PayPalBuyerProtectionEnabled
     */
    protected $PayPalBuyerProtectionEnabled = null;

    /**
     * @var BuyerGuaranteeEnabledDefinitionType $BuyerGuaranteeEnabled
     */
    protected $BuyerGuaranteeEnabled = null;

    /**
     * @var CombinedFixedPriceTreatmentEnabledDefinitionType $CombinedFixedPriceTreatmentEnabled
     */
    protected $CombinedFixedPriceTreatmentEnabled = null;

    /**
     * @var ListingEnhancementDurationDefinitionType $GalleryFeaturedDurations
     */
    protected $GalleryFeaturedDurations = null;

    /**
     * @var INEscrowWorkflowTimelineDefinitionType $INEscrowWorkflowTimeline
     */
    protected $INEscrowWorkflowTimeline = null;

    /**
     * @var PayPalRequiredDefinitionType $PayPalRequired
     */
    protected $PayPalRequired = null;

    /**
     * @var eBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
     */
    protected $eBayMotorsProAdFormatEnabled = null;

    /**
     * @var eBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
     */
    protected $eBayMotorsProContactByPhoneEnabled = null;

    /**
     * @var eBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
     */
    protected $eBayMotorsProPhoneCount = null;

    /**
     * @var eBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
     */
    protected $eBayMotorsProContactByAddressEnabled = null;

    /**
     * @var eBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
     */
    protected $eBayMotorsProStreetCount = null;

    /**
     * @var eBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
     */
    protected $eBayMotorsProCompanyNameEnabled = null;

    /**
     * @var eBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
     */
    protected $eBayMotorsProContactByEmailEnabled = null;

    /**
     * @var eBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
     */
    protected $eBayMotorsProBestOfferEnabled = null;

    /**
     * @var eBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
     */
    protected $eBayMotorsProAutoAcceptEnabled = null;

    /**
     * @var eBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
     */
    protected $eBayMotorsProAutoDeclineEnabled = null;

    /**
     * @var eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
     */
    protected $eBayMotorsProPaymentMethodCheckOutEnabled = null;

    /**
     * @var eBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
     */
    protected $eBayMotorsProShippingMethodEnabled = null;

    /**
     * @var eBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
     */
    protected $eBayMotorsProCounterOfferEnabled = null;

    /**
     * @var eBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
     */
    protected $eBayMotorsProSellerContactDetailsEnabled = null;

    /**
     * @var LocalMarketAdFormatEnabledDefinitionType $LocalMarketAdFormatEnabled
     */
    protected $LocalMarketAdFormatEnabled = null;

    /**
     * @var LocalMarketContactByPhoneEnabledDefinitionType $LocalMarketContactByPhoneEnabled
     */
    protected $LocalMarketContactByPhoneEnabled = null;

    /**
     * @var LocalMarketPhoneCountDefinitionType $LocalMarketPhoneCount
     */
    protected $LocalMarketPhoneCount = null;

    /**
     * @var LocalMarketContactByAddressEnabledDefinitionType $LocalMarketContactByAddressEnabled
     */
    protected $LocalMarketContactByAddressEnabled = null;

    /**
     * @var LocalMarketStreetCountDefinitionType $LocalMarketStreetCount
     */
    protected $LocalMarketStreetCount = null;

    /**
     * @var LocalMarketCompanyNameEnabledDefinitionType $LocalMarketCompanyNameEnabled
     */
    protected $LocalMarketCompanyNameEnabled = null;

    /**
     * @var LocalMarketContactByEmailEnabledDefinitionType $LocalMarketContactByEmailEnabled
     */
    protected $LocalMarketContactByEmailEnabled = null;

    /**
     * @var LocalMarketBestOfferEnabledDefinitionType $LocalMarketBestOfferEnabled
     */
    protected $LocalMarketBestOfferEnabled = null;

    /**
     * @var LocalMarketAutoAcceptEnabledDefinitionType $LocalMarketAutoAcceptEnabled
     */
    protected $LocalMarketAutoAcceptEnabled = null;

    /**
     * @var LocalMarketAutoDeclineEnabledDefinitionType $LocalMarketAutoDeclineEnabled
     */
    protected $LocalMarketAutoDeclineEnabled = null;

    /**
     * @var LocalMarketPaymentMethodCheckOutEnabledDefinitionType $LocalMarketPaymentMethodCheckOutEnabled
     */
    protected $LocalMarketPaymentMethodCheckOutEnabled = null;

    /**
     * @var LocalMarketShippingMethodEnabledDefinitionType $LocalMarketShippingMethodEnabled
     */
    protected $LocalMarketShippingMethodEnabled = null;

    /**
     * @var LocalMarketCounterOfferEnabledDefinitionType $LocalMarketCounterOfferEnabled
     */
    protected $LocalMarketCounterOfferEnabled = null;

    /**
     * @var LocalMarketSellerContactDetailsEnabledDefinitionType $LocalMarketSellerContactDetailsEnabled
     */
    protected $LocalMarketSellerContactDetailsEnabled = null;

    /**
     * @var ClassifiedAdPhoneCountDefinitionType $ClassifiedAdPhoneCount
     */
    protected $ClassifiedAdPhoneCount = null;

    /**
     * @var ClassifiedAdContactByAddressEnabledDefinitionType $ClassifiedAdContactByAddressEnabled
     */
    protected $ClassifiedAdContactByAddressEnabled = null;

    /**
     * @var ClassifiedAdStreetCountDefinitionType $ClassifiedAdStreetCount
     */
    protected $ClassifiedAdStreetCount = null;

    /**
     * @var ClassifiedAdCompanyNameEnabledDefinitionType $ClassifiedAdCompanyNameEnabled
     */
    protected $ClassifiedAdCompanyNameEnabled = null;

    /**
     * @var SpecialitySubscriptionDefinitionType $SpecialitySubscription
     */
    protected $SpecialitySubscription = null;

    /**
     * @var RegularSubscriptionDefinitionType $RegularSubscription
     */
    protected $RegularSubscription = null;

    /**
     * @var PremiumSubscriptionDefinitionType $PremiumSubscription
     */
    protected $PremiumSubscription = null;

    /**
     * @var NonSubscriptionDefinitionType $NonSubscription
     */
    protected $NonSubscription = null;

    /**
     * @var ReturnPolicyEnabledDefinitionType $ReturnPolicyEnabled
     */
    protected $ReturnPolicyEnabled = null;

    /**
     * @var HandlingTimeEnabledDefinitionType $HandlingTimeEnabled
     */
    protected $HandlingTimeEnabled = null;

    /**
     * @var PayPalRequiredForStoreOwnerDefinitionType $PayPalRequiredForStoreOwner
     */
    protected $PayPalRequiredForStoreOwner = null;

    /**
     * @var ReviseQuantityAllowedDefinitionType $ReviseQuantityAllowed
     */
    protected $ReviseQuantityAllowed = null;

    /**
     * @var RevisePriceAllowedDefinitionType $RevisePriceAllowed
     */
    protected $RevisePriceAllowed = null;

    /**
     * @var StoreOwnerExtendedListingDurationsEnabledDefinitionType $StoreOwnerExtendedListingDurationsEnabled
     */
    protected $StoreOwnerExtendedListingDurationsEnabled = null;

    /**
     * @var StoreOwnerExtendedListingDurationsDefinitionType $StoreOwnerExtendedListingDurations
     */
    protected $StoreOwnerExtendedListingDurations = null;

    /**
     * @var PaymentMethodDefinitionType $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var Group1MaxFlatShippingCostDefinitionType $Group1MaxFlatShippingCost
     */
    protected $Group1MaxFlatShippingCost = null;

    /**
     * @var Group2MaxFlatShippingCostDefinitionType $Group2MaxFlatShippingCost
     */
    protected $Group2MaxFlatShippingCost = null;

    /**
     * @var Group3MaxFlatShippingCostDefinitionType $Group3MaxFlatShippingCost
     */
    protected $Group3MaxFlatShippingCost = null;

    /**
     * @var MaxFlatShippingCostCBTExemptDefinitionType $MaxFlatShippingCostCBTExempt
     */
    protected $MaxFlatShippingCostCBTExempt = null;

    /**
     * @var MaxFlatShippingCostDefinitionType $MaxFlatShippingCost
     */
    protected $MaxFlatShippingCost = null;

    /**
     * @var VariationsEnabledDefinitionType $VariationsEnabled
     */
    protected $VariationsEnabled = null;

    /**
     * @var AttributeConversionEnabledFeatureDefinitionType $AttributeConversionEnabled
     */
    protected $AttributeConversionEnabled = null;

    /**
     * @var FreeGalleryPlusEnabledDefinitionType $FreeGalleryPlusEnabled
     */
    protected $FreeGalleryPlusEnabled = null;

    /**
     * @var FreePicturePackEnabledDefinitionType $FreePicturePackEnabled
     */
    protected $FreePicturePackEnabled = null;

    /**
     * @var ItemCompatibilityEnabledDefinitionType $ItemCompatibilityEnabled
     */
    protected $ItemCompatibilityEnabled = null;

    /**
     * @var MaxItemCompatibilityDefinitionType $MaxItemCompatibility
     */
    protected $MaxItemCompatibility = null;

    /**
     * @var MinItemCompatibilityDefinitionType $MinItemCompatibility
     */
    protected $MinItemCompatibility = null;

    /**
     * @var ConditionEnabledDefinitionType $ConditionEnabled
     */
    protected $ConditionEnabled = null;

    /**
     * @var ConditionValuesDefinitionType $ConditionValues
     */
    protected $ConditionValues = null;

    /**
     * @var ValueCategoryDefinitionType $ValueCategory
     */
    protected $ValueCategory = null;

    /**
     * @var ProductCreationEnabledDefinitionType $ProductCreationEnabled
     */
    protected $ProductCreationEnabled = null;

    /**
     * @var CompatibleVehicleTypeDefinitionType $CompatibleVehicleType
     */
    protected $CompatibleVehicleType = null;

    /**
     * @var MaxGranularFitmentCountDefinitionType $MaxGranularFitmentCount
     */
    protected $MaxGranularFitmentCount = null;

    /**
     * @var PaymentOptionsGroupEnabledDefinitionType $PaymentOptionsGroup
     */
    protected $PaymentOptionsGroup = null;

    /**
     * @var ProfileCategoryGroupDefinitionType $ShippingProfileCategoryGroup
     */
    protected $ShippingProfileCategoryGroup = null;

    /**
     * @var ProfileCategoryGroupDefinitionType $PaymentProfileCategoryGroup
     */
    protected $PaymentProfileCategoryGroup = null;

    /**
     * @var ProfileCategoryGroupDefinitionType $ReturnPolicyProfileCategoryGroup
     */
    protected $ReturnPolicyProfileCategoryGroup = null;

    /**
     * @var VINSupportedDefinitionType $VINSupported
     */
    protected $VINSupported = null;

    /**
     * @var VRMSupportedDefinitionType $VRMSupported
     */
    protected $VRMSupported = null;

    /**
     * @var SellerProvidedTitleSupportedDefinitionType $SellerProvidedTitleSupported
     */
    protected $SellerProvidedTitleSupported = null;

    /**
     * @var DepositSupportedDefinitionType $DepositSupported
     */
    protected $DepositSupported = null;

    /**
     * @var GlobalShippingEnabledDefinitionType $GlobalShippingEnabled
     */
    protected $GlobalShippingEnabled = null;

    /**
     * @var AdditionalCompatibilityEnabledDefinitionType $AdditionalCompatibilityEnabled
     */
    protected $AdditionalCompatibilityEnabled = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ListingDurationDefinitionsType $ListingDurations
     * @param ShippingTermRequiredDefinitionType $ShippingTermsRequired
     * @param BestOfferEnabledDefinitionType $BestOfferEnabled
     * @param DutchBINEnabledDefinitionType $DutchBINEnabled
     * @param UserConsentRequiredDefinitionType $UserConsentRequired
     * @param HomePageFeaturedEnabledDefinitionType $HomePageFeaturedEnabled
     * @param ProPackEnabledDefinitionType $ProPackEnabled
     * @param BasicUpgradePackEnabledDefinitionType $BasicUpgradePackEnabled
     * @param ValuePackEnabledDefinitionType $ValuePackEnabled
     * @param ProPackPlusEnabledDefinitionType $ProPackPlusEnabled
     * @param AdFormatEnabledDefinitionType $AdFormatEnabled
     * @param BestOfferCounterEnabledDefinitionType $BestOfferCounterEnabled
     * @param BestOfferAutoDeclineEnabledDefinitionType $BestOfferAutoDeclineEnabled
     * @param LocalMarketSpecialitySubscriptionDefinitionType $LocalMarketSpecialitySubscription
     * @param LocalMarketRegularSubscriptionDefinitionType $LocalMarketRegularSubscription
     * @param LocalMarketPremiumSubscriptionDefinitionType $LocalMarketPremiumSubscription
     * @param LocalMarketNonSubscriptionDefinitionType $LocalMarketNonSubscription
     * @param ExpressEnabledDefinitionType $ExpressEnabled
     * @param ExpressPicturesRequiredDefinitionType $ExpressPicturesRequired
     * @param ExpressConditionRequiredDefinitionType $ExpressConditionRequired
     * @param MinimumReservePriceDefinitionType $MinimumReservePrice
     * @param TCREnabledDefinitionType $TransactionConfirmationRequestEnabled
     * @param SellerContactDetailsEnabledDefinitionType $SellerContactDetailsEnabled
     * @param StoreInventoryEnabledDefinitionType $StoreInventoryEnabled
     * @param SkypeMeTransactionalEnabledDefinitionType $SkypeMeTransactionalEnabled
     * @param SkypeMeNonTransactionalEnabledDefinitionType $SkypeMeNonTransactionalEnabled
     * @param LocalListingDistancesRegularDefinitionType $LocalListingDistancesRegular
     * @param LocalListingDistancesSpecialtyDefinitionType $LocalListingDistancesSpecialty
     * @param LocalListingDistancesNonSubscriptionDefinitionType $LocalListingDistancesNonSubscription
     * @param ClassifiedAdPaymentMethodEnabledDefinitionType $ClassifiedAdPaymentMethodEnabled
     * @param ClassifiedAdShippingMethodEnabledDefinitionType $ClassifiedAdShippingMethodEnabled
     * @param ClassifiedAdBestOfferEnabledDefinitionType $ClassifiedAdBestOfferEnabled
     * @param ClassifiedAdCounterOfferEnabledDefinitionType $ClassifiedAdCounterOfferEnabled
     * @param ClassifiedAdAutoDeclineEnabledDefinitionType $ClassifiedAdAutoDeclineEnabled
     * @param ClassifiedAdContactByPhoneEnabledDefinitionType $ClassifiedAdContactByPhoneEnabled
     * @param ClassifiedAdContactByEmailEnabledDefintionType $ClassifiedAdContactByEmailEnabled
     * @param SafePaymentRequiredDefinitionType $SafePaymentRequired
     * @param ClassifiedAdPayPerLeadEnabledDefinitionType $ClassifiedAdPayPerLeadEnabled
     * @param ItemSpecificsEnabledDefinitionType $ItemSpecificsEnabled
     * @param PaisaPayFullEscrowEnabledDefinitionType $PaisaPayFullEscrowEnabled
     * @param ISBNIdentifierEnabledDefinitionType $ISBNIdentifierEnabled
     * @param UPCIdentifierEnabledDefinitionType $UPCIdentifierEnabled
     * @param EANIdentifierEnabledDefinitionType $EANIdentifierEnabled
     * @param BrandMPNIdentifierEnabledDefinitionType $BrandMPNIdentifierEnabled
     * @param BestOfferAutoAcceptEnabledDefinitionType $BestOfferAutoAcceptEnabled
     * @param ClassifiedAdAutoAcceptEnabledDefinitionType $ClassifiedAdAutoAcceptEnabled
     * @param CrossBorderTradeNorthAmericaEnabledDefinitionType $CrossBorderTradeNorthAmericaEnabled
     * @param CrossBorderTradeGBEnabledDefinitionType $CrossBorderTradeGBEnabled
     * @param CrossBorderTradeAustraliaEnabledDefinitionType $CrossBorderTradeAustraliaEnabled
     * @param PayPalBuyerProtectionEnabledDefinitionType $PayPalBuyerProtectionEnabled
     * @param BuyerGuaranteeEnabledDefinitionType $BuyerGuaranteeEnabled
     * @param CombinedFixedPriceTreatmentEnabledDefinitionType $CombinedFixedPriceTreatmentEnabled
     * @param ListingEnhancementDurationDefinitionType $GalleryFeaturedDurations
     * @param INEscrowWorkflowTimelineDefinitionType $INEscrowWorkflowTimeline
     * @param PayPalRequiredDefinitionType $PayPalRequired
     * @param eBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
     * @param eBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
     * @param eBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
     * @param eBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
     * @param eBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
     * @param eBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
     * @param eBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
     * @param eBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
     * @param eBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
     * @param eBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
     * @param eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
     * @param eBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
     * @param eBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
     * @param eBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
     * @param LocalMarketAdFormatEnabledDefinitionType $LocalMarketAdFormatEnabled
     * @param LocalMarketContactByPhoneEnabledDefinitionType $LocalMarketContactByPhoneEnabled
     * @param LocalMarketPhoneCountDefinitionType $LocalMarketPhoneCount
     * @param LocalMarketContactByAddressEnabledDefinitionType $LocalMarketContactByAddressEnabled
     * @param LocalMarketStreetCountDefinitionType $LocalMarketStreetCount
     * @param LocalMarketCompanyNameEnabledDefinitionType $LocalMarketCompanyNameEnabled
     * @param LocalMarketContactByEmailEnabledDefinitionType $LocalMarketContactByEmailEnabled
     * @param LocalMarketBestOfferEnabledDefinitionType $LocalMarketBestOfferEnabled
     * @param LocalMarketAutoAcceptEnabledDefinitionType $LocalMarketAutoAcceptEnabled
     * @param LocalMarketAutoDeclineEnabledDefinitionType $LocalMarketAutoDeclineEnabled
     * @param LocalMarketPaymentMethodCheckOutEnabledDefinitionType $LocalMarketPaymentMethodCheckOutEnabled
     * @param LocalMarketShippingMethodEnabledDefinitionType $LocalMarketShippingMethodEnabled
     * @param LocalMarketCounterOfferEnabledDefinitionType $LocalMarketCounterOfferEnabled
     * @param LocalMarketSellerContactDetailsEnabledDefinitionType $LocalMarketSellerContactDetailsEnabled
     * @param ClassifiedAdPhoneCountDefinitionType $ClassifiedAdPhoneCount
     * @param ClassifiedAdContactByAddressEnabledDefinitionType $ClassifiedAdContactByAddressEnabled
     * @param ClassifiedAdStreetCountDefinitionType $ClassifiedAdStreetCount
     * @param ClassifiedAdCompanyNameEnabledDefinitionType $ClassifiedAdCompanyNameEnabled
     * @param SpecialitySubscriptionDefinitionType $SpecialitySubscription
     * @param RegularSubscriptionDefinitionType $RegularSubscription
     * @param PremiumSubscriptionDefinitionType $PremiumSubscription
     * @param NonSubscriptionDefinitionType $NonSubscription
     * @param ReturnPolicyEnabledDefinitionType $ReturnPolicyEnabled
     * @param HandlingTimeEnabledDefinitionType $HandlingTimeEnabled
     * @param PayPalRequiredForStoreOwnerDefinitionType $PayPalRequiredForStoreOwner
     * @param ReviseQuantityAllowedDefinitionType $ReviseQuantityAllowed
     * @param RevisePriceAllowedDefinitionType $RevisePriceAllowed
     * @param StoreOwnerExtendedListingDurationsEnabledDefinitionType $StoreOwnerExtendedListingDurationsEnabled
     * @param StoreOwnerExtendedListingDurationsDefinitionType $StoreOwnerExtendedListingDurations
     * @param PaymentMethodDefinitionType $PaymentMethod
     * @param Group1MaxFlatShippingCostDefinitionType $Group1MaxFlatShippingCost
     * @param Group2MaxFlatShippingCostDefinitionType $Group2MaxFlatShippingCost
     * @param Group3MaxFlatShippingCostDefinitionType $Group3MaxFlatShippingCost
     * @param MaxFlatShippingCostCBTExemptDefinitionType $MaxFlatShippingCostCBTExempt
     * @param MaxFlatShippingCostDefinitionType $MaxFlatShippingCost
     * @param VariationsEnabledDefinitionType $VariationsEnabled
     * @param AttributeConversionEnabledFeatureDefinitionType $AttributeConversionEnabled
     * @param FreeGalleryPlusEnabledDefinitionType $FreeGalleryPlusEnabled
     * @param FreePicturePackEnabledDefinitionType $FreePicturePackEnabled
     * @param ItemCompatibilityEnabledDefinitionType $ItemCompatibilityEnabled
     * @param MaxItemCompatibilityDefinitionType $MaxItemCompatibility
     * @param MinItemCompatibilityDefinitionType $MinItemCompatibility
     * @param ConditionEnabledDefinitionType $ConditionEnabled
     * @param ConditionValuesDefinitionType $ConditionValues
     * @param ValueCategoryDefinitionType $ValueCategory
     * @param ProductCreationEnabledDefinitionType $ProductCreationEnabled
     * @param CompatibleVehicleTypeDefinitionType $CompatibleVehicleType
     * @param MaxGranularFitmentCountDefinitionType $MaxGranularFitmentCount
     * @param PaymentOptionsGroupEnabledDefinitionType $PaymentOptionsGroup
     * @param ProfileCategoryGroupDefinitionType $ShippingProfileCategoryGroup
     * @param ProfileCategoryGroupDefinitionType $PaymentProfileCategoryGroup
     * @param ProfileCategoryGroupDefinitionType $ReturnPolicyProfileCategoryGroup
     * @param VINSupportedDefinitionType $VINSupported
     * @param VRMSupportedDefinitionType $VRMSupported
     * @param SellerProvidedTitleSupportedDefinitionType $SellerProvidedTitleSupported
     * @param DepositSupportedDefinitionType $DepositSupported
     * @param GlobalShippingEnabledDefinitionType $GlobalShippingEnabled
     * @param AdditionalCompatibilityEnabledDefinitionType $AdditionalCompatibilityEnabled
     * @param string $any
     */
    public function __construct($ListingDurations = null, $ShippingTermsRequired = null, $BestOfferEnabled = null, $DutchBINEnabled = null, $UserConsentRequired = null, $HomePageFeaturedEnabled = null, $ProPackEnabled = null, $BasicUpgradePackEnabled = null, $ValuePackEnabled = null, $ProPackPlusEnabled = null, $AdFormatEnabled = null, $BestOfferCounterEnabled = null, $BestOfferAutoDeclineEnabled = null, $LocalMarketSpecialitySubscription = null, $LocalMarketRegularSubscription = null, $LocalMarketPremiumSubscription = null, $LocalMarketNonSubscription = null, $ExpressEnabled = null, $ExpressPicturesRequired = null, $ExpressConditionRequired = null, $MinimumReservePrice = null, $TransactionConfirmationRequestEnabled = null, $SellerContactDetailsEnabled = null, $StoreInventoryEnabled = null, $SkypeMeTransactionalEnabled = null, $SkypeMeNonTransactionalEnabled = null, $LocalListingDistancesRegular = null, $LocalListingDistancesSpecialty = null, $LocalListingDistancesNonSubscription = null, $ClassifiedAdPaymentMethodEnabled = null, $ClassifiedAdShippingMethodEnabled = null, $ClassifiedAdBestOfferEnabled = null, $ClassifiedAdCounterOfferEnabled = null, $ClassifiedAdAutoDeclineEnabled = null, $ClassifiedAdContactByPhoneEnabled = null, $ClassifiedAdContactByEmailEnabled = null, $SafePaymentRequired = null, $ClassifiedAdPayPerLeadEnabled = null, $ItemSpecificsEnabled = null, $PaisaPayFullEscrowEnabled = null, $ISBNIdentifierEnabled = null, $UPCIdentifierEnabled = null, $EANIdentifierEnabled = null, $BrandMPNIdentifierEnabled = null, $BestOfferAutoAcceptEnabled = null, $ClassifiedAdAutoAcceptEnabled = null, $CrossBorderTradeNorthAmericaEnabled = null, $CrossBorderTradeGBEnabled = null, $CrossBorderTradeAustraliaEnabled = null, $PayPalBuyerProtectionEnabled = null, $BuyerGuaranteeEnabled = null, $CombinedFixedPriceTreatmentEnabled = null, $GalleryFeaturedDurations = null, $INEscrowWorkflowTimeline = null, $PayPalRequired = null, $eBayMotorsProAdFormatEnabled = null, $eBayMotorsProContactByPhoneEnabled = null, $eBayMotorsProPhoneCount = null, $eBayMotorsProContactByAddressEnabled = null, $eBayMotorsProStreetCount = null, $eBayMotorsProCompanyNameEnabled = null, $eBayMotorsProContactByEmailEnabled = null, $eBayMotorsProBestOfferEnabled = null, $eBayMotorsProAutoAcceptEnabled = null, $eBayMotorsProAutoDeclineEnabled = null, $eBayMotorsProPaymentMethodCheckOutEnabled = null, $eBayMotorsProShippingMethodEnabled = null, $eBayMotorsProCounterOfferEnabled = null, $eBayMotorsProSellerContactDetailsEnabled = null, $LocalMarketAdFormatEnabled = null, $LocalMarketContactByPhoneEnabled = null, $LocalMarketPhoneCount = null, $LocalMarketContactByAddressEnabled = null, $LocalMarketStreetCount = null, $LocalMarketCompanyNameEnabled = null, $LocalMarketContactByEmailEnabled = null, $LocalMarketBestOfferEnabled = null, $LocalMarketAutoAcceptEnabled = null, $LocalMarketAutoDeclineEnabled = null, $LocalMarketPaymentMethodCheckOutEnabled = null, $LocalMarketShippingMethodEnabled = null, $LocalMarketCounterOfferEnabled = null, $LocalMarketSellerContactDetailsEnabled = null, $ClassifiedAdPhoneCount = null, $ClassifiedAdContactByAddressEnabled = null, $ClassifiedAdStreetCount = null, $ClassifiedAdCompanyNameEnabled = null, $SpecialitySubscription = null, $RegularSubscription = null, $PremiumSubscription = null, $NonSubscription = null, $ReturnPolicyEnabled = null, $HandlingTimeEnabled = null, $PayPalRequiredForStoreOwner = null, $ReviseQuantityAllowed = null, $RevisePriceAllowed = null, $StoreOwnerExtendedListingDurationsEnabled = null, $StoreOwnerExtendedListingDurations = null, $PaymentMethod = null, $Group1MaxFlatShippingCost = null, $Group2MaxFlatShippingCost = null, $Group3MaxFlatShippingCost = null, $MaxFlatShippingCostCBTExempt = null, $MaxFlatShippingCost = null, $VariationsEnabled = null, $AttributeConversionEnabled = null, $FreeGalleryPlusEnabled = null, $FreePicturePackEnabled = null, $ItemCompatibilityEnabled = null, $MaxItemCompatibility = null, $MinItemCompatibility = null, $ConditionEnabled = null, $ConditionValues = null, $ValueCategory = null, $ProductCreationEnabled = null, $CompatibleVehicleType = null, $MaxGranularFitmentCount = null, $PaymentOptionsGroup = null, $ShippingProfileCategoryGroup = null, $PaymentProfileCategoryGroup = null, $ReturnPolicyProfileCategoryGroup = null, $VINSupported = null, $VRMSupported = null, $SellerProvidedTitleSupported = null, $DepositSupported = null, $GlobalShippingEnabled = null, $AdditionalCompatibilityEnabled = null, $any = null)
    {
      $this->ListingDurations = $ListingDurations;
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
      $this->TransactionConfirmationRequestEnabled = $TransactionConfirmationRequestEnabled;
      $this->SellerContactDetailsEnabled = $SellerContactDetailsEnabled;
      $this->StoreInventoryEnabled = $StoreInventoryEnabled;
      $this->SkypeMeTransactionalEnabled = $SkypeMeTransactionalEnabled;
      $this->SkypeMeNonTransactionalEnabled = $SkypeMeNonTransactionalEnabled;
      $this->LocalListingDistancesRegular = $LocalListingDistancesRegular;
      $this->LocalListingDistancesSpecialty = $LocalListingDistancesSpecialty;
      $this->LocalListingDistancesNonSubscription = $LocalListingDistancesNonSubscription;
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
      $this->ISBNIdentifierEnabled = $ISBNIdentifierEnabled;
      $this->UPCIdentifierEnabled = $UPCIdentifierEnabled;
      $this->EANIdentifierEnabled = $EANIdentifierEnabled;
      $this->BrandMPNIdentifierEnabled = $BrandMPNIdentifierEnabled;
      $this->BestOfferAutoAcceptEnabled = $BestOfferAutoAcceptEnabled;
      $this->ClassifiedAdAutoAcceptEnabled = $ClassifiedAdAutoAcceptEnabled;
      $this->CrossBorderTradeNorthAmericaEnabled = $CrossBorderTradeNorthAmericaEnabled;
      $this->CrossBorderTradeGBEnabled = $CrossBorderTradeGBEnabled;
      $this->CrossBorderTradeAustraliaEnabled = $CrossBorderTradeAustraliaEnabled;
      $this->PayPalBuyerProtectionEnabled = $PayPalBuyerProtectionEnabled;
      $this->BuyerGuaranteeEnabled = $BuyerGuaranteeEnabled;
      $this->CombinedFixedPriceTreatmentEnabled = $CombinedFixedPriceTreatmentEnabled;
      $this->GalleryFeaturedDurations = $GalleryFeaturedDurations;
      $this->INEscrowWorkflowTimeline = $INEscrowWorkflowTimeline;
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
      $this->ReturnPolicyEnabled = $ReturnPolicyEnabled;
      $this->HandlingTimeEnabled = $HandlingTimeEnabled;
      $this->PayPalRequiredForStoreOwner = $PayPalRequiredForStoreOwner;
      $this->ReviseQuantityAllowed = $ReviseQuantityAllowed;
      $this->RevisePriceAllowed = $RevisePriceAllowed;
      $this->StoreOwnerExtendedListingDurationsEnabled = $StoreOwnerExtendedListingDurationsEnabled;
      $this->StoreOwnerExtendedListingDurations = $StoreOwnerExtendedListingDurations;
      $this->PaymentMethod = $PaymentMethod;
      $this->Group1MaxFlatShippingCost = $Group1MaxFlatShippingCost;
      $this->Group2MaxFlatShippingCost = $Group2MaxFlatShippingCost;
      $this->Group3MaxFlatShippingCost = $Group3MaxFlatShippingCost;
      $this->MaxFlatShippingCostCBTExempt = $MaxFlatShippingCostCBTExempt;
      $this->MaxFlatShippingCost = $MaxFlatShippingCost;
      $this->VariationsEnabled = $VariationsEnabled;
      $this->AttributeConversionEnabled = $AttributeConversionEnabled;
      $this->FreeGalleryPlusEnabled = $FreeGalleryPlusEnabled;
      $this->FreePicturePackEnabled = $FreePicturePackEnabled;
      $this->ItemCompatibilityEnabled = $ItemCompatibilityEnabled;
      $this->MaxItemCompatibility = $MaxItemCompatibility;
      $this->MinItemCompatibility = $MinItemCompatibility;
      $this->ConditionEnabled = $ConditionEnabled;
      $this->ConditionValues = $ConditionValues;
      $this->ValueCategory = $ValueCategory;
      $this->ProductCreationEnabled = $ProductCreationEnabled;
      $this->CompatibleVehicleType = $CompatibleVehicleType;
      $this->MaxGranularFitmentCount = $MaxGranularFitmentCount;
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
     * @return ListingDurationDefinitionsType
     */
    public function getListingDurations()
    {
      return $this->ListingDurations;
    }

    /**
     * @param ListingDurationDefinitionsType $ListingDurations
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setListingDurations($ListingDurations)
    {
      $this->ListingDurations = $ListingDurations;
      return $this;
    }

    /**
     * @return ShippingTermRequiredDefinitionType
     */
    public function getShippingTermsRequired()
    {
      return $this->ShippingTermsRequired;
    }

    /**
     * @param ShippingTermRequiredDefinitionType $ShippingTermsRequired
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setShippingTermsRequired($ShippingTermsRequired)
    {
      $this->ShippingTermsRequired = $ShippingTermsRequired;
      return $this;
    }

    /**
     * @return BestOfferEnabledDefinitionType
     */
    public function getBestOfferEnabled()
    {
      return $this->BestOfferEnabled;
    }

    /**
     * @param BestOfferEnabledDefinitionType $BestOfferEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setBestOfferEnabled($BestOfferEnabled)
    {
      $this->BestOfferEnabled = $BestOfferEnabled;
      return $this;
    }

    /**
     * @return DutchBINEnabledDefinitionType
     */
    public function getDutchBINEnabled()
    {
      return $this->DutchBINEnabled;
    }

    /**
     * @param DutchBINEnabledDefinitionType $DutchBINEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setDutchBINEnabled($DutchBINEnabled)
    {
      $this->DutchBINEnabled = $DutchBINEnabled;
      return $this;
    }

    /**
     * @return UserConsentRequiredDefinitionType
     */
    public function getUserConsentRequired()
    {
      return $this->UserConsentRequired;
    }

    /**
     * @param UserConsentRequiredDefinitionType $UserConsentRequired
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setUserConsentRequired($UserConsentRequired)
    {
      $this->UserConsentRequired = $UserConsentRequired;
      return $this;
    }

    /**
     * @return HomePageFeaturedEnabledDefinitionType
     */
    public function getHomePageFeaturedEnabled()
    {
      return $this->HomePageFeaturedEnabled;
    }

    /**
     * @param HomePageFeaturedEnabledDefinitionType $HomePageFeaturedEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setHomePageFeaturedEnabled($HomePageFeaturedEnabled)
    {
      $this->HomePageFeaturedEnabled = $HomePageFeaturedEnabled;
      return $this;
    }

    /**
     * @return ProPackEnabledDefinitionType
     */
    public function getProPackEnabled()
    {
      return $this->ProPackEnabled;
    }

    /**
     * @param ProPackEnabledDefinitionType $ProPackEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setProPackEnabled($ProPackEnabled)
    {
      $this->ProPackEnabled = $ProPackEnabled;
      return $this;
    }

    /**
     * @return BasicUpgradePackEnabledDefinitionType
     */
    public function getBasicUpgradePackEnabled()
    {
      return $this->BasicUpgradePackEnabled;
    }

    /**
     * @param BasicUpgradePackEnabledDefinitionType $BasicUpgradePackEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setBasicUpgradePackEnabled($BasicUpgradePackEnabled)
    {
      $this->BasicUpgradePackEnabled = $BasicUpgradePackEnabled;
      return $this;
    }

    /**
     * @return ValuePackEnabledDefinitionType
     */
    public function getValuePackEnabled()
    {
      return $this->ValuePackEnabled;
    }

    /**
     * @param ValuePackEnabledDefinitionType $ValuePackEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setValuePackEnabled($ValuePackEnabled)
    {
      $this->ValuePackEnabled = $ValuePackEnabled;
      return $this;
    }

    /**
     * @return ProPackPlusEnabledDefinitionType
     */
    public function getProPackPlusEnabled()
    {
      return $this->ProPackPlusEnabled;
    }

    /**
     * @param ProPackPlusEnabledDefinitionType $ProPackPlusEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setProPackPlusEnabled($ProPackPlusEnabled)
    {
      $this->ProPackPlusEnabled = $ProPackPlusEnabled;
      return $this;
    }

    /**
     * @return AdFormatEnabledDefinitionType
     */
    public function getAdFormatEnabled()
    {
      return $this->AdFormatEnabled;
    }

    /**
     * @param AdFormatEnabledDefinitionType $AdFormatEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setAdFormatEnabled($AdFormatEnabled)
    {
      $this->AdFormatEnabled = $AdFormatEnabled;
      return $this;
    }

    /**
     * @return BestOfferCounterEnabledDefinitionType
     */
    public function getBestOfferCounterEnabled()
    {
      return $this->BestOfferCounterEnabled;
    }

    /**
     * @param BestOfferCounterEnabledDefinitionType $BestOfferCounterEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setBestOfferCounterEnabled($BestOfferCounterEnabled)
    {
      $this->BestOfferCounterEnabled = $BestOfferCounterEnabled;
      return $this;
    }

    /**
     * @return BestOfferAutoDeclineEnabledDefinitionType
     */
    public function getBestOfferAutoDeclineEnabled()
    {
      return $this->BestOfferAutoDeclineEnabled;
    }

    /**
     * @param BestOfferAutoDeclineEnabledDefinitionType $BestOfferAutoDeclineEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setBestOfferAutoDeclineEnabled($BestOfferAutoDeclineEnabled)
    {
      $this->BestOfferAutoDeclineEnabled = $BestOfferAutoDeclineEnabled;
      return $this;
    }

    /**
     * @return LocalMarketSpecialitySubscriptionDefinitionType
     */
    public function getLocalMarketSpecialitySubscription()
    {
      return $this->LocalMarketSpecialitySubscription;
    }

    /**
     * @param LocalMarketSpecialitySubscriptionDefinitionType $LocalMarketSpecialitySubscription
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketSpecialitySubscription($LocalMarketSpecialitySubscription)
    {
      $this->LocalMarketSpecialitySubscription = $LocalMarketSpecialitySubscription;
      return $this;
    }

    /**
     * @return LocalMarketRegularSubscriptionDefinitionType
     */
    public function getLocalMarketRegularSubscription()
    {
      return $this->LocalMarketRegularSubscription;
    }

    /**
     * @param LocalMarketRegularSubscriptionDefinitionType $LocalMarketRegularSubscription
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketRegularSubscription($LocalMarketRegularSubscription)
    {
      $this->LocalMarketRegularSubscription = $LocalMarketRegularSubscription;
      return $this;
    }

    /**
     * @return LocalMarketPremiumSubscriptionDefinitionType
     */
    public function getLocalMarketPremiumSubscription()
    {
      return $this->LocalMarketPremiumSubscription;
    }

    /**
     * @param LocalMarketPremiumSubscriptionDefinitionType $LocalMarketPremiumSubscription
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketPremiumSubscription($LocalMarketPremiumSubscription)
    {
      $this->LocalMarketPremiumSubscription = $LocalMarketPremiumSubscription;
      return $this;
    }

    /**
     * @return LocalMarketNonSubscriptionDefinitionType
     */
    public function getLocalMarketNonSubscription()
    {
      return $this->LocalMarketNonSubscription;
    }

    /**
     * @param LocalMarketNonSubscriptionDefinitionType $LocalMarketNonSubscription
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketNonSubscription($LocalMarketNonSubscription)
    {
      $this->LocalMarketNonSubscription = $LocalMarketNonSubscription;
      return $this;
    }

    /**
     * @return ExpressEnabledDefinitionType
     */
    public function getExpressEnabled()
    {
      return $this->ExpressEnabled;
    }

    /**
     * @param ExpressEnabledDefinitionType $ExpressEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setExpressEnabled($ExpressEnabled)
    {
      $this->ExpressEnabled = $ExpressEnabled;
      return $this;
    }

    /**
     * @return ExpressPicturesRequiredDefinitionType
     */
    public function getExpressPicturesRequired()
    {
      return $this->ExpressPicturesRequired;
    }

    /**
     * @param ExpressPicturesRequiredDefinitionType $ExpressPicturesRequired
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setExpressPicturesRequired($ExpressPicturesRequired)
    {
      $this->ExpressPicturesRequired = $ExpressPicturesRequired;
      return $this;
    }

    /**
     * @return ExpressConditionRequiredDefinitionType
     */
    public function getExpressConditionRequired()
    {
      return $this->ExpressConditionRequired;
    }

    /**
     * @param ExpressConditionRequiredDefinitionType $ExpressConditionRequired
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setExpressConditionRequired($ExpressConditionRequired)
    {
      $this->ExpressConditionRequired = $ExpressConditionRequired;
      return $this;
    }

    /**
     * @return MinimumReservePriceDefinitionType
     */
    public function getMinimumReservePrice()
    {
      return $this->MinimumReservePrice;
    }

    /**
     * @param MinimumReservePriceDefinitionType $MinimumReservePrice
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setMinimumReservePrice($MinimumReservePrice)
    {
      $this->MinimumReservePrice = $MinimumReservePrice;
      return $this;
    }

    /**
     * @return TCREnabledDefinitionType
     */
    public function getTransactionConfirmationRequestEnabled()
    {
      return $this->TransactionConfirmationRequestEnabled;
    }

    /**
     * @param TCREnabledDefinitionType $TransactionConfirmationRequestEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setTransactionConfirmationRequestEnabled($TransactionConfirmationRequestEnabled)
    {
      $this->TransactionConfirmationRequestEnabled = $TransactionConfirmationRequestEnabled;
      return $this;
    }

    /**
     * @return SellerContactDetailsEnabledDefinitionType
     */
    public function getSellerContactDetailsEnabled()
    {
      return $this->SellerContactDetailsEnabled;
    }

    /**
     * @param SellerContactDetailsEnabledDefinitionType $SellerContactDetailsEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setSellerContactDetailsEnabled($SellerContactDetailsEnabled)
    {
      $this->SellerContactDetailsEnabled = $SellerContactDetailsEnabled;
      return $this;
    }

    /**
     * @return StoreInventoryEnabledDefinitionType
     */
    public function getStoreInventoryEnabled()
    {
      return $this->StoreInventoryEnabled;
    }

    /**
     * @param StoreInventoryEnabledDefinitionType $StoreInventoryEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setStoreInventoryEnabled($StoreInventoryEnabled)
    {
      $this->StoreInventoryEnabled = $StoreInventoryEnabled;
      return $this;
    }

    /**
     * @return SkypeMeTransactionalEnabledDefinitionType
     */
    public function getSkypeMeTransactionalEnabled()
    {
      return $this->SkypeMeTransactionalEnabled;
    }

    /**
     * @param SkypeMeTransactionalEnabledDefinitionType $SkypeMeTransactionalEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setSkypeMeTransactionalEnabled($SkypeMeTransactionalEnabled)
    {
      $this->SkypeMeTransactionalEnabled = $SkypeMeTransactionalEnabled;
      return $this;
    }

    /**
     * @return SkypeMeNonTransactionalEnabledDefinitionType
     */
    public function getSkypeMeNonTransactionalEnabled()
    {
      return $this->SkypeMeNonTransactionalEnabled;
    }

    /**
     * @param SkypeMeNonTransactionalEnabledDefinitionType $SkypeMeNonTransactionalEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setSkypeMeNonTransactionalEnabled($SkypeMeNonTransactionalEnabled)
    {
      $this->SkypeMeNonTransactionalEnabled = $SkypeMeNonTransactionalEnabled;
      return $this;
    }

    /**
     * @return LocalListingDistancesRegularDefinitionType
     */
    public function getLocalListingDistancesRegular()
    {
      return $this->LocalListingDistancesRegular;
    }

    /**
     * @param LocalListingDistancesRegularDefinitionType $LocalListingDistancesRegular
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalListingDistancesRegular($LocalListingDistancesRegular)
    {
      $this->LocalListingDistancesRegular = $LocalListingDistancesRegular;
      return $this;
    }

    /**
     * @return LocalListingDistancesSpecialtyDefinitionType
     */
    public function getLocalListingDistancesSpecialty()
    {
      return $this->LocalListingDistancesSpecialty;
    }

    /**
     * @param LocalListingDistancesSpecialtyDefinitionType $LocalListingDistancesSpecialty
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalListingDistancesSpecialty($LocalListingDistancesSpecialty)
    {
      $this->LocalListingDistancesSpecialty = $LocalListingDistancesSpecialty;
      return $this;
    }

    /**
     * @return LocalListingDistancesNonSubscriptionDefinitionType
     */
    public function getLocalListingDistancesNonSubscription()
    {
      return $this->LocalListingDistancesNonSubscription;
    }

    /**
     * @param LocalListingDistancesNonSubscriptionDefinitionType $LocalListingDistancesNonSubscription
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalListingDistancesNonSubscription($LocalListingDistancesNonSubscription)
    {
      $this->LocalListingDistancesNonSubscription = $LocalListingDistancesNonSubscription;
      return $this;
    }

    /**
     * @return ClassifiedAdPaymentMethodEnabledDefinitionType
     */
    public function getClassifiedAdPaymentMethodEnabled()
    {
      return $this->ClassifiedAdPaymentMethodEnabled;
    }

    /**
     * @param ClassifiedAdPaymentMethodEnabledDefinitionType $ClassifiedAdPaymentMethodEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdPaymentMethodEnabled($ClassifiedAdPaymentMethodEnabled)
    {
      $this->ClassifiedAdPaymentMethodEnabled = $ClassifiedAdPaymentMethodEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdShippingMethodEnabledDefinitionType
     */
    public function getClassifiedAdShippingMethodEnabled()
    {
      return $this->ClassifiedAdShippingMethodEnabled;
    }

    /**
     * @param ClassifiedAdShippingMethodEnabledDefinitionType $ClassifiedAdShippingMethodEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdShippingMethodEnabled($ClassifiedAdShippingMethodEnabled)
    {
      $this->ClassifiedAdShippingMethodEnabled = $ClassifiedAdShippingMethodEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdBestOfferEnabledDefinitionType
     */
    public function getClassifiedAdBestOfferEnabled()
    {
      return $this->ClassifiedAdBestOfferEnabled;
    }

    /**
     * @param ClassifiedAdBestOfferEnabledDefinitionType $ClassifiedAdBestOfferEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdBestOfferEnabled($ClassifiedAdBestOfferEnabled)
    {
      $this->ClassifiedAdBestOfferEnabled = $ClassifiedAdBestOfferEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdCounterOfferEnabledDefinitionType
     */
    public function getClassifiedAdCounterOfferEnabled()
    {
      return $this->ClassifiedAdCounterOfferEnabled;
    }

    /**
     * @param ClassifiedAdCounterOfferEnabledDefinitionType $ClassifiedAdCounterOfferEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdCounterOfferEnabled($ClassifiedAdCounterOfferEnabled)
    {
      $this->ClassifiedAdCounterOfferEnabled = $ClassifiedAdCounterOfferEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdAutoDeclineEnabledDefinitionType
     */
    public function getClassifiedAdAutoDeclineEnabled()
    {
      return $this->ClassifiedAdAutoDeclineEnabled;
    }

    /**
     * @param ClassifiedAdAutoDeclineEnabledDefinitionType $ClassifiedAdAutoDeclineEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdAutoDeclineEnabled($ClassifiedAdAutoDeclineEnabled)
    {
      $this->ClassifiedAdAutoDeclineEnabled = $ClassifiedAdAutoDeclineEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdContactByPhoneEnabledDefinitionType
     */
    public function getClassifiedAdContactByPhoneEnabled()
    {
      return $this->ClassifiedAdContactByPhoneEnabled;
    }

    /**
     * @param ClassifiedAdContactByPhoneEnabledDefinitionType $ClassifiedAdContactByPhoneEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdContactByPhoneEnabled($ClassifiedAdContactByPhoneEnabled)
    {
      $this->ClassifiedAdContactByPhoneEnabled = $ClassifiedAdContactByPhoneEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdContactByEmailEnabledDefintionType
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
      return $this->ClassifiedAdContactByEmailEnabled;
    }

    /**
     * @param ClassifiedAdContactByEmailEnabledDefintionType $ClassifiedAdContactByEmailEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdContactByEmailEnabled($ClassifiedAdContactByEmailEnabled)
    {
      $this->ClassifiedAdContactByEmailEnabled = $ClassifiedAdContactByEmailEnabled;
      return $this;
    }

    /**
     * @return SafePaymentRequiredDefinitionType
     */
    public function getSafePaymentRequired()
    {
      return $this->SafePaymentRequired;
    }

    /**
     * @param SafePaymentRequiredDefinitionType $SafePaymentRequired
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setSafePaymentRequired($SafePaymentRequired)
    {
      $this->SafePaymentRequired = $SafePaymentRequired;
      return $this;
    }

    /**
     * @return ClassifiedAdPayPerLeadEnabledDefinitionType
     */
    public function getClassifiedAdPayPerLeadEnabled()
    {
      return $this->ClassifiedAdPayPerLeadEnabled;
    }

    /**
     * @param ClassifiedAdPayPerLeadEnabledDefinitionType $ClassifiedAdPayPerLeadEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdPayPerLeadEnabled($ClassifiedAdPayPerLeadEnabled)
    {
      $this->ClassifiedAdPayPerLeadEnabled = $ClassifiedAdPayPerLeadEnabled;
      return $this;
    }

    /**
     * @return ItemSpecificsEnabledDefinitionType
     */
    public function getItemSpecificsEnabled()
    {
      return $this->ItemSpecificsEnabled;
    }

    /**
     * @param ItemSpecificsEnabledDefinitionType $ItemSpecificsEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setItemSpecificsEnabled($ItemSpecificsEnabled)
    {
      $this->ItemSpecificsEnabled = $ItemSpecificsEnabled;
      return $this;
    }

    /**
     * @return PaisaPayFullEscrowEnabledDefinitionType
     */
    public function getPaisaPayFullEscrowEnabled()
    {
      return $this->PaisaPayFullEscrowEnabled;
    }

    /**
     * @param PaisaPayFullEscrowEnabledDefinitionType $PaisaPayFullEscrowEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setPaisaPayFullEscrowEnabled($PaisaPayFullEscrowEnabled)
    {
      $this->PaisaPayFullEscrowEnabled = $PaisaPayFullEscrowEnabled;
      return $this;
    }

    /**
     * @return ISBNIdentifierEnabledDefinitionType
     */
    public function getISBNIdentifierEnabled()
    {
      return $this->ISBNIdentifierEnabled;
    }

    /**
     * @param ISBNIdentifierEnabledDefinitionType $ISBNIdentifierEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setISBNIdentifierEnabled($ISBNIdentifierEnabled)
    {
      $this->ISBNIdentifierEnabled = $ISBNIdentifierEnabled;
      return $this;
    }

    /**
     * @return UPCIdentifierEnabledDefinitionType
     */
    public function getUPCIdentifierEnabled()
    {
      return $this->UPCIdentifierEnabled;
    }

    /**
     * @param UPCIdentifierEnabledDefinitionType $UPCIdentifierEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setUPCIdentifierEnabled($UPCIdentifierEnabled)
    {
      $this->UPCIdentifierEnabled = $UPCIdentifierEnabled;
      return $this;
    }

    /**
     * @return EANIdentifierEnabledDefinitionType
     */
    public function getEANIdentifierEnabled()
    {
      return $this->EANIdentifierEnabled;
    }

    /**
     * @param EANIdentifierEnabledDefinitionType $EANIdentifierEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEANIdentifierEnabled($EANIdentifierEnabled)
    {
      $this->EANIdentifierEnabled = $EANIdentifierEnabled;
      return $this;
    }

    /**
     * @return BrandMPNIdentifierEnabledDefinitionType
     */
    public function getBrandMPNIdentifierEnabled()
    {
      return $this->BrandMPNIdentifierEnabled;
    }

    /**
     * @param BrandMPNIdentifierEnabledDefinitionType $BrandMPNIdentifierEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setBrandMPNIdentifierEnabled($BrandMPNIdentifierEnabled)
    {
      $this->BrandMPNIdentifierEnabled = $BrandMPNIdentifierEnabled;
      return $this;
    }

    /**
     * @return BestOfferAutoAcceptEnabledDefinitionType
     */
    public function getBestOfferAutoAcceptEnabled()
    {
      return $this->BestOfferAutoAcceptEnabled;
    }

    /**
     * @param BestOfferAutoAcceptEnabledDefinitionType $BestOfferAutoAcceptEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setBestOfferAutoAcceptEnabled($BestOfferAutoAcceptEnabled)
    {
      $this->BestOfferAutoAcceptEnabled = $BestOfferAutoAcceptEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdAutoAcceptEnabledDefinitionType
     */
    public function getClassifiedAdAutoAcceptEnabled()
    {
      return $this->ClassifiedAdAutoAcceptEnabled;
    }

    /**
     * @param ClassifiedAdAutoAcceptEnabledDefinitionType $ClassifiedAdAutoAcceptEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdAutoAcceptEnabled($ClassifiedAdAutoAcceptEnabled)
    {
      $this->ClassifiedAdAutoAcceptEnabled = $ClassifiedAdAutoAcceptEnabled;
      return $this;
    }

    /**
     * @return CrossBorderTradeNorthAmericaEnabledDefinitionType
     */
    public function getCrossBorderTradeNorthAmericaEnabled()
    {
      return $this->CrossBorderTradeNorthAmericaEnabled;
    }

    /**
     * @param CrossBorderTradeNorthAmericaEnabledDefinitionType $CrossBorderTradeNorthAmericaEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setCrossBorderTradeNorthAmericaEnabled($CrossBorderTradeNorthAmericaEnabled)
    {
      $this->CrossBorderTradeNorthAmericaEnabled = $CrossBorderTradeNorthAmericaEnabled;
      return $this;
    }

    /**
     * @return CrossBorderTradeGBEnabledDefinitionType
     */
    public function getCrossBorderTradeGBEnabled()
    {
      return $this->CrossBorderTradeGBEnabled;
    }

    /**
     * @param CrossBorderTradeGBEnabledDefinitionType $CrossBorderTradeGBEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setCrossBorderTradeGBEnabled($CrossBorderTradeGBEnabled)
    {
      $this->CrossBorderTradeGBEnabled = $CrossBorderTradeGBEnabled;
      return $this;
    }

    /**
     * @return CrossBorderTradeAustraliaEnabledDefinitionType
     */
    public function getCrossBorderTradeAustraliaEnabled()
    {
      return $this->CrossBorderTradeAustraliaEnabled;
    }

    /**
     * @param CrossBorderTradeAustraliaEnabledDefinitionType $CrossBorderTradeAustraliaEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setCrossBorderTradeAustraliaEnabled($CrossBorderTradeAustraliaEnabled)
    {
      $this->CrossBorderTradeAustraliaEnabled = $CrossBorderTradeAustraliaEnabled;
      return $this;
    }

    /**
     * @return PayPalBuyerProtectionEnabledDefinitionType
     */
    public function getPayPalBuyerProtectionEnabled()
    {
      return $this->PayPalBuyerProtectionEnabled;
    }

    /**
     * @param PayPalBuyerProtectionEnabledDefinitionType $PayPalBuyerProtectionEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setPayPalBuyerProtectionEnabled($PayPalBuyerProtectionEnabled)
    {
      $this->PayPalBuyerProtectionEnabled = $PayPalBuyerProtectionEnabled;
      return $this;
    }

    /**
     * @return BuyerGuaranteeEnabledDefinitionType
     */
    public function getBuyerGuaranteeEnabled()
    {
      return $this->BuyerGuaranteeEnabled;
    }

    /**
     * @param BuyerGuaranteeEnabledDefinitionType $BuyerGuaranteeEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setBuyerGuaranteeEnabled($BuyerGuaranteeEnabled)
    {
      $this->BuyerGuaranteeEnabled = $BuyerGuaranteeEnabled;
      return $this;
    }

    /**
     * @return CombinedFixedPriceTreatmentEnabledDefinitionType
     */
    public function getCombinedFixedPriceTreatmentEnabled()
    {
      return $this->CombinedFixedPriceTreatmentEnabled;
    }

    /**
     * @param CombinedFixedPriceTreatmentEnabledDefinitionType $CombinedFixedPriceTreatmentEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setCombinedFixedPriceTreatmentEnabled($CombinedFixedPriceTreatmentEnabled)
    {
      $this->CombinedFixedPriceTreatmentEnabled = $CombinedFixedPriceTreatmentEnabled;
      return $this;
    }

    /**
     * @return ListingEnhancementDurationDefinitionType
     */
    public function getGalleryFeaturedDurations()
    {
      return $this->GalleryFeaturedDurations;
    }

    /**
     * @param ListingEnhancementDurationDefinitionType $GalleryFeaturedDurations
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setGalleryFeaturedDurations($GalleryFeaturedDurations)
    {
      $this->GalleryFeaturedDurations = $GalleryFeaturedDurations;
      return $this;
    }

    /**
     * @return INEscrowWorkflowTimelineDefinitionType
     */
    public function getINEscrowWorkflowTimeline()
    {
      return $this->INEscrowWorkflowTimeline;
    }

    /**
     * @param INEscrowWorkflowTimelineDefinitionType $INEscrowWorkflowTimeline
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setINEscrowWorkflowTimeline($INEscrowWorkflowTimeline)
    {
      $this->INEscrowWorkflowTimeline = $INEscrowWorkflowTimeline;
      return $this;
    }

    /**
     * @return PayPalRequiredDefinitionType
     */
    public function getPayPalRequired()
    {
      return $this->PayPalRequired;
    }

    /**
     * @param PayPalRequiredDefinitionType $PayPalRequired
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setPayPalRequired($PayPalRequired)
    {
      $this->PayPalRequired = $PayPalRequired;
      return $this;
    }

    /**
     * @return eBayMotorsProAdFormatEnabledDefinitionType
     */
    public function getEBayMotorsProAdFormatEnabled()
    {
      return $this->eBayMotorsProAdFormatEnabled;
    }

    /**
     * @param eBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProAdFormatEnabled($eBayMotorsProAdFormatEnabled)
    {
      $this->eBayMotorsProAdFormatEnabled = $eBayMotorsProAdFormatEnabled;
      return $this;
    }

    /**
     * @return eBayMotorsProContactByPhoneEnabledDefinitionType
     */
    public function getEBayMotorsProContactByPhoneEnabled()
    {
      return $this->eBayMotorsProContactByPhoneEnabled;
    }

    /**
     * @param eBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProContactByPhoneEnabled($eBayMotorsProContactByPhoneEnabled)
    {
      $this->eBayMotorsProContactByPhoneEnabled = $eBayMotorsProContactByPhoneEnabled;
      return $this;
    }

    /**
     * @return eBayMotorsProPhoneCountDefinitionType
     */
    public function getEBayMotorsProPhoneCount()
    {
      return $this->eBayMotorsProPhoneCount;
    }

    /**
     * @param eBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProPhoneCount($eBayMotorsProPhoneCount)
    {
      $this->eBayMotorsProPhoneCount = $eBayMotorsProPhoneCount;
      return $this;
    }

    /**
     * @return eBayMotorsProContactByAddressEnabledDefinitionType
     */
    public function getEBayMotorsProContactByAddressEnabled()
    {
      return $this->eBayMotorsProContactByAddressEnabled;
    }

    /**
     * @param eBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProContactByAddressEnabled($eBayMotorsProContactByAddressEnabled)
    {
      $this->eBayMotorsProContactByAddressEnabled = $eBayMotorsProContactByAddressEnabled;
      return $this;
    }

    /**
     * @return eBayMotorsProStreetCountDefinitionType
     */
    public function getEBayMotorsProStreetCount()
    {
      return $this->eBayMotorsProStreetCount;
    }

    /**
     * @param eBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProStreetCount($eBayMotorsProStreetCount)
    {
      $this->eBayMotorsProStreetCount = $eBayMotorsProStreetCount;
      return $this;
    }

    /**
     * @return eBayMotorsProCompanyNameEnabledDefinitionType
     */
    public function getEBayMotorsProCompanyNameEnabled()
    {
      return $this->eBayMotorsProCompanyNameEnabled;
    }

    /**
     * @param eBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProCompanyNameEnabled($eBayMotorsProCompanyNameEnabled)
    {
      $this->eBayMotorsProCompanyNameEnabled = $eBayMotorsProCompanyNameEnabled;
      return $this;
    }

    /**
     * @return eBayMotorsProContactByEmailEnabledDefinitionType
     */
    public function getEBayMotorsProContactByEmailEnabled()
    {
      return $this->eBayMotorsProContactByEmailEnabled;
    }

    /**
     * @param eBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProContactByEmailEnabled($eBayMotorsProContactByEmailEnabled)
    {
      $this->eBayMotorsProContactByEmailEnabled = $eBayMotorsProContactByEmailEnabled;
      return $this;
    }

    /**
     * @return eBayMotorsProBestOfferEnabledDefinitionType
     */
    public function getEBayMotorsProBestOfferEnabled()
    {
      return $this->eBayMotorsProBestOfferEnabled;
    }

    /**
     * @param eBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProBestOfferEnabled($eBayMotorsProBestOfferEnabled)
    {
      $this->eBayMotorsProBestOfferEnabled = $eBayMotorsProBestOfferEnabled;
      return $this;
    }

    /**
     * @return eBayMotorsProAutoAcceptEnabledDefinitionType
     */
    public function getEBayMotorsProAutoAcceptEnabled()
    {
      return $this->eBayMotorsProAutoAcceptEnabled;
    }

    /**
     * @param eBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProAutoAcceptEnabled($eBayMotorsProAutoAcceptEnabled)
    {
      $this->eBayMotorsProAutoAcceptEnabled = $eBayMotorsProAutoAcceptEnabled;
      return $this;
    }

    /**
     * @return eBayMotorsProAutoDeclineEnabledDefinitionType
     */
    public function getEBayMotorsProAutoDeclineEnabled()
    {
      return $this->eBayMotorsProAutoDeclineEnabled;
    }

    /**
     * @param eBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProAutoDeclineEnabled($eBayMotorsProAutoDeclineEnabled)
    {
      $this->eBayMotorsProAutoDeclineEnabled = $eBayMotorsProAutoDeclineEnabled;
      return $this;
    }

    /**
     * @return eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled()
    {
      return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
    }

    /**
     * @param eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled($eBayMotorsProPaymentMethodCheckOutEnabled)
    {
      $this->eBayMotorsProPaymentMethodCheckOutEnabled = $eBayMotorsProPaymentMethodCheckOutEnabled;
      return $this;
    }

    /**
     * @return eBayMotorsProShippingMethodEnabledDefinitionType
     */
    public function getEBayMotorsProShippingMethodEnabled()
    {
      return $this->eBayMotorsProShippingMethodEnabled;
    }

    /**
     * @param eBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProShippingMethodEnabled($eBayMotorsProShippingMethodEnabled)
    {
      $this->eBayMotorsProShippingMethodEnabled = $eBayMotorsProShippingMethodEnabled;
      return $this;
    }

    /**
     * @return eBayMotorsProCounterOfferEnabledDefinitionType
     */
    public function getEBayMotorsProCounterOfferEnabled()
    {
      return $this->eBayMotorsProCounterOfferEnabled;
    }

    /**
     * @param eBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProCounterOfferEnabled($eBayMotorsProCounterOfferEnabled)
    {
      $this->eBayMotorsProCounterOfferEnabled = $eBayMotorsProCounterOfferEnabled;
      return $this;
    }

    /**
     * @return eBayMotorsProSellerContactDetailsEnabledDefinitionType
     */
    public function getEBayMotorsProSellerContactDetailsEnabled()
    {
      return $this->eBayMotorsProSellerContactDetailsEnabled;
    }

    /**
     * @param eBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setEBayMotorsProSellerContactDetailsEnabled($eBayMotorsProSellerContactDetailsEnabled)
    {
      $this->eBayMotorsProSellerContactDetailsEnabled = $eBayMotorsProSellerContactDetailsEnabled;
      return $this;
    }

    /**
     * @return LocalMarketAdFormatEnabledDefinitionType
     */
    public function getLocalMarketAdFormatEnabled()
    {
      return $this->LocalMarketAdFormatEnabled;
    }

    /**
     * @param LocalMarketAdFormatEnabledDefinitionType $LocalMarketAdFormatEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketAdFormatEnabled($LocalMarketAdFormatEnabled)
    {
      $this->LocalMarketAdFormatEnabled = $LocalMarketAdFormatEnabled;
      return $this;
    }

    /**
     * @return LocalMarketContactByPhoneEnabledDefinitionType
     */
    public function getLocalMarketContactByPhoneEnabled()
    {
      return $this->LocalMarketContactByPhoneEnabled;
    }

    /**
     * @param LocalMarketContactByPhoneEnabledDefinitionType $LocalMarketContactByPhoneEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketContactByPhoneEnabled($LocalMarketContactByPhoneEnabled)
    {
      $this->LocalMarketContactByPhoneEnabled = $LocalMarketContactByPhoneEnabled;
      return $this;
    }

    /**
     * @return LocalMarketPhoneCountDefinitionType
     */
    public function getLocalMarketPhoneCount()
    {
      return $this->LocalMarketPhoneCount;
    }

    /**
     * @param LocalMarketPhoneCountDefinitionType $LocalMarketPhoneCount
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketPhoneCount($LocalMarketPhoneCount)
    {
      $this->LocalMarketPhoneCount = $LocalMarketPhoneCount;
      return $this;
    }

    /**
     * @return LocalMarketContactByAddressEnabledDefinitionType
     */
    public function getLocalMarketContactByAddressEnabled()
    {
      return $this->LocalMarketContactByAddressEnabled;
    }

    /**
     * @param LocalMarketContactByAddressEnabledDefinitionType $LocalMarketContactByAddressEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketContactByAddressEnabled($LocalMarketContactByAddressEnabled)
    {
      $this->LocalMarketContactByAddressEnabled = $LocalMarketContactByAddressEnabled;
      return $this;
    }

    /**
     * @return LocalMarketStreetCountDefinitionType
     */
    public function getLocalMarketStreetCount()
    {
      return $this->LocalMarketStreetCount;
    }

    /**
     * @param LocalMarketStreetCountDefinitionType $LocalMarketStreetCount
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketStreetCount($LocalMarketStreetCount)
    {
      $this->LocalMarketStreetCount = $LocalMarketStreetCount;
      return $this;
    }

    /**
     * @return LocalMarketCompanyNameEnabledDefinitionType
     */
    public function getLocalMarketCompanyNameEnabled()
    {
      return $this->LocalMarketCompanyNameEnabled;
    }

    /**
     * @param LocalMarketCompanyNameEnabledDefinitionType $LocalMarketCompanyNameEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketCompanyNameEnabled($LocalMarketCompanyNameEnabled)
    {
      $this->LocalMarketCompanyNameEnabled = $LocalMarketCompanyNameEnabled;
      return $this;
    }

    /**
     * @return LocalMarketContactByEmailEnabledDefinitionType
     */
    public function getLocalMarketContactByEmailEnabled()
    {
      return $this->LocalMarketContactByEmailEnabled;
    }

    /**
     * @param LocalMarketContactByEmailEnabledDefinitionType $LocalMarketContactByEmailEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketContactByEmailEnabled($LocalMarketContactByEmailEnabled)
    {
      $this->LocalMarketContactByEmailEnabled = $LocalMarketContactByEmailEnabled;
      return $this;
    }

    /**
     * @return LocalMarketBestOfferEnabledDefinitionType
     */
    public function getLocalMarketBestOfferEnabled()
    {
      return $this->LocalMarketBestOfferEnabled;
    }

    /**
     * @param LocalMarketBestOfferEnabledDefinitionType $LocalMarketBestOfferEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketBestOfferEnabled($LocalMarketBestOfferEnabled)
    {
      $this->LocalMarketBestOfferEnabled = $LocalMarketBestOfferEnabled;
      return $this;
    }

    /**
     * @return LocalMarketAutoAcceptEnabledDefinitionType
     */
    public function getLocalMarketAutoAcceptEnabled()
    {
      return $this->LocalMarketAutoAcceptEnabled;
    }

    /**
     * @param LocalMarketAutoAcceptEnabledDefinitionType $LocalMarketAutoAcceptEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketAutoAcceptEnabled($LocalMarketAutoAcceptEnabled)
    {
      $this->LocalMarketAutoAcceptEnabled = $LocalMarketAutoAcceptEnabled;
      return $this;
    }

    /**
     * @return LocalMarketAutoDeclineEnabledDefinitionType
     */
    public function getLocalMarketAutoDeclineEnabled()
    {
      return $this->LocalMarketAutoDeclineEnabled;
    }

    /**
     * @param LocalMarketAutoDeclineEnabledDefinitionType $LocalMarketAutoDeclineEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketAutoDeclineEnabled($LocalMarketAutoDeclineEnabled)
    {
      $this->LocalMarketAutoDeclineEnabled = $LocalMarketAutoDeclineEnabled;
      return $this;
    }

    /**
     * @return LocalMarketPaymentMethodCheckOutEnabledDefinitionType
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled()
    {
      return $this->LocalMarketPaymentMethodCheckOutEnabled;
    }

    /**
     * @param LocalMarketPaymentMethodCheckOutEnabledDefinitionType $LocalMarketPaymentMethodCheckOutEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled($LocalMarketPaymentMethodCheckOutEnabled)
    {
      $this->LocalMarketPaymentMethodCheckOutEnabled = $LocalMarketPaymentMethodCheckOutEnabled;
      return $this;
    }

    /**
     * @return LocalMarketShippingMethodEnabledDefinitionType
     */
    public function getLocalMarketShippingMethodEnabled()
    {
      return $this->LocalMarketShippingMethodEnabled;
    }

    /**
     * @param LocalMarketShippingMethodEnabledDefinitionType $LocalMarketShippingMethodEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketShippingMethodEnabled($LocalMarketShippingMethodEnabled)
    {
      $this->LocalMarketShippingMethodEnabled = $LocalMarketShippingMethodEnabled;
      return $this;
    }

    /**
     * @return LocalMarketCounterOfferEnabledDefinitionType
     */
    public function getLocalMarketCounterOfferEnabled()
    {
      return $this->LocalMarketCounterOfferEnabled;
    }

    /**
     * @param LocalMarketCounterOfferEnabledDefinitionType $LocalMarketCounterOfferEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketCounterOfferEnabled($LocalMarketCounterOfferEnabled)
    {
      $this->LocalMarketCounterOfferEnabled = $LocalMarketCounterOfferEnabled;
      return $this;
    }

    /**
     * @return LocalMarketSellerContactDetailsEnabledDefinitionType
     */
    public function getLocalMarketSellerContactDetailsEnabled()
    {
      return $this->LocalMarketSellerContactDetailsEnabled;
    }

    /**
     * @param LocalMarketSellerContactDetailsEnabledDefinitionType $LocalMarketSellerContactDetailsEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setLocalMarketSellerContactDetailsEnabled($LocalMarketSellerContactDetailsEnabled)
    {
      $this->LocalMarketSellerContactDetailsEnabled = $LocalMarketSellerContactDetailsEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdPhoneCountDefinitionType
     */
    public function getClassifiedAdPhoneCount()
    {
      return $this->ClassifiedAdPhoneCount;
    }

    /**
     * @param ClassifiedAdPhoneCountDefinitionType $ClassifiedAdPhoneCount
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdPhoneCount($ClassifiedAdPhoneCount)
    {
      $this->ClassifiedAdPhoneCount = $ClassifiedAdPhoneCount;
      return $this;
    }

    /**
     * @return ClassifiedAdContactByAddressEnabledDefinitionType
     */
    public function getClassifiedAdContactByAddressEnabled()
    {
      return $this->ClassifiedAdContactByAddressEnabled;
    }

    /**
     * @param ClassifiedAdContactByAddressEnabledDefinitionType $ClassifiedAdContactByAddressEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdContactByAddressEnabled($ClassifiedAdContactByAddressEnabled)
    {
      $this->ClassifiedAdContactByAddressEnabled = $ClassifiedAdContactByAddressEnabled;
      return $this;
    }

    /**
     * @return ClassifiedAdStreetCountDefinitionType
     */
    public function getClassifiedAdStreetCount()
    {
      return $this->ClassifiedAdStreetCount;
    }

    /**
     * @param ClassifiedAdStreetCountDefinitionType $ClassifiedAdStreetCount
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdStreetCount($ClassifiedAdStreetCount)
    {
      $this->ClassifiedAdStreetCount = $ClassifiedAdStreetCount;
      return $this;
    }

    /**
     * @return ClassifiedAdCompanyNameEnabledDefinitionType
     */
    public function getClassifiedAdCompanyNameEnabled()
    {
      return $this->ClassifiedAdCompanyNameEnabled;
    }

    /**
     * @param ClassifiedAdCompanyNameEnabledDefinitionType $ClassifiedAdCompanyNameEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setClassifiedAdCompanyNameEnabled($ClassifiedAdCompanyNameEnabled)
    {
      $this->ClassifiedAdCompanyNameEnabled = $ClassifiedAdCompanyNameEnabled;
      return $this;
    }

    /**
     * @return SpecialitySubscriptionDefinitionType
     */
    public function getSpecialitySubscription()
    {
      return $this->SpecialitySubscription;
    }

    /**
     * @param SpecialitySubscriptionDefinitionType $SpecialitySubscription
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setSpecialitySubscription($SpecialitySubscription)
    {
      $this->SpecialitySubscription = $SpecialitySubscription;
      return $this;
    }

    /**
     * @return RegularSubscriptionDefinitionType
     */
    public function getRegularSubscription()
    {
      return $this->RegularSubscription;
    }

    /**
     * @param RegularSubscriptionDefinitionType $RegularSubscription
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setRegularSubscription($RegularSubscription)
    {
      $this->RegularSubscription = $RegularSubscription;
      return $this;
    }

    /**
     * @return PremiumSubscriptionDefinitionType
     */
    public function getPremiumSubscription()
    {
      return $this->PremiumSubscription;
    }

    /**
     * @param PremiumSubscriptionDefinitionType $PremiumSubscription
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setPremiumSubscription($PremiumSubscription)
    {
      $this->PremiumSubscription = $PremiumSubscription;
      return $this;
    }

    /**
     * @return NonSubscriptionDefinitionType
     */
    public function getNonSubscription()
    {
      return $this->NonSubscription;
    }

    /**
     * @param NonSubscriptionDefinitionType $NonSubscription
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setNonSubscription($NonSubscription)
    {
      $this->NonSubscription = $NonSubscription;
      return $this;
    }

    /**
     * @return ReturnPolicyEnabledDefinitionType
     */
    public function getReturnPolicyEnabled()
    {
      return $this->ReturnPolicyEnabled;
    }

    /**
     * @param ReturnPolicyEnabledDefinitionType $ReturnPolicyEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setReturnPolicyEnabled($ReturnPolicyEnabled)
    {
      $this->ReturnPolicyEnabled = $ReturnPolicyEnabled;
      return $this;
    }

    /**
     * @return HandlingTimeEnabledDefinitionType
     */
    public function getHandlingTimeEnabled()
    {
      return $this->HandlingTimeEnabled;
    }

    /**
     * @param HandlingTimeEnabledDefinitionType $HandlingTimeEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setHandlingTimeEnabled($HandlingTimeEnabled)
    {
      $this->HandlingTimeEnabled = $HandlingTimeEnabled;
      return $this;
    }

    /**
     * @return PayPalRequiredForStoreOwnerDefinitionType
     */
    public function getPayPalRequiredForStoreOwner()
    {
      return $this->PayPalRequiredForStoreOwner;
    }

    /**
     * @param PayPalRequiredForStoreOwnerDefinitionType $PayPalRequiredForStoreOwner
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setPayPalRequiredForStoreOwner($PayPalRequiredForStoreOwner)
    {
      $this->PayPalRequiredForStoreOwner = $PayPalRequiredForStoreOwner;
      return $this;
    }

    /**
     * @return ReviseQuantityAllowedDefinitionType
     */
    public function getReviseQuantityAllowed()
    {
      return $this->ReviseQuantityAllowed;
    }

    /**
     * @param ReviseQuantityAllowedDefinitionType $ReviseQuantityAllowed
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setReviseQuantityAllowed($ReviseQuantityAllowed)
    {
      $this->ReviseQuantityAllowed = $ReviseQuantityAllowed;
      return $this;
    }

    /**
     * @return RevisePriceAllowedDefinitionType
     */
    public function getRevisePriceAllowed()
    {
      return $this->RevisePriceAllowed;
    }

    /**
     * @param RevisePriceAllowedDefinitionType $RevisePriceAllowed
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setRevisePriceAllowed($RevisePriceAllowed)
    {
      $this->RevisePriceAllowed = $RevisePriceAllowed;
      return $this;
    }

    /**
     * @return StoreOwnerExtendedListingDurationsEnabledDefinitionType
     */
    public function getStoreOwnerExtendedListingDurationsEnabled()
    {
      return $this->StoreOwnerExtendedListingDurationsEnabled;
    }

    /**
     * @param StoreOwnerExtendedListingDurationsEnabledDefinitionType $StoreOwnerExtendedListingDurationsEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setStoreOwnerExtendedListingDurationsEnabled($StoreOwnerExtendedListingDurationsEnabled)
    {
      $this->StoreOwnerExtendedListingDurationsEnabled = $StoreOwnerExtendedListingDurationsEnabled;
      return $this;
    }

    /**
     * @return StoreOwnerExtendedListingDurationsDefinitionType
     */
    public function getStoreOwnerExtendedListingDurations()
    {
      return $this->StoreOwnerExtendedListingDurations;
    }

    /**
     * @param StoreOwnerExtendedListingDurationsDefinitionType $StoreOwnerExtendedListingDurations
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setStoreOwnerExtendedListingDurations($StoreOwnerExtendedListingDurations)
    {
      $this->StoreOwnerExtendedListingDurations = $StoreOwnerExtendedListingDurations;
      return $this;
    }

    /**
     * @return PaymentMethodDefinitionType
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param PaymentMethodDefinitionType $PaymentMethod
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

    /**
     * @return Group1MaxFlatShippingCostDefinitionType
     */
    public function getGroup1MaxFlatShippingCost()
    {
      return $this->Group1MaxFlatShippingCost;
    }

    /**
     * @param Group1MaxFlatShippingCostDefinitionType $Group1MaxFlatShippingCost
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setGroup1MaxFlatShippingCost($Group1MaxFlatShippingCost)
    {
      $this->Group1MaxFlatShippingCost = $Group1MaxFlatShippingCost;
      return $this;
    }

    /**
     * @return Group2MaxFlatShippingCostDefinitionType
     */
    public function getGroup2MaxFlatShippingCost()
    {
      return $this->Group2MaxFlatShippingCost;
    }

    /**
     * @param Group2MaxFlatShippingCostDefinitionType $Group2MaxFlatShippingCost
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setGroup2MaxFlatShippingCost($Group2MaxFlatShippingCost)
    {
      $this->Group2MaxFlatShippingCost = $Group2MaxFlatShippingCost;
      return $this;
    }

    /**
     * @return Group3MaxFlatShippingCostDefinitionType
     */
    public function getGroup3MaxFlatShippingCost()
    {
      return $this->Group3MaxFlatShippingCost;
    }

    /**
     * @param Group3MaxFlatShippingCostDefinitionType $Group3MaxFlatShippingCost
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setGroup3MaxFlatShippingCost($Group3MaxFlatShippingCost)
    {
      $this->Group3MaxFlatShippingCost = $Group3MaxFlatShippingCost;
      return $this;
    }

    /**
     * @return MaxFlatShippingCostCBTExemptDefinitionType
     */
    public function getMaxFlatShippingCostCBTExempt()
    {
      return $this->MaxFlatShippingCostCBTExempt;
    }

    /**
     * @param MaxFlatShippingCostCBTExemptDefinitionType $MaxFlatShippingCostCBTExempt
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setMaxFlatShippingCostCBTExempt($MaxFlatShippingCostCBTExempt)
    {
      $this->MaxFlatShippingCostCBTExempt = $MaxFlatShippingCostCBTExempt;
      return $this;
    }

    /**
     * @return MaxFlatShippingCostDefinitionType
     */
    public function getMaxFlatShippingCost()
    {
      return $this->MaxFlatShippingCost;
    }

    /**
     * @param MaxFlatShippingCostDefinitionType $MaxFlatShippingCost
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setMaxFlatShippingCost($MaxFlatShippingCost)
    {
      $this->MaxFlatShippingCost = $MaxFlatShippingCost;
      return $this;
    }

    /**
     * @return VariationsEnabledDefinitionType
     */
    public function getVariationsEnabled()
    {
      return $this->VariationsEnabled;
    }

    /**
     * @param VariationsEnabledDefinitionType $VariationsEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setVariationsEnabled($VariationsEnabled)
    {
      $this->VariationsEnabled = $VariationsEnabled;
      return $this;
    }

    /**
     * @return AttributeConversionEnabledFeatureDefinitionType
     */
    public function getAttributeConversionEnabled()
    {
      return $this->AttributeConversionEnabled;
    }

    /**
     * @param AttributeConversionEnabledFeatureDefinitionType $AttributeConversionEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setAttributeConversionEnabled($AttributeConversionEnabled)
    {
      $this->AttributeConversionEnabled = $AttributeConversionEnabled;
      return $this;
    }

    /**
     * @return FreeGalleryPlusEnabledDefinitionType
     */
    public function getFreeGalleryPlusEnabled()
    {
      return $this->FreeGalleryPlusEnabled;
    }

    /**
     * @param FreeGalleryPlusEnabledDefinitionType $FreeGalleryPlusEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setFreeGalleryPlusEnabled($FreeGalleryPlusEnabled)
    {
      $this->FreeGalleryPlusEnabled = $FreeGalleryPlusEnabled;
      return $this;
    }

    /**
     * @return FreePicturePackEnabledDefinitionType
     */
    public function getFreePicturePackEnabled()
    {
      return $this->FreePicturePackEnabled;
    }

    /**
     * @param FreePicturePackEnabledDefinitionType $FreePicturePackEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setFreePicturePackEnabled($FreePicturePackEnabled)
    {
      $this->FreePicturePackEnabled = $FreePicturePackEnabled;
      return $this;
    }

    /**
     * @return ItemCompatibilityEnabledDefinitionType
     */
    public function getItemCompatibilityEnabled()
    {
      return $this->ItemCompatibilityEnabled;
    }

    /**
     * @param ItemCompatibilityEnabledDefinitionType $ItemCompatibilityEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setItemCompatibilityEnabled($ItemCompatibilityEnabled)
    {
      $this->ItemCompatibilityEnabled = $ItemCompatibilityEnabled;
      return $this;
    }

    /**
     * @return MaxItemCompatibilityDefinitionType
     */
    public function getMaxItemCompatibility()
    {
      return $this->MaxItemCompatibility;
    }

    /**
     * @param MaxItemCompatibilityDefinitionType $MaxItemCompatibility
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setMaxItemCompatibility($MaxItemCompatibility)
    {
      $this->MaxItemCompatibility = $MaxItemCompatibility;
      return $this;
    }

    /**
     * @return MinItemCompatibilityDefinitionType
     */
    public function getMinItemCompatibility()
    {
      return $this->MinItemCompatibility;
    }

    /**
     * @param MinItemCompatibilityDefinitionType $MinItemCompatibility
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setMinItemCompatibility($MinItemCompatibility)
    {
      $this->MinItemCompatibility = $MinItemCompatibility;
      return $this;
    }

    /**
     * @return ConditionEnabledDefinitionType
     */
    public function getConditionEnabled()
    {
      return $this->ConditionEnabled;
    }

    /**
     * @param ConditionEnabledDefinitionType $ConditionEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setConditionEnabled($ConditionEnabled)
    {
      $this->ConditionEnabled = $ConditionEnabled;
      return $this;
    }

    /**
     * @return ConditionValuesDefinitionType
     */
    public function getConditionValues()
    {
      return $this->ConditionValues;
    }

    /**
     * @param ConditionValuesDefinitionType $ConditionValues
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setConditionValues($ConditionValues)
    {
      $this->ConditionValues = $ConditionValues;
      return $this;
    }

    /**
     * @return ValueCategoryDefinitionType
     */
    public function getValueCategory()
    {
      return $this->ValueCategory;
    }

    /**
     * @param ValueCategoryDefinitionType $ValueCategory
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setValueCategory($ValueCategory)
    {
      $this->ValueCategory = $ValueCategory;
      return $this;
    }

    /**
     * @return ProductCreationEnabledDefinitionType
     */
    public function getProductCreationEnabled()
    {
      return $this->ProductCreationEnabled;
    }

    /**
     * @param ProductCreationEnabledDefinitionType $ProductCreationEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setProductCreationEnabled($ProductCreationEnabled)
    {
      $this->ProductCreationEnabled = $ProductCreationEnabled;
      return $this;
    }

    /**
     * @return CompatibleVehicleTypeDefinitionType
     */
    public function getCompatibleVehicleType()
    {
      return $this->CompatibleVehicleType;
    }

    /**
     * @param CompatibleVehicleTypeDefinitionType $CompatibleVehicleType
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setCompatibleVehicleType($CompatibleVehicleType)
    {
      $this->CompatibleVehicleType = $CompatibleVehicleType;
      return $this;
    }

    /**
     * @return MaxGranularFitmentCountDefinitionType
     */
    public function getMaxGranularFitmentCount()
    {
      return $this->MaxGranularFitmentCount;
    }

    /**
     * @param MaxGranularFitmentCountDefinitionType $MaxGranularFitmentCount
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setMaxGranularFitmentCount($MaxGranularFitmentCount)
    {
      $this->MaxGranularFitmentCount = $MaxGranularFitmentCount;
      return $this;
    }

    /**
     * @return PaymentOptionsGroupEnabledDefinitionType
     */
    public function getPaymentOptionsGroup()
    {
      return $this->PaymentOptionsGroup;
    }

    /**
     * @param PaymentOptionsGroupEnabledDefinitionType $PaymentOptionsGroup
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setPaymentOptionsGroup($PaymentOptionsGroup)
    {
      $this->PaymentOptionsGroup = $PaymentOptionsGroup;
      return $this;
    }

    /**
     * @return ProfileCategoryGroupDefinitionType
     */
    public function getShippingProfileCategoryGroup()
    {
      return $this->ShippingProfileCategoryGroup;
    }

    /**
     * @param ProfileCategoryGroupDefinitionType $ShippingProfileCategoryGroup
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setShippingProfileCategoryGroup($ShippingProfileCategoryGroup)
    {
      $this->ShippingProfileCategoryGroup = $ShippingProfileCategoryGroup;
      return $this;
    }

    /**
     * @return ProfileCategoryGroupDefinitionType
     */
    public function getPaymentProfileCategoryGroup()
    {
      return $this->PaymentProfileCategoryGroup;
    }

    /**
     * @param ProfileCategoryGroupDefinitionType $PaymentProfileCategoryGroup
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setPaymentProfileCategoryGroup($PaymentProfileCategoryGroup)
    {
      $this->PaymentProfileCategoryGroup = $PaymentProfileCategoryGroup;
      return $this;
    }

    /**
     * @return ProfileCategoryGroupDefinitionType
     */
    public function getReturnPolicyProfileCategoryGroup()
    {
      return $this->ReturnPolicyProfileCategoryGroup;
    }

    /**
     * @param ProfileCategoryGroupDefinitionType $ReturnPolicyProfileCategoryGroup
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setReturnPolicyProfileCategoryGroup($ReturnPolicyProfileCategoryGroup)
    {
      $this->ReturnPolicyProfileCategoryGroup = $ReturnPolicyProfileCategoryGroup;
      return $this;
    }

    /**
     * @return VINSupportedDefinitionType
     */
    public function getVINSupported()
    {
      return $this->VINSupported;
    }

    /**
     * @param VINSupportedDefinitionType $VINSupported
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setVINSupported($VINSupported)
    {
      $this->VINSupported = $VINSupported;
      return $this;
    }

    /**
     * @return VRMSupportedDefinitionType
     */
    public function getVRMSupported()
    {
      return $this->VRMSupported;
    }

    /**
     * @param VRMSupportedDefinitionType $VRMSupported
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setVRMSupported($VRMSupported)
    {
      $this->VRMSupported = $VRMSupported;
      return $this;
    }

    /**
     * @return SellerProvidedTitleSupportedDefinitionType
     */
    public function getSellerProvidedTitleSupported()
    {
      return $this->SellerProvidedTitleSupported;
    }

    /**
     * @param SellerProvidedTitleSupportedDefinitionType $SellerProvidedTitleSupported
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setSellerProvidedTitleSupported($SellerProvidedTitleSupported)
    {
      $this->SellerProvidedTitleSupported = $SellerProvidedTitleSupported;
      return $this;
    }

    /**
     * @return DepositSupportedDefinitionType
     */
    public function getDepositSupported()
    {
      return $this->DepositSupported;
    }

    /**
     * @param DepositSupportedDefinitionType $DepositSupported
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setDepositSupported($DepositSupported)
    {
      $this->DepositSupported = $DepositSupported;
      return $this;
    }

    /**
     * @return GlobalShippingEnabledDefinitionType
     */
    public function getGlobalShippingEnabled()
    {
      return $this->GlobalShippingEnabled;
    }

    /**
     * @param GlobalShippingEnabledDefinitionType $GlobalShippingEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setGlobalShippingEnabled($GlobalShippingEnabled)
    {
      $this->GlobalShippingEnabled = $GlobalShippingEnabled;
      return $this;
    }

    /**
     * @return AdditionalCompatibilityEnabledDefinitionType
     */
    public function getAdditionalCompatibilityEnabled()
    {
      return $this->AdditionalCompatibilityEnabled;
    }

    /**
     * @param AdditionalCompatibilityEnabledDefinitionType $AdditionalCompatibilityEnabled
     * @return \EbayWsdl\FeatureDefinitionsType
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
     * @return \EbayWsdl\FeatureDefinitionsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
