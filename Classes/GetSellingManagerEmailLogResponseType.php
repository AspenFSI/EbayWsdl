<?php

namespace EbayWsdl\Classes;

class GetSellingManagerEmailLogResponseType extends AbstractResponseType
{

    /**
     * @var SellingManagerEmailLogType[] $EmailLog
     */
    protected $EmailLog = null;

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
     * @param SellingManagerEmailLogType[] $EmailLog
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $EmailLog = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->EmailLog = $EmailLog;
    }

    /**
     * @return SellingManagerEmailLogType[]
     */
    public function getEmailLog()
    {
      return $this->EmailLog;
    }

    /**
     * @param SellingManagerEmailLogType[] $EmailLog
     * @return \EbayWsdl\Classes\GetSellingManagerEmailLogResponseType
     */
    public function setEmailLog(array $EmailLog)
    {
      $this->EmailLog = $EmailLog;
      return $this;
    }

}
