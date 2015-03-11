<?php

namespace EbayWsdl\Classes;

class BuyingSummaryType
{

    /**
     * @var int $BiddingCount
     */
    protected $BiddingCount = null;

    /**
     * @var int $WinningCount
     */
    protected $WinningCount = null;

    /**
     * @var AmountType $TotalWinningCost
     */
    protected $TotalWinningCost = null;

    /**
     * @var int $WonCount
     */
    protected $WonCount = null;

    /**
     * @var AmountType $TotalWonCost
     */
    protected $TotalWonCost = null;

    /**
     * @var int $WonDurationInDays
     */
    protected $WonDurationInDays = null;

    /**
     * @var int $BestOfferCount
     */
    protected $BestOfferCount = null;

    /**
     * @param int $BiddingCount
     * @param int $WinningCount
     * @param AmountType $TotalWinningCost
     * @param int $WonCount
     * @param AmountType $TotalWonCost
     * @param int $WonDurationInDays
     * @param int $BestOfferCount
     */
    public function __construct($BiddingCount = null, $WinningCount = null, $TotalWinningCost = null, $WonCount = null, $TotalWonCost = null, $WonDurationInDays = null, $BestOfferCount = null)
    {
      $this->BiddingCount = $BiddingCount;
      $this->WinningCount = $WinningCount;
      $this->TotalWinningCost = $TotalWinningCost;
      $this->WonCount = $WonCount;
      $this->TotalWonCost = $TotalWonCost;
      $this->WonDurationInDays = $WonDurationInDays;
      $this->BestOfferCount = $BestOfferCount;
    }

    /**
     * @return int
     */
    public function getBiddingCount()
    {
      return $this->BiddingCount;
    }

    /**
     * @param int $BiddingCount
     * @return \EbayWsdl\Classes\BuyingSummaryType
     */
    public function setBiddingCount($BiddingCount)
    {
      $this->BiddingCount = $BiddingCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getWinningCount()
    {
      return $this->WinningCount;
    }

    /**
     * @param int $WinningCount
     * @return \EbayWsdl\Classes\BuyingSummaryType
     */
    public function setWinningCount($WinningCount)
    {
      $this->WinningCount = $WinningCount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalWinningCost()
    {
      return $this->TotalWinningCost;
    }

    /**
     * @param AmountType $TotalWinningCost
     * @return \EbayWsdl\Classes\BuyingSummaryType
     */
    public function setTotalWinningCost($TotalWinningCost)
    {
      $this->TotalWinningCost = $TotalWinningCost;
      return $this;
    }

    /**
     * @return int
     */
    public function getWonCount()
    {
      return $this->WonCount;
    }

    /**
     * @param int $WonCount
     * @return \EbayWsdl\Classes\BuyingSummaryType
     */
    public function setWonCount($WonCount)
    {
      $this->WonCount = $WonCount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalWonCost()
    {
      return $this->TotalWonCost;
    }

    /**
     * @param AmountType $TotalWonCost
     * @return \EbayWsdl\Classes\BuyingSummaryType
     */
    public function setTotalWonCost($TotalWonCost)
    {
      $this->TotalWonCost = $TotalWonCost;
      return $this;
    }

    /**
     * @return int
     */
    public function getWonDurationInDays()
    {
      return $this->WonDurationInDays;
    }

    /**
     * @param int $WonDurationInDays
     * @return \EbayWsdl\Classes\BuyingSummaryType
     */
    public function setWonDurationInDays($WonDurationInDays)
    {
      $this->WonDurationInDays = $WonDurationInDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getBestOfferCount()
    {
      return $this->BestOfferCount;
    }

    /**
     * @param int $BestOfferCount
     * @return \EbayWsdl\Classes\BuyingSummaryType
     */
    public function setBestOfferCount($BestOfferCount)
    {
      $this->BestOfferCount = $BestOfferCount;
      return $this;
    }

}
