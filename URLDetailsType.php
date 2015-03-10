<?php

namespace EbayWsdl;

class URLDetailsType
{

    /**
     * @var URLTypeCodeType $URLType
     */
    protected $URLType = null;

    /**
     * @var anyURI $URL
     */
    protected $URL = null;

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
     * @param URLTypeCodeType $URLType
     * @param anyURI $URL
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($URLType = null, $URL = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->URLType = $URLType;
      $this->URL = $URL;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return URLTypeCodeType
     */
    public function getURLType()
    {
      return $this->URLType;
    }

    /**
     * @param URLTypeCodeType $URLType
     * @return \EbayWsdl\URLDetailsType
     */
    public function setURLType($URLType)
    {
      $this->URLType = $URLType;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param anyURI $URL
     * @return \EbayWsdl\URLDetailsType
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
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
     * @return \EbayWsdl\URLDetailsType
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
     * @return \EbayWsdl\URLDetailsType
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
     * @return \EbayWsdl\URLDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
