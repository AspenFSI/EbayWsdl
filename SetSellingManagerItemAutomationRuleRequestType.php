<?php

namespace EbayWsdl;

class SetSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var SellingManagerAutoRelistType $AutomatedRelistingRule
     */
    protected $AutomatedRelistingRule = null;

    /**
     * @var SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
     */
    protected $AutomatedSecondChanceOfferRule = null;

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
     * @param SellingManagerAutoRelistType $AutomatedRelistingRule
     * @param SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $AutomatedRelistingRule = null, $AutomatedSecondChanceOfferRule = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->AutomatedRelistingRule = $AutomatedRelistingRule;
      $this->AutomatedSecondChanceOfferRule = $AutomatedSecondChanceOfferRule;
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
     * @return \EbayWsdl\SetSellingManagerItemAutomationRuleRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return SellingManagerAutoRelistType
     */
    public function getAutomatedRelistingRule()
    {
      return $this->AutomatedRelistingRule;
    }

    /**
     * @param SellingManagerAutoRelistType $AutomatedRelistingRule
     * @return \EbayWsdl\SetSellingManagerItemAutomationRuleRequestType
     */
    public function setAutomatedRelistingRule($AutomatedRelistingRule)
    {
      $this->AutomatedRelistingRule = $AutomatedRelistingRule;
      return $this;
    }

    /**
     * @return SellingManagerAutoSecondChanceOfferType
     */
    public function getAutomatedSecondChanceOfferRule()
    {
      return $this->AutomatedSecondChanceOfferRule;
    }

    /**
     * @param SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
     * @return \EbayWsdl\SetSellingManagerItemAutomationRuleRequestType
     */
    public function setAutomatedSecondChanceOfferRule($AutomatedSecondChanceOfferRule)
    {
      $this->AutomatedSecondChanceOfferRule = $AutomatedSecondChanceOfferRule;
      return $this;
    }

}
