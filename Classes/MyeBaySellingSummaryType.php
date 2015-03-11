<?php

namespace EbayWsdl\Classes;

class MyeBaySellingSummaryType
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
     * @var int $ClassifiedAdCount
     */
    protected $ClassifiedAdCount = null;

    /**
     * @var int $TotalLeadCount
     */
    protected $TotalLeadCount = null;

    /**
     * @var int $ClassifiedAdOfferCount
     */
    protected $ClassifiedAdOfferCount = null;

    /**
     * @var int $TotalListingsWithLeads
     */
    protected $TotalListingsWithLeads = null;

    /**
     * @var int $QuantityLimitRemaining
     */
    protected $QuantityLimitRemaining = null;

    /**
     * @var AmountType $AmountLimitRemaining
     */
    protected $AmountLimitRemaining = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $ActiveAuctionCount
     * @param int $AuctionSellingCount
     * @param int $AuctionBidCount
     * @param AmountType $TotalAuctionSellingValue
     * @param int $TotalSoldCount
     * @param AmountType $TotalSoldValue
     * @param int $SoldDurationInDays
     * @param int $ClassifiedAdCount
     * @param int $TotalLeadCount
     * @param int $ClassifiedAdOfferCount
     * @param int $TotalListingsWithLeads
     * @param int $QuantityLimitRemaining
     * @param AmountType $AmountLimitRemaining
     * @param string $any
     */
    public function __construct($ActiveAuctionCount = null, $AuctionSellingCount = null, $AuctionBidCount = null, $TotalAuctionSellingValue = null, $TotalSoldCount = null, $TotalSoldValue = null, $SoldDurationInDays = null, $ClassifiedAdCount = null, $TotalLeadCount = null, $ClassifiedAdOfferCount = null, $TotalListingsWithLeads = null, $QuantityLimitRemaining = null, $AmountLimitRemaining = null, $any = null)
    {
      $this->ActiveAuctionCount = $ActiveAuctionCount;
      $this->AuctionSellingCount = $AuctionSellingCount;
      $this->AuctionBidCount = $AuctionBidCount;
      $this->TotalAuctionSellingValue = $TotalAuctionSellingValue;
      $this->TotalSoldCount = $TotalSoldCount;
      $this->TotalSoldValue = $TotalSoldValue;
      $this->SoldDurationInDays = $SoldDurationInDays;
      $this->ClassifiedAdCount = $ClassifiedAdCount;
      $this->TotalLeadCount = $TotalLeadCount;
      $this->ClassifiedAdOfferCount = $ClassifiedAdOfferCount;
      $this->TotalListingsWithLeads = $TotalListingsWithLeads;
      $this->QuantityLimitRemaining = $QuantityLimitRemaining;
      $this->AmountLimitRemaining = $AmountLimitRemaining;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
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
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
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
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
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
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
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
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
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
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
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
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
     */
    public function setSoldDurationInDays($SoldDurationInDays)
    {
      $this->SoldDurationInDays = $SoldDurationInDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getClassifiedAdCount()
    {
      return $this->ClassifiedAdCount;
    }

    /**
     * @param int $ClassifiedAdCount
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
     */
    public function setClassifiedAdCount($ClassifiedAdCount)
    {
      $this->ClassifiedAdCount = $ClassifiedAdCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalLeadCount()
    {
      return $this->TotalLeadCount;
    }

    /**
     * @param int $TotalLeadCount
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
     */
    public function setTotalLeadCount($TotalLeadCount)
    {
      $this->TotalLeadCount = $TotalLeadCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getClassifiedAdOfferCount()
    {
      return $this->ClassifiedAdOfferCount;
    }

    /**
     * @param int $ClassifiedAdOfferCount
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
     */
    public function setClassifiedAdOfferCount($ClassifiedAdOfferCount)
    {
      $this->ClassifiedAdOfferCount = $ClassifiedAdOfferCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalListingsWithLeads()
    {
      return $this->TotalListingsWithLeads;
    }

    /**
     * @param int $TotalListingsWithLeads
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
     */
    public function setTotalListingsWithLeads($TotalListingsWithLeads)
    {
      $this->TotalListingsWithLeads = $TotalListingsWithLeads;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityLimitRemaining()
    {
      return $this->QuantityLimitRemaining;
    }

    /**
     * @param int $QuantityLimitRemaining
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
     */
    public function setQuantityLimitRemaining($QuantityLimitRemaining)
    {
      $this->QuantityLimitRemaining = $QuantityLimitRemaining;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getAmountLimitRemaining()
    {
      return $this->AmountLimitRemaining;
    }

    /**
     * @param AmountType $AmountLimitRemaining
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
     */
    public function setAmountLimitRemaining($AmountLimitRemaining)
    {
      $this->AmountLimitRemaining = $AmountLimitRemaining;
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
     * @return \EbayWsdl\Classes\MyeBaySellingSummaryType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
