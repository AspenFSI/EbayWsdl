<?php

namespace EbayWsdl\Classes;

class TransactionType
{

    /**
     * @var AmountType $AmountPaid
     */
    protected $AmountPaid = null;

    /**
     * @var AmountType $AdjustmentAmount
     */
    protected $AdjustmentAmount = null;

    /**
     * @var AmountType $ConvertedAdjustmentAmount
     */
    protected $ConvertedAdjustmentAmount = null;

    /**
     * @var UserType $Buyer
     */
    protected $Buyer = null;

    /**
     * @var ShippingDetailsType $ShippingDetails
     */
    protected $ShippingDetails = null;

    /**
     * @var AmountType $ConvertedAmountPaid
     */
    protected $ConvertedAmountPaid = null;

    /**
     * @var AmountType $ConvertedTransactionPrice
     */
    protected $ConvertedTransactionPrice = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var DepositTypeCodeType $DepositType
     */
    protected $DepositType = null;

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

    /**
     * @var int $QuantityPurchased
     */
    protected $QuantityPurchased = null;

    /**
     * @var TransactionStatusType $Status
     */
    protected $Status = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var AmountType $TransactionPrice
     */
    protected $TransactionPrice = null;

    /**
     * @var boolean $BestOfferSale
     */
    protected $BestOfferSale = null;

    /**
     * @var float $VATPercent
     */
    protected $VATPercent = null;

    /**
     * @var ExternalTransactionType[] $ExternalTransaction
     */
    protected $ExternalTransaction = null;

    /**
     * @var SellingManagerProductDetailsType $SellingManagerProductDetails
     */
    protected $SellingManagerProductDetails = null;

    /**
     * @var ShippingServiceOptionsType $ShippingServiceSelected
     */
    protected $ShippingServiceSelected = null;

    /**
     * @var string $BuyerMessage
     */
    protected $BuyerMessage = null;

    /**
     * @var AmountType $DutchAuctionBid
     */
    protected $DutchAuctionBid = null;

    /**
     * @var PaidStatusCodeType $BuyerPaidStatus
     */
    protected $BuyerPaidStatus = null;

    /**
     * @var PaidStatusCodeType $SellerPaidStatus
     */
    protected $SellerPaidStatus = null;

    /**
     * @var \DateTime $PaidTime
     */
    protected $PaidTime = null;

    /**
     * @var \DateTime $ShippedTime
     */
    protected $ShippedTime = null;

    /**
     * @var AmountType $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var FeedbackInfoType $FeedbackLeft
     */
    protected $FeedbackLeft = null;

    /**
     * @var FeedbackInfoType $FeedbackReceived
     */
    protected $FeedbackReceived = null;

    /**
     * @var OrderType $ContainingOrder
     */
    protected $ContainingOrder = null;

    /**
     * @var AmountType $FinalValueFee
     */
    protected $FinalValueFee = null;

    /**
     * @var ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
     */
    protected $ListingCheckoutRedirectPreference = null;

    /**
     * @var RefundArrayType $RefundArray
     */
    protected $RefundArray = null;

    /**
     * @var SiteCodeType $TransactionSiteID
     */
    protected $TransactionSiteID = null;

    /**
     * @var TransactionPlatformCodeType $Platform
     */
    protected $Platform = null;

    /**
     * @var string $CartID
     */
    protected $CartID = null;

    /**
     * @var boolean $SellerContactBuyerByEmail
     */
    protected $SellerContactBuyerByEmail = null;

    /**
     * @var string $PayPalEmailAddress
     */
    protected $PayPalEmailAddress = null;

    /**
     * @var string $PaisaPayID
     */
    protected $PaisaPayID = null;

    /**
     * @var AmountType $BuyerGuaranteePrice
     */
    protected $BuyerGuaranteePrice = null;

    /**
     * @var VariationType $Variation
     */
    protected $Variation = null;

    /**
     * @var string $BuyerCheckoutMessage
     */
    protected $BuyerCheckoutMessage = null;

    /**
     * @var AmountType $TotalTransactionPrice
     */
    protected $TotalTransactionPrice = null;

    /**
     * @var TaxesType $Taxes
     */
    protected $Taxes = null;

    /**
     * @var boolean $BundlePurchase
     */
    protected $BundlePurchase = null;

