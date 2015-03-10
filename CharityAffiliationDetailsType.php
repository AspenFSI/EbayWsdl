<?php

namespace EbayWsdl;

class CharityAffiliationDetailsType
{

    /**
     * @var CharityAffiliationDetailType[] $CharityAffiliationDetail
     */
    protected $CharityAffiliationDetail = null;

    /**
     * @param CharityAffiliationDetailType[] $CharityAffiliationDetail
     */
    public function __construct(array $CharityAffiliationDetail = null)
    {
      $this->CharityAffiliationDetail = $CharityAffiliationDetail;
    }

    /**
     * @return CharityAffiliationDetailType[]
     */
    public function getCharityAffiliationDetail()
    {
      return $this->CharityAffiliationDetail;
    }

    /**
     * @param CharityAffiliationDetailType[] $CharityAffiliationDetail
     * @return \EbayWsdl\CharityAffiliationDetailsType
     */
    public function setCharityAffiliationDetail(array $CharityAffiliationDetail)
    {
      $this->CharityAffiliationDetail = $CharityAffiliationDetail;
      return $this;
    }

}
