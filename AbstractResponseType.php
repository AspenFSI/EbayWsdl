<?php

namespace EbayWsdl;

abstract class AbstractResponseType
{

    /**
     * @var \DateTime $Timestamp
     */
    protected $Timestamp = null;

    /**
     * @var AckCodeType $Ack
     */
    protected $Ack = null;

    /**
     * @var string $CorrelationID
     */
    protected $CorrelationID = null;

    /**
     * @var ErrorType[] $Errors
     */
    protected $Errors = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @var string $Build
     */
    protected $Build = null;

    /**
     * @var string $NotificationEventName
     */
    protected $NotificationEventName = null;

    /**
     * @var DuplicateInvocationDetailsType $DuplicateInvocationDetails
     */
    protected $DuplicateInvocationDetails = null;

    /**
     * @var string $RecipientUserID
     */
    protected $RecipientUserID = null;

    /**
     * @var string $EIASToken
     */
    protected $EIASToken = null;

    /**
     * @var string $NotificationSignature
     */
    protected $NotificationSignature = null;

    /**
     * @var string $HardExpirationWarning
     */
    protected $HardExpirationWarning = null;

    /**
     * @var BotBlockResponseType $BotBlock
     */
    protected $BotBlock = null;

    /**
     * @var string $ExternalUserData
     */
    protected $ExternalUserData = null;

    /**
     * @var string $any
     */
    protected $any = null;

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
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null)
    {
      $this->Timestamp = $Timestamp ? $Timestamp->format(\DateTime::ATOM) : null;
      $this->Ack = $Ack;
      $this->CorrelationID = $CorrelationID;
      $this->Errors = $Errors;
      $this->Message = $Message;
      $this->Version = $Version;
      $this->Build = $Build;
      $this->NotificationEventName = $NotificationEventName;
      $this->DuplicateInvocationDetails = $DuplicateInvocationDetails;
      $this->RecipientUserID = $RecipientUserID;
      $this->EIASToken = $EIASToken;
      $this->NotificationSignature = $NotificationSignature;
      $this->HardExpirationWarning = $HardExpirationWarning;
      $this->BotBlock = $BotBlock;
      $this->ExternalUserData = $ExternalUserData;
      $this->any = $any;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->Timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Timestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Timestamp
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setTimestamp(\DateTime $Timestamp)
    {
      $this->Timestamp = $Timestamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AckCodeType
     */
    public function getAck()
    {
      return $this->Ack;
    }

    /**
     * @param AckCodeType $Ack
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setAck($Ack)
    {
      $this->Ack = $Ack;
      return $this;
    }

    /**
     * @return string
     */
    public function getCorrelationID()
    {
      return $this->CorrelationID;
    }

    /**
     * @param string $CorrelationID
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setCorrelationID($CorrelationID)
    {
      $this->CorrelationID = $CorrelationID;
      return $this;
    }

    /**
     * @return ErrorType[]
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param ErrorType[] $Errors
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setErrors(array $Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuild()
    {
      return $this->Build;
    }

    /**
     * @param string $Build
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setBuild($Build)
    {
      $this->Build = $Build;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotificationEventName()
    {
      return $this->NotificationEventName;
    }

    /**
     * @param string $NotificationEventName
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setNotificationEventName($NotificationEventName)
    {
      $this->NotificationEventName = $NotificationEventName;
      return $this;
    }

    /**
     * @return DuplicateInvocationDetailsType
     */
    public function getDuplicateInvocationDetails()
    {
      return $this->DuplicateInvocationDetails;
    }

    /**
     * @param DuplicateInvocationDetailsType $DuplicateInvocationDetails
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setDuplicateInvocationDetails($DuplicateInvocationDetails)
    {
      $this->DuplicateInvocationDetails = $DuplicateInvocationDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientUserID()
    {
      return $this->RecipientUserID;
    }

    /**
     * @param string $RecipientUserID
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setRecipientUserID($RecipientUserID)
    {
      $this->RecipientUserID = $RecipientUserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getEIASToken()
    {
      return $this->EIASToken;
    }

    /**
     * @param string $EIASToken
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setEIASToken($EIASToken)
    {
      $this->EIASToken = $EIASToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotificationSignature()
    {
      return $this->NotificationSignature;
    }

    /**
     * @param string $NotificationSignature
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setNotificationSignature($NotificationSignature)
    {
      $this->NotificationSignature = $NotificationSignature;
      return $this;
    }

    /**
     * @return string
     */
    public function getHardExpirationWarning()
    {
      return $this->HardExpirationWarning;
    }

    /**
     * @param string $HardExpirationWarning
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setHardExpirationWarning($HardExpirationWarning)
    {
      $this->HardExpirationWarning = $HardExpirationWarning;
      return $this;
    }

    /**
     * @return BotBlockResponseType
     */
    public function getBotBlock()
    {
      return $this->BotBlock;
    }

    /**
     * @param BotBlockResponseType $BotBlock
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setBotBlock($BotBlock)
    {
      $this->BotBlock = $BotBlock;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalUserData()
    {
      return $this->ExternalUserData;
    }

    /**
     * @param string $ExternalUserData
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setExternalUserData($ExternalUserData)
    {
      $this->ExternalUserData = $ExternalUserData;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \EbayWsdl\AbstractResponseType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
