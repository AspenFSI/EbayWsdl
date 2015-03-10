<?php

namespace EbayWsdl;

class SubscriptionType
{

    /**
     * @var string $EIASToken
     */
    protected $EIASToken = null;

    /**
     * @var SiteCodeType $SiteID
     */
    protected $SiteID = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $EIASToken
     * @param SiteCodeType $SiteID
     * @param boolean $Active
     * @param string $any
     */
    public function __construct($EIASToken = null, $SiteID = null, $Active = null, $any = null)
    {
      $this->EIASToken = $EIASToken;
      $this->SiteID = $SiteID;
      $this->Active = $Active;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getEIASToken()
    {
      return $this->EIASToken;
    }

    /**
     * @param string $EIASToken
     * @return \EbayWsdl\SubscriptionType
     */
    public function setEIASToken($EIASToken)
    {
      $this->EIASToken = $EIASToken;
      return $this;
    }

    /**
     * @return SiteCodeType
     */
    public function getSiteID()
    {
      return $this->SiteID;
    }

    /**
     * @param SiteCodeType $SiteID
     * @return \EbayWsdl\SubscriptionType
     */
    public function setSiteID($SiteID)
    {
      $this->SiteID = $SiteID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \EbayWsdl\SubscriptionType
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
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
     * @return \EbayWsdl\SubscriptionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
