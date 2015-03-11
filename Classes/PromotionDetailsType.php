<?php

namespace EbayWsdl\Classes;

class PromotionDetailsType
{

    /**
     * @var AmountType $PromotionPrice
     */
    protected $PromotionPrice = null;

    /**
     * @var PromotionItemPriceTypeCodeType $PromotionPriceType
     */
    protected $PromotionPriceType = null;

    /**
     * @var int $BidCount
     */
    protected $BidCount = null;

    /**
     * @var AmountType $ConvertedPromotionPrice
     */
    protected $ConvertedPromotionPrice = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $PromotionPrice
     * @param PromotionItemPriceTypeCodeType $PromotionPriceType
     * @param int $BidCount
     * @param AmountType $ConvertedPromotionPrice
     * @param string $any
     */
    public function __construct($PromotionPrice = null, $PromotionPriceType = null, $BidCount = null, $ConvertedPromotionPrice = null, $any = null)
    {
      $this->PromotionPrice = $PromotionPrice;
      $this->PromotionPriceType = $PromotionPriceType;
      $this->BidCount = $BidCount;
      $this->ConvertedPromotionPrice = $ConvertedPromotionPrice;
      $this->any = $any;
    }

    /**
     * @return AmountType
     */
    public function getPromotionPrice()
    {
      return $this->PromotionPrice;
    }

    /**
     * @param AmountType $PromotionPrice
     * @return \EbayWsdl\Classes\PromotionDetailsType
     */
    public function setPromotionPrice($PromotionPrice)
    {
      $this->PromotionPrice = $PromotionPrice;
      return $this;
    }

    /**
     * @return PromotionItemPriceTypeCodeType
     */
    public function getPromotionPriceType()
    {
      return $this->PromotionPriceType;
    }

    /**
     * @param PromotionItemPriceTypeCodeType $PromotionPriceType
     * @return \EbayWsdl\Classes\PromotionDetailsType
     */
    public function setPromotionPriceType($PromotionPriceType)
    {
      $this->PromotionPriceType = $PromotionPriceType;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidCount()
    {
      return $this->BidCount;
    }

    /**
     * @param int $BidCount
     * @return \EbayWsdl\Classes\PromotionDetailsType
     */
    public function setBidCount($BidCount)
    {
      $this->BidCount = $BidCount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getConvertedPromotionPrice()
    {
      return $this->ConvertedPromotionPrice;
    }

    /**
     * @param AmountType $ConvertedPromotionPrice
     * @return \EbayWsdl\Classes\PromotionDetailsType
     */
    public function setConvertedPromotionPrice($ConvertedPromotionPrice)
    {
      $this->ConvertedPromotionPrice = $ConvertedPromotionPrice;
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
     * @return \EbayWsdl\Classes\PromotionDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
