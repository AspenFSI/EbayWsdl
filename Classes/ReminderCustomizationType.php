<?php

namespace EbayWsdl\Classes;

class ReminderCustomizationType
{

    /**
     * @var int $DurationInDays
     */
    protected $DurationInDays = null;

    /**
     * @var boolean $Include
     */
    protected $Include = null;

    /**
     * @param int $DurationInDays
     * @param boolean $Include
     */
    public function __construct($DurationInDays = null, $Include = null)
    {
      $this->DurationInDays = $DurationInDays;
      $this->Include = $Include;
    }

    /**
     * @return int
     */
    public function getDurationInDays()
    {
      return $this->DurationInDays;
    }

    /**
     * @param int $DurationInDays
     * @return \EbayWsdl\Classes\ReminderCustomizationType
     */
    public function setDurationInDays($DurationInDays)
    {
      $this->DurationInDays = $DurationInDays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInclude()
    {
      return $this->Include;
    }

    /**
     * @param boolean $Include
     * @return \EbayWsdl\Classes\ReminderCustomizationType
     */
    public function setInclude($Include)
    {
      $this->Include = $Include;
      return $this;
    }

}
