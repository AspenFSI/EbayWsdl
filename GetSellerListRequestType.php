<?php

namespace EbayWsdl;

class GetSellerListRequestType extends AbstractRequestType
{

    /**
     * @var UserIDType $UserID
     */
    protected $UserID = null;

    /**
     * @var UserIDArrayType $MotorsDealerUsers
     */
    protected $MotorsDealerUsers = null;

    /**
     * @var \DateTime $EndTimeFrom
     */
    protected $EndTimeFrom = null;

    /**
     * @var \DateTime $EndTimeTo
     */
    protected $EndTimeTo = null;

    /**
     * @var int $Sort
     */
    protected $Sort = null;

    /**
     * @var \DateTime $StartTimeFrom
     */
    protected $StartTimeFrom = null;

    /**
     * @var \DateTime $StartTimeTo
     */
    protected $StartTimeTo = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

    /**
     * @var GranularityLevelCodeType $GranularityLevel
     */
    protected $GranularityLevel = null;

    /**
     * @var SKUArrayType $SKUArray
     */
    protected $SKUArray = null;

    /**
     * @var boolean $IncludeWatchCount
     */
    protected $IncludeWatchCount = null;

    /**
     * @var boolean $AdminEndedItemsOnly
     */
    protected $AdminEndedItemsOnly = null;

    /**
     * @var int $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var boolean $IncludeVariations
     */
    protected $IncludeVariations = null;

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
     * @param UserIDType $UserID
     * @param UserIDArrayType $MotorsDealerUsers
     * @param \DateTime $EndTimeFrom
     * @param \DateTime $EndTimeTo
     * @param int $Sort
     * @param \DateTime $StartTimeFrom
     * @param \DateTime $StartTimeTo
     * @param PaginationType $Pagination
     * @param GranularityLevelCodeType $GranularityLevel
     * @param SKUArrayType $SKUArray
     * @param boolean $IncludeWatchCount
     * @param boolean $AdminEndedItemsOnly
     * @param int $CategoryID
     * @param boolean $IncludeVariations
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $UserID = null, $MotorsDealerUsers = null, \DateTime $EndTimeFrom = null, \DateTime $EndTimeTo = null, $Sort = null, \DateTime $StartTimeFrom = null, \DateTime $StartTimeTo = null, $Pagination = null, $GranularityLevel = null, $SKUArray = null, $IncludeWatchCount = null, $AdminEndedItemsOnly = null, $CategoryID = null, $IncludeVariations = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->UserID = $UserID;
      $this->MotorsDealerUsers = $MotorsDealerUsers;
      $this->EndTimeFrom = $EndTimeFrom ? $EndTimeFrom->format(\DateTime::ATOM) : null;
      $this->EndTimeTo = $EndTimeTo ? $EndTimeTo->format(\DateTime::ATOM) : null;
      $this->Sort = $Sort;
      $this->StartTimeFrom = $StartTimeFrom ? $StartTimeFrom->format(\DateTime::ATOM) : null;
      $this->StartTimeTo = $StartTimeTo ? $StartTimeTo->format(\DateTime::ATOM) : null;
      $this->Pagination = $Pagination;
      $this->GranularityLevel = $GranularityLevel;
      $this->SKUArray = $SKUArray;
      $this->IncludeWatchCount = $IncludeWatchCount;
      $this->AdminEndedItemsOnly = $AdminEndedItemsOnly;
      $this->CategoryID = $CategoryID;
      $this->IncludeVariations = $IncludeVariations;
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
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return UserIDArrayType
     */
    public function getMotorsDealerUsers()
    {
      return $this->MotorsDealerUsers;
    }

    /**
     * @param UserIDArrayType $MotorsDealerUsers
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setMotorsDealerUsers($MotorsDealerUsers)
    {
      $this->MotorsDealerUsers = $MotorsDealerUsers;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTimeFrom()
    {
      if ($this->EndTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTimeFrom
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setEndTimeFrom(\DateTime $EndTimeFrom)
    {
      $this->EndTimeFrom = $EndTimeFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTimeTo()
    {
      if ($this->EndTimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTimeTo
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setEndTimeTo(\DateTime $EndTimeTo)
    {
      $this->EndTimeTo = $EndTimeTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getSort()
    {
      return $this->Sort;
    }

    /**
     * @param int $Sort
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setSort($Sort)
    {
      $this->Sort = $Sort;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTimeFrom()
    {
      if ($this->StartTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTimeFrom
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setStartTimeFrom(\DateTime $StartTimeFrom)
    {
      $this->StartTimeFrom = $StartTimeFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTimeTo()
    {
      if ($this->StartTimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTimeTo
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setStartTimeTo(\DateTime $StartTimeTo)
    {
      $this->StartTimeTo = $StartTimeTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return PaginationType
     */
    public function getPagination()
    {
      return $this->Pagination;
    }

    /**
     * @param PaginationType $Pagination
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return GranularityLevelCodeType
     */
    public function getGranularityLevel()
    {
      return $this->GranularityLevel;
    }

    /**
     * @param GranularityLevelCodeType $GranularityLevel
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setGranularityLevel($GranularityLevel)
    {
      $this->GranularityLevel = $GranularityLevel;
      return $this;
    }

    /**
     * @return SKUArrayType
     */
    public function getSKUArray()
    {
      return $this->SKUArray;
    }

    /**
     * @param SKUArrayType $SKUArray
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setSKUArray($SKUArray)
    {
      $this->SKUArray = $SKUArray;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeWatchCount()
    {
      return $this->IncludeWatchCount;
    }

    /**
     * @param boolean $IncludeWatchCount
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setIncludeWatchCount($IncludeWatchCount)
    {
      $this->IncludeWatchCount = $IncludeWatchCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdminEndedItemsOnly()
    {
      return $this->AdminEndedItemsOnly;
    }

    /**
     * @param boolean $AdminEndedItemsOnly
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setAdminEndedItemsOnly($AdminEndedItemsOnly)
    {
      $this->AdminEndedItemsOnly = $AdminEndedItemsOnly;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param int $CategoryID
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeVariations()
    {
      return $this->IncludeVariations;
    }

    /**
     * @param boolean $IncludeVariations
     * @return \EbayWsdl\GetSellerListRequestType
     */
    public function setIncludeVariations($IncludeVariations)
    {
      $this->IncludeVariations = $IncludeVariations;
      return $this;
    }

}
