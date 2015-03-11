<?php

namespace EbayWsdl\Classes;

class FetchTokenResponseType extends AbstractResponseType
{

    /**
     * @var string $eBayAuthToken
     */
    protected $eBayAuthToken = null;

    /**
     * @var \DateTime $HardExpirationTime
     */
    protected $HardExpirationTime = null;

    /**
     * @var string $RESTToken
     */
    protected $RESTToken = null;

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
     * @param string $eBayAuthToken
     * @param \DateTime $HardExpirationTime
     * @param string $RESTToken
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $eBayAuthToken = null, \DateTime $HardExpirationTime = null, $RESTToken = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->eBayAuthToken = $eBayAuthToken;
      $this->HardExpirationTime = $HardExpirationTime ? $HardExpirationTime->format(\DateTime::ATOM) : null;
      $this->RESTToken = $RESTToken;
    }

    /**
     * @return string
     */
    public function getEBayAuthToken()
    {
      return $this->eBayAuthToken;
    }

    /**
     * @param string $eBayAuthToken
     * @return \EbayWsdl\Classes\FetchTokenResponseType
     */
    public function setEBayAuthToken($eBayAuthToken)
    {
      $this->eBayAuthToken = $eBayAuthToken;
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
     * @return \EbayWsdl\Classes\FetchTokenResponseType
     */
    public function setHardExpirationTime(\DateTime $HardExpirationTime)
    {
      $this->HardExpirationTime = $HardExpirationTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getRESTToken()
    {
      return $this->RESTToken;
    }

    /**
     * @param string $RESTToken
     * @return \EbayWsdl\Classes\FetchTokenResponseType
     */
    public function setRESTToken($RESTToken)
    {
      $this->RESTToken = $RESTToken;
      return $this;
    }

}
