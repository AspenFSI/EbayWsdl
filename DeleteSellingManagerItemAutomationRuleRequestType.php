<?php

namespace EbayWsdl;

class DeleteSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var boolean $DeleteAutomatedRelistingRule
     */
    protected $DeleteAutomatedRelistingRule = null;

    /**
     * @var boolean $DeleteAutomatedSecondChanceOfferRule
     */
    protected $DeleteAutomatedSecondChanceOfferRule = null;

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
     * @param boolean $DeleteAutomatedRelistingRule
     * @param boolean $DeleteAutomatedSecondChanceOfferRule
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $DeleteAutomatedRelistingRule = null, $DeleteAutomatedSecondChanceOfferRule = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->DeleteAutomatedRelistingRule = $DeleteAutomatedRelistingRule;
      $this->DeleteAutomatedSecondChanceOfferRule = $DeleteAutomatedSecondChanceOfferRule;
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
     * @return \EbayWsdl\DeleteSellingManagerItemAutomationRuleRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeleteAutomatedRelistingRule()
    {
      return $this->DeleteAutomatedRelistingRule;
    }

    /**
     * @param boolean $DeleteAutomatedRelistingRule
     * @return \EbayWsdl\DeleteSellingManagerItemAutomationRuleRequestType
     */
    public function setDeleteAutomatedRelistingRule($DeleteAutomatedRelistingRule)
    {
      $this->DeleteAutomatedRelistingRule = $DeleteAutomatedRelistingRule;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeleteAutomatedSecondChanceOfferRule()
    {
      return $this->DeleteAutomatedSecondChanceOfferRule;
    }

    /**
     * @param boolean $DeleteAutomatedSecondChanceOfferRule
     * @return \EbayWsdl\DeleteSellingManagerItemAutomationRuleRequestType
     */
    public function setDeleteAutomatedSecondChanceOfferRule($DeleteAutomatedSecondChanceOfferRule)
    {
      $this->DeleteAutomatedSecondChanceOfferRule = $DeleteAutomatedSecondChanceOfferRule;
      return $this;
    }

}
