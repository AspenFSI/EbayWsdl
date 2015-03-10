<?php

namespace EbayWsdl;

class SetMessagePreferencesRequestType extends AbstractRequestType
{

    /**
     * @var ASQPreferencesType $ASQPreferences
     */
    protected $ASQPreferences = null;

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
     * @param ASQPreferencesType $ASQPreferences
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ASQPreferences = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
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
     * @return \EbayWsdl\SetMessagePreferencesRequestType
     */
    public function setASQPreferences($ASQPreferences)
    {
      $this->ASQPreferences = $ASQPreferences;
      return $this;
    }

}
