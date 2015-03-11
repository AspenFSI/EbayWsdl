<?php

namespace EbayWsdl\Classes;

class SellingManagerOrderStatusType
{

    /**
     * @var CheckoutStatusCodeType $CheckoutStatus
     */
    protected $CheckoutStatus = null;

    /**
     * @var SellingManagerPaidStatusCodeType $PaidStatus
     */
    protected $PaidStatus = null;

    /**
     * @var SellingManagerShippedStatusCodeType $ShippedStatus
     */
    protected $ShippedStatus = null;

    /**
     * @var PaymentStatusCodeType $eBayPaymentStatus
     */
    protected $eBayPaymentStatus = null;

    /**
     * @var string $PayPalTransactionID
     */
    protected $PayPalTransactionID = null;

    /**
     * @var BuyerPaymentMethodCodeType $PaymentMethodUsed
     */
    protected $PaymentMethodUsed = null;

    /**
     * @var CommentTypeCodeType $FeedbackReceived
     */
    protected $FeedbackReceived = null;

    /**
     * @var boolean $FeedbackSent
     */
    protected $FeedbackSent = null;

    /**
     * @var int $TotalEmailsSent
     */
    protected $TotalEmailsSent = null;

    /**
     * @var PaymentHoldStatusCodeType $PaymentHoldStatus
     */
    protected $PaymentHoldStatus = null;

    /**
     * @var string $SellerInvoiceNumber
     */
    protected $SellerInvoiceNumber = null;

    /**
     * @var \DateTime $ShippedTime
     */
    protected $ShippedTime = null;

    /**
     * @var \DateTime $PaidTime
     */
    protected $PaidTime = null;

    /**
     * @var \DateTime $LastEmailSentTime
     */
    protected $LastEmailSentTime = null;

    /**
     * @var \DateTime $SellerInvoiceTime
     */
    protected $SellerInvoiceTime = null;

    /**
     * @var boolean $IntegratedMerchantCreditCardEnabled
     */
    protected $IntegratedMerchantCreditCardEnabled = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param CheckoutStatusCodeType $CheckoutStatus
     * @param SellingManagerPaidStatusCodeType $PaidStatus
     * @param SellingManagerShippedStatusCodeType $ShippedStatus
     * @param PaymentStatusCodeType $eBayPaymentStatus
     * @param string $PayPalTransactionID
     * @param BuyerPaymentMethodCodeType $PaymentMethodUsed
     * @param CommentTypeCodeType $FeedbackReceived
     * @param boolean $FeedbackSent
     * @param int $TotalEmailsSent
     * @param PaymentHoldStatusCodeType $PaymentHoldStatus
     * @param string $SellerInvoiceNumber
     * @param \DateTime $ShippedTime
     * @param \DateTime $PaidTime
     * @param \DateTime $LastEmailSentTime
     * @param \DateTime $SellerInvoiceTime
     * @param boolean $IntegratedMerchantCreditCardEnabled
     * @param string $any
     */
    public function __construct($CheckoutStatus = null, $PaidStatus = null, $ShippedStatus = null, $eBayPaymentStatus = null, $PayPalTransactionID = null, $PaymentMethodUsed = null, $FeedbackReceived = null, $FeedbackSent = null, $TotalEmailsSent = null, $PaymentHoldStatus = null, $SellerInvoiceNumber = null, \DateTime $ShippedTime = null, \DateTime $PaidTime = null, \DateTime $LastEmailSentTime = null, \DateTime $SellerInvoiceTime = null, $IntegratedMerchantCreditCardEnabled = null, $any = null)
    {
      $this->CheckoutStatus = $CheckoutStatus;
      $this->PaidStatus = $PaidStatus;
      $this->ShippedStatus = $ShippedStatus;
      $this->eBayPaymentStatus = $eBayPaymentStatus;
      $this->PayPalTransactionID = $PayPalTransactionID;
      $this->PaymentMethodUsed = $PaymentMethodUsed;
      $this->FeedbackReceived = $FeedbackReceived;
      $this->FeedbackSent = $FeedbackSent;
      $this->TotalEmailsSent = $TotalEmailsSent;
      $this->PaymentHoldStatus = $PaymentHoldStatus;
      $this->SellerInvoiceNumber = $SellerInvoiceNumber;
      $this->ShippedTime = $ShippedTime ? $ShippedTime->format(\DateTime::ATOM) : null;
      $this->PaidTime = $PaidTime ? $PaidTime->format(\DateTime::ATOM) : null;
      $this->LastEmailSentTime = $LastEmailSentTime ? $LastEmailSentTime->format(\DateTime::ATOM) : null;
      $this->SellerInvoiceTime = $SellerInvoiceTime ? $SellerInvoiceTime->format(\DateTime::ATOM) : null;
      $this->IntegratedMerchantCreditCardEnabled = $IntegratedMerchantCreditCardEnabled;
      $this->any = $any;
    }

