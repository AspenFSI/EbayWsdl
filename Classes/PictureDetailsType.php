<?php

namespace EbayWsdl\Classes;

class PictureDetailsType
{

    /**
     * @var GalleryTypeCodeType $GalleryType
     */
    protected $GalleryType = null;

    /**
     * @var anyURI $GalleryURL
     */
    protected $GalleryURL = null;

    /**
     * @var PhotoDisplayCodeType $PhotoDisplay
     */
    protected $PhotoDisplay = null;

    /**
     * @var anyURI[] $PictureURL
     */
    protected $PictureURL = null;

    /**
     * @var PictureSourceCodeType $PictureSource
     */
    protected $PictureSource = null;

    /**
     * @var string $GalleryDuration
     */
    protected $GalleryDuration = null;

    /**
     * @var GalleryStatusCodeType $GalleryStatus
     */
    protected $GalleryStatus = null;

    /**
     * @var string $GalleryErrorInfo
     */
    protected $GalleryErrorInfo = null;

    /**
     * @var anyURI[] $ExternalPictureURL
     */
    protected $ExternalPictureURL = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param GalleryTypeCodeType $GalleryType
     * @param anyURI $GalleryURL
     * @param PhotoDisplayCodeType $PhotoDisplay
     * @param anyURI[] $PictureURL
     * @param PictureSourceCodeType $PictureSource
     * @param string $GalleryDuration
     * @param GalleryStatusCodeType $GalleryStatus
     * @param string $GalleryErrorInfo
     * @param anyURI[] $ExternalPictureURL
     * @param string $any
     */
    public function __construct($GalleryType = null, $GalleryURL = null, $PhotoDisplay = null, array $PictureURL = null, $PictureSource = null, $GalleryDuration = null, $GalleryStatus = null, $GalleryErrorInfo = null, array $ExternalPictureURL = null, $any = null)
    {
      $this->GalleryType = $GalleryType;
      $this->GalleryURL = $GalleryURL;
      $this->PhotoDisplay = $PhotoDisplay;
      $this->PictureURL = $PictureURL;
      $this->PictureSource = $PictureSource;
      $this->GalleryDuration = $GalleryDuration;
      $this->GalleryStatus = $GalleryStatus;
      $this->GalleryErrorInfo = $GalleryErrorInfo;
      $this->ExternalPictureURL = $ExternalPictureURL;
      $this->any = $any;
    }

    /**
     * @return GalleryTypeCodeType
     */
    public function getGalleryType()
    {
      return $this->GalleryType;
    }

    /**
     * @param GalleryTypeCodeType $GalleryType
     * @return \EbayWsdl\Classes\PictureDetailsType
     */
    public function setGalleryType($GalleryType)
    {
      $this->GalleryType = $GalleryType;
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
     * @return \EbayWsdl\Classes\PictureDetailsType
     */
    public function setGalleryURL($GalleryURL)
    {
      $this->GalleryURL = $GalleryURL;
      return $this;
    }

    /**
     * @return PhotoDisplayCodeType
     */
    public function getPhotoDisplay()
    {
      return $this->PhotoDisplay;
    }

    /**
     * @param PhotoDisplayCodeType $PhotoDisplay
     * @return \EbayWsdl\Classes\PictureDetailsType
     */
    public function setPhotoDisplay($PhotoDisplay)
    {
      $this->PhotoDisplay = $PhotoDisplay;
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
     * @return \EbayWsdl\Classes\PictureDetailsType
     */
    public function setPictureURL(array $PictureURL)
    {
      $this->PictureURL = $PictureURL;
      return $this;
    }

    /**
     * @return PictureSourceCodeType
     */
    public function getPictureSource()
    {
      return $this->PictureSource;
    }

    /**
     * @param PictureSourceCodeType $PictureSource
     * @return \EbayWsdl\Classes\PictureDetailsType
     */
    public function setPictureSource($PictureSource)
    {
      $this->PictureSource = $PictureSource;
      return $this;
    }

    /**
     * @return string
     */
    public function getGalleryDuration()
    {
      return $this->GalleryDuration;
    }

    /**
     * @param string $GalleryDuration
     * @return \EbayWsdl\Classes\PictureDetailsType
     */
    public function setGalleryDuration($GalleryDuration)
    {
      $this->GalleryDuration = $GalleryDuration;
      return $this;
    }

    /**
     * @return GalleryStatusCodeType
     */
    public function getGalleryStatus()
    {
      return $this->GalleryStatus;
    }

    /**
     * @param GalleryStatusCodeType $GalleryStatus
     * @return \EbayWsdl\Classes\PictureDetailsType
     */
    public function setGalleryStatus($GalleryStatus)
    {
      $this->GalleryStatus = $GalleryStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getGalleryErrorInfo()
    {
      return $this->GalleryErrorInfo;
    }

    /**
     * @param string $GalleryErrorInfo
     * @return \EbayWsdl\Classes\PictureDetailsType
     */
    public function setGalleryErrorInfo($GalleryErrorInfo)
    {
      $this->GalleryErrorInfo = $GalleryErrorInfo;
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
     * @return \EbayWsdl\Classes\PictureDetailsType
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
     * @return \EbayWsdl\Classes\PictureDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
