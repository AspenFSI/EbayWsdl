<?php

namespace EbayWsdl;

class SellingStatusType
{

    /**
     * @var int $BidCount
     */
    protected $BidCount = null;

    /**
     * @var AmountType $BidIncrement
     */
    protected $BidIncrement = null;

    /**
     * @var AmountType $ConvertedCurrentPrice
     */
    protected $ConvertedCurrentPrice = null;

    /**
     * @var AmountType $CurrentPrice
     */
    protected $CurrentPrice = null;

    /**
     * @var UserType $HighBidder
     */
    protected $HighBidder = null;

    /**
     * @var int $LeadCount
     */
    protected $LeadCount = null;

    /**
     * @var AmountType $MinimumToBid
     */
    protected $MinimumToBid = null;

    /**
     * @var int $QuantitySold
     */
    protected $QuantitySold = null;

    /**
     * @var boolean $ReserveMet
     */
    protected $ReserveMet = null;

    /**
     * @var boolean $SecondChanceEligible
     */
    protected $SecondChanceEligible = null;

    /**
     * @var int $BidderCount
     */
    protected $BidderCount = null;

    /**
     * @var ListingStatusCodeType $ListingStatus
     */
    protected $ListingStatus = null;

    /**
     * @var AmountType $FinalValueFee
     */
    protected $FinalValueFee = null;

    /**
     * @var PromotionalSaleDetailsType $PromotionalSaleDetails
     */
    protected $PromotionalSaleDetails = null;

    /**
     * @var boolean $AdminEnded
     */
    protected $AdminEnded = null;

    /**
     * @var boolean $SoldAsBin
     */
    protected $SoldAsBin = null;

