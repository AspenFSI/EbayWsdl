<?php

namespace EbayWsdl\Classes;

class GetUserPreferencesRequestType extends AbstractRequestType
{

    /**
     * @var boolean $ShowBidderNoticePreferences
     */
    protected $ShowBidderNoticePreferences = null;

    /**
     * @var boolean $ShowCombinedPaymentPreferences
     */
    protected $ShowCombinedPaymentPreferences = null;

    /**
     * @var boolean $ShowCrossPromotionPreferences
     */
    protected $ShowCrossPromotionPreferences = null;

    /**
     * @var boolean $ShowSellerPaymentPreferences
     */
    protected $ShowSellerPaymentPreferences = null;

    /**
     * @var boolean $ShowEndOfAuctionEmailPreferences
     */
    protected $ShowEndOfAuctionEmailPreferences = null;

    /**
     * @var boolean $ShowSellerFavoriteItemPreferences
     */
    protected $ShowSellerFavoriteItemPreferences = null;

    /**
     * @var boolean $ShowProStoresPreferences
     */
    protected $ShowProStoresPreferences = null;

    /**
     * @var boolean $ShowEmailShipmentTrackingNumberPreference
     */
    protected $ShowEmailShipmentTrackingNumberPreference = null;

    /**
     * @var boolean $ShowRequiredShipPhoneNumberPreference
     */
    protected $ShowRequiredShipPhoneNumberPreference = null;

    /**
     * @var boolean $ShowSellerExcludeShipToLocationPreference
     */
    protected $ShowSellerExcludeShipToLocationPreference = null;

    /**
     * @var boolean $ShowUnpaidItemAssistancePreference
     */
    protected $ShowUnpaidItemAssistancePreference = null;

    /**
     * @var boolean $ShowPurchaseReminderEmailPreferences
     */
    protected $ShowPurchaseReminderEmailPreferences = null;

    /**
     * @var boolean $ShowUnpaidItemAssistanceExclusionList
     */
    protected $ShowUnpaidItemAssistanceExclusionList = null;

    /**
     * @var boolean $ShowSellerProfilePreferences
     */
    protected $ShowSellerProfilePreferences = null;

    /**
     * @var boolean $ShowSellerReturnPreferences
     */
    protected $ShowSellerReturnPreferences = null;

    /**
     * @var boolean $ShowGlobalShippingProgramPreference
     */
    protected $ShowGlobalShippingProgramPreference = null;

    /**
     * @var boolean $ShowDispatchCutoffTimePreferences
     */
    protected $ShowDispatchCutoffTimePreferences = null;

    /**
     * @var boolean $ShowGlobalShippingProgramListingPreference
     */
    protected $ShowGlobalShippingProgramListingPreference = null;

