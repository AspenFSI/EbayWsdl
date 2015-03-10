<?php

namespace EbayWsdl;

class PicturesType
{

    /**
     * @var string $VariationSpecificName
     */
    protected $VariationSpecificName = null;

    /**
     * @var VariationSpecificPictureSetType[] $VariationSpecificPictureSet
     */
    protected $VariationSpecificPictureSet = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $VariationSpecificName
     * @param VariationSpecificPictureSetType[] $VariationSpecificPictureSet
     * @param string $any
     */
    public function __construct($VariationSpecificName = null, array $VariationSpecificPictureSet = null, $any = null)
    {
      $this->VariationSpecificName = $VariationSpecificName;
      $this->VariationSpecificPictureSet = $VariationSpecificPictureSet;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getVariationSpecificName()
    {
      return $this->VariationSpecificName;
    }

    /**
     * @param string $VariationSpecificName
     * @return \EbayWsdl\PicturesType
     */
    public function setVariationSpecificName($VariationSpecificName)
    {
      $this->VariationSpecificName = $VariationSpecificName;
      return $this;
    }

    /**
     * @return VariationSpecificPictureSetType[]
     */
    public function getVariationSpecificPictureSet()
    {
      return $this->VariationSpecificPictureSet;
    }

    /**
     * @param VariationSpecificPictureSetType[] $VariationSpecificPictureSet
     * @return \EbayWsdl\PicturesType
     */
    public function setVariationSpecificPictureSet(array $VariationSpecificPictureSet)
    {
      $this->VariationSpecificPictureSet = $VariationSpecificPictureSet;
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
     * @return \EbayWsdl\PicturesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
