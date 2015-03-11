<?php

namespace EbayWsdl\Classes;

class GetClientAlertsAuthTokenResponseType extends AbstractResponseType
{

    /**
     * @var string $ClientAlertsAuthToken
     */
    protected $ClientAlertsAuthToken = null;

    /**
     * @var \DateTime $HardExpirationTime
     */
    protected $HardExpirationTime = null;

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
     * @param string $ClientAlertsAuthToken
     * @param \DateTime $HardExpirationTime
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $ClientAlertsAuthToken = null, \DateTime $HardExpirationTime = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->ClientAlertsAuthToken = $ClientAlertsAuthToken;
      $this->HardExpirationTime = $HardExpirationTime ? $HardExpirationTime->format(\DateTime::ATOM) : null;
    }

    /**
     * @return string
     */
    public function getClientAlertsAuthToken()
    {
      return $this->ClientAlertsAuthToken;
    }

    /**
     * @param string $ClientAlertsAuthToken
     * @return \EbayWsdl\Classes\GetClientAlertsAuthTokenResponseType
     */
    public function setClientAlertsAuthToken($ClientAlertsAuthToken)
    {
      $this->ClientAlertsAuthToken = $ClientAlertsAuthToken;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getHardExpirationTime()
    {
      if ($this->HardExpirationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->HardExpirationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $HardExpirationTime
     * @return \EbayWsdl\Classes\GetClientAlertsAuthTokenResponseType
     */
    public function setHardExpirationTime(\DateTime $HardExpirationTime)
    {
      $this->HardExpirationTime = $HardExpirationTime->format(\DateTime::ATOM);
      return $this;
    }

}
