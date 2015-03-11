<?php

namespace EbayWsdl\Classes;

class ApiAccessRuleType
{

    /**
     * @var string $CallName
     */
    protected $CallName = null;

    /**
     * @var boolean $CountsTowardAggregate
     */
    protected $CountsTowardAggregate = null;

    /**
     * @var int $DailyHardLimit
     */
    protected $DailyHardLimit = null;

    /**
     * @var int $DailySoftLimit
     */
    protected $DailySoftLimit = null;

    /**
     * @var int $DailyUsage
     */
    protected $DailyUsage = null;

    /**
     * @var int $HourlyHardLimit
     */
    protected $HourlyHardLimit = null;

    /**
     * @var int $HourlySoftLimit
     */
    protected $HourlySoftLimit = null;

    /**
     * @var int $HourlyUsage
     */
    protected $HourlyUsage = null;

    /**
     * @var int $Period
     */
    protected $Period = null;

    /**
     * @var int $PeriodicHardLimit
     */
    protected $PeriodicHardLimit = null;

    /**
     * @var int $PeriodicSoftLimit
     */
    protected $PeriodicSoftLimit = null;

    /**
     * @var int $PeriodicUsage
     */
    protected $PeriodicUsage = null;

    /**
     * @var \DateTime $PeriodicStartDate
     */
    protected $PeriodicStartDate = null;

    /**
     * @var \DateTime $ModTime
     */
    protected $ModTime = null;

    /**
     * @var AccessRuleCurrentStatusCodeType $RuleCurrentStatus
     */
    protected $RuleCurrentStatus = null;

