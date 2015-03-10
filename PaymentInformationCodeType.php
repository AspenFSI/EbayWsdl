<?php

namespace EbayWsdl;

class PaymentInformationCodeType
{

    /**
     * @var PaymentTransactionCodeType[] $Payment
     */
    protected $Payment = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PaymentTransactionCodeType[] $Payment
     * @param string $any
     */
    public function __construct(array $Payment = null, $any = null)
    {
      $this->Payment = $Payment;
      $this->any = $any;
    }

    /**
     * @return PaymentTransactionCodeType[]
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param PaymentTransactionCodeType[] $Payment
     * @return \EbayWsdl\PaymentInformationCodeType
     */
    public function setPayment(array $Payment)
    {
      $this->Payment = $Payment;
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
     * @return \EbayWsdl\PaymentInformationCodeType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
