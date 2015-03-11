<?php

namespace EbayWsdl\Classes;

class EndFixedPriceItemRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var EndReasonCodeType $EndingReason
     */
    protected $EndingReason = null;

    /**
     * @var SKUType $SKU
     */
    protected $SKU = null;

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
     * @param EndReasonCodeType $EndingReason
     * @param SKUType $SKU
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $EndingReason = null, $SKU = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->EndingReason = $EndingReason;
      $this->SKU = $SKU;
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
     * @return \EbayWsdl\Classes\EndFixedPriceItemRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return EndReasonCodeType
     */
    public function getEndingReason()
    {
      return $this->EndingReason;
    }

    /**
     * @param EndReasonCodeType $EndingReason
     * @return \EbayWsdl\Classes\EndFixedPriceItemRequestType
     */
    public function setEndingReason($EndingReason)
    {
      $this->EndingReason = $EndingReason;
      return $this;
    }

    /**
     * @return SKUType
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param SKUType $SKU
     * @return \EbayWsdl\Classes\EndFixedPriceItemRequestType
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

}
