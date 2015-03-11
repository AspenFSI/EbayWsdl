<?php

namespace EbayWsdl\Classes;

class ExternalTransactionType
{

    /**
     * @var string $ExternalTransactionID
     */
    protected $ExternalTransactionID = null;

    /**
     * @var \DateTime $ExternalTransactionTime
     */
    protected $ExternalTransactionTime = null;

    /**
     * @var AmountType $FeeOrCreditAmount
     */
    protected $FeeOrCreditAmount = null;

    /**
     * @var AmountType $PaymentOrRefundAmount
     */
    protected $PaymentOrRefundAmount = null;

    /**
     * @var PaymentTransactionStatusCodeType $ExternalTransactionStatus
     */
    protected $ExternalTransactionStatus = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ExternalTransactionID
     * @param \DateTime $ExternalTransactionTime
     * @param AmountType $FeeOrCreditAmount
     * @param AmountType $PaymentOrRefundAmount
     * @param PaymentTransactionStatusCodeType $ExternalTransactionStatus
     * @param string $any
     */
    public function __construct($ExternalTransactionID = null, \DateTime $ExternalTransactionTime = null, $FeeOrCreditAmount = null, $PaymentOrRefundAmount = null, $ExternalTransactionStatus = null, $any = null)
    {
      $this->ExternalTransactionID = $ExternalTransactionID;
      $this->ExternalTransactionTime = $ExternalTransactionTime ? $ExternalTransactionTime->format(\DateTime::ATOM) : null;
      $this->FeeOrCreditAmount = $FeeOrCreditAmount;
      $this->PaymentOrRefundAmount = $PaymentOrRefundAmount;
      $this->ExternalTransactionStatus = $ExternalTransactionStatus;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getExternalTransactionID()
    {
      return $this->ExternalTransactionID;
    }

    /**
     * @param string $ExternalTransactionID
     * @return \EbayWsdl\Classes\ExternalTransactionType
     */
    public function setExternalTransactionID($ExternalTransactionID)
    {
      $this->ExternalTransactionID = $ExternalTransactionID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExternalTransactionTime()
    {
      if ($this->ExternalTransactionTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExternalTransactionTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExternalTransactionTime
     * @return \EbayWsdl\Classes\ExternalTransactionType
     */
    public function setExternalTransactionTime(\DateTime $ExternalTransactionTime)
    {
      $this->ExternalTransactionTime = $ExternalTransactionTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getFeeOrCreditAmount()
    {
      return $this->FeeOrCreditAmount;
    }

    /**
     * @param AmountType $FeeOrCreditAmount
     * @return \EbayWsdl\Classes\ExternalTransactionType
     */
    public function setFeeOrCreditAmount($FeeOrCreditAmount)
    {
      $this->FeeOrCreditAmount = $FeeOrCreditAmount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getPaymentOrRefundAmount()
    {
      return $this->PaymentOrRefundAmount;
    }

    /**
     * @param AmountType $PaymentOrRefundAmount
     * @return \EbayWsdl\Classes\ExternalTransactionType
     */
    public function setPaymentOrRefundAmount($PaymentOrRefundAmount)
    {
      $this->PaymentOrRefundAmount = $PaymentOrRefundAmount;
      return $this;
    }

    /**
     * @return PaymentTransactionStatusCodeType
     */
    public function getExternalTransactionStatus()
    {
      return $this->ExternalTransactionStatus;
    }

    /**
     * @param PaymentTransactionStatusCodeType $ExternalTransactionStatus
     * @return \EbayWsdl\Classes\ExternalTransactionType
     */
    public function setExternalTransactionStatus($ExternalTransactionStatus)
    {
      $this->ExternalTransactionStatus = $ExternalTransactionStatus;
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
     * @return \EbayWsdl\Classes\ExternalTransactionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
