<?php

namespace EbayWsdl\Classes;

class SiteDetailsType
{

    /**
     * @var SiteCodeType $Site
     */
    protected $Site = null;

    /**
     * @var int $SiteID
     */
    protected $SiteID = null;

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
     * @param SiteCodeType $Site
     * @param int $SiteID
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($Site = null, $SiteID = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->Site = $Site;
      $this->SiteID = $SiteID;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return SiteCodeType
     */
    public function getSite()
    {
      return $this->Site;
    }

    /**
     * @param SiteCodeType $Site
     * @return \EbayWsdl\Classes\SiteDetailsType
     */
    public function setSite($Site)
    {
      $this->Site = $Site;
      return $this;
    }

    /**
     * @return int
     */
    public function getSiteID()
    {
      return $this->SiteID;
    }

    /**
     * @param int $SiteID
     * @return \EbayWsdl\Classes\SiteDetailsType
     */
    public function setSiteID($SiteID)
    {
      $this->SiteID = $SiteID;
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
     * @return \EbayWsdl\Classes\SiteDetailsType
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
     * @return \EbayWsdl\Classes\SiteDetailsType
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
     * @return \EbayWsdl\Classes\SiteDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
