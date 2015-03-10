<?php

namespace EbayWsdl;

class PaymentDetailsType
{

    /**
     * @var int $HoursToDeposit
     */
    protected $HoursToDeposit = null;

    /**
     * @var int $DaysToFullPayment
     */
    protected $DaysToFullPayment = null;

    /**
     * @var AmountType $DepositAmount
     */
    protected $DepositAmount = null;

    /**
     * @var DepositTypeCodeType $DepositType
     */
    protected $DepositType = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $HoursToDeposit
     * @param int $DaysToFullPayment
     * @param AmountType $DepositAmount
     * @param DepositTypeCodeType $DepositType
     * @param string $any
     */
    public function __construct($HoursToDeposit = null, $DaysToFullPayment = null, $DepositAmount = null, $DepositType = null, $any = null)
    {
      $this->HoursToDeposit = $HoursToDeposit;
      $this->DaysToFullPayment = $DaysToFullPayment;
      $this->DepositAmount = $DepositAmount;
      $this->DepositType = $DepositType;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getHoursToDeposit()
    {
      return $this->HoursToDeposit;
    }

    /**
     * @param int $HoursToDeposit
     * @return \EbayWsdl\PaymentDetailsType
     */
    public function setHoursToDeposit($HoursToDeposit)
    {
      $this->HoursToDeposit = $HoursToDeposit;
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysToFullPayment()
    {
      return $this->DaysToFullPayment;
    }

    /**
     * @param int $DaysToFullPayment
     * @return \EbayWsdl\PaymentDetailsType
     */
    public function setDaysToFullPayment($DaysToFullPayment)
    {
      $this->DaysToFullPayment = $DaysToFullPayment;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getDepositAmount()
    {
      return $this->DepositAmount;
    }

    /**
     * @param AmountType $DepositAmount
     * @return \EbayWsdl\PaymentDetailsType
     */
    public function setDepositAmount($DepositAmount)
    {
      $this->DepositAmount = $DepositAmount;
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
     * @return \EbayWsdl\PaymentDetailsType
     */
    public function setDepositType($DepositType)
    {
      $this->DepositType = $DepositType;
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
     * @return \EbayWsdl\PaymentDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
