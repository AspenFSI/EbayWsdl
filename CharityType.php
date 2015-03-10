<?php

namespace EbayWsdl;

class CharityType
{

    /**
     * @var string $CharityName
     */
    protected $CharityName = null;

    /**
     * @var int $CharityNumber
     */
    protected $CharityNumber = null;

    /**
     * @var float $DonationPercent
     */
    protected $DonationPercent = null;

    /**
     * @var string $CharityID
     */
    protected $CharityID = null;

    /**
     * @var string $Mission
     */
    protected $Mission = null;

    /**
     * @var string $LogoURL
     */
    protected $LogoURL = null;

    /**
     * @var CharityStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var boolean $CharityListing
     */
    protected $CharityListing = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $CharityName
     * @param int $CharityNumber
     * @param float $DonationPercent
     * @param string $CharityID
     * @param string $Mission
     * @param string $LogoURL
     * @param CharityStatusCodeType $Status
     * @param boolean $CharityListing
     * @param string $any
     */
    public function __construct($CharityName = null, $CharityNumber = null, $DonationPercent = null, $CharityID = null, $Mission = null, $LogoURL = null, $Status = null, $CharityListing = null, $any = null)
    {
      $this->CharityName = $CharityName;
      $this->CharityNumber = $CharityNumber;
      $this->DonationPercent = $DonationPercent;
      $this->CharityID = $CharityID;
      $this->Mission = $Mission;
      $this->LogoURL = $LogoURL;
      $this->Status = $Status;
      $this->CharityListing = $CharityListing;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getCharityName()
    {
      return $this->CharityName;
    }

    /**
     * @param string $CharityName
     * @return \EbayWsdl\CharityType
     */
    public function setCharityName($CharityName)
    {
      $this->CharityName = $CharityName;
      return $this;
    }

    /**
     * @return int
     */
    public function getCharityNumber()
    {
      return $this->CharityNumber;
    }

    /**
     * @param int $CharityNumber
     * @return \EbayWsdl\CharityType
     */
    public function setCharityNumber($CharityNumber)
    {
      $this->CharityNumber = $CharityNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getDonationPercent()
    {
      return $this->DonationPercent;
    }

    /**
     * @param float $DonationPercent
     * @return \EbayWsdl\CharityType
     */
    public function setDonationPercent($DonationPercent)
    {
      $this->DonationPercent = $DonationPercent;
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
     * @return \EbayWsdl\CharityType
     */
    public function setCharityID($CharityID)
    {
      $this->CharityID = $CharityID;
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
     * @return \EbayWsdl\CharityType
     */
    public function setMission($Mission)
    {
      $this->Mission = $Mission;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogoURL()
    {
      return $this->LogoURL;
    }

    /**
     * @param string $LogoURL
     * @return \EbayWsdl\CharityType
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
     * @return \EbayWsdl\CharityType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCharityListing()
    {
      return $this->CharityListing;
    }

    /**
     * @param boolean $CharityListing
     * @return \EbayWsdl\CharityType
     */
    public function setCharityListing($CharityListing)
    {
      $this->CharityListing = $CharityListing;
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
     * @return \EbayWsdl\CharityType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
