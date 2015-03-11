<?php

namespace EbayWsdl\Classes;

class SellerProfilesType
{

    /**
     * @var SellerShippingProfileType $SellerShippingProfile
     */
    protected $SellerShippingProfile = null;

    /**
     * @var SellerReturnProfileType $SellerReturnProfile
     */
    protected $SellerReturnProfile = null;

    /**
     * @var SellerPaymentProfileType $SellerPaymentProfile
     */
    protected $SellerPaymentProfile = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SellerShippingProfileType $SellerShippingProfile
     * @param SellerReturnProfileType $SellerReturnProfile
     * @param SellerPaymentProfileType $SellerPaymentProfile
     * @param string $any
     */
    public function __construct($SellerShippingProfile = null, $SellerReturnProfile = null, $SellerPaymentProfile = null, $any = null)
    {
      $this->SellerShippingProfile = $SellerShippingProfile;
      $this->SellerReturnProfile = $SellerReturnProfile;
      $this->SellerPaymentProfile = $SellerPaymentProfile;
      $this->any = $any;
    }

    /**
     * @return SellerShippingProfileType
     */
    public function getSellerShippingProfile()
    {
      return $this->SellerShippingProfile;
    }

    /**
     * @param SellerShippingProfileType $SellerShippingProfile
     * @return \EbayWsdl\Classes\SellerProfilesType
     */
    public function setSellerShippingProfile($SellerShippingProfile)
    {
      $this->SellerShippingProfile = $SellerShippingProfile;
      return $this;
    }

    /**
     * @return SellerReturnProfileType
     */
    public function getSellerReturnProfile()
    {
      return $this->SellerReturnProfile;
    }

    /**
     * @param SellerReturnProfileType $SellerReturnProfile
     * @return \EbayWsdl\Classes\SellerProfilesType
     */
    public function setSellerReturnProfile($SellerReturnProfile)
    {
      $this->SellerReturnProfile = $SellerReturnProfile;
      return $this;
    }

    /**
     * @return SellerPaymentProfileType
     */
    public function getSellerPaymentProfile()
    {
      return $this->SellerPaymentProfile;
    }

    /**
     * @param SellerPaymentProfileType $SellerPaymentProfile
     * @return \EbayWsdl\Classes\SellerProfilesType
     */
    public function setSellerPaymentProfile($SellerPaymentProfile)
    {
      $this->SellerPaymentProfile = $SellerPaymentProfile;
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
     * @return \EbayWsdl\Classes\SellerProfilesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
