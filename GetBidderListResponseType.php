<?php

namespace EbayWsdl;

class GetBidderListResponseType extends AbstractResponseType
{

    /**
     * @var UserType $Bidder
     */
    protected $Bidder = null;

    /**
     * @var ItemArrayType $BidItemArray
     */
    protected $BidItemArray = null;

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
     * @param UserType $Bidder
     * @param ItemArrayType $BidItemArray
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $Bidder = null, $BidItemArray = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->Bidder = $Bidder;
      $this->BidItemArray = $BidItemArray;
    }

    /**
     * @return UserType
     */
    public function getBidder()
    {
      return $this->Bidder;
    }

    /**
     * @param UserType $Bidder
     * @return \EbayWsdl\GetBidderListResponseType
     */
    public function setBidder($Bidder)
    {
      $this->Bidder = $Bidder;
      return $this;
    }

    /**
     * @return ItemArrayType
     */
    public function getBidItemArray()
    {
      return $this->BidItemArray;
    }

    /**
     * @param ItemArrayType $BidItemArray
     * @return \EbayWsdl\GetBidderListResponseType
     */
    public function setBidItemArray($BidItemArray)
    {
      $this->BidItemArray = $BidItemArray;
      return $this;
    }

}
