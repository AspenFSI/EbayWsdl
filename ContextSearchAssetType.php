<?php

namespace EbayWsdl;

class ContextSearchAssetType
{

    /**
     * @var string $Keyword
     */
    protected $Keyword = null;

    /**
     * @var CategoryType $Category
     */
    protected $Category = null;

    /**
     * @var int $Ranking
     */
    protected $Ranking = null;

    /**
     * @param string $Keyword
     * @param CategoryType $Category
     * @param int $Ranking
     */
    public function __construct($Keyword = null, $Category = null, $Ranking = null)
    {
      $this->Keyword = $Keyword;
      $this->Category = $Category;
      $this->Ranking = $Ranking;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
      return $this->Keyword;
    }

    /**
     * @param string $Keyword
     * @return \EbayWsdl\ContextSearchAssetType
     */
    public function setKeyword($Keyword)
    {
      $this->Keyword = $Keyword;
      return $this;
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
     * @return \EbayWsdl\ContextSearchAssetType
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return int
     */
    public function getRanking()
    {
      return $this->Ranking;
    }

    /**
     * @param int $Ranking
     * @return \EbayWsdl\ContextSearchAssetType
     */
    public function setRanking($Ranking)
    {
      $this->Ranking = $Ranking;
      return $this;
    }

}
