<?php

namespace EbayWsdl;

class RefundInformationType
{

    /**
     * @var RefundTransactionInfoType[] $Refund
     */
    protected $Refund = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RefundTransactionInfoType[] $Refund
     * @param string $any
     */
    public function __construct(array $Refund = null, $any = null)
    {
      $this->Refund = $Refund;
      $this->any = $any;
    }

    /**
     * @return RefundTransactionInfoType[]
     */
    public function getRefund()
    {
      return $this->Refund;
    }

    /**
     * @param RefundTransactionInfoType[] $Refund
     * @return \EbayWsdl\RefundInformationType
     */
    public function setRefund(array $Refund)
    {
      $this->Refund = $Refund;
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
     * @return \EbayWsdl\RefundInformationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
