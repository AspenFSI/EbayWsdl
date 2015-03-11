<?php

namespace EbayWsdl\Classes;

class PaymentTransactionCodeType
{

    /**
     * @var PaymentTransactionStatusCodeType $PaymentStatus
     */
    protected $PaymentStatus = null;

    /**
     * @var UserIdentityType $Payer
     */
    protected $Payer = null;

    /**
     * @var UserIdentityType $Payee
     */
    protected $Payee = null;

    /**
     * @var \DateTime $PaymentTime
     */
    protected $PaymentTime = null;

    /**
     * @var AmountType $PaymentAmount
     */
    protected $PaymentAmount = null;

    /**
     * @var TransactionReferenceType $ReferenceID
     */
    protected $ReferenceID = null;

    /**
     * @var AmountType $FeeOrCreditAmount
     */
    protected $FeeOrCreditAmount = null;

    /**
     * @var TransactionReferenceType[] $PaymentReferenceID
     */
    protected $PaymentReferenceID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PaymentTransactionStatusCodeType $PaymentStatus
     * @param UserIdentityType $Payer
     * @param UserIdentityType $Payee
     * @param \DateTime $PaymentTime
     * @param AmountType $PaymentAmount
     * @param TransactionReferenceType $ReferenceID
     * @param AmountType $FeeOrCreditAmount
     * @param TransactionReferenceType[] $PaymentReferenceID
     * @param string $any
     */
    public function __construct($PaymentStatus = null, $Payer = null, $Payee = null, \DateTime $PaymentTime = null, $PaymentAmount = null, $ReferenceID = null, $FeeOrCreditAmount = null, array $PaymentReferenceID = null, $any = null)
    {
      $this->PaymentStatus = $PaymentStatus;
      $this->Payer = $Payer;
      $this->Payee = $Payee;
      $this->PaymentTime = $PaymentTime ? $PaymentTime->format(\DateTime::ATOM) : null;
      $this->PaymentAmount = $PaymentAmount;
      $this->ReferenceID = $ReferenceID;
      $this->FeeOrCreditAmount = $FeeOrCreditAmount;
      $this->PaymentReferenceID = $PaymentReferenceID;
      $this->any = $any;
    }

    /**
     * @return PaymentTransactionStatusCodeType
     */
    public function getPaymentStatus()
    {
      return $this->PaymentStatus;
    }

    /**
     * @param PaymentTransactionStatusCodeType $PaymentStatus
     * @return \EbayWsdl\Classes\PaymentTransactionCodeType
     */
    public function setPaymentStatus($PaymentStatus)
    {
      $this->PaymentStatus = $PaymentStatus;
      return $this;
    }

    /**
     * @return UserIdentityType
     */
    public function getPayer()
    {
      return $this->Payer;
    }

    /**
     * @param UserIdentityType $Payer
     * @return \EbayWsdl\Classes\PaymentTransactionCodeType
     */
    public function setPayer($Payer)
    {
      $this->Payer = $Payer;
      return $this;
    }

    /**
     * @return UserIdentityType
     */
    public function getPayee()
    {
      return $this->Payee;
    }

    /**
     * @param UserIdentityType $Payee
     * @return \EbayWsdl\Classes\PaymentTransactionCodeType
     */
    public function setPayee($Payee)
    {
      $this->Payee = $Payee;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaymentTime()
    {
      if ($this->PaymentTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PaymentTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PaymentTime
     * @return \EbayWsdl\Classes\PaymentTransactionCodeType
     */
    public function setPaymentTime(\DateTime $PaymentTime)
    {
      $this->PaymentTime = $PaymentTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getPaymentAmount()
    {
      return $this->PaymentAmount;
    }

    /**
     * @param AmountType $PaymentAmount
     * @return \EbayWsdl\Classes\PaymentTransactionCodeType
     */
    public function setPaymentAmount($PaymentAmount)
    {
      $this->PaymentAmount = $PaymentAmount;
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
     * @return \EbayWsdl\Classes\PaymentTransactionCodeType
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
     * @return \EbayWsdl\Classes\PaymentTransactionCodeType
     */
    public function setFeeOrCreditAmount($FeeOrCreditAmount)
    {
      $this->FeeOrCreditAmount = $FeeOrCreditAmount;
      return $this;
    }

    /**
     * @return TransactionReferenceType[]
     */
    public function getPaymentReferenceID()
    {
      return $this->PaymentReferenceID;
    }

    /**
     * @param TransactionReferenceType[] $PaymentReferenceID
     * @return \EbayWsdl\Classes\PaymentTransactionCodeType
     */
    public function setPaymentReferenceID(array $PaymentReferenceID)
    {
      $this->PaymentReferenceID = $PaymentReferenceID;
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
     * @return \EbayWsdl\Classes\PaymentTransactionCodeType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
