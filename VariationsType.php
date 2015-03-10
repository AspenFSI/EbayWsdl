<?php

namespace EbayWsdl;

class VariationsType
{

    /**
     * @var VariationType[] $Variation
     */
    protected $Variation = null;

    /**
     * @var PicturesType[] $Pictures
     */
    protected $Pictures = null;

    /**
     * @var NameValueListArrayType $VariationSpecificsSet
     */
    protected $VariationSpecificsSet = null;

    /**
     * @var ModifyNameArrayType $ModifyNameList
     */
    protected $ModifyNameList = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param VariationType[] $Variation
     * @param PicturesType[] $Pictures
     * @param NameValueListArrayType $VariationSpecificsSet
     * @param ModifyNameArrayType $ModifyNameList
     * @param string $any
     */
    public function __construct(array $Variation = null, array $Pictures = null, $VariationSpecificsSet = null, $ModifyNameList = null, $any = null)
    {
      $this->Variation = $Variation;
      $this->Pictures = $Pictures;
      $this->VariationSpecificsSet = $VariationSpecificsSet;
      $this->ModifyNameList = $ModifyNameList;
      $this->any = $any;
    }

    /**
     * @return VariationType[]
     */
    public function getVariation()
    {
      return $this->Variation;
    }

    /**
     * @param VariationType[] $Variation
     * @return \EbayWsdl\VariationsType
     */
    public function setVariation(array $Variation)
    {
      $this->Variation = $Variation;
      return $this;
    }

    /**
     * @return PicturesType[]
     */
    public function getPictures()
    {
      return $this->Pictures;
    }

    /**
     * @param PicturesType[] $Pictures
     * @return \EbayWsdl\VariationsType
     */
    public function setPictures(array $Pictures)
    {
      $this->Pictures = $Pictures;
      return $this;
    }

    /**
     * @return NameValueListArrayType
     */
    public function getVariationSpecificsSet()
    {
      return $this->VariationSpecificsSet;
    }

    /**
     * @param NameValueListArrayType $VariationSpecificsSet
     * @return \EbayWsdl\VariationsType
     */
    public function setVariationSpecificsSet($VariationSpecificsSet)
    {
      $this->VariationSpecificsSet = $VariationSpecificsSet;
      return $this;
    }

    /**
     * @return ModifyNameArrayType
     */
    public function getModifyNameList()
    {
      return $this->ModifyNameList;
    }

    /**
     * @param ModifyNameArrayType $ModifyNameList
     * @return \EbayWsdl\VariationsType
     */
    public function setModifyNameList($ModifyNameList)
    {
      $this->ModifyNameList = $ModifyNameList;
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
     * @return \EbayWsdl\VariationsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
