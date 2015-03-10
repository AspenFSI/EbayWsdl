<?php

namespace EbayWsdl;

class GetStoreRequestType extends AbstractRequestType
{

    /**
     * @var boolean $CategoryStructureOnly
     */
    protected $CategoryStructureOnly = null;

    /**
     * @var int $RootCategoryID
     */
    protected $RootCategoryID = null;

    /**
     * @var int $LevelLimit
     */
    protected $LevelLimit = null;

    /**
     * @var UserIDType $UserID
     */
    protected $UserID = null;

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
     * @param boolean $CategoryStructureOnly
     * @param int $RootCategoryID
     * @param int $LevelLimit
     * @param UserIDType $UserID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $CategoryStructureOnly = null, $RootCategoryID = null, $LevelLimit = null, $UserID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->CategoryStructureOnly = $CategoryStructureOnly;
      $this->RootCategoryID = $RootCategoryID;
      $this->LevelLimit = $LevelLimit;
      $this->UserID = $UserID;
    }

    /**
     * @return boolean
     */
    public function getCategoryStructureOnly()
    {
      return $this->CategoryStructureOnly;
    }

    /**
     * @param boolean $CategoryStructureOnly
     * @return \EbayWsdl\GetStoreRequestType
     */
    public function setCategoryStructureOnly($CategoryStructureOnly)
    {
      $this->CategoryStructureOnly = $CategoryStructureOnly;
      return $this;
    }

    /**
     * @return int
     */
    public function getRootCategoryID()
    {
      return $this->RootCategoryID;
    }

    /**
     * @param int $RootCategoryID
     * @return \EbayWsdl\GetStoreRequestType
     */
    public function setRootCategoryID($RootCategoryID)
    {
      $this->RootCategoryID = $RootCategoryID;
      return $this;
    }

    /**
     * @return int
     */
    public function getLevelLimit()
    {
      return $this->LevelLimit;
    }

    /**
     * @param int $LevelLimit
     * @return \EbayWsdl\GetStoreRequestType
     */
    public function setLevelLimit($LevelLimit)
    {
      $this->LevelLimit = $LevelLimit;
      return $this;
    }

    /**
     * @return UserIDType
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param UserIDType $UserID
     * @return \EbayWsdl\GetStoreRequestType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

}
