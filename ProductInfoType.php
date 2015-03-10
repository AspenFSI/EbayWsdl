<?php

namespace EbayWsdl;

class ProductInfoType
{

    /**
     * @var AmountType $AverageStartPrice
     */
    protected $AverageStartPrice = null;

    /**
     * @var AmountType $AverageSoldPrice
     */
    protected $AverageSoldPrice = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var ProductStateCodeType $ProductState
     */
    protected $ProductState = null;

    /**
     * @var string $productInfoID
     */
    protected $productInfoID = null;

    /**
     * @param AmountType $AverageStartPrice
     * @param AmountType $AverageSoldPrice
     * @param string $Title
     * @param ProductStateCodeType $ProductState
     * @param string $productInfoID
     */
    public function __construct($AverageStartPrice = null, $AverageSoldPrice = null, $Title = null, $ProductState = null, $productInfoID = null)
    {
      $this->AverageStartPrice = $AverageStartPrice;
      $this->AverageSoldPrice = $AverageSoldPrice;
      $this->Title = $Title;
      $this->ProductState = $ProductState;
      $this->productInfoID = $productInfoID;
    }

    /**
     * @return AmountType
     */
    public function getAverageStartPrice()
    {
      return $this->AverageStartPrice;
    }

    /**
     * @param AmountType $AverageStartPrice
     * @return \EbayWsdl\ProductInfoType
     */
    public function setAverageStartPrice($AverageStartPrice)
    {
      $this->AverageStartPrice = $AverageStartPrice;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getAverageSoldPrice()
    {
      return $this->AverageSoldPrice;
    }

    /**
     * @param AmountType $AverageSoldPrice
     * @return \EbayWsdl\ProductInfoType
     */
    public function setAverageSoldPrice($AverageSoldPrice)
    {
      $this->AverageSoldPrice = $AverageSoldPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \EbayWsdl\ProductInfoType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return ProductStateCodeType
     */
    public function getProductState()
    {
      return $this->ProductState;
    }

    /**
     * @param ProductStateCodeType $ProductState
     * @return \EbayWsdl\ProductInfoType
     */
    public function setProductState($ProductState)
    {
      $this->ProductState = $ProductState;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductInfoID()
    {
      return $this->productInfoID;
    }

    /**
     * @param string $productInfoID
     * @return \EbayWsdl\ProductInfoType
     */
    public function setProductInfoID($productInfoID)
    {
      $this->productInfoID = $productInfoID;
      return $this;
    }

}
