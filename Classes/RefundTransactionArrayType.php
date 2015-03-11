<?php

namespace EbayWsdl\Classes;

class RefundTransactionArrayType
{

    /**
     * @var RefundTransactionType[] $RefundTransaction
     */
    protected $RefundTransaction = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RefundTransactionType[] $RefundTransaction
     * @param string $any
     */
    public function __construct(array $RefundTransaction = null, $any = null)
    {
      $this->RefundTransaction = $RefundTransaction;
      $this->any = $any;
    }

    /**
     * @return RefundTransactionType[]
     */
    public function getRefundTransaction()
    {
      return $this->RefundTransaction;
    }

    /**
     * @param RefundTransactionType[] $RefundTransaction
     * @return \EbayWsdl\Classes\RefundTransactionArrayType
     */
    public function setRefundTransaction(array $RefundTransaction)
    {
      $this->RefundTransaction = $RefundTransaction;
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
     * @return \EbayWsdl\Classes\RefundTransactionArrayType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
