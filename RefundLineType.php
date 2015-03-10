<?php

namespace EbayWsdl;

class RefundLineType extends AmountType
{

    /**
     * @var AmountType $_
     */
    protected $_ = null;

    /**
     * @var RefundLineTypeCodeType $type
     */
    protected $type = null;

    /**
     * @param float $_
     * @param CurrencyCodeType $currencyID
     * @param AmountType $_
     * @param RefundLineTypeCodeType $type
     */
    public function __construct($_ = null, $currencyID = null, $type = null)
    {
      parent::__construct($_, $currencyID);
      $this->_ = $_;
      $this->type = $type;
    }

    /**
     * @return AmountType
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param AmountType $_
     * @return \EbayWsdl\RefundLineType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return RefundLineTypeCodeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param RefundLineTypeCodeType $type
     * @return \EbayWsdl\RefundLineType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
