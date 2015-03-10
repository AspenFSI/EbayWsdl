<?php

namespace EbayWsdl;

class ReviseMyMessagesFoldersRequestType extends AbstractRequestType
{

    /**
     * @var MyMessagesFolderOperationCodeType $Operation
     */
    protected $Operation = null;

    /**
     * @var long[] $FolderID
     */
    protected $FolderID = null;

    /**
     * @var string[] $FolderName
     */
    protected $FolderName = null;

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
     * @param MyMessagesFolderOperationCodeType $Operation
     * @param long[] $FolderID
     * @param string[] $FolderName
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Operation = null, array $FolderID = null, array $FolderName = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Operation = $Operation;
      $this->FolderID = $FolderID;
      $this->FolderName = $FolderName;
    }

    /**
     * @return MyMessagesFolderOperationCodeType
     */
    public function getOperation()
    {
      return $this->Operation;
    }

    /**
     * @param MyMessagesFolderOperationCodeType $Operation
     * @return \EbayWsdl\ReviseMyMessagesFoldersRequestType
     */
    public function setOperation($Operation)
    {
      $this->Operation = $Operation;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getFolderID()
    {
      return $this->FolderID;
    }

    /**
     * @param long[] $FolderID
     * @return \EbayWsdl\ReviseMyMessagesFoldersRequestType
     */
    public function setFolderID(array $FolderID)
    {
      $this->FolderID = $FolderID;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getFolderName()
    {
      return $this->FolderName;
    }

    /**
     * @param string[] $FolderName
     * @return \EbayWsdl\ReviseMyMessagesFoldersRequestType
     */
    public function setFolderName(array $FolderName)
    {
      $this->FolderName = $FolderName;
      return $this;
    }

}
