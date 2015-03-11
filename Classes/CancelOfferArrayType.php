<?php

namespace EbayWsdl\Classes;

class CancelOfferArrayType
{

    /**
     * @var CancelOfferType[] $CancelOffer
     */
    protected $CancelOffer = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param CancelOfferType[] $CancelOffer
     * @param string $any
     */
    public function __construct(array $CancelOffer = null, $any = null)
    {
      $this->CancelOffer = $CancelOffer;
      $this->any = $any;
    }

    /**
     * @return CancelOfferType[]
     */
    public function getCancelOffer()
    {
      return $this->CancelOffer;
    }

    /**
     * @param CancelOfferType[] $CancelOffer
     * @return \EbayWsdl\Classes\CancelOfferArrayType
     */
    public function setCancelOffer(array $CancelOffer)
    {
      $this->CancelOffer = $CancelOffer;
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
     * @return \EbayWsdl\Classes\CancelOfferArrayType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
