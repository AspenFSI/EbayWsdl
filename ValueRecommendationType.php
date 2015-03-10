<?php

namespace EbayWsdl;

class ValueRecommendationType
{

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var RecommendationValidationRulesType $ValidationRules
     */
    protected $ValidationRules = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Value
     * @param RecommendationValidationRulesType $ValidationRules
     * @param string $any
     */
    public function __construct($Value = null, $ValidationRules = null, $any = null)
    {
      $this->Value = $Value;
      $this->ValidationRules = $ValidationRules;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \EbayWsdl\ValueRecommendationType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return RecommendationValidationRulesType
     */
    public function getValidationRules()
    {
      return $this->ValidationRules;
    }

    /**
     * @param RecommendationValidationRulesType $ValidationRules
     * @return \EbayWsdl\ValueRecommendationType
     */
    public function setValidationRules($ValidationRules)
    {
      $this->ValidationRules = $ValidationRules;
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
     * @return \EbayWsdl\ValueRecommendationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
