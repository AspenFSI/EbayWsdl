<?php

namespace EbayWsdl\Classes;

class SuggestedCategoryType
{

    /**
     * @var CategoryType $Category
     */
    protected $Category = null;

    /**
     * @var int $PercentItemFound
     */
    protected $PercentItemFound = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param CategoryType $Category
     * @param int $PercentItemFound
     * @param string $any
     */
    public function __construct($Category = null, $PercentItemFound = null, $any = null)
    {
      $this->Category = $Category;
      $this->PercentItemFound = $PercentItemFound;
      $this->any = $any;
    }

    /**
     * @return CategoryType
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param CategoryType $Category
     * @return \EbayWsdl\Classes\SuggestedCategoryType
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return int
     */
    public function getPercentItemFound()
    {
      return $this->PercentItemFound;
    }

    /**
     * @param int $PercentItemFound
     * @return \EbayWsdl\Classes\SuggestedCategoryType
     */
    public function setPercentItemFound($PercentItemFound)
    {
      $this->PercentItemFound = $PercentItemFound;
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
     * @return \EbayWsdl\Classes\SuggestedCategoryType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
