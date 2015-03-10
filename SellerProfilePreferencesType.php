<?php

namespace EbayWsdl;

class SellerProfilePreferencesType
{

    /**
     * @var boolean $SellerProfileOptedIn
     */
    protected $SellerProfileOptedIn = null;

    /**
     * @var SupportedSellerProfilesType $SupportedSellerProfiles
     */
    protected $SupportedSellerProfiles = null;

    /**
     * @param boolean $SellerProfileOptedIn
     * @param SupportedSellerProfilesType $SupportedSellerProfiles
     */
    public function __construct($SellerProfileOptedIn = null, $SupportedSellerProfiles = null)
    {
      $this->SellerProfileOptedIn = $SellerProfileOptedIn;
      $this->SupportedSellerProfiles = $SupportedSellerProfiles;
    }

    /**
     * @return boolean
     */
    public function getSellerProfileOptedIn()
    {
      return $this->SellerProfileOptedIn;
    }

    /**
     * @param boolean $SellerProfileOptedIn
     * @return \EbayWsdl\SellerProfilePreferencesType
     */
    public function setSellerProfileOptedIn($SellerProfileOptedIn)
    {
      $this->SellerProfileOptedIn = $SellerProfileOptedIn;
      return $this;
    }

    /**
     * @return SupportedSellerProfilesType
     */
    public function getSupportedSellerProfiles()
    {
      return $this->SupportedSellerProfiles;
    }

    /**
     * @param SupportedSellerProfilesType $SupportedSellerProfiles
     * @return \EbayWsdl\SellerProfilePreferencesType
     */
    public function setSupportedSellerProfiles($SupportedSellerProfiles)
    {
      $this->SupportedSellerProfiles = $SupportedSellerProfiles;
      return $this;
    }

}
