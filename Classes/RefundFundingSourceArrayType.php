<?php

namespace EbayWsdl\Classes;

class RefundFundingSourceArrayType
{

    /**
     * @var RefundFundingSourceType[] $RefundFundingSource
     */
    protected $RefundFundingSource = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RefundFundingSourceType[] $RefundFundingSource
     * @param string $any
     */
    public function __construct(array $RefundFundingSource = null, $any = null)
    {
      $this->RefundFundingSource = $RefundFundingSource;
      $this->any = $any;
    }

    /**
     * @return RefundFundingSourceType[]
     */
    public function getRefundFundingSource()
    {
      return $this->RefundFundingSource;
    }

    /**
     * @param RefundFundingSourceType[] $RefundFundingSource
     * @return \EbayWsdl\Classes\RefundFundingSourceArrayType
     */
    public function setRefundFundingSource(array $RefundFundingSource)
    {
      $this->RefundFundingSource = $RefundFundingSource;
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
     * @return \EbayWsdl\Classes\RefundFundingSourceArrayType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
