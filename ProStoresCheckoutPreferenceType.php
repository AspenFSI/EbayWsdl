<?php

namespace EbayWsdl;

class ProStoresCheckoutPreferenceType
{

    /**
     * @var boolean $CheckoutRedirectProStores
     */
    protected $CheckoutRedirectProStores = null;

    /**
     * @var ProStoresDetailsType $ProStoresDetails
     */
    protected $ProStoresDetails = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $CheckoutRedirectProStores
     * @param ProStoresDetailsType $ProStoresDetails
     * @param string $any
     */
    public function __construct($CheckoutRedirectProStores = null, $ProStoresDetails = null, $any = null)
    {
      $this->CheckoutRedirectProStores = $CheckoutRedirectProStores;
      $this->ProStoresDetails = $ProStoresDetails;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getCheckoutRedirectProStores()
    {
      return $this->CheckoutRedirectProStores;
    }

    /**
     * @param boolean $CheckoutRedirectProStores
     * @return \EbayWsdl\ProStoresCheckoutPreferenceType
     */
    public function setCheckoutRedirectProStores($CheckoutRedirectProStores)
    {
      $this->CheckoutRedirectProStores = $CheckoutRedirectProStores;
      return $this;
    }

    /**
     * @return ProStoresDetailsType
     */
    public function getProStoresDetails()
    {
      return $this->ProStoresDetails;
    }

    /**
     * @param ProStoresDetailsType $ProStoresDetails
     * @return \EbayWsdl\ProStoresCheckoutPreferenceType
     */
    public function setProStoresDetails($ProStoresDetails)
    {
      $this->ProStoresDetails = $ProStoresDetails;
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
     * @return \EbayWsdl\ProStoresCheckoutPreferenceType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
