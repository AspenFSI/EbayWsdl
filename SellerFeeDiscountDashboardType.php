<?php

namespace EbayWsdl;

class SellerFeeDiscountDashboardType
{

    /**
     * @var float $Percent
     */
    protected $Percent = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param float $Percent
     * @param string $any
     */
    public function __construct($Percent = null, $any = null)
    {
      $this->Percent = $Percent;
      $this->any = $any;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param float $Percent
     * @return \EbayWsdl\SellerFeeDiscountDashboardType
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
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
     * @return \EbayWsdl\SellerFeeDiscountDashboardType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
