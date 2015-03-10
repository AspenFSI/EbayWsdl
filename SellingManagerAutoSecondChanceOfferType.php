<?php

namespace EbayWsdl;

class SellingManagerAutoSecondChanceOfferType
{

    /**
     * @var SellingManagerAutoSecondChanceOfferTypeCodeType $SecondChanceOfferCondition
     */
    protected $SecondChanceOfferCondition = null;

    /**
     * @var AmountType $Amount
     */
    protected $Amount = null;

    /**
     * @var float $ProfitPercent
     */
    protected $ProfitPercent = null;

    /**
     * @var SecondChanceOfferDurationCodeType $Duration
     */
    protected $Duration = null;

    /**
     * @var int $ListingHoldInventoryLevel
     */
    protected $ListingHoldInventoryLevel = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SellingManagerAutoSecondChanceOfferTypeCodeType $SecondChanceOfferCondition
     * @param AmountType $Amount
     * @param float $ProfitPercent
     * @param SecondChanceOfferDurationCodeType $Duration
     * @param int $ListingHoldInventoryLevel
     * @param string $any
     */
    public function __construct($SecondChanceOfferCondition = null, $Amount = null, $ProfitPercent = null, $Duration = null, $ListingHoldInventoryLevel = null, $any = null)
    {
      $this->SecondChanceOfferCondition = $SecondChanceOfferCondition;
      $this->Amount = $Amount;
      $this->ProfitPercent = $ProfitPercent;
      $this->Duration = $Duration;
      $this->ListingHoldInventoryLevel = $ListingHoldInventoryLevel;
      $this->any = $any;
    }

    /**
     * @return SellingManagerAutoSecondChanceOfferTypeCodeType
     */
    public function getSecondChanceOfferCondition()
    {
      return $this->SecondChanceOfferCondition;
    }

    /**
     * @param SellingManagerAutoSecondChanceOfferTypeCodeType $SecondChanceOfferCondition
     * @return \EbayWsdl\SellingManagerAutoSecondChanceOfferType
     */
    public function setSecondChanceOfferCondition($SecondChanceOfferCondition)
    {
      $this->SecondChanceOfferCondition = $SecondChanceOfferCondition;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param AmountType $Amount
     * @return \EbayWsdl\SellingManagerAutoSecondChanceOfferType
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getProfitPercent()
    {
      return $this->ProfitPercent;
    }

    /**
     * @param float $ProfitPercent
     * @return \EbayWsdl\SellingManagerAutoSecondChanceOfferType
     */
    public function setProfitPercent($ProfitPercent)
    {
      $this->ProfitPercent = $ProfitPercent;
      return $this;
    }

    /**
     * @return SecondChanceOfferDurationCodeType
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param SecondChanceOfferDurationCodeType $Duration
     * @return \EbayWsdl\SellingManagerAutoSecondChanceOfferType
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

    /**
     * @return int
     */
    public function getListingHoldInventoryLevel()
    {
      return $this->ListingHoldInventoryLevel;
    }

    /**
     * @param int $ListingHoldInventoryLevel
     * @return \EbayWsdl\SellingManagerAutoSecondChanceOfferType
     */
    public function setListingHoldInventoryLevel($ListingHoldInventoryLevel)
    {
      $this->ListingHoldInventoryLevel = $ListingHoldInventoryLevel;
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
     * @return \EbayWsdl\SellingManagerAutoSecondChanceOfferType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
