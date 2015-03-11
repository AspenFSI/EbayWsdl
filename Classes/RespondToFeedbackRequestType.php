<?php

namespace EbayWsdl\Classes;

class RespondToFeedbackRequestType extends AbstractRequestType
{

    /**
     * @var string $FeedbackID
     */
    protected $FeedbackID = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var UserIDType $TargetUserID
     */
    protected $TargetUserID = null;

    /**
     * @var FeedbackResponseCodeType $ResponseType
     */
    protected $ResponseType = null;

    /**
     * @var string $ResponseText
     */
    protected $ResponseText = null;

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
     * @param string $FeedbackID
     * @param ItemIDType $ItemID
     * @param string $TransactionID
     * @param UserIDType $TargetUserID
     * @param FeedbackResponseCodeType $ResponseType
     * @param string $ResponseText
     * @param string $OrderLineItemID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $FeedbackID = null, $ItemID = null, $TransactionID = null, $TargetUserID = null, $ResponseType = null, $ResponseText = null, $OrderLineItemID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->FeedbackID = $FeedbackID;
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->TargetUserID = $TargetUserID;
      $this->ResponseType = $ResponseType;
      $this->ResponseText = $ResponseText;
      $this->OrderLineItemID = $OrderLineItemID;
    }

    /**
     * @return string
     */
    public function getFeedbackID()
    {
      return $this->FeedbackID;
    }

    /**
     * @param string $FeedbackID
     * @return \EbayWsdl\Classes\RespondToFeedbackRequestType
     */
    public function setFeedbackID($FeedbackID)
    {
      $this->FeedbackID = $FeedbackID;
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
     * @return \EbayWsdl\Classes\RespondToFeedbackRequestType
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
     * @return \EbayWsdl\Classes\RespondToFeedbackRequestType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return UserIDType
     */
    public function getTargetUserID()
    {
      return $this->TargetUserID;
    }

    /**
     * @param UserIDType $TargetUserID
     * @return \EbayWsdl\Classes\RespondToFeedbackRequestType
     */
    public function setTargetUserID($TargetUserID)
    {
      $this->TargetUserID = $TargetUserID;
      return $this;
    }

    /**
     * @return FeedbackResponseCodeType
     */
    public function getResponseType()
    {
      return $this->ResponseType;
    }

    /**
     * @param FeedbackResponseCodeType $ResponseType
     * @return \EbayWsdl\Classes\RespondToFeedbackRequestType
     */
    public function setResponseType($ResponseType)
    {
      $this->ResponseType = $ResponseType;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseText()
    {
      return $this->ResponseText;
    }

    /**
     * @param string $ResponseText
     * @return \EbayWsdl\Classes\RespondToFeedbackRequestType
     */
    public function setResponseText($ResponseText)
    {
      $this->ResponseText = $ResponseText;
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
     * @return \EbayWsdl\Classes\RespondToFeedbackRequestType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

}
