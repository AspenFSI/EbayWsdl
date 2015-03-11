<?php

namespace EbayWsdl\Classes;

class VATDetailsType
{

    /**
     * @var boolean $BusinessSeller
     */
    protected $BusinessSeller = null;

    /**
     * @var boolean $RestrictedToBusiness
     */
    protected $RestrictedToBusiness = null;

    /**
     * @var float $VATPercent
     */
    protected $VATPercent = null;

    /**
     * @var string $VATSite
     */
    protected $VATSite = null;

    /**
     * @var string $VATID
     */
    protected $VATID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $BusinessSeller
     * @param boolean $RestrictedToBusiness
     * @param float $VATPercent
     * @param string $VATSite
     * @param string $VATID
     * @param string $any
     */
    public function __construct($BusinessSeller = null, $RestrictedToBusiness = null, $VATPercent = null, $VATSite = null, $VATID = null, $any = null)
    {
      $this->BusinessSeller = $BusinessSeller;
      $this->RestrictedToBusiness = $RestrictedToBusiness;
      $this->VATPercent = $VATPercent;
      $this->VATSite = $VATSite;
      $this->VATID = $VATID;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getBusinessSeller()
    {
      return $this->BusinessSeller;
    }

    /**
     * @param boolean $BusinessSeller
     * @return \EbayWsdl\Classes\VATDetailsType
     */
    public function setBusinessSeller($BusinessSeller)
    {
      $this->BusinessSeller = $BusinessSeller;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictedToBusiness()
    {
      return $this->RestrictedToBusiness;
    }

    /**
     * @param boolean $RestrictedToBusiness
     * @return \EbayWsdl\Classes\VATDetailsType
     */
    public function setRestrictedToBusiness($RestrictedToBusiness)
    {
      $this->RestrictedToBusiness = $RestrictedToBusiness;
      return $this;
    }

    /**
     * @return float
     */
    public function getVATPercent()
    {
      return $this->VATPercent;
    }

    /**
     * @param float $VATPercent
     * @return \EbayWsdl\Classes\VATDetailsType
     */
    public function setVATPercent($VATPercent)
    {
      $this->VATPercent = $VATPercent;
      return $this;
    }

    /**
     * @return string
     */
    public function getVATSite()
    {
      return $this->VATSite;
    }

    /**
     * @param string $VATSite
     * @return \EbayWsdl\Classes\VATDetailsType
     */
    public function setVATSite($VATSite)
    {
      $this->VATSite = $VATSite;
      return $this;
    }

    /**
     * @return string
     */
    public function getVATID()
    {
      return $this->VATID;
    }

    /**
     * @param string $VATID
     * @return \EbayWsdl\Classes\VATDetailsType
     */
    public function setVATID($VATID)
    {
      $this->VATID = $VATID;
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
     * @return \EbayWsdl\Classes\VATDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
