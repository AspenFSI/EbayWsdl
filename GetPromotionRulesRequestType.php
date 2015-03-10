<?php

namespace EbayWsdl;

class GetPromotionRulesRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var int $StoreCategoryID
     */
    protected $StoreCategoryID = null;

    /**
     * @var PromotionMethodCodeType $PromotionMethod
     */
    protected $PromotionMethod = null;

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
     * @param int $StoreCategoryID
     * @param PromotionMethodCodeType $PromotionMethod
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $StoreCategoryID = null, $PromotionMethod = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->StoreCategoryID = $StoreCategoryID;
      $this->PromotionMethod = $PromotionMethod;
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
     * @return \EbayWsdl\GetPromotionRulesRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return int
     */
    public function getStoreCategoryID()
    {
      return $this->StoreCategoryID;
    }

    /**
     * @param int $StoreCategoryID
     * @return \EbayWsdl\GetPromotionRulesRequestType
     */
    public function setStoreCategoryID($StoreCategoryID)
    {
      $this->StoreCategoryID = $StoreCategoryID;
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
     * @return \EbayWsdl\GetPromotionRulesRequestType
     */
    public function setPromotionMethod($PromotionMethod)
    {
      $this->PromotionMethod = $PromotionMethod;
      return $this;
    }

}
