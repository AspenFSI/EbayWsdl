<?php

namespace EbayWsdl;

class TaxTableType
{

    /**
     * @var TaxJurisdictionType[] $TaxJurisdiction
     */
    protected $TaxJurisdiction = null;

    /**
     * @param TaxJurisdictionType[] $TaxJurisdiction
     */
    public function __construct(array $TaxJurisdiction = null)
    {
      $this->TaxJurisdiction = $TaxJurisdiction;
    }

    /**
     * @return TaxJurisdictionType[]
     */
    public function getTaxJurisdiction()
    {
      return $this->TaxJurisdiction;
    }

    /**
     * @param TaxJurisdictionType[] $TaxJurisdiction
     * @return \EbayWsdl\TaxTableType
     */
    public function setTaxJurisdiction(array $TaxJurisdiction)
    {
      $this->TaxJurisdiction = $TaxJurisdiction;
      return $this;
    }

}
