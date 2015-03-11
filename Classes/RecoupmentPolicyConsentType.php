<?php

namespace EbayWsdl\Classes;

class RecoupmentPolicyConsentType
{

    /**
     * @var SiteCodeType[] $Site
     */
    protected $Site = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SiteCodeType[] $Site
     * @param string $any
     */
    public function __construct(array $Site = null, $any = null)
    {
      $this->Site = $Site;
      $this->any = $any;
    }

    /**
     * @return SiteCodeType[]
     */
    public function getSite()
    {
      return $this->Site;
    }

    /**
     * @param SiteCodeType[] $Site
     * @return \EbayWsdl\Classes\RecoupmentPolicyConsentType
     */
    public function setSite(array $Site)
    {
      $this->Site = $Site;
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
     * @return \EbayWsdl\Classes\RecoupmentPolicyConsentType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
