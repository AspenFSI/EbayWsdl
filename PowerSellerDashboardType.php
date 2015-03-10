<?php

namespace EbayWsdl;

class PowerSellerDashboardType
{

    /**
     * @var SellerLevelCodeType $Level
     */
    protected $Level = null;

    /**
     * @var SellerDashboardAlertType[] $Alert
     */
    protected $Alert = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SellerLevelCodeType $Level
     * @param SellerDashboardAlertType[] $Alert
     * @param string $any
     */
    public function __construct($Level = null, array $Alert = null, $any = null)
    {
      $this->Level = $Level;
      $this->Alert = $Alert;
      $this->any = $any;
    }

    /**
     * @return SellerLevelCodeType
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param SellerLevelCodeType $Level
     * @return \EbayWsdl\PowerSellerDashboardType
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return SellerDashboardAlertType[]
     */
    public function getAlert()
    {
      return $this->Alert;
    }

    /**
     * @param SellerDashboardAlertType[] $Alert
     * @return \EbayWsdl\PowerSellerDashboardType
     */
    public function setAlert(array $Alert)
    {
      $this->Alert = $Alert;
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
     * @return \EbayWsdl\PowerSellerDashboardType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
