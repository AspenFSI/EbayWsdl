<?php

namespace EbayWsdl;

class BiddingSummaryType
{

    /**
     * @var int $SummaryDays
     */
    protected $SummaryDays = null;

    /**
     * @var int $TotalBids
     */
    protected $TotalBids = null;

    /**
     * @var int $BidActivityWithSeller
     */
    protected $BidActivityWithSeller = null;

    /**
     * @var int $BidsToUniqueSellers
     */
    protected $BidsToUniqueSellers = null;

    /**
     * @var int $BidsToUniqueCategories
     */
    protected $BidsToUniqueCategories = null;

    /**
     * @var int $BidRetractions
     */
    protected $BidRetractions = null;

    /**
     * @var ItemBidDetailsType[] $ItemBidDetails
     */
    protected $ItemBidDetails = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $SummaryDays
     * @param int $TotalBids
     * @param int $BidActivityWithSeller
     * @param int $BidsToUniqueSellers
     * @param int $BidsToUniqueCategories
     * @param int $BidRetractions
     * @param ItemBidDetailsType[] $ItemBidDetails
     * @param string $any
     */
    public function __construct($SummaryDays = null, $TotalBids = null, $BidActivityWithSeller = null, $BidsToUniqueSellers = null, $BidsToUniqueCategories = null, $BidRetractions = null, array $ItemBidDetails = null, $any = null)
    {
      $this->SummaryDays = $SummaryDays;
      $this->TotalBids = $TotalBids;
      $this->BidActivityWithSeller = $BidActivityWithSeller;
      $this->BidsToUniqueSellers = $BidsToUniqueSellers;
      $this->BidsToUniqueCategories = $BidsToUniqueCategories;
      $this->BidRetractions = $BidRetractions;
      $this->ItemBidDetails = $ItemBidDetails;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getSummaryDays()
    {
      return $this->SummaryDays;
    }

    /**
     * @param int $SummaryDays
     * @return \EbayWsdl\BiddingSummaryType
     */
    public function setSummaryDays($SummaryDays)
    {
      $this->SummaryDays = $SummaryDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalBids()
    {
      return $this->TotalBids;
    }

    /**
     * @param int $TotalBids
     * @return \EbayWsdl\BiddingSummaryType
     */
    public function setTotalBids($TotalBids)
    {
      $this->TotalBids = $TotalBids;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidActivityWithSeller()
    {
      return $this->BidActivityWithSeller;
    }

    /**
     * @param int $BidActivityWithSeller
     * @return \EbayWsdl\BiddingSummaryType
     */
    public function setBidActivityWithSeller($BidActivityWithSeller)
    {
      $this->BidActivityWithSeller = $BidActivityWithSeller;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidsToUniqueSellers()
    {
      return $this->BidsToUniqueSellers;
    }

    /**
     * @param int $BidsToUniqueSellers
     * @return \EbayWsdl\BiddingSummaryType
     */
    public function setBidsToUniqueSellers($BidsToUniqueSellers)
    {
      $this->BidsToUniqueSellers = $BidsToUniqueSellers;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidsToUniqueCategories()
    {
      return $this->BidsToUniqueCategories;
    }

    /**
     * @param int $BidsToUniqueCategories
     * @return \EbayWsdl\BiddingSummaryType
     */
    public function setBidsToUniqueCategories($BidsToUniqueCategories)
    {
      $this->BidsToUniqueCategories = $BidsToUniqueCategories;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidRetractions()
    {
      return $this->BidRetractions;
    }

    /**
     * @param int $BidRetractions
     * @return \EbayWsdl\BiddingSummaryType
     */
    public function setBidRetractions($BidRetractions)
    {
      $this->BidRetractions = $BidRetractions;
      return $this;
    }

    /**
     * @return ItemBidDetailsType[]
     */
    public function getItemBidDetails()
    {
      return $this->ItemBidDetails;
    }

    /**
     * @param ItemBidDetailsType[] $ItemBidDetails
     * @return \EbayWsdl\BiddingSummaryType
     */
    public function setItemBidDetails(array $ItemBidDetails)
    {
      $this->ItemBidDetails = $ItemBidDetails;
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
     * @return \EbayWsdl\BiddingSummaryType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
