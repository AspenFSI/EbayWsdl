<?php

namespace EbayWsdl\Classes;

class SellingManagerSoldOrderType
{

    /**
     * @var SellingManagerSoldTransactionType[] $SellingManagerSoldTransaction
     */
    protected $SellingManagerSoldTransaction = null;

    /**
     * @var AddressType $ShippingAddress
     */
    protected $ShippingAddress = null;

    /**
     * @var ShippingDetailsType $ShippingDetails
     */
    protected $ShippingDetails = null;

    /**
     * @var AmountType $CashOnDeliveryCost
     */
    protected $CashOnDeliveryCost = null;

    /**
     * @var AmountType $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var int $TotalQuantity
     */
    protected $TotalQuantity = null;

    /**
     * @var AmountType $ItemCost
     */
    protected $ItemCost = null;

    /**
     * @var VATRateType[] $VATRate
     */
    protected $VATRate = null;

    /**
     * @var AmountType $NetInsuranceFee
     */
    protected $NetInsuranceFee = null;

    /**
     * @var AmountType $VATInsuranceFee
     */
    protected $VATInsuranceFee = null;

    /**
     * @var AmountType $VATShippingFee
     */
    protected $VATShippingFee = null;

    /**
     * @var AmountType $NetShippingFee
     */
    protected $NetShippingFee = null;

    /**
     * @var AmountType $NetTotalAmount
     */
    protected $NetTotalAmount = null;

    /**
     * @var AmountType $VATTotalAmount
     */
    protected $VATTotalAmount = null;

    /**
     * @var AmountType $ActualShippingCost
     */
    protected $ActualShippingCost = null;

    /**
     * @var AmountType $AdjustmentAmount
     */
    protected $AdjustmentAmount = null;

    /**
     * @var string $NotesToBuyer
     */
    protected $NotesToBuyer = null;

    /**
     * @var string $NotesFromBuyer
     */
    protected $NotesFromBuyer = null;

    /**
     * @var string $NotesToSeller
     */
    protected $NotesToSeller = null;

    /**
     * @var SellingManagerOrderStatusType $OrderStatus
     */
    protected $OrderStatus = null;

    /**
     * @var UnpaidItemStatusTypeCodeType $UnpaidItemStatus
     */
    protected $UnpaidItemStatus = null;

    /**
     * @var AmountType $SalePrice
     */
    protected $SalePrice = null;

    /**
     * @var int $EmailsSent
     */
    protected $EmailsSent = null;

    /**
     * @var int $DaysSinceSale
     */
    protected $DaysSinceSale = null;

    /**
     * @var string $BuyerID
     */
    protected $BuyerID = null;

    /**
     * @var string $BuyerEmail
     */
    protected $BuyerEmail = null;

    /**
     * @var int $SaleRecordID
     */
    protected $SaleRecordID = null;

    /**
     * @var \DateTime $CreationTime
     */
    protected $CreationTime = null;

