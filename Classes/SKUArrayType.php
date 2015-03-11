<?php

namespace EbayWsdl\Classes;

class SKUArrayType
{

    /**
     * @var SKUType[] $SKU
     */
    protected $SKU = null;

    /**
     * @param SKUType[] $SKU
     */
    public function __construct(array $SKU = null)
    {
      $this->SKU = $SKU;
    }

    /**
     * @return SKUType[]
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param SKUType[] $SKU
     * @return \EbayWsdl\Classes\SKUArrayType
     */
    public function setSKU(array $SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

}
