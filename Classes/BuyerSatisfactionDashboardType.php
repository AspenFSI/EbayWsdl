<?php

namespace EbayWsdl\Classes;

class BuyerSatisfactionDashboardType
{

    /**
     * @var BuyerSatisfactionStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var SellerDashboardAlertType[] $Alert
     */
    protected $Alert = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param BuyerSatisfactionStatusCodeType $Status
     * @param SellerDashboardAlertType[] $Alert
     * @param string $any
     */
    public function __construct($Status = null, array $Alert = null, $any = null)
    {
      $this->Status = $Status;
      $this->Alert = $Alert;
      $this->any = $any;
    }

    /**
     * @return BuyerSatisfactionStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param BuyerSatisfactionStatusCodeType $Status
     * @return \EbayWsdl\Classes\BuyerSatisfactionDashboardType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \EbayWsdl\Classes\BuyerSatisfactionDashboardType
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
     * @return \EbayWsdl\Classes\BuyerSatisfactionDashboardType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
