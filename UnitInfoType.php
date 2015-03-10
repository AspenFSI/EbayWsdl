<?php

namespace EbayWsdl;

class UnitInfoType
{

    /**
     * @var string $UnitType
     */
    protected $UnitType = null;

    /**
     * @var float $UnitQuantity
     */
    protected $UnitQuantity = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $UnitType
     * @param float $UnitQuantity
     * @param string $any
     */
    public function __construct($UnitType = null, $UnitQuantity = null, $any = null)
    {
      $this->UnitType = $UnitType;
      $this->UnitQuantity = $UnitQuantity;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getUnitType()
    {
      return $this->UnitType;
    }

    /**
     * @param string $UnitType
     * @return \EbayWsdl\UnitInfoType
     */
    public function setUnitType($UnitType)
    {
      $this->UnitType = $UnitType;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitQuantity()
    {
      return $this->UnitQuantity;
    }

    /**
     * @param float $UnitQuantity
     * @return \EbayWsdl\UnitInfoType
     */
    public function setUnitQuantity($UnitQuantity)
    {
      $this->UnitQuantity = $UnitQuantity;
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
     * @return \EbayWsdl\UnitInfoType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
