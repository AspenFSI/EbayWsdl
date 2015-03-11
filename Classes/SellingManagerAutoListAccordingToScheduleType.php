<?php

namespace EbayWsdl\Classes;

class SellingManagerAutoListAccordingToScheduleType
{

    /**
     * @var DayOfWeekCodeType[] $DayOfWeek
     */
    protected $DayOfWeek = null;

    /**
     * @var int $ListingPeriodInWeeks
     */
    protected $ListingPeriodInWeeks = null;

    /**
     * @var time $ListAtSpecificTimeOfDay
     */
    protected $ListAtSpecificTimeOfDay = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var int $MaxActiveItemCount
     */
    protected $MaxActiveItemCount = null;

    /**
     * @var int $ListingHoldInventoryLevel
     */
    protected $ListingHoldInventoryLevel = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param DayOfWeekCodeType[] $DayOfWeek
     * @param int $ListingPeriodInWeeks
     * @param time $ListAtSpecificTimeOfDay
     * @param \DateTime $StartTime
     * @param \DateTime $EndTime
     * @param int $MaxActiveItemCount
     * @param int $ListingHoldInventoryLevel
     * @param string $any
     */
    public function __construct(array $DayOfWeek = null, $ListingPeriodInWeeks = null, $ListAtSpecificTimeOfDay = null, \DateTime $StartTime = null, \DateTime $EndTime = null, $MaxActiveItemCount = null, $ListingHoldInventoryLevel = null, $any = null)
    {
      $this->DayOfWeek = $DayOfWeek;
      $this->ListingPeriodInWeeks = $ListingPeriodInWeeks;
      $this->ListAtSpecificTimeOfDay = $ListAtSpecificTimeOfDay;
      $this->StartTime = $StartTime ? $StartTime->format(\DateTime::ATOM) : null;
      $this->EndTime = $EndTime ? $EndTime->format(\DateTime::ATOM) : null;
      $this->MaxActiveItemCount = $MaxActiveItemCount;
      $this->ListingHoldInventoryLevel = $ListingHoldInventoryLevel;
      $this->any = $any;
    }

    /**
     * @return DayOfWeekCodeType[]
     */
    public function getDayOfWeek()
    {
      return $this->DayOfWeek;
    }

    /**
     * @param DayOfWeekCodeType[] $DayOfWeek
     * @return \EbayWsdl\Classes\SellingManagerAutoListAccordingToScheduleType
     */
    public function setDayOfWeek(array $DayOfWeek)
    {
      $this->DayOfWeek = $DayOfWeek;
      return $this;
    }

    /**
     * @return int
     */
    public function getListingPeriodInWeeks()
    {
      return $this->ListingPeriodInWeeks;
    }

    /**
     * @param int $ListingPeriodInWeeks
     * @return \EbayWsdl\Classes\SellingManagerAutoListAccordingToScheduleType
     */
    public function setListingPeriodInWeeks($ListingPeriodInWeeks)
    {
      $this->ListingPeriodInWeeks = $ListingPeriodInWeeks;
      return $this;
    }

    /**
     * @return time
     */
    public function getListAtSpecificTimeOfDay()
    {
      return $this->ListAtSpecificTimeOfDay;
    }

    /**
     * @param time $ListAtSpecificTimeOfDay
     * @return \EbayWsdl\Classes\SellingManagerAutoListAccordingToScheduleType
     */
    public function setListAtSpecificTimeOfDay($ListAtSpecificTimeOfDay)
    {
      $this->ListAtSpecificTimeOfDay = $ListAtSpecificTimeOfDay;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->StartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTime
     * @return \EbayWsdl\Classes\SellingManagerAutoListAccordingToScheduleType
     */
    public function setStartTime(\DateTime $StartTime)
    {
      $this->StartTime = $StartTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->EndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTime
     * @return \EbayWsdl\Classes\SellingManagerAutoListAccordingToScheduleType
     */
    public function setEndTime(\DateTime $EndTime)
    {
      $this->EndTime = $EndTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxActiveItemCount()
    {
      return $this->MaxActiveItemCount;
    }

    /**
     * @param int $MaxActiveItemCount
     * @return \EbayWsdl\Classes\SellingManagerAutoListAccordingToScheduleType
     */
    public function setMaxActiveItemCount($MaxActiveItemCount)
    {
      $this->MaxActiveItemCount = $MaxActiveItemCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getListingHoldInventoryLevel()
    {
      return $this->ListingHoldInventoryLevel;
    }

    /**
     * @param int $ListingHoldInventoryLevel
     * @return \EbayWsdl\Classes\SellingManagerAutoListAccordingToScheduleType
     */
    public function setListingHoldInventoryLevel($ListingHoldInventoryLevel)
    {
      $this->ListingHoldInventoryLevel = $ListingHoldInventoryLevel;
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
     * @return \EbayWsdl\Classes\SellingManagerAutoListAccordingToScheduleType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
