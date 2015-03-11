<?php

namespace EbayWsdl\Classes;

class SellerDashboardAlertType
{

    /**
     * @var SellerDashboardAlertSeverityCodeType $Severity
     */
    protected $Severity = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SellerDashboardAlertSeverityCodeType $Severity
     * @param string $Text
     * @param string $any
     */
    public function __construct($Severity = null, $Text = null, $any = null)
    {
      $this->Severity = $Severity;
      $this->Text = $Text;
      $this->any = $any;
    }

    /**
     * @return SellerDashboardAlertSeverityCodeType
     */
    public function getSeverity()
    {
      return $this->Severity;
    }

    /**
     * @param SellerDashboardAlertSeverityCodeType $Severity
     * @return \EbayWsdl\Classes\SellerDashboardAlertType
     */
    public function setSeverity($Severity)
    {
      $this->Severity = $Severity;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \EbayWsdl\Classes\SellerDashboardAlertType
     */
    public function setText($Text)
    {
      $this->Text = $Text;
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
     * @return \EbayWsdl\Classes\SellerDashboardAlertType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
