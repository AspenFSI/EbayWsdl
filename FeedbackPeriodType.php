<?php

namespace EbayWsdl;

class FeedbackPeriodType
{

    /**
     * @var int $PeriodInDays
     */
    protected $PeriodInDays = null;

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $PeriodInDays
     * @param int $Count
     * @param string $any
     */
    public function __construct($PeriodInDays = null, $Count = null, $any = null)
    {
      $this->PeriodInDays = $PeriodInDays;
      $this->Count = $Count;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getPeriodInDays()
    {
      return $this->PeriodInDays;
    }

    /**
     * @param int $PeriodInDays
     * @return \EbayWsdl\FeedbackPeriodType
     */
    public function setPeriodInDays($PeriodInDays)
    {
      $this->PeriodInDays = $PeriodInDays;
      return $this;
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
     * @return \EbayWsdl\FeedbackPeriodType
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
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
     * @return \EbayWsdl\FeedbackPeriodType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