    /**
     * @var AmountType $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var string $RefundStatus
     */
    protected $RefundStatus = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SellingManagerSoldTransactionType[] $SellingManagerSoldTransaction
     * @param AddressType $ShippingAddress
     * @param ShippingDetailsType $ShippingDetails
     * @param AmountType $CashOnDeliveryCost
     * @param AmountType $TotalAmount
     * @param int $TotalQuantity
     * @param AmountType $ItemCost
     * @param VATRateType[] $VATRate
     * @param AmountType $NetInsuranceFee
     * @param AmountType $VATInsuranceFee
     * @param AmountType $VATShippingFee
     * @param AmountType $NetShippingFee
     * @param AmountType $NetTotalAmount
     * @param AmountType $VATTotalAmount
     * @param AmountType $ActualShippingCost
     * @param AmountType $AdjustmentAmount
     * @param string $NotesToBuyer
     * @param string $NotesFromBuyer
     * @param string $NotesToSeller
     * @param SellingManagerOrderStatusType $OrderStatus
     * @param UnpaidItemStatusTypeCodeType $UnpaidItemStatus
     * @param AmountType $SalePrice
     * @param int $EmailsSent
     * @param int $DaysSinceSale
     * @param string $BuyerID
     * @param string $BuyerEmail
     * @param int $SaleRecordID
     * @param \DateTime $CreationTime
     * @param AmountType $RefundAmount
     * @param string $RefundStatus
     * @param string $any
     */
    public function __construct(array $SellingManagerSoldTransaction = null, $ShippingAddress = null, $ShippingDetails = null, $CashOnDeliveryCost = null, $TotalAmount = null, $TotalQuantity = null, $ItemCost = null, array $VATRate = null, $NetInsuranceFee = null, $VATInsuranceFee = null, $VATShippingFee = null, $NetShippingFee = null, $NetTotalAmount = null, $VATTotalAmount = null, $ActualShippingCost = null, $AdjustmentAmount = null, $NotesToBuyer = null, $NotesFromBuyer = null, $NotesToSeller = null, $OrderStatus = null, $UnpaidItemStatus = null, $SalePrice = null, $EmailsSent = null, $DaysSinceSale = null, $BuyerID = null, $BuyerEmail = null, $SaleRecordID = null, \DateTime $CreationTime = null, $RefundAmount = null, $RefundStatus = null, $any = null)
    {
      $this->SellingManagerSoldTransaction = $SellingManagerSoldTransaction;
      $this->ShippingAddress = $ShippingAddress;
      $this->ShippingDetails = $ShippingDetails;
      $this->CashOnDeliveryCost = $CashOnDeliveryCost;
      $this->TotalAmount = $TotalAmount;
      $this->TotalQuantity = $TotalQuantity;
      $this->ItemCost = $ItemCost;
      $this->VATRate = $VATRate;
      $this->NetInsuranceFee = $NetInsuranceFee;
      $this->VATInsuranceFee = $VATInsuranceFee;
      $this->VATShippingFee = $VATShippingFee;
      $this->NetShippingFee = $NetShippingFee;
      $this->NetTotalAmount = $NetTotalAmount;
      $this->VATTotalAmount = $VATTotalAmount;
      $this->ActualShippingCost = $ActualShippingCost;
      $this->AdjustmentAmount = $AdjustmentAmount;
      $this->NotesToBuyer = $NotesToBuyer;
      $this->NotesFromBuyer = $NotesFromBuyer;
      $this->NotesToSeller = $NotesToSeller;
      $this->OrderStatus = $OrderStatus;
      $this->UnpaidItemStatus = $UnpaidItemStatus;
      $this->SalePrice = $SalePrice;
      $this->EmailsSent = $EmailsSent;
      $this->DaysSinceSale = $DaysSinceSale;
      $this->BuyerID = $BuyerID;
      $this->BuyerEmail = $BuyerEmail;
      $this->SaleRecordID = $SaleRecordID;
      $this->CreationTime = $CreationTime ? $CreationTime->format(\DateTime::ATOM) : null;
      $this->RefundAmount = $RefundAmount;
      $this->RefundStatus = $RefundStatus;
      $this->any = $any;
    }

    /**
     * @return SellingManagerSoldTransactionType[]
     */
    public function getSellingManagerSoldTransaction()
    {
      return $this->SellingManagerSoldTransaction;
    }

    /**
     * @param SellingManagerSoldTransactionType[] $SellingManagerSoldTransaction
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setSellingManagerSoldTransaction(array $SellingManagerSoldTransaction)
    {
      $this->SellingManagerSoldTransaction = $SellingManagerSoldTransaction;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getShippingAddress()
    {
      return $this->ShippingAddress;
    }

    /**
     * @param AddressType $ShippingAddress
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setShippingAddress($ShippingAddress)
    {
      $this->ShippingAddress = $ShippingAddress;
      return $this;
    }

    /**
     * @return ShippingDetailsType
     */
    public function getShippingDetails()
    {
      return $this->ShippingDetails;
    }

    /**
     * @param ShippingDetailsType $ShippingDetails
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setShippingDetails($ShippingDetails)
    {
      $this->ShippingDetails = $ShippingDetails;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getCashOnDeliveryCost()
    {
      return $this->CashOnDeliveryCost;
    }

    /**
     * @param AmountType $CashOnDeliveryCost
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setCashOnDeliveryCost($CashOnDeliveryCost)
    {
      $this->CashOnDeliveryCost = $CashOnDeliveryCost;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param AmountType $TotalAmount
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalQuantity()
    {
      return $this->TotalQuantity;
    }

    /**
     * @param int $TotalQuantity
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setTotalQuantity($TotalQuantity)
    {
      $this->TotalQuantity = $TotalQuantity;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getItemCost()
    {
      return $this->ItemCost;
    }

    /**
     * @param AmountType $ItemCost
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setItemCost($ItemCost)
    {
      $this->ItemCost = $ItemCost;
      return $this;
    }

    /**
     * @return VATRateType[]
     */
    public function getVATRate()
    {
      return $this->VATRate;
    }

