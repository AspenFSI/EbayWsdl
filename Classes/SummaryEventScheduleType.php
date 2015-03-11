<?php

namespace EbayWsdl\Classes;

class SummaryEventScheduleType
{

    /**
     * @var NotificationEventTypeCodeType $EventType
     */
    protected $EventType = null;

    /**
     * @var SummaryWindowPeriodCodeType $SummaryPeriod
     */
    protected $SummaryPeriod = null;

    /**
     * @var SummaryFrequencyCodeType $Frequency
     */
    protected $Frequency = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param NotificationEventTypeCodeType $EventType
     * @param SummaryWindowPeriodCodeType $SummaryPeriod
     * @param SummaryFrequencyCodeType $Frequency
     * @param string $any
     */
    public function __construct($EventType = null, $SummaryPeriod = null, $Frequency = null, $any = null)
    {
      $this->EventType = $EventType;
      $this->SummaryPeriod = $SummaryPeriod;
      $this->Frequency = $Frequency;
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
     * @return \EbayWsdl\Classes\SummaryEventScheduleType
     */
    public function setEventType($EventType)
    {
      $this->EventType = $EventType;
      return $this;
    }

    /**
     * @return SummaryWindowPeriodCodeType
     */
    public function getSummaryPeriod()
    {
      return $this->SummaryPeriod;
    }

    /**
     * @param SummaryWindowPeriodCodeType $SummaryPeriod
     * @return \EbayWsdl\Classes\SummaryEventScheduleType
     */
    public function setSummaryPeriod($SummaryPeriod)
    {
      $this->SummaryPeriod = $SummaryPeriod;
      return $this;
    }

    /**
     * @return SummaryFrequencyCodeType
     */
    public function getFrequency()
    {
      return $this->Frequency;
    }

    /**
     * @param SummaryFrequencyCodeType $Frequency
     * @return \EbayWsdl\Classes\SummaryEventScheduleType
     */
    public function setFrequency($Frequency)
    {
      $this->Frequency = $Frequency;
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
     * @return \EbayWsdl\Classes\SummaryEventScheduleType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
