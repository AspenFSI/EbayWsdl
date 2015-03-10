<?php

namespace EbayWsdl;

class SendInvoiceRequestType extends AbstractRequestType
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
     * @var InternationalShippingServiceOptionsType[] $InternationalShippingServiceOptions
     */
    protected $InternationalShippingServiceOptions = null;

    /**
     * @var ShippingServiceOptionsType[] $ShippingServiceOptions
     */
    protected $ShippingServiceOptions = null;

    /**
     * @var SalesTaxType $SalesTax
     */
    protected $SalesTax = null;

    /**
     * @var InsuranceOptionCodeType $InsuranceOption
     */
    protected $InsuranceOption = null;

    /**
     * @var AmountType $InsuranceFee
     */
    protected $InsuranceFee = null;

    /**
     * @var BuyerPaymentMethodCodeType[] $PaymentMethods
     */
    protected $PaymentMethods = null;

    /**
     * @var string $PayPalEmailAddress
     */
    protected $PayPalEmailAddress = null;

    /**
     * @var string $CheckoutInstructions
     */
    protected $CheckoutInstructions = null;

    /**
     * @var boolean $EmailCopyToSeller
     */
    protected $EmailCopyToSeller = null;

    /**
     * @var AmountType $CODCost
     */
    protected $CODCost = null;

    /**
     * @var SKUType $SKU
     */
    protected $SKU = null;

    /**
     * @var string $OrderLineItemID
     */
    protected $OrderLineItemID = null;

    /**
     * @var AmountType $AdjustmentAmount
     */
    protected $AdjustmentAmount = null;

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
     * @param InternationalShippingServiceOptionsType[] $InternationalShippingServiceOptions
     * @param ShippingServiceOptionsType[] $ShippingServiceOptions
     * @param SalesTaxType $SalesTax
     * @param InsuranceOptionCodeType $InsuranceOption
     * @param AmountType $InsuranceFee
     * @param BuyerPaymentMethodCodeType[] $PaymentMethods
     * @param string $PayPalEmailAddress
     * @param string $CheckoutInstructions
     * @param boolean $EmailCopyToSeller
     * @param AmountType $CODCost
     * @param SKUType $SKU
     * @param string $OrderLineItemID
     * @param AmountType $AdjustmentAmount
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $TransactionID = null, $OrderID = null, array $InternationalShippingServiceOptions = null, array $ShippingServiceOptions = null, $SalesTax = null, $InsuranceOption = null, $InsuranceFee = null, array $PaymentMethods = null, $PayPalEmailAddress = null, $CheckoutInstructions = null, $EmailCopyToSeller = null, $CODCost = null, $SKU = null, $OrderLineItemID = null, $AdjustmentAmount = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->OrderID = $OrderID;
      $this->InternationalShippingServiceOptions = $InternationalShippingServiceOptions;
      $this->ShippingServiceOptions = $ShippingServiceOptions;
      $this->SalesTax = $SalesTax;
      $this->InsuranceOption = $InsuranceOption;
      $this->InsuranceFee = $InsuranceFee;
      $this->PaymentMethods = $PaymentMethods;
      $this->PayPalEmailAddress = $PayPalEmailAddress;
      $this->CheckoutInstructions = $CheckoutInstructions;
      $this->EmailCopyToSeller = $EmailCopyToSeller;
      $this->CODCost = $CODCost;
      $this->SKU = $SKU;
      $this->OrderLineItemID = $OrderLineItemID;
      $this->AdjustmentAmount = $AdjustmentAmount;
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
     * @return \EbayWsdl\SendInvoiceRequestType
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
     * @return \EbayWsdl\SendInvoiceRequestType
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
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return InternationalShippingServiceOptionsType[]
     */
    public function getInternationalShippingServiceOptions()
    {
      return $this->InternationalShippingServiceOptions;
    }

    /**
     * @param InternationalShippingServiceOptionsType[] $InternationalShippingServiceOptions
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setInternationalShippingServiceOptions(array $InternationalShippingServiceOptions)
    {
      $this->InternationalShippingServiceOptions = $InternationalShippingServiceOptions;
      return $this;
    }

    /**
     * @return ShippingServiceOptionsType[]
     */
    public function getShippingServiceOptions()
    {
      return $this->ShippingServiceOptions;
    }

    /**
     * @param ShippingServiceOptionsType[] $ShippingServiceOptions
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setShippingServiceOptions(array $ShippingServiceOptions)
    {
      $this->ShippingServiceOptions = $ShippingServiceOptions;
      return $this;
    }

    /**
     * @return SalesTaxType
     */
    public function getSalesTax()
    {
      return $this->SalesTax;
    }

    /**
     * @param SalesTaxType $SalesTax
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setSalesTax($SalesTax)
    {
      $this->SalesTax = $SalesTax;
      return $this;
    }

    /**
     * @return InsuranceOptionCodeType
     */
    public function getInsuranceOption()
    {
      return $this->InsuranceOption;
    }

    /**
     * @param InsuranceOptionCodeType $InsuranceOption
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setInsuranceOption($InsuranceOption)
    {
      $this->InsuranceOption = $InsuranceOption;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getInsuranceFee()
    {
      return $this->InsuranceFee;
    }

    /**
     * @param AmountType $InsuranceFee
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setInsuranceFee($InsuranceFee)
    {
      $this->InsuranceFee = $InsuranceFee;
      return $this;
    }

    /**
     * @return BuyerPaymentMethodCodeType[]
     */
    public function getPaymentMethods()
    {
      return $this->PaymentMethods;
    }

    /**
     * @param BuyerPaymentMethodCodeType[] $PaymentMethods
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setPaymentMethods(array $PaymentMethods)
    {
      $this->PaymentMethods = $PaymentMethods;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayPalEmailAddress()
    {
      return $this->PayPalEmailAddress;
    }

    /**
     * @param string $PayPalEmailAddress
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setPayPalEmailAddress($PayPalEmailAddress)
    {
      $this->PayPalEmailAddress = $PayPalEmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckoutInstructions()
    {
      return $this->CheckoutInstructions;
    }

    /**
     * @param string $CheckoutInstructions
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setCheckoutInstructions($CheckoutInstructions)
    {
      $this->CheckoutInstructions = $CheckoutInstructions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailCopyToSeller()
    {
      return $this->EmailCopyToSeller;
    }

    /**
     * @param boolean $EmailCopyToSeller
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setEmailCopyToSeller($EmailCopyToSeller)
    {
      $this->EmailCopyToSeller = $EmailCopyToSeller;
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
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setCODCost($CODCost)
    {
      $this->CODCost = $CODCost;
      return $this;
    }

    /**
     * @return SKUType
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param SKUType $SKU
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
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
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
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
     * @return \EbayWsdl\SendInvoiceRequestType
     */
    public function setAdjustmentAmount($AdjustmentAmount)
    {
      $this->AdjustmentAmount = $AdjustmentAmount;
      return $this;
    }

}
