<?php

namespace EbayWsdl\Classes;

class QuantityRestrictionPerBuyerInfoType
{

    /**
     * @var int $MaximumQuantity
     */
    protected $MaximumQuantity = null;

    /**
     * @param int $MaximumQuantity
     */
    public function __construct($MaximumQuantity = null)
    {
      $this->MaximumQuantity = $MaximumQuantity;
    }

    /**
     * @return int
     */
    public function getMaximumQuantity()
    {
      return $this->MaximumQuantity;
    }

    /**
     * @param int $MaximumQuantity
     * @return \EbayWsdl\Classes\QuantityRestrictionPerBuyerInfoType
     */
    public function setMaximumQuantity($MaximumQuantity)
    {
      $this->MaximumQuantity = $MaximumQuantity;
      return $this;
    }

}
