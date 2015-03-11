<?php

namespace EbayWsdl\Classes;

class FeatureEligibilityType
{

    /**
     * @var boolean $QualifiesForBuyItNow
     */
    protected $QualifiesForBuyItNow = null;

    /**
     * @var boolean $QualifiesForBuyItNowMultiple
     */
    protected $QualifiesForBuyItNowMultiple = null;

    /**
     * @var boolean $QualifiedForFixedPriceOneDayDuration
     */
    protected $QualifiedForFixedPriceOneDayDuration = null;

    /**
     * @var boolean $QualifiesForVariations
     */
    protected $QualifiesForVariations = null;

    /**
     * @var boolean $QualifiedForAuctionOneDayDuration
     */
    protected $QualifiedForAuctionOneDayDuration = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $QualifiesForBuyItNow
     * @param boolean $QualifiesForBuyItNowMultiple
     * @param boolean $QualifiedForFixedPriceOneDayDuration
     * @param boolean $QualifiesForVariations
     * @param boolean $QualifiedForAuctionOneDayDuration
     * @param string $any
     */
    public function __construct($QualifiesForBuyItNow = null, $QualifiesForBuyItNowMultiple = null, $QualifiedForFixedPriceOneDayDuration = null, $QualifiesForVariations = null, $QualifiedForAuctionOneDayDuration = null, $any = null)
    {
      $this->QualifiesForBuyItNow = $QualifiesForBuyItNow;
      $this->QualifiesForBuyItNowMultiple = $QualifiesForBuyItNowMultiple;
      $this->QualifiedForFixedPriceOneDayDuration = $QualifiedForFixedPriceOneDayDuration;
      $this->QualifiesForVariations = $QualifiesForVariations;
      $this->QualifiedForAuctionOneDayDuration = $QualifiedForAuctionOneDayDuration;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getQualifiesForBuyItNow()
    {
      return $this->QualifiesForBuyItNow;
    }

    /**
     * @param boolean $QualifiesForBuyItNow
     * @return \EbayWsdl\Classes\FeatureEligibilityType
     */
    public function setQualifiesForBuyItNow($QualifiesForBuyItNow)
    {
      $this->QualifiesForBuyItNow = $QualifiesForBuyItNow;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getQualifiesForBuyItNowMultiple()
    {
      return $this->QualifiesForBuyItNowMultiple;
    }

    /**
     * @param boolean $QualifiesForBuyItNowMultiple
     * @return \EbayWsdl\Classes\FeatureEligibilityType
     */
    public function setQualifiesForBuyItNowMultiple($QualifiesForBuyItNowMultiple)
    {
      $this->QualifiesForBuyItNowMultiple = $QualifiesForBuyItNowMultiple;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getQualifiedForFixedPriceOneDayDuration()
    {
      return $this->QualifiedForFixedPriceOneDayDuration;
    }

    /**
     * @param boolean $QualifiedForFixedPriceOneDayDuration
     * @return \EbayWsdl\Classes\FeatureEligibilityType
     */
    public function setQualifiedForFixedPriceOneDayDuration($QualifiedForFixedPriceOneDayDuration)
    {
      $this->QualifiedForFixedPriceOneDayDuration = $QualifiedForFixedPriceOneDayDuration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getQualifiesForVariations()
    {
      return $this->QualifiesForVariations;
    }

    /**
     * @param boolean $QualifiesForVariations
     * @return \EbayWsdl\Classes\FeatureEligibilityType
     */
    public function setQualifiesForVariations($QualifiesForVariations)
    {
      $this->QualifiesForVariations = $QualifiesForVariations;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getQualifiedForAuctionOneDayDuration()
    {
      return $this->QualifiedForAuctionOneDayDuration;
    }

    /**
     * @param boolean $QualifiedForAuctionOneDayDuration
     * @return \EbayWsdl\Classes\FeatureEligibilityType
     */
    public function setQualifiedForAuctionOneDayDuration($QualifiedForAuctionOneDayDuration)
    {
      $this->QualifiedForAuctionOneDayDuration = $QualifiedForAuctionOneDayDuration;
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
     * @return \EbayWsdl\Classes\FeatureEligibilityType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
