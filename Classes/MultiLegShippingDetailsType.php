<?php

namespace EbayWsdl\Classes;

class MultiLegShippingDetailsType
{

    /**
     * @var MultiLegShipmentType $SellerShipmentToLogisticsProvider
     */
    protected $SellerShipmentToLogisticsProvider = null;

    /**
     * @var MultiLegShipmentType $LogisticsProviderShipmentToBuyer
     */
    protected $LogisticsProviderShipmentToBuyer = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param MultiLegShipmentType $SellerShipmentToLogisticsProvider
     * @param MultiLegShipmentType $LogisticsProviderShipmentToBuyer
     * @param string $any
     */
    public function __construct($SellerShipmentToLogisticsProvider = null, $LogisticsProviderShipmentToBuyer = null, $any = null)
    {
      $this->SellerShipmentToLogisticsProvider = $SellerShipmentToLogisticsProvider;
      $this->LogisticsProviderShipmentToBuyer = $LogisticsProviderShipmentToBuyer;
      $this->any = $any;
    }

    /**
     * @return MultiLegShipmentType
     */
    public function getSellerShipmentToLogisticsProvider()
    {
      return $this->SellerShipmentToLogisticsProvider;
    }

    /**
     * @param MultiLegShipmentType $SellerShipmentToLogisticsProvider
     * @return \EbayWsdl\Classes\MultiLegShippingDetailsType
     */
    public function setSellerShipmentToLogisticsProvider($SellerShipmentToLogisticsProvider)
    {
      $this->SellerShipmentToLogisticsProvider = $SellerShipmentToLogisticsProvider;
      return $this;
    }

    /**
     * @return MultiLegShipmentType
     */
    public function getLogisticsProviderShipmentToBuyer()
    {
      return $this->LogisticsProviderShipmentToBuyer;
    }

    /**
     * @param MultiLegShipmentType $LogisticsProviderShipmentToBuyer
     * @return \EbayWsdl\Classes\MultiLegShippingDetailsType
     */
    public function setLogisticsProviderShipmentToBuyer($LogisticsProviderShipmentToBuyer)
    {
      $this->LogisticsProviderShipmentToBuyer = $LogisticsProviderShipmentToBuyer;
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
     * @return \EbayWsdl\Classes\MultiLegShippingDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
