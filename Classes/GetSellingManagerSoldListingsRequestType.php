<?php

namespace EbayWsdl\Classes;

class GetSellingManagerSoldListingsRequestType extends AbstractRequestType
{

    /**
     * @var SellingManagerSearchType $Search
     */
    protected $Search = null;

    /**
     * @var int $StoreCategoryID
     */
    protected $StoreCategoryID = null;

    /**
     * @var SellingManagerSoldListingsPropertyTypeCodeType[] $Filter
     */
    protected $Filter = null;

    /**
     * @var boolean $Archived
     */
    protected $Archived = null;

    /**
     * @var SellingManagerSoldListingsSortTypeCodeType $Sort
     */
    protected $Sort = null;

    /**
     * @var SortOrderCodeType $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

    /**
     * @var TimeRangeType $SaleDateRange
     */
    protected $SaleDateRange = null;

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
     * @param SellingManagerSearchType $Search
     * @param int $StoreCategoryID
     * @param SellingManagerSoldListingsPropertyTypeCodeType[] $Filter
     * @param boolean $Archived
     * @param SellingManagerSoldListingsSortTypeCodeType $Sort
     * @param SortOrderCodeType $SortOrder
     * @param PaginationType $Pagination
     * @param TimeRangeType $SaleDateRange
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Search = null, $StoreCategoryID = null, array $Filter = null, $Archived = null, $Sort = null, $SortOrder = null, $Pagination = null, $SaleDateRange = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Search = $Search;
      $this->StoreCategoryID = $StoreCategoryID;
      $this->Filter = $Filter;
      $this->Archived = $Archived;
      $this->Sort = $Sort;
      $this->SortOrder = $SortOrder;
      $this->Pagination = $Pagination;
      $this->SaleDateRange = $SaleDateRange;
    }

    /**
     * @return SellingManagerSearchType
     */
    public function getSearch()
    {
      return $this->Search;
    }

    /**
     * @param SellingManagerSearchType $Search
     * @return \EbayWsdl\Classes\GetSellingManagerSoldListingsRequestType
     */
    public function setSearch($Search)
    {
      $this->Search = $Search;
      return $this;
    }

    /**
     * @return int
     */
    public function getStoreCategoryID()
    {
      return $this->StoreCategoryID;
    }

    /**
     * @param int $StoreCategoryID
     * @return \EbayWsdl\Classes\GetSellingManagerSoldListingsRequestType
     */
    public function setStoreCategoryID($StoreCategoryID)
    {
      $this->StoreCategoryID = $StoreCategoryID;
      return $this;
    }

    /**
     * @return SellingManagerSoldListingsPropertyTypeCodeType[]
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param SellingManagerSoldListingsPropertyTypeCodeType[] $Filter
     * @return \EbayWsdl\Classes\GetSellingManagerSoldListingsRequestType
     */
    public function setFilter(array $Filter)
    {
      $this->Filter = $Filter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getArchived()
    {
      return $this->Archived;
    }

    /**
     * @param boolean $Archived
     * @return \EbayWsdl\Classes\GetSellingManagerSoldListingsRequestType
     */
    public function setArchived($Archived)
    {
      $this->Archived = $Archived;
      return $this;
    }

    /**
     * @return SellingManagerSoldListingsSortTypeCodeType
     */
    public function getSort()
    {
      return $this->Sort;
    }

    /**
     * @param SellingManagerSoldListingsSortTypeCodeType $Sort
     * @return \EbayWsdl\Classes\GetSellingManagerSoldListingsRequestType
     */
    public function setSort($Sort)
    {
      $this->Sort = $Sort;
      return $this;
    }

    /**
     * @return SortOrderCodeType
     */
    public function getSortOrder()
    {
      return $this->SortOrder;
    }

    /**
     * @param SortOrderCodeType $SortOrder
     * @return \EbayWsdl\Classes\GetSellingManagerSoldListingsRequestType
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
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
     * @return \EbayWsdl\Classes\GetSellingManagerSoldListingsRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return TimeRangeType
     */
    public function getSaleDateRange()
    {
      return $this->SaleDateRange;
    }

    /**
     * @param TimeRangeType $SaleDateRange
     * @return \EbayWsdl\Classes\GetSellingManagerSoldListingsRequestType
     */
    public function setSaleDateRange($SaleDateRange)
    {
      $this->SaleDateRange = $SaleDateRange;
      return $this;
    }

}
