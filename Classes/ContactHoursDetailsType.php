<?php

namespace EbayWsdl\Classes;

class ContactHoursDetailsType
{

    /**
     * @var string $TimeZoneID
     */
    protected $TimeZoneID = null;

    /**
     * @var DaysCodeType $Hours1Days
     */
    protected $Hours1Days = null;

    /**
     * @var boolean $Hours1AnyTime
     */
    protected $Hours1AnyTime = null;

    /**
     * @var time $Hours1From
     */
    protected $Hours1From = null;

    /**
     * @var time $Hours1To
     */
    protected $Hours1To = null;

    /**
     * @var DaysCodeType $Hours2Days
     */
    protected $Hours2Days = null;

    /**
     * @var boolean $Hours2AnyTime
     */
    protected $Hours2AnyTime = null;

    /**
     * @var time $Hours2From
     */
    protected $Hours2From = null;

    /**
     * @var time $Hours2To
     */
    protected $Hours2To = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $TimeZoneID
     * @param DaysCodeType $Hours1Days
     * @param boolean $Hours1AnyTime
     * @param time $Hours1From
     * @param time $Hours1To
     * @param DaysCodeType $Hours2Days
     * @param boolean $Hours2AnyTime
     * @param time $Hours2From
     * @param time $Hours2To
     * @param string $any
     */
    public function __construct($TimeZoneID = null, $Hours1Days = null, $Hours1AnyTime = null, $Hours1From = null, $Hours1To = null, $Hours2Days = null, $Hours2AnyTime = null, $Hours2From = null, $Hours2To = null, $any = null)
    {
      $this->TimeZoneID = $TimeZoneID;
      $this->Hours1Days = $Hours1Days;
      $this->Hours1AnyTime = $Hours1AnyTime;
      $this->Hours1From = $Hours1From;
      $this->Hours1To = $Hours1To;
      $this->Hours2Days = $Hours2Days;
      $this->Hours2AnyTime = $Hours2AnyTime;
      $this->Hours2From = $Hours2From;
      $this->Hours2To = $Hours2To;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getTimeZoneID()
    {
      return $this->TimeZoneID;
    }

    /**
     * @param string $TimeZoneID
     * @return \EbayWsdl\Classes\ContactHoursDetailsType
     */
    public function setTimeZoneID($TimeZoneID)
    {
      $this->TimeZoneID = $TimeZoneID;
      return $this;
    }

    /**
     * @return DaysCodeType
     */
    public function getHours1Days()
    {
      return $this->Hours1Days;
    }

    /**
     * @param DaysCodeType $Hours1Days
     * @return \EbayWsdl\Classes\ContactHoursDetailsType
     */
    public function setHours1Days($Hours1Days)
    {
      $this->Hours1Days = $Hours1Days;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHours1AnyTime()
    {
      return $this->Hours1AnyTime;
    }

    /**
     * @param boolean $Hours1AnyTime
     * @return \EbayWsdl\Classes\ContactHoursDetailsType
     */
    public function setHours1AnyTime($Hours1AnyTime)
    {
      $this->Hours1AnyTime = $Hours1AnyTime;
      return $this;
    }

    /**
     * @return time
     */
    public function getHours1From()
    {
      return $this->Hours1From;
    }

    /**
     * @param time $Hours1From
     * @return \EbayWsdl\Classes\ContactHoursDetailsType
     */
    public function setHours1From($Hours1From)
    {
      $this->Hours1From = $Hours1From;
      return $this;
    }

    /**
     * @return time
     */
    public function getHours1To()
    {
      return $this->Hours1To;
    }

    /**
     * @param time $Hours1To
     * @return \EbayWsdl\Classes\ContactHoursDetailsType
     */
    public function setHours1To($Hours1To)
    {
      $this->Hours1To = $Hours1To;
      return $this;
    }

    /**
     * @return DaysCodeType
     */
    public function getHours2Days()
    {
      return $this->Hours2Days;
    }

    /**
     * @param DaysCodeType $Hours2Days
     * @return \EbayWsdl\Classes\ContactHoursDetailsType
     */
    public function setHours2Days($Hours2Days)
    {
      $this->Hours2Days = $Hours2Days;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHours2AnyTime()
    {
      return $this->Hours2AnyTime;
    }

    /**
     * @param boolean $Hours2AnyTime
     * @return \EbayWsdl\Classes\ContactHoursDetailsType
     */
    public function setHours2AnyTime($Hours2AnyTime)
    {
      $this->Hours2AnyTime = $Hours2AnyTime;
      return $this;
    }

    /**
     * @return time
     */
    public function getHours2From()
    {
      return $this->Hours2From;
    }

    /**
     * @param time $Hours2From
     * @return \EbayWsdl\Classes\ContactHoursDetailsType
     */
    public function setHours2From($Hours2From)
    {
      $this->Hours2From = $Hours2From;
      return $this;
    }

    /**
     * @return time
     */
    public function getHours2To()
    {
      return $this->Hours2To;
    }

    /**
     * @param time $Hours2To
     * @return \EbayWsdl\Classes\ContactHoursDetailsType
     */
    public function setHours2To($Hours2To)
    {
      $this->Hours2To = $Hours2To;
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
     * @return \EbayWsdl\Classes\ContactHoursDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
