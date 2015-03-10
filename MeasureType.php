<?php

namespace EbayWsdl;

class MeasureType
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
     * @var MeasurementSystemCodeType $measurementSystem
     */
    protected $measurementSystem = null;

    /**
     * @param float $_
     * @param string $unit
     * @param MeasurementSystemCodeType $measurementSystem
     */
    public function __construct($_ = null, $unit = null, $measurementSystem = null)
    {
      $this->_ = $_;
      $this->unit = $unit;
      $this->measurementSystem = $measurementSystem;
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
     * @return \EbayWsdl\MeasureType
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
     * @return \EbayWsdl\MeasureType
     */
    public function setUnit($unit)
    {
      $this->unit = $unit;
      return $this;
    }

    /**
     * @return MeasurementSystemCodeType
     */
    public function getMeasurementSystem()
    {
      return $this->measurementSystem;
    }

    /**
     * @param MeasurementSystemCodeType $measurementSystem
     * @return \EbayWsdl\MeasureType
     */
    public function setMeasurementSystem($measurementSystem)
    {
      $this->measurementSystem = $measurementSystem;
      return $this;
    }

}
