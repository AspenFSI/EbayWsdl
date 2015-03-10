<?php

namespace EbayWsdl;

class ItemTotalsType
{

    /**
     * @var int $TotalQuantity
     */
    protected $TotalQuantity = null;

    /**
     * @var AmountType $TotalValue
     */
    protected $TotalValue = null;

    /**
     * @param int $TotalQuantity
     * @param AmountType $TotalValue
     */
    public function __construct($TotalQuantity = null, $TotalValue = null)
    {
      $this->TotalQuantity = $TotalQuantity;
      $this->TotalValue = $TotalValue;
    }

    /**
     * @return int
     */
    public function getTotalQuantity()
    {
      return $this->TotalQuantity;
    }

    /**
     * @param int $TotalQuantity
     * @return \EbayWsdl\ItemTotalsType
     */
    public function setTotalQuantity($TotalQuantity)
    {
      $this->TotalQuantity = $TotalQuantity;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalValue()
    {
      return $this->TotalValue;
    }

    /**
     * @param AmountType $TotalValue
     * @return \EbayWsdl\ItemTotalsType
     */
    public function setTotalValue($TotalValue)
    {
      $this->TotalValue = $TotalValue;
      return $this;
    }

}
