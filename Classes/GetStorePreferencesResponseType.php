<?php

namespace EbayWsdl\Classes;

class GetStorePreferencesResponseType extends AbstractResponseType
{

    /**
     * @var StorePreferencesType $StorePreferences
     */
    protected $StorePreferences = null;

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
     * @param StorePreferencesType $StorePreferences
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $StorePreferences = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->StorePreferences = $StorePreferences;
    }

    /**
     * @return StorePreferencesType
     */
    public function getStorePreferences()
    {
      return $this->StorePreferences;
    }

    /**
     * @param StorePreferencesType $StorePreferences
     * @return \EbayWsdl\Classes\GetStorePreferencesResponseType
     */
    public function setStorePreferences($StorePreferences)
    {
      $this->StorePreferences = $StorePreferences;
      return $this;
    }

}
