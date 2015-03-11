<?php

namespace EbayWsdl\Classes;

class GetDisputeResponseType extends AbstractResponseType
{

    /**
     * @var DisputeType $Dispute
     */
    protected $Dispute = null;

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
     * @param DisputeType $Dispute
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $Dispute = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->Dispute = $Dispute;
    }

    /**
     * @return DisputeType
     */
    public function getDispute()
    {
      return $this->Dispute;
    }

    /**
     * @param DisputeType $Dispute
     * @return \EbayWsdl\Classes\GetDisputeResponseType
     */
    public function setDispute($Dispute)
    {
      $this->Dispute = $Dispute;
      return $this;
    }

}
