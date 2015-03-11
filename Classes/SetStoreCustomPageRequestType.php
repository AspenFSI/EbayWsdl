<?php

namespace EbayWsdl\Classes;

class SetStoreCustomPageRequestType extends AbstractRequestType
{

    /**
     * @var StoreCustomPageType $CustomPage
     */
    protected $CustomPage = null;

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
     * @param StoreCustomPageType $CustomPage
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $CustomPage = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->CustomPage = $CustomPage;
    }

    /**
     * @return StoreCustomPageType
     */
    public function getCustomPage()
    {
      return $this->CustomPage;
    }

    /**
     * @param StoreCustomPageType $CustomPage
     * @return \EbayWsdl\Classes\SetStoreCustomPageRequestType
     */
    public function setCustomPage($CustomPage)
    {
      $this->CustomPage = $CustomPage;
      return $this;
    }

}
