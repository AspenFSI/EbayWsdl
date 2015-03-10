<?php

namespace EbayWsdl;

class GetCategoryFeaturesRequestType extends AbstractRequestType
{

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var int $LevelLimit
     */
    protected $LevelLimit = null;

    /**
     * @var boolean $ViewAllNodes
     */
    protected $ViewAllNodes = null;

    /**
     * @var FeatureIDCodeType[] $FeatureID
     */
    protected $FeatureID = null;

    /**
     * @var boolean $AllFeaturesForCategory
     */
    protected $AllFeaturesForCategory = null;

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
     * @param string $CategoryID
     * @param int $LevelLimit
     * @param boolean $ViewAllNodes
     * @param FeatureIDCodeType[] $FeatureID
     * @param boolean $AllFeaturesForCategory
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $CategoryID = null, $LevelLimit = null, $ViewAllNodes = null, array $FeatureID = null, $AllFeaturesForCategory = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->CategoryID = $CategoryID;
      $this->LevelLimit = $LevelLimit;
      $this->ViewAllNodes = $ViewAllNodes;
      $this->FeatureID = $FeatureID;
      $this->AllFeaturesForCategory = $AllFeaturesForCategory;
    }

    /**
     * @return string
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param string $CategoryID
     * @return \EbayWsdl\GetCategoryFeaturesRequestType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
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
     * @return \EbayWsdl\GetCategoryFeaturesRequestType
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
     * @return \EbayWsdl\GetCategoryFeaturesRequestType
     */
    public function setViewAllNodes($ViewAllNodes)
    {
      $this->ViewAllNodes = $ViewAllNodes;
      return $this;
    }

    /**
     * @return FeatureIDCodeType[]
     */
    public function getFeatureID()
    {
      return $this->FeatureID;
    }

    /**
     * @param FeatureIDCodeType[] $FeatureID
     * @return \EbayWsdl\GetCategoryFeaturesRequestType
     */
    public function setFeatureID(array $FeatureID)
    {
      $this->FeatureID = $FeatureID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllFeaturesForCategory()
    {
      return $this->AllFeaturesForCategory;
    }

    /**
     * @param boolean $AllFeaturesForCategory
     * @return \EbayWsdl\GetCategoryFeaturesRequestType
     */
    public function setAllFeaturesForCategory($AllFeaturesForCategory)
    {
      $this->AllFeaturesForCategory = $AllFeaturesForCategory;
      return $this;
    }

}
