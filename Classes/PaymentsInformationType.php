<?php

namespace EbayWsdl\Classes;

class PaymentsInformationType
{

    /**
     * @var PaymentInformationType $Payments
     */
    protected $Payments = null;

    /**
     * @var RefundInformationType $Refunds
     */
    protected $Refunds = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PaymentInformationType $Payments
     * @param RefundInformationType $Refunds
     * @param string $any
     */
    public function __construct($Payments = null, $Refunds = null, $any = null)
    {
      $this->Payments = $Payments;
      $this->Refunds = $Refunds;
      $this->any = $any;
    }

    /**
     * @return PaymentInformationType
     */
    public function getPayments()
    {
      return $this->Payments;
    }

    /**
     * @param PaymentInformationType $Payments
     * @return \EbayWsdl\Classes\PaymentsInformationType
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

    /**
     * @return RefundInformationType
     */
    public function getRefunds()
    {
      return $this->Refunds;
    }

    /**
     * @param RefundInformationType $Refunds
     * @return \EbayWsdl\Classes\PaymentsInformationType
     */
    public function setRefunds($Refunds)
    {
      $this->Refunds = $Refunds;
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
     * @return \EbayWsdl\Classes\PaymentsInformationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
