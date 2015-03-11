<?php

namespace EbayWsdl\Classes;

class RecommendationsType
{

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var NameRecommendationType[] $NameRecommendation
     */
    protected $NameRecommendation = null;

    /**
     * @var boolean $Updated
     */
    protected $Updated = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $CategoryID
     * @param NameRecommendationType[] $NameRecommendation
     * @param boolean $Updated
     * @param string $any
     */
    public function __construct($CategoryID = null, array $NameRecommendation = null, $Updated = null, $any = null)
    {
      $this->CategoryID = $CategoryID;
      $this->NameRecommendation = $NameRecommendation;
      $this->Updated = $Updated;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param string $CategoryID
     * @return \EbayWsdl\Classes\RecommendationsType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return NameRecommendationType[]
     */
    public function getNameRecommendation()
    {
      return $this->NameRecommendation;
    }

    /**
     * @param NameRecommendationType[] $NameRecommendation
     * @return \EbayWsdl\Classes\RecommendationsType
     */
    public function setNameRecommendation(array $NameRecommendation)
    {
      $this->NameRecommendation = $NameRecommendation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdated()
    {
      return $this->Updated;
    }

    /**
     * @param boolean $Updated
     * @return \EbayWsdl\Classes\RecommendationsType
     */
    public function setUpdated($Updated)
    {
      $this->Updated = $Updated;
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
     * @return \EbayWsdl\Classes\RecommendationsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
