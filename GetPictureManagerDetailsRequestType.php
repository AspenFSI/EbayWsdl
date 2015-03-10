<?php

namespace EbayWsdl;

class GetPictureManagerDetailsRequestType extends AbstractRequestType
{

    /**
     * @var int $FolderID
     */
    protected $FolderID = null;

    /**
     * @var string $PictureURL
     */
    protected $PictureURL = null;

    /**
     * @var PictureManagerDetailLevelCodeType $PictureManagerDetailLevel
     */
    protected $PictureManagerDetailLevel = null;

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
     * @param int $FolderID
     * @param string $PictureURL
     * @param PictureManagerDetailLevelCodeType $PictureManagerDetailLevel
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $FolderID = null, $PictureURL = null, $PictureManagerDetailLevel = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->FolderID = $FolderID;
      $this->PictureURL = $PictureURL;
      $this->PictureManagerDetailLevel = $PictureManagerDetailLevel;
    }

    /**
     * @return int
     */
    public function getFolderID()
    {
      return $this->FolderID;
    }

    /**
     * @param int $FolderID
     * @return \EbayWsdl\GetPictureManagerDetailsRequestType
     */
    public function setFolderID($FolderID)
    {
      $this->FolderID = $FolderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPictureURL()
    {
      return $this->PictureURL;
    }

    /**
     * @param string $PictureURL
     * @return \EbayWsdl\GetPictureManagerDetailsRequestType
     */
    public function setPictureURL($PictureURL)
    {
      $this->PictureURL = $PictureURL;
      return $this;
    }

    /**
     * @return PictureManagerDetailLevelCodeType
     */
    public function getPictureManagerDetailLevel()
    {
      return $this->PictureManagerDetailLevel;
    }

    /**
     * @param PictureManagerDetailLevelCodeType $PictureManagerDetailLevel
     * @return \EbayWsdl\GetPictureManagerDetailsRequestType
     */
    public function setPictureManagerDetailLevel($PictureManagerDetailLevel)
    {
      $this->PictureManagerDetailLevel = $PictureManagerDetailLevel;
      return $this;
    }

}
