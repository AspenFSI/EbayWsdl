<?php

namespace EbayWsdl;

class UploadSiteHostedPicturesRequestType extends AbstractRequestType
{

    /**
     * @var string $PictureName
     */
    protected $PictureName = null;

    /**
     * @var int $PictureSystemVersion
     */
    protected $PictureSystemVersion = null;

    /**
     * @var PictureSetCodeType $PictureSet
     */
    protected $PictureSet = null;

    /**
     * @var Base64BinaryType $PictureData
     */
    protected $PictureData = null;

    /**
     * @var PictureUploadPolicyCodeType $PictureUploadPolicy
     */
    protected $PictureUploadPolicy = null;

    /**
     * @var anyURI[] $ExternalPictureURL
     */
    protected $ExternalPictureURL = null;

    /**
     * @var PictureWatermarkCodeType[] $PictureWatermark
     */
    protected $PictureWatermark = null;

    /**
     * @var int $ExtensionInDays
     */
    protected $ExtensionInDays = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param string $PictureName
     * @param int $PictureSystemVersion
     * @param PictureSetCodeType $PictureSet
     * @param Base64BinaryType $PictureData
     * @param PictureUploadPolicyCodeType $PictureUploadPolicy
     * @param anyURI[] $ExternalPictureURL
     * @param PictureWatermarkCodeType[] $PictureWatermark
     * @param int $ExtensionInDays
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $PictureName = null, $PictureSystemVersion = null, $PictureSet = null, $PictureData = null, $PictureUploadPolicy = null, array $ExternalPictureURL = null, array $PictureWatermark = null, $ExtensionInDays = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->PictureName = $PictureName;
      $this->PictureSystemVersion = $PictureSystemVersion;
      $this->PictureSet = $PictureSet;
      $this->PictureData = $PictureData;
      $this->PictureUploadPolicy = $PictureUploadPolicy;
      $this->ExternalPictureURL = $ExternalPictureURL;
      $this->PictureWatermark = $PictureWatermark;
      $this->ExtensionInDays = $ExtensionInDays;
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
     * @return \EbayWsdl\UploadSiteHostedPicturesRequestType
     */
    public function setPictureName($PictureName)
    {
      $this->PictureName = $PictureName;
      return $this;
    }

    /**
     * @return int
     */
    public function getPictureSystemVersion()
    {
      return $this->PictureSystemVersion;
    }

    /**
     * @param int $PictureSystemVersion
     * @return \EbayWsdl\UploadSiteHostedPicturesRequestType
     */
    public function setPictureSystemVersion($PictureSystemVersion)
    {
      $this->PictureSystemVersion = $PictureSystemVersion;
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
     * @return \EbayWsdl\UploadSiteHostedPicturesRequestType
     */
    public function setPictureSet($PictureSet)
    {
      $this->PictureSet = $PictureSet;
      return $this;
    }

    /**
     * @return Base64BinaryType
     */
    public function getPictureData()
    {
      return $this->PictureData;
    }

    /**
     * @param Base64BinaryType $PictureData
     * @return \EbayWsdl\UploadSiteHostedPicturesRequestType
     */
    public function setPictureData($PictureData)
    {
      $this->PictureData = $PictureData;
      return $this;
    }

    /**
     * @return PictureUploadPolicyCodeType
     */
    public function getPictureUploadPolicy()
    {
      return $this->PictureUploadPolicy;
    }

    /**
     * @param PictureUploadPolicyCodeType $PictureUploadPolicy
     * @return \EbayWsdl\UploadSiteHostedPicturesRequestType
     */
    public function setPictureUploadPolicy($PictureUploadPolicy)
    {
      $this->PictureUploadPolicy = $PictureUploadPolicy;
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
     * @return \EbayWsdl\UploadSiteHostedPicturesRequestType
     */
    public function setExternalPictureURL(array $ExternalPictureURL)
    {
      $this->ExternalPictureURL = $ExternalPictureURL;
      return $this;
    }

    /**
     * @return PictureWatermarkCodeType[]
     */
    public function getPictureWatermark()
    {
      return $this->PictureWatermark;
    }

    /**
     * @param PictureWatermarkCodeType[] $PictureWatermark
     * @return \EbayWsdl\UploadSiteHostedPicturesRequestType
     */
    public function setPictureWatermark(array $PictureWatermark)
    {
      $this->PictureWatermark = $PictureWatermark;
      return $this;
    }

    /**
     * @return int
     */
    public function getExtensionInDays()
    {
      return $this->ExtensionInDays;
    }

    /**
     * @param int $ExtensionInDays
     * @return \EbayWsdl\UploadSiteHostedPicturesRequestType
     */
    public function setExtensionInDays($ExtensionInDays)
    {
      $this->ExtensionInDays = $ExtensionInDays;
      return $this;
    }

}
