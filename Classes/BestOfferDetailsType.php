<?php

namespace EbayWsdl\Classes;

class BestOfferDetailsType
{

    /**
     * @var int $BestOfferCount
     */
    protected $BestOfferCount = null;

    /**
     * @var boolean $BestOfferEnabled
     */
    protected $BestOfferEnabled = null;

    /**
     * @var AmountType $BestOffer
     */
    protected $BestOffer = null;

    /**
     * @var BestOfferStatusCodeType $BestOfferStatus
     */
    protected $BestOfferStatus = null;

    /**
     * @var BestOfferTypeCodeType $BestOfferType
     */
    protected $BestOfferType = null;

    /**
     * @var boolean $NewBestOffer
     */
    protected $NewBestOffer = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $BestOfferCount
     * @param boolean $BestOfferEnabled
     * @param AmountType $BestOffer
     * @param BestOfferStatusCodeType $BestOfferStatus
     * @param BestOfferTypeCodeType $BestOfferType
     * @param boolean $NewBestOffer
     * @param string $any
     */
    public function __construct($BestOfferCount = null, $BestOfferEnabled = null, $BestOffer = null, $BestOfferStatus = null, $BestOfferType = null, $NewBestOffer = null, $any = null)
    {
      $this->BestOfferCount = $BestOfferCount;
      $this->BestOfferEnabled = $BestOfferEnabled;
      $this->BestOffer = $BestOffer;
      $this->BestOfferStatus = $BestOfferStatus;
      $this->BestOfferType = $BestOfferType;
      $this->NewBestOffer = $NewBestOffer;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\BestOfferDetailsType
     */
    public function setBestOfferCount($BestOfferCount)
    {
      $this->BestOfferCount = $BestOfferCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBestOfferEnabled()
    {
      return $this->BestOfferEnabled;
    }

    /**
     * @param boolean $BestOfferEnabled
     * @return \EbayWsdl\Classes\BestOfferDetailsType
     */
    public function setBestOfferEnabled($BestOfferEnabled)
    {
      $this->BestOfferEnabled = $BestOfferEnabled;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getBestOffer()
    {
      return $this->BestOffer;
    }

    /**
     * @param AmountType $BestOffer
     * @return \EbayWsdl\Classes\BestOfferDetailsType
     */
    public function setBestOffer($BestOffer)
    {
      $this->BestOffer = $BestOffer;
      return $this;
    }

    /**
     * @return BestOfferStatusCodeType
     */
    public function getBestOfferStatus()
    {
      return $this->BestOfferStatus;
    }

    /**
     * @param BestOfferStatusCodeType $BestOfferStatus
     * @return \EbayWsdl\Classes\BestOfferDetailsType
     */
    public function setBestOfferStatus($BestOfferStatus)
    {
      $this->BestOfferStatus = $BestOfferStatus;
      return $this;
    }

    /**
     * @return BestOfferTypeCodeType
     */
    public function getBestOfferType()
    {
      return $this->BestOfferType;
    }

    /**
     * @param BestOfferTypeCodeType $BestOfferType
     * @return \EbayWsdl\Classes\BestOfferDetailsType
     */
    public function setBestOfferType($BestOfferType)
    {
      $this->BestOfferType = $BestOfferType;
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
     * @return \EbayWsdl\Classes\BestOfferDetailsType
     */
    public function setNewBestOffer($NewBestOffer)
    {
      $this->NewBestOffer = $NewBestOffer;
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
     * @return \EbayWsdl\Classes\BestOfferDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
