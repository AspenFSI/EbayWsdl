<?php

namespace EbayWsdl;

class PictureManagerPictureDisplayType
{

    /**
     * @var PictureManagerPictureDisplayTypeCodeType $DisplayType
     */
    protected $DisplayType = null;

    /**
     * @var anyURI $URL
     */
    protected $URL = null;

    /**
     * @var int $Size
     */
    protected $Size = null;

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @var int $Width
     */
    protected $Width = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PictureManagerPictureDisplayTypeCodeType $DisplayType
     * @param anyURI $URL
     * @param int $Size
     * @param int $Height
     * @param int $Width
     * @param string $any
     */
    public function __construct($DisplayType = null, $URL = null, $Size = null, $Height = null, $Width = null, $any = null)
    {
      $this->DisplayType = $DisplayType;
      $this->URL = $URL;
      $this->Size = $Size;
      $this->Height = $Height;
      $this->Width = $Width;
      $this->any = $any;
    }

    /**
     * @return PictureManagerPictureDisplayTypeCodeType
     */
    public function getDisplayType()
    {
      return $this->DisplayType;
    }

    /**
     * @param PictureManagerPictureDisplayTypeCodeType $DisplayType
     * @return \EbayWsdl\PictureManagerPictureDisplayType
     */
    public function setDisplayType($DisplayType)
    {
      $this->DisplayType = $DisplayType;
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
     * @return \EbayWsdl\PictureManagerPictureDisplayType
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
      return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
      return $this->Size;
    }

    /**
     * @param int $Size
     * @return \EbayWsdl\PictureManagerPictureDisplayType
     */
    public function setSize($Size)
    {
      $this->Size = $Size;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param int $Height
     * @return \EbayWsdl\PictureManagerPictureDisplayType
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param int $Width
     * @return \EbayWsdl\PictureManagerPictureDisplayType
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
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
     * @return \EbayWsdl\PictureManagerPictureDisplayType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
