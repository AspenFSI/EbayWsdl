<?php

namespace EbayWsdl;

class GetSuggestedCategoriesRequestType extends AbstractRequestType
{

    /**
     * @var string $Query
     */
    protected $Query = null;

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
     * @param string $Query
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Query = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Query = $Query;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
      return $this->Query;
    }

    /**
     * @param string $Query
     * @return \EbayWsdl\GetSuggestedCategoriesRequestType
     */
    public function setQuery($Query)
    {
      $this->Query = $Query;
      return $this;
    }

}