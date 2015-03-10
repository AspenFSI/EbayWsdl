<?php

namespace EbayWsdl;

class GetRecommendationsRequestContainerType
{

    /**
     * @var ListingFlowCodeType $ListingFlow
     */
    protected $ListingFlow = null;

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

    /**
     * @var RecommendationEngineCodeType[] $RecommendationEngine
     */
    protected $RecommendationEngine = null;

    /**
     * @var string $Query
     */
    protected $Query = null;

    /**
     * @var string $CorrelationID
     */
    protected $CorrelationID = null;

    /**
     * @var string[] $DeletedField
     */
    protected $DeletedField = null;

    /**
     * @var boolean $ExcludeRelationships
     */
    protected $ExcludeRelationships = null;

    /**
     * @var boolean $IncludeConfidence
     */
    protected $IncludeConfidence = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ListingFlowCodeType $ListingFlow
     * @param ItemType $Item
     * @param RecommendationEngineCodeType[] $RecommendationEngine
     * @param string $Query
     * @param string $CorrelationID
     * @param string[] $DeletedField
     * @param boolean $ExcludeRelationships
     * @param boolean $IncludeConfidence
     * @param string $any
     */
    public function __construct($ListingFlow = null, $Item = null, array $RecommendationEngine = null, $Query = null, $CorrelationID = null, array $DeletedField = null, $ExcludeRelationships = null, $IncludeConfidence = null, $any = null)
    {
      $this->ListingFlow = $ListingFlow;
      $this->Item = $Item;
      $this->RecommendationEngine = $RecommendationEngine;
      $this->Query = $Query;
      $this->CorrelationID = $CorrelationID;
      $this->DeletedField = $DeletedField;
      $this->ExcludeRelationships = $ExcludeRelationships;
      $this->IncludeConfidence = $IncludeConfidence;
      $this->any = $any;
    }

    /**
     * @return ListingFlowCodeType
     */
    public function getListingFlow()
    {
      return $this->ListingFlow;
    }

    /**
     * @param ListingFlowCodeType $ListingFlow
     * @return \EbayWsdl\GetRecommendationsRequestContainerType
     */
    public function setListingFlow($ListingFlow)
    {
      $this->ListingFlow = $ListingFlow;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ItemType $Item
     * @return \EbayWsdl\GetRecommendationsRequestContainerType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return RecommendationEngineCodeType[]
     */
    public function getRecommendationEngine()
    {
      return $this->RecommendationEngine;
    }

    /**
     * @param RecommendationEngineCodeType[] $RecommendationEngine
     * @return \EbayWsdl\GetRecommendationsRequestContainerType
     */
    public function setRecommendationEngine(array $RecommendationEngine)
    {
      $this->RecommendationEngine = $RecommendationEngine;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
      return $this->Query;
    }

    /**
     * @param string $Query
     * @return \EbayWsdl\GetRecommendationsRequestContainerType
     */
    public function setQuery($Query)
    {
      $this->Query = $Query;
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
     * @return \EbayWsdl\GetRecommendationsRequestContainerType
     */
    public function setCorrelationID($CorrelationID)
    {
      $this->CorrelationID = $CorrelationID;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDeletedField()
    {
      return $this->DeletedField;
    }

    /**
     * @param string[] $DeletedField
     * @return \EbayWsdl\GetRecommendationsRequestContainerType
     */
    public function setDeletedField(array $DeletedField)
    {
      $this->DeletedField = $DeletedField;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeRelationships()
    {
      return $this->ExcludeRelationships;
    }

    /**
     * @param boolean $ExcludeRelationships
     * @return \EbayWsdl\GetRecommendationsRequestContainerType
     */
    public function setExcludeRelationships($ExcludeRelationships)
    {
      $this->ExcludeRelationships = $ExcludeRelationships;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeConfidence()
    {
      return $this->IncludeConfidence;
    }

    /**
     * @param boolean $IncludeConfidence
     * @return \EbayWsdl\GetRecommendationsRequestContainerType
     */
    public function setIncludeConfidence($IncludeConfidence)
    {
      $this->IncludeConfidence = $IncludeConfidence;
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
     * @return \EbayWsdl\GetRecommendationsRequestContainerType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
