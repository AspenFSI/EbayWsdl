<?php

namespace EbayWsdl;

class DiscountProfileType
{

    /**
     * @var string $DiscountProfileID
     */
    protected $DiscountProfileID = null;

    /**
     * @var string $DiscountProfileName
     */
    protected $DiscountProfileName = null;

    /**
     * @var AmountType $EachAdditionalAmount
     */
    protected $EachAdditionalAmount = null;

    /**
     * @var AmountType $EachAdditionalAmountOff
     */
    protected $EachAdditionalAmountOff = null;

    /**
     * @var float $EachAdditionalPercentOff
     */
    protected $EachAdditionalPercentOff = null;

    /**
     * @var MeasureType $WeightOff
     */
    protected $WeightOff = null;

    /**
     * @var string $MappedDiscountProfileID
     */
    protected $MappedDiscountProfileID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $DiscountProfileID
     * @param string $DiscountProfileName
     * @param AmountType $EachAdditionalAmount
     * @param AmountType $EachAdditionalAmountOff
     * @param float $EachAdditionalPercentOff
     * @param MeasureType $WeightOff
     * @param string $MappedDiscountProfileID
     * @param string $any
     */
    public function __construct($DiscountProfileID = null, $DiscountProfileName = null, $EachAdditionalAmount = null, $EachAdditionalAmountOff = null, $EachAdditionalPercentOff = null, $WeightOff = null, $MappedDiscountProfileID = null, $any = null)
    {
      $this->DiscountProfileID = $DiscountProfileID;
      $this->DiscountProfileName = $DiscountProfileName;
      $this->EachAdditionalAmount = $EachAdditionalAmount;
      $this->EachAdditionalAmountOff = $EachAdditionalAmountOff;
      $this->EachAdditionalPercentOff = $EachAdditionalPercentOff;
      $this->WeightOff = $WeightOff;
      $this->MappedDiscountProfileID = $MappedDiscountProfileID;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getDiscountProfileID()
    {
      return $this->DiscountProfileID;
    }

    /**
     * @param string $DiscountProfileID
     * @return \EbayWsdl\DiscountProfileType
     */
    public function setDiscountProfileID($DiscountProfileID)
    {
      $this->DiscountProfileID = $DiscountProfileID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountProfileName()
    {
      return $this->DiscountProfileName;
    }

    /**
     * @param string $DiscountProfileName
     * @return \EbayWsdl\DiscountProfileType
     */
    public function setDiscountProfileName($DiscountProfileName)
    {
      $this->DiscountProfileName = $DiscountProfileName;
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
     * @return \EbayWsdl\DiscountProfileType
     */
    public function setEachAdditionalAmount($EachAdditionalAmount)
    {
      $this->EachAdditionalAmount = $EachAdditionalAmount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getEachAdditionalAmountOff()
    {
      return $this->EachAdditionalAmountOff;
    }

    /**
     * @param AmountType $EachAdditionalAmountOff
     * @return \EbayWsdl\DiscountProfileType
     */
    public function setEachAdditionalAmountOff($EachAdditionalAmountOff)
    {
      $this->EachAdditionalAmountOff = $EachAdditionalAmountOff;
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
     * @return \EbayWsdl\DiscountProfileType
     */
    public function setEachAdditionalPercentOff($EachAdditionalPercentOff)
    {
      $this->EachAdditionalPercentOff = $EachAdditionalPercentOff;
      return $this;
    }

    /**
     * @return MeasureType
     */
    public function getWeightOff()
    {
      return $this->WeightOff;
    }

    /**
     * @param MeasureType $WeightOff
     * @return \EbayWsdl\DiscountProfileType
     */
    public function setWeightOff($WeightOff)
    {
      $this->WeightOff = $WeightOff;
      return $this;
    }

    /**
     * @return string
     */
    public function getMappedDiscountProfileID()
    {
      return $this->MappedDiscountProfileID;
    }

    /**
     * @param string $MappedDiscountProfileID
     * @return \EbayWsdl\DiscountProfileType
     */
    public function setMappedDiscountProfileID($MappedDiscountProfileID)
    {
      $this->MappedDiscountProfileID = $MappedDiscountProfileID;
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
     * @return \EbayWsdl\DiscountProfileType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
