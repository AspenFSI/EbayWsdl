<?php

namespace EbayWsdl\Classes;

class CompleteSaleRequestType extends AbstractRequestType
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
     * @var FeedbackInfoType $FeedbackInfo
     */
    protected $FeedbackInfo = null;

    /**
     * @var boolean $Shipped
     */
    protected $Shipped = null;

    /**
     * @var boolean $Paid
     */
    protected $Paid = null;

    /**
     * @var ListingTypeCodeType $ListingType
     */
    protected $ListingType = null;

    /**
     * @var ShipmentType $Shipment
     */
    protected $Shipment = null;

    /**
     * @var string $OrderID
     */
    protected $OrderID = null;

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
     * @param FeedbackInfoType $FeedbackInfo
     * @param boolean $Shipped
     * @param boolean $Paid
     * @param ListingTypeCodeType $ListingType
     * @param ShipmentType $Shipment
     * @param string $OrderID
     * @param string $OrderLineItemID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $TransactionID = null, $FeedbackInfo = null, $Shipped = null, $Paid = null, $ListingType = null, $Shipment = null, $OrderID = null, $OrderLineItemID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->FeedbackInfo = $FeedbackInfo;
      $this->Shipped = $Shipped;
      $this->Paid = $Paid;
      $this->ListingType = $ListingType;
      $this->Shipment = $Shipment;
      $this->OrderID = $OrderID;
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
     * @return \EbayWsdl\Classes\CompleteSaleRequestType
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
     * @return \EbayWsdl\Classes\CompleteSaleRequestType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return FeedbackInfoType
     */
    public function getFeedbackInfo()
    {
      return $this->FeedbackInfo;
    }

    /**
     * @param FeedbackInfoType $FeedbackInfo
     * @return \EbayWsdl\Classes\CompleteSaleRequestType
     */
    public function setFeedbackInfo($FeedbackInfo)
    {
      $this->FeedbackInfo = $FeedbackInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipped()
    {
      return $this->Shipped;
    }

    /**
     * @param boolean $Shipped
     * @return \EbayWsdl\Classes\CompleteSaleRequestType
     */
    public function setShipped($Shipped)
    {
      $this->Shipped = $Shipped;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaid()
    {
      return $this->Paid;
    }

    /**
     * @param boolean $Paid
     * @return \EbayWsdl\Classes\CompleteSaleRequestType
     */
    public function setPaid($Paid)
    {
      $this->Paid = $Paid;
      return $this;
    }

    /**
     * @return ListingTypeCodeType
     */
    public function getListingType()
    {
      return $this->ListingType;
    }

    /**
     * @param ListingTypeCodeType $ListingType
     * @return \EbayWsdl\Classes\CompleteSaleRequestType
     */
    public function setListingType($ListingType)
    {
      $this->ListingType = $ListingType;
      return $this;
    }

    /**
     * @return ShipmentType
     */
    public function getShipment()
    {
      return $this->Shipment;
    }

    /**
     * @param ShipmentType $Shipment
     * @return \EbayWsdl\Classes\CompleteSaleRequestType
     */
    public function setShipment($Shipment)
    {
      $this->Shipment = $Shipment;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param string $OrderID
     * @return \EbayWsdl\Classes\CompleteSaleRequestType
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
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
     * @return \EbayWsdl\Classes\CompleteSaleRequestType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

}
