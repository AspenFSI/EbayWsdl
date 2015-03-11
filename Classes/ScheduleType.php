<?php

namespace EbayWsdl\Classes;

class ScheduleType
{

    /**
     * @var int $ScheduleID
     */
    protected $ScheduleID = null;

    /**
     * @var \DateTime $ScheduleTime
     */
    protected $ScheduleTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $ScheduleID
     * @param \DateTime $ScheduleTime
     * @param string $any
     */
    public function __construct($ScheduleID = null, \DateTime $ScheduleTime = null, $any = null)
    {
      $this->ScheduleID = $ScheduleID;
      $this->ScheduleTime = $ScheduleTime ? $ScheduleTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getScheduleID()
    {
      return $this->ScheduleID;
    }

    /**
     * @param int $ScheduleID
     * @return \EbayWsdl\Classes\ScheduleType
     */
    public function setScheduleID($ScheduleID)
    {
      $this->ScheduleID = $ScheduleID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduleTime()
    {
      if ($this->ScheduleTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScheduleTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScheduleTime
     * @return \EbayWsdl\Classes\ScheduleType
     */
    public function setScheduleTime(\DateTime $ScheduleTime)
    {
      $this->ScheduleTime = $ScheduleTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\ScheduleType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
