<?php

namespace EbayWsdl;

class ShippingServicePackageDetailsType
{

    /**
     * @var ShippingPackageCodeType $Name
     */
    protected $Name = null;

    /**
     * @var boolean $DimensionsRequired
     */
    protected $DimensionsRequired = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ShippingPackageCodeType $Name
     * @param boolean $DimensionsRequired
     * @param string $any
     */
    public function __construct($Name = null, $DimensionsRequired = null, $any = null)
    {
      $this->Name = $Name;
      $this->DimensionsRequired = $DimensionsRequired;
      $this->any = $any;
    }

    /**
     * @return ShippingPackageCodeType
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param ShippingPackageCodeType $Name
     * @return \EbayWsdl\ShippingServicePackageDetailsType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDimensionsRequired()
    {
      return $this->DimensionsRequired;
    }

    /**
     * @param boolean $DimensionsRequired
     * @return \EbayWsdl\ShippingServicePackageDetailsType
     */
    public function setDimensionsRequired($DimensionsRequired)
    {
      $this->DimensionsRequired = $DimensionsRequired;
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
     * @return \EbayWsdl\ShippingServicePackageDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
