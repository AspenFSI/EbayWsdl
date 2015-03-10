<?php

namespace EbayWsdl;

class NameRecommendationType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var RecommendationValidationRulesType $ValidationRules
     */
    protected $ValidationRules = null;

    /**
     * @var ValueRecommendationType[] $ValueRecommendation
     */
    protected $ValueRecommendation = null;

    /**
     * @var anyURI $HelpURL
     */
    protected $HelpURL = null;

    /**
     * @var ItemSpecificSourceCodeType $Source
     */
    protected $Source = null;

    /**
     * @var string $HelpText
     */
    protected $HelpText = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Name
     * @param RecommendationValidationRulesType $ValidationRules
     * @param ValueRecommendationType[] $ValueRecommendation
     * @param anyURI $HelpURL
     * @param ItemSpecificSourceCodeType $Source
     * @param string $HelpText
     * @param string $any
     */
    public function __construct($Name = null, $ValidationRules = null, array $ValueRecommendation = null, $HelpURL = null, $Source = null, $HelpText = null, $any = null)
    {
      $this->Name = $Name;
      $this->ValidationRules = $ValidationRules;
      $this->ValueRecommendation = $ValueRecommendation;
      $this->HelpURL = $HelpURL;
      $this->Source = $Source;
      $this->HelpText = $HelpText;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \EbayWsdl\NameRecommendationType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \EbayWsdl\NameRecommendationType
     */
    public function setValidationRules($ValidationRules)
    {
      $this->ValidationRules = $ValidationRules;
      return $this;
    }

    /**
     * @return ValueRecommendationType[]
     */
    public function getValueRecommendation()
    {
      return $this->ValueRecommendation;
    }

    /**
     * @param ValueRecommendationType[] $ValueRecommendation
     * @return \EbayWsdl\NameRecommendationType
     */
    public function setValueRecommendation(array $ValueRecommendation)
    {
      $this->ValueRecommendation = $ValueRecommendation;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getHelpURL()
    {
      return $this->HelpURL;
    }

    /**
     * @param anyURI $HelpURL
     * @return \EbayWsdl\NameRecommendationType
     */
    public function setHelpURL($HelpURL)
    {
      $this->HelpURL = $HelpURL;
      return $this;
    }

    /**
     * @return ItemSpecificSourceCodeType
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param ItemSpecificSourceCodeType $Source
     * @return \EbayWsdl\NameRecommendationType
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return string
     */
    public function getHelpText()
    {
      return $this->HelpText;
    }

    /**
     * @param string $HelpText
     * @return \EbayWsdl\NameRecommendationType
     */
    public function setHelpText($HelpText)
    {
      $this->HelpText = $HelpText;
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
     * @return \EbayWsdl\NameRecommendationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
