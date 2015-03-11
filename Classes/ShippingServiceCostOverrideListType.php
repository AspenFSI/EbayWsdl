<?php

namespace EbayWsdl\Classes;

class ShippingServiceCostOverrideListType
{

    /**
     * @var ShippingServiceCostOverrideType[] $ShippingServiceCostOverride
     */
    protected $ShippingServiceCostOverride = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ShippingServiceCostOverrideType[] $ShippingServiceCostOverride
     * @param string $any
     */
    public function __construct(array $ShippingServiceCostOverride = null, $any = null)
    {
      $this->ShippingServiceCostOverride = $ShippingServiceCostOverride;
      $this->any = $any;
    }

    /**
     * @return ShippingServiceCostOverrideType[]
     */
    public function getShippingServiceCostOverride()
    {
      return $this->ShippingServiceCostOverride;
    }

    /**
     * @param ShippingServiceCostOverrideType[] $ShippingServiceCostOverride
     * @return \EbayWsdl\Classes\ShippingServiceCostOverrideListType
     */
    public function setShippingServiceCostOverride(array $ShippingServiceCostOverride)
    {
      $this->ShippingServiceCostOverride = $ShippingServiceCostOverride;
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
     * @return \EbayWsdl\Classes\ShippingServiceCostOverrideListType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
