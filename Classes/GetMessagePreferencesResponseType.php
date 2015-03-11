<?php

namespace EbayWsdl\Classes;

class GetMessagePreferencesResponseType extends AbstractResponseType
{

    /**
     * @var ASQPreferencesType $ASQPreferences
     */
    protected $ASQPreferences = null;

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
     * @param ASQPreferencesType $ASQPreferences
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $ASQPreferences = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->ASQPreferences = $ASQPreferences;
    }

    /**
     * @return ASQPreferencesType
     */
    public function getASQPreferences()
    {
      return $this->ASQPreferences;
    }

    /**
     * @param ASQPreferencesType $ASQPreferences
     * @return \EbayWsdl\Classes\GetMessagePreferencesResponseType
     */
    public function setASQPreferences($ASQPreferences)
    {
      $this->ASQPreferences = $ASQPreferences;
      return $this;
    }

}
