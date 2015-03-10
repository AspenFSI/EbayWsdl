<?php

namespace EbayWsdl;

class SellingManagerSoldTransactionType
{

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var int $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var int $SaleRecordID
     */
    protected $SaleRecordID = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var int $QuantitySold
     */
    protected $QuantitySold = null;

    /**
     * @var AmountType $ItemPrice
     */
    protected $ItemPrice = null;

    /**
     * @var AmountType $SubtotalAmount
     */
    protected $SubtotalAmount = null;

    /**
     * @var string $ItemTitle
     */
    protected $ItemTitle = null;

    /**
     * @var ListingTypeCodeType $ListingType
     */
    protected $ListingType = null;

    /**
     * @var boolean $Relisted
     */
    protected $Relisted = null;

    /**
     * @var int $WatchCount
     */
    protected $WatchCount = null;

    /**
     * @var AmountType $StartPrice
     */
    protected $StartPrice = null;

    /**
     * @var AmountType $ReservePrice
     */
    protected $ReservePrice = null;

    /**
     * @var boolean $SecondChanceOfferSent
     */
    protected $SecondChanceOfferSent = null;

    /**
     * @var string $CustomLabel
     */
    protected $CustomLabel = null;

    /**
     * @var TransactionPlatformCodeType $SoldOn
     */
    protected $SoldOn = null;

    /**
     * @var TransactionPlatformCodeType[] $ListedOn
     */
    protected $ListedOn = null;

    /**
     * @var ShipmentType $Shipment
     */
    protected $Shipment = null;

    /**
     * @var boolean $CharityListing
     */
    protected $CharityListing = null;

    /**
     * @var VariationType $Variation
     */
    protected $Variation = null;

    /**
     * @var string $OrderLineItemID
     */
    protected $OrderLineItemID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $InvoiceNumber
     * @param int $TransactionID
     * @param int $SaleRecordID
     * @param ItemIDType $ItemID
     * @param int $QuantitySold
     * @param AmountType $ItemPrice
     * @param AmountType $SubtotalAmount
     * @param string $ItemTitle
     * @param ListingTypeCodeType $ListingType
     * @param boolean $Relisted
     * @param int $WatchCount
     * @param AmountType $StartPrice
     * @param AmountType $ReservePrice
     * @param boolean $SecondChanceOfferSent
     * @param string $CustomLabel
     * @param TransactionPlatformCodeType $SoldOn
     * @param TransactionPlatformCodeType[] $ListedOn
     * @param ShipmentType $Shipment
     * @param boolean $CharityListing
     * @param VariationType $Variation
     * @param string $OrderLineItemID
     * @param string $any
     */
    public function __construct($InvoiceNumber = null, $TransactionID = null, $SaleRecordID = null, $ItemID = null, $QuantitySold = null, $ItemPrice = null, $SubtotalAmount = null, $ItemTitle = null, $ListingType = null, $Relisted = null, $WatchCount = null, $StartPrice = null, $ReservePrice = null, $SecondChanceOfferSent = null, $CustomLabel = null, $SoldOn = null, array $ListedOn = null, $Shipment = null, $CharityListing = null, $Variation = null, $OrderLineItemID = null, $any = null)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      $this->TransactionID = $TransactionID;
      $this->SaleRecordID = $SaleRecordID;
      $this->ItemID = $ItemID;
      $this->QuantitySold = $QuantitySold;
      $this->ItemPrice = $ItemPrice;
      $this->SubtotalAmount = $SubtotalAmount;
      $this->ItemTitle = $ItemTitle;
      $this->ListingType = $ListingType;
      $this->Relisted = $Relisted;
      $this->WatchCount = $WatchCount;
      $this->StartPrice = $StartPrice;
      $this->ReservePrice = $ReservePrice;
      $this->SecondChanceOfferSent = $SecondChanceOfferSent;
      $this->CustomLabel = $CustomLabel;
      $this->SoldOn = $SoldOn;
      $this->ListedOn = $ListedOn;
      $this->Shipment = $Shipment;
      $this->CharityListing = $CharityListing;
      $this->Variation = $Variation;
      $this->OrderLineItemID = $OrderLineItemID;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
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
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return int
     */
    public function getSaleRecordID()
    {
      return $this->SaleRecordID;
    }

