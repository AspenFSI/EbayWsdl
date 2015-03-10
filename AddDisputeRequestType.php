<?php

namespace EbayWsdl;

class AddDisputeRequestType extends AbstractRequestType
{

    /**
     * @var DisputeExplanationCodeType $DisputeExplanation
     */
    protected $DisputeExplanation = null;

    /**
     * @var DisputeReasonCodeType $DisputeReason
     */
    protected $DisputeReason = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

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
     * @param DisputeExplanationCodeType $DisputeExplanation
     * @param DisputeReasonCodeType $DisputeReason
     * @param ItemIDType $ItemID
     * @param string $TransactionID
     * @param string $OrderLineItemID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $DisputeExplanation = null, $DisputeReason = null, $ItemID = null, $TransactionID = null, $OrderLineItemID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->DisputeExplanation = $DisputeExplanation;
      $this->DisputeReason = $DisputeReason;
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->OrderLineItemID = $OrderLineItemID;
    }

    /**
     * @return DisputeExplanationCodeType
     */
    public function getDisputeExplanation()
    {
      return $this->DisputeExplanation;
    }

    /**
     * @param DisputeExplanationCodeType $DisputeExplanation
     * @return \EbayWsdl\AddDisputeRequestType
     */
    public function setDisputeExplanation($DisputeExplanation)
    {
      $this->DisputeExplanation = $DisputeExplanation;
      return $this;
    }

    /**
     * @return DisputeReasonCodeType
     */
    public function getDisputeReason()
    {
      return $this->DisputeReason;
    }

    /**
     * @param DisputeReasonCodeType $DisputeReason
     * @return \EbayWsdl\AddDisputeRequestType
     */
    public function setDisputeReason($DisputeReason)
    {
      $this->DisputeReason = $DisputeReason;
      return $this;
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
     * @return \EbayWsdl\AddDisputeRequestType
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
     * @return \EbayWsdl\AddDisputeRequestType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
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
     * @return \EbayWsdl\AddDisputeRequestType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

}
