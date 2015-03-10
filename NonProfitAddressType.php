<?php

namespace EbayWsdl;

class NonProfitAddressType
{

    /**
     * @var string $AddressLine1
     */
    protected $AddressLine1 = null;

    /**
     * @var string $AddressLine2
     */
    protected $AddressLine2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var float $Latitude
     */
    protected $Latitude = null;

    /**
     * @var float $Longitude
     */
    protected $Longitude = null;

    /**
     * @var AddressTypeCodeType $AddressType
     */
    protected $AddressType = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $AddressLine1
     * @param string $AddressLine2
     * @param string $City
     * @param string $State
     * @param string $ZipCode
     * @param float $Latitude
     * @param float $Longitude
     * @param AddressTypeCodeType $AddressType
     * @param string $any
     */
    public function __construct($AddressLine1 = null, $AddressLine2 = null, $City = null, $State = null, $ZipCode = null, $Latitude = null, $Longitude = null, $AddressType = null, $any = null)
    {
      $this->AddressLine1 = $AddressLine1;
      $this->AddressLine2 = $AddressLine2;
      $this->City = $City;
      $this->State = $State;
      $this->ZipCode = $ZipCode;
      $this->Latitude = $Latitude;
      $this->Longitude = $Longitude;
      $this->AddressType = $AddressType;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
      return $this->AddressLine1;
    }

    /**
     * @param string $AddressLine1
     * @return \EbayWsdl\NonProfitAddressType
     */
    public function setAddressLine1($AddressLine1)
    {
      $this->AddressLine1 = $AddressLine1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2()
    {
      return $this->AddressLine2;
    }

    /**
     * @param string $AddressLine2
     * @return \EbayWsdl\NonProfitAddressType
     */
    public function setAddressLine2($AddressLine2)
    {
      $this->AddressLine2 = $AddressLine2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \EbayWsdl\NonProfitAddressType
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \EbayWsdl\NonProfitAddressType
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \EbayWsdl\NonProfitAddressType
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param float $Latitude
     * @return \EbayWsdl\NonProfitAddressType
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param float $Longitude
     * @return \EbayWsdl\NonProfitAddressType
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return AddressTypeCodeType
     */
    public function getAddressType()
    {
      return $this->AddressType;
    }

    /**
     * @param AddressTypeCodeType $AddressType
     * @return \EbayWsdl\NonProfitAddressType
     */
    public function setAddressType($AddressType)
    {
      $this->AddressType = $AddressType;
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
     * @return \EbayWsdl\NonProfitAddressType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
