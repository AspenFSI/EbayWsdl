<?php

namespace EbayWsdl\Classes;

class ListingDesignerType
{

    /**
     * @var int $LayoutID
     */
    protected $LayoutID = null;

    /**
     * @var boolean $OptimalPictureSize
     */
    protected $OptimalPictureSize = null;

    /**
     * @var int $ThemeID
     */
    protected $ThemeID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $LayoutID
     * @param boolean $OptimalPictureSize
     * @param int $ThemeID
     * @param string $any
     */
    public function __construct($LayoutID = null, $OptimalPictureSize = null, $ThemeID = null, $any = null)
    {
      $this->LayoutID = $LayoutID;
      $this->OptimalPictureSize = $OptimalPictureSize;
      $this->ThemeID = $ThemeID;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getLayoutID()
    {
      return $this->LayoutID;
    }

    /**
     * @param int $LayoutID
     * @return \EbayWsdl\Classes\ListingDesignerType
     */
    public function setLayoutID($LayoutID)
    {
      $this->LayoutID = $LayoutID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOptimalPictureSize()
    {
      return $this->OptimalPictureSize;
    }

    /**
     * @param boolean $OptimalPictureSize
     * @return \EbayWsdl\Classes\ListingDesignerType
     */
    public function setOptimalPictureSize($OptimalPictureSize)
    {
      $this->OptimalPictureSize = $OptimalPictureSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getThemeID()
    {
      return $this->ThemeID;
    }

    /**
     * @param int $ThemeID
     * @return \EbayWsdl\Classes\ListingDesignerType
     */
    public function setThemeID($ThemeID)
    {
      $this->ThemeID = $ThemeID;
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
     * @return \EbayWsdl\Classes\ListingDesignerType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
