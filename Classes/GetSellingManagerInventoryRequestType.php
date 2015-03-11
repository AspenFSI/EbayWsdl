<?php

namespace EbayWsdl\Classes;

class GetSellingManagerInventoryRequestType extends AbstractRequestType
{

    /**
     * @var SellingManagerProductSortCodeType $Sort
     */
    protected $Sort = null;

    /**
     * @var int $FolderID
     */
    protected $FolderID = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

    /**
     * @var SortOrderCodeType $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @var SellingManagerSearchType $Search
     */
    protected $Search = null;

    /**
     * @var int $StoreCategoryID
     */
    protected $StoreCategoryID = null;

    /**
     * @var SellingManagerInventoryPropertyTypeCodeType[] $Filter
     */
    protected $Filter = null;

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
     * @param SellingManagerProductSortCodeType $Sort
     * @param int $FolderID
     * @param PaginationType $Pagination
     * @param SortOrderCodeType $SortOrder
     * @param SellingManagerSearchType $Search
     * @param int $StoreCategoryID
     * @param SellingManagerInventoryPropertyTypeCodeType[] $Filter
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Sort = null, $FolderID = null, $Pagination = null, $SortOrder = null, $Search = null, $StoreCategoryID = null, array $Filter = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Sort = $Sort;
      $this->FolderID = $FolderID;
      $this->Pagination = $Pagination;
      $this->SortOrder = $SortOrder;
      $this->Search = $Search;
      $this->StoreCategoryID = $StoreCategoryID;
      $this->Filter = $Filter;
    }

    /**
     * @return SellingManagerProductSortCodeType
     */
    public function getSort()
    {
      return $this->Sort;
    }

    /**
     * @param SellingManagerProductSortCodeType $Sort
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryRequestType
     */
    public function setSort($Sort)
    {
      $this->Sort = $Sort;
      return $this;
    }

    /**
     * @return int
     */
    public function getFolderID()
    {
      return $this->FolderID;
    }

    /**
     * @param int $FolderID
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryRequestType
     */
    public function setFolderID($FolderID)
    {
      $this->FolderID = $FolderID;
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
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
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
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryRequestType
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
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
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryRequestType
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
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryRequestType
     */
    public function setStoreCategoryID($StoreCategoryID)
    {
      $this->StoreCategoryID = $StoreCategoryID;
      return $this;
    }

    /**
     * @return SellingManagerInventoryPropertyTypeCodeType[]
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param SellingManagerInventoryPropertyTypeCodeType[] $Filter
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryRequestType
     */
    public function setFilter(array $Filter)
    {
      $this->Filter = $Filter;
      return $this;
    }

}
