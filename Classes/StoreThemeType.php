<?php

namespace EbayWsdl\Classes;

class StoreThemeType
{

    /**
     * @var int $ThemeID
     */
    protected $ThemeID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var StoreColorSchemeType $ColorScheme
     */
    protected $ColorScheme = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $ThemeID
     * @param string $Name
     * @param StoreColorSchemeType $ColorScheme
     * @param string $any
     */
    public function __construct($ThemeID = null, $Name = null, $ColorScheme = null, $any = null)
    {
      $this->ThemeID = $ThemeID;
      $this->Name = $Name;
      $this->ColorScheme = $ColorScheme;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\StoreThemeType
     */
    public function setThemeID($ThemeID)
    {
      $this->ThemeID = $ThemeID;
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
     * @return \EbayWsdl\Classes\StoreThemeType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return StoreColorSchemeType
     */
    public function getColorScheme()
    {
      return $this->ColorScheme;
    }

    /**
     * @param StoreColorSchemeType $ColorScheme
     * @return \EbayWsdl\Classes\StoreThemeType
     */
    public function setColorScheme($ColorScheme)
    {
      $this->ColorScheme = $ColorScheme;
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
     * @return \EbayWsdl\Classes\StoreThemeType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
