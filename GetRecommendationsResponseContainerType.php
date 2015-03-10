<?php

namespace EbayWsdl;

class GetRecommendationsResponseContainerType
{

    /**
     * @var ListingAnalyzerRecommendationsType $ListingAnalyzerRecommendations
     */
    protected $ListingAnalyzerRecommendations = null;

    /**
     * @var SIFFTASRecommendationsType $SIFFTASRecommendations
     */
    protected $SIFFTASRecommendations = null;

    /**
     * @var PricingRecommendationsType $PricingRecommendations
     */
    protected $PricingRecommendations = null;

    /**
     * @var AttributeRecommendationsType $AttributeRecommendations
     */
    protected $AttributeRecommendations = null;

    /**
     * @var ProductRecommendationsType $ProductRecommendations
     */
    protected $ProductRecommendations = null;

    /**
     * @var string $CorrelationID
     */
    protected $CorrelationID = null;

    /**
     * @var RecommendationsType $Recommendations
     */
    protected $Recommendations = null;

    /**
     * @var ProductListingDetailsType $ProductListingDetails
     */
    protected $ProductListingDetails = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ListingAnalyzerRecommendationsType $ListingAnalyzerRecommendations
     * @param SIFFTASRecommendationsType $SIFFTASRecommendations
     * @param PricingRecommendationsType $PricingRecommendations
     * @param AttributeRecommendationsType $AttributeRecommendations
     * @param ProductRecommendationsType $ProductRecommendations
     * @param string $CorrelationID
     * @param RecommendationsType $Recommendations
     * @param ProductListingDetailsType $ProductListingDetails
     * @param string $Title
     * @param string $any
     */
    public function __construct($ListingAnalyzerRecommendations = null, $SIFFTASRecommendations = null, $PricingRecommendations = null, $AttributeRecommendations = null, $ProductRecommendations = null, $CorrelationID = null, $Recommendations = null, $ProductListingDetails = null, $Title = null, $any = null)
    {
      $this->ListingAnalyzerRecommendations = $ListingAnalyzerRecommendations;
      $this->SIFFTASRecommendations = $SIFFTASRecommendations;
      $this->PricingRecommendations = $PricingRecommendations;
      $this->AttributeRecommendations = $AttributeRecommendations;
      $this->ProductRecommendations = $ProductRecommendations;
      $this->CorrelationID = $CorrelationID;
      $this->Recommendations = $Recommendations;
      $this->ProductListingDetails = $ProductListingDetails;
      $this->Title = $Title;
      $this->any = $any;
    }

    /**
     * @return ListingAnalyzerRecommendationsType
     */
    public function getListingAnalyzerRecommendations()
    {
      return $this->ListingAnalyzerRecommendations;
    }

    /**
     * @param ListingAnalyzerRecommendationsType $ListingAnalyzerRecommendations
     * @return \EbayWsdl\GetRecommendationsResponseContainerType
     */
    public function setListingAnalyzerRecommendations($ListingAnalyzerRecommendations)
    {
      $this->ListingAnalyzerRecommendations = $ListingAnalyzerRecommendations;
      return $this;
    }

    /**
     * @return SIFFTASRecommendationsType
     */
    public function getSIFFTASRecommendations()
    {
      return $this->SIFFTASRecommendations;
    }

    /**
     * @param SIFFTASRecommendationsType $SIFFTASRecommendations
     * @return \EbayWsdl\GetRecommendationsResponseContainerType
     */
    public function setSIFFTASRecommendations($SIFFTASRecommendations)
    {
      $this->SIFFTASRecommendations = $SIFFTASRecommendations;
      return $this;
    }

    /**
     * @return PricingRecommendationsType
     */
    public function getPricingRecommendations()
    {
      return $this->PricingRecommendations;
    }

    /**
     * @param PricingRecommendationsType $PricingRecommendations
     * @return \EbayWsdl\GetRecommendationsResponseContainerType
     */
    public function setPricingRecommendations($PricingRecommendations)
    {
      $this->PricingRecommendations = $PricingRecommendations;
      return $this;
    }

    /**
     * @return AttributeRecommendationsType
     */
    public function getAttributeRecommendations()
    {
      return $this->AttributeRecommendations;
    }

    /**
     * @param AttributeRecommendationsType $AttributeRecommendations
     * @return \EbayWsdl\GetRecommendationsResponseContainerType
     */
    public function setAttributeRecommendations($AttributeRecommendations)
    {
      $this->AttributeRecommendations = $AttributeRecommendations;
      return $this;
    }

    /**
     * @return ProductRecommendationsType
     */
    public function getProductRecommendations()
    {
      return $this->ProductRecommendations;
    }

    /**
     * @param ProductRecommendationsType $ProductRecommendations
     * @return \EbayWsdl\GetRecommendationsResponseContainerType
     */
    public function setProductRecommendations($ProductRecommendations)
    {
      $this->ProductRecommendations = $ProductRecommendations;
      return $this;
    }

    /**
     * @return string
     */
    public function getCorrelationID()
    {
      return $this->CorrelationID;
    }

    /**
     * @param string $CorrelationID
     * @return \EbayWsdl\GetRecommendationsResponseContainerType
     */
    public function setCorrelationID($CorrelationID)
    {
      $this->CorrelationID = $CorrelationID;
      return $this;
    }

    /**
     * @return RecommendationsType
     */
    public function getRecommendations()
    {
      return $this->Recommendations;
    }

    /**
     * @param RecommendationsType $Recommendations
     * @return \EbayWsdl\GetRecommendationsResponseContainerType
     */
    public function setRecommendations($Recommendations)
    {
      $this->Recommendations = $Recommendations;
      return $this;
    }

    /**
     * @return ProductListingDetailsType
     */
    public function getProductListingDetails()
    {
      return $this->ProductListingDetails;
    }

    /**
     * @param ProductListingDetailsType $ProductListingDetails
     * @return \EbayWsdl\GetRecommendationsResponseContainerType
     */
    public function setProductListingDetails($ProductListingDetails)
    {
      $this->ProductListingDetails = $ProductListingDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \EbayWsdl\GetRecommendationsResponseContainerType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
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
     * @return \EbayWsdl\GetRecommendationsResponseContainerType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
