<?php

namespace EbayWsdl\Classes;

class RefundFailureReasonType
{

    /**
     * @var RefundFailureCodeType $RefundFailureCode
     */
    protected $RefundFailureCode = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RefundFailureCodeType $RefundFailureCode
     * @param string $any
     */
    public function __construct($RefundFailureCode = null, $any = null)
    {
      $this->RefundFailureCode = $RefundFailureCode;
      $this->any = $any;
    }

    /**
     * @return RefundFailureCodeType
     */
    public function getRefundFailureCode()
    {
      return $this->RefundFailureCode;
    }

    /**
     * @param RefundFailureCodeType $RefundFailureCode
     * @return \EbayWsdl\Classes\RefundFailureReasonType
     */
    public function setRefundFailureCode($RefundFailureCode)
    {
      $this->RefundFailureCode = $RefundFailureCode;
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
     * @return \EbayWsdl\Classes\RefundFailureReasonType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
