<?php

namespace EbayWsdl\Classes;

class GetCategorySpecificsRequestType extends AbstractRequestType
{

    /**
     * @var string[] $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var \DateTime $LastUpdateTime
     */
    protected $LastUpdateTime = null;

    /**
     * @var int $MaxNames
     */
    protected $MaxNames = null;

    /**
     * @var int $MaxValuesPerName
     */
    protected $MaxValuesPerName = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var CategoryItemSpecificsType[] $CategorySpecific
     */
    protected $CategorySpecific = null;

    /**
     * @var boolean $ExcludeRelationships
     */
    protected $ExcludeRelationships = null;

    /**
     * @var boolean $IncludeConfidence
     */
    protected $IncludeConfidence = null;

    /**
     * @var boolean $CategorySpecificsFileInfo
     */
    protected $CategorySpecificsFileInfo = null;

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
     * @param string[] $CategoryID
     * @param \DateTime $LastUpdateTime
     * @param int $MaxNames
     * @param int $MaxValuesPerName
     * @param string $Name
     * @param CategoryItemSpecificsType[] $CategorySpecific
     * @param boolean $ExcludeRelationships
     * @param boolean $IncludeConfidence
     * @param boolean $CategorySpecificsFileInfo
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, array $CategoryID = null, \DateTime $LastUpdateTime = null, $MaxNames = null, $MaxValuesPerName = null, $Name = null, array $CategorySpecific = null, $ExcludeRelationships = null, $IncludeConfidence = null, $CategorySpecificsFileInfo = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->CategoryID = $CategoryID;
      $this->LastUpdateTime = $LastUpdateTime ? $LastUpdateTime->format(\DateTime::ATOM) : null;
      $this->MaxNames = $MaxNames;
      $this->MaxValuesPerName = $MaxValuesPerName;
      $this->Name = $Name;
      $this->CategorySpecific = $CategorySpecific;
      $this->ExcludeRelationships = $ExcludeRelationships;
      $this->IncludeConfidence = $IncludeConfidence;
      $this->CategorySpecificsFileInfo = $CategorySpecificsFileInfo;
    }

    /**
     * @return string[]
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param string[] $CategoryID
     * @return \EbayWsdl\Classes\GetCategorySpecificsRequestType
     */
    public function setCategoryID(array $CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdateTime()
    {
      if ($this->LastUpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastUpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastUpdateTime
     * @return \EbayWsdl\Classes\GetCategorySpecificsRequestType
     */
    public function setLastUpdateTime(\DateTime $LastUpdateTime)
    {
      $this->LastUpdateTime = $LastUpdateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNames()
    {
      return $this->MaxNames;
    }

    /**
     * @param int $MaxNames
     * @return \EbayWsdl\Classes\GetCategorySpecificsRequestType
     */
    public function setMaxNames($MaxNames)
    {
      $this->MaxNames = $MaxNames;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxValuesPerName()
    {
      return $this->MaxValuesPerName;
    }

    /**
     * @param int $MaxValuesPerName
     * @return \EbayWsdl\Classes\GetCategorySpecificsRequestType
     */
    public function setMaxValuesPerName($MaxValuesPerName)
    {
      $this->MaxValuesPerName = $MaxValuesPerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \EbayWsdl\Classes\GetCategorySpecificsRequestType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return CategoryItemSpecificsType[]
     */
    public function getCategorySpecific()
    {
      return $this->CategorySpecific;
    }

    /**
     * @param CategoryItemSpecificsType[] $CategorySpecific
     * @return \EbayWsdl\Classes\GetCategorySpecificsRequestType
     */
    public function setCategorySpecific(array $CategorySpecific)
    {
      $this->CategorySpecific = $CategorySpecific;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeRelationships()
    {
      return $this->ExcludeRelationships;
    }

    /**
     * @param boolean $ExcludeRelationships
     * @return \EbayWsdl\Classes\GetCategorySpecificsRequestType
     */
    public function setExcludeRelationships($ExcludeRelationships)
    {
      $this->ExcludeRelationships = $ExcludeRelationships;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeConfidence()
    {
      return $this->IncludeConfidence;
    }

    /**
     * @param boolean $IncludeConfidence
     * @return \EbayWsdl\Classes\GetCategorySpecificsRequestType
     */
    public function setIncludeConfidence($IncludeConfidence)
    {
      $this->IncludeConfidence = $IncludeConfidence;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCategorySpecificsFileInfo()
    {
      return $this->CategorySpecificsFileInfo;
    }

    /**
     * @param boolean $CategorySpecificsFileInfo
     * @return \EbayWsdl\Classes\GetCategorySpecificsRequestType
     */
    public function setCategorySpecificsFileInfo($CategorySpecificsFileInfo)
    {
      $this->CategorySpecificsFileInfo = $CategorySpecificsFileInfo;
      return $this;
    }

}
