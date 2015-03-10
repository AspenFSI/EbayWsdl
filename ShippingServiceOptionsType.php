<?php

namespace EbayWsdl;

class ShippingServiceOptionsType
{

    /**
     * @var AmountType $ShippingInsuranceCost
     */
    protected $ShippingInsuranceCost = null;

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
     * @var boolean $ExpeditedService
     */
    protected $ExpeditedService = null;

    /**
     * @var int $ShippingTimeMin
     */
    protected $ShippingTimeMin = null;

    /**
     * @var int $ShippingTimeMax
     */
    protected $ShippingTimeMax = null;

    /**
     * @var AmountType $ShippingSurcharge
     */
    protected $ShippingSurcharge = null;

    /**
     * @var boolean $FreeShipping
     */
    protected $FreeShipping = null;

    /**
     * @var boolean $LocalPickup
     */
    protected $LocalPickup = null;

    /**
     * @var AmountType $ImportCharge
     */
    protected $ImportCharge = null;

    /**
     * @var ShippingPackageInfoType[] $ShippingPackageInfo
     */
    protected $ShippingPackageInfo = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $ShippingInsuranceCost
     * @param string $ShippingService
     * @param AmountType $ShippingServiceCost
     * @param AmountType $ShippingServiceAdditionalCost
     * @param int $ShippingServicePriority
     * @param boolean $ExpeditedService
     * @param int $ShippingTimeMin
     * @param int $ShippingTimeMax
     * @param AmountType $ShippingSurcharge
     * @param boolean $FreeShipping
     * @param boolean $LocalPickup
     * @param AmountType $ImportCharge
     * @param ShippingPackageInfoType[] $ShippingPackageInfo
     * @param string $any
     */
    public function __construct($ShippingInsuranceCost = null, $ShippingService = null, $ShippingServiceCost = null, $ShippingServiceAdditionalCost = null, $ShippingServicePriority = null, $ExpeditedService = null, $ShippingTimeMin = null, $ShippingTimeMax = null, $ShippingSurcharge = null, $FreeShipping = null, $LocalPickup = null, $ImportCharge = null, array $ShippingPackageInfo = null, $any = null)
    {
      $this->ShippingInsuranceCost = $ShippingInsuranceCost;
      $this->ShippingService = $ShippingService;
      $this->ShippingServiceCost = $ShippingServiceCost;
      $this->ShippingServiceAdditionalCost = $ShippingServiceAdditionalCost;
      $this->ShippingServicePriority = $ShippingServicePriority;
      $this->ExpeditedService = $ExpeditedService;
      $this->ShippingTimeMin = $ShippingTimeMin;
      $this->ShippingTimeMax = $ShippingTimeMax;
      $this->ShippingSurcharge = $ShippingSurcharge;
      $this->FreeShipping = $FreeShipping;
      $this->LocalPickup = $LocalPickup;
      $this->ImportCharge = $ImportCharge;
      $this->ShippingPackageInfo = $ShippingPackageInfo;
      $this->any = $any;
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
     * @return \EbayWsdl\ShippingServiceOptionsType
     */
    public function setShippingInsuranceCost($ShippingInsuranceCost)
    {
      $this->ShippingInsuranceCost = $ShippingInsuranceCost;
      return $this;
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
     * @return \EbayWsdl\ShippingServiceOptionsType
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
     * @return \EbayWsdl\ShippingServiceOptionsType
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
     * @return \EbayWsdl\ShippingServiceOptionsType
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
     * @return \EbayWsdl\ShippingServiceOptionsType
     */
    public function setShippingServicePriority($ShippingServicePriority)
    {
      $this->ShippingServicePriority = $ShippingServicePriority;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpeditedService()
    {
      return $this->ExpeditedService;
    }

    /**
     * @param boolean $ExpeditedService
     * @return \EbayWsdl\ShippingServiceOptionsType
     */
    public function setExpeditedService($ExpeditedService)
    {
      $this->ExpeditedService = $ExpeditedService;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingTimeMin()
    {
      return $this->ShippingTimeMin;
    }

    /**
     * @param int $ShippingTimeMin
     * @return \EbayWsdl\ShippingServiceOptionsType
     */
    public function setShippingTimeMin($ShippingTimeMin)
    {
      $this->ShippingTimeMin = $ShippingTimeMin;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingTimeMax()
    {
      return $this->ShippingTimeMax;
    }

    /**
     * @param int $ShippingTimeMax
     * @return \EbayWsdl\ShippingServiceOptionsType
     */
    public function setShippingTimeMax($ShippingTimeMax)
    {
      $this->ShippingTimeMax = $ShippingTimeMax;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getShippingSurcharge()
    {
      return $this->ShippingSurcharge;
    }

    /**
     * @param AmountType $ShippingSurcharge
     * @return \EbayWsdl\ShippingServiceOptionsType
     */
    public function setShippingSurcharge($ShippingSurcharge)
    {
      $this->ShippingSurcharge = $ShippingSurcharge;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFreeShipping()
    {
      return $this->FreeShipping;
    }

    /**
     * @param boolean $FreeShipping
     * @return \EbayWsdl\ShippingServiceOptionsType
     */
    public function setFreeShipping($FreeShipping)
    {
      $this->FreeShipping = $FreeShipping;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalPickup()
    {
      return $this->LocalPickup;
    }

    /**
     * @param boolean $LocalPickup
     * @return \EbayWsdl\ShippingServiceOptionsType
     */
    public function setLocalPickup($LocalPickup)
    {
      $this->LocalPickup = $LocalPickup;
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
     * @return \EbayWsdl\ShippingServiceOptionsType
     */
    public function setImportCharge($ImportCharge)
    {
      $this->ImportCharge = $ImportCharge;
      return $this;
    }

    /**
     * @return ShippingPackageInfoType[]
     */
    public function getShippingPackageInfo()
    {
      return $this->ShippingPackageInfo;
    }

    /**
     * @param ShippingPackageInfoType[] $ShippingPackageInfo
     * @return \EbayWsdl\ShippingServiceOptionsType
     */
    public function setShippingPackageInfo(array $ShippingPackageInfo)
    {
      $this->ShippingPackageInfo = $ShippingPackageInfo;
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
     * @return \EbayWsdl\ShippingServiceOptionsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
