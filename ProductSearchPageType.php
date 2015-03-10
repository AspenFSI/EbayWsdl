<?php

namespace EbayWsdl;

class ProductSearchPageType
{

    /**
     * @var CharacteristicsSetType $SearchCharacteristicsSet
     */
    protected $SearchCharacteristicsSet = null;

    /**
     * @var CharacteristicsSearchCodeType $SearchType
     */
    protected $SearchType = null;

    /**
     * @var CharacteristicType[] $SortCharacteristics
     */
    protected $SortCharacteristics = null;

    /**
     * @var DataElementSetType[] $DataElementSet
     */
    protected $DataElementSet = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param CharacteristicsSetType $SearchCharacteristicsSet
     * @param CharacteristicsSearchCodeType $SearchType
     * @param CharacteristicType[] $SortCharacteristics
     * @param DataElementSetType[] $DataElementSet
     * @param string $any
     */
    public function __construct($SearchCharacteristicsSet = null, $SearchType = null, array $SortCharacteristics = null, array $DataElementSet = null, $any = null)
    {
      $this->SearchCharacteristicsSet = $SearchCharacteristicsSet;
      $this->SearchType = $SearchType;
      $this->SortCharacteristics = $SortCharacteristics;
      $this->DataElementSet = $DataElementSet;
      $this->any = $any;
    }

    /**
     * @return CharacteristicsSetType
     */
    public function getSearchCharacteristicsSet()
    {
      return $this->SearchCharacteristicsSet;
    }

    /**
     * @param CharacteristicsSetType $SearchCharacteristicsSet
     * @return \EbayWsdl\ProductSearchPageType
     */
    public function setSearchCharacteristicsSet($SearchCharacteristicsSet)
    {
      $this->SearchCharacteristicsSet = $SearchCharacteristicsSet;
      return $this;
    }

    /**
     * @return CharacteristicsSearchCodeType
     */
    public function getSearchType()
    {
      return $this->SearchType;
    }

    /**
     * @param CharacteristicsSearchCodeType $SearchType
     * @return \EbayWsdl\ProductSearchPageType
     */
    public function setSearchType($SearchType)
    {
      $this->SearchType = $SearchType;
      return $this;
    }

    /**
     * @return CharacteristicType[]
     */
    public function getSortCharacteristics()
    {
      return $this->SortCharacteristics;
    }

    /**
     * @param CharacteristicType[] $SortCharacteristics
     * @return \EbayWsdl\ProductSearchPageType
     */
    public function setSortCharacteristics(array $SortCharacteristics)
    {
      $this->SortCharacteristics = $SortCharacteristics;
      return $this;
    }

    /**
     * @return DataElementSetType[]
     */
    public function getDataElementSet()
    {
      return $this->DataElementSet;
    }

    /**
     * @param DataElementSetType[] $DataElementSet
     * @return \EbayWsdl\ProductSearchPageType
     */
    public function setDataElementSet(array $DataElementSet)
    {
      $this->DataElementSet = $DataElementSet;
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
     * @return \EbayWsdl\ProductSearchPageType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
