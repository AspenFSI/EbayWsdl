<?php

namespace EbayWsdl;

class QuantityType
{

    /**
     * @var float $_
     */
    protected $_ = null;

    /**
     * @var string $unit
     */
    protected $unit = null;

    /**
     * @param float $_
     * @param string $unit
     */
    public function __construct($_ = null, $unit = null)
    {
      $this->_ = $_;
      $this->unit = $unit;
    }

    /**
     * @return float
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param float $_
     * @return \EbayWsdl\QuantityType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
      return $this->unit;
    }

    /**
     * @param string $unit
     * @return \EbayWsdl\QuantityType
     */
    public function setUnit($unit)
    {
      $this->unit = $unit;
      return $this;
    }

}
