<?php

namespace EbayWsdl\Classes;

class SellerShippingProfileType
{

    /**
     * @var int $ShippingProfileID
     */
    protected $ShippingProfileID = null;

    /**
     * @var string $ShippingProfileName
     */
    protected $ShippingProfileName = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $ShippingProfileID
     * @param string $ShippingProfileName
     * @param string $any
     */
    public function __construct($ShippingProfileID = null, $ShippingProfileName = null, $any = null)
    {
      $this->ShippingProfileID = $ShippingProfileID;
      $this->ShippingProfileName = $ShippingProfileName;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getShippingProfileID()
    {
      return $this->ShippingProfileID;
    }

    /**
     * @param int $ShippingProfileID
     * @return \EbayWsdl\Classes\SellerShippingProfileType
     */
    public function setShippingProfileID($ShippingProfileID)
    {
      $this->ShippingProfileID = $ShippingProfileID;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingProfileName()
    {
      return $this->ShippingProfileName;
    }

    /**
     * @param string $ShippingProfileName
     * @return \EbayWsdl\Classes\SellerShippingProfileType
     */
    public function setShippingProfileName($ShippingProfileName)
    {
      $this->ShippingProfileName = $ShippingProfileName;
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
     * @return \EbayWsdl\Classes\SellerShippingProfileType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
