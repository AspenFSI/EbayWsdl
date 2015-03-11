<?php

namespace EbayWsdl\Classes;

class GetStoreCustomPageRequestType extends AbstractRequestType
{

    /**
     * @var int $PageID
     */
    protected $PageID = null;

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
     * @param int $PageID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $PageID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->PageID = $PageID;
    }

    /**
     * @return int
     */
    public function getPageID()
    {
      return $this->PageID;
    }

    /**
     * @param int $PageID
     * @return \EbayWsdl\Classes\GetStoreCustomPageRequestType
     */
    public function setPageID($PageID)
    {
      $this->PageID = $PageID;
      return $this;
    }

}
