<?php

namespace EbayWsdl\Classes;

class NotificationMessageType extends AbstractResponseType
{

    /**
     * @var string $MessageBody
     */
    protected $MessageBody = null;

    /**
     * @var string $EIAS
     */
    protected $EIAS = null;

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
     * @param string $MessageBody
     * @param string $EIAS
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $MessageBody = null, $EIAS = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->MessageBody = $MessageBody;
      $this->EIAS = $EIAS;
    }

    /**
     * @return string
     */
    public function getMessageBody()
    {
      return $this->MessageBody;
    }

    /**
     * @param string $MessageBody
     * @return \EbayWsdl\Classes\NotificationMessageType
     */
    public function setMessageBody($MessageBody)
    {
      $this->MessageBody = $MessageBody;
      return $this;
    }

    /**
     * @return string
     */
    public function getEIAS()
    {
      return $this->EIAS;
    }

    /**
     * @param string $EIAS
     * @return \EbayWsdl\Classes\NotificationMessageType
     */
    public function setEIAS($EIAS)
    {
      $this->EIAS = $EIAS;
      return $this;
    }

}