    /**
     * @var AmountType $ActualShippingCost
     */
    protected $ActualShippingCost = null;

    /**
     * @var AmountType $ActualHandlingCost
     */
    protected $ActualHandlingCost = null;

    /**
     * @var string $OrderLineItemID
     */
    protected $OrderLineItemID = null;

    /**
     * @var PaymentHoldDetailType $PaymentHoldDetails
     */
    protected $PaymentHoldDetails = null;

    /**
     * @var SellerDiscountsType $SellerDiscounts
     */
    protected $SellerDiscounts = null;

    /**
     * @var AmountType $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var string $RefundStatus
     */
    protected $RefundStatus = null;

    /**
     * @var string $CodiceFiscale
     */
    protected $CodiceFiscale = null;

    /**
     * @var boolean $IsMultiLegShipping
     */
    protected $IsMultiLegShipping = null;

    /**
     * @var MultiLegShippingDetailsType $MultiLegShippingDetails
     */
    protected $MultiLegShippingDetails = null;

    /**
     * @var \DateTime $InvoiceSentTime
     */
    protected $InvoiceSentTime = null;

    /**
     * @var UnpaidItemType $UnpaidItem
     */
    protected $UnpaidItem = null;

    /**
     * @var boolean $IntangibleItem
     */
    protected $IntangibleItem = null;

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
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $AmountPaid
     * @param AmountType $AdjustmentAmount
     * @param AmountType $ConvertedAdjustmentAmount
     * @param UserType $Buyer
     * @param ShippingDetailsType $ShippingDetails
     * @param AmountType $ConvertedAmountPaid
     * @param AmountType $ConvertedTransactionPrice
     * @param \DateTime $CreatedDate
     * @param DepositTypeCodeType $DepositType
     * @param ItemType $Item
     * @param int $QuantityPurchased
     * @param TransactionStatusType $Status
     * @param string $TransactionID
     * @param AmountType $TransactionPrice
     * @param boolean $BestOfferSale
     * @param float $VATPercent
     * @param ExternalTransactionType[] $ExternalTransaction
     * @param SellingManagerProductDetailsType $SellingManagerProductDetails
     * @param ShippingServiceOptionsType $ShippingServiceSelected
     * @param string $BuyerMessage
     * @param AmountType $DutchAuctionBid
     * @param PaidStatusCodeType $BuyerPaidStatus
     * @param PaidStatusCodeType $SellerPaidStatus
     * @param \DateTime $PaidTime
     * @param \DateTime $ShippedTime
     * @param AmountType $TotalPrice
     * @param FeedbackInfoType $FeedbackLeft
     * @param FeedbackInfoType $FeedbackReceived
     * @param OrderType $ContainingOrder
     * @param AmountType $FinalValueFee
     * @param ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
     * @param RefundArrayType $RefundArray
     * @param SiteCodeType $TransactionSiteID
     * @param TransactionPlatformCodeType $Platform
     * @param string $CartID
     * @param boolean $SellerContactBuyerByEmail
     * @param string $PayPalEmailAddress
     * @param string $PaisaPayID
     * @param AmountType $BuyerGuaranteePrice
     * @param VariationType $Variation
     * @param string $BuyerCheckoutMessage
     * @param AmountType $TotalTransactionPrice
     * @param TaxesType $Taxes
     * @param boolean $BundlePurchase
     * @param AmountType $ActualShippingCost
     * @param AmountType $ActualHandlingCost
     * @param string $OrderLineItemID
     * @param PaymentHoldDetailType $PaymentHoldDetails
     * @param SellerDiscountsType $SellerDiscounts
     * @param AmountType $RefundAmount
     * @param string $RefundStatus
     * @param string $CodiceFiscale
     * @param boolean $IsMultiLegShipping
     * @param MultiLegShippingDetailsType $MultiLegShippingDetails
     * @param \DateTime $InvoiceSentTime
     * @param UnpaidItemType $UnpaidItem
     * @param boolean $IntangibleItem
     * @param PaymentsInformationType $MonetaryDetails
     * @param PickupDetailsType $PickupDetails
     * @param PickupMethodSelectedType $PickupMethodSelected
     * @param string $any
     */
    public function __construct($AmountPaid = null, $AdjustmentAmount = null, $ConvertedAdjustmentAmount = null, $Buyer = null, $ShippingDetails = null, $ConvertedAmountPaid = null, $ConvertedTransactionPrice = null, \DateTime $CreatedDate = null, $DepositType = null, $Item = null, $QuantityPurchased = null, $Status = null, $TransactionID = null, $TransactionPrice = null, $BestOfferSale = null, $VATPercent = null, array $ExternalTransaction = null, $SellingManagerProductDetails = null, $ShippingServiceSelected = null, $BuyerMessage = null, $DutchAuctionBid = null, $BuyerPaidStatus = null, $SellerPaidStatus = null, \DateTime $PaidTime = null, \DateTime $ShippedTime = null, $TotalPrice = null, $FeedbackLeft = null, $FeedbackReceived = null, $ContainingOrder = null, $FinalValueFee = null, $ListingCheckoutRedirectPreference = null, $RefundArray = null, $TransactionSiteID = null, $Platform = null, $CartID = null, $SellerContactBuyerByEmail = null, $PayPalEmailAddress = null, $PaisaPayID = null, $BuyerGuaranteePrice = null, $Variation = null, $BuyerCheckoutMessage = null, $TotalTransactionPrice = null, $Taxes = null, $BundlePurchase = null, $ActualShippingCost = null, $ActualHandlingCost = null, $OrderLineItemID = null, $PaymentHoldDetails = null, $SellerDiscounts = null, $RefundAmount = null, $RefundStatus = null, $CodiceFiscale = null, $IsMultiLegShipping = null, $MultiLegShippingDetails = null, \DateTime $InvoiceSentTime = null, $UnpaidItem = null, $IntangibleItem = null, $MonetaryDetails = null, $PickupDetails = null, $PickupMethodSelected = null, $any = null)
    {
      $this->AmountPaid = $AmountPaid;
      $this->AdjustmentAmount = $AdjustmentAmount;
      $this->ConvertedAdjustmentAmount = $ConvertedAdjustmentAmount;
      $this->Buyer = $Buyer;
      $this->ShippingDetails = $ShippingDetails;
      $this->ConvertedAmountPaid = $ConvertedAmountPaid;
      $this->ConvertedTransactionPrice = $ConvertedTransactionPrice;
      $this->CreatedDate = $CreatedDate ? $CreatedDate->format(\DateTime::ATOM) : null;
      $this->DepositType = $DepositType;
      $this->Item = $Item;
      $this->QuantityPurchased = $QuantityPurchased;
      $this->Status = $Status;
      $this->TransactionID = $TransactionID;
      $this->TransactionPrice = $TransactionPrice;
      $this->BestOfferSale = $BestOfferSale;
      $this->VATPercent = $VATPercent;
      $this->ExternalTransaction = $ExternalTransaction;
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
      $this->ShippingServiceSelected = $ShippingServiceSelected;
      $this->BuyerMessage = $BuyerMessage;
      $this->DutchAuctionBid = $DutchAuctionBid;
      $this->BuyerPaidStatus = $BuyerPaidStatus;
      $this->SellerPaidStatus = $SellerPaidStatus;
      $this->PaidTime = $PaidTime ? $PaidTime->format(\DateTime::ATOM) : null;
      $this->ShippedTime = $ShippedTime ? $ShippedTime->format(\DateTime::ATOM) : null;
      $this->TotalPrice = $TotalPrice;
      $this->FeedbackLeft = $FeedbackLeft;
      $this->FeedbackReceived = $FeedbackReceived;
      $this->ContainingOrder = $ContainingOrder;
      $this->FinalValueFee = $FinalValueFee;
      $this->ListingCheckoutRedirectPreference = $ListingCheckoutRedirectPreference;
      $this->RefundArray = $RefundArray;
      $this->TransactionSiteID = $TransactionSiteID;
      $this->Platform = $Platform;
      $this->CartID = $CartID;
      $this->SellerContactBuyerByEmail = $SellerContactBuyerByEmail;
      $this->PayPalEmailAddress = $PayPalEmailAddress;
      $this->PaisaPayID = $PaisaPayID;
      $this->BuyerGuaranteePrice = $BuyerGuaranteePrice;
      $this->Variation = $Variation;
      $this->BuyerCheckoutMessage = $BuyerCheckoutMessage;
      $this->TotalTransactionPrice = $TotalTransactionPrice;
      $this->Taxes = $Taxes;
      $this->BundlePurchase = $BundlePurchase;
      $this->ActualShippingCost = $ActualShippingCost;
      $this->ActualHandlingCost = $ActualHandlingCost;
      $this->OrderLineItemID = $OrderLineItemID;
      $this->PaymentHoldDetails = $PaymentHoldDetails;
      $this->SellerDiscounts = $SellerDiscounts;
      $this->RefundAmount = $RefundAmount;
      $this->RefundStatus = $RefundStatus;
      $this->CodiceFiscale = $CodiceFiscale;
      $this->IsMultiLegShipping = $IsMultiLegShipping;
      $this->MultiLegShippingDetails = $MultiLegShippingDetails;
      $this->InvoiceSentTime = $InvoiceSentTime ? $InvoiceSentTime->format(\DateTime::ATOM) : null;
      $this->UnpaidItem = $UnpaidItem;
      $this->IntangibleItem = $IntangibleItem;
      $this->MonetaryDetails = $MonetaryDetails;
      $this->PickupDetails = $PickupDetails;
      $this->PickupMethodSelected = $PickupMethodSelected;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setAmountPaid($AmountPaid)
    {
      $this->AmountPaid = $AmountPaid;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setAdjustmentAmount($AdjustmentAmount)
    {
      $this->AdjustmentAmount = $AdjustmentAmount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getConvertedAdjustmentAmount()
    {
      return $this->ConvertedAdjustmentAmount;
    }

    /**
     * @param AmountType $ConvertedAdjustmentAmount
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setConvertedAdjustmentAmount($ConvertedAdjustmentAmount)
    {
      $this->ConvertedAdjustmentAmount = $ConvertedAdjustmentAmount;
      return $this;
    }

    /**
     * @return UserType
     */
    public function getBuyer()
    {
      return $this->Buyer;
    }

    /**
     * @param UserType $Buyer
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setBuyer($Buyer)
    {
      $this->Buyer = $Buyer;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setShippingDetails($ShippingDetails)
    {
      $this->ShippingDetails = $ShippingDetails;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getConvertedAmountPaid()
    {
      return $this->ConvertedAmountPaid;
    }

    /**
     * @param AmountType $ConvertedAmountPaid
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setConvertedAmountPaid($ConvertedAmountPaid)
    {
      $this->ConvertedAmountPaid = $ConvertedAmountPaid;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getConvertedTransactionPrice()
    {
      return $this->ConvertedTransactionPrice;
    }

    /**
     * @param AmountType $ConvertedTransactionPrice
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setConvertedTransactionPrice($ConvertedTransactionPrice)
    {
      $this->ConvertedTransactionPrice = $ConvertedTransactionPrice;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setCreatedDate(\DateTime $CreatedDate)
    {
      $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return DepositTypeCodeType
     */
    public function getDepositType()
    {
      return $this->DepositType;
    }

    /**
     * @param DepositTypeCodeType $DepositType
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setDepositType($DepositType)
    {
      $this->DepositType = $DepositType;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ItemType $Item
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityPurchased()
    {
      return $this->QuantityPurchased;
    }

    /**
     * @param int $QuantityPurchased
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setQuantityPurchased($QuantityPurchased)
    {
      $this->QuantityPurchased = $QuantityPurchased;
      return $this;
    }

    /**
     * @return TransactionStatusType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param TransactionStatusType $Status
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTransactionPrice()
    {
      return $this->TransactionPrice;
    }

    /**
     * @param AmountType $TransactionPrice
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setTransactionPrice($TransactionPrice)
    {
      $this->TransactionPrice = $TransactionPrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBestOfferSale()
    {
      return $this->BestOfferSale;
    }

    /**
     * @param boolean $BestOfferSale
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setBestOfferSale($BestOfferSale)
    {
      $this->BestOfferSale = $BestOfferSale;
      return $this;
    }

    /**
     * @return float
     */
    public function getVATPercent()
    {
      return $this->VATPercent;
    }

    /**
     * @param float $VATPercent
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setVATPercent($VATPercent)
    {
      $this->VATPercent = $VATPercent;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setExternalTransaction(array $ExternalTransaction)
    {
      $this->ExternalTransaction = $ExternalTransaction;
      return $this;
    }

    /**
     * @return SellingManagerProductDetailsType
     */
    public function getSellingManagerProductDetails()
    {
      return $this->SellingManagerProductDetails;
    }

    /**
     * @param SellingManagerProductDetailsType $SellingManagerProductDetails
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setSellingManagerProductDetails($SellingManagerProductDetails)
    {
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setShippingServiceSelected($ShippingServiceSelected)
    {
      $this->ShippingServiceSelected = $ShippingServiceSelected;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerMessage()
    {
      return $this->BuyerMessage;
    }

    /**
     * @param string $BuyerMessage
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setBuyerMessage($BuyerMessage)
    {
      $this->BuyerMessage = $BuyerMessage;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getDutchAuctionBid()
    {
      return $this->DutchAuctionBid;
    }

    /**
     * @param AmountType $DutchAuctionBid
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setDutchAuctionBid($DutchAuctionBid)
    {
      $this->DutchAuctionBid = $DutchAuctionBid;
      return $this;
    }

    /**
     * @return PaidStatusCodeType
     */
    public function getBuyerPaidStatus()
    {
      return $this->BuyerPaidStatus;
    }

    /**
     * @param PaidStatusCodeType $BuyerPaidStatus
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setBuyerPaidStatus($BuyerPaidStatus)
    {
      $this->BuyerPaidStatus = $BuyerPaidStatus;
      return $this;
    }

    /**
     * @return PaidStatusCodeType
     */
    public function getSellerPaidStatus()
    {
      return $this->SellerPaidStatus;
    }

    /**
     * @param PaidStatusCodeType $SellerPaidStatus
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setSellerPaidStatus($SellerPaidStatus)
    {
      $this->SellerPaidStatus = $SellerPaidStatus;
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
     * @return \EbayWsdl\Classes\TransactionType
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setShippedTime(\DateTime $ShippedTime)
    {
      $this->ShippedTime = $ShippedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param AmountType $TotalPrice
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return FeedbackInfoType
     */
    public function getFeedbackLeft()
    {
      return $this->FeedbackLeft;
    }

    /**
     * @param FeedbackInfoType $FeedbackLeft
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setFeedbackLeft($FeedbackLeft)
    {
      $this->FeedbackLeft = $FeedbackLeft;
      return $this;
    }

    /**
     * @return FeedbackInfoType
     */
    public function getFeedbackReceived()
    {
      return $this->FeedbackReceived;
    }

    /**
     * @param FeedbackInfoType $FeedbackReceived
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setFeedbackReceived($FeedbackReceived)
    {
      $this->FeedbackReceived = $FeedbackReceived;
      return $this;
    }

    /**
     * @return OrderType
     */
    public function getContainingOrder()
    {
      return $this->ContainingOrder;
    }

    /**
     * @param OrderType $ContainingOrder
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setContainingOrder($ContainingOrder)
    {
      $this->ContainingOrder = $ContainingOrder;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getFinalValueFee()
    {
      return $this->FinalValueFee;
    }

    /**
     * @param AmountType $FinalValueFee
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setFinalValueFee($FinalValueFee)
    {
      $this->FinalValueFee = $FinalValueFee;
      return $this;
    }

    /**
     * @return ListingCheckoutRedirectPreferenceType
     */
    public function getListingCheckoutRedirectPreference()
    {
      return $this->ListingCheckoutRedirectPreference;
    }

    /**
     * @param ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setListingCheckoutRedirectPreference($ListingCheckoutRedirectPreference)
    {
      $this->ListingCheckoutRedirectPreference = $ListingCheckoutRedirectPreference;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setRefundArray($RefundArray)
    {
      $this->RefundArray = $RefundArray;
      return $this;
    }

    /**
     * @return SiteCodeType
     */
    public function getTransactionSiteID()
    {
      return $this->TransactionSiteID;
    }

    /**
     * @param SiteCodeType $TransactionSiteID
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setTransactionSiteID($TransactionSiteID)
    {
      $this->TransactionSiteID = $TransactionSiteID;
      return $this;
    }

    /**
     * @return TransactionPlatformCodeType
     */
    public function getPlatform()
    {
      return $this->Platform;
    }

    /**
     * @param TransactionPlatformCodeType $Platform
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setPlatform($Platform)
    {
      $this->Platform = $Platform;
      return $this;
    }

    /**
     * @return string
     */
    public function getCartID()
    {
      return $this->CartID;
    }

    /**
     * @param string $CartID
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setCartID($CartID)
    {
      $this->CartID = $CartID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellerContactBuyerByEmail()
    {
      return $this->SellerContactBuyerByEmail;
    }

    /**
     * @param boolean $SellerContactBuyerByEmail
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setSellerContactBuyerByEmail($SellerContactBuyerByEmail)
    {
      $this->SellerContactBuyerByEmail = $SellerContactBuyerByEmail;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setPayPalEmailAddress($PayPalEmailAddress)
    {
      $this->PayPalEmailAddress = $PayPalEmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaisaPayID()
    {
      return $this->PaisaPayID;
    }

    /**
     * @param string $PaisaPayID
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setPaisaPayID($PaisaPayID)
    {
      $this->PaisaPayID = $PaisaPayID;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getBuyerGuaranteePrice()
    {
      return $this->BuyerGuaranteePrice;
    }

    /**
     * @param AmountType $BuyerGuaranteePrice
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setBuyerGuaranteePrice($BuyerGuaranteePrice)
    {
      $this->BuyerGuaranteePrice = $BuyerGuaranteePrice;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setVariation($Variation)
    {
      $this->Variation = $Variation;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setBuyerCheckoutMessage($BuyerCheckoutMessage)
    {
      $this->BuyerCheckoutMessage = $BuyerCheckoutMessage;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalTransactionPrice()
    {
      return $this->TotalTransactionPrice;
    }

    /**
     * @param AmountType $TotalTransactionPrice
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setTotalTransactionPrice($TotalTransactionPrice)
    {
      $this->TotalTransactionPrice = $TotalTransactionPrice;
      return $this;
    }

    /**
     * @return TaxesType
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param TaxesType $Taxes
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setBundlePurchase($BundlePurchase)
    {
      $this->BundlePurchase = $BundlePurchase;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setActualShippingCost($ActualShippingCost)
    {
      $this->ActualShippingCost = $ActualShippingCost;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getActualHandlingCost()
    {
      return $this->ActualHandlingCost;
    }

    /**
     * @param AmountType $ActualHandlingCost
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setActualHandlingCost($ActualHandlingCost)
    {
      $this->ActualHandlingCost = $ActualHandlingCost;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setPaymentHoldDetails($PaymentHoldDetails)
    {
      $this->PaymentHoldDetails = $PaymentHoldDetails;
      return $this;
    }

    /**
     * @return SellerDiscountsType
     */
    public function getSellerDiscounts()
    {
      return $this->SellerDiscounts;
    }

    /**
     * @param SellerDiscountsType $SellerDiscounts
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setSellerDiscounts($SellerDiscounts)
    {
      $this->SellerDiscounts = $SellerDiscounts;
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
     * @return \EbayWsdl\Classes\TransactionType
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setRefundStatus($RefundStatus)
    {
      $this->RefundStatus = $RefundStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodiceFiscale()
    {
      return $this->CodiceFiscale;
    }

    /**
     * @param string $CodiceFiscale
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setCodiceFiscale($CodiceFiscale)
    {
      $this->CodiceFiscale = $CodiceFiscale;
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
     * @return \EbayWsdl\Classes\TransactionType
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setMultiLegShippingDetails($MultiLegShippingDetails)
    {
      $this->MultiLegShippingDetails = $MultiLegShippingDetails;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceSentTime()
    {
      if ($this->InvoiceSentTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceSentTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceSentTime
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setInvoiceSentTime(\DateTime $InvoiceSentTime)
    {
      $this->InvoiceSentTime = $InvoiceSentTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return UnpaidItemType
     */
    public function getUnpaidItem()
    {
      return $this->UnpaidItem;
    }

    /**
     * @param UnpaidItemType $UnpaidItem
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setUnpaidItem($UnpaidItem)
    {
      $this->UnpaidItem = $UnpaidItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIntangibleItem()
    {
      return $this->IntangibleItem;
    }

    /**
     * @param boolean $IntangibleItem
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setIntangibleItem($IntangibleItem)
    {
      $this->IntangibleItem = $IntangibleItem;
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
     * @return \EbayWsdl\Classes\TransactionType
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
     * @return \EbayWsdl\Classes\TransactionType
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setPickupMethodSelected($PickupMethodSelected)
    {
      $this->PickupMethodSelected = $PickupMethodSelected;
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
     * @return \EbayWsdl\Classes\TransactionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
