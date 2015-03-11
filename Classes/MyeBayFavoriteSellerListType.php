<?php

namespace EbayWsdl\Classes;

class MyeBayFavoriteSellerListType
{

    /**
     * @var int $TotalAvailable
     */
    protected $TotalAvailable = null;

    /**
     * @var MyeBayFavoriteSellerType[] $FavoriteSeller
     */
    protected $FavoriteSeller = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $TotalAvailable
     * @param MyeBayFavoriteSellerType[] $FavoriteSeller
     * @param string $any
     */
    public function __construct($TotalAvailable = null, array $FavoriteSeller = null, $any = null)
    {
      $this->TotalAvailable = $TotalAvailable;
      $this->FavoriteSeller = $FavoriteSeller;
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
     * @return \EbayWsdl\Classes\MyeBayFavoriteSellerListType
     */
    public function setTotalAvailable($TotalAvailable)
    {
      $this->TotalAvailable = $TotalAvailable;
      return $this;
    }

    /**
     * @return MyeBayFavoriteSellerType[]
     */
    public function getFavoriteSeller()
    {
      return $this->FavoriteSeller;
    }

    /**
     * @param MyeBayFavoriteSellerType[] $FavoriteSeller
     * @return \EbayWsdl\Classes\MyeBayFavoriteSellerListType
     */
    public function setFavoriteSeller(array $FavoriteSeller)
    {
      $this->FavoriteSeller = $FavoriteSeller;
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
     * @return \EbayWsdl\Classes\MyeBayFavoriteSellerListType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
