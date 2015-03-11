<?php

namespace EbayWsdl\Classes;

class SetNotificationPreferencesRequestType extends AbstractRequestType
{

    /**
     * @var ApplicationDeliveryPreferencesType $ApplicationDeliveryPreferences
     */
    protected $ApplicationDeliveryPreferences = null;

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
     * @var string $DeliveryURLName
     */
    protected $DeliveryURLName = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param ApplicationDeliveryPreferencesType $ApplicationDeliveryPreferences
     * @param NotificationEnableArrayType $UserDeliveryPreferenceArray
     * @param NotificationUserDataType $UserData
     * @param NotificationEventPropertyType[] $EventProperty
     * @param string $DeliveryURLName
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ApplicationDeliveryPreferences = null, $UserDeliveryPreferenceArray = null, $UserData = null, array $EventProperty = null, $DeliveryURLName = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ApplicationDeliveryPreferences = $ApplicationDeliveryPreferences;
      $this->UserDeliveryPreferenceArray = $UserDeliveryPreferenceArray;
      $this->UserData = $UserData;
      $this->EventProperty = $EventProperty;
      $this->DeliveryURLName = $DeliveryURLName;
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
     * @return \EbayWsdl\Classes\SetNotificationPreferencesRequestType
     */
    public function setApplicationDeliveryPreferences($ApplicationDeliveryPreferences)
    {
      $this->ApplicationDeliveryPreferences = $ApplicationDeliveryPreferences;
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
     * @return \EbayWsdl\Classes\SetNotificationPreferencesRequestType
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
     * @return \EbayWsdl\Classes\SetNotificationPreferencesRequestType
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
     * @return \EbayWsdl\Classes\SetNotificationPreferencesRequestType
     */
    public function setEventProperty(array $EventProperty)
    {
      $this->EventProperty = $EventProperty;
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
     * @return \EbayWsdl\Classes\SetNotificationPreferencesRequestType
     */
    public function setDeliveryURLName($DeliveryURLName)
    {
      $this->DeliveryURLName = $DeliveryURLName;
      return $this;
    }

}
