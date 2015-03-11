<?php

namespace EbayWsdl\Classes;

class GetHighBiddersResponseType extends AbstractResponseType
{

    /**
     * @var OfferArrayType $BidArray
     */
    protected $BidArray = null;

    /**
     * @var ListingStatusCodeType $ListingStatus
     */
    protected $ListingStatus = null;

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
     * @param OfferArrayType $BidArray
     * @param ListingStatusCodeType $ListingStatus
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $BidArray = null, $ListingStatus = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->BidArray = $BidArray;
      $this->ListingStatus = $ListingStatus;
    }

    /**
     * @return OfferArrayType
     */
    public function getBidArray()
    {
      return $this->BidArray;
    }

    /**
     * @param OfferArrayType $BidArray
     * @return \EbayWsdl\Classes\GetHighBiddersResponseType
     */
    public function setBidArray($BidArray)
    {
      $this->BidArray = $BidArray;
      return $this;
    }

    /**
     * @return ListingStatusCodeType
     */
    public function getListingStatus()
    {
      return $this->ListingStatus;
    }

    /**
     * @param ListingStatusCodeType $ListingStatus
     * @return \EbayWsdl\Classes\GetHighBiddersResponseType
     */
    public function setListingStatus($ListingStatus)
    {
      $this->ListingStatus = $ListingStatus;
      return $this;
    }

}
