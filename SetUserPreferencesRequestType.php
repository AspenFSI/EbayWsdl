<?php

namespace EbayWsdl;

class SetUserPreferencesRequestType extends AbstractRequestType
{

    /**
     * @var BidderNoticePreferencesType $BidderNoticePreferences
     */
    protected $BidderNoticePreferences = null;

    /**
     * @var CombinedPaymentPreferencesType $CombinedPaymentPreferences
     */
    protected $CombinedPaymentPreferences = null;

    /**
     * @var CrossPromotionPreferencesType $CrossPromotionPreferences
     */
    protected $CrossPromotionPreferences = null;

    /**
     * @var SellerPaymentPreferencesType $SellerPaymentPreferences
     */
    protected $SellerPaymentPreferences = null;

    /**
     * @var SellerFavoriteItemPreferencesType $SellerFavoriteItemPreferences
     */
    protected $SellerFavoriteItemPreferences = null;

    /**
     * @var EndOfAuctionEmailPreferencesType $EndOfAuctionEmailPreferences
     */
    protected $EndOfAuctionEmailPreferences = null;

    /**
     * @var boolean $EmailShipmentTrackingNumberPreference
     */
    protected $EmailShipmentTrackingNumberPreference = null;

    /**
     * @var boolean $RequiredShipPhoneNumberPreference
     */
    protected $RequiredShipPhoneNumberPreference = null;

    /**
     * @var UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences
     */
    protected $UnpaidItemAssistancePreferences = null;

    /**
     * @var PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences
     */
    protected $PurchaseReminderEmailPreferences = null;

    /**
     * @var boolean $SellerThirdPartyCheckoutDisabled
     */
    protected $SellerThirdPartyCheckoutDisabled = null;

    /**
     * @var DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference
     */
    protected $DispatchCutoffTimePreference = null;

    /**
     * @var boolean $GlobalShippingProgramListingPreference
     */
    protected $GlobalShippingProgramListingPreference = null;

