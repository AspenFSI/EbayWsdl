<?php

namespace EbayWsdl\Classes;

class GetNotificationPreferencesRequestType extends AbstractRequestType
{

    /**
     * @var NotificationRoleCodeType $PreferenceLevel
     */
    protected $PreferenceLevel = null;

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
     * @param NotificationRoleCodeType $PreferenceLevel
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $PreferenceLevel = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->PreferenceLevel = $PreferenceLevel;
    }

    /**
     * @return NotificationRoleCodeType
     */
    public function getPreferenceLevel()
    {
      return $this->PreferenceLevel;
    }

    /**
     * @param NotificationRoleCodeType $PreferenceLevel
     * @return \EbayWsdl\Classes\GetNotificationPreferencesRequestType
     */
    public function setPreferenceLevel($PreferenceLevel)
    {
      $this->PreferenceLevel = $PreferenceLevel;
      return $this;
    }

}
