<?php

namespace EbayWsdl;

class IssueRefundRequestType extends AbstractRequestType
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
     * @var RefundReasonCodeType $RefundReason
     */
    protected $RefundReason = null;

    /**
     * @var RefundTypeCodeType $RefundType
     */
    protected $RefundType = null;

    /**
     * @var AmountType $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var string $RefundMessage
     */
    protected $RefundMessage = null;

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
     * @param RefundReasonCodeType $RefundReason
     * @param RefundTypeCodeType $RefundType
     * @param AmountType $RefundAmount
     * @param string $RefundMessage
     * @param string $OrderLineItemID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $TransactionID = null, $RefundReason = null, $RefundType = null, $RefundAmount = null, $RefundMessage = null, $OrderLineItemID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->RefundReason = $RefundReason;
      $this->RefundType = $RefundType;
      $this->RefundAmount = $RefundAmount;
      $this->RefundMessage = $RefundMessage;
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
     * @return \EbayWsdl\IssueRefundRequestType
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
     * @return \EbayWsdl\IssueRefundRequestType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return RefundReasonCodeType
     */
    public function getRefundReason()
    {
      return $this->RefundReason;
    }

    /**
     * @param RefundReasonCodeType $RefundReason
     * @return \EbayWsdl\IssueRefundRequestType
     */
    public function setRefundReason($RefundReason)
    {
      $this->RefundReason = $RefundReason;
      return $this;
    }

    /**
     * @return RefundTypeCodeType
     */
    public function getRefundType()
    {
      return $this->RefundType;
    }

    /**
     * @param RefundTypeCodeType $RefundType
     * @return \EbayWsdl\IssueRefundRequestType
     */
    public function setRefundType($RefundType)
    {
      $this->RefundType = $RefundType;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getRefundAmount()
    {
      return $this->RefundAmount;
    }

    /**
     * @param AmountType $RefundAmount
     * @return \EbayWsdl\IssueRefundRequestType
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefundMessage()
    {
      return $this->RefundMessage;
    }

    /**
     * @param string $RefundMessage
     * @return \EbayWsdl\IssueRefundRequestType
     */
    public function setRefundMessage($RefundMessage)
    {
      $this->RefundMessage = $RefundMessage;
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
     * @return \EbayWsdl\IssueRefundRequestType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

}
