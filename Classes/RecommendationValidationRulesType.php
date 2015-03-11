<?php

namespace EbayWsdl\Classes;

class RecommendationValidationRulesType
{

    /**
     * @var ValueTypeCodeType $ValueType
     */
    protected $ValueType = null;

    /**
     * @var int $MinValues
     */
    protected $MinValues = null;

    /**
     * @var int $MaxValues
     */
    protected $MaxValues = null;

    /**
     * @var SelectionModeCodeType $SelectionMode
     */
    protected $SelectionMode = null;

    /**
     * @var int $Confidence
     */
    protected $Confidence = null;

    /**
     * @var NameValueRelationshipType[] $Relationship
     */
    protected $Relationship = null;

    /**
     * @var VariationPictureRuleCodeType $VariationPicture
     */
    protected $VariationPicture = null;

    /**
     * @var VariationSpecificsRuleCodeType $VariationSpecifics
     */
    protected $VariationSpecifics = null;

    /**
     * @var ValueFormatCodeType $ValueFormat
     */
    protected $ValueFormat = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ValueTypeCodeType $ValueType
     * @param int $MinValues
     * @param int $MaxValues
     * @param SelectionModeCodeType $SelectionMode
     * @param int $Confidence
     * @param NameValueRelationshipType[] $Relationship
     * @param VariationPictureRuleCodeType $VariationPicture
     * @param VariationSpecificsRuleCodeType $VariationSpecifics
     * @param ValueFormatCodeType $ValueFormat
     * @param string $any
     */
    public function __construct($ValueType = null, $MinValues = null, $MaxValues = null, $SelectionMode = null, $Confidence = null, array $Relationship = null, $VariationPicture = null, $VariationSpecifics = null, $ValueFormat = null, $any = null)
    {
      $this->ValueType = $ValueType;
      $this->MinValues = $MinValues;
      $this->MaxValues = $MaxValues;
      $this->SelectionMode = $SelectionMode;
      $this->Confidence = $Confidence;
      $this->Relationship = $Relationship;
      $this->VariationPicture = $VariationPicture;
      $this->VariationSpecifics = $VariationSpecifics;
      $this->ValueFormat = $ValueFormat;
      $this->any = $any;
    }

    /**
     * @return ValueTypeCodeType
     */
    public function getValueType()
    {
      return $this->ValueType;
    }

    /**
     * @param ValueTypeCodeType $ValueType
     * @return \EbayWsdl\Classes\RecommendationValidationRulesType
     */
    public function setValueType($ValueType)
    {
      $this->ValueType = $ValueType;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinValues()
    {
      return $this->MinValues;
    }

    /**
     * @param int $MinValues
     * @return \EbayWsdl\Classes\RecommendationValidationRulesType
     */
    public function setMinValues($MinValues)
    {
      $this->MinValues = $MinValues;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxValues()
    {
      return $this->MaxValues;
    }

    /**
     * @param int $MaxValues
     * @return \EbayWsdl\Classes\RecommendationValidationRulesType
     */
    public function setMaxValues($MaxValues)
    {
      $this->MaxValues = $MaxValues;
      return $this;
    }

    /**
     * @return SelectionModeCodeType
     */
    public function getSelectionMode()
    {
      return $this->SelectionMode;
    }

    /**
     * @param SelectionModeCodeType $SelectionMode
     * @return \EbayWsdl\Classes\RecommendationValidationRulesType
     */
    public function setSelectionMode($SelectionMode)
    {
      $this->SelectionMode = $SelectionMode;
      return $this;
    }

    /**
     * @return int
     */
    public function getConfidence()
    {
      return $this->Confidence;
    }

    /**
     * @param int $Confidence
     * @return \EbayWsdl\Classes\RecommendationValidationRulesType
     */
    public function setConfidence($Confidence)
    {
      $this->Confidence = $Confidence;
      return $this;
    }

    /**
     * @return NameValueRelationshipType[]
     */
    public function getRelationship()
    {
      return $this->Relationship;
    }

    /**
     * @param NameValueRelationshipType[] $Relationship
     * @return \EbayWsdl\Classes\RecommendationValidationRulesType
     */
    public function setRelationship(array $Relationship)
    {
      $this->Relationship = $Relationship;
      return $this;
    }

    /**
     * @return VariationPictureRuleCodeType
     */
    public function getVariationPicture()
    {
      return $this->VariationPicture;
    }

    /**
     * @param VariationPictureRuleCodeType $VariationPicture
     * @return \EbayWsdl\Classes\RecommendationValidationRulesType
     */
    public function setVariationPicture($VariationPicture)
    {
      $this->VariationPicture = $VariationPicture;
      return $this;
    }

    /**
     * @return VariationSpecificsRuleCodeType
     */
    public function getVariationSpecifics()
    {
      return $this->VariationSpecifics;
    }

    /**
     * @param VariationSpecificsRuleCodeType $VariationSpecifics
     * @return \EbayWsdl\Classes\RecommendationValidationRulesType
     */
    public function setVariationSpecifics($VariationSpecifics)
    {
      $this->VariationSpecifics = $VariationSpecifics;
      return $this;
    }

    /**
     * @return ValueFormatCodeType
     */
    public function getValueFormat()
    {
      return $this->ValueFormat;
    }

    /**
     * @param ValueFormatCodeType $ValueFormat
     * @return \EbayWsdl\Classes\RecommendationValidationRulesType
     */
    public function setValueFormat($ValueFormat)
    {
      $this->ValueFormat = $ValueFormat;
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
     * @return \EbayWsdl\Classes\RecommendationValidationRulesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