    /**
     * @var int $QuantitySoldByPickupInStore
     */
    protected $QuantitySoldByPickupInStore = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $BidCount
     * @param AmountType $BidIncrement
     * @param AmountType $ConvertedCurrentPrice
     * @param AmountType $CurrentPrice
     * @param UserType $HighBidder
     * @param int $LeadCount
     * @param AmountType $MinimumToBid
     * @param int $QuantitySold
     * @param boolean $ReserveMet
     * @param boolean $SecondChanceEligible
     * @param int $BidderCount
     * @param ListingStatusCodeType $ListingStatus
     * @param AmountType $FinalValueFee
     * @param PromotionalSaleDetailsType $PromotionalSaleDetails
     * @param boolean $AdminEnded
     * @param boolean $SoldAsBin
     * @param int $QuantitySoldByPickupInStore
     * @param string $any
     */
    public function __construct($BidCount = null, $BidIncrement = null, $ConvertedCurrentPrice = null, $CurrentPrice = null, $HighBidder = null, $LeadCount = null, $MinimumToBid = null, $QuantitySold = null, $ReserveMet = null, $SecondChanceEligible = null, $BidderCount = null, $ListingStatus = null, $FinalValueFee = null, $PromotionalSaleDetails = null, $AdminEnded = null, $SoldAsBin = null, $QuantitySoldByPickupInStore = null, $any = null)
    {
      $this->BidCount = $BidCount;
      $this->BidIncrement = $BidIncrement;
      $this->ConvertedCurrentPrice = $ConvertedCurrentPrice;
      $this->CurrentPrice = $CurrentPrice;
      $this->HighBidder = $HighBidder;
      $this->LeadCount = $LeadCount;
      $this->MinimumToBid = $MinimumToBid;
      $this->QuantitySold = $QuantitySold;
      $this->ReserveMet = $ReserveMet;
      $this->SecondChanceEligible = $SecondChanceEligible;
      $this->BidderCount = $BidderCount;
      $this->ListingStatus = $ListingStatus;
      $this->FinalValueFee = $FinalValueFee;
      $this->PromotionalSaleDetails = $PromotionalSaleDetails;
      $this->AdminEnded = $AdminEnded;
      $this->SoldAsBin = $SoldAsBin;
      $this->QuantitySoldByPickupInStore = $QuantitySoldByPickupInStore;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getBidCount()
    {
      return $this->BidCount;
    }

    /**
     * @param int $BidCount
     * @return \EbayWsdl\SellingStatusType
     */
    public function setBidCount($BidCount)
    {
      $this->BidCount = $BidCount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getBidIncrement()
    {
      return $this->BidIncrement;
    }

    /**
     * @param AmountType $BidIncrement
     * @return \EbayWsdl\SellingStatusType
     */
    public function setBidIncrement($BidIncrement)
    {
      $this->BidIncrement = $BidIncrement;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getConvertedCurrentPrice()
    {
      return $this->ConvertedCurrentPrice;
    }

    /**
     * @param AmountType $ConvertedCurrentPrice
     * @return \EbayWsdl\SellingStatusType
     */
    public function setConvertedCurrentPrice($ConvertedCurrentPrice)
    {
      $this->ConvertedCurrentPrice = $ConvertedCurrentPrice;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getCurrentPrice()
    {
      return $this->CurrentPrice;
    }

    /**
     * @param AmountType $CurrentPrice
     * @return \EbayWsdl\SellingStatusType
     */
    public function setCurrentPrice($CurrentPrice)
    {
      $this->CurrentPrice = $CurrentPrice;
      return $this;
    }

    /**
     * @return UserType
     */
    public function getHighBidder()
    {
      return $this->HighBidder;
    }

    /**
     * @param UserType $HighBidder
     * @return \EbayWsdl\SellingStatusType
     */
    public function setHighBidder($HighBidder)
    {
      $this->HighBidder = $HighBidder;
      return $this;
    }

    /**
     * @return int
     */
    public function getLeadCount()
    {
      return $this->LeadCount;
    }

    /**
     * @param int $LeadCount
     * @return \EbayWsdl\SellingStatusType
     */
    public function setLeadCount($LeadCount)
    {
      $this->LeadCount = $LeadCount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMinimumToBid()
    {
      return $this->MinimumToBid;
    }

    /**
     * @param AmountType $MinimumToBid
     * @return \EbayWsdl\SellingStatusType
     */
    public function setMinimumToBid($MinimumToBid)
    {
      $this->MinimumToBid = $MinimumToBid;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantitySold()
    {
      return $this->QuantitySold;
    }

    /**
     * @param int $QuantitySold
     * @return \EbayWsdl\SellingStatusType
     */
    public function setQuantitySold($QuantitySold)
    {
      $this->QuantitySold = $QuantitySold;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReserveMet()
    {
      return $this->ReserveMet;
    }

    /**
     * @param boolean $ReserveMet
     * @return \EbayWsdl\SellingStatusType
     */
    public function setReserveMet($ReserveMet)
    {
      $this->ReserveMet = $ReserveMet;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSecondChanceEligible()
    {
      return $this->SecondChanceEligible;
    }

    /**
     * @param boolean $SecondChanceEligible
     * @return \EbayWsdl\SellingStatusType
     */
    public function setSecondChanceEligible($SecondChanceEligible)
    {
      $this->SecondChanceEligible = $SecondChanceEligible;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidderCount()
    {
      return $this->BidderCount;
    }

    /**
     * @param int $BidderCount
     * @return \EbayWsdl\SellingStatusType
     */
    public function setBidderCount($BidderCount)
    {
      $this->BidderCount = $BidderCount;
      return $this;
    }

    /**
     * @return ListingStatusCodeType
     */
    public function getListingStatus()
    {
      return $this->ListingStatus;
    }

    /**
     * @param ListingStatusCodeType $ListingStatus
     * @return \EbayWsdl\SellingStatusType
     */
    public function setListingStatus($ListingStatus)
    {
      $this->ListingStatus = $ListingStatus;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getFinalValueFee()
    {
      return $this->FinalValueFee;
    }

    /**
     * @param AmountType $FinalValueFee
     * @return \EbayWsdl\SellingStatusType
     */
    public function setFinalValueFee($FinalValueFee)
    {
      $this->FinalValueFee = $FinalValueFee;
      return $this;
    }

    /**
     * @return PromotionalSaleDetailsType
     */
    public function getPromotionalSaleDetails()
    {
      return $this->PromotionalSaleDetails;
    }

    /**
     * @param PromotionalSaleDetailsType $PromotionalSaleDetails
     * @return \EbayWsdl\SellingStatusType
     */
    public function setPromotionalSaleDetails($PromotionalSaleDetails)
    {
      $this->PromotionalSaleDetails = $PromotionalSaleDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdminEnded()
    {
      return $this->AdminEnded;
    }

    /**
     * @param boolean $AdminEnded
     * @return \EbayWsdl\SellingStatusType
     */
    public function setAdminEnded($AdminEnded)
    {
      $this->AdminEnded = $AdminEnded;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSoldAsBin()
    {
      return $this->SoldAsBin;
    }

    /**
     * @param boolean $SoldAsBin
     * @return \EbayWsdl\SellingStatusType
     */
    public function setSoldAsBin($SoldAsBin)
    {
      $this->SoldAsBin = $SoldAsBin;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantitySoldByPickupInStore()
    {
      return $this->QuantitySoldByPickupInStore;
    }

    /**
     * @param int $QuantitySoldByPickupInStore
     * @return \EbayWsdl\SellingStatusType
     */
    public function setQuantitySoldByPickupInStore($QuantitySoldByPickupInStore)
    {
      $this->QuantitySoldByPickupInStore = $QuantitySoldByPickupInStore;
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
     * @return \EbayWsdl\SellingStatusType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
