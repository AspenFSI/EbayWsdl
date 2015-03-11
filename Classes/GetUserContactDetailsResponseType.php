<?php

namespace EbayWsdl\Classes;

class GetUserContactDetailsResponseType extends AbstractResponseType
{

    /**
     * @var string $UserID
     */
    protected $UserID = null;

    /**
     * @var AddressType $ContactAddress
     */
    protected $ContactAddress = null;

    /**
     * @var \DateTime $RegistrationDate
     */
    protected $RegistrationDate = null;

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
     * @param string $UserID
     * @param AddressType $ContactAddress
     * @param \DateTime $RegistrationDate
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $UserID = null, $ContactAddress = null, \DateTime $RegistrationDate = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->UserID = $UserID;
      $this->ContactAddress = $ContactAddress;
      $this->RegistrationDate = $RegistrationDate ? $RegistrationDate->format(\DateTime::ATOM) : null;
    }

    /**
     * @return string
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param string $UserID
     * @return \EbayWsdl\Classes\GetUserContactDetailsResponseType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getContactAddress()
    {
      return $this->ContactAddress;
    }

    /**
     * @param AddressType $ContactAddress
     * @return \EbayWsdl\Classes\GetUserContactDetailsResponseType
     */
    public function setContactAddress($ContactAddress)
    {
      $this->ContactAddress = $ContactAddress;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
      if ($this->RegistrationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RegistrationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RegistrationDate
     * @return \EbayWsdl\Classes\GetUserContactDetailsResponseType
     */
    public function setRegistrationDate(\DateTime $RegistrationDate)
    {
      $this->RegistrationDate = $RegistrationDate->format(\DateTime::ATOM);
      return $this;
    }

}
