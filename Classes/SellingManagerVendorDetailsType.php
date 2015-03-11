<?php

namespace EbayWsdl\Classes;

class SellingManagerVendorDetailsType
{

    /**
     * @var string $VendorName
     */
    protected $VendorName = null;

    /**
     * @var string $VendorContactInfo
     */
    protected $VendorContactInfo = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $VendorName
     * @param string $VendorContactInfo
     * @param string $any
     */
    public function __construct($VendorName = null, $VendorContactInfo = null, $any = null)
    {
      $this->VendorName = $VendorName;
      $this->VendorContactInfo = $VendorContactInfo;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getVendorName()
    {
      return $this->VendorName;
    }

    /**
     * @param string $VendorName
     * @return \EbayWsdl\Classes\SellingManagerVendorDetailsType
     */
    public function setVendorName($VendorName)
    {
      $this->VendorName = $VendorName;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorContactInfo()
    {
      return $this->VendorContactInfo;
    }

    /**
     * @param string $VendorContactInfo
     * @return \EbayWsdl\Classes\SellingManagerVendorDetailsType
     */
    public function setVendorContactInfo($VendorContactInfo)
    {
      $this->VendorContactInfo = $VendorContactInfo;
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
     * @return \EbayWsdl\Classes\SellingManagerVendorDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
