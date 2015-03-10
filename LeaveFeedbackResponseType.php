<?php

namespace EbayWsdl;

class LeaveFeedbackResponseType extends AbstractResponseType
{

    /**
     * @var string $FeedbackID
     */
    protected $FeedbackID = null;

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
     * @param string $FeedbackID
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $FeedbackID = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->FeedbackID = $FeedbackID;
    }

    /**
     * @return string
     */
    public function getFeedbackID()
    {
      return $this->FeedbackID;
    }

    /**
     * @param string $FeedbackID
     * @return \EbayWsdl\LeaveFeedbackResponseType
     */
    public function setFeedbackID($FeedbackID)
    {
      $this->FeedbackID = $FeedbackID;
      return $this;
    }

}
