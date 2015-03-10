<?php

namespace EbayWsdl;

class GetUserRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $UserID
     */
    protected $UserID = null;

    /**
     * @var boolean $IncludeExpressRequirements
     */
    protected $IncludeExpressRequirements = null;

    /**
     * @var boolean $IncludeFeatureEligibility
     */
    protected $IncludeFeatureEligibility = null;

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
     * @param ItemIDType $ItemID
     * @param string $UserID
     * @param boolean $IncludeExpressRequirements
     * @param boolean $IncludeFeatureEligibility
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $UserID = null, $IncludeExpressRequirements = null, $IncludeFeatureEligibility = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->UserID = $UserID;
      $this->IncludeExpressRequirements = $IncludeExpressRequirements;
      $this->IncludeFeatureEligibility = $IncludeFeatureEligibility;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\GetUserRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param string $UserID
     * @return \EbayWsdl\GetUserRequestType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeExpressRequirements()
    {
      return $this->IncludeExpressRequirements;
    }

    /**
     * @param boolean $IncludeExpressRequirements
     * @return \EbayWsdl\GetUserRequestType
     */
    public function setIncludeExpressRequirements($IncludeExpressRequirements)
    {
      $this->IncludeExpressRequirements = $IncludeExpressRequirements;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeFeatureEligibility()
    {
      return $this->IncludeFeatureEligibility;
    }

    /**
     * @param boolean $IncludeFeatureEligibility
     * @return \EbayWsdl\GetUserRequestType
     */
    public function setIncludeFeatureEligibility($IncludeFeatureEligibility)
    {
      $this->IncludeFeatureEligibility = $IncludeFeatureEligibility;
      return $this;
    }

}
