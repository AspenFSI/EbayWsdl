<?php

namespace EbayWsdl;

class GetWantItNowPostResponseType extends AbstractResponseType
{

    /**
     * @var WantItNowPostType $WantItNowPost
     */
    protected $WantItNowPost = null;

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
     * @param WantItNowPostType $WantItNowPost
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $WantItNowPost = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->WantItNowPost = $WantItNowPost;
    }

    /**
     * @return WantItNowPostType
     */
    public function getWantItNowPost()
    {
      return $this->WantItNowPost;
    }

    /**
     * @param WantItNowPostType $WantItNowPost
     * @return \EbayWsdl\GetWantItNowPostResponseType
     */
    public function setWantItNowPost($WantItNowPost)
    {
      $this->WantItNowPost = $WantItNowPost;
      return $this;
    }

}
