<?php

namespace EbayWsdl;

class MultiLegShippingServiceType
{

    /**
     * @var string $ShippingService
     */
    protected $ShippingService = null;

    /**
     * @var AmountType $TotalShippingCost
     */
    protected $TotalShippingCost = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ShippingService
     * @param AmountType $TotalShippingCost
     * @param string $any
     */
    public function __construct($ShippingService = null, $TotalShippingCost = null, $any = null)
    {
      $this->ShippingService = $ShippingService;
      $this->TotalShippingCost = $TotalShippingCost;
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
     * @return \EbayWsdl\MultiLegShippingServiceType
     */
    public function setShippingService($ShippingService)
    {
      $this->ShippingService = $ShippingService;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalShippingCost()
    {
      return $this->TotalShippingCost;
    }

    /**
     * @param AmountType $TotalShippingCost
     * @return \EbayWsdl\MultiLegShippingServiceType
     */
    public function setTotalShippingCost($TotalShippingCost)
    {
      $this->TotalShippingCost = $TotalShippingCost;
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
     * @return \EbayWsdl\MultiLegShippingServiceType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
