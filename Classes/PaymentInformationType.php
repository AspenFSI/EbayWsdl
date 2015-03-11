<?php

namespace EbayWsdl\Classes;

class PaymentInformationType
{

    /**
     * @var PaymentTransactionType[] $Payment
     */
    protected $Payment = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PaymentTransactionType[] $Payment
     * @param string $any
     */
    public function __construct(array $Payment = null, $any = null)
    {
      $this->Payment = $Payment;
      $this->any = $any;
    }

    /**
     * @return PaymentTransactionType[]
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param PaymentTransactionType[] $Payment
     * @return \EbayWsdl\Classes\PaymentInformationType
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
     * @return \EbayWsdl\Classes\PaymentInformationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
