<?php

namespace EbayWsdl\Classes;

class GetSellingManagerInventoryFolderRequestType extends AbstractRequestType
{

    /**
     * @var int $FolderID
     */
    protected $FolderID = null;

    /**
     * @var int $MaxDepth
     */
    protected $MaxDepth = null;

    /**
     * @var boolean $FullRecursion
     */
    protected $FullRecursion = null;

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
     * @param int $MaxDepth
     * @param boolean $FullRecursion
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $FolderID = null, $MaxDepth = null, $FullRecursion = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->FolderID = $FolderID;
      $this->MaxDepth = $MaxDepth;
      $this->FullRecursion = $FullRecursion;
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
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryFolderRequestType
     */
    public function setFolderID($FolderID)
    {
      $this->FolderID = $FolderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxDepth()
    {
      return $this->MaxDepth;
    }

    /**
     * @param int $MaxDepth
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryFolderRequestType
     */
    public function setMaxDepth($MaxDepth)
    {
      $this->MaxDepth = $MaxDepth;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFullRecursion()
    {
      return $this->FullRecursion;
    }

    /**
     * @param boolean $FullRecursion
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryFolderRequestType
     */
    public function setFullRecursion($FullRecursion)
    {
      $this->FullRecursion = $FullRecursion;
      return $this;
    }

}
