<?php

namespace EbayWsdl;

class SearchDetailsType
{

    /**
     * @var boolean $BuyItNowEnabled
     */
    protected $BuyItNowEnabled = null;

    /**
     * @var boolean $Picture
     */
    protected $Picture = null;

    /**
     * @var boolean $RecentListing
     */
    protected $RecentListing = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $BuyItNowEnabled
     * @param boolean $Picture
     * @param boolean $RecentListing
     * @param string $any
     */
    public function __construct($BuyItNowEnabled = null, $Picture = null, $RecentListing = null, $any = null)
    {
      $this->BuyItNowEnabled = $BuyItNowEnabled;
      $this->Picture = $Picture;
      $this->RecentListing = $RecentListing;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getBuyItNowEnabled()
    {
      return $this->BuyItNowEnabled;
    }

    /**
     * @param boolean $BuyItNowEnabled
     * @return \EbayWsdl\SearchDetailsType
     */
    public function setBuyItNowEnabled($BuyItNowEnabled)
    {
      $this->BuyItNowEnabled = $BuyItNowEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPicture()
    {
      return $this->Picture;
    }

    /**
     * @param boolean $Picture
     * @return \EbayWsdl\SearchDetailsType
     */
    public function setPicture($Picture)
    {
      $this->Picture = $Picture;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRecentListing()
    {
      return $this->RecentListing;
    }

    /**
     * @param boolean $RecentListing
     * @return \EbayWsdl\SearchDetailsType
     */
    public function setRecentListing($RecentListing)
    {
      $this->RecentListing = $RecentListing;
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
     * @return \EbayWsdl\SearchDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
