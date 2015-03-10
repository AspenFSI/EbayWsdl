<?php

namespace EbayWsdl;

class ReviseSellingManagerSaleRecordRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var OrderIDType $OrderID
     */
    protected $OrderID = null;

    /**
     * @var SellingManagerSoldOrderType $SellingManagerSoldOrder
     */
    protected $SellingManagerSoldOrder = null;

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
     * @param string $TransactionID
     * @param OrderIDType $OrderID
     * @param SellingManagerSoldOrderType $SellingManagerSoldOrder
     * @param string $OrderLineItemID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $TransactionID = null, $OrderID = null, $SellingManagerSoldOrder = null, $OrderLineItemID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->OrderID = $OrderID;
      $this->SellingManagerSoldOrder = $SellingManagerSoldOrder;
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
     * @return \EbayWsdl\ReviseSellingManagerSaleRecordRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
      return $this->TransactionID;
    }

    /**
     * @param string $TransactionID
     * @return \EbayWsdl\ReviseSellingManagerSaleRecordRequestType
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
     * @return \EbayWsdl\ReviseSellingManagerSaleRecordRequestType
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return SellingManagerSoldOrderType
     */
    public function getSellingManagerSoldOrder()
    {
      return $this->SellingManagerSoldOrder;
    }

    /**
     * @param SellingManagerSoldOrderType $SellingManagerSoldOrder
     * @return \EbayWsdl\ReviseSellingManagerSaleRecordRequestType
     */
    public function setSellingManagerSoldOrder($SellingManagerSoldOrder)
    {
      $this->SellingManagerSoldOrder = $SellingManagerSoldOrder;
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
     * @return \EbayWsdl\ReviseSellingManagerSaleRecordRequestType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

}
