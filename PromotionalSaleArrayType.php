<?php

namespace EbayWsdl;

class PromotionalSaleArrayType
{

    /**
     * @var PromotionalSaleType[] $PromotionalSale
     */
    protected $PromotionalSale = null;

    /**
     * @param PromotionalSaleType[] $PromotionalSale
     */
    public function __construct(array $PromotionalSale = null)
    {
      $this->PromotionalSale = $PromotionalSale;
    }

    /**
     * @return PromotionalSaleType[]
     */
    public function getPromotionalSale()
    {
      return $this->PromotionalSale;
    }

    /**
     * @param PromotionalSaleType[] $PromotionalSale
     * @return \EbayWsdl\PromotionalSaleArrayType
     */
    public function setPromotionalSale(array $PromotionalSale)
    {
      $this->PromotionalSale = $PromotionalSale;
      return $this;
    }

}
