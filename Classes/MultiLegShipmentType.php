<?php

namespace EbayWsdl\Classes;

class MultiLegShipmentType
{

    /**
     * @var MultiLegShippingServiceType $ShippingServiceDetails
     */
    protected $ShippingServiceDetails = null;

    /**
     * @var AddressType $ShipToAddress
     */
    protected $ShipToAddress = null;

    /**
     * @var int $ShippingTimeMin
     */
    protected $ShippingTimeMin = null;

    /**
     * @var int $ShippingTimeMax
     */
    protected $ShippingTimeMax = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param MultiLegShippingServiceType $ShippingServiceDetails
     * @param AddressType $ShipToAddress
     * @param int $ShippingTimeMin
     * @param int $ShippingTimeMax
     * @param string $any
     */
    public function __construct($ShippingServiceDetails = null, $ShipToAddress = null, $ShippingTimeMin = null, $ShippingTimeMax = null, $any = null)
    {
      $this->ShippingServiceDetails = $ShippingServiceDetails;
      $this->ShipToAddress = $ShipToAddress;
      $this->ShippingTimeMin = $ShippingTimeMin;
      $this->ShippingTimeMax = $ShippingTimeMax;
      $this->any = $any;
    }

    /**
     * @return MultiLegShippingServiceType
     */
    public function getShippingServiceDetails()
    {
      return $this->ShippingServiceDetails;
    }

    /**
     * @param MultiLegShippingServiceType $ShippingServiceDetails
     * @return \EbayWsdl\Classes\MultiLegShipmentType
     */
    public function setShippingServiceDetails($ShippingServiceDetails)
    {
      $this->ShippingServiceDetails = $ShippingServiceDetails;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getShipToAddress()
    {
      return $this->ShipToAddress;
    }

    /**
     * @param AddressType $ShipToAddress
     * @return \EbayWsdl\Classes\MultiLegShipmentType
     */
    public function setShipToAddress($ShipToAddress)
    {
      $this->ShipToAddress = $ShipToAddress;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingTimeMin()
    {
      return $this->ShippingTimeMin;
    }

    /**
     * @param int $ShippingTimeMin
     * @return \EbayWsdl\Classes\MultiLegShipmentType
     */
    public function setShippingTimeMin($ShippingTimeMin)
    {
      $this->ShippingTimeMin = $ShippingTimeMin;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingTimeMax()
    {
      return $this->ShippingTimeMax;
    }

    /**
     * @param int $ShippingTimeMax
     * @return \EbayWsdl\Classes\MultiLegShipmentType
     */
    public function setShippingTimeMax($ShippingTimeMax)
    {
      $this->ShippingTimeMax = $ShippingTimeMax;
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
     * @return \EbayWsdl\Classes\MultiLegShipmentType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
