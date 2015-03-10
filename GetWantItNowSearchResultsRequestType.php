<?php

namespace EbayWsdl;

class GetWantItNowSearchResultsRequestType extends AbstractRequestType
{

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var string $Query
     */
    protected $Query = null;

    /**
     * @var boolean $SearchInDescription
     */
    protected $SearchInDescription = null;

    /**
     * @var boolean $SearchWorldwide
     */
    protected $SearchWorldwide = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

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
     * @param string $CategoryID
     * @param string $Query
     * @param boolean $SearchInDescription
     * @param boolean $SearchWorldwide
     * @param PaginationType $Pagination
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $CategoryID = null, $Query = null, $SearchInDescription = null, $SearchWorldwide = null, $Pagination = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->CategoryID = $CategoryID;
      $this->Query = $Query;
      $this->SearchInDescription = $SearchInDescription;
      $this->SearchWorldwide = $SearchWorldwide;
      $this->Pagination = $Pagination;
    }

    /**
     * @return string
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param string $CategoryID
     * @return \EbayWsdl\GetWantItNowSearchResultsRequestType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
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
     * @return \EbayWsdl\GetWantItNowSearchResultsRequestType
     */
    public function setQuery($Query)
    {
      $this->Query = $Query;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchInDescription()
    {
      return $this->SearchInDescription;
    }

    /**
     * @param boolean $SearchInDescription
     * @return \EbayWsdl\GetWantItNowSearchResultsRequestType
     */
    public function setSearchInDescription($SearchInDescription)
    {
      $this->SearchInDescription = $SearchInDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchWorldwide()
    {
      return $this->SearchWorldwide;
    }

    /**
     * @param boolean $SearchWorldwide
     * @return \EbayWsdl\GetWantItNowSearchResultsRequestType
     */
    public function setSearchWorldwide($SearchWorldwide)
    {
      $this->SearchWorldwide = $SearchWorldwide;
      return $this;
    }

    /**
     * @return PaginationType
     */
    public function getPagination()
    {
      return $this->Pagination;
    }

    /**
     * @param PaginationType $Pagination
     * @return \EbayWsdl\GetWantItNowSearchResultsRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

}
