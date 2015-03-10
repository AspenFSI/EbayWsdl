<?php

namespace EbayWsdl;

class GetSessionIDRequestType extends AbstractRequestType
{

    /**
     * @var string $RuName
     */
    protected $RuName = null;

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
     * @param string $RuName
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $RuName = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->RuName = $RuName;
    }

    /**
     * @return string
     */
    public function getRuName()
    {
      return $this->RuName;
    }

    /**
     * @param string $RuName
     * @return \EbayWsdl\GetSessionIDRequestType
     */
    public function setRuName($RuName)
    {
      $this->RuName = $RuName;
      return $this;
    }

}
