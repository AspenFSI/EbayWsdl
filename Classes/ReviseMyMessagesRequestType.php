<?php

namespace EbayWsdl\Classes;

class ReviseMyMessagesRequestType extends AbstractRequestType
{

    /**
     * @var MyMessagesMessageIDArrayType $MessageIDs
     */
    protected $MessageIDs = null;

    /**
     * @var MyMessagesAlertIDArrayType $AlertIDs
     */
    protected $AlertIDs = null;

    /**
     * @var boolean $Read
     */
    protected $Read = null;

    /**
     * @var boolean $Flagged
     */
    protected $Flagged = null;

    /**
     * @var int $FolderID
     */
    protected $FolderID = null;

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
     * @param MyMessagesMessageIDArrayType $MessageIDs
     * @param MyMessagesAlertIDArrayType $AlertIDs
     * @param boolean $Read
     * @param boolean $Flagged
     * @param int $FolderID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $MessageIDs = null, $AlertIDs = null, $Read = null, $Flagged = null, $FolderID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->MessageIDs = $MessageIDs;
      $this->AlertIDs = $AlertIDs;
      $this->Read = $Read;
      $this->Flagged = $Flagged;
      $this->FolderID = $FolderID;
    }

    /**
     * @return MyMessagesMessageIDArrayType
     */
    public function getMessageIDs()
    {
      return $this->MessageIDs;
    }

    /**
     * @param MyMessagesMessageIDArrayType $MessageIDs
     * @return \EbayWsdl\Classes\ReviseMyMessagesRequestType
     */
    public function setMessageIDs($MessageIDs)
    {
      $this->MessageIDs = $MessageIDs;
      return $this;
    }

    /**
     * @return MyMessagesAlertIDArrayType
     */
    public function getAlertIDs()
    {
      return $this->AlertIDs;
    }

    /**
     * @param MyMessagesAlertIDArrayType $AlertIDs
     * @return \EbayWsdl\Classes\ReviseMyMessagesRequestType
     */
    public function setAlertIDs($AlertIDs)
    {
      $this->AlertIDs = $AlertIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRead()
    {
      return $this->Read;
    }

    /**
     * @param boolean $Read
     * @return \EbayWsdl\Classes\ReviseMyMessagesRequestType
     */
    public function setRead($Read)
    {
      $this->Read = $Read;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFlagged()
    {
      return $this->Flagged;
    }

    /**
     * @param boolean $Flagged
     * @return \EbayWsdl\Classes\ReviseMyMessagesRequestType
     */
    public function setFlagged($Flagged)
    {
      $this->Flagged = $Flagged;
      return $this;
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
     * @return \EbayWsdl\Classes\ReviseMyMessagesRequestType
     */
    public function setFolderID($FolderID)
    {
      $this->FolderID = $FolderID;
      return $this;
    }

}