    /**
     * @param int $SaleRecordID
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setSaleRecordID($SaleRecordID)
    {
      $this->SaleRecordID = $SaleRecordID;
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
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantitySold()
    {
      return $this->QuantitySold;
    }

    /**
     * @param int $QuantitySold
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setQuantitySold($QuantitySold)
    {
      $this->QuantitySold = $QuantitySold;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getItemPrice()
    {
      return $this->ItemPrice;
    }

    /**
     * @param AmountType $ItemPrice
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setItemPrice($ItemPrice)
    {
      $this->ItemPrice = $ItemPrice;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getSubtotalAmount()
    {
      return $this->SubtotalAmount;
    }

    /**
     * @param AmountType $SubtotalAmount
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setSubtotalAmount($SubtotalAmount)
    {
      $this->SubtotalAmount = $SubtotalAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemTitle()
    {
      return $this->ItemTitle;
    }

    /**
     * @param string $ItemTitle
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setItemTitle($ItemTitle)
    {
      $this->ItemTitle = $ItemTitle;
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
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setListingType($ListingType)
    {
      $this->ListingType = $ListingType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRelisted()
    {
      return $this->Relisted;
    }

    /**
     * @param boolean $Relisted
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setRelisted($Relisted)
    {
      $this->Relisted = $Relisted;
      return $this;
    }

    /**
     * @return int
     */
    public function getWatchCount()
    {
      return $this->WatchCount;
    }

    /**
     * @param int $WatchCount
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setWatchCount($WatchCount)
    {
      $this->WatchCount = $WatchCount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getStartPrice()
    {
      return $this->StartPrice;
    }

    /**
     * @param AmountType $StartPrice
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setStartPrice($StartPrice)
    {
      $this->StartPrice = $StartPrice;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getReservePrice()
    {
      return $this->ReservePrice;
    }

    /**
     * @param AmountType $ReservePrice
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setReservePrice($ReservePrice)
    {
      $this->ReservePrice = $ReservePrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSecondChanceOfferSent()
    {
      return $this->SecondChanceOfferSent;
    }

    /**
     * @param boolean $SecondChanceOfferSent
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setSecondChanceOfferSent($SecondChanceOfferSent)
    {
      $this->SecondChanceOfferSent = $SecondChanceOfferSent;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomLabel()
    {
      return $this->CustomLabel;
    }

    /**
     * @param string $CustomLabel
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setCustomLabel($CustomLabel)
    {
      $this->CustomLabel = $CustomLabel;
      return $this;
    }

    /**
     * @return TransactionPlatformCodeType
     */
    public function getSoldOn()
    {
      return $this->SoldOn;
    }

    /**
     * @param TransactionPlatformCodeType $SoldOn
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setSoldOn($SoldOn)
    {
      $this->SoldOn = $SoldOn;
      return $this;
    }

    /**
     * @return TransactionPlatformCodeType[]
     */
    public function getListedOn()
    {
      return $this->ListedOn;
    }

    /**
     * @param TransactionPlatformCodeType[] $ListedOn
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setListedOn(array $ListedOn)
    {
      $this->ListedOn = $ListedOn;
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
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setShipment($Shipment)
    {
      $this->Shipment = $Shipment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCharityListing()
    {
      return $this->CharityListing;
    }

    /**
     * @param boolean $CharityListing
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setCharityListing($CharityListing)
    {
      $this->CharityListing = $CharityListing;
      return $this;
    }

    /**
     * @return VariationType
     */
    public function getVariation()
    {
      return $this->Variation;
    }

    /**
     * @param VariationType $Variation
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setVariation($Variation)
    {
      $this->Variation = $Variation;
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
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \EbayWsdl\SellingManagerSoldTransactionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
