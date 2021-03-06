<?php

namespace EbayWsdl\Classes;

class SupportedEventTypesArrayType
{

    /**
     * @var NotificationEventTypeCodeType[] $EventType
     */
    protected $EventType = null;

    /**
     * @param NotificationEventTypeCodeType[] $EventType
     */
    public function __construct(array $EventType = null)
    {
      $this->EventType = $EventType;
    }

    /**
     * @return NotificationEventTypeCodeType[]
     */
    public function getEventType()
    {
      return $this->EventType;
    }

    /**
     * @param NotificationEventTypeCodeType[] $EventType
     * @return \EbayWsdl\Classes\SupportedEventTypesArrayType
     */
    public function setEventType(array $EventType)
    {
      $this->EventType = $EventType;
      return $this;
    }

}
