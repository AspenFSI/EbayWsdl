<?php

namespace EbayWsdl;

class ShippingServiceCostOverrideType
{

    /**
     * @var int $ShippingServicePriority
     */
    protected $ShippingServicePriority = null;

    /**
     * @var ShippingServiceType $ShippingServiceType
     */
    protected $ShippingServiceType = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var AmountType $ShippingServiceCost
     */
    protected $ShippingServiceCost = null;

    /**
     * @var AmountType $ShippingServiceAdditionalCost
     */
    protected $ShippingServiceAdditionalCost = null;

    /**
     * @var AmountType $ShippingSurcharge
     */
    protected $ShippingSurcharge = null;

    /**
     * @param int $ShippingServicePriority
     * @param ShippingServiceType $ShippingServiceType
     * @param string $any
     * @param AmountType $ShippingServiceCost
     * @param AmountType $ShippingServiceAdditionalCost
     * @param AmountType $ShippingSurcharge
     */
    public function __construct($ShippingServicePriority = null, $ShippingServiceType = null, $any = null, $ShippingServiceCost = null, $ShippingServiceAdditionalCost = null, $ShippingSurcharge = null)
    {
      $this->ShippingServicePriority = $ShippingServicePriority;
      $this->ShippingServiceType = $ShippingServiceType;
      $this->any = $any;
      $this->ShippingServiceCost = $ShippingServiceCost;
      $this->ShippingServiceAdditionalCost = $ShippingServiceAdditionalCost;
      $this->ShippingSurcharge = $ShippingSurcharge;
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
     * @return \EbayWsdl\ShippingServiceCostOverrideType
     */
    public function setShippingServicePriority($ShippingServicePriority)
    {
      $this->ShippingServicePriority = $ShippingServicePriority;
      return $this;
    }

    /**
     * @return ShippingServiceType
     */
    public function getShippingServiceType()
    {
      return $this->ShippingServiceType;
    }

    /**
     * @param ShippingServiceType $ShippingServiceType
     * @return \EbayWsdl\ShippingServiceCostOverrideType
     */
    public function setShippingServiceType($ShippingServiceType)
    {
      $this->ShippingServiceType = $ShippingServiceType;
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
     * @return \EbayWsdl\ShippingServiceCostOverrideType
     */
    public function setAny($any)
    {
      $this->any = $any;
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
     * @return \EbayWsdl\ShippingServiceCostOverrideType
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
     * @return \EbayWsdl\ShippingServiceCostOverrideType
     */
    public function setShippingServiceAdditionalCost($ShippingServiceAdditionalCost)
    {
      $this->ShippingServiceAdditionalCost = $ShippingServiceAdditionalCost;
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
     * @return \EbayWsdl\ShippingServiceCostOverrideType
     */
    public function setShippingSurcharge($ShippingSurcharge)
    {
      $this->ShippingSurcharge = $ShippingSurcharge;
      return $this;
    }

}
