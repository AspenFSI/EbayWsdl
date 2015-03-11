<?php

namespace EbayWsdl\Classes;

class AddressType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $Street1
     */
    protected $Street1 = null;

    /**
     * @var string $Street2
     */
    protected $Street2 = null;

    /**
     * @var string $CityName
     */
    protected $CityName = null;

    /**
     * @var string $County
     */
    protected $County = null;

    /**
     * @var string $StateOrProvince
     */
    protected $StateOrProvince = null;

    /**
     * @var CountryCodeType $Country
     */
    protected $Country = null;

    /**
     * @var string $CountryName
     */
    protected $CountryName = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var CountryCodeType $PhoneCountryCode
     */
    protected $PhoneCountryCode = null;

    /**
     * @var string $PhoneCountryPrefix
     */
    protected $PhoneCountryPrefix = null;

    /**
     * @var string $PhoneAreaOrCityCode
     */
    protected $PhoneAreaOrCityCode = null;

    /**
     * @var string $PhoneLocalNumber
     */
    protected $PhoneLocalNumber = null;

    /**
     * @var CountryCodeType $Phone2CountryCode
     */
    protected $Phone2CountryCode = null;

    /**
     * @var string $Phone2CountryPrefix
     */
    protected $Phone2CountryPrefix = null;

    /**
     * @var string $Phone2AreaOrCityCode
     */
    protected $Phone2AreaOrCityCode = null;

    /**
     * @var string $Phone2LocalNumber
     */
    protected $Phone2LocalNumber = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $AddressID
     */
    protected $AddressID = null;

    /**
     * @var AddressOwnerCodeType $AddressOwner
     */
    protected $AddressOwner = null;

    /**
     * @var AddressStatusCodeType $AddressStatus
     */
    protected $AddressStatus = null;

    /**
     * @var string $ExternalAddressID
     */
    protected $ExternalAddressID = null;

    /**
     * @var string $InternationalName
     */
    protected $InternationalName = null;

    /**
     * @var string $InternationalStateAndCity
     */
    protected $InternationalStateAndCity = null;

    /**
     * @var string $InternationalStreet
     */
    protected $InternationalStreet = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var AddressRecordTypeCodeType $AddressRecordType
     */
    protected $AddressRecordType = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Phone2
     */
    protected $Phone2 = null;

    /**
     * @var AddressUsageCodeType $AddressUsage
     */
    protected $AddressUsage = null;

    /**
     * @var string $ReferenceID
     */
    protected $ReferenceID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Name
     * @param string $Street
     * @param string $Street1
     * @param string $Street2
     * @param string $CityName
     * @param string $County
     * @param string $StateOrProvince
     * @param CountryCodeType $Country
     * @param string $CountryName
     * @param string $Phone
     * @param CountryCodeType $PhoneCountryCode
     * @param string $PhoneCountryPrefix
     * @param string $PhoneAreaOrCityCode
     * @param string $PhoneLocalNumber
     * @param CountryCodeType $Phone2CountryCode
     * @param string $Phone2CountryPrefix
     * @param string $Phone2AreaOrCityCode
     * @param string $Phone2LocalNumber
     * @param string $PostalCode
     * @param string $AddressID
     * @param AddressOwnerCodeType $AddressOwner
     * @param AddressStatusCodeType $AddressStatus
     * @param string $ExternalAddressID
     * @param string $InternationalName
     * @param string $InternationalStateAndCity
     * @param string $InternationalStreet
     * @param string $CompanyName
     * @param AddressRecordTypeCodeType $AddressRecordType
     * @param string $FirstName
     * @param string $LastName
     * @param string $Phone2
     * @param AddressUsageCodeType $AddressUsage
     * @param string $ReferenceID
     * @param string $any
     */
    public function __construct($Name = null, $Street = null, $Street1 = null, $Street2 = null, $CityName = null, $County = null, $StateOrProvince = null, $Country = null, $CountryName = null, $Phone = null, $PhoneCountryCode = null, $PhoneCountryPrefix = null, $PhoneAreaOrCityCode = null, $PhoneLocalNumber = null, $Phone2CountryCode = null, $Phone2CountryPrefix = null, $Phone2AreaOrCityCode = null, $Phone2LocalNumber = null, $PostalCode = null, $AddressID = null, $AddressOwner = null, $AddressStatus = null, $ExternalAddressID = null, $InternationalName = null, $InternationalStateAndCity = null, $InternationalStreet = null, $CompanyName = null, $AddressRecordType = null, $FirstName = null, $LastName = null, $Phone2 = null, $AddressUsage = null, $ReferenceID = null, $any = null)
    {
      $this->Name = $Name;
      $this->Street = $Street;
      $this->Street1 = $Street1;
      $this->Street2 = $Street2;
      $this->CityName = $CityName;
      $this->County = $County;
      $this->StateOrProvince = $StateOrProvince;
      $this->Country = $Country;
      $this->CountryName = $CountryName;
      $this->Phone = $Phone;
      $this->PhoneCountryCode = $PhoneCountryCode;
      $this->PhoneCountryPrefix = $PhoneCountryPrefix;
      $this->PhoneAreaOrCityCode = $PhoneAreaOrCityCode;
      $this->PhoneLocalNumber = $PhoneLocalNumber;
      $this->Phone2CountryCode = $Phone2CountryCode;
      $this->Phone2CountryPrefix = $Phone2CountryPrefix;
      $this->Phone2AreaOrCityCode = $Phone2AreaOrCityCode;
      $this->Phone2LocalNumber = $Phone2LocalNumber;
      $this->PostalCode = $PostalCode;
      $this->AddressID = $AddressID;
      $this->AddressOwner = $AddressOwner;
      $this->AddressStatus = $AddressStatus;
      $this->ExternalAddressID = $ExternalAddressID;
      $this->InternationalName = $InternationalName;
      $this->InternationalStateAndCity = $InternationalStateAndCity;
      $this->InternationalStreet = $InternationalStreet;
      $this->CompanyName = $CompanyName;
      $this->AddressRecordType = $AddressRecordType;
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->Phone2 = $Phone2;
      $this->AddressUsage = $AddressUsage;
      $this->ReferenceID = $ReferenceID;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param string $Street
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet1()
    {
      return $this->Street1;
    }

    /**
     * @param string $Street1
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setStreet1($Street1)
    {
      $this->Street1 = $Street1;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
      return $this->Street2;
    }

    /**
     * @param string $Street2
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setStreet2($Street2)
    {
      $this->Street2 = $Street2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
      return $this->CityName;
    }

    /**
     * @param string $CityName
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setCityName($CityName)
    {
      $this->CityName = $CityName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
      return $this->County;
    }

    /**
     * @param string $County
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setCounty($County)
    {
      $this->County = $County;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateOrProvince()
    {
      return $this->StateOrProvince;
    }

    /**
     * @param string $StateOrProvince
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setStateOrProvince($StateOrProvince)
    {
      $this->StateOrProvince = $StateOrProvince;
      return $this;
    }

    /**
     * @return CountryCodeType
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param CountryCodeType $Country
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
      return $this->CountryName;
    }

    /**
     * @param string $CountryName
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setCountryName($CountryName)
    {
      $this->CountryName = $CountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return CountryCodeType
     */
    public function getPhoneCountryCode()
    {
      return $this->PhoneCountryCode;
    }

    /**
     * @param CountryCodeType $PhoneCountryCode
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setPhoneCountryCode($PhoneCountryCode)
    {
      $this->PhoneCountryCode = $PhoneCountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneCountryPrefix()
    {
      return $this->PhoneCountryPrefix;
    }

    /**
     * @param string $PhoneCountryPrefix
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setPhoneCountryPrefix($PhoneCountryPrefix)
    {
      $this->PhoneCountryPrefix = $PhoneCountryPrefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneAreaOrCityCode()
    {
      return $this->PhoneAreaOrCityCode;
    }

    /**
     * @param string $PhoneAreaOrCityCode
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setPhoneAreaOrCityCode($PhoneAreaOrCityCode)
    {
      $this->PhoneAreaOrCityCode = $PhoneAreaOrCityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneLocalNumber()
    {
      return $this->PhoneLocalNumber;
    }

    /**
     * @param string $PhoneLocalNumber
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setPhoneLocalNumber($PhoneLocalNumber)
    {
      $this->PhoneLocalNumber = $PhoneLocalNumber;
      return $this;
    }

    /**
     * @return CountryCodeType
     */
    public function getPhone2CountryCode()
    {
      return $this->Phone2CountryCode;
    }

    /**
     * @param CountryCodeType $Phone2CountryCode
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setPhone2CountryCode($Phone2CountryCode)
    {
      $this->Phone2CountryCode = $Phone2CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone2CountryPrefix()
    {
      return $this->Phone2CountryPrefix;
    }

    /**
     * @param string $Phone2CountryPrefix
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setPhone2CountryPrefix($Phone2CountryPrefix)
    {
      $this->Phone2CountryPrefix = $Phone2CountryPrefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone2AreaOrCityCode()
    {
      return $this->Phone2AreaOrCityCode;
    }

    /**
     * @param string $Phone2AreaOrCityCode
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setPhone2AreaOrCityCode($Phone2AreaOrCityCode)
    {
      $this->Phone2AreaOrCityCode = $Phone2AreaOrCityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone2LocalNumber()
    {
      return $this->Phone2LocalNumber;
    }

    /**
     * @param string $Phone2LocalNumber
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setPhone2LocalNumber($Phone2LocalNumber)
    {
      $this->Phone2LocalNumber = $Phone2LocalNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressID()
    {
      return $this->AddressID;
    }

    /**
     * @param string $AddressID
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setAddressID($AddressID)
    {
      $this->AddressID = $AddressID;
      return $this;
    }

    /**
     * @return AddressOwnerCodeType
     */
    public function getAddressOwner()
    {
      return $this->AddressOwner;
    }

    /**
     * @param AddressOwnerCodeType $AddressOwner
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setAddressOwner($AddressOwner)
    {
      $this->AddressOwner = $AddressOwner;
      return $this;
    }

    /**
     * @return AddressStatusCodeType
     */
    public function getAddressStatus()
    {
      return $this->AddressStatus;
    }

    /**
     * @param AddressStatusCodeType $AddressStatus
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setAddressStatus($AddressStatus)
    {
      $this->AddressStatus = $AddressStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalAddressID()
    {
      return $this->ExternalAddressID;
    }

    /**
     * @param string $ExternalAddressID
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setExternalAddressID($ExternalAddressID)
    {
      $this->ExternalAddressID = $ExternalAddressID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternationalName()
    {
      return $this->InternationalName;
    }

    /**
     * @param string $InternationalName
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setInternationalName($InternationalName)
    {
      $this->InternationalName = $InternationalName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternationalStateAndCity()
    {
      return $this->InternationalStateAndCity;
    }

    /**
     * @param string $InternationalStateAndCity
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setInternationalStateAndCity($InternationalStateAndCity)
    {
      $this->InternationalStateAndCity = $InternationalStateAndCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternationalStreet()
    {
      return $this->InternationalStreet;
    }

    /**
     * @param string $InternationalStreet
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setInternationalStreet($InternationalStreet)
    {
      $this->InternationalStreet = $InternationalStreet;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return AddressRecordTypeCodeType
     */
    public function getAddressRecordType()
    {
      return $this->AddressRecordType;
    }

    /**
     * @param AddressRecordTypeCodeType $AddressRecordType
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setAddressRecordType($AddressRecordType)
    {
      $this->AddressRecordType = $AddressRecordType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone2()
    {
      return $this->Phone2;
    }

    /**
     * @param string $Phone2
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setPhone2($Phone2)
    {
      $this->Phone2 = $Phone2;
      return $this;
    }

    /**
     * @return AddressUsageCodeType
     */
    public function getAddressUsage()
    {
      return $this->AddressUsage;
    }

    /**
     * @param AddressUsageCodeType $AddressUsage
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setAddressUsage($AddressUsage)
    {
      $this->AddressUsage = $AddressUsage;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceID()
    {
      return $this->ReferenceID;
    }

    /**
     * @param string $ReferenceID
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setReferenceID($ReferenceID)
    {
      $this->ReferenceID = $ReferenceID;
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
     * @return \EbayWsdl\Classes\AddressType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
