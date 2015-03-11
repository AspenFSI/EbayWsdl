<?php

namespace EbayWsdl\Classes;

class VerifyAddItemRequestType extends AbstractRequestType
{

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

    /**
     * @var boolean $IncludeExpressRequirements
     */
    protected $IncludeExpressRequirements = null;

    /**
     * @var ExternalProductIDType $ExternalProductID
     */
    protected $ExternalProductID = null;

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
     * @param ItemType $Item
     * @param boolean $IncludeExpressRequirements
     * @param ExternalProductIDType $ExternalProductID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Item = null, $IncludeExpressRequirements = null, $ExternalProductID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Item = $Item;
      $this->IncludeExpressRequirements = $IncludeExpressRequirements;
      $this->ExternalProductID = $ExternalProductID;
    }

    /**
     * @return ItemType
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ItemType $Item
     * @return \EbayWsdl\Classes\VerifyAddItemRequestType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
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
     * @return \EbayWsdl\Classes\VerifyAddItemRequestType
     */
    public function setIncludeExpressRequirements($IncludeExpressRequirements)
    {
      $this->IncludeExpressRequirements = $IncludeExpressRequirements;
      return $this;
    }

    /**
     * @return ExternalProductIDType
     */
    public function getExternalProductID()
    {
      return $this->ExternalProductID;
    }

    /**
     * @param ExternalProductIDType $ExternalProductID
     * @return \EbayWsdl\Classes\VerifyAddItemRequestType
     */
    public function setExternalProductID($ExternalProductID)
    {
      $this->ExternalProductID = $ExternalProductID;
      return $this;
    }

}