    /**
     * @param VATRateType[] $VATRate
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setVATRate(array $VATRate)
    {
      $this->VATRate = $VATRate;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getNetInsuranceFee()
    {
      return $this->NetInsuranceFee;
    }

    /**
     * @param AmountType $NetInsuranceFee
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setNetInsuranceFee($NetInsuranceFee)
    {
      $this->NetInsuranceFee = $NetInsuranceFee;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getVATInsuranceFee()
    {
      return $this->VATInsuranceFee;
    }

    /**
     * @param AmountType $VATInsuranceFee
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setVATInsuranceFee($VATInsuranceFee)
    {
      $this->VATInsuranceFee = $VATInsuranceFee;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getVATShippingFee()
    {
      return $this->VATShippingFee;
    }

    /**
     * @param AmountType $VATShippingFee
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setVATShippingFee($VATShippingFee)
    {
      $this->VATShippingFee = $VATShippingFee;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getNetShippingFee()
    {
      return $this->NetShippingFee;
    }

    /**
     * @param AmountType $NetShippingFee
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setNetShippingFee($NetShippingFee)
    {
      $this->NetShippingFee = $NetShippingFee;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getNetTotalAmount()
    {
      return $this->NetTotalAmount;
    }

    /**
     * @param AmountType $NetTotalAmount
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setNetTotalAmount($NetTotalAmount)
    {
      $this->NetTotalAmount = $NetTotalAmount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getVATTotalAmount()
    {
      return $this->VATTotalAmount;
    }

    /**
     * @param AmountType $VATTotalAmount
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setVATTotalAmount($VATTotalAmount)
    {
      $this->VATTotalAmount = $VATTotalAmount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getActualShippingCost()
    {
      return $this->ActualShippingCost;
    }

    /**
     * @param AmountType $ActualShippingCost
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setActualShippingCost($ActualShippingCost)
    {
      $this->ActualShippingCost = $ActualShippingCost;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getAdjustmentAmount()
    {
      return $this->AdjustmentAmount;
    }

    /**
     * @param AmountType $AdjustmentAmount
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setAdjustmentAmount($AdjustmentAmount)
    {
      $this->AdjustmentAmount = $AdjustmentAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotesToBuyer()
    {
      return $this->NotesToBuyer;
    }

    /**
     * @param string $NotesToBuyer
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setNotesToBuyer($NotesToBuyer)
    {
      $this->NotesToBuyer = $NotesToBuyer;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotesFromBuyer()
    {
      return $this->NotesFromBuyer;
    }

    /**
     * @param string $NotesFromBuyer
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setNotesFromBuyer($NotesFromBuyer)
    {
      $this->NotesFromBuyer = $NotesFromBuyer;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotesToSeller()
    {
      return $this->NotesToSeller;
    }

    /**
     * @param string $NotesToSeller
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setNotesToSeller($NotesToSeller)
    {
      $this->NotesToSeller = $NotesToSeller;
      return $this;
    }

    /**
     * @return SellingManagerOrderStatusType
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param SellingManagerOrderStatusType $OrderStatus
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setOrderStatus($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
      return $this;
    }

    /**
     * @return UnpaidItemStatusTypeCodeType
     */
    public function getUnpaidItemStatus()
    {
      return $this->UnpaidItemStatus;
    }

    /**
     * @param UnpaidItemStatusTypeCodeType $UnpaidItemStatus
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setUnpaidItemStatus($UnpaidItemStatus)
    {
      $this->UnpaidItemStatus = $UnpaidItemStatus;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getSalePrice()
    {
      return $this->SalePrice;
    }

    /**
     * @param AmountType $SalePrice
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setSalePrice($SalePrice)
    {
      $this->SalePrice = $SalePrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getEmailsSent()
    {
      return $this->EmailsSent;
    }

    /**
     * @param int $EmailsSent
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setEmailsSent($EmailsSent)
    {
      $this->EmailsSent = $EmailsSent;
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysSinceSale()
    {
      return $this->DaysSinceSale;
    }

    /**
     * @param int $DaysSinceSale
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setDaysSinceSale($DaysSinceSale)
    {
      $this->DaysSinceSale = $DaysSinceSale;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerID()
    {
      return $this->BuyerID;
    }

    /**
     * @param string $BuyerID
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setBuyerID($BuyerID)
    {
      $this->BuyerID = $BuyerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerEmail()
    {
      return $this->BuyerEmail;
    }

    /**
     * @param string $BuyerEmail
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setBuyerEmail($BuyerEmail)
    {
      $this->BuyerEmail = $BuyerEmail;
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
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setSaleRecordID($SaleRecordID)
    {
      $this->SaleRecordID = $SaleRecordID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationTime()
    {
      if ($this->CreationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationTime
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setCreationTime(\DateTime $CreationTime)
    {
      $this->CreationTime = $CreationTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefundStatus()
    {
      return $this->RefundStatus;
    }

    /**
     * @param string $RefundStatus
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setRefundStatus($RefundStatus)
    {
      $this->RefundStatus = $RefundStatus;
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
     * @return \EbayWsdl\Classes\SellingManagerSoldOrderType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
