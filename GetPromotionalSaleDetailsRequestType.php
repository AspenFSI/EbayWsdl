<?php

namespace EbayWsdl;

class GetPromotionalSaleDetailsRequestType extends AbstractRequestType
{

    /**
     * @var int $PromotionalSaleID
     */
    protected $PromotionalSaleID = null;

    /**
     * @var PromotionalSaleStatusCodeType[] $PromotionalSaleStatus
     */
    protected $PromotionalSaleStatus = null;

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
     * @param int $PromotionalSaleID
     * @param PromotionalSaleStatusCodeType[] $PromotionalSaleStatus
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $PromotionalSaleID = null, array $PromotionalSaleStatus = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->PromotionalSaleID = $PromotionalSaleID;
      $this->PromotionalSaleStatus = $PromotionalSaleStatus;
    }

    /**
     * @return int
     */
    public function getPromotionalSaleID()
    {
      return $this->PromotionalSaleID;
    }

    /**
     * @param int $PromotionalSaleID
     * @return \EbayWsdl\GetPromotionalSaleDetailsRequestType
     */
    public function setPromotionalSaleID($PromotionalSaleID)
    {
      $this->PromotionalSaleID = $PromotionalSaleID;
      return $this;
    }

    /**
     * @return PromotionalSaleStatusCodeType[]
     */
    public function getPromotionalSaleStatus()
    {
      return $this->PromotionalSaleStatus;
    }

    /**
     * @param PromotionalSaleStatusCodeType[] $PromotionalSaleStatus
     * @return \EbayWsdl\GetPromotionalSaleDetailsRequestType
     */
    public function setPromotionalSaleStatus(array $PromotionalSaleStatus)
    {
      $this->PromotionalSaleStatus = $PromotionalSaleStatus;
      return $this;
    }

}
