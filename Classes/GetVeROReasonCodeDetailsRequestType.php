<?php

namespace EbayWsdl\Classes;

class GetVeROReasonCodeDetailsRequestType extends AbstractRequestType
{

    /**
     * @var int $ReasonCodeID
     */
    protected $ReasonCodeID = null;

    /**
     * @var boolean $ReturnAllSites
     */
    protected $ReturnAllSites = null;

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
     * @param int $ReasonCodeID
     * @param boolean $ReturnAllSites
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ReasonCodeID = null, $ReturnAllSites = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ReasonCodeID = $ReasonCodeID;
      $this->ReturnAllSites = $ReturnAllSites;
    }

    /**
     * @return int
     */
    public function getReasonCodeID()
    {
      return $this->ReasonCodeID;
    }

    /**
     * @param int $ReasonCodeID
     * @return \EbayWsdl\Classes\GetVeROReasonCodeDetailsRequestType
     */
    public function setReasonCodeID($ReasonCodeID)
    {
      $this->ReasonCodeID = $ReasonCodeID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnAllSites()
    {
      return $this->ReturnAllSites;
    }

    /**
     * @param boolean $ReturnAllSites
     * @return \EbayWsdl\Classes\GetVeROReasonCodeDetailsRequestType
     */
    public function setReturnAllSites($ReturnAllSites)
    {
      $this->ReturnAllSites = $ReturnAllSites;
      return $this;
    }

}
