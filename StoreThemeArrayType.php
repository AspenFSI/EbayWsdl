<?php

namespace EbayWsdl;

class StoreThemeArrayType
{

    /**
     * @var StoreThemeType[] $Theme
     */
    protected $Theme = null;

    /**
     * @var StoreColorSchemeArrayType $GenericColorSchemeArray
     */
    protected $GenericColorSchemeArray = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param StoreThemeType[] $Theme
     * @param StoreColorSchemeArrayType $GenericColorSchemeArray
     * @param string $any
     */
    public function __construct(array $Theme = null, $GenericColorSchemeArray = null, $any = null)
    {
      $this->Theme = $Theme;
      $this->GenericColorSchemeArray = $GenericColorSchemeArray;
      $this->any = $any;
    }

    /**
     * @return StoreThemeType[]
     */
    public function getTheme()
    {
      return $this->Theme;
    }

    /**
     * @param StoreThemeType[] $Theme
     * @return \EbayWsdl\StoreThemeArrayType
     */
    public function setTheme(array $Theme)
    {
      $this->Theme = $Theme;
      return $this;
    }

    /**
     * @return StoreColorSchemeArrayType
     */
    public function getGenericColorSchemeArray()
    {
      return $this->GenericColorSchemeArray;
    }

    /**
     * @param StoreColorSchemeArrayType $GenericColorSchemeArray
     * @return \EbayWsdl\StoreThemeArrayType
     */
    public function setGenericColorSchemeArray($GenericColorSchemeArray)
    {
      $this->GenericColorSchemeArray = $GenericColorSchemeArray;
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
     * @return \EbayWsdl\StoreThemeArrayType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
