<?php

namespace EbayWsdl\Classes;

class ShipmentTrackingDetailsType
{

    /**
     * @var string $ShippingCarrierUsed
     */
    protected $ShippingCarrierUsed = null;

    /**
     * @var string $ShipmentTrackingNumber
     */
    protected $ShipmentTrackingNumber = null;

    /**
     * @var ShipmentLineItemType $ShipmentLineItem
     */
    protected $ShipmentLineItem = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ShippingCarrierUsed
     * @param string $ShipmentTrackingNumber
     * @param ShipmentLineItemType $ShipmentLineItem
     * @param string $any
     */
    public function __construct($ShippingCarrierUsed = null, $ShipmentTrackingNumber = null, $ShipmentLineItem = null, $any = null)
    {
      $this->ShippingCarrierUsed = $ShippingCarrierUsed;
      $this->ShipmentTrackingNumber = $ShipmentTrackingNumber;
      $this->ShipmentLineItem = $ShipmentLineItem;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getShippingCarrierUsed()
    {
      return $this->ShippingCarrierUsed;
    }

    /**
     * @param string $ShippingCarrierUsed
     * @return \EbayWsdl\Classes\ShipmentTrackingDetailsType
     */
    public function setShippingCarrierUsed($ShippingCarrierUsed)
    {
      $this->ShippingCarrierUsed = $ShippingCarrierUsed;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentTrackingNumber()
    {
      return $this->ShipmentTrackingNumber;
    }

    /**
     * @param string $ShipmentTrackingNumber
     * @return \EbayWsdl\Classes\ShipmentTrackingDetailsType
     */
    public function setShipmentTrackingNumber($ShipmentTrackingNumber)
    {
      $this->ShipmentTrackingNumber = $ShipmentTrackingNumber;
      return $this;
    }

    /**
     * @return ShipmentLineItemType
     */
    public function getShipmentLineItem()
    {
      return $this->ShipmentLineItem;
    }

    /**
     * @param ShipmentLineItemType $ShipmentLineItem
     * @return \EbayWsdl\Classes\ShipmentTrackingDetailsType
     */
    public function setShipmentLineItem($ShipmentLineItem)
    {
      $this->ShipmentLineItem = $ShipmentLineItem;
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
     * @return \EbayWsdl\Classes\ShipmentTrackingDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
