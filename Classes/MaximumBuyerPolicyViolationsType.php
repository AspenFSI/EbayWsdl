<?php

namespace EbayWsdl\Classes;

class MaximumBuyerPolicyViolationsType
{

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @var PeriodCodeType $Period
     */
    protected $Period = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $Count
     * @param PeriodCodeType $Period
     * @param string $any
     */
    public function __construct($Count = null, $Period = null, $any = null)
    {
      $this->Count = $Count;
      $this->Period = $Period;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \EbayWsdl\Classes\MaximumBuyerPolicyViolationsType
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
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
     * @return \EbayWsdl\Classes\MaximumBuyerPolicyViolationsType
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
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
     * @return \EbayWsdl\Classes\MaximumBuyerPolicyViolationsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
