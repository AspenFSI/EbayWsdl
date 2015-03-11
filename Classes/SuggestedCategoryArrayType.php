<?php

namespace EbayWsdl\Classes;

class SuggestedCategoryArrayType
{

    /**
     * @var SuggestedCategoryType[] $SuggestedCategory
     */
    protected $SuggestedCategory = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SuggestedCategoryType[] $SuggestedCategory
     * @param string $any
     */
    public function __construct(array $SuggestedCategory = null, $any = null)
    {
      $this->SuggestedCategory = $SuggestedCategory;
      $this->any = $any;
    }

    /**
     * @return SuggestedCategoryType[]
     */
    public function getSuggestedCategory()
    {
      return $this->SuggestedCategory;
    }

    /**
     * @param SuggestedCategoryType[] $SuggestedCategory
     * @return \EbayWsdl\Classes\SuggestedCategoryArrayType
     */
    public function setSuggestedCategory(array $SuggestedCategory)
    {
      $this->SuggestedCategory = $SuggestedCategory;
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
     * @return \EbayWsdl\Classes\SuggestedCategoryArrayType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
