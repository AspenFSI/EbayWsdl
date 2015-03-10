<?php

namespace EbayWsdl;

class ListingRecommendationsType
{

    /**
     * @var ListingRecommendationType[] $Recommendation
     */
    protected $Recommendation = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ListingRecommendationType[] $Recommendation
     * @param string $any
     */
    public function __construct(array $Recommendation = null, $any = null)
    {
      $this->Recommendation = $Recommendation;
      $this->any = $any;
    }

    /**
     * @return ListingRecommendationType[]
     */
    public function getRecommendation()
    {
      return $this->Recommendation;
    }

    /**
     * @param ListingRecommendationType[] $Recommendation
     * @return \EbayWsdl\ListingRecommendationsType
     */
    public function setRecommendation(array $Recommendation)
    {
      $this->Recommendation = $Recommendation;
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
     * @return \EbayWsdl\ListingRecommendationsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
