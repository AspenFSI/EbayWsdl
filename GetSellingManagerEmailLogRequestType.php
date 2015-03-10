<?php

namespace EbayWsdl;

class GetSellingManagerEmailLogRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var int $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var OrderIDType $OrderID
     */
    protected $OrderID = null;

    /**
     * @var TimeRangeType $EmailDateRange
     */
    protected $EmailDateRange = null;

    /**
     * @var string $OrderLineItemID
     */
    protected $OrderLineItemID = null;

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
     * @param int $TransactionID
     * @param OrderIDType $OrderID
     * @param TimeRangeType $EmailDateRange
     * @param string $OrderLineItemID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $TransactionID = null, $OrderID = null, $EmailDateRange = null, $OrderLineItemID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->OrderID = $OrderID;
      $this->EmailDateRange = $EmailDateRange;
      $this->OrderLineItemID = $OrderLineItemID;
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
     * @return \EbayWsdl\GetSellingManagerEmailLogRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionID()
    {
      return $this->TransactionID;
    }

    /**
     * @param int $TransactionID
     * @return \EbayWsdl\GetSellingManagerEmailLogRequestType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return OrderIDType
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param OrderIDType $OrderID
     * @return \EbayWsdl\GetSellingManagerEmailLogRequestType
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return TimeRangeType
     */
    public function getEmailDateRange()
    {
      return $this->EmailDateRange;
    }

    /**
     * @param TimeRangeType $EmailDateRange
     * @return \EbayWsdl\GetSellingManagerEmailLogRequestType
     */
    public function setEmailDateRange($EmailDateRange)
    {
      $this->EmailDateRange = $EmailDateRange;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineItemID()
    {
      return $this->OrderLineItemID;
    }

    /**
     * @param string $OrderLineItemID
     * @return \EbayWsdl\GetSellingManagerEmailLogRequestType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

}
