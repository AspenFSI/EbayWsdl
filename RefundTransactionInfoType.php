<?php

namespace EbayWsdl;

class RefundTransactionInfoType
{

    /**
     * @var PaymentTransactionStatusCodeType $RefundStatus
     */
    protected $RefundStatus = null;

    /**
     * @var RefundSourceTypeCodeType $RefundType
     */
    protected $RefundType = null;

    /**
     * @var UserIdentityType $RefundTo
     */
    protected $RefundTo = null;

    /**
     * @var \DateTime $RefundTime
     */
    protected $RefundTime = null;

    /**
     * @var AmountType $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var TransactionReferenceType $ReferenceID
     */
    protected $ReferenceID = null;

    /**
     * @var AmountType $FeeOrCreditAmount
     */
    protected $FeeOrCreditAmount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PaymentTransactionStatusCodeType $RefundStatus
     * @param RefundSourceTypeCodeType $RefundType
     * @param UserIdentityType $RefundTo
     * @param \DateTime $RefundTime
     * @param AmountType $RefundAmount
     * @param TransactionReferenceType $ReferenceID
     * @param AmountType $FeeOrCreditAmount
     * @param string $any
     */
    public function __construct($RefundStatus = null, $RefundType = null, $RefundTo = null, \DateTime $RefundTime = null, $RefundAmount = null, $ReferenceID = null, $FeeOrCreditAmount = null, $any = null)
    {
      $this->RefundStatus = $RefundStatus;
      $this->RefundType = $RefundType;
      $this->RefundTo = $RefundTo;
      $this->RefundTime = $RefundTime ? $RefundTime->format(\DateTime::ATOM) : null;
      $this->RefundAmount = $RefundAmount;
      $this->ReferenceID = $ReferenceID;
      $this->FeeOrCreditAmount = $FeeOrCreditAmount;
      $this->any = $any;
    }

    /**
     * @return PaymentTransactionStatusCodeType
     */
    public function getRefundStatus()
    {
      return $this->RefundStatus;
    }

    /**
     * @param PaymentTransactionStatusCodeType $RefundStatus
     * @return \EbayWsdl\RefundTransactionInfoType
     */
    public function setRefundStatus($RefundStatus)
    {
      $this->RefundStatus = $RefundStatus;
      return $this;
    }

    /**
     * @return RefundSourceTypeCodeType
     */
    public function getRefundType()
    {
      return $this->RefundType;
    }

    /**
     * @param RefundSourceTypeCodeType $RefundType
     * @return \EbayWsdl\RefundTransactionInfoType
     */
    public function setRefundType($RefundType)
    {
      $this->RefundType = $RefundType;
      return $this;
    }

    /**
     * @return UserIdentityType
     */
    public function getRefundTo()
    {
      return $this->RefundTo;
    }

    /**
     * @param UserIdentityType $RefundTo
     * @return \EbayWsdl\RefundTransactionInfoType
     */
    public function setRefundTo($RefundTo)
    {
      $this->RefundTo = $RefundTo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRefundTime()
    {
      if ($this->RefundTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RefundTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RefundTime
     * @return \EbayWsdl\RefundTransactionInfoType
     */
    public function setRefundTime(\DateTime $RefundTime)
    {
      $this->RefundTime = $RefundTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\RefundTransactionInfoType
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return TransactionReferenceType
     */
    public function getReferenceID()
    {
      return $this->ReferenceID;
    }

    /**
     * @param TransactionReferenceType $ReferenceID
     * @return \EbayWsdl\RefundTransactionInfoType
     */
    public function setReferenceID($ReferenceID)
    {
      $this->ReferenceID = $ReferenceID;
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
     * @return \EbayWsdl\RefundTransactionInfoType
     */
    public function setFeeOrCreditAmount($FeeOrCreditAmount)
    {
      $this->FeeOrCreditAmount = $FeeOrCreditAmount;
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
     * @return \EbayWsdl\RefundTransactionInfoType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
