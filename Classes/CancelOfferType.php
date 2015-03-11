<?php

namespace EbayWsdl\Classes;

class CancelOfferType
{

    /**
     * @var OfferType $Offer
     */
    protected $Offer = null;

    /**
     * @var string $Explanation
     */
    protected $Explanation = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param OfferType $Offer
     * @param string $Explanation
     * @param string $any
     */
    public function __construct($Offer = null, $Explanation = null, $any = null)
    {
      $this->Offer = $Offer;
      $this->Explanation = $Explanation;
      $this->any = $any;
    }

    /**
     * @return OfferType
     */
    public function getOffer()
    {
      return $this->Offer;
    }

    /**
     * @param OfferType $Offer
     * @return \EbayWsdl\Classes\CancelOfferType
     */
    public function setOffer($Offer)
    {
      $this->Offer = $Offer;
      return $this;
    }

    /**
     * @return string
     */
    public function getExplanation()
    {
      return $this->Explanation;
    }

    /**
     * @param string $Explanation
     * @return \EbayWsdl\Classes\CancelOfferType
     */
    public function setExplanation($Explanation)
    {
      $this->Explanation = $Explanation;
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
     * @return \EbayWsdl\Classes\CancelOfferType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
