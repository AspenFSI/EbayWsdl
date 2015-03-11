<?php

namespace EbayWsdl\Classes;

class RefundArrayType
{

    /**
     * @var RefundType[] $Refund
     */
    protected $Refund = null;

    /**
     * @param RefundType[] $Refund
     */
    public function __construct(array $Refund = null)
    {
      $this->Refund = $Refund;
    }

    /**
     * @return RefundType[]
     */
    public function getRefund()
    {
      return $this->Refund;
    }

    /**
     * @param RefundType[] $Refund
     * @return \EbayWsdl\Classes\RefundArrayType
     */
    public function setRefund(array $Refund)
    {
      $this->Refund = $Refund;
      return $this;
    }

}
