<?php

namespace EbayWsdl\Classes;

class DispatchTimeMaxDetailsType
{

    /**
     * @var int $DispatchTimeMax
     */
    protected $DispatchTimeMax = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var boolean $ExtendedHandling
     */
    protected $ExtendedHandling = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $DispatchTimeMax
     * @param string $Description
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param boolean $ExtendedHandling
     * @param string $any
     */
    public function __construct($DispatchTimeMax = null, $Description = null, $DetailVersion = null, \DateTime $UpdateTime = null, $ExtendedHandling = null, $any = null)
    {
      $this->DispatchTimeMax = $DispatchTimeMax;
      $this->Description = $Description;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->ExtendedHandling = $ExtendedHandling;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getDispatchTimeMax()
    {
      return $this->DispatchTimeMax;
    }

    /**
     * @param int $DispatchTimeMax
     * @return \EbayWsdl\Classes\DispatchTimeMaxDetailsType
     */
    public function setDispatchTimeMax($DispatchTimeMax)
    {
      $this->DispatchTimeMax = $DispatchTimeMax;
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
     * @return \EbayWsdl\Classes\DispatchTimeMaxDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \EbayWsdl\Classes\DispatchTimeMaxDetailsType
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
     * @return \EbayWsdl\Classes\DispatchTimeMaxDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExtendedHandling()
    {
      return $this->ExtendedHandling;
    }

    /**
     * @param boolean $ExtendedHandling
     * @return \EbayWsdl\Classes\DispatchTimeMaxDetailsType
     */
    public function setExtendedHandling($ExtendedHandling)
    {
      $this->ExtendedHandling = $ExtendedHandling;
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
     * @return \EbayWsdl\Classes\DispatchTimeMaxDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
