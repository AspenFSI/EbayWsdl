<?php

namespace EbayWsdl\Classes;

class MyeBayFavoriteSellerType
{

    /**
     * @var string $UserID
     */
    protected $UserID = null;

    /**
     * @var string $StoreName
     */
    protected $StoreName = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $UserID
     * @param string $StoreName
     * @param string $any
     */
    public function __construct($UserID = null, $StoreName = null, $any = null)
    {
      $this->UserID = $UserID;
      $this->StoreName = $StoreName;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param string $UserID
     * @return \EbayWsdl\Classes\MyeBayFavoriteSellerType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreName()
    {
      return $this->StoreName;
    }

    /**
     * @param string $StoreName
     * @return \EbayWsdl\Classes\MyeBayFavoriteSellerType
     */
    public function setStoreName($StoreName)
    {
      $this->StoreName = $StoreName;
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
     * @return \EbayWsdl\Classes\MyeBayFavoriteSellerType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
