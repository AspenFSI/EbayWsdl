<?php

namespace EbayWsdl;

class OrderTransactionType
{

    /**
     * @var OrderType $Order
     */
    protected $Order = null;

    /**
     * @var TransactionType $Transaction
     */
    protected $Transaction = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param OrderType $Order
     * @param TransactionType $Transaction
     * @param string $any
     */
    public function __construct($Order = null, $Transaction = null, $any = null)
    {
      $this->Order = $Order;
      $this->Transaction = $Transaction;
      $this->any = $any;
    }

    /**
     * @return OrderType
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param OrderType $Order
     * @return \EbayWsdl\OrderTransactionType
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return TransactionType
     */
    public function getTransaction()
    {
      return $this->Transaction;
    }

    /**
     * @param TransactionType $Transaction
     * @return \EbayWsdl\OrderTransactionType
     */
    public function setTransaction($Transaction)
    {
      $this->Transaction = $Transaction;
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
     * @return \EbayWsdl\OrderTransactionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
