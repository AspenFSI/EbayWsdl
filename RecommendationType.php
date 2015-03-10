<?php

namespace EbayWsdl;

class RecommendationType
{

    /**
     * @var string $FieldGroup
     */
    protected $FieldGroup = null;

    /**
     * @var string $FieldName
     */
    protected $FieldName = null;

    /**
     * @var string $RecommendationCode
     */
    protected $RecommendationCode = null;

    /**
     * @var string[] $RecommendedValue
     */
    protected $RecommendedValue = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $FieldGroup
     * @param string $FieldName
     * @param string $RecommendationCode
     * @param string[] $RecommendedValue
     * @param string $Message
     * @param string $any
     */
    public function __construct($FieldGroup = null, $FieldName = null, $RecommendationCode = null, array $RecommendedValue = null, $Message = null, $any = null)
    {
      $this->FieldGroup = $FieldGroup;
      $this->FieldName = $FieldName;
      $this->RecommendationCode = $RecommendationCode;
      $this->RecommendedValue = $RecommendedValue;
      $this->Message = $Message;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getFieldGroup()
    {
      return $this->FieldGroup;
    }

    /**
     * @param string $FieldGroup
     * @return \EbayWsdl\RecommendationType
     */
    public function setFieldGroup($FieldGroup)
    {
      $this->FieldGroup = $FieldGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
      return $this->FieldName;
    }

    /**
     * @param string $FieldName
     * @return \EbayWsdl\RecommendationType
     */
    public function setFieldName($FieldName)
    {
      $this->FieldName = $FieldName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecommendationCode()
    {
      return $this->RecommendationCode;
    }

    /**
     * @param string $RecommendationCode
     * @return \EbayWsdl\RecommendationType
     */
    public function setRecommendationCode($RecommendationCode)
    {
      $this->RecommendationCode = $RecommendationCode;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRecommendedValue()
    {
      return $this->RecommendedValue;
    }

    /**
     * @param string[] $RecommendedValue
     * @return \EbayWsdl\RecommendationType
     */
    public function setRecommendedValue(array $RecommendedValue)
    {
      $this->RecommendedValue = $RecommendedValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \EbayWsdl\RecommendationType
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
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
     * @return \EbayWsdl\RecommendationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
