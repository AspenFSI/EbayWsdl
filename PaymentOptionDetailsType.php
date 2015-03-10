<?php

namespace EbayWsdl;

class PaymentOptionDetailsType
{

    /**
     * @var BuyerPaymentMethodCodeType $PaymentOption
     */
    protected $PaymentOption = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param BuyerPaymentMethodCodeType $PaymentOption
     * @param string $Description
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($PaymentOption = null, $Description = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->PaymentOption = $PaymentOption;
      $this->Description = $Description;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return BuyerPaymentMethodCodeType
     */
    public function getPaymentOption()
    {
      return $this->PaymentOption;
    }

    /**
     * @param BuyerPaymentMethodCodeType $PaymentOption
     * @return \EbayWsdl\PaymentOptionDetailsType
     */
    public function setPaymentOption($PaymentOption)
    {
      $this->PaymentOption = $PaymentOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\PaymentOptionDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailVersion()
    {
      return $this->DetailVersion;
    }

    /**
     * @param string $DetailVersion
     * @return \EbayWsdl\PaymentOptionDetailsType
     */
    public function setDetailVersion($DetailVersion)
    {
      $this->DetailVersion = $DetailVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\PaymentOptionDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\PaymentOptionDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
