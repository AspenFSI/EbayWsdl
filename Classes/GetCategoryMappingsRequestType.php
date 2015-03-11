<?php

namespace EbayWsdl\Classes;

class GetCategoryMappingsRequestType extends AbstractRequestType
{

    /**
     * @var string $CategoryVersion
     */
    protected $CategoryVersion = null;

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
     * @param string $CategoryVersion
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $CategoryVersion = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->CategoryVersion = $CategoryVersion;
    }

    /**
     * @return string
     */
    public function getCategoryVersion()
    {
      return $this->CategoryVersion;
    }

    /**
     * @param string $CategoryVersion
     * @return \EbayWsdl\Classes\GetCategoryMappingsRequestType
     */
    public function setCategoryVersion($CategoryVersion)
    {
      $this->CategoryVersion = $CategoryVersion;
      return $this;
    }

}
