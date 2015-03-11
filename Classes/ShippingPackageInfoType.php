<?php

namespace EbayWsdl\Classes;

class ShippingPackageInfoType
{

    /**
     * @var string $StoreID
     */
    protected $StoreID = null;

    /**
     * @var string $ShippingTrackingEvent
     */
    protected $ShippingTrackingEvent = null;

    /**
     * @var \DateTime $ScheduledDeliveryTimeMin
     */
    protected $ScheduledDeliveryTimeMin = null;

    /**
     * @var \DateTime $ScheduledDeliveryTimeMax
     */
    protected $ScheduledDeliveryTimeMax = null;

    /**
     * @var \DateTime $ActualDeliveryTime
     */
    protected $ActualDeliveryTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $StoreID
     * @param string $ShippingTrackingEvent
     * @param \DateTime $ScheduledDeliveryTimeMin
     * @param \DateTime $ScheduledDeliveryTimeMax
     * @param \DateTime $ActualDeliveryTime
     * @param string $any
     */
    public function __construct($StoreID = null, $ShippingTrackingEvent = null, \DateTime $ScheduledDeliveryTimeMin = null, \DateTime $ScheduledDeliveryTimeMax = null, \DateTime $ActualDeliveryTime = null, $any = null)
    {
      $this->StoreID = $StoreID;
      $this->ShippingTrackingEvent = $ShippingTrackingEvent;
      $this->ScheduledDeliveryTimeMin = $ScheduledDeliveryTimeMin ? $ScheduledDeliveryTimeMin->format(\DateTime::ATOM) : null;
      $this->ScheduledDeliveryTimeMax = $ScheduledDeliveryTimeMax ? $ScheduledDeliveryTimeMax->format(\DateTime::ATOM) : null;
      $this->ActualDeliveryTime = $ActualDeliveryTime ? $ActualDeliveryTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getStoreID()
    {
      return $this->StoreID;
    }

    /**
     * @param string $StoreID
     * @return \EbayWsdl\Classes\ShippingPackageInfoType
     */
    public function setStoreID($StoreID)
    {
      $this->StoreID = $StoreID;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingTrackingEvent()
    {
      return $this->ShippingTrackingEvent;
    }

    /**
     * @param string $ShippingTrackingEvent
     * @return \EbayWsdl\Classes\ShippingPackageInfoType
     */
    public function setShippingTrackingEvent($ShippingTrackingEvent)
    {
      $this->ShippingTrackingEvent = $ShippingTrackingEvent;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledDeliveryTimeMin()
    {
      if ($this->ScheduledDeliveryTimeMin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScheduledDeliveryTimeMin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScheduledDeliveryTimeMin
     * @return \EbayWsdl\Classes\ShippingPackageInfoType
     */
    public function setScheduledDeliveryTimeMin(\DateTime $ScheduledDeliveryTimeMin)
    {
      $this->ScheduledDeliveryTimeMin = $ScheduledDeliveryTimeMin->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledDeliveryTimeMax()
    {
      if ($this->ScheduledDeliveryTimeMax == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScheduledDeliveryTimeMax);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScheduledDeliveryTimeMax
     * @return \EbayWsdl\Classes\ShippingPackageInfoType
     */
    public function setScheduledDeliveryTimeMax(\DateTime $ScheduledDeliveryTimeMax)
    {
      $this->ScheduledDeliveryTimeMax = $ScheduledDeliveryTimeMax->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActualDeliveryTime()
    {
      if ($this->ActualDeliveryTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ActualDeliveryTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ActualDeliveryTime
     * @return \EbayWsdl\Classes\ShippingPackageInfoType
     */
    public function setActualDeliveryTime(\DateTime $ActualDeliveryTime)
    {
      $this->ActualDeliveryTime = $ActualDeliveryTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\ShippingPackageInfoType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
