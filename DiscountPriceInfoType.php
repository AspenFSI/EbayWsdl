<?php

namespace EbayWsdl;

class DiscountPriceInfoType
{

    /**
     * @var AmountType $OriginalRetailPrice
     */
    protected $OriginalRetailPrice = null;

    /**
     * @var AmountType $MinimumAdvertisedPrice
     */
    protected $MinimumAdvertisedPrice = null;

    /**
     * @var MinimumAdvertisedPriceExposureCodeType $MinimumAdvertisedPriceExposure
     */
    protected $MinimumAdvertisedPriceExposure = null;

    /**
     * @var PricingTreatmentCodeType $PricingTreatment
     */
    protected $PricingTreatment = null;

    /**
     * @var boolean $SoldOneBay
     */
    protected $SoldOneBay = null;

    /**
     * @var boolean $SoldOffeBay
     */
    protected $SoldOffeBay = null;

    /**
     * @var AmountType $MadeForOutletComparisonPrice
     */
    protected $MadeForOutletComparisonPrice = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $OriginalRetailPrice
     * @param AmountType $MinimumAdvertisedPrice
     * @param MinimumAdvertisedPriceExposureCodeType $MinimumAdvertisedPriceExposure
     * @param PricingTreatmentCodeType $PricingTreatment
     * @param boolean $SoldOneBay
     * @param boolean $SoldOffeBay
     * @param AmountType $MadeForOutletComparisonPrice
     * @param string $any
     */
    public function __construct($OriginalRetailPrice = null, $MinimumAdvertisedPrice = null, $MinimumAdvertisedPriceExposure = null, $PricingTreatment = null, $SoldOneBay = null, $SoldOffeBay = null, $MadeForOutletComparisonPrice = null, $any = null)
    {
      $this->OriginalRetailPrice = $OriginalRetailPrice;
      $this->MinimumAdvertisedPrice = $MinimumAdvertisedPrice;
      $this->MinimumAdvertisedPriceExposure = $MinimumAdvertisedPriceExposure;
      $this->PricingTreatment = $PricingTreatment;
      $this->SoldOneBay = $SoldOneBay;
      $this->SoldOffeBay = $SoldOffeBay;
      $this->MadeForOutletComparisonPrice = $MadeForOutletComparisonPrice;
      $this->any = $any;
    }

    /**
     * @return AmountType
     */
    public function getOriginalRetailPrice()
    {
      return $this->OriginalRetailPrice;
    }

    /**
     * @param AmountType $OriginalRetailPrice
     * @return \EbayWsdl\DiscountPriceInfoType
     */
    public function setOriginalRetailPrice($OriginalRetailPrice)
    {
      $this->OriginalRetailPrice = $OriginalRetailPrice;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMinimumAdvertisedPrice()
    {
      return $this->MinimumAdvertisedPrice;
    }

    /**
     * @param AmountType $MinimumAdvertisedPrice
     * @return \EbayWsdl\DiscountPriceInfoType
     */
    public function setMinimumAdvertisedPrice($MinimumAdvertisedPrice)
    {
      $this->MinimumAdvertisedPrice = $MinimumAdvertisedPrice;
      return $this;
    }

    /**
     * @return MinimumAdvertisedPriceExposureCodeType
     */
    public function getMinimumAdvertisedPriceExposure()
    {
      return $this->MinimumAdvertisedPriceExposure;
    }

    /**
     * @param MinimumAdvertisedPriceExposureCodeType $MinimumAdvertisedPriceExposure
     * @return \EbayWsdl\DiscountPriceInfoType
     */
    public function setMinimumAdvertisedPriceExposure($MinimumAdvertisedPriceExposure)
    {
      $this->MinimumAdvertisedPriceExposure = $MinimumAdvertisedPriceExposure;
      return $this;
    }

    /**
     * @return PricingTreatmentCodeType
     */
    public function getPricingTreatment()
    {
      return $this->PricingTreatment;
    }

    /**
     * @param PricingTreatmentCodeType $PricingTreatment
     * @return \EbayWsdl\DiscountPriceInfoType
     */
    public function setPricingTreatment($PricingTreatment)
    {
      $this->PricingTreatment = $PricingTreatment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSoldOneBay()
    {
      return $this->SoldOneBay;
    }

    /**
     * @param boolean $SoldOneBay
     * @return \EbayWsdl\DiscountPriceInfoType
     */
    public function setSoldOneBay($SoldOneBay)
    {
      $this->SoldOneBay = $SoldOneBay;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSoldOffeBay()
    {
      return $this->SoldOffeBay;
    }

    /**
     * @param boolean $SoldOffeBay
     * @return \EbayWsdl\DiscountPriceInfoType
     */
    public function setSoldOffeBay($SoldOffeBay)
    {
      $this->SoldOffeBay = $SoldOffeBay;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMadeForOutletComparisonPrice()
    {
      return $this->MadeForOutletComparisonPrice;
    }

    /**
     * @param AmountType $MadeForOutletComparisonPrice
     * @return \EbayWsdl\DiscountPriceInfoType
     */
    public function setMadeForOutletComparisonPrice($MadeForOutletComparisonPrice)
    {
      $this->MadeForOutletComparisonPrice = $MadeForOutletComparisonPrice;
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
     * @return \EbayWsdl\DiscountPriceInfoType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
