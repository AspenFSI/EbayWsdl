<?php

namespace EbayWsdl;

class OfferType
{

    /**
     * @var BidActionCodeType $Action
     */
    protected $Action = null;

    /**
     * @var CurrencyCodeType $Currency
     */
    protected $Currency = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var AmountType $MaxBid
     */
    protected $MaxBid = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var boolean $SecondChanceEnabled
     */
    protected $SecondChanceEnabled = null;

    /**
     * @var CurrencyCodeType $SiteCurrency
     */
    protected $SiteCurrency = null;

    /**
     * @var \DateTime $TimeBid
     */
    protected $TimeBid = null;

    /**
     * @var AmountType $HighestBid
     */
    protected $HighestBid = null;

    /**
     * @var AmountType $ConvertedPrice
     */
    protected $ConvertedPrice = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var UserType $User
     */
    protected $User = null;

    /**
     * @var boolean $UserConsent
     */
    protected $UserConsent = null;

    /**
     * @var int $BidCount
     */
    protected $BidCount = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var BestOfferIDType $BestOfferID
     */
    protected $BestOfferID = null;

    /**
     * @var AmountType $MyMaxBid
     */
    protected $MyMaxBid = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param BidActionCodeType $Action
     * @param CurrencyCodeType $Currency
     * @param ItemIDType $ItemID
     * @param AmountType $MaxBid
     * @param int $Quantity
     * @param boolean $SecondChanceEnabled
     * @param CurrencyCodeType $SiteCurrency
     * @param \DateTime $TimeBid
     * @param AmountType $HighestBid
     * @param AmountType $ConvertedPrice
     * @param string $TransactionID
     * @param UserType $User
     * @param boolean $UserConsent
     * @param int $BidCount
     * @param string $Message
     * @param BestOfferIDType $BestOfferID
     * @param AmountType $MyMaxBid
     * @param string $any
     */
    public function __construct($Action = null, $Currency = null, $ItemID = null, $MaxBid = null, $Quantity = null, $SecondChanceEnabled = null, $SiteCurrency = null, \DateTime $TimeBid = null, $HighestBid = null, $ConvertedPrice = null, $TransactionID = null, $User = null, $UserConsent = null, $BidCount = null, $Message = null, $BestOfferID = null, $MyMaxBid = null, $any = null)
    {
      $this->Action = $Action;
      $this->Currency = $Currency;
      $this->ItemID = $ItemID;
      $this->MaxBid = $MaxBid;
      $this->Quantity = $Quantity;
      $this->SecondChanceEnabled = $SecondChanceEnabled;
      $this->SiteCurrency = $SiteCurrency;
      $this->TimeBid = $TimeBid ? $TimeBid->format(\DateTime::ATOM) : null;
      $this->HighestBid = $HighestBid;
      $this->ConvertedPrice = $ConvertedPrice;
      $this->TransactionID = $TransactionID;
      $this->User = $User;
      $this->UserConsent = $UserConsent;
      $this->BidCount = $BidCount;
      $this->Message = $Message;
      $this->BestOfferID = $BestOfferID;
      $this->MyMaxBid = $MyMaxBid;
      $this->any = $any;
    }

    /**
     * @return BidActionCodeType
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param BidActionCodeType $Action
     * @return \EbayWsdl\OfferType
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param CurrencyCodeType $Currency
     * @return \EbayWsdl\OfferType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
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
     * @return \EbayWsdl\OfferType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMaxBid()
    {
      return $this->MaxBid;
    }

    /**
     * @param AmountType $MaxBid
     * @return \EbayWsdl\OfferType
     */
    public function setMaxBid($MaxBid)
    {
      $this->MaxBid = $MaxBid;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \EbayWsdl\OfferType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSecondChanceEnabled()
    {
      return $this->SecondChanceEnabled;
    }

    /**
     * @param boolean $SecondChanceEnabled
     * @return \EbayWsdl\OfferType
     */
    public function setSecondChanceEnabled($SecondChanceEnabled)
    {
      $this->SecondChanceEnabled = $SecondChanceEnabled;
      return $this;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getSiteCurrency()
    {
      return $this->SiteCurrency;
    }

    /**
     * @param CurrencyCodeType $SiteCurrency
     * @return \EbayWsdl\OfferType
     */
    public function setSiteCurrency($SiteCurrency)
    {
      $this->SiteCurrency = $SiteCurrency;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeBid()
    {
      if ($this->TimeBid == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeBid);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeBid
     * @return \EbayWsdl\OfferType
     */
    public function setTimeBid(\DateTime $TimeBid)
    {
      $this->TimeBid = $TimeBid->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getHighestBid()
    {
      return $this->HighestBid;
    }

    /**
     * @param AmountType $HighestBid
     * @return \EbayWsdl\OfferType
     */
    public function setHighestBid($HighestBid)
    {
      $this->HighestBid = $HighestBid;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getConvertedPrice()
    {
      return $this->ConvertedPrice;
    }

    /**
     * @param AmountType $ConvertedPrice
     * @return \EbayWsdl\OfferType
     */
    public function setConvertedPrice($ConvertedPrice)
    {
      $this->ConvertedPrice = $ConvertedPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
      return $this->TransactionID;
    }

    /**
     * @param string $TransactionID
     * @return \EbayWsdl\OfferType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return UserType
     */
    public function getUser()
    {
      return $this->User;
    }

    /**
     * @param UserType $User
     * @return \EbayWsdl\OfferType
     */
    public function setUser($User)
    {
      $this->User = $User;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUserConsent()
    {
      return $this->UserConsent;
    }

    /**
     * @param boolean $UserConsent
     * @return \EbayWsdl\OfferType
     */
    public function setUserConsent($UserConsent)
    {
      $this->UserConsent = $UserConsent;
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
     * @return \EbayWsdl\OfferType
     */
    public function setBidCount($BidCount)
    {
      $this->BidCount = $BidCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \EbayWsdl\OfferType
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return BestOfferIDType
     */
    public function getBestOfferID()
    {
      return $this->BestOfferID;
    }

    /**
     * @param BestOfferIDType $BestOfferID
     * @return \EbayWsdl\OfferType
     */
    public function setBestOfferID($BestOfferID)
    {
      $this->BestOfferID = $BestOfferID;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMyMaxBid()
    {
      return $this->MyMaxBid;
    }

    /**
     * @param AmountType $MyMaxBid
     * @return \EbayWsdl\OfferType
     */
    public function setMyMaxBid($MyMaxBid)
    {
      $this->MyMaxBid = $MyMaxBid;
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
     * @return \EbayWsdl\OfferType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
