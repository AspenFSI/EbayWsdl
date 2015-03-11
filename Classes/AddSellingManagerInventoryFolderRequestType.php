<?php

namespace EbayWsdl\Classes;

class AddSellingManagerInventoryFolderRequestType extends AbstractRequestType
{

    /**
     * @var string $FolderName
     */
    protected $FolderName = null;

    /**
     * @var int $ParentFolderID
     */
    protected $ParentFolderID = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

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
     * @param string $FolderName
     * @param int $ParentFolderID
     * @param string $Comment
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $FolderName = null, $ParentFolderID = null, $Comment = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->FolderName = $FolderName;
      $this->ParentFolderID = $ParentFolderID;
      $this->Comment = $Comment;
    }

    /**
     * @return string
     */
    public function getFolderName()
    {
      return $this->FolderName;
    }

    /**
     * @param string $FolderName
     * @return \EbayWsdl\Classes\AddSellingManagerInventoryFolderRequestType
     */
    public function setFolderName($FolderName)
    {
      $this->FolderName = $FolderName;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentFolderID()
    {
      return $this->ParentFolderID;
    }

    /**
     * @param int $ParentFolderID
     * @return \EbayWsdl\Classes\AddSellingManagerInventoryFolderRequestType
     */
    public function setParentFolderID($ParentFolderID)
    {
      $this->ParentFolderID = $ParentFolderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \EbayWsdl\Classes\AddSellingManagerInventoryFolderRequestType
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

}
