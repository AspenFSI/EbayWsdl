<?php

namespace EbayWsdl\Classes;

class UserDefinedListType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $ItemCount
     */
    protected $ItemCount = null;

    /**
     * @var int $FavoriteSellerCount
     */
    protected $FavoriteSellerCount = null;

    /**
     * @var ItemArrayType $ItemArray
     */
    protected $ItemArray = null;

    /**
     * @var MyeBayFavoriteSearchListType $FavoriteSearches
     */
    protected $FavoriteSearches = null;

    /**
     * @var MyeBayFavoriteSellerListType $FavoriteSellers
     */
    protected $FavoriteSellers = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Name
     * @param int $ItemCount
     * @param int $FavoriteSellerCount
     * @param ItemArrayType $ItemArray
     * @param MyeBayFavoriteSearchListType $FavoriteSearches
     * @param MyeBayFavoriteSellerListType $FavoriteSellers
     * @param string $any
     */
    public function __construct($Name = null, $ItemCount = null, $FavoriteSellerCount = null, $ItemArray = null, $FavoriteSearches = null, $FavoriteSellers = null, $any = null)
    {
      $this->Name = $Name;
      $this->ItemCount = $ItemCount;
      $this->FavoriteSellerCount = $FavoriteSellerCount;
      $this->ItemArray = $ItemArray;
      $this->FavoriteSearches = $FavoriteSearches;
      $this->FavoriteSellers = $FavoriteSellers;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \EbayWsdl\Classes\UserDefinedListType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemCount()
    {
      return $this->ItemCount;
    }

    /**
     * @param int $ItemCount
     * @return \EbayWsdl\Classes\UserDefinedListType
     */
    public function setItemCount($ItemCount)
    {
      $this->ItemCount = $ItemCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getFavoriteSellerCount()
    {
      return $this->FavoriteSellerCount;
    }

    /**
     * @param int $FavoriteSellerCount
     * @return \EbayWsdl\Classes\UserDefinedListType
     */
    public function setFavoriteSellerCount($FavoriteSellerCount)
    {
      $this->FavoriteSellerCount = $FavoriteSellerCount;
      return $this;
    }

    /**
     * @return ItemArrayType
     */
    public function getItemArray()
    {
      return $this->ItemArray;
    }

    /**
     * @param ItemArrayType $ItemArray
     * @return \EbayWsdl\Classes\UserDefinedListType
     */
    public function setItemArray($ItemArray)
    {
      $this->ItemArray = $ItemArray;
      return $this;
    }

    /**
     * @return MyeBayFavoriteSearchListType
     */
    public function getFavoriteSearches()
    {
      return $this->FavoriteSearches;
    }

    /**
     * @param MyeBayFavoriteSearchListType $FavoriteSearches
     * @return \EbayWsdl\Classes\UserDefinedListType
     */
    public function setFavoriteSearches($FavoriteSearches)
    {
      $this->FavoriteSearches = $FavoriteSearches;
      return $this;
    }

    /**
     * @return MyeBayFavoriteSellerListType
     */
    public function getFavoriteSellers()
    {
      return $this->FavoriteSellers;
    }

    /**
     * @param MyeBayFavoriteSellerListType $FavoriteSellers
     * @return \EbayWsdl\Classes\UserDefinedListType
     */
    public function setFavoriteSellers($FavoriteSellers)
    {
      $this->FavoriteSellers = $FavoriteSellers;
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
     * @return \EbayWsdl\Classes\UserDefinedListType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
