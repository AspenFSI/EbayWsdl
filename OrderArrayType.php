<?php

namespace EbayWsdl;

class OrderArrayType
{

    /**
     * @var OrderType[] $Order
     */
    protected $Order = null;

    /**
     * @param OrderType[] $Order
     */
    public function __construct(array $Order = null)
    {
      $this->Order = $Order;
    }

    /**
     * @return OrderType[]
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param OrderType[] $Order
     * @return \EbayWsdl\OrderArrayType
     */
    public function setOrder(array $Order)
    {
      $this->Order = $Order;
      return $this;
    }

}
