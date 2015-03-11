<?php

namespace EbayWsdl\Classes;

class StoreFontType
{

    /**
     * @var StoreFontFaceCodeType $NameFace
     */
    protected $NameFace = null;

    /**
     * @var StoreFontSizeCodeType $NameSize
     */
    protected $NameSize = null;

    /**
     * @var string $NameColor
     */
    protected $NameColor = null;

    /**
     * @var StoreFontFaceCodeType $TitleFace
     */
    protected $TitleFace = null;

    /**
     * @var StoreFontSizeCodeType $TitleSize
     */
    protected $TitleSize = null;

    /**
     * @var string $TitleColor
     */
    protected $TitleColor = null;

    /**
     * @var StoreFontFaceCodeType $DescFace
     */
    protected $DescFace = null;

    /**
     * @var StoreFontSizeCodeType $DescSize
     */
    protected $DescSize = null;

    /**
     * @var string $DescColor
     */
    protected $DescColor = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param StoreFontFaceCodeType $NameFace
     * @param StoreFontSizeCodeType $NameSize
     * @param string $NameColor
     * @param StoreFontFaceCodeType $TitleFace
     * @param StoreFontSizeCodeType $TitleSize
     * @param string $TitleColor
     * @param StoreFontFaceCodeType $DescFace
     * @param StoreFontSizeCodeType $DescSize
     * @param string $DescColor
     * @param string $any
     */
    public function __construct($NameFace = null, $NameSize = null, $NameColor = null, $TitleFace = null, $TitleSize = null, $TitleColor = null, $DescFace = null, $DescSize = null, $DescColor = null, $any = null)
    {
      $this->NameFace = $NameFace;
      $this->NameSize = $NameSize;
      $this->NameColor = $NameColor;
      $this->TitleFace = $TitleFace;
      $this->TitleSize = $TitleSize;
      $this->TitleColor = $TitleColor;
      $this->DescFace = $DescFace;
      $this->DescSize = $DescSize;
      $this->DescColor = $DescColor;
      $this->any = $any;
    }

    /**
     * @return StoreFontFaceCodeType
     */
    public function getNameFace()
    {
      return $this->NameFace;
    }

    /**
     * @param StoreFontFaceCodeType $NameFace
     * @return \EbayWsdl\Classes\StoreFontType
     */
    public function setNameFace($NameFace)
    {
      $this->NameFace = $NameFace;
      return $this;
    }

    /**
     * @return StoreFontSizeCodeType
     */
    public function getNameSize()
    {
      return $this->NameSize;
    }

    /**
     * @param StoreFontSizeCodeType $NameSize
     * @return \EbayWsdl\Classes\StoreFontType
     */
    public function setNameSize($NameSize)
    {
      $this->NameSize = $NameSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameColor()
    {
      return $this->NameColor;
    }

    /**
     * @param string $NameColor
     * @return \EbayWsdl\Classes\StoreFontType
     */
    public function setNameColor($NameColor)
    {
      $this->NameColor = $NameColor;
      return $this;
    }

    /**
     * @return StoreFontFaceCodeType
     */
    public function getTitleFace()
    {
      return $this->TitleFace;
    }

    /**
     * @param StoreFontFaceCodeType $TitleFace
     * @return \EbayWsdl\Classes\StoreFontType
     */
    public function setTitleFace($TitleFace)
    {
      $this->TitleFace = $TitleFace;
      return $this;
    }

    /**
     * @return StoreFontSizeCodeType
     */
    public function getTitleSize()
    {
      return $this->TitleSize;
    }

    /**
     * @param StoreFontSizeCodeType $TitleSize
     * @return \EbayWsdl\Classes\StoreFontType
     */
    public function setTitleSize($TitleSize)
    {
      $this->TitleSize = $TitleSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitleColor()
    {
      return $this->TitleColor;
    }

    /**
     * @param string $TitleColor
     * @return \EbayWsdl\Classes\StoreFontType
     */
    public function setTitleColor($TitleColor)
    {
      $this->TitleColor = $TitleColor;
      return $this;
    }

    /**
     * @return StoreFontFaceCodeType
     */
    public function getDescFace()
    {
      return $this->DescFace;
    }

    /**
     * @param StoreFontFaceCodeType $DescFace
     * @return \EbayWsdl\Classes\StoreFontType
     */
    public function setDescFace($DescFace)
    {
      $this->DescFace = $DescFace;
      return $this;
    }

    /**
     * @return StoreFontSizeCodeType
     */
    public function getDescSize()
    {
      return $this->DescSize;
    }

    /**
     * @param StoreFontSizeCodeType $DescSize
     * @return \EbayWsdl\Classes\StoreFontType
     */
    public function setDescSize($DescSize)
    {
      $this->DescSize = $DescSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescColor()
    {
      return $this->DescColor;
    }

    /**
     * @param string $DescColor
     * @return \EbayWsdl\Classes\StoreFontType
     */
    public function setDescColor($DescColor)
    {
      $this->DescColor = $DescColor;
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
     * @return \EbayWsdl\Classes\StoreFontType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
