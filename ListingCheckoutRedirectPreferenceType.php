<?php

namespace EbayWsdl;

class ListingCheckoutRedirectPreferenceType
{

    /**
     * @var string $ProStoresStoreName
     */
    protected $ProStoresStoreName = null;

    /**
     * @var string $SellerThirdPartyUsername
     */
    protected $SellerThirdPartyUsername = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ProStoresStoreName
     * @param string $SellerThirdPartyUsername
     * @param string $any
     */
    public function __construct($ProStoresStoreName = null, $SellerThirdPartyUsername = null, $any = null)
    {
      $this->ProStoresStoreName = $ProStoresStoreName;
      $this->SellerThirdPartyUsername = $SellerThirdPartyUsername;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getProStoresStoreName()
    {
      return $this->ProStoresStoreName;
    }

    /**
     * @param string $ProStoresStoreName
     * @return \EbayWsdl\ListingCheckoutRedirectPreferenceType
     */
    public function setProStoresStoreName($ProStoresStoreName)
    {
      $this->ProStoresStoreName = $ProStoresStoreName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerThirdPartyUsername()
    {
      return $this->SellerThirdPartyUsername;
    }

    /**
     * @param string $SellerThirdPartyUsername
     * @return \EbayWsdl\ListingCheckoutRedirectPreferenceType
     */
    public function setSellerThirdPartyUsername($SellerThirdPartyUsername)
    {
      $this->SellerThirdPartyUsername = $SellerThirdPartyUsername;
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
     * @return \EbayWsdl\ListingCheckoutRedirectPreferenceType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
