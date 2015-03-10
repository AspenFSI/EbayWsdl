<?php

namespace EbayWsdl;

class GetProductSearchResultsRequestType extends AbstractRequestType
{

    /**
     * @var ProductSearchType[] $ProductSearch
     */
    protected $ProductSearch = null;

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
     * @param ProductSearchType[] $ProductSearch
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, array $ProductSearch = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ProductSearch = $ProductSearch;
    }

    /**
     * @return ProductSearchType[]
     */
    public function getProductSearch()
    {
      return $this->ProductSearch;
    }

    /**
     * @param ProductSearchType[] $ProductSearch
     * @return \EbayWsdl\GetProductSearchResultsRequestType
     */
    public function setProductSearch(array $ProductSearch)
    {
      $this->ProductSearch = $ProductSearch;
      return $this;
    }

}
