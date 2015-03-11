<?php

namespace EbayWsdl\Classes;

class NonProfitSocialAddressType
{

    /**
     * @var SocialAddressTypeCodeType $SocialAddressType
     */
    protected $SocialAddressType = null;

    /**
     * @var string $SocialAddressId
     */
    protected $SocialAddressId = null;

    /**
     * @param SocialAddressTypeCodeType $SocialAddressType
     * @param string $SocialAddressId
     */
    public function __construct($SocialAddressType = null, $SocialAddressId = null)
    {
      $this->SocialAddressType = $SocialAddressType;
      $this->SocialAddressId = $SocialAddressId;
    }

    /**
     * @return SocialAddressTypeCodeType
     */
    public function getSocialAddressType()
    {
      return $this->SocialAddressType;
    }

    /**
     * @param SocialAddressTypeCodeType $SocialAddressType
     * @return \EbayWsdl\Classes\NonProfitSocialAddressType
     */
    public function setSocialAddressType($SocialAddressType)
    {
      $this->SocialAddressType = $SocialAddressType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSocialAddressId()
    {
      return $this->SocialAddressId;
    }

    /**
     * @param string $SocialAddressId
     * @return \EbayWsdl\Classes\NonProfitSocialAddressType
     */
    public function setSocialAddressId($SocialAddressId)
    {
      $this->SocialAddressId = $SocialAddressId;
      return $this;
    }

}
