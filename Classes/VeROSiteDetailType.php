<?php

namespace EbayWsdl\Classes;

class VeROSiteDetailType
{

    /**
     * @var SiteCodeType $Site
     */
    protected $Site = null;

    /**
     * @var ReasonCodeDetailType[] $ReasonCodeDetail
     */
    protected $ReasonCodeDetail = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SiteCodeType $Site
     * @param ReasonCodeDetailType[] $ReasonCodeDetail
     * @param string $any
     */
    public function __construct($Site = null, array $ReasonCodeDetail = null, $any = null)
    {
      $this->Site = $Site;
      $this->ReasonCodeDetail = $ReasonCodeDetail;
      $this->any = $any;
    }

    /**
     * @return SiteCodeType
     */
    public function getSite()
    {
      return $this->Site;
    }

    /**
     * @param SiteCodeType $Site
     * @return \EbayWsdl\Classes\VeROSiteDetailType
     */
    public function setSite($Site)
    {
      $this->Site = $Site;
      return $this;
    }

    /**
     * @return ReasonCodeDetailType[]
     */
    public function getReasonCodeDetail()
    {
      return $this->ReasonCodeDetail;
    }

    /**
     * @param ReasonCodeDetailType[] $ReasonCodeDetail
     * @return \EbayWsdl\Classes\VeROSiteDetailType
     */
    public function setReasonCodeDetail(array $ReasonCodeDetail)
    {
      $this->ReasonCodeDetail = $ReasonCodeDetail;
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
     * @return \EbayWsdl\Classes\VeROSiteDetailType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
