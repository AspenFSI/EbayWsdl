<?php

namespace EbayWsdl\Classes;

class ItemBidDetailsType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var int $BidCount
     */
    protected $BidCount = null;

    /**
     * @var UserIDType $SellerID
     */
    protected $SellerID = null;

    /**
     * @var \DateTime $LastBidTime
     */
    protected $LastBidTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemIDType $ItemID
     * @param string $CategoryID
     * @param int $BidCount
     * @param UserIDType $SellerID
     * @param \DateTime $LastBidTime
     * @param string $any
     */
    public function __construct($ItemID = null, $CategoryID = null, $BidCount = null, $SellerID = null, \DateTime $LastBidTime = null, $any = null)
    {
      $this->ItemID = $ItemID;
      $this->CategoryID = $CategoryID;
      $this->BidCount = $BidCount;
      $this->SellerID = $SellerID;
      $this->LastBidTime = $LastBidTime ? $LastBidTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\Classes\ItemBidDetailsType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param string $CategoryID
     * @return \EbayWsdl\Classes\ItemBidDetailsType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
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
     * @return \EbayWsdl\Classes\ItemBidDetailsType
     */
    public function setBidCount($BidCount)
    {
      $this->BidCount = $BidCount;
      return $this;
    }

    /**
     * @return UserIDType
     */
    public function getSellerID()
    {
      return $this->SellerID;
    }

    /**
     * @param UserIDType $SellerID
     * @return \EbayWsdl\Classes\ItemBidDetailsType
     */
    public function setSellerID($SellerID)
    {
      $this->SellerID = $SellerID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastBidTime()
    {
      if ($this->LastBidTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastBidTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastBidTime
     * @return \EbayWsdl\Classes\ItemBidDetailsType
     */
    public function setLastBidTime(\DateTime $LastBidTime)
    {
      $this->LastBidTime = $LastBidTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\ItemBidDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
