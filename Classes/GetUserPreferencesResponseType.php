<?php

namespace EbayWsdl\Classes;

class GetUserPreferencesResponseType extends AbstractResponseType
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
     * @var ProStoresCheckoutPreferenceType $ProStoresPreference
     */
    protected $ProStoresPreference = null;

    /**
     * @var UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences
     */
    protected $UnpaidItemAssistancePreferences = null;

    /**
     * @var SellerExcludeShipToLocationPreferencesType $SellerExcludeShipToLocationPreferences
     */
    protected $SellerExcludeShipToLocationPreferences = null;

    /**
     * @var PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences
     */
    protected $PurchaseReminderEmailPreferences = null;

    /**
     * @var boolean $SellerThirdPartyCheckoutDisabled
     */
    protected $SellerThirdPartyCheckoutDisabled = null;

    /**
     * @var SellerProfilePreferencesType $SellerProfilePreferences
     */
    protected $SellerProfilePreferences = null;

    /**
     * @var SellerReturnPreferencesType $SellerReturnPreferences
     */
    protected $SellerReturnPreferences = null;

    /**
     * @var boolean $OfferGlobalShippingProgramPreference
     */
    protected $OfferGlobalShippingProgramPreference = null;

    /**
     * @var DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference
     */
    protected $DispatchCutoffTimePreference = null;

    /**
     * @var boolean $GlobalShippingProgramListingPreference
     */
    protected $GlobalShippingProgramListingPreference = null;

    /**
     * @var boolean $OverrideGSPServiceWithIntlServicePreference
     */
    protected $OverrideGSPServiceWithIntlServicePreference = null;

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
     * @param BidderNoticePreferencesType $BidderNoticePreferences
     * @param CombinedPaymentPreferencesType $CombinedPaymentPreferences
     * @param CrossPromotionPreferencesType $CrossPromotionPreferences
     * @param SellerPaymentPreferencesType $SellerPaymentPreferences
     * @param SellerFavoriteItemPreferencesType $SellerFavoriteItemPreferences
     * @param EndOfAuctionEmailPreferencesType $EndOfAuctionEmailPreferences
     * @param boolean $EmailShipmentTrackingNumberPreference
     * @param boolean $RequiredShipPhoneNumberPreference
     * @param ProStoresCheckoutPreferenceType $ProStoresPreference
     * @param UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences
     * @param SellerExcludeShipToLocationPreferencesType $SellerExcludeShipToLocationPreferences
     * @param PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences
     * @param boolean $SellerThirdPartyCheckoutDisabled
     * @param SellerProfilePreferencesType $SellerProfilePreferences
     * @param SellerReturnPreferencesType $SellerReturnPreferences
     * @param boolean $OfferGlobalShippingProgramPreference
     * @param DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference
     * @param boolean $GlobalShippingProgramListingPreference
     * @param boolean $OverrideGSPServiceWithIntlServicePreference
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $BidderNoticePreferences = null, $CombinedPaymentPreferences = null, $CrossPromotionPreferences = null, $SellerPaymentPreferences = null, $SellerFavoriteItemPreferences = null, $EndOfAuctionEmailPreferences = null, $EmailShipmentTrackingNumberPreference = null, $RequiredShipPhoneNumberPreference = null, $ProStoresPreference = null, $UnpaidItemAssistancePreferences = null, $SellerExcludeShipToLocationPreferences = null, $PurchaseReminderEmailPreferences = null, $SellerThirdPartyCheckoutDisabled = null, $SellerProfilePreferences = null, $SellerReturnPreferences = null, $OfferGlobalShippingProgramPreference = null, $DispatchCutoffTimePreference = null, $GlobalShippingProgramListingPreference = null, $OverrideGSPServiceWithIntlServicePreference = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->BidderNoticePreferences = $BidderNoticePreferences;
      $this->CombinedPaymentPreferences = $CombinedPaymentPreferences;
      $this->CrossPromotionPreferences = $CrossPromotionPreferences;
      $this->SellerPaymentPreferences = $SellerPaymentPreferences;
      $this->SellerFavoriteItemPreferences = $SellerFavoriteItemPreferences;
      $this->EndOfAuctionEmailPreferences = $EndOfAuctionEmailPreferences;
      $this->EmailShipmentTrackingNumberPreference = $EmailShipmentTrackingNumberPreference;
      $this->RequiredShipPhoneNumberPreference = $RequiredShipPhoneNumberPreference;
      $this->ProStoresPreference = $ProStoresPreference;
      $this->UnpaidItemAssistancePreferences = $UnpaidItemAssistancePreferences;
      $this->SellerExcludeShipToLocationPreferences = $SellerExcludeShipToLocationPreferences;
      $this->PurchaseReminderEmailPreferences = $PurchaseReminderEmailPreferences;
      $this->SellerThirdPartyCheckoutDisabled = $SellerThirdPartyCheckoutDisabled;
      $this->SellerProfilePreferences = $SellerProfilePreferences;
      $this->SellerReturnPreferences = $SellerReturnPreferences;
      $this->OfferGlobalShippingProgramPreference = $OfferGlobalShippingProgramPreference;
      $this->DispatchCutoffTimePreference = $DispatchCutoffTimePreference;
      $this->GlobalShippingProgramListingPreference = $GlobalShippingProgramListingPreference;
      $this->OverrideGSPServiceWithIntlServicePreference = $OverrideGSPServiceWithIntlServicePreference;
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
     */
    public function setRequiredShipPhoneNumberPreference($RequiredShipPhoneNumberPreference)
    {
      $this->RequiredShipPhoneNumberPreference = $RequiredShipPhoneNumberPreference;
      return $this;
    }

    /**
     * @return ProStoresCheckoutPreferenceType
     */
    public function getProStoresPreference()
    {
      return $this->ProStoresPreference;
    }

    /**
     * @param ProStoresCheckoutPreferenceType $ProStoresPreference
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
     */
    public function setProStoresPreference($ProStoresPreference)
    {
      $this->ProStoresPreference = $ProStoresPreference;
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
     */
    public function setUnpaidItemAssistancePreferences($UnpaidItemAssistancePreferences)
    {
      $this->UnpaidItemAssistancePreferences = $UnpaidItemAssistancePreferences;
      return $this;
    }

    /**
     * @return SellerExcludeShipToLocationPreferencesType
     */
    public function getSellerExcludeShipToLocationPreferences()
    {
      return $this->SellerExcludeShipToLocationPreferences;
    }

    /**
     * @param SellerExcludeShipToLocationPreferencesType $SellerExcludeShipToLocationPreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
     */
    public function setSellerExcludeShipToLocationPreferences($SellerExcludeShipToLocationPreferences)
    {
      $this->SellerExcludeShipToLocationPreferences = $SellerExcludeShipToLocationPreferences;
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
     */
    public function setSellerThirdPartyCheckoutDisabled($SellerThirdPartyCheckoutDisabled)
    {
      $this->SellerThirdPartyCheckoutDisabled = $SellerThirdPartyCheckoutDisabled;
      return $this;
    }

    /**
     * @return SellerProfilePreferencesType
     */
    public function getSellerProfilePreferences()
    {
      return $this->SellerProfilePreferences;
    }

    /**
     * @param SellerProfilePreferencesType $SellerProfilePreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
     */
    public function setSellerProfilePreferences($SellerProfilePreferences)
    {
      $this->SellerProfilePreferences = $SellerProfilePreferences;
      return $this;
    }

    /**
     * @return SellerReturnPreferencesType
     */
    public function getSellerReturnPreferences()
    {
      return $this->SellerReturnPreferences;
    }

    /**
     * @param SellerReturnPreferencesType $SellerReturnPreferences
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
     */
    public function setSellerReturnPreferences($SellerReturnPreferences)
    {
      $this->SellerReturnPreferences = $SellerReturnPreferences;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOfferGlobalShippingProgramPreference()
    {
      return $this->OfferGlobalShippingProgramPreference;
    }

    /**
     * @param boolean $OfferGlobalShippingProgramPreference
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
     */
    public function setOfferGlobalShippingProgramPreference($OfferGlobalShippingProgramPreference)
    {
      $this->OfferGlobalShippingProgramPreference = $OfferGlobalShippingProgramPreference;
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
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
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
     */
    public function setGlobalShippingProgramListingPreference($GlobalShippingProgramListingPreference)
    {
      $this->GlobalShippingProgramListingPreference = $GlobalShippingProgramListingPreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideGSPServiceWithIntlServicePreference()
    {
      return $this->OverrideGSPServiceWithIntlServicePreference;
    }

    /**
     * @param boolean $OverrideGSPServiceWithIntlServicePreference
     * @return \EbayWsdl\Classes\GetUserPreferencesResponseType
     */
    public function setOverrideGSPServiceWithIntlServicePreference($OverrideGSPServiceWithIntlServicePreference)
    {
      $this->OverrideGSPServiceWithIntlServicePreference = $OverrideGSPServiceWithIntlServicePreference;
      return $this;
    }

}
