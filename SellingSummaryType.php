<?php

namespace EbayWsdl;

class SellingSummaryType
{

    /**
     * @var int $ActiveAuctionCount
     */
    protected $ActiveAuctionCount = null;

    /**
     * @var int $AuctionSellingCount
     */
    protected $AuctionSellingCount = null;

    /**
     * @var int $AuctionBidCount
     */
    protected $AuctionBidCount = null;

    /**
     * @var AmountType $TotalAuctionSellingValue
     */
    protected $TotalAuctionSellingValue = null;

    /**
     * @var int $TotalSoldCount
     */
    protected $TotalSoldCount = null;

    /**
     * @var AmountType $TotalSoldValue
     */
    protected $TotalSoldValue = null;

    /**
     * @var int $SoldDurationInDays
     */
    protected $SoldDurationInDays = null;

    /**
     * @param int $ActiveAuctionCount
     * @param int $AuctionSellingCount
     * @param int $AuctionBidCount
     * @param AmountType $TotalAuctionSellingValue
     * @param int $TotalSoldCount
     * @param AmountType $TotalSoldValue
     * @param int $SoldDurationInDays
     */
    public function __construct($ActiveAuctionCount = null, $AuctionSellingCount = null, $AuctionBidCount = null, $TotalAuctionSellingValue = null, $TotalSoldCount = null, $TotalSoldValue = null, $SoldDurationInDays = null)
    {
      $this->ActiveAuctionCount = $ActiveAuctionCount;
      $this->AuctionSellingCount = $AuctionSellingCount;
      $this->AuctionBidCount = $AuctionBidCount;
      $this->TotalAuctionSellingValue = $TotalAuctionSellingValue;
      $this->TotalSoldCount = $TotalSoldCount;
      $this->TotalSoldValue = $TotalSoldValue;
      $this->SoldDurationInDays = $SoldDurationInDays;
    }

    /**
     * @return int
     */
    public function getActiveAuctionCount()
    {
      return $this->ActiveAuctionCount;
    }

    /**
     * @param int $ActiveAuctionCount
     * @return \EbayWsdl\SellingSummaryType
     */
    public function setActiveAuctionCount($ActiveAuctionCount)
    {
      $this->ActiveAuctionCount = $ActiveAuctionCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAuctionSellingCount()
    {
      return $this->AuctionSellingCount;
    }

    /**
     * @param int $AuctionSellingCount
     * @return \EbayWsdl\SellingSummaryType
     */
    public function setAuctionSellingCount($AuctionSellingCount)
    {
      $this->AuctionSellingCount = $AuctionSellingCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAuctionBidCount()
    {
      return $this->AuctionBidCount;
    }

    /**
     * @param int $AuctionBidCount
     * @return \EbayWsdl\SellingSummaryType
     */
    public function setAuctionBidCount($AuctionBidCount)
    {
      $this->AuctionBidCount = $AuctionBidCount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalAuctionSellingValue()
    {
      return $this->TotalAuctionSellingValue;
    }

    /**
     * @param AmountType $TotalAuctionSellingValue
     * @return \EbayWsdl\SellingSummaryType
     */
    public function setTotalAuctionSellingValue($TotalAuctionSellingValue)
    {
      $this->TotalAuctionSellingValue = $TotalAuctionSellingValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalSoldCount()
    {
      return $this->TotalSoldCount;
    }

    /**
     * @param int $TotalSoldCount
     * @return \EbayWsdl\SellingSummaryType
     */
    public function setTotalSoldCount($TotalSoldCount)
    {
      $this->TotalSoldCount = $TotalSoldCount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalSoldValue()
    {
      return $this->TotalSoldValue;
    }

    /**
     * @param AmountType $TotalSoldValue
     * @return \EbayWsdl\SellingSummaryType
     */
    public function setTotalSoldValue($TotalSoldValue)
    {
      $this->TotalSoldValue = $TotalSoldValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getSoldDurationInDays()
    {
      return $this->SoldDurationInDays;
    }

    /**
     * @param int $SoldDurationInDays
     * @return \EbayWsdl\SellingSummaryType
     */
    public function setSoldDurationInDays($SoldDurationInDays)
    {
      $this->SoldDurationInDays = $SoldDurationInDays;
      return $this;
    }

}
