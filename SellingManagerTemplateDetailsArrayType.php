<?php

namespace EbayWsdl;

class SellingManagerTemplateDetailsArrayType
{

    /**
     * @var SellingManagerTemplateDetailsType[] $SellingManagerTemplateDetails
     */
    protected $SellingManagerTemplateDetails = null;

    /**
     * @param SellingManagerTemplateDetailsType[] $SellingManagerTemplateDetails
     */
    public function __construct(array $SellingManagerTemplateDetails = null)
    {
      $this->SellingManagerTemplateDetails = $SellingManagerTemplateDetails;
    }

    /**
     * @return SellingManagerTemplateDetailsType[]
     */
    public function getSellingManagerTemplateDetails()
    {
      return $this->SellingManagerTemplateDetails;
    }

    /**
     * @param SellingManagerTemplateDetailsType[] $SellingManagerTemplateDetails
     * @return \EbayWsdl\SellingManagerTemplateDetailsArrayType
     */
    public function setSellingManagerTemplateDetails(array $SellingManagerTemplateDetails)
    {
      $this->SellingManagerTemplateDetails = $SellingManagerTemplateDetails;
      return $this;
    }

}
