<?php

namespace EbayWsdl\Classes;

class MaximumUnpaidItemStrikesDurationDetailsType
{

    /**
     * @var PeriodCodeType $Period
     */
    protected $Period = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PeriodCodeType $Period
     * @param string $Description
     * @param string $any
     */
    public function __construct($Period = null, $Description = null, $any = null)
    {
      $this->Period = $Period;
      $this->Description = $Description;
      $this->any = $any;
    }

    /**
     * @return PeriodCodeType
     */
    public function getPeriod()
    {
      return $this->Period;
    }

    /**
     * @param PeriodCodeType $Period
     * @return \EbayWsdl\Classes\MaximumUnpaidItemStrikesDurationDetailsType
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\Classes\MaximumUnpaidItemStrikesDurationDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \EbayWsdl\Classes\MaximumUnpaidItemStrikesDurationDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
