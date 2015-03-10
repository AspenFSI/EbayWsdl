<?php

namespace EbayWsdl;

class TransactionStatusType
{

    /**
     * @var PaymentStatusCodeType $eBayPaymentStatus
     */
    protected $eBayPaymentStatus = null;

    /**
     * @var CheckoutStatusCodeType $CheckoutStatus
     */
    protected $CheckoutStatus = null;

    /**
     * @var \DateTime $LastTimeModified
     */
    protected $LastTimeModified = null;

    /**
     * @var BuyerPaymentMethodCodeType $PaymentMethodUsed
     */
    protected $PaymentMethodUsed = null;

    /**
     * @var CompleteStatusCodeType $CompleteStatus
     */
    protected $CompleteStatus = null;

    /**
     * @var boolean $BuyerSelectedShipping
     */
    protected $BuyerSelectedShipping = null;

    /**
     * @var PaymentHoldStatusCodeType $PaymentHoldStatus
     */
    protected $PaymentHoldStatus = null;

    /**
     * @var boolean $IntegratedMerchantCreditCardEnabled
     */
    protected $IntegratedMerchantCreditCardEnabled = null;

    /**
     * @var eBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     */
    protected $eBayPaymentMismatchDetails = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PaymentStatusCodeType $eBayPaymentStatus
     * @param CheckoutStatusCodeType $CheckoutStatus
     * @param \DateTime $LastTimeModified
     * @param BuyerPaymentMethodCodeType $PaymentMethodUsed
     * @param CompleteStatusCodeType $CompleteStatus
     * @param boolean $BuyerSelectedShipping
     * @param PaymentHoldStatusCodeType $PaymentHoldStatus
     * @param boolean $IntegratedMerchantCreditCardEnabled
     * @param eBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     * @param string $any
     */
    public function __construct($eBayPaymentStatus = null, $CheckoutStatus = null, \DateTime $LastTimeModified = null, $PaymentMethodUsed = null, $CompleteStatus = null, $BuyerSelectedShipping = null, $PaymentHoldStatus = null, $IntegratedMerchantCreditCardEnabled = null, $eBayPaymentMismatchDetails = null, $any = null)
    {
      $this->eBayPaymentStatus = $eBayPaymentStatus;
      $this->CheckoutStatus = $CheckoutStatus;
      $this->LastTimeModified = $LastTimeModified ? $LastTimeModified->format(\DateTime::ATOM) : null;
      $this->PaymentMethodUsed = $PaymentMethodUsed;
      $this->CompleteStatus = $CompleteStatus;
      $this->BuyerSelectedShipping = $BuyerSelectedShipping;
      $this->PaymentHoldStatus = $PaymentHoldStatus;
      $this->IntegratedMerchantCreditCardEnabled = $IntegratedMerchantCreditCardEnabled;
      $this->eBayPaymentMismatchDetails = $eBayPaymentMismatchDetails;
      $this->any = $any;
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
     * @return \EbayWsdl\TransactionStatusType
     */
    public function setEBayPaymentStatus($eBayPaymentStatus)
    {
      $this->eBayPaymentStatus = $eBayPaymentStatus;
      return $this;
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
     * @return \EbayWsdl\TransactionStatusType
     */
    public function setCheckoutStatus($CheckoutStatus)
    {
      $this->CheckoutStatus = $CheckoutStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastTimeModified()
    {
      if ($this->LastTimeModified == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastTimeModified);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastTimeModified
     * @return \EbayWsdl\TransactionStatusType
     */
    public function setLastTimeModified(\DateTime $LastTimeModified)
    {
      $this->LastTimeModified = $LastTimeModified->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\TransactionStatusType
     */
    public function setPaymentMethodUsed($PaymentMethodUsed)
    {
      $this->PaymentMethodUsed = $PaymentMethodUsed;
      return $this;
    }

    /**
     * @return CompleteStatusCodeType
     */
    public function getCompleteStatus()
    {
      return $this->CompleteStatus;
    }

    /**
     * @param CompleteStatusCodeType $CompleteStatus
     * @return \EbayWsdl\TransactionStatusType
     */
    public function setCompleteStatus($CompleteStatus)
    {
      $this->CompleteStatus = $CompleteStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBuyerSelectedShipping()
    {
      return $this->BuyerSelectedShipping;
    }

    /**
     * @param boolean $BuyerSelectedShipping
     * @return \EbayWsdl\TransactionStatusType
     */
    public function setBuyerSelectedShipping($BuyerSelectedShipping)
    {
      $this->BuyerSelectedShipping = $BuyerSelectedShipping;
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
     * @return \EbayWsdl\TransactionStatusType
     */
    public function setPaymentHoldStatus($PaymentHoldStatus)
    {
      $this->PaymentHoldStatus = $PaymentHoldStatus;
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
     * @return \EbayWsdl\TransactionStatusType
     */
    public function setIntegratedMerchantCreditCardEnabled($IntegratedMerchantCreditCardEnabled)
    {
      $this->IntegratedMerchantCreditCardEnabled = $IntegratedMerchantCreditCardEnabled;
      return $this;
    }

    /**
     * @return eBayPaymentMismatchDetailsType
     */
    public function getEBayPaymentMismatchDetails()
    {
      return $this->eBayPaymentMismatchDetails;
    }

    /**
     * @param eBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     * @return \EbayWsdl\TransactionStatusType
     */
    public function setEBayPaymentMismatchDetails($eBayPaymentMismatchDetails)
    {
      $this->eBayPaymentMismatchDetails = $eBayPaymentMismatchDetails;
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
     * @return \EbayWsdl\TransactionStatusType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
