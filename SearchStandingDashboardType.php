<?php

namespace EbayWsdl;

class SearchStandingDashboardType
{

    /**
     * @var SearchStandingStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SearchStandingStatusCodeType $Status
     * @param string $any
     */
    public function __construct($Status = null, $any = null)
    {
      $this->Status = $Status;
      $this->any = $any;
    }

    /**
     * @return SearchStandingStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param SearchStandingStatusCodeType $Status
     * @return \EbayWsdl\SearchStandingDashboardType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \EbayWsdl\SearchStandingDashboardType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
