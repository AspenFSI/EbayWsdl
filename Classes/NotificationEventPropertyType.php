<?php

namespace EbayWsdl\Classes;

class NotificationEventPropertyType
{

    /**
     * @var NotificationEventTypeCodeType $EventType
     */
    protected $EventType = null;

    /**
     * @var NotificationEventPropertyNameCodeType $Name
     */
    protected $Name = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param NotificationEventTypeCodeType $EventType
     * @param NotificationEventPropertyNameCodeType $Name
     * @param string $Value
     * @param string $any
     */
    public function __construct($EventType = null, $Name = null, $Value = null, $any = null)
    {
      $this->EventType = $EventType;
      $this->Name = $Name;
      $this->Value = $Value;
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
     * @return \EbayWsdl\Classes\NotificationEventPropertyType
     */
    public function setEventType($EventType)
    {
      $this->EventType = $EventType;
      return $this;
    }

    /**
     * @return NotificationEventPropertyNameCodeType
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param NotificationEventPropertyNameCodeType $Name
     * @return \EbayWsdl\Classes\NotificationEventPropertyType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \EbayWsdl\Classes\NotificationEventPropertyType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
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
     * @return \EbayWsdl\Classes\NotificationEventPropertyType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
