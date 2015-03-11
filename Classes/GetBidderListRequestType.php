<?php

namespace EbayWsdl\Classes;

class GetBidderListRequestType extends AbstractRequestType
{

    /**
     * @var boolean $ActiveItemsOnly
     */
    protected $ActiveItemsOnly = null;

    /**
     * @var \DateTime $EndTimeFrom
     */
    protected $EndTimeFrom = null;

    /**
     * @var \DateTime $EndTimeTo
     */
    protected $EndTimeTo = null;

    /**
     * @var UserIDType $UserID
     */
    protected $UserID = null;

    /**
     * @var GranularityLevelCodeType $GranularityLevel
     */
    protected $GranularityLevel = null;

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
     * @param boolean $ActiveItemsOnly
     * @param \DateTime $EndTimeFrom
     * @param \DateTime $EndTimeTo
     * @param UserIDType $UserID
     * @param GranularityLevelCodeType $GranularityLevel
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ActiveItemsOnly = null, \DateTime $EndTimeFrom = null, \DateTime $EndTimeTo = null, $UserID = null, $GranularityLevel = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ActiveItemsOnly = $ActiveItemsOnly;
      $this->EndTimeFrom = $EndTimeFrom ? $EndTimeFrom->format(\DateTime::ATOM) : null;
      $this->EndTimeTo = $EndTimeTo ? $EndTimeTo->format(\DateTime::ATOM) : null;
      $this->UserID = $UserID;
      $this->GranularityLevel = $GranularityLevel;
    }

    /**
     * @return boolean
     */
    public function getActiveItemsOnly()
    {
      return $this->ActiveItemsOnly;
    }

    /**
     * @param boolean $ActiveItemsOnly
     * @return \EbayWsdl\Classes\GetBidderListRequestType
     */
    public function setActiveItemsOnly($ActiveItemsOnly)
    {
      $this->ActiveItemsOnly = $ActiveItemsOnly;
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
     * @return \EbayWsdl\Classes\GetBidderListRequestType
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
     * @return \EbayWsdl\Classes\GetBidderListRequestType
     */
    public function setEndTimeTo(\DateTime $EndTimeTo)
    {
      $this->EndTimeTo = $EndTimeTo->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\GetBidderListRequestType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
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
     * @return \EbayWsdl\Classes\GetBidderListRequestType
     */
    public function setGranularityLevel($GranularityLevel)
    {
      $this->GranularityLevel = $GranularityLevel;
      return $this;
    }

}
