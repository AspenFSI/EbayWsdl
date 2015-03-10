<?php

namespace EbayWsdl;

class OrderType
{

    /**
     * @var OrderIDType $OrderID
     */
    protected $OrderID = null;

    /**
     * @var OrderStatusCodeType $OrderStatus
     */
    protected $OrderStatus = null;

    /**
     * @var AmountType $AdjustmentAmount
     */
    protected $AdjustmentAmount = null;

    /**
     * @var AmountType $AmountPaid
     */
    protected $AmountPaid = null;

    /**
     * @var AmountType $AmountSaved
     */
    protected $AmountSaved = null;

    /**
     * @var CheckoutStatusType $CheckoutStatus
     */
    protected $CheckoutStatus = null;

    /**
     * @var ShippingDetailsType $ShippingDetails
     */
    protected $ShippingDetails = null;

    /**
     * @var TradingRoleCodeType $CreatingUserRole
     */
    protected $CreatingUserRole = null;

    /**
     * @var \DateTime $CreatedTime
     */
    protected $CreatedTime = null;

    /**
     * @var BuyerPaymentMethodCodeType[] $PaymentMethods
     */
    protected $PaymentMethods = null;

    /**
     * @var string $SellerEmail
     */
    protected $SellerEmail = null;

    /**
     * @var AddressType $ShippingAddress
     */
    protected $ShippingAddress = null;

    /**
     * @var ShippingServiceOptionsType $ShippingServiceSelected
     */
    protected $ShippingServiceSelected = null;

    /**
     * @var AmountType $Subtotal
     */
    protected $Subtotal = null;

    /**
     * @var AmountType $Total
     */
    protected $Total = null;

    /**
     * @var ExternalTransactionType[] $ExternalTransaction
     */
    protected $ExternalTransaction = null;

    /**
     * @var TransactionArrayType $TransactionArray
     */
    protected $TransactionArray = null;

    /**
     * @var UserIDType $BuyerUserID
     */
    protected $BuyerUserID = null;

    /**
     * @var \DateTime $PaidTime
     */
    protected $PaidTime = null;

    /**
     * @var \DateTime $ShippedTime
     */
    protected $ShippedTime = null;

    /**
     * @var boolean $IntegratedMerchantCreditCardEnabled
     */
    protected $IntegratedMerchantCreditCardEnabled = null;

    /**
     * @var boolean $BundlePurchase
     */
    protected $BundlePurchase = null;

    /**
     * @var string $BuyerCheckoutMessage
     */
    protected $BuyerCheckoutMessage = null;

    /**
     * @var string $EIASToken
     */
    protected $EIASToken = null;

    /**
     * @var PaymentHoldStatusCodeType $PaymentHoldStatus
     */
    protected $PaymentHoldStatus = null;

    /**
     * @var PaymentHoldDetailType $PaymentHoldDetails
     */
    protected $PaymentHoldDetails = null;

    /**
     * @var RefundArrayType $RefundArray
     */
    protected $RefundArray = null;

    /**
     * @var AmountType $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var string $RefundStatus
     */
    protected $RefundStatus = null;

    /**
     * @var boolean $IsMultiLegShipping
     */
    protected $IsMultiLegShipping = null;

    /**
     * @var MultiLegShippingDetailsType $MultiLegShippingDetails
     */
    protected $MultiLegShippingDetails = null;

    /**
     * @var PaymentsInformationType $MonetaryDetails
     */
    protected $MonetaryDetails = null;

    /**
     * @var PickupDetailsType $PickupDetails
     */
    protected $PickupDetails = null;

    /**
     * @var PickupMethodSelectedType $PickupMethodSelected
     */
    protected $PickupMethodSelected = null;

    /**
     * @var UserIDType $SellerUserID
     */
    protected $SellerUserID = null;

    /**
     * @var string $SellerEIASToken
     */
    protected $SellerEIASToken = null;

