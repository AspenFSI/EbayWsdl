<?php

namespace EbayWsdl\Classes;

class SellingManagerAutoListMinActiveItemsType
{

    /**
     * @var int $MinActiveItemCount
     */
    protected $MinActiveItemCount = null;

    /**
     * @var time $ListTimeFrom
     */
    protected $ListTimeFrom = null;

    /**
     * @var time $ListTimeTo
     */
    protected $ListTimeTo = null;

    /**
     * @var int $SpacingIntervalInMinutes
     */
    protected $SpacingIntervalInMinutes = null;

    /**
     * @var int $ListingHoldInventoryLevel
     */
    protected $ListingHoldInventoryLevel = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $MinActiveItemCount
     * @param time $ListTimeFrom
     * @param time $ListTimeTo
     * @param int $SpacingIntervalInMinutes
     * @param int $ListingHoldInventoryLevel
     * @param string $any
     */
    public function __construct($MinActiveItemCount = null, $ListTimeFrom = null, $ListTimeTo = null, $SpacingIntervalInMinutes = null, $ListingHoldInventoryLevel = null, $any = null)
    {
      $this->MinActiveItemCount = $MinActiveItemCount;
      $this->ListTimeFrom = $ListTimeFrom;
      $this->ListTimeTo = $ListTimeTo;
      $this->SpacingIntervalInMinutes = $SpacingIntervalInMinutes;
      $this->ListingHoldInventoryLevel = $ListingHoldInventoryLevel;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getMinActiveItemCount()
    {
      return $this->MinActiveItemCount;
    }

    /**
     * @param int $MinActiveItemCount
     * @return \EbayWsdl\Classes\SellingManagerAutoListMinActiveItemsType
     */
    public function setMinActiveItemCount($MinActiveItemCount)
    {
      $this->MinActiveItemCount = $MinActiveItemCount;
      return $this;
    }

    /**
     * @return time
     */
    public function getListTimeFrom()
    {
      return $this->ListTimeFrom;
    }

    /**
     * @param time $ListTimeFrom
     * @return \EbayWsdl\Classes\SellingManagerAutoListMinActiveItemsType
     */
    public function setListTimeFrom($ListTimeFrom)
    {
      $this->ListTimeFrom = $ListTimeFrom;
      return $this;
    }

    /**
     * @return time
     */
    public function getListTimeTo()
    {
      return $this->ListTimeTo;
    }

    /**
     * @param time $ListTimeTo
     * @return \EbayWsdl\Classes\SellingManagerAutoListMinActiveItemsType
     */
    public function setListTimeTo($ListTimeTo)
    {
      $this->ListTimeTo = $ListTimeTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getSpacingIntervalInMinutes()
    {
      return $this->SpacingIntervalInMinutes;
    }

    /**
     * @param int $SpacingIntervalInMinutes
     * @return \EbayWsdl\Classes\SellingManagerAutoListMinActiveItemsType
     */
    public function setSpacingIntervalInMinutes($SpacingIntervalInMinutes)
    {
      $this->SpacingIntervalInMinutes = $SpacingIntervalInMinutes;
      return $this;
    }

    /**
     * @return int
     */
    public function getListingHoldInventoryLevel()
    {
      return $this->ListingHoldInventoryLevel;
    }

    /**
     * @param int $ListingHoldInventoryLevel
     * @return \EbayWsdl\Classes\SellingManagerAutoListMinActiveItemsType
     */
    public function setListingHoldInventoryLevel($ListingHoldInventoryLevel)
    {
      $this->ListingHoldInventoryLevel = $ListingHoldInventoryLevel;
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
     * @return \EbayWsdl\Classes\SellingManagerAutoListMinActiveItemsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
