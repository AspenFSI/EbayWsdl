<?php

namespace EbayWsdl\Classes;

class BidGroupItemType
{

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

    /**
     * @var BidGroupItemStatusCodeType $BidGroupItemStatus
     */
    protected $BidGroupItemStatus = null;

    /**
     * @var AmountType $MaxBidAmount
     */
    protected $MaxBidAmount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemType $Item
     * @param BidGroupItemStatusCodeType $BidGroupItemStatus
     * @param AmountType $MaxBidAmount
     * @param string $any
     */
    public function __construct($Item = null, $BidGroupItemStatus = null, $MaxBidAmount = null, $any = null)
    {
      $this->Item = $Item;
      $this->BidGroupItemStatus = $BidGroupItemStatus;
      $this->MaxBidAmount = $MaxBidAmount;
      $this->any = $any;
    }

    /**
     * @return ItemType
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ItemType $Item
     * @return \EbayWsdl\Classes\BidGroupItemType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return BidGroupItemStatusCodeType
     */
    public function getBidGroupItemStatus()
    {
      return $this->BidGroupItemStatus;
    }

    /**
     * @param BidGroupItemStatusCodeType $BidGroupItemStatus
     * @return \EbayWsdl\Classes\BidGroupItemType
     */
    public function setBidGroupItemStatus($BidGroupItemStatus)
    {
      $this->BidGroupItemStatus = $BidGroupItemStatus;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMaxBidAmount()
    {
      return $this->MaxBidAmount;
    }

    /**
     * @param AmountType $MaxBidAmount
     * @return \EbayWsdl\Classes\BidGroupItemType
     */
    public function setMaxBidAmount($MaxBidAmount)
    {
      $this->MaxBidAmount = $MaxBidAmount;
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
     * @return \EbayWsdl\Classes\BidGroupItemType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
