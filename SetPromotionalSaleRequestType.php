<?php

namespace EbayWsdl;

class SetPromotionalSaleRequestType extends AbstractRequestType
{

    /**
     * @var ModifyActionCodeType $Action
     */
    protected $Action = null;

    /**
     * @var PromotionalSaleType $PromotionalSaleDetails
     */
    protected $PromotionalSaleDetails = null;

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
     * @param ModifyActionCodeType $Action
     * @param PromotionalSaleType $PromotionalSaleDetails
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Action = null, $PromotionalSaleDetails = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Action = $Action;
      $this->PromotionalSaleDetails = $PromotionalSaleDetails;
    }

    /**
     * @return ModifyActionCodeType
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param ModifyActionCodeType $Action
     * @return \EbayWsdl\SetPromotionalSaleRequestType
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return PromotionalSaleType
     */
    public function getPromotionalSaleDetails()
    {
      return $this->PromotionalSaleDetails;
    }

    /**
     * @param PromotionalSaleType $PromotionalSaleDetails
     * @return \EbayWsdl\SetPromotionalSaleRequestType
     */
    public function setPromotionalSaleDetails($PromotionalSaleDetails)
    {
      $this->PromotionalSaleDetails = $PromotionalSaleDetails;
      return $this;
    }

}
