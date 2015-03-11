<?php

namespace EbayWsdl\Classes;

class PictureManagerPictureType
{

    /**
     * @var anyURI $PictureURL
     */
    protected $PictureURL = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var PictureManagerPictureDisplayType[] $DisplayFormat
     */
    protected $DisplayFormat = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $PictureURL
     * @param string $Name
     * @param \DateTime $Date
     * @param PictureManagerPictureDisplayType[] $DisplayFormat
     * @param string $any
     */
    public function __construct($PictureURL = null, $Name = null, \DateTime $Date = null, array $DisplayFormat = null, $any = null)
    {
      $this->PictureURL = $PictureURL;
      $this->Name = $Name;
      $this->Date = $Date ? $Date->format(\DateTime::ATOM) : null;
      $this->DisplayFormat = $DisplayFormat;
      $this->any = $any;
    }

    /**
     * @return anyURI
     */
    public function getPictureURL()
    {
      return $this->PictureURL;
    }

    /**
     * @param anyURI $PictureURL
     * @return \EbayWsdl\Classes\PictureManagerPictureType
     */
    public function setPictureURL($PictureURL)
    {
      $this->PictureURL = $PictureURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \EbayWsdl\Classes\PictureManagerPictureType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \EbayWsdl\Classes\PictureManagerPictureType
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return PictureManagerPictureDisplayType[]
     */
    public function getDisplayFormat()
    {
      return $this->DisplayFormat;
    }

    /**
     * @param PictureManagerPictureDisplayType[] $DisplayFormat
     * @return \EbayWsdl\Classes\PictureManagerPictureType
     */
    public function setDisplayFormat(array $DisplayFormat)
    {
      $this->DisplayFormat = $DisplayFormat;
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
     * @return \EbayWsdl\Classes\PictureManagerPictureType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
