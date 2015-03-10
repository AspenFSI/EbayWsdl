<?php

namespace EbayWsdl;

class BasicAmountType
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var CurrencyCodeType $currencyID
     */
    protected $currencyID = null;

    /**
     * @param string $_
     * @param CurrencyCodeType $currencyID
     */
    public function __construct($_ = null, $currencyID = null)
    {
      $this->_ = $_;
      $this->currencyID = $currencyID;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \EbayWsdl\BasicAmountType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getCurrencyID()
    {
      return $this->currencyID;
    }

    /**
     * @param CurrencyCodeType $currencyID
     * @return \EbayWsdl\BasicAmountType
     */
    public function setCurrencyID($currencyID)
    {
      $this->currencyID = $currencyID;
      return $this;
    }

}
