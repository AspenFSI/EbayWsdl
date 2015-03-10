<?php

namespace EbayWsdl;

class SupportedSellerProfilesType
{

    /**
     * @var SupportedSellerProfileType[] $SupportedSellerProfile
     */
    protected $SupportedSellerProfile = null;

    /**
     * @param SupportedSellerProfileType[] $SupportedSellerProfile
     */
    public function __construct(array $SupportedSellerProfile = null)
    {
      $this->SupportedSellerProfile = $SupportedSellerProfile;
    }

    /**
     * @return SupportedSellerProfileType[]
     */
    public function getSupportedSellerProfile()
    {
      return $this->SupportedSellerProfile;
    }

    /**
     * @param SupportedSellerProfileType[] $SupportedSellerProfile
     * @return \EbayWsdl\SupportedSellerProfilesType
     */
    public function setSupportedSellerProfile(array $SupportedSellerProfile)
    {
      $this->SupportedSellerProfile = $SupportedSellerProfile;
      return $this;
    }

}
