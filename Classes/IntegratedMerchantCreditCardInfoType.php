<?php

namespace EbayWsdl\Classes;

class IntegratedMerchantCreditCardInfoType
{

    /**
     * @var SiteCodeType[] $SupportedSite
     */
    protected $SupportedSite = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SiteCodeType[] $SupportedSite
     * @param string $any
     */
    public function __construct(array $SupportedSite = null, $any = null)
    {
      $this->SupportedSite = $SupportedSite;
      $this->any = $any;
    }

    /**
     * @return SiteCodeType[]
     */
    public function getSupportedSite()
    {
      return $this->SupportedSite;
    }

    /**
     * @param SiteCodeType[] $SupportedSite
     * @return \EbayWsdl\Classes\IntegratedMerchantCreditCardInfoType
     */
    public function setSupportedSite(array $SupportedSite)
    {
      $this->SupportedSite = $SupportedSite;
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
     * @return \EbayWsdl\Classes\IntegratedMerchantCreditCardInfoType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
