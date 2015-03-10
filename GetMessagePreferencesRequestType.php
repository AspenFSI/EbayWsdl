<?php

namespace EbayWsdl;

class GetMessagePreferencesRequestType extends AbstractRequestType
{

    /**
     * @var UserIDType $SellerID
     */
    protected $SellerID = null;

    /**
     * @var boolean $IncludeASQPreferences
     */
    protected $IncludeASQPreferences = null;

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
     * @param UserIDType $SellerID
     * @param boolean $IncludeASQPreferences
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $SellerID = null, $IncludeASQPreferences = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->SellerID = $SellerID;
      $this->IncludeASQPreferences = $IncludeASQPreferences;
    }

    /**
     * @return UserIDType
     */
    public function getSellerID()
    {
      return $this->SellerID;
    }

    /**
     * @param UserIDType $SellerID
     * @return \EbayWsdl\GetMessagePreferencesRequestType
     */
    public function setSellerID($SellerID)
    {
      $this->SellerID = $SellerID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeASQPreferences()
    {
      return $this->IncludeASQPreferences;
    }

    /**
     * @param boolean $IncludeASQPreferences
     * @return \EbayWsdl\GetMessagePreferencesRequestType
     */
    public function setIncludeASQPreferences($IncludeASQPreferences)
    {
      $this->IncludeASQPreferences = $IncludeASQPreferences;
      return $this;
    }

}
