<?php

namespace EbayWsdl;

class GetCategoriesRequestType extends AbstractRequestType
{

    /**
     * @var string $CategorySiteID
     */
    protected $CategorySiteID = null;

    /**
     * @var string[] $CategoryParent
     */
    protected $CategoryParent = null;

    /**
     * @var int $LevelLimit
     */
    protected $LevelLimit = null;

    /**
     * @var boolean $ViewAllNodes
     */
    protected $ViewAllNodes = null;

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
     * @param string $CategorySiteID
     * @param string[] $CategoryParent
     * @param int $LevelLimit
     * @param boolean $ViewAllNodes
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $CategorySiteID = null, array $CategoryParent = null, $LevelLimit = null, $ViewAllNodes = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->CategorySiteID = $CategorySiteID;
      $this->CategoryParent = $CategoryParent;
      $this->LevelLimit = $LevelLimit;
      $this->ViewAllNodes = $ViewAllNodes;
    }

    /**
     * @return string
     */
    public function getCategorySiteID()
    {
      return $this->CategorySiteID;
    }

    /**
     * @param string $CategorySiteID
     * @return \EbayWsdl\GetCategoriesRequestType
     */
    public function setCategorySiteID($CategorySiteID)
    {
      $this->CategorySiteID = $CategorySiteID;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCategoryParent()
    {
      return $this->CategoryParent;
    }

    /**
     * @param string[] $CategoryParent
     * @return \EbayWsdl\GetCategoriesRequestType
     */
    public function setCategoryParent(array $CategoryParent)
    {
      $this->CategoryParent = $CategoryParent;
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
     * @return \EbayWsdl\GetCategoriesRequestType
     */
    public function setLevelLimit($LevelLimit)
    {
      $this->LevelLimit = $LevelLimit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getViewAllNodes()
    {
      return $this->ViewAllNodes;
    }

    /**
     * @param boolean $ViewAllNodes
     * @return \EbayWsdl\GetCategoriesRequestType
     */
    public function setViewAllNodes($ViewAllNodes)
    {
      $this->ViewAllNodes = $ViewAllNodes;
      return $this;
    }

}
