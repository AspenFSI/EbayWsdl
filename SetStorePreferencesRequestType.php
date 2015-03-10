<?php

namespace EbayWsdl;

class SetStorePreferencesRequestType extends AbstractRequestType
{

    /**
     * @var StorePreferencesType $StorePreferences
     */
    protected $StorePreferences = null;

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
     * @param StorePreferencesType $StorePreferences
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $StorePreferences = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
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
     * @return \EbayWsdl\SetStorePreferencesRequestType
     */
    public function setStorePreferences($StorePreferences)
    {
      $this->StorePreferences = $StorePreferences;
      return $this;
    }

}