    /**
     * @var boolean $ShowOverrideGSPServiceWithIntlServicePreference
     */
    protected $ShowOverrideGSPServiceWithIntlServicePreference = null;

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
     * @param boolean $ShowBidderNoticePreferences
     * @param boolean $ShowCombinedPaymentPreferences
     * @param boolean $ShowCrossPromotionPreferences
     * @param boolean $ShowSellerPaymentPreferences
     * @param boolean $ShowEndOfAuctionEmailPreferences
     * @param boolean $ShowSellerFavoriteItemPreferences
     * @param boolean $ShowProStoresPreferences
     * @param boolean $ShowEmailShipmentTrackingNumberPreference
     * @param boolean $ShowRequiredShipPhoneNumberPreference
     * @param boolean $ShowSellerExcludeShipToLocationPreference
     * @param boolean $ShowUnpaidItemAssistancePreference
     * @param boolean $ShowPurchaseReminderEmailPreferences
     * @param boolean $ShowUnpaidItemAssistanceExclusionList
     * @param boolean $ShowSellerProfilePreferences
     * @param boolean $ShowSellerReturnPreferences
     * @param boolean $ShowGlobalShippingProgramPreference
     * @param boolean $ShowDispatchCutoffTimePreferences
     * @param boolean $ShowGlobalShippingProgramListingPreference
     * @param boolean $ShowOverrideGSPServiceWithIntlServicePreference
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ShowBidderNoticePreferences = null, $ShowCombinedPaymentPreferences = null, $ShowCrossPromotionPreferences = null, $ShowSellerPaymentPreferences = null, $ShowEndOfAuctionEmailPreferences = null, $ShowSellerFavoriteItemPreferences = null, $ShowProStoresPreferences = null, $ShowEmailShipmentTrackingNumberPreference = null, $ShowRequiredShipPhoneNumberPreference = null, $ShowSellerExcludeShipToLocationPreference = null, $ShowUnpaidItemAssistancePreference = null, $ShowPurchaseReminderEmailPreferences = null, $ShowUnpaidItemAssistanceExclusionList = null, $ShowSellerProfilePreferences = null, $ShowSellerReturnPreferences = null, $ShowGlobalShippingProgramPreference = null, $ShowDispatchCutoffTimePreferences = null, $ShowGlobalShippingProgramListingPreference = null, $ShowOverrideGSPServiceWithIntlServicePreference = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ShowBidderNoticePreferences = $ShowBidderNoticePreferences;
      $this->ShowCombinedPaymentPreferences = $ShowCombinedPaymentPreferences;
      $this->ShowCrossPromotionPreferences = $ShowCrossPromotionPreferences;
      $this->ShowSellerPaymentPreferences = $ShowSellerPaymentPreferences;
      $this->ShowEndOfAuctionEmailPreferences = $ShowEndOfAuctionEmailPreferences;
      $this->ShowSellerFavoriteItemPreferences = $ShowSellerFavoriteItemPreferences;
      $this->ShowProStoresPreferences = $ShowProStoresPreferences;
      $this->ShowEmailShipmentTrackingNumberPreference = $ShowEmailShipmentTrackingNumberPreference;
      $this->ShowRequiredShipPhoneNumberPreference = $ShowRequiredShipPhoneNumberPreference;
      $this->ShowSellerExcludeShipToLocationPreference = $ShowSellerExcludeShipToLocationPreference;
      $this->ShowUnpaidItemAssistancePreference = $ShowUnpaidItemAssistancePreference;
      $this->ShowPurchaseReminderEmailPreferences = $ShowPurchaseReminderEmailPreferences;
      $this->ShowUnpaidItemAssistanceExclusionList = $ShowUnpaidItemAssistanceExclusionList;
      $this->ShowSellerProfilePreferences = $ShowSellerProfilePreferences;
      $this->ShowSellerReturnPreferences = $ShowSellerReturnPreferences;
      $this->ShowGlobalShippingProgramPreference = $ShowGlobalShippingProgramPreference;
      $this->ShowDispatchCutoffTimePreferences = $ShowDispatchCutoffTimePreferences;
      $this->ShowGlobalShippingProgramListingPreference = $ShowGlobalShippingProgramListingPreference;
      $this->ShowOverrideGSPServiceWithIntlServicePreference = $ShowOverrideGSPServiceWithIntlServicePreference;
    }

    /**
     * @return boolean
     */
    public function getShowBidderNoticePreferences()
    {
      return $this->ShowBidderNoticePreferences;
    }

    /**
     * @param boolean $ShowBidderNoticePreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowBidderNoticePreferences($ShowBidderNoticePreferences)
    {
      $this->ShowBidderNoticePreferences = $ShowBidderNoticePreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowCombinedPaymentPreferences()
    {
      return $this->ShowCombinedPaymentPreferences;
    }

    /**
     * @param boolean $ShowCombinedPaymentPreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowCombinedPaymentPreferences($ShowCombinedPaymentPreferences)
    {
      $this->ShowCombinedPaymentPreferences = $ShowCombinedPaymentPreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowCrossPromotionPreferences()
    {
      return $this->ShowCrossPromotionPreferences;
    }

    /**
     * @param boolean $ShowCrossPromotionPreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowCrossPromotionPreferences($ShowCrossPromotionPreferences)
    {
      $this->ShowCrossPromotionPreferences = $ShowCrossPromotionPreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowSellerPaymentPreferences()
    {
      return $this->ShowSellerPaymentPreferences;
    }

    /**
     * @param boolean $ShowSellerPaymentPreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowSellerPaymentPreferences($ShowSellerPaymentPreferences)
    {
      $this->ShowSellerPaymentPreferences = $ShowSellerPaymentPreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowEndOfAuctionEmailPreferences()
    {
      return $this->ShowEndOfAuctionEmailPreferences;
    }

    /**
     * @param boolean $ShowEndOfAuctionEmailPreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowEndOfAuctionEmailPreferences($ShowEndOfAuctionEmailPreferences)
    {
      $this->ShowEndOfAuctionEmailPreferences = $ShowEndOfAuctionEmailPreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowSellerFavoriteItemPreferences()
    {
      return $this->ShowSellerFavoriteItemPreferences;
    }

    /**
     * @param boolean $ShowSellerFavoriteItemPreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowSellerFavoriteItemPreferences($ShowSellerFavoriteItemPreferences)
    {
      $this->ShowSellerFavoriteItemPreferences = $ShowSellerFavoriteItemPreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowProStoresPreferences()
    {
      return $this->ShowProStoresPreferences;
    }

    /**
     * @param boolean $ShowProStoresPreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowProStoresPreferences($ShowProStoresPreferences)
    {
      $this->ShowProStoresPreferences = $ShowProStoresPreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowEmailShipmentTrackingNumberPreference()
    {
      return $this->ShowEmailShipmentTrackingNumberPreference;
    }

    /**
     * @param boolean $ShowEmailShipmentTrackingNumberPreference
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowEmailShipmentTrackingNumberPreference($ShowEmailShipmentTrackingNumberPreference)
    {
      $this->ShowEmailShipmentTrackingNumberPreference = $ShowEmailShipmentTrackingNumberPreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowRequiredShipPhoneNumberPreference()
    {
      return $this->ShowRequiredShipPhoneNumberPreference;
    }

    /**
     * @param boolean $ShowRequiredShipPhoneNumberPreference
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowRequiredShipPhoneNumberPreference($ShowRequiredShipPhoneNumberPreference)
    {
      $this->ShowRequiredShipPhoneNumberPreference = $ShowRequiredShipPhoneNumberPreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowSellerExcludeShipToLocationPreference()
    {
      return $this->ShowSellerExcludeShipToLocationPreference;
    }

    /**
     * @param boolean $ShowSellerExcludeShipToLocationPreference
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowSellerExcludeShipToLocationPreference($ShowSellerExcludeShipToLocationPreference)
    {
      $this->ShowSellerExcludeShipToLocationPreference = $ShowSellerExcludeShipToLocationPreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowUnpaidItemAssistancePreference()
    {
      return $this->ShowUnpaidItemAssistancePreference;
    }

    /**
     * @param boolean $ShowUnpaidItemAssistancePreference
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowUnpaidItemAssistancePreference($ShowUnpaidItemAssistancePreference)
    {
      $this->ShowUnpaidItemAssistancePreference = $ShowUnpaidItemAssistancePreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowPurchaseReminderEmailPreferences()
    {
      return $this->ShowPurchaseReminderEmailPreferences;
    }

    /**
     * @param boolean $ShowPurchaseReminderEmailPreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowPurchaseReminderEmailPreferences($ShowPurchaseReminderEmailPreferences)
    {
      $this->ShowPurchaseReminderEmailPreferences = $ShowPurchaseReminderEmailPreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowUnpaidItemAssistanceExclusionList()
    {
      return $this->ShowUnpaidItemAssistanceExclusionList;
    }

    /**
     * @param boolean $ShowUnpaidItemAssistanceExclusionList
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowUnpaidItemAssistanceExclusionList($ShowUnpaidItemAssistanceExclusionList)
    {
      $this->ShowUnpaidItemAssistanceExclusionList = $ShowUnpaidItemAssistanceExclusionList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowSellerProfilePreferences()
    {
      return $this->ShowSellerProfilePreferences;
    }

    /**
     * @param boolean $ShowSellerProfilePreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowSellerProfilePreferences($ShowSellerProfilePreferences)
    {
      $this->ShowSellerProfilePreferences = $ShowSellerProfilePreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowSellerReturnPreferences()
    {
      return $this->ShowSellerReturnPreferences;
    }

    /**
     * @param boolean $ShowSellerReturnPreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowSellerReturnPreferences($ShowSellerReturnPreferences)
    {
      $this->ShowSellerReturnPreferences = $ShowSellerReturnPreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowGlobalShippingProgramPreference()
    {
      return $this->ShowGlobalShippingProgramPreference;
    }

    /**
     * @param boolean $ShowGlobalShippingProgramPreference
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowGlobalShippingProgramPreference($ShowGlobalShippingProgramPreference)
    {
      $this->ShowGlobalShippingProgramPreference = $ShowGlobalShippingProgramPreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowDispatchCutoffTimePreferences()
    {
      return $this->ShowDispatchCutoffTimePreferences;
    }

    /**
     * @param boolean $ShowDispatchCutoffTimePreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowDispatchCutoffTimePreferences($ShowDispatchCutoffTimePreferences)
    {
      $this->ShowDispatchCutoffTimePreferences = $ShowDispatchCutoffTimePreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowGlobalShippingProgramListingPreference()
    {
      return $this->ShowGlobalShippingProgramListingPreference;
    }

    /**
     * @param boolean $ShowGlobalShippingProgramListingPreference
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowGlobalShippingProgramListingPreference($ShowGlobalShippingProgramListingPreference)
    {
      $this->ShowGlobalShippingProgramListingPreference = $ShowGlobalShippingProgramListingPreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowOverrideGSPServiceWithIntlServicePreference()
    {
      return $this->ShowOverrideGSPServiceWithIntlServicePreference;
    }

    /**
     * @param boolean $ShowOverrideGSPServiceWithIntlServicePreference
     * @return \EbayWsdl\Classes\GetUserPreferencesRequestType
     */
    public function setShowOverrideGSPServiceWithIntlServicePreference($ShowOverrideGSPServiceWithIntlServicePreference)
    {
      $this->ShowOverrideGSPServiceWithIntlServicePreference = $ShowOverrideGSPServiceWithIntlServicePreference;
      return $this;
    }

}
