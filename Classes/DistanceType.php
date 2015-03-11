<?php

namespace EbayWsdl\Classes;

class DistanceType
{

    /**
     * @var int $DistanceMeasurement
     */
    protected $DistanceMeasurement = null;

    /**
     * @var string $DistanceUnit
     */
    protected $DistanceUnit = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $DistanceMeasurement
     * @param string $DistanceUnit
     * @param string $any
     */
    public function __construct($DistanceMeasurement = null, $DistanceUnit = null, $any = null)
    {
      $this->DistanceMeasurement = $DistanceMeasurement;
      $this->DistanceUnit = $DistanceUnit;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getDistanceMeasurement()
    {
      return $this->DistanceMeasurement;
    }

    /**
     * @param int $DistanceMeasurement
     * @return \EbayWsdl\Classes\DistanceType
     */
    public function setDistanceMeasurement($DistanceMeasurement)
    {
      $this->DistanceMeasurement = $DistanceMeasurement;
      return $this;
    }

    /**
     * @return string
     */
    public function getDistanceUnit()
    {
      return $this->DistanceUnit;
    }

    /**
     * @param string $DistanceUnit
     * @return \EbayWsdl\Classes\DistanceType
     */
    public function setDistanceUnit($DistanceUnit)
    {
      $this->DistanceUnit = $DistanceUnit;
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
     * @return \EbayWsdl\Classes\DistanceType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
