<?php

namespace EbayWsdl\Classes;

class CalculatedShippingRateType
{

    /**
     * @var string $OriginatingPostalCode
     */
    protected $OriginatingPostalCode = null;

    /**
     * @var MeasurementSystemCodeType $MeasurementUnit
     */
    protected $MeasurementUnit = null;

    /**
     * @var MeasureType $PackageDepth
     */
    protected $PackageDepth = null;

    /**
     * @var MeasureType $PackageLength
     */
    protected $PackageLength = null;

    /**
     * @var MeasureType $PackageWidth
     */
    protected $PackageWidth = null;

    /**
     * @var AmountType $PackagingHandlingCosts
     */
    protected $PackagingHandlingCosts = null;

    /**
     * @var boolean $ShippingIrregular
     */
    protected $ShippingIrregular = null;

    /**
     * @var ShippingPackageCodeType $ShippingPackage
     */
    protected $ShippingPackage = null;

    /**
     * @var MeasureType $WeightMajor
     */
    protected $WeightMajor = null;

    /**
     * @var MeasureType $WeightMinor
     */
    protected $WeightMinor = null;

    /**
     * @var AmountType $InternationalPackagingHandlingCosts
     */
    protected $InternationalPackagingHandlingCosts = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $OriginatingPostalCode
     * @param MeasurementSystemCodeType $MeasurementUnit
     * @param MeasureType $PackageDepth
     * @param MeasureType $PackageLength
     * @param MeasureType $PackageWidth
     * @param AmountType $PackagingHandlingCosts
     * @param boolean $ShippingIrregular
     * @param ShippingPackageCodeType $ShippingPackage
     * @param MeasureType $WeightMajor
     * @param MeasureType $WeightMinor
     * @param AmountType $InternationalPackagingHandlingCosts
     * @param string $any
     */
    public function __construct($OriginatingPostalCode = null, $MeasurementUnit = null, $PackageDepth = null, $PackageLength = null, $PackageWidth = null, $PackagingHandlingCosts = null, $ShippingIrregular = null, $ShippingPackage = null, $WeightMajor = null, $WeightMinor = null, $InternationalPackagingHandlingCosts = null, $any = null)
    {
      $this->OriginatingPostalCode = $OriginatingPostalCode;
      $this->MeasurementUnit = $MeasurementUnit;
      $this->PackageDepth = $PackageDepth;
      $this->PackageLength = $PackageLength;
      $this->PackageWidth = $PackageWidth;
      $this->PackagingHandlingCosts = $PackagingHandlingCosts;
      $this->ShippingIrregular = $ShippingIrregular;
      $this->ShippingPackage = $ShippingPackage;
      $this->WeightMajor = $WeightMajor;
      $this->WeightMinor = $WeightMinor;
      $this->InternationalPackagingHandlingCosts = $InternationalPackagingHandlingCosts;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getOriginatingPostalCode()
    {
      return $this->OriginatingPostalCode;
    }

    /**
     * @param string $OriginatingPostalCode
     * @return \EbayWsdl\Classes\CalculatedShippingRateType
     */
    public function setOriginatingPostalCode($OriginatingPostalCode)
    {
      $this->OriginatingPostalCode = $OriginatingPostalCode;
      return $this;
    }

    /**
     * @return MeasurementSystemCodeType
     */
    public function getMeasurementUnit()
    {
      return $this->MeasurementUnit;
    }

    /**
     * @param MeasurementSystemCodeType $MeasurementUnit
     * @return \EbayWsdl\Classes\CalculatedShippingRateType
     */
    public function setMeasurementUnit($MeasurementUnit)
    {
      $this->MeasurementUnit = $MeasurementUnit;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getPackageDepth()
    {
      return $this->PackageDepth;
    }

    /**
     * @param MeasureType $PackageDepth
     * @return \EbayWsdl\Classes\CalculatedShippingRateType
     */
    public function setPackageDepth($PackageDepth)
    {
      $this->PackageDepth = $PackageDepth;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getPackageLength()
    {
      return $this->PackageLength;
    }

    /**
     * @param MeasureType $PackageLength
     * @return \EbayWsdl\Classes\CalculatedShippingRateType
     */
    public function setPackageLength($PackageLength)
    {
      $this->PackageLength = $PackageLength;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getPackageWidth()
    {
      return $this->PackageWidth;
    }

    /**
     * @param MeasureType $PackageWidth
     * @return \EbayWsdl\Classes\CalculatedShippingRateType
     */
    public function setPackageWidth($PackageWidth)
    {
      $this->PackageWidth = $PackageWidth;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getPackagingHandlingCosts()
    {
      return $this->PackagingHandlingCosts;
    }

    /**
     * @param AmountType $PackagingHandlingCosts
     * @return \EbayWsdl\Classes\CalculatedShippingRateType
     */
    public function setPackagingHandlingCosts($PackagingHandlingCosts)
    {
      $this->PackagingHandlingCosts = $PackagingHandlingCosts;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShippingIrregular()
    {
      return $this->ShippingIrregular;
    }

    /**
     * @param boolean $ShippingIrregular
     * @return \EbayWsdl\Classes\CalculatedShippingRateType
     */
    public function setShippingIrregular($ShippingIrregular)
    {
      $this->ShippingIrregular = $ShippingIrregular;
      return $this;
    }

    /**
     * @return ShippingPackageCodeType
     */
    public function getShippingPackage()
    {
      return $this->ShippingPackage;
    }

    /**
     * @param ShippingPackageCodeType $ShippingPackage
     * @return \EbayWsdl\Classes\CalculatedShippingRateType
     */
    public function setShippingPackage($ShippingPackage)
    {
      $this->ShippingPackage = $ShippingPackage;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getWeightMajor()
    {
      return $this->WeightMajor;
    }

    /**
     * @param MeasureType $WeightMajor
     * @return \EbayWsdl\Classes\CalculatedShippingRateType
     */
    public function setWeightMajor($WeightMajor)
    {
      $this->WeightMajor = $WeightMajor;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getWeightMinor()
    {
      return $this->WeightMinor;
    }

    /**
     * @param MeasureType $WeightMinor
     * @return \EbayWsdl\Classes\CalculatedShippingRateType
     */
    public function setWeightMinor($WeightMinor)
    {
      $this->WeightMinor = $WeightMinor;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getInternationalPackagingHandlingCosts()
    {
      return $this->InternationalPackagingHandlingCosts;
    }

    /**
     * @param AmountType $InternationalPackagingHandlingCosts
     * @return \EbayWsdl\Classes\CalculatedShippingRateType
     */
    public function setInternationalPackagingHandlingCosts($InternationalPackagingHandlingCosts)
    {
      $this->InternationalPackagingHandlingCosts = $InternationalPackagingHandlingCosts;
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
     * @return \EbayWsdl\Classes\CalculatedShippingRateType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
