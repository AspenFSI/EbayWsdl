<?php

namespace EbayWsdl\Classes;

class GetMyMessagesResponseType extends AbstractResponseType
{

    /**
     * @var MyMessagesSummaryType $Summary
     */
    protected $Summary = null;

    /**
     * @var MyMessagesAlertArrayType $Alerts
     */
    protected $Alerts = null;

    /**
     * @var MyMessagesMessageArrayType $Messages
     */
    protected $Messages = null;

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
     * @param MyMessagesSummaryType $Summary
     * @param MyMessagesAlertArrayType $Alerts
     * @param MyMessagesMessageArrayType $Messages
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $Summary = null, $Alerts = null, $Messages = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->Summary = $Summary;
      $this->Alerts = $Alerts;
      $this->Messages = $Messages;
    }

    /**
     * @return MyMessagesSummaryType
     */
    public function getSummary()
    {
      return $this->Summary;
    }

    /**
     * @param MyMessagesSummaryType $Summary
     * @return \EbayWsdl\Classes\GetMyMessagesResponseType
     */
    public function setSummary($Summary)
    {
      $this->Summary = $Summary;
      return $this;
    }

    /**
     * @return MyMessagesAlertArrayType
     */
    public function getAlerts()
    {
      return $this->Alerts;
    }

    /**
     * @param MyMessagesAlertArrayType $Alerts
     * @return \EbayWsdl\Classes\GetMyMessagesResponseType
     */
    public function setAlerts($Alerts)
    {
      $this->Alerts = $Alerts;
      return $this;
    }

    /**
     * @return MyMessagesMessageArrayType
     */
    public function getMessages()
    {
      return $this->Messages;
    }

    /**
     * @param MyMessagesMessageArrayType $Messages
     * @return \EbayWsdl\Classes\GetMyMessagesResponseType
     */
    public function setMessages($Messages)
    {
      $this->Messages = $Messages;
      return $this;
    }

}
