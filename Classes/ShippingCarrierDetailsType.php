<?php

namespace EbayWsdl\Classes;

class ShippingCarrierDetailsType
{

    /**
     * @var int $ShippingCarrierID
     */
    protected $ShippingCarrierID = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ShippingCarrierCodeType $ShippingCarrier
     */
    protected $ShippingCarrier = null;

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
     * @param int $ShippingCarrierID
     * @param string $Description
     * @param ShippingCarrierCodeType $ShippingCarrier
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($ShippingCarrierID = null, $Description = null, $ShippingCarrier = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->ShippingCarrierID = $ShippingCarrierID;
      $this->Description = $Description;
      $this->ShippingCarrier = $ShippingCarrier;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getShippingCarrierID()
    {
      return $this->ShippingCarrierID;
    }

    /**
     * @param int $ShippingCarrierID
     * @return \EbayWsdl\Classes\ShippingCarrierDetailsType
     */
    public function setShippingCarrierID($ShippingCarrierID)
    {
      $this->ShippingCarrierID = $ShippingCarrierID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\Classes\ShippingCarrierDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ShippingCarrierCodeType
     */
    public function getShippingCarrier()
    {
      return $this->ShippingCarrier;
    }

    /**
     * @param ShippingCarrierCodeType $ShippingCarrier
     * @return \EbayWsdl\Classes\ShippingCarrierDetailsType
     */
    public function setShippingCarrier($ShippingCarrier)
    {
      $this->ShippingCarrier = $ShippingCarrier;
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
     * @return \EbayWsdl\Classes\ShippingCarrierDetailsType
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
     * @return \EbayWsdl\Classes\ShippingCarrierDetailsType
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
     * @return \EbayWsdl\Classes\ShippingCarrierDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
