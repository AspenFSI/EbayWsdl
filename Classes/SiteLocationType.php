<?php

namespace EbayWsdl\Classes;

class SiteLocationType
{

    /**
     * @var SiteIDFilterCodeType $SiteID
     */
    protected $SiteID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SiteIDFilterCodeType $SiteID
     * @param string $any
     */
    public function __construct($SiteID = null, $any = null)
    {
      $this->SiteID = $SiteID;
      $this->any = $any;
    }

    /**
     * @return SiteIDFilterCodeType
     */
    public function getSiteID()
    {
      return $this->SiteID;
    }

    /**
     * @param SiteIDFilterCodeType $SiteID
     * @return \EbayWsdl\Classes\SiteLocationType
     */
    public function setSiteID($SiteID)
    {
      $this->SiteID = $SiteID;
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
     * @return \EbayWsdl\Classes\SiteLocationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
