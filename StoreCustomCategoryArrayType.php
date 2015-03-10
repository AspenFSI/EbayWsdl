<?php

namespace EbayWsdl;

class StoreCustomCategoryArrayType
{

    /**
     * @var StoreCustomCategoryType[] $CustomCategory
     */
    protected $CustomCategory = null;

    /**
     * @param StoreCustomCategoryType[] $CustomCategory
     */
    public function __construct(array $CustomCategory = null)
    {
      $this->CustomCategory = $CustomCategory;
    }

    /**
     * @return StoreCustomCategoryType[]
     */
    public function getCustomCategory()
    {
      return $this->CustomCategory;
    }

    /**
     * @param StoreCustomCategoryType[] $CustomCategory
     * @return \EbayWsdl\StoreCustomCategoryArrayType
     */
    public function setCustomCategory(array $CustomCategory)
    {
      $this->CustomCategory = $CustomCategory;
      return $this;
    }

}
