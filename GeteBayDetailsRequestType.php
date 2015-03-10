<?php

namespace EbayWsdl;

class GeteBayDetailsRequestType extends AbstractRequestType
{

    /**
     * @var DetailNameCodeType[] $DetailName
     */
    protected $DetailName = null;

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
     * @param DetailNameCodeType[] $DetailName
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, array $DetailName = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->DetailName = $DetailName;
    }

    /**
     * @return DetailNameCodeType[]
     */
    public function getDetailName()
    {
      return $this->DetailName;
    }

    /**
     * @param DetailNameCodeType[] $DetailName
     * @return \EbayWsdl\GeteBayDetailsRequestType
     */
    public function setDetailName(array $DetailName)
    {
      $this->DetailName = $DetailName;
      return $this;
    }

}
