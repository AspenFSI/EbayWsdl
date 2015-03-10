<?php

namespace EbayWsdl;

class SiteHostedPictureDetailsType
{

    /**
     * @var string $PictureName
     */
    protected $PictureName = null;

    /**
     * @var PictureSetCodeType $PictureSet
     */
    protected $PictureSet = null;

    /**
     * @var PictureFormatCodeType $PictureFormat
     */
    protected $PictureFormat = null;

    /**
     * @var anyURI $FullURL
     */
    protected $FullURL = null;

    /**
     * @var anyURI $BaseURL
     */
    protected $BaseURL = null;

    /**
     * @var PictureSetMemberType[] $PictureSetMember
     */
    protected $PictureSetMember = null;

    /**
     * @var anyURI $ExternalPictureURL
     */
    protected $ExternalPictureURL = null;

    /**
     * @var \DateTime $UseByDate
     */
    protected $UseByDate = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $PictureName
     * @param PictureSetCodeType $PictureSet
     * @param PictureFormatCodeType $PictureFormat
     * @param anyURI $FullURL
     * @param anyURI $BaseURL
     * @param PictureSetMemberType[] $PictureSetMember
     * @param anyURI $ExternalPictureURL
     * @param \DateTime $UseByDate
     * @param string $any
     */
    public function __construct($PictureName = null, $PictureSet = null, $PictureFormat = null, $FullURL = null, $BaseURL = null, array $PictureSetMember = null, $ExternalPictureURL = null, \DateTime $UseByDate = null, $any = null)
    {
      $this->PictureName = $PictureName;
      $this->PictureSet = $PictureSet;
      $this->PictureFormat = $PictureFormat;
      $this->FullURL = $FullURL;
      $this->BaseURL = $BaseURL;
      $this->PictureSetMember = $PictureSetMember;
      $this->ExternalPictureURL = $ExternalPictureURL;
      $this->UseByDate = $UseByDate ? $UseByDate->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getPictureName()
    {
      return $this->PictureName;
    }

    /**
     * @param string $PictureName
     * @return \EbayWsdl\SiteHostedPictureDetailsType
     */
    public function setPictureName($PictureName)
    {
      $this->PictureName = $PictureName;
      return $this;
    }

    /**
     * @return PictureSetCodeType
     */
    public function getPictureSet()
    {
      return $this->PictureSet;
    }

    /**
     * @param PictureSetCodeType $PictureSet
     * @return \EbayWsdl\SiteHostedPictureDetailsType
     */
    public function setPictureSet($PictureSet)
    {
      $this->PictureSet = $PictureSet;
      return $this;
    }

    /**
     * @return PictureFormatCodeType
     */
    public function getPictureFormat()
    {
      return $this->PictureFormat;
    }

    /**
     * @param PictureFormatCodeType $PictureFormat
     * @return \EbayWsdl\SiteHostedPictureDetailsType
     */
    public function setPictureFormat($PictureFormat)
    {
      $this->PictureFormat = $PictureFormat;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getFullURL()
    {
      return $this->FullURL;
    }

    /**
     * @param anyURI $FullURL
     * @return \EbayWsdl\SiteHostedPictureDetailsType
     */
    public function setFullURL($FullURL)
    {
      $this->FullURL = $FullURL;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getBaseURL()
    {
      return $this->BaseURL;
    }

    /**
     * @param anyURI $BaseURL
     * @return \EbayWsdl\SiteHostedPictureDetailsType
     */
    public function setBaseURL($BaseURL)
    {
      $this->BaseURL = $BaseURL;
      return $this;
    }

    /**
     * @return PictureSetMemberType[]
     */
    public function getPictureSetMember()
    {
      return $this->PictureSetMember;
    }

    /**
     * @param PictureSetMemberType[] $PictureSetMember
     * @return \EbayWsdl\SiteHostedPictureDetailsType
     */
    public function setPictureSetMember(array $PictureSetMember)
    {
      $this->PictureSetMember = $PictureSetMember;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getExternalPictureURL()
    {
      return $this->ExternalPictureURL;
    }

    /**
     * @param anyURI $ExternalPictureURL
     * @return \EbayWsdl\SiteHostedPictureDetailsType
     */
    public function setExternalPictureURL($ExternalPictureURL)
    {
      $this->ExternalPictureURL = $ExternalPictureURL;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUseByDate()
    {
      if ($this->UseByDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UseByDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UseByDate
     * @return \EbayWsdl\SiteHostedPictureDetailsType
     */
    public function setUseByDate(\DateTime $UseByDate)
    {
      $this->UseByDate = $UseByDate->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\SiteHostedPictureDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
