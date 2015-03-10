<?php

namespace EbayWsdl;

class AddOrderRequestType extends AbstractRequestType
{

    /**
     * @var OrderType $Order
     */
    protected $Order = null;

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
     * @param OrderType $Order
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Order = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Order = $Order;
    }

    /**
     * @return OrderType
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param OrderType $Order
     * @return \EbayWsdl\AddOrderRequestType
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

}