    /**
     * @var boolean $OverrideGSPserviceWithIntlService
     */
    protected $OverrideGSPserviceWithIntlService = null;

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
     * @param BidderNoticePreferencesType $BidderNoticePreferences
     * @param CombinedPaymentPreferencesType $CombinedPaymentPreferences
     * @param CrossPromotionPreferencesType $CrossPromotionPreferences
     * @param SellerPaymentPreferencesType $SellerPaymentPreferences
     * @param SellerFavoriteItemPreferencesType $SellerFavoriteItemPreferences
     * @param EndOfAuctionEmailPreferencesType $EndOfAuctionEmailPreferences
     * @param boolean $EmailShipmentTrackingNumberPreference
     * @param boolean $RequiredShipPhoneNumberPreference
     * @param UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences
     * @param PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences
     * @param boolean $SellerThirdPartyCheckoutDisabled
     * @param DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference
     * @param boolean $GlobalShippingProgramListingPreference
     * @param boolean $OverrideGSPserviceWithIntlService
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $BidderNoticePreferences = null, $CombinedPaymentPreferences = null, $CrossPromotionPreferences = null, $SellerPaymentPreferences = null, $SellerFavoriteItemPreferences = null, $EndOfAuctionEmailPreferences = null, $EmailShipmentTrackingNumberPreference = null, $RequiredShipPhoneNumberPreference = null, $UnpaidItemAssistancePreferences = null, $PurchaseReminderEmailPreferences = null, $SellerThirdPartyCheckoutDisabled = null, $DispatchCutoffTimePreference = null, $GlobalShippingProgramListingPreference = null, $OverrideGSPserviceWithIntlService = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->BidderNoticePreferences = $BidderNoticePreferences;
      $this->CombinedPaymentPreferences = $CombinedPaymentPreferences;
      $this->CrossPromotionPreferences = $CrossPromotionPreferences;
      $this->SellerPaymentPreferences = $SellerPaymentPreferences;
      $this->SellerFavoriteItemPreferences = $SellerFavoriteItemPreferences;
      $this->EndOfAuctionEmailPreferences = $EndOfAuctionEmailPreferences;
      $this->EmailShipmentTrackingNumberPreference = $EmailShipmentTrackingNumberPreference;
      $this->RequiredShipPhoneNumberPreference = $RequiredShipPhoneNumberPreference;
      $this->UnpaidItemAssistancePreferences = $UnpaidItemAssistancePreferences;
      $this->PurchaseReminderEmailPreferences = $PurchaseReminderEmailPreferences;
      $this->SellerThirdPartyCheckoutDisabled = $SellerThirdPartyCheckoutDisabled;
      $this->DispatchCutoffTimePreference = $DispatchCutoffTimePreference;
      $this->GlobalShippingProgramListingPreference = $GlobalShippingProgramListingPreference;
      $this->OverrideGSPserviceWithIntlService = $OverrideGSPserviceWithIntlService;
    }

    /**
     * @return BidderNoticePreferencesType
     */
    public function getBidderNoticePreferences()
    {
      return $this->BidderNoticePreferences;
    }

    /**
     * @param BidderNoticePreferencesType $BidderNoticePreferences
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setBidderNoticePreferences($BidderNoticePreferences)
    {
      $this->BidderNoticePreferences = $BidderNoticePreferences;
      return $this;
    }

    /**
     * @return CombinedPaymentPreferencesType
     */
    public function getCombinedPaymentPreferences()
    {
      return $this->CombinedPaymentPreferences;
    }

    /**
     * @param CombinedPaymentPreferencesType $CombinedPaymentPreferences
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setCombinedPaymentPreferences($CombinedPaymentPreferences)
    {
      $this->CombinedPaymentPreferences = $CombinedPaymentPreferences;
      return $this;
    }

    /**
     * @return CrossPromotionPreferencesType
     */
    public function getCrossPromotionPreferences()
    {
      return $this->CrossPromotionPreferences;
    }

    /**
     * @param CrossPromotionPreferencesType $CrossPromotionPreferences
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setCrossPromotionPreferences($CrossPromotionPreferences)
    {
      $this->CrossPromotionPreferences = $CrossPromotionPreferences;
      return $this;
    }

    /**
     * @return SellerPaymentPreferencesType
     */
    public function getSellerPaymentPreferences()
    {
      return $this->SellerPaymentPreferences;
    }

    /**
     * @param SellerPaymentPreferencesType $SellerPaymentPreferences
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setSellerPaymentPreferences($SellerPaymentPreferences)
    {
      $this->SellerPaymentPreferences = $SellerPaymentPreferences;
      return $this;
    }

    /**
     * @return SellerFavoriteItemPreferencesType
     */
    public function getSellerFavoriteItemPreferences()
    {
      return $this->SellerFavoriteItemPreferences;
    }

    /**
     * @param SellerFavoriteItemPreferencesType $SellerFavoriteItemPreferences
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setSellerFavoriteItemPreferences($SellerFavoriteItemPreferences)
    {
      $this->SellerFavoriteItemPreferences = $SellerFavoriteItemPreferences;
      return $this;
    }

    /**
     * @return EndOfAuctionEmailPreferencesType
     */
    public function getEndOfAuctionEmailPreferences()
    {
      return $this->EndOfAuctionEmailPreferences;
    }

    /**
     * @param EndOfAuctionEmailPreferencesType $EndOfAuctionEmailPreferences
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setEndOfAuctionEmailPreferences($EndOfAuctionEmailPreferences)
    {
      $this->EndOfAuctionEmailPreferences = $EndOfAuctionEmailPreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailShipmentTrackingNumberPreference()
    {
      return $this->EmailShipmentTrackingNumberPreference;
    }

    /**
     * @param boolean $EmailShipmentTrackingNumberPreference
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setEmailShipmentTrackingNumberPreference($EmailShipmentTrackingNumberPreference)
    {
      $this->EmailShipmentTrackingNumberPreference = $EmailShipmentTrackingNumberPreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequiredShipPhoneNumberPreference()
    {
      return $this->RequiredShipPhoneNumberPreference;
    }

    /**
     * @param boolean $RequiredShipPhoneNumberPreference
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setRequiredShipPhoneNumberPreference($RequiredShipPhoneNumberPreference)
    {
      $this->RequiredShipPhoneNumberPreference = $RequiredShipPhoneNumberPreference;
      return $this;
    }

    /**
     * @return UnpaidItemAssistancePreferencesType
     */
    public function getUnpaidItemAssistancePreferences()
    {
      return $this->UnpaidItemAssistancePreferences;
    }

    /**
     * @param UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setUnpaidItemAssistancePreferences($UnpaidItemAssistancePreferences)
    {
      $this->UnpaidItemAssistancePreferences = $UnpaidItemAssistancePreferences;
      return $this;
    }

    /**
     * @return PurchaseReminderEmailPreferencesType
     */
    public function getPurchaseReminderEmailPreferences()
    {
      return $this->PurchaseReminderEmailPreferences;
    }

    /**
     * @param PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setPurchaseReminderEmailPreferences($PurchaseReminderEmailPreferences)
    {
      $this->PurchaseReminderEmailPreferences = $PurchaseReminderEmailPreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellerThirdPartyCheckoutDisabled()
    {
      return $this->SellerThirdPartyCheckoutDisabled;
    }

    /**
     * @param boolean $SellerThirdPartyCheckoutDisabled
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setSellerThirdPartyCheckoutDisabled($SellerThirdPartyCheckoutDisabled)
    {
      $this->SellerThirdPartyCheckoutDisabled = $SellerThirdPartyCheckoutDisabled;
      return $this;
    }

    /**
     * @return DispatchCutoffTimePreferencesType
     */
    public function getDispatchCutoffTimePreference()
    {
      return $this->DispatchCutoffTimePreference;
    }

    /**
     * @param DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setDispatchCutoffTimePreference($DispatchCutoffTimePreference)
    {
      $this->DispatchCutoffTimePreference = $DispatchCutoffTimePreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGlobalShippingProgramListingPreference()
    {
      return $this->GlobalShippingProgramListingPreference;
    }

    /**
     * @param boolean $GlobalShippingProgramListingPreference
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setGlobalShippingProgramListingPreference($GlobalShippingProgramListingPreference)
    {
      $this->GlobalShippingProgramListingPreference = $GlobalShippingProgramListingPreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideGSPserviceWithIntlService()
    {
      return $this->OverrideGSPserviceWithIntlService;
    }

    /**
     * @param boolean $OverrideGSPserviceWithIntlService
     * @return \EbayWsdl\SetUserPreferencesRequestType
     */
    public function setOverrideGSPserviceWithIntlService($OverrideGSPserviceWithIntlService)
    {
      $this->OverrideGSPserviceWithIntlService = $OverrideGSPserviceWithIntlService;
      return $this;
    }

}
