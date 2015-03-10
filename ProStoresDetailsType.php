<?php

namespace EbayWsdl;

class ProStoresDetailsType
{

    /**
     * @var string $SellerThirdPartyUsername
     */
    protected $SellerThirdPartyUsername = null;

    /**
     * @var string $StoreName
     */
    protected $StoreName = null;

    /**
     * @var EnableCodeType $Status
     */
    protected $Status = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $SellerThirdPartyUsername
     * @param string $StoreName
     * @param EnableCodeType $Status
     * @param string $any
     */
    public function __construct($SellerThirdPartyUsername = null, $StoreName = null, $Status = null, $any = null)
    {
      $this->SellerThirdPartyUsername = $SellerThirdPartyUsername;
      $this->StoreName = $StoreName;
      $this->Status = $Status;
      $this->any = $any;
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
     * @return \EbayWsdl\ProStoresDetailsType
     */
    public function setSellerThirdPartyUsername($SellerThirdPartyUsername)
    {
      $this->SellerThirdPartyUsername = $SellerThirdPartyUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreName()
    {
      return $this->StoreName;
    }

    /**
     * @param string $StoreName
     * @return \EbayWsdl\ProStoresDetailsType
     */
    public function setStoreName($StoreName)
    {
      $this->StoreName = $StoreName;
      return $this;
    }

    /**
     * @return EnableCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param EnableCodeType $Status
     * @return \EbayWsdl\ProStoresDetailsType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \EbayWsdl\ProStoresDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
