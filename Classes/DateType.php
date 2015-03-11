<?php

namespace EbayWsdl\Classes;

class DateType
{

    /**
     * @var int $Year
     */
    protected $Year = null;

    /**
     * @var int $Month
     */
    protected $Month = null;

    /**
     * @var int $Day
     */
    protected $Day = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $Year
     * @param int $Month
     * @param int $Day
     * @param string $any
     */
    public function __construct($Year = null, $Month = null, $Day = null, $any = null)
    {
      $this->Year = $Year;
      $this->Month = $Month;
      $this->Day = $Day;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getYear()
    {
      return $this->Year;
    }

    /**
     * @param int $Year
     * @return \EbayWsdl\Classes\DateType
     */
    public function setYear($Year)
    {
      $this->Year = $Year;
      return $this;
    }

    /**
     * @return int
     */
    public function getMonth()
    {
      return $this->Month;
    }

    /**
     * @param int $Month
     * @return \EbayWsdl\Classes\DateType
     */
    public function setMonth($Month)
    {
      $this->Month = $Month;
      return $this;
    }

    /**
     * @return int
     */
    public function getDay()
    {
      return $this->Day;
    }

    /**
     * @param int $Day
     * @return \EbayWsdl\Classes\DateType
     */
    public function setDay($Day)
    {
      $this->Day = $Day;
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
     * @return \EbayWsdl\Classes\DateType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
