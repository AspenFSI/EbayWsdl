<?php

namespace EbayWsdl\Classes;

class ListingAnalyzerRecommendationsType
{

    /**
     * @var ListingTipArrayType $ListingTipArray
     */
    protected $ListingTipArray = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ListingTipArrayType $ListingTipArray
     * @param string $any
     */
    public function __construct($ListingTipArray = null, $any = null)
    {
      $this->ListingTipArray = $ListingTipArray;
      $this->any = $any;
    }

    /**
     * @return ListingTipArrayType
     */
    public function getListingTipArray()
    {
      return $this->ListingTipArray;
    }

    /**
     * @param ListingTipArrayType $ListingTipArray
     * @return \EbayWsdl\Classes\ListingAnalyzerRecommendationsType
     */
    public function setListingTipArray($ListingTipArray)
    {
      $this->ListingTipArray = $ListingTipArray;
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
     * @return \EbayWsdl\Classes\ListingAnalyzerRecommendationsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
