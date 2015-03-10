<?php

namespace EbayWsdl;

class VeROReportItemsRequestType extends AbstractRequestType
{

    /**
     * @var UserIDType $RightsOwnerID
     */
    protected $RightsOwnerID = null;

    /**
     * @var VeROReportItemsType $ReportItems
     */
    protected $ReportItems = null;

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
     * @param UserIDType $RightsOwnerID
     * @param VeROReportItemsType $ReportItems
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $RightsOwnerID = null, $ReportItems = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->RightsOwnerID = $RightsOwnerID;
      $this->ReportItems = $ReportItems;
    }

    /**
     * @return UserIDType
     */
    public function getRightsOwnerID()
    {
      return $this->RightsOwnerID;
    }

    /**
     * @param UserIDType $RightsOwnerID
     * @return \EbayWsdl\VeROReportItemsRequestType
     */
    public function setRightsOwnerID($RightsOwnerID)
    {
      $this->RightsOwnerID = $RightsOwnerID;
      return $this;
    }

    /**
     * @return VeROReportItemsType
     */
    public function getReportItems()
    {
      return $this->ReportItems;
    }

    /**
     * @param VeROReportItemsType $ReportItems
     * @return \EbayWsdl\VeROReportItemsRequestType
     */
    public function setReportItems($ReportItems)
    {
      $this->ReportItems = $ReportItems;
      return $this;
    }

}
