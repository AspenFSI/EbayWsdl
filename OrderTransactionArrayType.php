<?php

namespace EbayWsdl;

class OrderTransactionArrayType
{

    /**
     * @var OrderTransactionType[] $OrderTransaction
     */
    protected $OrderTransaction = null;

    /**
     * @param OrderTransactionType[] $OrderTransaction
     */
    public function __construct(array $OrderTransaction = null)
    {
      $this->OrderTransaction = $OrderTransaction;
    }

    /**
     * @return OrderTransactionType[]
     */
    public function getOrderTransaction()
    {
      return $this->OrderTransaction;
    }

    /**
     * @param OrderTransactionType[] $OrderTransaction
     * @return \EbayWsdl\OrderTransactionArrayType
     */
    public function setOrderTransaction(array $OrderTransaction)
    {
      $this->OrderTransaction = $OrderTransaction;
      return $this;
    }

}
