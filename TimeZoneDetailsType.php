<?php

namespace EbayWsdl;

class TimeZoneDetailsType
{

    /**
     * @var string $TimeZoneID
     */
    protected $TimeZoneID = null;

    /**
     * @var string $StandardLabel
     */
    protected $StandardLabel = null;

    /**
     * @var string $StandardOffset
     */
    protected $StandardOffset = null;

    /**
     * @var string $DaylightSavingsLabel
     */
    protected $DaylightSavingsLabel = null;

    /**
     * @var string $DaylightSavingsOffset
     */
    protected $DaylightSavingsOffset = null;

    /**
     * @var boolean $DaylightSavingsInEffect
     */
    protected $DaylightSavingsInEffect = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $TimeZoneID
     * @param string $StandardLabel
     * @param string $StandardOffset
     * @param string $DaylightSavingsLabel
     * @param string $DaylightSavingsOffset
     * @param boolean $DaylightSavingsInEffect
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($TimeZoneID = null, $StandardLabel = null, $StandardOffset = null, $DaylightSavingsLabel = null, $DaylightSavingsOffset = null, $DaylightSavingsInEffect = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->TimeZoneID = $TimeZoneID;
      $this->StandardLabel = $StandardLabel;
      $this->StandardOffset = $StandardOffset;
      $this->DaylightSavingsLabel = $DaylightSavingsLabel;
      $this->DaylightSavingsOffset = $DaylightSavingsOffset;
      $this->DaylightSavingsInEffect = $DaylightSavingsInEffect;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getTimeZoneID()
    {
      return $this->TimeZoneID;
    }

    /**
     * @param string $TimeZoneID
     * @return \EbayWsdl\TimeZoneDetailsType
     */
    public function setTimeZoneID($TimeZoneID)
    {
      $this->TimeZoneID = $TimeZoneID;
      return $this;
    }

    /**
     * @return string
     */
    public function getStandardLabel()
    {
      return $this->StandardLabel;
    }

    /**
     * @param string $StandardLabel
     * @return \EbayWsdl\TimeZoneDetailsType
     */
    public function setStandardLabel($StandardLabel)
    {
      $this->StandardLabel = $StandardLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getStandardOffset()
    {
      return $this->StandardOffset;
    }

    /**
     * @param string $StandardOffset
     * @return \EbayWsdl\TimeZoneDetailsType
     */
    public function setStandardOffset($StandardOffset)
    {
      $this->StandardOffset = $StandardOffset;
      return $this;
    }

    /**
     * @return string
     */
    public function getDaylightSavingsLabel()
    {
      return $this->DaylightSavingsLabel;
    }

    /**
     * @param string $DaylightSavingsLabel
     * @return \EbayWsdl\TimeZoneDetailsType
     */
    public function setDaylightSavingsLabel($DaylightSavingsLabel)
    {
      $this->DaylightSavingsLabel = $DaylightSavingsLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getDaylightSavingsOffset()
    {
      return $this->DaylightSavingsOffset;
    }

    /**
     * @param string $DaylightSavingsOffset
     * @return \EbayWsdl\TimeZoneDetailsType
     */
    public function setDaylightSavingsOffset($DaylightSavingsOffset)
    {
      $this->DaylightSavingsOffset = $DaylightSavingsOffset;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDaylightSavingsInEffect()
    {
      return $this->DaylightSavingsInEffect;
    }

    /**
     * @param boolean $DaylightSavingsInEffect
     * @return \EbayWsdl\TimeZoneDetailsType
     */
    public function setDaylightSavingsInEffect($DaylightSavingsInEffect)
    {
      $this->DaylightSavingsInEffect = $DaylightSavingsInEffect;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailVersion()
    {
      return $this->DetailVersion;
    }

    /**
     * @param string $DetailVersion
     * @return \EbayWsdl\TimeZoneDetailsType
     */
    public function setDetailVersion($DetailVersion)
    {
      $this->DetailVersion = $DetailVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\TimeZoneDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\TimeZoneDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
