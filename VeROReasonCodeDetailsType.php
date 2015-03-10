<?php

namespace EbayWsdl;

class VeROReasonCodeDetailsType
{

    /**
     * @var VeROSiteDetailType[] $VeROSiteDetail
     */
    protected $VeROSiteDetail = null;

    /**
     * @param VeROSiteDetailType[] $VeROSiteDetail
     */
    public function __construct(array $VeROSiteDetail = null)
    {
      $this->VeROSiteDetail = $VeROSiteDetail;
    }

    /**
     * @return VeROSiteDetailType[]
     */
    public function getVeROSiteDetail()
    {
      return $this->VeROSiteDetail;
    }

    /**
     * @param VeROSiteDetailType[] $VeROSiteDetail
     * @return \EbayWsdl\VeROReasonCodeDetailsType
     */
    public function setVeROSiteDetail(array $VeROSiteDetail)
    {
      $this->VeROSiteDetail = $VeROSiteDetail;
      return $this;
    }

}
