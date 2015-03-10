<?php

namespace EbayWsdl;

class GetSellerEventsRequestType extends AbstractRequestType
{

    /**
     * @var UserIDType $UserID
     */
    protected $UserID = null;

    /**
     * @var \DateTime $StartTimeFrom
     */
    protected $StartTimeFrom = null;

    /**
     * @var \DateTime $StartTimeTo
     */
    protected $StartTimeTo = null;

    /**
     * @var \DateTime $EndTimeFrom
     */
    protected $EndTimeFrom = null;

    /**
     * @var \DateTime $EndTimeTo
     */
    protected $EndTimeTo = null;

    /**
     * @var \DateTime $ModTimeFrom
     */
    protected $ModTimeFrom = null;

    /**
     * @var \DateTime $ModTimeTo
     */
    protected $ModTimeTo = null;

    /**
     * @var boolean $NewItemFilter
     */
    protected $NewItemFilter = null;

    /**
     * @var boolean $IncludeWatchCount
     */
    protected $IncludeWatchCount = null;

    /**
     * @var boolean $IncludeVariationSpecifics
     */
    protected $IncludeVariationSpecifics = null;

    /**
     * @var boolean $HideVariations
     */
    protected $HideVariations = null;

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
     * @param \DateTime $StartTimeFrom
     * @param \DateTime $StartTimeTo
     * @param \DateTime $EndTimeFrom
     * @param \DateTime $EndTimeTo
     * @param \DateTime $ModTimeFrom
     * @param \DateTime $ModTimeTo
     * @param boolean $NewItemFilter
     * @param boolean $IncludeWatchCount
     * @param boolean $IncludeVariationSpecifics
     * @param boolean $HideVariations
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $UserID = null, \DateTime $StartTimeFrom = null, \DateTime $StartTimeTo = null, \DateTime $EndTimeFrom = null, \DateTime $EndTimeTo = null, \DateTime $ModTimeFrom = null, \DateTime $ModTimeTo = null, $NewItemFilter = null, $IncludeWatchCount = null, $IncludeVariationSpecifics = null, $HideVariations = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->UserID = $UserID;
      $this->StartTimeFrom = $StartTimeFrom ? $StartTimeFrom->format(\DateTime::ATOM) : null;
      $this->StartTimeTo = $StartTimeTo ? $StartTimeTo->format(\DateTime::ATOM) : null;
      $this->EndTimeFrom = $EndTimeFrom ? $EndTimeFrom->format(\DateTime::ATOM) : null;
      $this->EndTimeTo = $EndTimeTo ? $EndTimeTo->format(\DateTime::ATOM) : null;
      $this->ModTimeFrom = $ModTimeFrom ? $ModTimeFrom->format(\DateTime::ATOM) : null;
      $this->ModTimeTo = $ModTimeTo ? $ModTimeTo->format(\DateTime::ATOM) : null;
      $this->NewItemFilter = $NewItemFilter;
      $this->IncludeWatchCount = $IncludeWatchCount;
      $this->IncludeVariationSpecifics = $IncludeVariationSpecifics;
      $this->HideVariations = $HideVariations;
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
     * @return \EbayWsdl\GetSellerEventsRequestType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
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
     * @return \EbayWsdl\GetSellerEventsRequestType
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
     * @return \EbayWsdl\GetSellerEventsRequestType
     */
    public function setStartTimeTo(\DateTime $StartTimeTo)
    {
      $this->StartTimeTo = $StartTimeTo->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\GetSellerEventsRequestType
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
     * @return \EbayWsdl\GetSellerEventsRequestType
     */
    public function setEndTimeTo(\DateTime $EndTimeTo)
    {
      $this->EndTimeTo = $EndTimeTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModTimeFrom()
    {
      if ($this->ModTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModTimeFrom
     * @return \EbayWsdl\GetSellerEventsRequestType
     */
    public function setModTimeFrom(\DateTime $ModTimeFrom)
    {
      $this->ModTimeFrom = $ModTimeFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModTimeTo()
    {
      if ($this->ModTimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModTimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModTimeTo
     * @return \EbayWsdl\GetSellerEventsRequestType
     */
    public function setModTimeTo(\DateTime $ModTimeTo)
    {
      $this->ModTimeTo = $ModTimeTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNewItemFilter()
    {
      return $this->NewItemFilter;
    }

    /**
     * @param boolean $NewItemFilter
     * @return \EbayWsdl\GetSellerEventsRequestType
     */
    public function setNewItemFilter($NewItemFilter)
    {
      $this->NewItemFilter = $NewItemFilter;
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
     * @return \EbayWsdl\GetSellerEventsRequestType
     */
    public function setIncludeWatchCount($IncludeWatchCount)
    {
      $this->IncludeWatchCount = $IncludeWatchCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeVariationSpecifics()
    {
      return $this->IncludeVariationSpecifics;
    }

    /**
     * @param boolean $IncludeVariationSpecifics
     * @return \EbayWsdl\GetSellerEventsRequestType
     */
    public function setIncludeVariationSpecifics($IncludeVariationSpecifics)
    {
      $this->IncludeVariationSpecifics = $IncludeVariationSpecifics;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideVariations()
    {
      return $this->HideVariations;
    }

    /**
     * @param boolean $HideVariations
     * @return \EbayWsdl\GetSellerEventsRequestType
     */
    public function setHideVariations($HideVariations)
    {
      $this->HideVariations = $HideVariations;
      return $this;
    }

}