    /**
     * @return CheckoutStatusCodeType
     */
    public function getCheckoutStatus()
    {
      return $this->CheckoutStatus;
    }

    /**
     * @param CheckoutStatusCodeType $CheckoutStatus
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setCheckoutStatus($CheckoutStatus)
    {
      $this->CheckoutStatus = $CheckoutStatus;
      return $this;
    }

    /**
     * @return SellingManagerPaidStatusCodeType
     */
    public function getPaidStatus()
    {
      return $this->PaidStatus;
    }

    /**
     * @param SellingManagerPaidStatusCodeType $PaidStatus
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setPaidStatus($PaidStatus)
    {
      $this->PaidStatus = $PaidStatus;
      return $this;
    }

    /**
     * @return SellingManagerShippedStatusCodeType
     */
    public function getShippedStatus()
    {
      return $this->ShippedStatus;
    }

    /**
     * @param SellingManagerShippedStatusCodeType $ShippedStatus
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setShippedStatus($ShippedStatus)
    {
      $this->ShippedStatus = $ShippedStatus;
      return $this;
    }

    /**
     * @return PaymentStatusCodeType
     */
    public function getEBayPaymentStatus()
    {
      return $this->eBayPaymentStatus;
    }

    /**
     * @param PaymentStatusCodeType $eBayPaymentStatus
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setEBayPaymentStatus($eBayPaymentStatus)
    {
      $this->eBayPaymentStatus = $eBayPaymentStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayPalTransactionID()
    {
      return $this->PayPalTransactionID;
    }

    /**
     * @param string $PayPalTransactionID
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setPayPalTransactionID($PayPalTransactionID)
    {
      $this->PayPalTransactionID = $PayPalTransactionID;
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
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setPaymentMethodUsed($PaymentMethodUsed)
    {
      $this->PaymentMethodUsed = $PaymentMethodUsed;
      return $this;
    }

    /**
     * @return CommentTypeCodeType
     */
    public function getFeedbackReceived()
    {
      return $this->FeedbackReceived;
    }

    /**
     * @param CommentTypeCodeType $FeedbackReceived
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setFeedbackReceived($FeedbackReceived)
    {
      $this->FeedbackReceived = $FeedbackReceived;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFeedbackSent()
    {
      return $this->FeedbackSent;
    }

    /**
     * @param boolean $FeedbackSent
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setFeedbackSent($FeedbackSent)
    {
      $this->FeedbackSent = $FeedbackSent;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalEmailsSent()
    {
      return $this->TotalEmailsSent;
    }

    /**
     * @param int $TotalEmailsSent
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setTotalEmailsSent($TotalEmailsSent)
    {
      $this->TotalEmailsSent = $TotalEmailsSent;
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
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setPaymentHoldStatus($PaymentHoldStatus)
    {
      $this->PaymentHoldStatus = $PaymentHoldStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerInvoiceNumber()
    {
      return $this->SellerInvoiceNumber;
    }

    /**
     * @param string $SellerInvoiceNumber
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setSellerInvoiceNumber($SellerInvoiceNumber)
    {
      $this->SellerInvoiceNumber = $SellerInvoiceNumber;
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
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setShippedTime(\DateTime $ShippedTime)
    {
      $this->ShippedTime = $ShippedTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setPaidTime(\DateTime $PaidTime)
    {
      $this->PaidTime = $PaidTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastEmailSentTime()
    {
      if ($this->LastEmailSentTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastEmailSentTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastEmailSentTime
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setLastEmailSentTime(\DateTime $LastEmailSentTime)
    {
      $this->LastEmailSentTime = $LastEmailSentTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSellerInvoiceTime()
    {
      if ($this->SellerInvoiceTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SellerInvoiceTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SellerInvoiceTime
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setSellerInvoiceTime(\DateTime $SellerInvoiceTime)
    {
      $this->SellerInvoiceTime = $SellerInvoiceTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setIntegratedMerchantCreditCardEnabled($IntegratedMerchantCreditCardEnabled)
    {
      $this->IntegratedMerchantCreditCardEnabled = $IntegratedMerchantCreditCardEnabled;
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
     * @return \EbayWsdl\Classes\SellingManagerOrderStatusType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
