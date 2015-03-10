<?php

namespace EbayWsdl;

class DeleteSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{

    /**
     * @var int $SaleTemplateID
     */
    protected $SaleTemplateID = null;

    /**
     * @var boolean $DeleteAutomatedListingRule
     */
    protected $DeleteAutomatedListingRule = null;

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
     * @param int $SaleTemplateID
     * @param boolean $DeleteAutomatedListingRule
     * @param boolean $DeleteAutomatedRelistingRule
     * @param boolean $DeleteAutomatedSecondChanceOfferRule
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $SaleTemplateID = null, $DeleteAutomatedListingRule = null, $DeleteAutomatedRelistingRule = null, $DeleteAutomatedSecondChanceOfferRule = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->SaleTemplateID = $SaleTemplateID;
      $this->DeleteAutomatedListingRule = $DeleteAutomatedListingRule;
      $this->DeleteAutomatedRelistingRule = $DeleteAutomatedRelistingRule;
      $this->DeleteAutomatedSecondChanceOfferRule = $DeleteAutomatedSecondChanceOfferRule;
    }

    /**
     * @return int
     */
    public function getSaleTemplateID()
    {
      return $this->SaleTemplateID;
    }

    /**
     * @param int $SaleTemplateID
     * @return \EbayWsdl\DeleteSellingManagerTemplateAutomationRuleRequestType
     */
    public function setSaleTemplateID($SaleTemplateID)
    {
      $this->SaleTemplateID = $SaleTemplateID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeleteAutomatedListingRule()
    {
      return $this->DeleteAutomatedListingRule;
    }

    /**
     * @param boolean $DeleteAutomatedListingRule
     * @return \EbayWsdl\DeleteSellingManagerTemplateAutomationRuleRequestType
     */
    public function setDeleteAutomatedListingRule($DeleteAutomatedListingRule)
    {
      $this->DeleteAutomatedListingRule = $DeleteAutomatedListingRule;
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
     * @return \EbayWsdl\DeleteSellingManagerTemplateAutomationRuleRequestType
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
     * @return \EbayWsdl\DeleteSellingManagerTemplateAutomationRuleRequestType
     */
    public function setDeleteAutomatedSecondChanceOfferRule($DeleteAutomatedSecondChanceOfferRule)
    {
      $this->DeleteAutomatedSecondChanceOfferRule = $DeleteAutomatedSecondChanceOfferRule;
      return $this;
    }

}
