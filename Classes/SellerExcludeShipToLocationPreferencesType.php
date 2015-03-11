<?php

namespace EbayWsdl\Classes;

class SellerExcludeShipToLocationPreferencesType
{

    /**
     * @var string[] $ExcludeShipToLocation
     */
    protected $ExcludeShipToLocation = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string[] $ExcludeShipToLocation
     * @param string $any
     */
    public function __construct(array $ExcludeShipToLocation = null, $any = null)
    {
      $this->ExcludeShipToLocation = $ExcludeShipToLocation;
      $this->any = $any;
    }

    /**
     * @return string[]
     */
    public function getExcludeShipToLocation()
    {
      return $this->ExcludeShipToLocation;
    }

    /**
     * @param string[] $ExcludeShipToLocation
     * @return \EbayWsdl\Classes\SellerExcludeShipToLocationPreferencesType
     */
    public function setExcludeShipToLocation(array $ExcludeShipToLocation)
    {
      $this->ExcludeShipToLocation = $ExcludeShipToLocation;
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
     * @return \EbayWsdl\Classes\SellerExcludeShipToLocationPreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
