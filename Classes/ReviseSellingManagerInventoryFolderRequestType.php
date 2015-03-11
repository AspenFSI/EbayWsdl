<?php

namespace EbayWsdl\Classes;

class ReviseSellingManagerInventoryFolderRequestType extends AbstractRequestType
{

    /**
     * @var SellingManagerFolderDetailsType $Folder
     */
    protected $Folder = null;

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
     * @param SellingManagerFolderDetailsType $Folder
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Folder = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Folder = $Folder;
    }

    /**
     * @return SellingManagerFolderDetailsType
     */
    public function getFolder()
    {
      return $this->Folder;
    }

    /**
     * @param SellingManagerFolderDetailsType $Folder
     * @return \EbayWsdl\Classes\ReviseSellingManagerInventoryFolderRequestType
     */
    public function setFolder($Folder)
    {
      $this->Folder = $Folder;
      return $this;
    }

}
