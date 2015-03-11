<?php

namespace EbayWsdl\Classes;

class CalculatedHandlingDiscountType
{

    /**
     * @var HandlingNameCodeType $DiscountName
     */
    protected $DiscountName = null;

    /**
     * @var AmountType $OrderHandlingAmount
     */
    protected $OrderHandlingAmount = null;

    /**
     * @var AmountType $EachAdditionalAmount
     */
    protected $EachAdditionalAmount = null;

    /**
     * @var AmountType $EachAdditionalOffAmount
     */
    protected $EachAdditionalOffAmount = null;

    /**
     * @var float $EachAdditionalPercentOff
     */
    protected $EachAdditionalPercentOff = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param HandlingNameCodeType $DiscountName
     * @param AmountType $OrderHandlingAmount
     * @param AmountType $EachAdditionalAmount
     * @param AmountType $EachAdditionalOffAmount
     * @param float $EachAdditionalPercentOff
     * @param string $any
     */
    public function __construct($DiscountName = null, $OrderHandlingAmount = null, $EachAdditionalAmount = null, $EachAdditionalOffAmount = null, $EachAdditionalPercentOff = null, $any = null)
    {
      $this->DiscountName = $DiscountName;
      $this->OrderHandlingAmount = $OrderHandlingAmount;
      $this->EachAdditionalAmount = $EachAdditionalAmount;
      $this->EachAdditionalOffAmount = $EachAdditionalOffAmount;
      $this->EachAdditionalPercentOff = $EachAdditionalPercentOff;
      $this->any = $any;
    }

    /**
     * @return HandlingNameCodeType
     */
    public function getDiscountName()
    {
      return $this->DiscountName;
    }

    /**
     * @param HandlingNameCodeType $DiscountName
     * @return \EbayWsdl\Classes\CalculatedHandlingDiscountType
     */
    public function setDiscountName($DiscountName)
    {
      $this->DiscountName = $DiscountName;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getOrderHandlingAmount()
    {
      return $this->OrderHandlingAmount;
    }

    /**
     * @param AmountType $OrderHandlingAmount
     * @return \EbayWsdl\Classes\CalculatedHandlingDiscountType
     */
    public function setOrderHandlingAmount($OrderHandlingAmount)
    {
      $this->OrderHandlingAmount = $OrderHandlingAmount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getEachAdditionalAmount()
    {
      return $this->EachAdditionalAmount;
    }

    /**
     * @param AmountType $EachAdditionalAmount
     * @return \EbayWsdl\Classes\CalculatedHandlingDiscountType
     */
    public function setEachAdditionalAmount($EachAdditionalAmount)
    {
      $this->EachAdditionalAmount = $EachAdditionalAmount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getEachAdditionalOffAmount()
    {
      return $this->EachAdditionalOffAmount;
    }

    /**
     * @param AmountType $EachAdditionalOffAmount
     * @return \EbayWsdl\Classes\CalculatedHandlingDiscountType
     */
    public function setEachAdditionalOffAmount($EachAdditionalOffAmount)
    {
      $this->EachAdditionalOffAmount = $EachAdditionalOffAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getEachAdditionalPercentOff()
    {
      return $this->EachAdditionalPercentOff;
    }

    /**
     * @param float $EachAdditionalPercentOff
     * @return \EbayWsdl\Classes\CalculatedHandlingDiscountType
     */
    public function setEachAdditionalPercentOff($EachAdditionalPercentOff)
    {
      $this->EachAdditionalPercentOff = $EachAdditionalPercentOff;
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
     * @return \EbayWsdl\Classes\CalculatedHandlingDiscountType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
