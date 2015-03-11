<?php

namespace EbayWsdl\Classes;

class RegionOfOriginDetailsType
{

    /**
     * @var string $RegionOfOrigin
     */
    protected $RegionOfOrigin = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var StatusCodeType $Status
     */
    protected $Status = null;

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
     * @param string $RegionOfOrigin
     * @param string $Description
     * @param StatusCodeType $Status
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($RegionOfOrigin = null, $Description = null, $Status = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->RegionOfOrigin = $RegionOfOrigin;
      $this->Description = $Description;
      $this->Status = $Status;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getRegionOfOrigin()
    {
      return $this->RegionOfOrigin;
    }

    /**
     * @param string $RegionOfOrigin
     * @return \EbayWsdl\Classes\RegionOfOriginDetailsType
     */
    public function setRegionOfOrigin($RegionOfOrigin)
    {
      $this->RegionOfOrigin = $RegionOfOrigin;
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
     * @return \EbayWsdl\Classes\RegionOfOriginDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param StatusCodeType $Status
     * @return \EbayWsdl\Classes\RegionOfOriginDetailsType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \EbayWsdl\Classes\RegionOfOriginDetailsType
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
     * @return \EbayWsdl\Classes\RegionOfOriginDetailsType
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
     * @return \EbayWsdl\Classes\RegionOfOriginDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
