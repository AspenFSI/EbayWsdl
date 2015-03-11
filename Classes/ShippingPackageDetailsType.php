<?php

namespace EbayWsdl\Classes;

class ShippingPackageDetailsType
{

    /**
     * @var int $PackageID
     */
    protected $PackageID = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ShippingPackageCodeType $ShippingPackage
     */
    protected $ShippingPackage = null;

    /**
     * @var boolean $DefaultValue
     */
    protected $DefaultValue = null;

    /**
     * @var boolean $DimensionsSupported
     */
    protected $DimensionsSupported = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $PackageID
     * @param string $Description
     * @param ShippingPackageCodeType $ShippingPackage
     * @param boolean $DefaultValue
     * @param boolean $DimensionsSupported
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($PackageID = null, $Description = null, $ShippingPackage = null, $DefaultValue = null, $DimensionsSupported = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->PackageID = $PackageID;
      $this->Description = $Description;
      $this->ShippingPackage = $ShippingPackage;
      $this->DefaultValue = $DefaultValue;
      $this->DimensionsSupported = $DimensionsSupported;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getPackageID()
    {
      return $this->PackageID;
    }

    /**
     * @param int $PackageID
     * @return \EbayWsdl\Classes\ShippingPackageDetailsType
     */
    public function setPackageID($PackageID)
    {
      $this->PackageID = $PackageID;
      return $this;
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
     * @return \EbayWsdl\Classes\ShippingPackageDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \EbayWsdl\Classes\ShippingPackageDetailsType
     */
    public function setShippingPackage($ShippingPackage)
    {
      $this->ShippingPackage = $ShippingPackage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultValue()
    {
      return $this->DefaultValue;
    }

    /**
     * @param boolean $DefaultValue
     * @return \EbayWsdl\Classes\ShippingPackageDetailsType
     */
    public function setDefaultValue($DefaultValue)
    {
      $this->DefaultValue = $DefaultValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDimensionsSupported()
    {
      return $this->DimensionsSupported;
    }

    /**
     * @param boolean $DimensionsSupported
     * @return \EbayWsdl\Classes\ShippingPackageDetailsType
     */
    public function setDimensionsSupported($DimensionsSupported)
    {
      $this->DimensionsSupported = $DimensionsSupported;
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
     * @return \EbayWsdl\Classes\ShippingPackageDetailsType
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
     * @return \EbayWsdl\Classes\ShippingPackageDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\ShippingPackageDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
