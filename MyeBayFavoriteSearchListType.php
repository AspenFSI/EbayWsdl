<?php

namespace EbayWsdl;

class MyeBayFavoriteSearchListType
{

    /**
     * @var int $TotalAvailable
     */
    protected $TotalAvailable = null;

    /**
     * @var MyeBayFavoriteSearchType[] $FavoriteSearch
     */
    protected $FavoriteSearch = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $TotalAvailable
     * @param MyeBayFavoriteSearchType[] $FavoriteSearch
     * @param string $any
     */
    public function __construct($TotalAvailable = null, array $FavoriteSearch = null, $any = null)
    {
      $this->TotalAvailable = $TotalAvailable;
      $this->FavoriteSearch = $FavoriteSearch;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getTotalAvailable()
    {
      return $this->TotalAvailable;
    }

    /**
     * @param int $TotalAvailable
     * @return \EbayWsdl\MyeBayFavoriteSearchListType
     */
    public function setTotalAvailable($TotalAvailable)
    {
      $this->TotalAvailable = $TotalAvailable;
      return $this;
    }

    /**
     * @return MyeBayFavoriteSearchType[]
     */
    public function getFavoriteSearch()
    {
      return $this->FavoriteSearch;
    }

    /**
     * @param MyeBayFavoriteSearchType[] $FavoriteSearch
     * @return \EbayWsdl\MyeBayFavoriteSearchListType
     */
    public function setFavoriteSearch(array $FavoriteSearch)
    {
      $this->FavoriteSearch = $FavoriteSearch;
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
     * @return \EbayWsdl\MyeBayFavoriteSearchListType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
