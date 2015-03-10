<?php

namespace EbayWsdl;

class GetCrossPromotionsRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var PromotionMethodCodeType $PromotionMethod
     */
    protected $PromotionMethod = null;

    /**
     * @var TradingRoleCodeType $PromotionViewMode
     */
    protected $PromotionViewMode = null;

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
     * @param PromotionMethodCodeType $PromotionMethod
     * @param TradingRoleCodeType $PromotionViewMode
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $PromotionMethod = null, $PromotionViewMode = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->PromotionMethod = $PromotionMethod;
      $this->PromotionViewMode = $PromotionViewMode;
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
     * @return \EbayWsdl\GetCrossPromotionsRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return PromotionMethodCodeType
     */
    public function getPromotionMethod()
    {
      return $this->PromotionMethod;
    }

    /**
     * @param PromotionMethodCodeType $PromotionMethod
     * @return \EbayWsdl\GetCrossPromotionsRequestType
     */
    public function setPromotionMethod($PromotionMethod)
    {
      $this->PromotionMethod = $PromotionMethod;
      return $this;
    }

    /**
     * @return TradingRoleCodeType
     */
    public function getPromotionViewMode()
    {
      return $this->PromotionViewMode;
    }

    /**
     * @param TradingRoleCodeType $PromotionViewMode
     * @return \EbayWsdl\GetCrossPromotionsRequestType
     */
    public function setPromotionViewMode($PromotionViewMode)
    {
      $this->PromotionViewMode = $PromotionViewMode;
      return $this;
    }

}
