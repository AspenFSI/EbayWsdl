<?php

namespace EbayWsdl\Classes;

class CharityInfoType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Mission
     */
    protected $Mission = null;

    /**
     * @var anyURI $LogoURL
     */
    protected $LogoURL = null;

    /**
     * @var CharityStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var string $SearchableString
     */
    protected $SearchableString = null;

    /**
     * @var int $CharityRegion
     */
    protected $CharityRegion = null;

    /**
     * @var int $CharityDomain
     */
    protected $CharityDomain = null;

    /**
     * @var string $CharityID
     */
    protected $CharityID = null;

    /**
     * @var anyURI $LogoURLSelling
     */
    protected $LogoURLSelling = null;

    /**
     * @var boolean $DisplayLogoSelling
     */
    protected $DisplayLogoSelling = null;

    /**
     * @var boolean $DisplayNameInCheckout
     */
    protected $DisplayNameInCheckout = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $ShowMultipleDonationAmountInCheckout
     */
    protected $ShowMultipleDonationAmountInCheckout = null;

    /**
     * @var string $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var int $PopularityIndex
     */
    protected $PopularityIndex = null;

    /**
     * @var string $EIN
     */
    protected $EIN = null;

    /**
     * @var string $NonProfitSecondName
     */
    protected $NonProfitSecondName = null;

    /**
     * @var NonProfitAddressType[] $NonProfitAddress
     */
    protected $NonProfitAddress = null;

    /**
     * @var NonProfitSocialAddressType[] $NonProfitSocialAddress
     */
    protected $NonProfitSocialAddress = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @param string $Name
     * @param string $Mission
     * @param anyURI $LogoURL
     * @param CharityStatusCodeType $Status
     * @param string $SearchableString
     * @param int $CharityRegion
     * @param int $CharityDomain
     * @param string $CharityID
     * @param anyURI $LogoURLSelling
     * @param boolean $DisplayLogoSelling
     * @param boolean $DisplayNameInCheckout
     * @param string $Description
     * @param boolean $ShowMultipleDonationAmountInCheckout
     * @param string $ExternalID
     * @param int $PopularityIndex
     * @param string $EIN
     * @param string $NonProfitSecondName
     * @param NonProfitAddressType[] $NonProfitAddress
     * @param NonProfitSocialAddressType[] $NonProfitSocialAddress
     * @param string $any
     * @param string $id
     */
    public function __construct($Name = null, $Mission = null, $LogoURL = null, $Status = null, $SearchableString = null, $CharityRegion = null, $CharityDomain = null, $CharityID = null, $LogoURLSelling = null, $DisplayLogoSelling = null, $DisplayNameInCheckout = null, $Description = null, $ShowMultipleDonationAmountInCheckout = null, $ExternalID = null, $PopularityIndex = null, $EIN = null, $NonProfitSecondName = null, array $NonProfitAddress = null, array $NonProfitSocialAddress = null, $any = null, $id = null)
    {
      $this->Name = $Name;
      $this->Mission = $Mission;
      $this->LogoURL = $LogoURL;
      $this->Status = $Status;
      $this->SearchableString = $SearchableString;
      $this->CharityRegion = $CharityRegion;
      $this->CharityDomain = $CharityDomain;
      $this->CharityID = $CharityID;
      $this->LogoURLSelling = $LogoURLSelling;
      $this->DisplayLogoSelling = $DisplayLogoSelling;
      $this->DisplayNameInCheckout = $DisplayNameInCheckout;
      $this->Description = $Description;
      $this->ShowMultipleDonationAmountInCheckout = $ShowMultipleDonationAmountInCheckout;
      $this->ExternalID = $ExternalID;
      $this->PopularityIndex = $PopularityIndex;
      $this->EIN = $EIN;
      $this->NonProfitSecondName = $NonProfitSecondName;
      $this->NonProfitAddress = $NonProfitAddress;
      $this->NonProfitSocialAddress = $NonProfitSocialAddress;
      $this->any = $any;
      $this->id = $id;
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
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getMission()
    {
      return $this->Mission;
    }

    /**
     * @param string $Mission
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setMission($Mission)
    {
      $this->Mission = $Mission;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getLogoURL()
    {
      return $this->LogoURL;
    }

    /**
     * @param anyURI $LogoURL
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setLogoURL($LogoURL)
    {
      $this->LogoURL = $LogoURL;
      return $this;
    }

    /**
     * @return CharityStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param CharityStatusCodeType $Status
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchableString()
    {
      return $this->SearchableString;
    }

    /**
     * @param string $SearchableString
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setSearchableString($SearchableString)
    {
      $this->SearchableString = $SearchableString;
      return $this;
    }

    /**
     * @return int
     */
    public function getCharityRegion()
    {
      return $this->CharityRegion;
    }

    /**
     * @param int $CharityRegion
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setCharityRegion($CharityRegion)
    {
      $this->CharityRegion = $CharityRegion;
      return $this;
    }

    /**
     * @return int
     */
    public function getCharityDomain()
    {
      return $this->CharityDomain;
    }

    /**
     * @param int $CharityDomain
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setCharityDomain($CharityDomain)
    {
      $this->CharityDomain = $CharityDomain;
      return $this;
    }

    /**
     * @return string
     */
    public function getCharityID()
    {
      return $this->CharityID;
    }

    /**
     * @param string $CharityID
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setCharityID($CharityID)
    {
      $this->CharityID = $CharityID;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getLogoURLSelling()
    {
      return $this->LogoURLSelling;
    }

    /**
     * @param anyURI $LogoURLSelling
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setLogoURLSelling($LogoURLSelling)
    {
      $this->LogoURLSelling = $LogoURLSelling;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayLogoSelling()
    {
      return $this->DisplayLogoSelling;
    }

    /**
     * @param boolean $DisplayLogoSelling
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setDisplayLogoSelling($DisplayLogoSelling)
    {
      $this->DisplayLogoSelling = $DisplayLogoSelling;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayNameInCheckout()
    {
      return $this->DisplayNameInCheckout;
    }

    /**
     * @param boolean $DisplayNameInCheckout
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setDisplayNameInCheckout($DisplayNameInCheckout)
    {
      $this->DisplayNameInCheckout = $DisplayNameInCheckout;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowMultipleDonationAmountInCheckout()
    {
      return $this->ShowMultipleDonationAmountInCheckout;
    }

    /**
     * @param boolean $ShowMultipleDonationAmountInCheckout
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setShowMultipleDonationAmountInCheckout($ShowMultipleDonationAmountInCheckout)
    {
      $this->ShowMultipleDonationAmountInCheckout = $ShowMultipleDonationAmountInCheckout;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalID()
    {
      return $this->ExternalID;
    }

    /**
     * @param string $ExternalID
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setExternalID($ExternalID)
    {
      $this->ExternalID = $ExternalID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPopularityIndex()
    {
      return $this->PopularityIndex;
    }

    /**
     * @param int $PopularityIndex
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setPopularityIndex($PopularityIndex)
    {
      $this->PopularityIndex = $PopularityIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getEIN()
    {
      return $this->EIN;
    }

    /**
     * @param string $EIN
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setEIN($EIN)
    {
      $this->EIN = $EIN;
      return $this;
    }

    /**
     * @return string
     */
    public function getNonProfitSecondName()
    {
      return $this->NonProfitSecondName;
    }

    /**
     * @param string $NonProfitSecondName
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setNonProfitSecondName($NonProfitSecondName)
    {
      $this->NonProfitSecondName = $NonProfitSecondName;
      return $this;
    }

    /**
     * @return NonProfitAddressType[]
     */
    public function getNonProfitAddress()
    {
      return $this->NonProfitAddress;
    }

    /**
     * @param NonProfitAddressType[] $NonProfitAddress
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setNonProfitAddress(array $NonProfitAddress)
    {
      $this->NonProfitAddress = $NonProfitAddress;
      return $this;
    }

    /**
     * @return NonProfitSocialAddressType[]
     */
    public function getNonProfitSocialAddress()
    {
      return $this->NonProfitSocialAddress;
    }

    /**
     * @param NonProfitSocialAddressType[] $NonProfitSocialAddress
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setNonProfitSocialAddress(array $NonProfitSocialAddress)
    {
      $this->NonProfitSocialAddress = $NonProfitSocialAddress;
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
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \EbayWsdl\Classes\CharityInfoType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
