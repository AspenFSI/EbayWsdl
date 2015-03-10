<?php

namespace EbayWsdl;

class SellingManagerAutoRelistType
{

    /**
     * @var SellingManagerAutoRelistTypeCodeType $Type
     */
    protected $Type = null;

    /**
     * @var SellingManagerAutoRelistOptionCodeType $RelistCondition
     */
    protected $RelistCondition = null;

    /**
     * @var int $RelistAfterDays
     */
    protected $RelistAfterDays = null;

    /**
     * @var int $RelistAfterHours
     */
    protected $RelistAfterHours = null;

    /**
     * @var time $RelistAtSpecificTimeOfDay
     */
    protected $RelistAtSpecificTimeOfDay = null;

    /**
     * @var BestOfferDetailsType $BestOfferDetails
     */
    protected $BestOfferDetails = null;

    /**
     * @var int $ListingHoldInventoryLevel
     */
    protected $ListingHoldInventoryLevel = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SellingManagerAutoRelistTypeCodeType $Type
     * @param SellingManagerAutoRelistOptionCodeType $RelistCondition
     * @param int $RelistAfterDays
     * @param int $RelistAfterHours
     * @param time $RelistAtSpecificTimeOfDay
     * @param BestOfferDetailsType $BestOfferDetails
     * @param int $ListingHoldInventoryLevel
     * @param string $any
     */
    public function __construct($Type = null, $RelistCondition = null, $RelistAfterDays = null, $RelistAfterHours = null, $RelistAtSpecificTimeOfDay = null, $BestOfferDetails = null, $ListingHoldInventoryLevel = null, $any = null)
    {
      $this->Type = $Type;
      $this->RelistCondition = $RelistCondition;
      $this->RelistAfterDays = $RelistAfterDays;
      $this->RelistAfterHours = $RelistAfterHours;
      $this->RelistAtSpecificTimeOfDay = $RelistAtSpecificTimeOfDay;
      $this->BestOfferDetails = $BestOfferDetails;
      $this->ListingHoldInventoryLevel = $ListingHoldInventoryLevel;
      $this->any = $any;
    }

    /**
     * @return SellingManagerAutoRelistTypeCodeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param SellingManagerAutoRelistTypeCodeType $Type
     * @return \EbayWsdl\SellingManagerAutoRelistType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return SellingManagerAutoRelistOptionCodeType
     */
    public function getRelistCondition()
    {
      return $this->RelistCondition;
    }

    /**
     * @param SellingManagerAutoRelistOptionCodeType $RelistCondition
     * @return \EbayWsdl\SellingManagerAutoRelistType
     */
    public function setRelistCondition($RelistCondition)
    {
      $this->RelistCondition = $RelistCondition;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelistAfterDays()
    {
      return $this->RelistAfterDays;
    }

    /**
     * @param int $RelistAfterDays
     * @return \EbayWsdl\SellingManagerAutoRelistType
     */
    public function setRelistAfterDays($RelistAfterDays)
    {
      $this->RelistAfterDays = $RelistAfterDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelistAfterHours()
    {
      return $this->RelistAfterHours;
    }

    /**
     * @param int $RelistAfterHours
     * @return \EbayWsdl\SellingManagerAutoRelistType
     */
    public function setRelistAfterHours($RelistAfterHours)
    {
      $this->RelistAfterHours = $RelistAfterHours;
      return $this;
    }

    /**
     * @return time
     */
    public function getRelistAtSpecificTimeOfDay()
    {
      return $this->RelistAtSpecificTimeOfDay;
    }

    /**
     * @param time $RelistAtSpecificTimeOfDay
     * @return \EbayWsdl\SellingManagerAutoRelistType
     */
    public function setRelistAtSpecificTimeOfDay($RelistAtSpecificTimeOfDay)
    {
      $this->RelistAtSpecificTimeOfDay = $RelistAtSpecificTimeOfDay;
      return $this;
    }

    /**
     * @return BestOfferDetailsType
     */
    public function getBestOfferDetails()
    {
      return $this->BestOfferDetails;
    }

    /**
     * @param BestOfferDetailsType $BestOfferDetails
     * @return \EbayWsdl\SellingManagerAutoRelistType
     */
    public function setBestOfferDetails($BestOfferDetails)
    {
      $this->BestOfferDetails = $BestOfferDetails;
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
     * @return \EbayWsdl\SellingManagerAutoRelistType
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
     * @return \EbayWsdl\SellingManagerAutoRelistType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
