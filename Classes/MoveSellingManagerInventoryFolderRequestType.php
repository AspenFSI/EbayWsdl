<?php

namespace EbayWsdl\Classes;

class MoveSellingManagerInventoryFolderRequestType extends AbstractRequestType
{

    /**
     * @var int $FolderID
     */
    protected $FolderID = null;

    /**
     * @var int $NewParentFolderID
     */
    protected $NewParentFolderID = null;

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
     * @param int $NewParentFolderID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $FolderID = null, $NewParentFolderID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->FolderID = $FolderID;
      $this->NewParentFolderID = $NewParentFolderID;
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
     * @return \EbayWsdl\Classes\MoveSellingManagerInventoryFolderRequestType
     */
    public function setFolderID($FolderID)
    {
      $this->FolderID = $FolderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewParentFolderID()
    {
      return $this->NewParentFolderID;
    }

    /**
     * @param int $NewParentFolderID
     * @return \EbayWsdl\Classes\MoveSellingManagerInventoryFolderRequestType
     */
    public function setNewParentFolderID($NewParentFolderID)
    {
      $this->NewParentFolderID = $NewParentFolderID;
      return $this;
    }

}
