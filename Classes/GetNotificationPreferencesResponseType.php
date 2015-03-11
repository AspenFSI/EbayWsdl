<?php

namespace EbayWsdl\Classes;

class GetNotificationPreferencesResponseType extends AbstractResponseType
{

    /**
     * @var ApplicationDeliveryPreferencesType $ApplicationDeliveryPreferences
     */
    protected $ApplicationDeliveryPreferences = null;

    /**
     * @var string $DeliveryURLName
     */
    protected $DeliveryURLName = null;

    /**
     * @var NotificationEnableArrayType $UserDeliveryPreferenceArray
     */
    protected $UserDeliveryPreferenceArray = null;

    /**
     * @var NotificationUserDataType $UserData
     */
    protected $UserData = null;

    /**
     * @var NotificationEventPropertyType[] $EventProperty
     */
    protected $EventProperty = null;

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
     * @param ApplicationDeliveryPreferencesType $ApplicationDeliveryPreferences
     * @param string $DeliveryURLName
     * @param NotificationEnableArrayType $UserDeliveryPreferenceArray
     * @param NotificationUserDataType $UserData
     * @param NotificationEventPropertyType[] $EventProperty
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $ApplicationDeliveryPreferences = null, $DeliveryURLName = null, $UserDeliveryPreferenceArray = null, $UserData = null, array $EventProperty = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->ApplicationDeliveryPreferences = $ApplicationDeliveryPreferences;
      $this->DeliveryURLName = $DeliveryURLName;
      $this->UserDeliveryPreferenceArray = $UserDeliveryPreferenceArray;
      $this->UserData = $UserData;
      $this->EventProperty = $EventProperty;
    }

    /**
     * @return ApplicationDeliveryPreferencesType
     */
    public function getApplicationDeliveryPreferences()
    {
      return $this->ApplicationDeliveryPreferences;
    }

    /**
     * @param ApplicationDeliveryPreferencesType $ApplicationDeliveryPreferences
     * @return \EbayWsdl\Classes\GetNotificationPreferencesResponseType
     */
    public function setApplicationDeliveryPreferences($ApplicationDeliveryPreferences)
    {
      $this->ApplicationDeliveryPreferences = $ApplicationDeliveryPreferences;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryURLName()
    {
      return $this->DeliveryURLName;
    }

    /**
     * @param string $DeliveryURLName
     * @return \EbayWsdl\Classes\GetNotificationPreferencesResponseType
     */
    public function setDeliveryURLName($DeliveryURLName)
    {
      $this->DeliveryURLName = $DeliveryURLName;
      return $this;
    }

    /**
     * @return NotificationEnableArrayType
     */
    public function getUserDeliveryPreferenceArray()
    {
      return $this->UserDeliveryPreferenceArray;
    }

    /**
     * @param NotificationEnableArrayType $UserDeliveryPreferenceArray
     * @return \EbayWsdl\Classes\GetNotificationPreferencesResponseType
     */
    public function setUserDeliveryPreferenceArray($UserDeliveryPreferenceArray)
    {
      $this->UserDeliveryPreferenceArray = $UserDeliveryPreferenceArray;
      return $this;
    }

    /**
     * @return NotificationUserDataType
     */
    public function getUserData()
    {
      return $this->UserData;
    }

    /**
     * @param NotificationUserDataType $UserData
     * @return \EbayWsdl\Classes\GetNotificationPreferencesResponseType
     */
    public function setUserData($UserData)
    {
      $this->UserData = $UserData;
      return $this;
    }

    /**
     * @return NotificationEventPropertyType[]
     */
    public function getEventProperty()
    {
      return $this->EventProperty;
    }

    /**
     * @param NotificationEventPropertyType[] $EventProperty
     * @return \EbayWsdl\Classes\GetNotificationPreferencesResponseType
     */
    public function setEventProperty(array $EventProperty)
    {
      $this->EventProperty = $EventProperty;
      return $this;
    }

}
