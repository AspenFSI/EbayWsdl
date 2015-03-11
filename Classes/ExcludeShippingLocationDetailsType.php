<?php

namespace EbayWsdl\Classes;

class ExcludeShippingLocationDetailsType
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $Region
     */
    protected $Region = null;

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
     * @param string $Description
     * @param string $Location
     * @param string $Region
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($Description = null, $Location = null, $Region = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->Description = $Description;
      $this->Location = $Location;
      $this->Region = $Region;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\ExcludeShippingLocationDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return \EbayWsdl\Classes\ExcludeShippingLocationDetailsType
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
      return $this->Region;
    }

    /**
     * @param string $Region
     * @return \EbayWsdl\Classes\ExcludeShippingLocationDetailsType
     */
    public function setRegion($Region)
    {
      $this->Region = $Region;
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
     * @return \EbayWsdl\Classes\ExcludeShippingLocationDetailsType
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
     * @return \EbayWsdl\Classes\ExcludeShippingLocationDetailsType
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
     * @return \EbayWsdl\Classes\ExcludeShippingLocationDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
