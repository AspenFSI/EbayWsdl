<?php

namespace EbayWsdl;

class BestOfferType
{

    /**
     * @var BestOfferIDType $BestOfferID
     */
    protected $BestOfferID = null;

    /**
     * @var \DateTime $ExpirationTime
     */
    protected $ExpirationTime = null;

    /**
     * @var UserType $Buyer
     */
    protected $Buyer = null;

    /**
     * @var AmountType $Price
     */
    protected $Price = null;

    /**
     * @var BestOfferStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $BuyerMessage
     */
    protected $BuyerMessage = null;

    /**
     * @var string $SellerMessage
     */
    protected $SellerMessage = null;

    /**
     * @var BestOfferTypeCodeType $BestOfferCodeType
     */
    protected $BestOfferCodeType = null;

    /**
     * @var string $CallStatus
     */
    protected $CallStatus = null;

    /**
     * @var boolean $NewBestOffer
     */
    protected $NewBestOffer = null;

    /**
     * @var boolean $ImmediatePayEligible
     */
    protected $ImmediatePayEligible = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param BestOfferIDType $BestOfferID
     * @param \DateTime $ExpirationTime
     * @param UserType $Buyer
     * @param AmountType $Price
     * @param BestOfferStatusCodeType $Status
     * @param int $Quantity
     * @param string $BuyerMessage
     * @param string $SellerMessage
     * @param BestOfferTypeCodeType $BestOfferCodeType
     * @param string $CallStatus
     * @param boolean $NewBestOffer
     * @param boolean $ImmediatePayEligible
     * @param string $any
     */
    public function __construct($BestOfferID = null, \DateTime $ExpirationTime = null, $Buyer = null, $Price = null, $Status = null, $Quantity = null, $BuyerMessage = null, $SellerMessage = null, $BestOfferCodeType = null, $CallStatus = null, $NewBestOffer = null, $ImmediatePayEligible = null, $any = null)
    {
      $this->BestOfferID = $BestOfferID;
      $this->ExpirationTime = $ExpirationTime ? $ExpirationTime->format(\DateTime::ATOM) : null;
      $this->Buyer = $Buyer;
      $this->Price = $Price;
      $this->Status = $Status;
      $this->Quantity = $Quantity;
      $this->BuyerMessage = $BuyerMessage;
      $this->SellerMessage = $SellerMessage;
      $this->BestOfferCodeType = $BestOfferCodeType;
      $this->CallStatus = $CallStatus;
      $this->NewBestOffer = $NewBestOffer;
      $this->ImmediatePayEligible = $ImmediatePayEligible;
      $this->any = $any;
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
     * @return \EbayWsdl\BestOfferType
     */
    public function setBestOfferID($BestOfferID)
    {
      $this->BestOfferID = $BestOfferID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationTime()
    {
      if ($this->ExpirationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationTime
     * @return \EbayWsdl\BestOfferType
     */
    public function setExpirationTime(\DateTime $ExpirationTime)
    {
      $this->ExpirationTime = $ExpirationTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return UserType
     */
    public function getBuyer()
    {
      return $this->Buyer;
    }

    /**
     * @param UserType $Buyer
     * @return \EbayWsdl\BestOfferType
     */
    public function setBuyer($Buyer)
    {
      $this->Buyer = $Buyer;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param AmountType $Price
     * @return \EbayWsdl\BestOfferType
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return BestOfferStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param BestOfferStatusCodeType $Status
     * @return \EbayWsdl\BestOfferType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \EbayWsdl\BestOfferType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerMessage()
    {
      return $this->BuyerMessage;
    }

    /**
     * @param string $BuyerMessage
     * @return \EbayWsdl\BestOfferType
     */
    public function setBuyerMessage($BuyerMessage)
    {
      $this->BuyerMessage = $BuyerMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerMessage()
    {
      return $this->SellerMessage;
    }

    /**
     * @param string $SellerMessage
     * @return \EbayWsdl\BestOfferType
     */
    public function setSellerMessage($SellerMessage)
    {
      $this->SellerMessage = $SellerMessage;
      return $this;
    }

    /**
     * @return BestOfferTypeCodeType
     */
    public function getBestOfferCodeType()
    {
      return $this->BestOfferCodeType;
    }

    /**
     * @param BestOfferTypeCodeType $BestOfferCodeType
     * @return \EbayWsdl\BestOfferType
     */
    public function setBestOfferCodeType($BestOfferCodeType)
    {
      $this->BestOfferCodeType = $BestOfferCodeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCallStatus()
    {
      return $this->CallStatus;
    }

    /**
     * @param string $CallStatus
     * @return \EbayWsdl\BestOfferType
     */
    public function setCallStatus($CallStatus)
    {
      $this->CallStatus = $CallStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNewBestOffer()
    {
      return $this->NewBestOffer;
    }

    /**
     * @param boolean $NewBestOffer
     * @return \EbayWsdl\BestOfferType
     */
    public function setNewBestOffer($NewBestOffer)
    {
      $this->NewBestOffer = $NewBestOffer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getImmediatePayEligible()
    {
      return $this->ImmediatePayEligible;
    }

    /**
     * @param boolean $ImmediatePayEligible
     * @return \EbayWsdl\BestOfferType
     */
    public function setImmediatePayEligible($ImmediatePayEligible)
    {
      $this->ImmediatePayEligible = $ImmediatePayEligible;
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
     * @return \EbayWsdl\BestOfferType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
