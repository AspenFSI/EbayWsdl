<?php

namespace EbayWsdl;

class ListingStartPriceDetailsType
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ListingTypeCodeType $ListingType
     */
    protected $ListingType = null;

    /**
     * @var AmountType $StartPrice
     */
    protected $StartPrice = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var float $MinBuyItNowPricePercent
     */
    protected $MinBuyItNowPricePercent = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Description
     * @param ListingTypeCodeType $ListingType
     * @param AmountType $StartPrice
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param float $MinBuyItNowPricePercent
     * @param string $any
     */
    public function __construct($Description = null, $ListingType = null, $StartPrice = null, $DetailVersion = null, \DateTime $UpdateTime = null, $MinBuyItNowPricePercent = null, $any = null)
    {
      $this->Description = $Description;
      $this->ListingType = $ListingType;
      $this->StartPrice = $StartPrice;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->MinBuyItNowPricePercent = $MinBuyItNowPricePercent;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\ListingStartPriceDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ListingTypeCodeType
     */
    public function getListingType()
    {
      return $this->ListingType;
    }

    /**
     * @param ListingTypeCodeType $ListingType
     * @return \EbayWsdl\ListingStartPriceDetailsType
     */
    public function setListingType($ListingType)
    {
      $this->ListingType = $ListingType;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getStartPrice()
    {
      return $this->StartPrice;
    }

    /**
     * @param AmountType $StartPrice
     * @return \EbayWsdl\ListingStartPriceDetailsType
     */
    public function setStartPrice($StartPrice)
    {
      $this->StartPrice = $StartPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailVersion()
    {
      return $this->DetailVersion;
    }

    /**
     * @param string $DetailVersion
     * @return \EbayWsdl\ListingStartPriceDetailsType
     */
    public function setDetailVersion($DetailVersion)
    {
      $this->DetailVersion = $DetailVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\ListingStartPriceDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getMinBuyItNowPricePercent()
    {
      return $this->MinBuyItNowPricePercent;
    }

    /**
     * @param float $MinBuyItNowPricePercent
     * @return \EbayWsdl\ListingStartPriceDetailsType
     */
    public function setMinBuyItNowPricePercent($MinBuyItNowPricePercent)
    {
      $this->MinBuyItNowPricePercent = $MinBuyItNowPricePercent;
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
     * @return \EbayWsdl\ListingStartPriceDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
