<?php

namespace EbayWsdl;

class StoreColorSchemeType
{

    /**
     * @var int $ColorSchemeID
     */
    protected $ColorSchemeID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var StoreColorType $Color
     */
    protected $Color = null;

    /**
     * @var StoreFontType $Font
     */
    protected $Font = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $ColorSchemeID
     * @param string $Name
     * @param StoreColorType $Color
     * @param StoreFontType $Font
     * @param string $any
     */
    public function __construct($ColorSchemeID = null, $Name = null, $Color = null, $Font = null, $any = null)
    {
      $this->ColorSchemeID = $ColorSchemeID;
      $this->Name = $Name;
      $this->Color = $Color;
      $this->Font = $Font;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getColorSchemeID()
    {
      return $this->ColorSchemeID;
    }

    /**
     * @param int $ColorSchemeID
     * @return \EbayWsdl\StoreColorSchemeType
     */
    public function setColorSchemeID($ColorSchemeID)
    {
      $this->ColorSchemeID = $ColorSchemeID;
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
     * @return \EbayWsdl\StoreColorSchemeType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return StoreColorType
     */
    public function getColor()
    {
      return $this->Color;
    }

    /**
     * @param StoreColorType $Color
     * @return \EbayWsdl\StoreColorSchemeType
     */
    public function setColor($Color)
    {
      $this->Color = $Color;
      return $this;
    }

    /**
     * @return StoreFontType
     */
    public function getFont()
    {
      return $this->Font;
    }

    /**
     * @param StoreFontType $Font
     * @return \EbayWsdl\StoreColorSchemeType
     */
    public function setFont($Font)
    {
      $this->Font = $Font;
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
     * @return \EbayWsdl\StoreColorSchemeType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
