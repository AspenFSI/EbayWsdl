<?php

namespace EbayWsdl;

class ShipPackageDetailsType
{

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
     * @var string $any
     */
    protected $any = null;

    /**
     * @param MeasurementSystemCodeType $MeasurementUnit
     * @param MeasureType $PackageDepth
     * @param MeasureType $PackageLength
     * @param MeasureType $PackageWidth
     * @param boolean $ShippingIrregular
     * @param ShippingPackageCodeType $ShippingPackage
     * @param MeasureType $WeightMajor
     * @param MeasureType $WeightMinor
     * @param string $any
     */
    public function __construct($MeasurementUnit = null, $PackageDepth = null, $PackageLength = null, $PackageWidth = null, $ShippingIrregular = null, $ShippingPackage = null, $WeightMajor = null, $WeightMinor = null, $any = null)
    {
      $this->MeasurementUnit = $MeasurementUnit;
      $this->PackageDepth = $PackageDepth;
      $this->PackageLength = $PackageLength;
      $this->PackageWidth = $PackageWidth;
      $this->ShippingIrregular = $ShippingIrregular;
      $this->ShippingPackage = $ShippingPackage;
      $this->WeightMajor = $WeightMajor;
      $this->WeightMinor = $WeightMinor;
      $this->any = $any;
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
     * @return \EbayWsdl\ShipPackageDetailsType
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
     * @return \EbayWsdl\ShipPackageDetailsType
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
     * @return \EbayWsdl\ShipPackageDetailsType
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
     * @return \EbayWsdl\ShipPackageDetailsType
     */
    public function setPackageWidth($PackageWidth)
    {
      $this->PackageWidth = $PackageWidth;
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
     * @return \EbayWsdl\ShipPackageDetailsType
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
     * @return \EbayWsdl\ShipPackageDetailsType
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
     * @return \EbayWsdl\ShipPackageDetailsType
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
     * @return \EbayWsdl\ShipPackageDetailsType
     */
    public function setWeightMinor($WeightMinor)
    {
      $this->WeightMinor = $WeightMinor;
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
     * @return \EbayWsdl\ShipPackageDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
