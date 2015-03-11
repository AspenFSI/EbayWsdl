<?php

namespace EbayWsdl\Classes;

class SiteWideCharacteristicsType
{

    /**
     * @var CharacteristicsSetType $CharacteristicsSet
     */
    protected $CharacteristicsSet = null;

    /**
     * @var string[] $ExcludeCategoryID
     */
    protected $ExcludeCategoryID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param CharacteristicsSetType $CharacteristicsSet
     * @param string[] $ExcludeCategoryID
     * @param string $any
     */
    public function __construct($CharacteristicsSet = null, array $ExcludeCategoryID = null, $any = null)
    {
      $this->CharacteristicsSet = $CharacteristicsSet;
      $this->ExcludeCategoryID = $ExcludeCategoryID;
      $this->any = $any;
    }

    /**
     * @return CharacteristicsSetType
     */
    public function getCharacteristicsSet()
    {
      return $this->CharacteristicsSet;
    }

    /**
     * @param CharacteristicsSetType $CharacteristicsSet
     * @return \EbayWsdl\Classes\SiteWideCharacteristicsType
     */
    public function setCharacteristicsSet($CharacteristicsSet)
    {
      $this->CharacteristicsSet = $CharacteristicsSet;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getExcludeCategoryID()
    {
      return $this->ExcludeCategoryID;
    }

    /**
     * @param string[] $ExcludeCategoryID
     * @return \EbayWsdl\Classes\SiteWideCharacteristicsType
     */
    public function setExcludeCategoryID(array $ExcludeCategoryID)
    {
      $this->ExcludeCategoryID = $ExcludeCategoryID;
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
     * @return \EbayWsdl\Classes\SiteWideCharacteristicsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
