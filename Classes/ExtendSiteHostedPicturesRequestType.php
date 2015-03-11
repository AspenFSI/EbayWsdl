<?php

namespace EbayWsdl\Classes;

class ExtendSiteHostedPicturesRequestType extends AbstractRequestType
{

    /**
     * @var anyURI[] $PictureURL
     */
    protected $PictureURL = null;

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
     * @param anyURI[] $PictureURL
     * @param int $ExtensionInDays
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, array $PictureURL = null, $ExtensionInDays = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->PictureURL = $PictureURL;
      $this->ExtensionInDays = $ExtensionInDays;
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
     * @return \EbayWsdl\Classes\ExtendSiteHostedPicturesRequestType
     */
    public function setPictureURL(array $PictureURL)
    {
      $this->PictureURL = $PictureURL;
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
     * @return \EbayWsdl\Classes\ExtendSiteHostedPicturesRequestType
     */
    public function setExtensionInDays($ExtensionInDays)
    {
      $this->ExtensionInDays = $ExtensionInDays;
      return $this;
    }

}
