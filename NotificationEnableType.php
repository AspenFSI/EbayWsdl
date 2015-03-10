<?php

namespace EbayWsdl;

class NotificationEnableType
{

    /**
     * @var NotificationEventTypeCodeType $EventType
     */
    protected $EventType = null;

    /**
     * @var EnableCodeType $EventEnable
     */
    protected $EventEnable = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param NotificationEventTypeCodeType $EventType
     * @param EnableCodeType $EventEnable
     * @param string $any
     */
    public function __construct($EventType = null, $EventEnable = null, $any = null)
    {
      $this->EventType = $EventType;
      $this->EventEnable = $EventEnable;
      $this->any = $any;
    }

    /**
     * @return NotificationEventTypeCodeType
     */
    public function getEventType()
    {
      return $this->EventType;
    }

    /**
     * @param NotificationEventTypeCodeType $EventType
     * @return \EbayWsdl\NotificationEnableType
     */
    public function setEventType($EventType)
    {
      $this->EventType = $EventType;
      return $this;
    }

    /**
     * @return EnableCodeType
     */
    public function getEventEnable()
    {
      return $this->EventEnable;
    }

    /**
     * @param EnableCodeType $EventEnable
     * @return \EbayWsdl\NotificationEnableType
     */
    public function setEventEnable($EventEnable)
    {
      $this->EventEnable = $EventEnable;
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
     * @return \EbayWsdl\NotificationEnableType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
