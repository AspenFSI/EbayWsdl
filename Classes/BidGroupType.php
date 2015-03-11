<?php

namespace EbayWsdl\Classes;

class BidGroupType
{

    /**
     * @var BidGroupItemType[] $BidGroupItem
     */
    protected $BidGroupItem = null;

    /**
     * @var int $BidGroupID
     */
    protected $BidGroupID = null;

    /**
     * @var string $BidGroupName
     */
    protected $BidGroupName = null;

    /**
     * @var BidGroupStatusCodeType $BidGroupStatus
     */
    protected $BidGroupStatus = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param BidGroupItemType[] $BidGroupItem
     * @param int $BidGroupID
     * @param string $BidGroupName
     * @param BidGroupStatusCodeType $BidGroupStatus
     * @param string $any
     */
    public function __construct(array $BidGroupItem = null, $BidGroupID = null, $BidGroupName = null, $BidGroupStatus = null, $any = null)
    {
      $this->BidGroupItem = $BidGroupItem;
      $this->BidGroupID = $BidGroupID;
      $this->BidGroupName = $BidGroupName;
      $this->BidGroupStatus = $BidGroupStatus;
      $this->any = $any;
    }

    /**
     * @return BidGroupItemType[]
     */
    public function getBidGroupItem()
    {
      return $this->BidGroupItem;
    }

    /**
     * @param BidGroupItemType[] $BidGroupItem
     * @return \EbayWsdl\Classes\BidGroupType
     */
    public function setBidGroupItem(array $BidGroupItem)
    {
      $this->BidGroupItem = $BidGroupItem;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidGroupID()
    {
      return $this->BidGroupID;
    }

    /**
     * @param int $BidGroupID
     * @return \EbayWsdl\Classes\BidGroupType
     */
    public function setBidGroupID($BidGroupID)
    {
      $this->BidGroupID = $BidGroupID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBidGroupName()
    {
      return $this->BidGroupName;
    }

    /**
     * @param string $BidGroupName
     * @return \EbayWsdl\Classes\BidGroupType
     */
    public function setBidGroupName($BidGroupName)
    {
      $this->BidGroupName = $BidGroupName;
      return $this;
    }

    /**
     * @return BidGroupStatusCodeType
     */
    public function getBidGroupStatus()
    {
      return $this->BidGroupStatus;
    }

    /**
     * @param BidGroupStatusCodeType $BidGroupStatus
     * @return \EbayWsdl\Classes\BidGroupType
     */
    public function setBidGroupStatus($BidGroupStatus)
    {
      $this->BidGroupStatus = $BidGroupStatus;
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
     * @return \EbayWsdl\Classes\BidGroupType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
