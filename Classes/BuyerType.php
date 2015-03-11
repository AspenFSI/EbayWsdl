<?php

namespace EbayWsdl\Classes;

class BuyerType
{

    /**
     * @var AddressType $ShippingAddress
     */
    protected $ShippingAddress = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AddressType $ShippingAddress
     * @param string $any
     */
    public function __construct($ShippingAddress = null, $any = null)
    {
      $this->ShippingAddress = $ShippingAddress;
      $this->any = $any;
    }

    /**
     * @return AddressType
     */
    public function getShippingAddress()
    {
      return $this->ShippingAddress;
    }

    /**
     * @param AddressType $ShippingAddress
     * @return \EbayWsdl\Classes\BuyerType
     */
    public function setShippingAddress($ShippingAddress)
    {
      $this->ShippingAddress = $ShippingAddress;
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
     * @return \EbayWsdl\Classes\BuyerType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
