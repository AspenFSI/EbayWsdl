<?php

namespace EbayWsdl\Classes;

class VariationSpecificPictureSetType
{

    /**
     * @var string $VariationSpecificValue
     */
    protected $VariationSpecificValue = null;

    /**
     * @var anyURI[] $PictureURL
     */
    protected $PictureURL = null;

    /**
     * @var anyURI $GalleryURL
     */
    protected $GalleryURL = null;

    /**
     * @var anyURI[] $ExternalPictureURL
     */
    protected $ExternalPictureURL = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $VariationSpecificValue
     * @param anyURI[] $PictureURL
     * @param anyURI $GalleryURL
     * @param anyURI[] $ExternalPictureURL
     * @param string $any
     */
    public function __construct($VariationSpecificValue = null, array $PictureURL = null, $GalleryURL = null, array $ExternalPictureURL = null, $any = null)
    {
      $this->VariationSpecificValue = $VariationSpecificValue;
      $this->PictureURL = $PictureURL;
      $this->GalleryURL = $GalleryURL;
      $this->ExternalPictureURL = $ExternalPictureURL;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getVariationSpecificValue()
    {
      return $this->VariationSpecificValue;
    }

    /**
     * @param string $VariationSpecificValue
     * @return \EbayWsdl\Classes\VariationSpecificPictureSetType
     */
    public function setVariationSpecificValue($VariationSpecificValue)
    {
      $this->VariationSpecificValue = $VariationSpecificValue;
      return $this;
    }

    /**
     * @return anyURI[]
     */
    public function getPictureURL()
    {
      return $this->PictureURL;
    }

    /**
     * @param anyURI[] $PictureURL
     * @return \EbayWsdl\Classes\VariationSpecificPictureSetType
     */
    public function setPictureURL(array $PictureURL)
    {
      $this->PictureURL = $PictureURL;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getGalleryURL()
    {
      return $this->GalleryURL;
    }

    /**
     * @param anyURI $GalleryURL
     * @return \EbayWsdl\Classes\VariationSpecificPictureSetType
     */
    public function setGalleryURL($GalleryURL)
    {
      $this->GalleryURL = $GalleryURL;
      return $this;
    }

    /**
     * @return anyURI[]
     */
    public function getExternalPictureURL()
    {
      return $this->ExternalPictureURL;
    }

    /**
     * @param anyURI[] $ExternalPictureURL
     * @return \EbayWsdl\Classes\VariationSpecificPictureSetType
     */
    public function setExternalPictureURL(array $ExternalPictureURL)
    {
      $this->ExternalPictureURL = $ExternalPictureURL;
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
     * @return \EbayWsdl\Classes\VariationSpecificPictureSetType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
