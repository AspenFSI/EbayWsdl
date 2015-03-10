<?php

namespace EbayWsdl;

class SetSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{

    /**
     * @var int $SaleTemplateID
     */
    protected $SaleTemplateID = null;

    /**
     * @var SellingManagerAutoListType $AutomatedListingRule
     */
    protected $AutomatedListingRule = null;

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
     * @param int $SaleTemplateID
     * @param SellingManagerAutoListType $AutomatedListingRule
     * @param SellingManagerAutoRelistType $AutomatedRelistingRule
     * @param SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $SaleTemplateID = null, $AutomatedListingRule = null, $AutomatedRelistingRule = null, $AutomatedSecondChanceOfferRule = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->SaleTemplateID = $SaleTemplateID;
      $this->AutomatedListingRule = $AutomatedListingRule;
      $this->AutomatedRelistingRule = $AutomatedRelistingRule;
      $this->AutomatedSecondChanceOfferRule = $AutomatedSecondChanceOfferRule;
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
     * @return \EbayWsdl\SetSellingManagerTemplateAutomationRuleRequestType
     */
    public function setSaleTemplateID($SaleTemplateID)
    {
      $this->SaleTemplateID = $SaleTemplateID;
      return $this;
    }

    /**
     * @return SellingManagerAutoListType
     */
    public function getAutomatedListingRule()
    {
      return $this->AutomatedListingRule;
    }

    /**
     * @param SellingManagerAutoListType $AutomatedListingRule
     * @return \EbayWsdl\SetSellingManagerTemplateAutomationRuleRequestType
     */
    public function setAutomatedListingRule($AutomatedListingRule)
    {
      $this->AutomatedListingRule = $AutomatedListingRule;
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
     * @return \EbayWsdl\SetSellingManagerTemplateAutomationRuleRequestType
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
     * @return \EbayWsdl\SetSellingManagerTemplateAutomationRuleRequestType
     */
    public function setAutomatedSecondChanceOfferRule($AutomatedSecondChanceOfferRule)
    {
      $this->AutomatedSecondChanceOfferRule = $AutomatedSecondChanceOfferRule;
      return $this;
    }

}
