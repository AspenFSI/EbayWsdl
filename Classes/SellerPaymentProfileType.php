<?php

namespace EbayWsdl\Classes;

class SellerPaymentProfileType
{

    /**
     * @var int $PaymentProfileID
     */
    protected $PaymentProfileID = null;

    /**
     * @var string $PaymentProfileName
     */
    protected $PaymentProfileName = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $PaymentProfileID
     * @param string $PaymentProfileName
     * @param string $any
     */
    public function __construct($PaymentProfileID = null, $PaymentProfileName = null, $any = null)
    {
      $this->PaymentProfileID = $PaymentProfileID;
      $this->PaymentProfileName = $PaymentProfileName;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getPaymentProfileID()
    {
      return $this->PaymentProfileID;
    }

    /**
     * @param int $PaymentProfileID
     * @return \EbayWsdl\Classes\SellerPaymentProfileType
     */
    public function setPaymentProfileID($PaymentProfileID)
    {
      $this->PaymentProfileID = $PaymentProfileID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentProfileName()
    {
      return $this->PaymentProfileName;
    }

    /**
     * @param string $PaymentProfileName
     * @return \EbayWsdl\Classes\SellerPaymentProfileType
     */
    public function setPaymentProfileName($PaymentProfileName)
    {
      $this->PaymentProfileName = $PaymentProfileName;
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
     * @return \EbayWsdl\Classes\SellerPaymentProfileType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
