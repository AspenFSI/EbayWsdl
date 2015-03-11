<?php

namespace EbayWsdl\Classes;

class OfferArrayType
{

    /**
     * @var OfferType[] $Offer
     */
    protected $Offer = null;

    /**
     * @param OfferType[] $Offer
     */
    public function __construct(array $Offer = null)
    {
      $this->Offer = $Offer;
    }

    /**
     * @return OfferType[]
     */
    public function getOffer()
    {
      return $this->Offer;
    }

    /**
     * @param OfferType[] $Offer
     * @return \EbayWsdl\Classes\OfferArrayType
     */
    public function setOffer(array $Offer)
    {
      $this->Offer = $Offer;
      return $this;
    }

}
