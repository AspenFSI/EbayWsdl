<?php

namespace EbayWsdl;

class CheckoutStatusType
{

    /**
     * @var PaymentStatusCodeType $eBayPaymentStatus
     */
    protected $eBayPaymentStatus = null;

    /**
     * @var \DateTime $LastModifiedTime
     */
    protected $LastModifiedTime = null;

    /**
     * @var BuyerPaymentMethodCodeType $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var CompleteStatusCodeType $Status
     */
    protected $Status = null;

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
     * @param \DateTime $LastModifiedTime
     * @param BuyerPaymentMethodCodeType $PaymentMethod
     * @param CompleteStatusCodeType $Status
     * @param boolean $IntegratedMerchantCreditCardEnabled
     * @param eBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     * @param string $any
     */
    public function __construct($eBayPaymentStatus = null, \DateTime $LastModifiedTime = null, $PaymentMethod = null, $Status = null, $IntegratedMerchantCreditCardEnabled = null, $eBayPaymentMismatchDetails = null, $any = null)
    {
      $this->eBayPaymentStatus = $eBayPaymentStatus;
      $this->LastModifiedTime = $LastModifiedTime ? $LastModifiedTime->format(\DateTime::ATOM) : null;
      $this->PaymentMethod = $PaymentMethod;
      $this->Status = $Status;
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
     * @return \EbayWsdl\CheckoutStatusType
     */
    public function setEBayPaymentStatus($eBayPaymentStatus)
    {
      $this->eBayPaymentStatus = $eBayPaymentStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
      if ($this->LastModifiedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedTime
     * @return \EbayWsdl\CheckoutStatusType
     */
    public function setLastModifiedTime(\DateTime $LastModifiedTime)
    {
      $this->LastModifiedTime = $LastModifiedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return BuyerPaymentMethodCodeType
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param BuyerPaymentMethodCodeType $PaymentMethod
     * @return \EbayWsdl\CheckoutStatusType
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

    /**
     * @return CompleteStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param CompleteStatusCodeType $Status
     * @return \EbayWsdl\CheckoutStatusType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \EbayWsdl\CheckoutStatusType
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
     * @return \EbayWsdl\CheckoutStatusType
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
     * @return \EbayWsdl\CheckoutStatusType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
