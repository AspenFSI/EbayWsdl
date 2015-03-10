<?php

namespace EbayWsdl;

class InternationalShippingServiceOptionsType
{

    /**
     * @var string $ShippingService
     */
    protected $ShippingService = null;

    /**
     * @var AmountType $ShippingServiceCost
     */
    protected $ShippingServiceCost = null;

    /**
     * @var AmountType $ShippingServiceAdditionalCost
     */
    protected $ShippingServiceAdditionalCost = null;

    /**
     * @var int $ShippingServicePriority
     */
    protected $ShippingServicePriority = null;

    /**
     * @var string[] $ShipToLocation
     */
    protected $ShipToLocation = null;

    /**
     * @var AmountType $ShippingInsuranceCost
     */
    protected $ShippingInsuranceCost = null;

    /**
     * @var AmountType $ImportCharge
     */
    protected $ImportCharge = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ShippingService
     * @param AmountType $ShippingServiceCost
     * @param AmountType $ShippingServiceAdditionalCost
     * @param int $ShippingServicePriority
     * @param string[] $ShipToLocation
     * @param AmountType $ShippingInsuranceCost
     * @param AmountType $ImportCharge
     * @param string $any
     */
    public function __construct($ShippingService = null, $ShippingServiceCost = null, $ShippingServiceAdditionalCost = null, $ShippingServicePriority = null, array $ShipToLocation = null, $ShippingInsuranceCost = null, $ImportCharge = null, $any = null)
    {
      $this->ShippingService = $ShippingService;
      $this->ShippingServiceCost = $ShippingServiceCost;
      $this->ShippingServiceAdditionalCost = $ShippingServiceAdditionalCost;
      $this->ShippingServicePriority = $ShippingServicePriority;
      $this->ShipToLocation = $ShipToLocation;
      $this->ShippingInsuranceCost = $ShippingInsuranceCost;
      $this->ImportCharge = $ImportCharge;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getShippingService()
    {
      return $this->ShippingService;
    }

    /**
     * @param string $ShippingService
     * @return \EbayWsdl\InternationalShippingServiceOptionsType
     */
    public function setShippingService($ShippingService)
    {
      $this->ShippingService = $ShippingService;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getShippingServiceCost()
    {
      return $this->ShippingServiceCost;
    }

    /**
     * @param AmountType $ShippingServiceCost
     * @return \EbayWsdl\InternationalShippingServiceOptionsType
     */
    public function setShippingServiceCost($ShippingServiceCost)
    {
      $this->ShippingServiceCost = $ShippingServiceCost;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getShippingServiceAdditionalCost()
    {
      return $this->ShippingServiceAdditionalCost;
    }

    /**
     * @param AmountType $ShippingServiceAdditionalCost
     * @return \EbayWsdl\InternationalShippingServiceOptionsType
     */
    public function setShippingServiceAdditionalCost($ShippingServiceAdditionalCost)
    {
      $this->ShippingServiceAdditionalCost = $ShippingServiceAdditionalCost;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingServicePriority()
    {
      return $this->ShippingServicePriority;
    }

    /**
     * @param int $ShippingServicePriority
     * @return \EbayWsdl\InternationalShippingServiceOptionsType
     */
    public function setShippingServicePriority($ShippingServicePriority)
    {
      $this->ShippingServicePriority = $ShippingServicePriority;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getShipToLocation()
    {
      return $this->ShipToLocation;
    }

    /**
     * @param string[] $ShipToLocation
     * @return \EbayWsdl\InternationalShippingServiceOptionsType
     */
    public function setShipToLocation(array $ShipToLocation)
    {
      $this->ShipToLocation = $ShipToLocation;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getShippingInsuranceCost()
    {
      return $this->ShippingInsuranceCost;
    }

    /**
     * @param AmountType $ShippingInsuranceCost
     * @return \EbayWsdl\InternationalShippingServiceOptionsType
     */
    public function setShippingInsuranceCost($ShippingInsuranceCost)
    {
      $this->ShippingInsuranceCost = $ShippingInsuranceCost;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getImportCharge()
    {
      return $this->ImportCharge;
    }

    /**
     * @param AmountType $ImportCharge
     * @return \EbayWsdl\InternationalShippingServiceOptionsType
     */
    public function setImportCharge($ImportCharge)
    {
      $this->ImportCharge = $ImportCharge;
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
     * @return \EbayWsdl\InternationalShippingServiceOptionsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
