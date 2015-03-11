<?php

namespace EbayWsdl\Classes;

class AdditionalAccountType
{

    /**
     * @var AmountType $Balance
     */
    protected $Balance = null;

    /**
     * @var CurrencyCodeType $Currency
     */
    protected $Currency = null;

    /**
     * @var string $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $Balance
     * @param CurrencyCodeType $Currency
     * @param string $AccountCode
     * @param string $any
     */
    public function __construct($Balance = null, $Currency = null, $AccountCode = null, $any = null)
    {
      $this->Balance = $Balance;
      $this->Currency = $Currency;
      $this->AccountCode = $AccountCode;
      $this->any = $any;
    }

    /**
     * @return AmountType
     */
    public function getBalance()
    {
      return $this->Balance;
    }

    /**
     * @param AmountType $Balance
     * @return \EbayWsdl\Classes\AdditionalAccountType
     */
    public function setBalance($Balance)
    {
      $this->Balance = $Balance;
      return $this;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param CurrencyCodeType $Currency
     * @return \EbayWsdl\Classes\AdditionalAccountType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param string $AccountCode
     * @return \EbayWsdl\Classes\AdditionalAccountType
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
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
     * @return \EbayWsdl\Classes\AdditionalAccountType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
