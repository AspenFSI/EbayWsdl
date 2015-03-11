<?php

namespace EbayWsdl\Classes;

class BestOfferArrayType
{

    /**
     * @var BestOfferType[] $BestOffer
     */
    protected $BestOffer = null;

    /**
     * @param BestOfferType[] $BestOffer
     */
    public function __construct(array $BestOffer = null)
    {
      $this->BestOffer = $BestOffer;
    }

    /**
     * @return BestOfferType[]
     */
    public function getBestOffer()
    {
      return $this->BestOffer;
    }

    /**
     * @param BestOfferType[] $BestOffer
     * @return \EbayWsdl\Classes\BestOfferArrayType
     */
    public function setBestOffer(array $BestOffer)
    {
      $this->BestOffer = $BestOffer;
      return $this;
    }

}
