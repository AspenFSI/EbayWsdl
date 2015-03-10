<?php

namespace EbayWsdl;

class OrderIDArrayType
{

    /**
     * @var OrderIDType[] $OrderID
     */
    protected $OrderID = null;

    /**
     * @param OrderIDType[] $OrderID
     */
    public function __construct(array $OrderID = null)
    {
      $this->OrderID = $OrderID;
    }

    /**
     * @return OrderIDType[]
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param OrderIDType[] $OrderID
     * @return \EbayWsdl\OrderIDArrayType
     */
    public function setOrderID(array $OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

}
