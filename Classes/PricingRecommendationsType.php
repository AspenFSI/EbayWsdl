<?php

namespace EbayWsdl\Classes;

class PricingRecommendationsType
{

    /**
     * @var ProductInfoType $ProductInfo
     */
    protected $ProductInfo = null;

    /**
     * @param ProductInfoType $ProductInfo
     */
    public function __construct($ProductInfo = null)
    {
      $this->ProductInfo = $ProductInfo;
    }

    /**
     * @return ProductInfoType
     */
    public function getProductInfo()
    {
      return $this->ProductInfo;
    }

    /**
     * @param ProductInfoType $ProductInfo
     * @return \EbayWsdl\Classes\PricingRecommendationsType
     */
    public function setProductInfo($ProductInfo)
    {
      $this->ProductInfo = $ProductInfo;
      return $this;
    }

}
