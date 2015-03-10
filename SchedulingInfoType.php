<?php

namespace EbayWsdl;

class SchedulingInfoType
{

    /**
     * @var int $MaxScheduledMinutes
     */
    protected $MaxScheduledMinutes = null;

    /**
     * @var int $MinScheduledMinutes
     */
    protected $MinScheduledMinutes = null;

    /**
     * @var int $MaxScheduledItems
     */
    protected $MaxScheduledItems = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $MaxScheduledMinutes
     * @param int $MinScheduledMinutes
     * @param int $MaxScheduledItems
     * @param string $any
     */
    public function __construct($MaxScheduledMinutes = null, $MinScheduledMinutes = null, $MaxScheduledItems = null, $any = null)
    {
      $this->MaxScheduledMinutes = $MaxScheduledMinutes;
      $this->MinScheduledMinutes = $MinScheduledMinutes;
      $this->MaxScheduledItems = $MaxScheduledItems;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getMaxScheduledMinutes()
    {
      return $this->MaxScheduledMinutes;
    }

    /**
     * @param int $MaxScheduledMinutes
     * @return \EbayWsdl\SchedulingInfoType
     */
    public function setMaxScheduledMinutes($MaxScheduledMinutes)
    {
      $this->MaxScheduledMinutes = $MaxScheduledMinutes;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinScheduledMinutes()
    {
      return $this->MinScheduledMinutes;
    }

    /**
     * @param int $MinScheduledMinutes
     * @return \EbayWsdl\SchedulingInfoType
     */
    public function setMinScheduledMinutes($MinScheduledMinutes)
    {
      $this->MinScheduledMinutes = $MinScheduledMinutes;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxScheduledItems()
    {
      return $this->MaxScheduledItems;
    }

    /**
     * @param int $MaxScheduledItems
     * @return \EbayWsdl\SchedulingInfoType
     */
    public function setMaxScheduledItems($MaxScheduledItems)
    {
      $this->MaxScheduledItems = $MaxScheduledItems;
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
     * @return \EbayWsdl\SchedulingInfoType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
