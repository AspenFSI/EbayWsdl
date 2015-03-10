<?php

namespace EbayWsdl;

class PerformanceDashboardType
{

    /**
     * @var SiteCodeType[] $Site
     */
    protected $Site = null;

    /**
     * @var PerformanceStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var SellerDashboardAlertType $Alert
     */
    protected $Alert = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SiteCodeType[] $Site
     * @param PerformanceStatusCodeType $Status
     * @param SellerDashboardAlertType $Alert
     * @param string $any
     */
    public function __construct(array $Site = null, $Status = null, $Alert = null, $any = null)
    {
      $this->Site = $Site;
      $this->Status = $Status;
      $this->Alert = $Alert;
      $this->any = $any;
    }

    /**
     * @return SiteCodeType[]
     */
    public function getSite()
    {
      return $this->Site;
    }

    /**
     * @param SiteCodeType[] $Site
     * @return \EbayWsdl\PerformanceDashboardType
     */
    public function setSite(array $Site)
    {
      $this->Site = $Site;
      return $this;
    }

    /**
     * @return PerformanceStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param PerformanceStatusCodeType $Status
     * @return \EbayWsdl\PerformanceDashboardType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return SellerDashboardAlertType
     */
    public function getAlert()
    {
      return $this->Alert;
    }

    /**
     * @param SellerDashboardAlertType $Alert
     * @return \EbayWsdl\PerformanceDashboardType
     */
    public function setAlert($Alert)
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
     * @return \EbayWsdl\PerformanceDashboardType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
