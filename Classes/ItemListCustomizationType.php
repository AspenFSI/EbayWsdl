<?php

namespace EbayWsdl\Classes;

class ItemListCustomizationType
{

    /**
     * @var boolean $Include
     */
    protected $Include = null;

    /**
     * @var ListingTypeCodeType $ListingType
     */
    protected $ListingType = null;

    /**
     * @var ItemSortTypeCodeType $Sort
     */
    protected $Sort = null;

    /**
     * @var int $DurationInDays
     */
    protected $DurationInDays = null;

    /**
     * @var boolean $IncludeNotes
     */
    protected $IncludeNotes = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

    /**
     * @var OrderStatusFilterCodeType $OrderStatusFilter
     */
    protected $OrderStatusFilter = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $Include
     * @param ListingTypeCodeType $ListingType
     * @param ItemSortTypeCodeType $Sort
     * @param int $DurationInDays
     * @param boolean $IncludeNotes
     * @param PaginationType $Pagination
     * @param OrderStatusFilterCodeType $OrderStatusFilter
     * @param string $any
     */
    public function __construct($Include = null, $ListingType = null, $Sort = null, $DurationInDays = null, $IncludeNotes = null, $Pagination = null, $OrderStatusFilter = null, $any = null)
    {
      $this->Include = $Include;
      $this->ListingType = $ListingType;
      $this->Sort = $Sort;
      $this->DurationInDays = $DurationInDays;
      $this->IncludeNotes = $IncludeNotes;
      $this->Pagination = $Pagination;
      $this->OrderStatusFilter = $OrderStatusFilter;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getInclude()
    {
      return $this->Include;
    }

    /**
     * @param boolean $Include
     * @return \EbayWsdl\Classes\ItemListCustomizationType
     */
    public function setInclude($Include)
    {
      $this->Include = $Include;
      return $this;
    }

    /**
     * @return ListingTypeCodeType
     */
    public function getListingType()
    {
      return $this->ListingType;
    }

    /**
     * @param ListingTypeCodeType $ListingType
     * @return \EbayWsdl\Classes\ItemListCustomizationType
     */
    public function setListingType($ListingType)
    {
      $this->ListingType = $ListingType;
      return $this;
    }

    /**
     * @return ItemSortTypeCodeType
     */
    public function getSort()
    {
      return $this->Sort;
    }

    /**
     * @param ItemSortTypeCodeType $Sort
     * @return \EbayWsdl\Classes\ItemListCustomizationType
     */
    public function setSort($Sort)
    {
      $this->Sort = $Sort;
      return $this;
    }

    /**
     * @return int
     */
    public function getDurationInDays()
    {
      return $this->DurationInDays;
    }

    /**
     * @param int $DurationInDays
     * @return \EbayWsdl\Classes\ItemListCustomizationType
     */
    public function setDurationInDays($DurationInDays)
    {
      $this->DurationInDays = $DurationInDays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeNotes()
    {
      return $this->IncludeNotes;
    }

    /**
     * @param boolean $IncludeNotes
     * @return \EbayWsdl\Classes\ItemListCustomizationType
     */
    public function setIncludeNotes($IncludeNotes)
    {
      $this->IncludeNotes = $IncludeNotes;
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
     * @return \EbayWsdl\Classes\ItemListCustomizationType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return OrderStatusFilterCodeType
     */
    public function getOrderStatusFilter()
    {
      return $this->OrderStatusFilter;
    }

    /**
     * @param OrderStatusFilterCodeType $OrderStatusFilter
     * @return \EbayWsdl\Classes\ItemListCustomizationType
     */
    public function setOrderStatusFilter($OrderStatusFilter)
    {
      $this->OrderStatusFilter = $OrderStatusFilter;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \EbayWsdl\Classes\ItemListCustomizationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
