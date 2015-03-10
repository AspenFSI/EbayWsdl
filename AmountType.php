<?php

namespace EbayWsdl;

class AmountType
{

    /**
     * @var float $_
     */
    protected $_ = null;

    /**
     * @var CurrencyCodeType $currencyID
     */
    protected $currencyID = null;

    /**
     * @param float $_
     * @param CurrencyCodeType $currencyID
     */
    public function __construct($_ = null, $currencyID = null)
    {
      $this->_ = $_;
      $this->currencyID = $currencyID;
    }

    /**
     * @return float
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param float $_
     * @return \EbayWsdl\AmountType
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
     * @return \EbayWsdl\AmountType
     */
    public function setCurrencyID($currencyID)
    {
      $this->currencyID = $currencyID;
      return $this;
    }

}
