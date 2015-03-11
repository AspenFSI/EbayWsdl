<?php

namespace EbayWsdl\Classes;

class ReviseCheckoutStatusRequestType extends AbstractRequestType
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
     * @var string $OrderID
     */
    protected $OrderID = null;

    /**
     * @var AmountType $AmountPaid
     */
    protected $AmountPaid = null;

    /**
     * @var BuyerPaymentMethodCodeType $PaymentMethodUsed
     */
    protected $PaymentMethodUsed = null;

    /**
     * @var CompleteStatusCodeType $CheckoutStatus
     */
    protected $CheckoutStatus = null;

    /**
     * @var string $ShippingService
     */
    protected $ShippingService = null;

    /**
     * @var boolean $ShippingIncludedInTax
     */
    protected $ShippingIncludedInTax = null;

    /**
     * @var CheckoutMethodCodeType $CheckoutMethod
     */
    protected $CheckoutMethod = null;

    /**
     * @var InsuranceSelectedCodeType $InsuranceType
     */
    protected $InsuranceType = null;

    /**
     * @var RCSPaymentStatusCodeType $PaymentStatus
     */
    protected $PaymentStatus = null;

    /**
     * @var AmountType $AdjustmentAmount
     */
    protected $AdjustmentAmount = null;

    /**
     * @var AddressType $ShippingAddress
     */
    protected $ShippingAddress = null;

    /**
     * @var string $BuyerID
     */
    protected $BuyerID = null;

    /**
     * @var AmountType $ShippingInsuranceCost
     */
    protected $ShippingInsuranceCost = null;

    /**
     * @var AmountType $SalesTax
     */
    protected $SalesTax = null;

    /**
     * @var AmountType $ShippingCost
     */
    protected $ShippingCost = null;

    /**
     * @var string $EncryptedID
     */
    protected $EncryptedID = null;

    /**
     * @var ExternalTransactionType $ExternalTransaction
     */
    protected $ExternalTransaction = null;

    /**
     * @var string $MultipleSellerPaymentID
     */
    protected $MultipleSellerPaymentID = null;

    /**
     * @var AmountType $CODCost
     */
    protected $CODCost = null;

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
     * @param string $OrderID
     * @param AmountType $AmountPaid
     * @param BuyerPaymentMethodCodeType $PaymentMethodUsed
     * @param CompleteStatusCodeType $CheckoutStatus
     * @param string $ShippingService
     * @param boolean $ShippingIncludedInTax
     * @param CheckoutMethodCodeType $CheckoutMethod
     * @param InsuranceSelectedCodeType $InsuranceType
     * @param RCSPaymentStatusCodeType $PaymentStatus
     * @param AmountType $AdjustmentAmount
     * @param AddressType $ShippingAddress
     * @param string $BuyerID
     * @param AmountType $ShippingInsuranceCost
     * @param AmountType $SalesTax
     * @param AmountType $ShippingCost
     * @param string $EncryptedID
     * @param ExternalTransactionType $ExternalTransaction
     * @param string $MultipleSellerPaymentID
     * @param AmountType $CODCost
     * @param string $OrderLineItemID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $TransactionID = null, $OrderID = null, $AmountPaid = null, $PaymentMethodUsed = null, $CheckoutStatus = null, $ShippingService = null, $ShippingIncludedInTax = null, $CheckoutMethod = null, $InsuranceType = null, $PaymentStatus = null, $AdjustmentAmount = null, $ShippingAddress = null, $BuyerID = null, $ShippingInsuranceCost = null, $SalesTax = null, $ShippingCost = null, $EncryptedID = null, $ExternalTransaction = null, $MultipleSellerPaymentID = null, $CODCost = null, $OrderLineItemID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->OrderID = $OrderID;
      $this->AmountPaid = $AmountPaid;
      $this->PaymentMethodUsed = $PaymentMethodUsed;
      $this->CheckoutStatus = $CheckoutStatus;
      $this->ShippingService = $ShippingService;
      $this->ShippingIncludedInTax = $ShippingIncludedInTax;
      $this->CheckoutMethod = $CheckoutMethod;
      $this->InsuranceType = $InsuranceType;
      $this->PaymentStatus = $PaymentStatus;
      $this->AdjustmentAmount = $AdjustmentAmount;
      $this->ShippingAddress = $ShippingAddress;
      $this->BuyerID = $BuyerID;
      $this->ShippingInsuranceCost = $ShippingInsuranceCost;
      $this->SalesTax = $SalesTax;
      $this->ShippingCost = $ShippingCost;
      $this->EncryptedID = $EncryptedID;
      $this->ExternalTransaction = $ExternalTransaction;
      $this->MultipleSellerPaymentID = $MultipleSellerPaymentID;
      $this->CODCost = $CODCost;
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
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
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
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
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
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getAmountPaid()
    {
      return $this->AmountPaid;
    }

    /**
     * @param AmountType $AmountPaid
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setAmountPaid($AmountPaid)
    {
      $this->AmountPaid = $AmountPaid;
      return $this;
    }

    /**
     * @return BuyerPaymentMethodCodeType
     */
    public function getPaymentMethodUsed()
    {
      return $this->PaymentMethodUsed;
    }

    /**
     * @param BuyerPaymentMethodCodeType $PaymentMethodUsed
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setPaymentMethodUsed($PaymentMethodUsed)
    {
      $this->PaymentMethodUsed = $PaymentMethodUsed;
      return $this;
    }

    /**
     * @return CompleteStatusCodeType
     */
    public function getCheckoutStatus()
    {
      return $this->CheckoutStatus;
    }

    /**
     * @param CompleteStatusCodeType $CheckoutStatus
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setCheckoutStatus($CheckoutStatus)
    {
      $this->CheckoutStatus = $CheckoutStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingService()
    {
      return $this->ShippingService;
    }

    /**
     * @param string $ShippingService
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setShippingService($ShippingService)
    {
      $this->ShippingService = $ShippingService;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShippingIncludedInTax()
    {
      return $this->ShippingIncludedInTax;
    }

    /**
     * @param boolean $ShippingIncludedInTax
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setShippingIncludedInTax($ShippingIncludedInTax)
    {
      $this->ShippingIncludedInTax = $ShippingIncludedInTax;
      return $this;
    }

    /**
     * @return CheckoutMethodCodeType
     */
    public function getCheckoutMethod()
    {
      return $this->CheckoutMethod;
    }

    /**
     * @param CheckoutMethodCodeType $CheckoutMethod
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setCheckoutMethod($CheckoutMethod)
    {
      $this->CheckoutMethod = $CheckoutMethod;
      return $this;
    }

    /**
     * @return InsuranceSelectedCodeType
     */
    public function getInsuranceType()
    {
      return $this->InsuranceType;
    }

    /**
     * @param InsuranceSelectedCodeType $InsuranceType
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setInsuranceType($InsuranceType)
    {
      $this->InsuranceType = $InsuranceType;
      return $this;
    }

    /**
     * @return RCSPaymentStatusCodeType
     */
    public function getPaymentStatus()
    {
      return $this->PaymentStatus;
    }

    /**
     * @param RCSPaymentStatusCodeType $PaymentStatus
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setPaymentStatus($PaymentStatus)
    {
      $this->PaymentStatus = $PaymentStatus;
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
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setAdjustmentAmount($AdjustmentAmount)
    {
      $this->AdjustmentAmount = $AdjustmentAmount;
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
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setShippingAddress($ShippingAddress)
    {
      $this->ShippingAddress = $ShippingAddress;
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
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setBuyerID($BuyerID)
    {
      $this->BuyerID = $BuyerID;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getShippingInsuranceCost()
    {
      return $this->ShippingInsuranceCost;
    }

    /**
     * @param AmountType $ShippingInsuranceCost
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setShippingInsuranceCost($ShippingInsuranceCost)
    {
      $this->ShippingInsuranceCost = $ShippingInsuranceCost;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getSalesTax()
    {
      return $this->SalesTax;
    }

    /**
     * @param AmountType $SalesTax
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setSalesTax($SalesTax)
    {
      $this->SalesTax = $SalesTax;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getShippingCost()
    {
      return $this->ShippingCost;
    }

    /**
     * @param AmountType $ShippingCost
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setShippingCost($ShippingCost)
    {
      $this->ShippingCost = $ShippingCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getEncryptedID()
    {
      return $this->EncryptedID;
    }

    /**
     * @param string $EncryptedID
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setEncryptedID($EncryptedID)
    {
      $this->EncryptedID = $EncryptedID;
      return $this;
    }

    /**
     * @return ExternalTransactionType
     */
    public function getExternalTransaction()
    {
      return $this->ExternalTransaction;
    }

    /**
     * @param ExternalTransactionType $ExternalTransaction
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setExternalTransaction($ExternalTransaction)
    {
      $this->ExternalTransaction = $ExternalTransaction;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultipleSellerPaymentID()
    {
      return $this->MultipleSellerPaymentID;
    }

    /**
     * @param string $MultipleSellerPaymentID
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setMultipleSellerPaymentID($MultipleSellerPaymentID)
    {
      $this->MultipleSellerPaymentID = $MultipleSellerPaymentID;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getCODCost()
    {
      return $this->CODCost;
    }

    /**
     * @param AmountType $CODCost
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setCODCost($CODCost)
    {
      $this->CODCost = $CODCost;
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
     * @return \EbayWsdl\Classes\ReviseCheckoutStatusRequestType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

}
