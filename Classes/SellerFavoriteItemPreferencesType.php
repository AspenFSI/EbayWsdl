<?php

namespace EbayWsdl\Classes;

class SellerFavoriteItemPreferencesType
{

    /**
     * @var string $SearchKeywords
     */
    protected $SearchKeywords = null;

    /**
     * @var int $StoreCategoryID
     */
    protected $StoreCategoryID = null;

    /**
     * @var ListingTypeCodeType $ListingType
     */
    protected $ListingType = null;

    /**
     * @var StoreItemListSortOrderCodeType $SearchSortOrder
     */
    protected $SearchSortOrder = null;

    /**
     * @var AmountType $MinPrice
     */
    protected $MinPrice = null;

    /**
     * @var AmountType $MaxPrice
     */
    protected $MaxPrice = null;

    /**
     * @var ItemIDType[] $FavoriteItemID
     */
    protected $FavoriteItemID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $SearchKeywords
     * @param int $StoreCategoryID
     * @param ListingTypeCodeType $ListingType
     * @param StoreItemListSortOrderCodeType $SearchSortOrder
     * @param AmountType $MinPrice
     * @param AmountType $MaxPrice
     * @param ItemIDType[] $FavoriteItemID
     * @param string $any
     */
    public function __construct($SearchKeywords = null, $StoreCategoryID = null, $ListingType = null, $SearchSortOrder = null, $MinPrice = null, $MaxPrice = null, array $FavoriteItemID = null, $any = null)
    {
      $this->SearchKeywords = $SearchKeywords;
      $this->StoreCategoryID = $StoreCategoryID;
      $this->ListingType = $ListingType;
      $this->SearchSortOrder = $SearchSortOrder;
      $this->MinPrice = $MinPrice;
      $this->MaxPrice = $MaxPrice;
      $this->FavoriteItemID = $FavoriteItemID;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getSearchKeywords()
    {
      return $this->SearchKeywords;
    }

    /**
     * @param string $SearchKeywords
     * @return \EbayWsdl\Classes\SellerFavoriteItemPreferencesType
     */
    public function setSearchKeywords($SearchKeywords)
    {
      $this->SearchKeywords = $SearchKeywords;
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
     * @return \EbayWsdl\Classes\SellerFavoriteItemPreferencesType
     */
    public function setStoreCategoryID($StoreCategoryID)
    {
      $this->StoreCategoryID = $StoreCategoryID;
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
     * @return \EbayWsdl\Classes\SellerFavoriteItemPreferencesType
     */
    public function setListingType($ListingType)
    {
      $this->ListingType = $ListingType;
      return $this;
    }

    /**
     * @return StoreItemListSortOrderCodeType
     */
    public function getSearchSortOrder()
    {
      return $this->SearchSortOrder;
    }

    /**
     * @param StoreItemListSortOrderCodeType $SearchSortOrder
     * @return \EbayWsdl\Classes\SellerFavoriteItemPreferencesType
     */
    public function setSearchSortOrder($SearchSortOrder)
    {
      $this->SearchSortOrder = $SearchSortOrder;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMinPrice()
    {
      return $this->MinPrice;
    }

    /**
     * @param AmountType $MinPrice
     * @return \EbayWsdl\Classes\SellerFavoriteItemPreferencesType
     */
    public function setMinPrice($MinPrice)
    {
      $this->MinPrice = $MinPrice;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMaxPrice()
    {
      return $this->MaxPrice;
    }

    /**
     * @param AmountType $MaxPrice
     * @return \EbayWsdl\Classes\SellerFavoriteItemPreferencesType
     */
    public function setMaxPrice($MaxPrice)
    {
      $this->MaxPrice = $MaxPrice;
      return $this;
    }

    /**
     * @return ItemIDType[]
     */
    public function getFavoriteItemID()
    {
      return $this->FavoriteItemID;
    }

    /**
     * @param ItemIDType[] $FavoriteItemID
     * @return \EbayWsdl\Classes\SellerFavoriteItemPreferencesType
     */
    public function setFavoriteItemID(array $FavoriteItemID)
    {
      $this->FavoriteItemID = $FavoriteItemID;
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
     * @return \EbayWsdl\Classes\SellerFavoriteItemPreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
