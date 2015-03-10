<?php

namespace EbayWsdl;

class UnitOfMeasurementDetailsType
{

    /**
     * @var UnitOfMeasurementType[] $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param UnitOfMeasurementType[] $UnitOfMeasurement
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct(array $UnitOfMeasurement = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return UnitOfMeasurementType[]
     */
    public function getUnitOfMeasurement()
    {
      return $this->UnitOfMeasurement;
    }

    /**
     * @param UnitOfMeasurementType[] $UnitOfMeasurement
     * @return \EbayWsdl\UnitOfMeasurementDetailsType
     */
    public function setUnitOfMeasurement(array $UnitOfMeasurement)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailVersion()
    {
      return $this->DetailVersion;
    }

    /**
     * @param string $DetailVersion
     * @return \EbayWsdl\UnitOfMeasurementDetailsType
     */
    public function setDetailVersion($DetailVersion)
    {
      $this->DetailVersion = $DetailVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\UnitOfMeasurementDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\UnitOfMeasurementDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
