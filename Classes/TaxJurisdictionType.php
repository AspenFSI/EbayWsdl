<?php

namespace EbayWsdl\Classes;

class TaxJurisdictionType
{

    /**
     * @var string $JurisdictionID
     */
    protected $JurisdictionID = null;

    /**
     * @var float $SalesTaxPercent
     */
    protected $SalesTaxPercent = null;

    /**
     * @var boolean $ShippingIncludedInTax
     */
    protected $ShippingIncludedInTax = null;

    /**
     * @var string $JurisdictionName
     */
    protected $JurisdictionName = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $JurisdictionID
     * @param float $SalesTaxPercent
     * @param boolean $ShippingIncludedInTax
     * @param string $JurisdictionName
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($JurisdictionID = null, $SalesTaxPercent = null, $ShippingIncludedInTax = null, $JurisdictionName = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->JurisdictionID = $JurisdictionID;
      $this->SalesTaxPercent = $SalesTaxPercent;
      $this->ShippingIncludedInTax = $ShippingIncludedInTax;
      $this->JurisdictionName = $JurisdictionName;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getJurisdictionID()
    {
      return $this->JurisdictionID;
    }

    /**
     * @param string $JurisdictionID
     * @return \EbayWsdl\Classes\TaxJurisdictionType
     */
    public function setJurisdictionID($JurisdictionID)
    {
      $this->JurisdictionID = $JurisdictionID;
      return $this;
    }

    /**
     * @return float
     */
    public function getSalesTaxPercent()
    {
      return $this->SalesTaxPercent;
    }

    /**
     * @param float $SalesTaxPercent
     * @return \EbayWsdl\Classes\TaxJurisdictionType
     */
    public function setSalesTaxPercent($SalesTaxPercent)
    {
      $this->SalesTaxPercent = $SalesTaxPercent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShippingIncludedInTax()
    {
      return $this->ShippingIncludedInTax;
    }

    /**
     * @param boolean $ShippingIncludedInTax
     * @return \EbayWsdl\Classes\TaxJurisdictionType
     */
    public function setShippingIncludedInTax($ShippingIncludedInTax)
    {
      $this->ShippingIncludedInTax = $ShippingIncludedInTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getJurisdictionName()
    {
      return $this->JurisdictionName;
    }

    /**
     * @param string $JurisdictionName
     * @return \EbayWsdl\Classes\TaxJurisdictionType
     */
    public function setJurisdictionName($JurisdictionName)
    {
      $this->JurisdictionName = $JurisdictionName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailVersion()
    {
      return $this->DetailVersion;
    }

    /**
     * @param string $DetailVersion
     * @return \EbayWsdl\Classes\TaxJurisdictionType
     */
    public function setDetailVersion($DetailVersion)
    {
      $this->DetailVersion = $DetailVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\Classes\TaxJurisdictionType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\TaxJurisdictionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
