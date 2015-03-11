<?php

namespace EbayWsdl\Classes;

class GetAllBiddersRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var GetAllBiddersModeCodeType $CallMode
     */
    protected $CallMode = null;

    /**
     * @var boolean $IncludeBiddingSummary
     */
    protected $IncludeBiddingSummary = null;

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
     * @param GetAllBiddersModeCodeType $CallMode
     * @param boolean $IncludeBiddingSummary
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $CallMode = null, $IncludeBiddingSummary = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->CallMode = $CallMode;
      $this->IncludeBiddingSummary = $IncludeBiddingSummary;
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
     * @return \EbayWsdl\Classes\GetAllBiddersRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return GetAllBiddersModeCodeType
     */
    public function getCallMode()
    {
      return $this->CallMode;
    }

    /**
     * @param GetAllBiddersModeCodeType $CallMode
     * @return \EbayWsdl\Classes\GetAllBiddersRequestType
     */
    public function setCallMode($CallMode)
    {
      $this->CallMode = $CallMode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeBiddingSummary()
    {
      return $this->IncludeBiddingSummary;
    }

    /**
     * @param boolean $IncludeBiddingSummary
     * @return \EbayWsdl\Classes\GetAllBiddersRequestType
     */
    public function setIncludeBiddingSummary($IncludeBiddingSummary)
    {
      $this->IncludeBiddingSummary = $IncludeBiddingSummary;
      return $this;
    }

}
