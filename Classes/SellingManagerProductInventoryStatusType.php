<?php

namespace EbayWsdl\Classes;

class SellingManagerProductInventoryStatusType
{

    /**
     * @var int $QuantityScheduled
     */
    protected $QuantityScheduled = null;

    /**
     * @var int $QuantityActive
     */
    protected $QuantityActive = null;

    /**
     * @var int $QuantitySold
     */
    protected $QuantitySold = null;

    /**
     * @var int $QuantityUnsold
     */
    protected $QuantityUnsold = null;

    /**
     * @var float $SuccessPercent
     */
    protected $SuccessPercent = null;

    /**
     * @var AmountType $AverageSellingPrice
     */
    protected $AverageSellingPrice = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $QuantityScheduled
     * @param int $QuantityActive
     * @param int $QuantitySold
     * @param int $QuantityUnsold
     * @param float $SuccessPercent
     * @param AmountType $AverageSellingPrice
     * @param string $any
     */
    public function __construct($QuantityScheduled = null, $QuantityActive = null, $QuantitySold = null, $QuantityUnsold = null, $SuccessPercent = null, $AverageSellingPrice = null, $any = null)
    {
      $this->QuantityScheduled = $QuantityScheduled;
      $this->QuantityActive = $QuantityActive;
      $this->QuantitySold = $QuantitySold;
      $this->QuantityUnsold = $QuantityUnsold;
      $this->SuccessPercent = $SuccessPercent;
      $this->AverageSellingPrice = $AverageSellingPrice;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getQuantityScheduled()
    {
      return $this->QuantityScheduled;
    }

    /**
     * @param int $QuantityScheduled
     * @return \EbayWsdl\Classes\SellingManagerProductInventoryStatusType
     */
    public function setQuantityScheduled($QuantityScheduled)
    {
      $this->QuantityScheduled = $QuantityScheduled;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityActive()
    {
      return $this->QuantityActive;
    }

    /**
     * @param int $QuantityActive
     * @return \EbayWsdl\Classes\SellingManagerProductInventoryStatusType
     */
    public function setQuantityActive($QuantityActive)
    {
      $this->QuantityActive = $QuantityActive;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantitySold()
    {
      return $this->QuantitySold;
    }

    /**
     * @param int $QuantitySold
     * @return \EbayWsdl\Classes\SellingManagerProductInventoryStatusType
     */
    public function setQuantitySold($QuantitySold)
    {
      $this->QuantitySold = $QuantitySold;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityUnsold()
    {
      return $this->QuantityUnsold;
    }

    /**
     * @param int $QuantityUnsold
     * @return \EbayWsdl\Classes\SellingManagerProductInventoryStatusType
     */
    public function setQuantityUnsold($QuantityUnsold)
    {
      $this->QuantityUnsold = $QuantityUnsold;
      return $this;
    }

    /**
     * @return float
     */
    public function getSuccessPercent()
    {
      return $this->SuccessPercent;
    }

    /**
     * @param float $SuccessPercent
     * @return \EbayWsdl\Classes\SellingManagerProductInventoryStatusType
     */
    public function setSuccessPercent($SuccessPercent)
    {
      $this->SuccessPercent = $SuccessPercent;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getAverageSellingPrice()
    {
      return $this->AverageSellingPrice;
    }

    /**
     * @param AmountType $AverageSellingPrice
     * @return \EbayWsdl\Classes\SellingManagerProductInventoryStatusType
     */
    public function setAverageSellingPrice($AverageSellingPrice)
    {
      $this->AverageSellingPrice = $AverageSellingPrice;
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
     * @return \EbayWsdl\Classes\SellingManagerProductInventoryStatusType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