    /**
     * @var AccessRuleStatusCodeType $RuleStatus
     */
    protected $RuleStatus = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $CallName
     * @param boolean $CountsTowardAggregate
     * @param int $DailyHardLimit
     * @param int $DailySoftLimit
     * @param int $DailyUsage
     * @param int $HourlyHardLimit
     * @param int $HourlySoftLimit
     * @param int $HourlyUsage
     * @param int $Period
     * @param int $PeriodicHardLimit
     * @param int $PeriodicSoftLimit
     * @param int $PeriodicUsage
     * @param \DateTime $PeriodicStartDate
     * @param \DateTime $ModTime
     * @param AccessRuleCurrentStatusCodeType $RuleCurrentStatus
     * @param AccessRuleStatusCodeType $RuleStatus
     * @param string $any
     */
    public function __construct($CallName = null, $CountsTowardAggregate = null, $DailyHardLimit = null, $DailySoftLimit = null, $DailyUsage = null, $HourlyHardLimit = null, $HourlySoftLimit = null, $HourlyUsage = null, $Period = null, $PeriodicHardLimit = null, $PeriodicSoftLimit = null, $PeriodicUsage = null, \DateTime $PeriodicStartDate = null, \DateTime $ModTime = null, $RuleCurrentStatus = null, $RuleStatus = null, $any = null)
    {
      $this->CallName = $CallName;
      $this->CountsTowardAggregate = $CountsTowardAggregate;
      $this->DailyHardLimit = $DailyHardLimit;
      $this->DailySoftLimit = $DailySoftLimit;
      $this->DailyUsage = $DailyUsage;
      $this->HourlyHardLimit = $HourlyHardLimit;
      $this->HourlySoftLimit = $HourlySoftLimit;
      $this->HourlyUsage = $HourlyUsage;
      $this->Period = $Period;
      $this->PeriodicHardLimit = $PeriodicHardLimit;
      $this->PeriodicSoftLimit = $PeriodicSoftLimit;
      $this->PeriodicUsage = $PeriodicUsage;
      $this->PeriodicStartDate = $PeriodicStartDate ? $PeriodicStartDate->format(\DateTime::ATOM) : null;
      $this->ModTime = $ModTime ? $ModTime->format(\DateTime::ATOM) : null;
      $this->RuleCurrentStatus = $RuleCurrentStatus;
      $this->RuleStatus = $RuleStatus;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getCallName()
    {
      return $this->CallName;
    }

    /**
     * @param string $CallName
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setCallName($CallName)
    {
      $this->CallName = $CallName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCountsTowardAggregate()
    {
      return $this->CountsTowardAggregate;
    }

    /**
     * @param boolean $CountsTowardAggregate
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setCountsTowardAggregate($CountsTowardAggregate)
    {
      $this->CountsTowardAggregate = $CountsTowardAggregate;
      return $this;
    }

    /**
     * @return int
     */
    public function getDailyHardLimit()
    {
      return $this->DailyHardLimit;
    }

    /**
     * @param int $DailyHardLimit
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setDailyHardLimit($DailyHardLimit)
    {
      $this->DailyHardLimit = $DailyHardLimit;
      return $this;
    }

    /**
     * @return int
     */
    public function getDailySoftLimit()
    {
      return $this->DailySoftLimit;
    }

    /**
     * @param int $DailySoftLimit
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setDailySoftLimit($DailySoftLimit)
    {
      $this->DailySoftLimit = $DailySoftLimit;
      return $this;
    }

    /**
     * @return int
     */
    public function getDailyUsage()
    {
      return $this->DailyUsage;
    }

    /**
     * @param int $DailyUsage
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setDailyUsage($DailyUsage)
    {
      $this->DailyUsage = $DailyUsage;
      return $this;
    }

    /**
     * @return int
     */
    public function getHourlyHardLimit()
    {
      return $this->HourlyHardLimit;
    }

    /**
     * @param int $HourlyHardLimit
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setHourlyHardLimit($HourlyHardLimit)
    {
      $this->HourlyHardLimit = $HourlyHardLimit;
      return $this;
    }

    /**
     * @return int
     */
    public function getHourlySoftLimit()
    {
      return $this->HourlySoftLimit;
    }

    /**
     * @param int $HourlySoftLimit
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setHourlySoftLimit($HourlySoftLimit)
    {
      $this->HourlySoftLimit = $HourlySoftLimit;
      return $this;
    }

    /**
     * @return int
     */
    public function getHourlyUsage()
    {
      return $this->HourlyUsage;
    }

    /**
     * @param int $HourlyUsage
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setHourlyUsage($HourlyUsage)
    {
      $this->HourlyUsage = $HourlyUsage;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
      return $this->Period;
    }

    /**
     * @param int $Period
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriodicHardLimit()
    {
      return $this->PeriodicHardLimit;
    }

    /**
     * @param int $PeriodicHardLimit
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setPeriodicHardLimit($PeriodicHardLimit)
    {
      $this->PeriodicHardLimit = $PeriodicHardLimit;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriodicSoftLimit()
    {
      return $this->PeriodicSoftLimit;
    }

    /**
     * @param int $PeriodicSoftLimit
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setPeriodicSoftLimit($PeriodicSoftLimit)
    {
      $this->PeriodicSoftLimit = $PeriodicSoftLimit;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriodicUsage()
    {
      return $this->PeriodicUsage;
    }

    /**
     * @param int $PeriodicUsage
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setPeriodicUsage($PeriodicUsage)
    {
      $this->PeriodicUsage = $PeriodicUsage;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodicStartDate()
    {
      if ($this->PeriodicStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PeriodicStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PeriodicStartDate
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setPeriodicStartDate(\DateTime $PeriodicStartDate)
    {
      $this->PeriodicStartDate = $PeriodicStartDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModTime()
    {
      if ($this->ModTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModTime
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setModTime(\DateTime $ModTime)
    {
      $this->ModTime = $ModTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AccessRuleCurrentStatusCodeType
     */
    public function getRuleCurrentStatus()
    {
      return $this->RuleCurrentStatus;
    }

    /**
     * @param AccessRuleCurrentStatusCodeType $RuleCurrentStatus
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setRuleCurrentStatus($RuleCurrentStatus)
    {
      $this->RuleCurrentStatus = $RuleCurrentStatus;
      return $this;
    }

    /**
     * @return AccessRuleStatusCodeType
     */
    public function getRuleStatus()
    {
      return $this->RuleStatus;
    }

    /**
     * @param AccessRuleStatusCodeType $RuleStatus
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setRuleStatus($RuleStatus)
    {
      $this->RuleStatus = $RuleStatus;
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
     * @return \EbayWsdl\Classes\ApiAccessRuleType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
