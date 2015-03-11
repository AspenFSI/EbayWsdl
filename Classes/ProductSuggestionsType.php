<?php

namespace EbayWsdl\Classes;

class ProductSuggestionsType
{

    /**
     * @var ProductSuggestionType[] $ProductSuggestion
     */
    protected $ProductSuggestion = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ProductSuggestionType[] $ProductSuggestion
     * @param string $any
     */
    public function __construct(array $ProductSuggestion = null, $any = null)
    {
      $this->ProductSuggestion = $ProductSuggestion;
      $this->any = $any;
    }

    /**
     * @return ProductSuggestionType[]
     */
    public function getProductSuggestion()
    {
      return $this->ProductSuggestion;
    }

    /**
     * @param ProductSuggestionType[] $ProductSuggestion
     * @return \EbayWsdl\Classes\ProductSuggestionsType
     */
    public function setProductSuggestion(array $ProductSuggestion)
    {
      $this->ProductSuggestion = $ProductSuggestion;
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
     * @return \EbayWsdl\Classes\ProductSuggestionsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
