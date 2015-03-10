<?php

namespace EbayWsdl;

class PaymentsInformationCodeType
{

    /**
     * @var PaymentInformationCodeType $Payments
     */
    protected $Payments = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PaymentInformationCodeType $Payments
     * @param string $any
     */
    public function __construct($Payments = null, $any = null)
    {
      $this->Payments = $Payments;
      $this->any = $any;
    }

    /**
     * @return PaymentInformationCodeType
     */
    public function getPayments()
    {
      return $this->Payments;
    }

    /**
     * @param PaymentInformationCodeType $Payments
     * @return \EbayWsdl\PaymentsInformationCodeType
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
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
     * @return \EbayWsdl\PaymentsInformationCodeType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
