<?php

namespace EbayWsdl\Classes;

class TimeRangeType
{

    /**
     * @var \DateTime $TimeFrom
     */
    protected $TimeFrom = null;

    /**
     * @var \DateTime $TimeTo
     */
    protected $TimeTo = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param \DateTime $TimeFrom
     * @param \DateTime $TimeTo
     * @param string $any
     */
    public function __construct(\DateTime $TimeFrom = null, \DateTime $TimeTo = null, $any = null)
    {
      $this->TimeFrom = $TimeFrom ? $TimeFrom->format(\DateTime::ATOM) : null;
      $this->TimeTo = $TimeTo ? $TimeTo->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return \DateTime
     */
    public function getTimeFrom()
    {
      if ($this->TimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeFrom
     * @return \EbayWsdl\Classes\TimeRangeType
     */
    public function setTimeFrom(\DateTime $TimeFrom)
    {
      $this->TimeFrom = $TimeFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeTo()
    {
      if ($this->TimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeTo
     * @return \EbayWsdl\Classes\TimeRangeType
     */
    public function setTimeTo(\DateTime $TimeTo)
    {
      $this->TimeTo = $TimeTo->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\TimeRangeType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