    /**
     * @var string $CancelReason
     */
    protected $CancelReason = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param OrderIDType $OrderID
     * @param OrderStatusCodeType $OrderStatus
     * @param AmountType $AdjustmentAmount
     * @param AmountType $AmountPaid
     * @param AmountType $AmountSaved
     * @param CheckoutStatusType $CheckoutStatus
     * @param ShippingDetailsType $ShippingDetails
     * @param TradingRoleCodeType $CreatingUserRole
     * @param \DateTime $CreatedTime
     * @param BuyerPaymentMethodCodeType[] $PaymentMethods
     * @param string $SellerEmail
     * @param AddressType $ShippingAddress
     * @param ShippingServiceOptionsType $ShippingServiceSelected
     * @param AmountType $Subtotal
     * @param AmountType $Total
     * @param ExternalTransactionType[] $ExternalTransaction
     * @param TransactionArrayType $TransactionArray
     * @param UserIDType $BuyerUserID
     * @param \DateTime $PaidTime
     * @param \DateTime $ShippedTime
     * @param boolean $IntegratedMerchantCreditCardEnabled
     * @param boolean $BundlePurchase
     * @param string $BuyerCheckoutMessage
     * @param string $EIASToken
     * @param PaymentHoldStatusCodeType $PaymentHoldStatus
     * @param PaymentHoldDetailType $PaymentHoldDetails
     * @param RefundArrayType $RefundArray
     * @param AmountType $RefundAmount
     * @param string $RefundStatus
     * @param boolean $IsMultiLegShipping
     * @param MultiLegShippingDetailsType $MultiLegShippingDetails
     * @param PaymentsInformationType $MonetaryDetails
     * @param PickupDetailsType $PickupDetails
     * @param PickupMethodSelectedType $PickupMethodSelected
     * @param UserIDType $SellerUserID
     * @param string $SellerEIASToken
     * @param string $CancelReason
     * @param string $any
     */
    public function __construct($OrderID = null, $OrderStatus = null, $AdjustmentAmount = null, $AmountPaid = null, $AmountSaved = null, $CheckoutStatus = null, $ShippingDetails = null, $CreatingUserRole = null, \DateTime $CreatedTime = null, array $PaymentMethods = null, $SellerEmail = null, $ShippingAddress = null, $ShippingServiceSelected = null, $Subtotal = null, $Total = null, array $ExternalTransaction = null, $TransactionArray = null, $BuyerUserID = null, \DateTime $PaidTime = null, \DateTime $ShippedTime = null, $IntegratedMerchantCreditCardEnabled = null, $BundlePurchase = null, $BuyerCheckoutMessage = null, $EIASToken = null, $PaymentHoldStatus = null, $PaymentHoldDetails = null, $RefundArray = null, $RefundAmount = null, $RefundStatus = null, $IsMultiLegShipping = null, $MultiLegShippingDetails = null, $MonetaryDetails = null, $PickupDetails = null, $PickupMethodSelected = null, $SellerUserID = null, $SellerEIASToken = null, $CancelReason = null, $any = null)
    {
      $this->OrderID = $OrderID;
      $this->OrderStatus = $OrderStatus;
      $this->AdjustmentAmount = $AdjustmentAmount;
      $this->AmountPaid = $AmountPaid;
      $this->AmountSaved = $AmountSaved;
      $this->CheckoutStatus = $CheckoutStatus;
      $this->ShippingDetails = $ShippingDetails;
      $this->CreatingUserRole = $CreatingUserRole;
      $this->CreatedTime = $CreatedTime ? $CreatedTime->format(\DateTime::ATOM) : null;
      $this->PaymentMethods = $PaymentMethods;
      $this->SellerEmail = $SellerEmail;
      $this->ShippingAddress = $ShippingAddress;
      $this->ShippingServiceSelected = $ShippingServiceSelected;
      $this->Subtotal = $Subtotal;
      $this->Total = $Total;
      $this->ExternalTransaction = $ExternalTransaction;
      $this->TransactionArray = $TransactionArray;
      $this->BuyerUserID = $BuyerUserID;
      $this->PaidTime = $PaidTime ? $PaidTime->format(\DateTime::ATOM) : null;
      $this->ShippedTime = $ShippedTime ? $ShippedTime->format(\DateTime::ATOM) : null;
      $this->IntegratedMerchantCreditCardEnabled = $IntegratedMerchantCreditCardEnabled;
      $this->BundlePurchase = $BundlePurchase;
      $this->BuyerCheckoutMessage = $BuyerCheckoutMessage;
      $this->EIASToken = $EIASToken;
      $this->PaymentHoldStatus = $PaymentHoldStatus;
      $this->PaymentHoldDetails = $PaymentHoldDetails;
      $this->RefundArray = $RefundArray;
      $this->RefundAmount = $RefundAmount;
      $this->RefundStatus = $RefundStatus;
      $this->IsMultiLegShipping = $IsMultiLegShipping;
      $this->MultiLegShippingDetails = $MultiLegShippingDetails;
      $this->MonetaryDetails = $MonetaryDetails;
      $this->PickupDetails = $PickupDetails;
      $this->PickupMethodSelected = $PickupMethodSelected;
      $this->SellerUserID = $SellerUserID;
      $this->SellerEIASToken = $SellerEIASToken;
      $this->CancelReason = $CancelReason;
      $this->any = $any;
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
     * @return \EbayWsdl\OrderType
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return OrderStatusCodeType
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param OrderStatusCodeType $OrderStatus
     * @return \EbayWsdl\OrderType
     */
    public function setOrderStatus($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
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
     * @return \EbayWsdl\OrderType
     */
    public function setAdjustmentAmount($AdjustmentAmount)
    {
      $this->AdjustmentAmount = $AdjustmentAmount;
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
     * @return \EbayWsdl\OrderType
     */
    public function setAmountPaid($AmountPaid)
    {
      $this->AmountPaid = $AmountPaid;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getAmountSaved()
    {
      return $this->AmountSaved;
    }

    /**
     * @param AmountType $AmountSaved
     * @return \EbayWsdl\OrderType
     */
    public function setAmountSaved($AmountSaved)
    {
      $this->AmountSaved = $AmountSaved;
      return $this;
    }

    /**
     * @return CheckoutStatusType
     */
    public function getCheckoutStatus()
    {
      return $this->CheckoutStatus;
    }

    /**
     * @param CheckoutStatusType $CheckoutStatus
     * @return \EbayWsdl\OrderType
     */
    public function setCheckoutStatus($CheckoutStatus)
    {
      $this->CheckoutStatus = $CheckoutStatus;
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
     * @return \EbayWsdl\OrderType
     */
    public function setShippingDetails($ShippingDetails)
    {
      $this->ShippingDetails = $ShippingDetails;
      return $this;
    }

    /**
     * @return TradingRoleCodeType
     */
    public function getCreatingUserRole()
    {
      return $this->CreatingUserRole;
    }

    /**
     * @param TradingRoleCodeType $CreatingUserRole
     * @return \EbayWsdl\OrderType
     */
    public function setCreatingUserRole($CreatingUserRole)
    {
      $this->CreatingUserRole = $CreatingUserRole;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedTime()
    {
      if ($this->CreatedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedTime
     * @return \EbayWsdl\OrderType
     */
    public function setCreatedTime(\DateTime $CreatedTime)
    {
      $this->CreatedTime = $CreatedTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\OrderType
     */
    public function setPaymentMethods(array $PaymentMethods)
    {
      $this->PaymentMethods = $PaymentMethods;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerEmail()
    {
      return $this->SellerEmail;
    }

    /**
     * @param string $SellerEmail
     * @return \EbayWsdl\OrderType
     */
    public function setSellerEmail($SellerEmail)
    {
      $this->SellerEmail = $SellerEmail;
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
     * @return \EbayWsdl\OrderType
     */
    public function setShippingAddress($ShippingAddress)
    {
      $this->ShippingAddress = $ShippingAddress;
      return $this;
    }

    /**
     * @return ShippingServiceOptionsType
     */
    public function getShippingServiceSelected()
    {
      return $this->ShippingServiceSelected;
    }

    /**
     * @param ShippingServiceOptionsType $ShippingServiceSelected
     * @return \EbayWsdl\OrderType
     */
    public function setShippingServiceSelected($ShippingServiceSelected)
    {
      $this->ShippingServiceSelected = $ShippingServiceSelected;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getSubtotal()
    {
      return $this->Subtotal;
    }

    /**
     * @param AmountType $Subtotal
     * @return \EbayWsdl\OrderType
     */
    public function setSubtotal($Subtotal)
    {
      $this->Subtotal = $Subtotal;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param AmountType $Total
     * @return \EbayWsdl\OrderType
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return ExternalTransactionType[]
     */
    public function getExternalTransaction()
    {
      return $this->ExternalTransaction;
    }

    /**
     * @param ExternalTransactionType[] $ExternalTransaction
     * @return \EbayWsdl\OrderType
     */
    public function setExternalTransaction(array $ExternalTransaction)
    {
      $this->ExternalTransaction = $ExternalTransaction;
      return $this;
    }

    /**
     * @return TransactionArrayType
     */
    public function getTransactionArray()
    {
      return $this->TransactionArray;
    }

    /**
     * @param TransactionArrayType $TransactionArray
     * @return \EbayWsdl\OrderType
     */
    public function setTransactionArray($TransactionArray)
    {
      $this->TransactionArray = $TransactionArray;
      return $this;
    }

    /**
     * @return UserIDType
     */
    public function getBuyerUserID()
    {
      return $this->BuyerUserID;
    }

    /**
     * @param UserIDType $BuyerUserID
     * @return \EbayWsdl\OrderType
     */
    public function setBuyerUserID($BuyerUserID)
    {
      $this->BuyerUserID = $BuyerUserID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaidTime()
    {
      if ($this->PaidTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PaidTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PaidTime
     * @return \EbayWsdl\OrderType
     */
    public function setPaidTime(\DateTime $PaidTime)
    {
      $this->PaidTime = $PaidTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShippedTime()
    {
      if ($this->ShippedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShippedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShippedTime
     * @return \EbayWsdl\OrderType
     */
    public function setShippedTime(\DateTime $ShippedTime)
    {
      $this->ShippedTime = $ShippedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
      return $this->IntegratedMerchantCreditCardEnabled;
    }

    /**
     * @param boolean $IntegratedMerchantCreditCardEnabled
     * @return \EbayWsdl\OrderType
     */
    public function setIntegratedMerchantCreditCardEnabled($IntegratedMerchantCreditCardEnabled)
    {
      $this->IntegratedMerchantCreditCardEnabled = $IntegratedMerchantCreditCardEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBundlePurchase()
    {
      return $this->BundlePurchase;
    }

    /**
     * @param boolean $BundlePurchase
     * @return \EbayWsdl\OrderType
     */
    public function setBundlePurchase($BundlePurchase)
    {
      $this->BundlePurchase = $BundlePurchase;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerCheckoutMessage()
    {
      return $this->BuyerCheckoutMessage;
    }

    /**
     * @param string $BuyerCheckoutMessage
     * @return \EbayWsdl\OrderType
     */
    public function setBuyerCheckoutMessage($BuyerCheckoutMessage)
    {
      $this->BuyerCheckoutMessage = $BuyerCheckoutMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getEIASToken()
    {
      return $this->EIASToken;
    }

    /**
     * @param string $EIASToken
     * @return \EbayWsdl\OrderType
     */
    public function setEIASToken($EIASToken)
    {
      $this->EIASToken = $EIASToken;
      return $this;
    }

    /**
     * @return PaymentHoldStatusCodeType
     */
    public function getPaymentHoldStatus()
    {
      return $this->PaymentHoldStatus;
    }

    /**
     * @param PaymentHoldStatusCodeType $PaymentHoldStatus
     * @return \EbayWsdl\OrderType
     */
    public function setPaymentHoldStatus($PaymentHoldStatus)
    {
      $this->PaymentHoldStatus = $PaymentHoldStatus;
      return $this;
    }

    /**
     * @return PaymentHoldDetailType
     */
    public function getPaymentHoldDetails()
    {
      return $this->PaymentHoldDetails;
    }

    /**
     * @param PaymentHoldDetailType $PaymentHoldDetails
     * @return \EbayWsdl\OrderType
     */
    public function setPaymentHoldDetails($PaymentHoldDetails)
    {
      $this->PaymentHoldDetails = $PaymentHoldDetails;
      return $this;
    }

    /**
     * @return RefundArrayType
     */
    public function getRefundArray()
    {
      return $this->RefundArray;
    }

    /**
     * @param RefundArrayType $RefundArray
     * @return \EbayWsdl\OrderType
     */
    public function setRefundArray($RefundArray)
    {
      $this->RefundArray = $RefundArray;
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
     * @return \EbayWsdl\OrderType
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
     * @return \EbayWsdl\OrderType
     */
    public function setRefundStatus($RefundStatus)
    {
      $this->RefundStatus = $RefundStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMultiLegShipping()
    {
      return $this->IsMultiLegShipping;
    }

    /**
     * @param boolean $IsMultiLegShipping
     * @return \EbayWsdl\OrderType
     */
    public function setIsMultiLegShipping($IsMultiLegShipping)
    {
      $this->IsMultiLegShipping = $IsMultiLegShipping;
      return $this;
    }

    /**
     * @return MultiLegShippingDetailsType
     */
    public function getMultiLegShippingDetails()
    {
      return $this->MultiLegShippingDetails;
    }

    /**
     * @param MultiLegShippingDetailsType $MultiLegShippingDetails
     * @return \EbayWsdl\OrderType
     */
    public function setMultiLegShippingDetails($MultiLegShippingDetails)
    {
      $this->MultiLegShippingDetails = $MultiLegShippingDetails;
      return $this;
    }

    /**
     * @return PaymentsInformationType
     */
    public function getMonetaryDetails()
    {
      return $this->MonetaryDetails;
    }

    /**
     * @param PaymentsInformationType $MonetaryDetails
     * @return \EbayWsdl\OrderType
     */
    public function setMonetaryDetails($MonetaryDetails)
    {
      $this->MonetaryDetails = $MonetaryDetails;
      return $this;
    }

    /**
     * @return PickupDetailsType
     */
    public function getPickupDetails()
    {
      return $this->PickupDetails;
    }

    /**
     * @param PickupDetailsType $PickupDetails
     * @return \EbayWsdl\OrderType
     */
    public function setPickupDetails($PickupDetails)
    {
      $this->PickupDetails = $PickupDetails;
      return $this;
    }

    /**
     * @return PickupMethodSelectedType
     */
    public function getPickupMethodSelected()
    {
      return $this->PickupMethodSelected;
    }

    /**
     * @param PickupMethodSelectedType $PickupMethodSelected
     * @return \EbayWsdl\OrderType
     */
    public function setPickupMethodSelected($PickupMethodSelected)
    {
      $this->PickupMethodSelected = $PickupMethodSelected;
      return $this;
    }

    /**
     * @return UserIDType
     */
    public function getSellerUserID()
    {
      return $this->SellerUserID;
    }

    /**
     * @param UserIDType $SellerUserID
     * @return \EbayWsdl\OrderType
     */
    public function setSellerUserID($SellerUserID)
    {
      $this->SellerUserID = $SellerUserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerEIASToken()
    {
      return $this->SellerEIASToken;
    }

    /**
     * @param string $SellerEIASToken
     * @return \EbayWsdl\OrderType
     */
    public function setSellerEIASToken($SellerEIASToken)
    {
      $this->SellerEIASToken = $SellerEIASToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getCancelReason()
    {
      return $this->CancelReason;
    }

    /**
     * @param string $CancelReason
     * @return \EbayWsdl\OrderType
     */
    public function setCancelReason($CancelReason)
    {
      $this->CancelReason = $CancelReason;
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
     * @return \EbayWsdl\OrderType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
