<?php

namespace EbayWsdl;

class PromotionRuleType
{

    /**
     * @var int $PromotedStoreCategoryID
     */
    protected $PromotedStoreCategoryID = null;

    /**
     * @var string $PromotedeBayCategoryID
     */
    protected $PromotedeBayCategoryID = null;

    /**
     * @var string $PromotedKeywords
     */
    protected $PromotedKeywords = null;

    /**
     * @var ItemIDType $ReferringItemID
     */
    protected $ReferringItemID = null;

    /**
     * @var int $ReferringStoreCategoryID
     */
    protected $ReferringStoreCategoryID = null;

    /**
     * @var string $ReferringeBayCategoryID
     */
    protected $ReferringeBayCategoryID = null;

    /**
     * @var string $ReferringKeywords
     */
    protected $ReferringKeywords = null;

    /**
     * @var PromotionSchemeCodeType $PromotionScheme
     */
    protected $PromotionScheme = null;

    /**
     * @var PromotionMethodCodeType $PromotionMethod
     */
    protected $PromotionMethod = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $PromotedStoreCategoryID
     * @param string $PromotedeBayCategoryID
     * @param string $PromotedKeywords
     * @param ItemIDType $ReferringItemID
     * @param int $ReferringStoreCategoryID
     * @param string $ReferringeBayCategoryID
     * @param string $ReferringKeywords
     * @param PromotionSchemeCodeType $PromotionScheme
     * @param PromotionMethodCodeType $PromotionMethod
     * @param string $any
     */
    public function __construct($PromotedStoreCategoryID = null, $PromotedeBayCategoryID = null, $PromotedKeywords = null, $ReferringItemID = null, $ReferringStoreCategoryID = null, $ReferringeBayCategoryID = null, $ReferringKeywords = null, $PromotionScheme = null, $PromotionMethod = null, $any = null)
    {
      $this->PromotedStoreCategoryID = $PromotedStoreCategoryID;
      $this->PromotedeBayCategoryID = $PromotedeBayCategoryID;
      $this->PromotedKeywords = $PromotedKeywords;
      $this->ReferringItemID = $ReferringItemID;
      $this->ReferringStoreCategoryID = $ReferringStoreCategoryID;
      $this->ReferringeBayCategoryID = $ReferringeBayCategoryID;
      $this->ReferringKeywords = $ReferringKeywords;
      $this->PromotionScheme = $PromotionScheme;
      $this->PromotionMethod = $PromotionMethod;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getPromotedStoreCategoryID()
    {
      return $this->PromotedStoreCategoryID;
    }

    /**
     * @param int $PromotedStoreCategoryID
     * @return \EbayWsdl\PromotionRuleType
     */
    public function setPromotedStoreCategoryID($PromotedStoreCategoryID)
    {
      $this->PromotedStoreCategoryID = $PromotedStoreCategoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotedeBayCategoryID()
    {
      return $this->PromotedeBayCategoryID;
    }

    /**
     * @param string $PromotedeBayCategoryID
     * @return \EbayWsdl\PromotionRuleType
     */
    public function setPromotedeBayCategoryID($PromotedeBayCategoryID)
    {
      $this->PromotedeBayCategoryID = $PromotedeBayCategoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotedKeywords()
    {
      return $this->PromotedKeywords;
    }

    /**
     * @param string $PromotedKeywords
     * @return \EbayWsdl\PromotionRuleType
     */
    public function setPromotedKeywords($PromotedKeywords)
    {
      $this->PromotedKeywords = $PromotedKeywords;
      return $this;
    }

    /**
     * @return ItemIDType
     */
    public function getReferringItemID()
    {
      return $this->ReferringItemID;
    }

    /**
     * @param ItemIDType $ReferringItemID
     * @return \EbayWsdl\PromotionRuleType
     */
    public function setReferringItemID($ReferringItemID)
    {
      $this->ReferringItemID = $ReferringItemID;
      return $this;
    }

    /**
     * @return int
     */
    public function getReferringStoreCategoryID()
    {
      return $this->ReferringStoreCategoryID;
    }

    /**
     * @param int $ReferringStoreCategoryID
     * @return \EbayWsdl\PromotionRuleType
     */
    public function setReferringStoreCategoryID($ReferringStoreCategoryID)
    {
      $this->ReferringStoreCategoryID = $ReferringStoreCategoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferringeBayCategoryID()
    {
      return $this->ReferringeBayCategoryID;
    }

    /**
     * @param string $ReferringeBayCategoryID
     * @return \EbayWsdl\PromotionRuleType
     */
    public function setReferringeBayCategoryID($ReferringeBayCategoryID)
    {
      $this->ReferringeBayCategoryID = $ReferringeBayCategoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferringKeywords()
    {
      return $this->ReferringKeywords;
    }

    /**
     * @param string $ReferringKeywords
     * @return \EbayWsdl\PromotionRuleType
     */
    public function setReferringKeywords($ReferringKeywords)
    {
      $this->ReferringKeywords = $ReferringKeywords;
      return $this;
    }

    /**
     * @return PromotionSchemeCodeType
     */
    public function getPromotionScheme()
    {
      return $this->PromotionScheme;
    }

    /**
     * @param PromotionSchemeCodeType $PromotionScheme
     * @return \EbayWsdl\PromotionRuleType
     */
    public function setPromotionScheme($PromotionScheme)
    {
      $this->PromotionScheme = $PromotionScheme;
      return $this;
    }

    /**
     * @return PromotionMethodCodeType
     */
    public function getPromotionMethod()
    {
      return $this->PromotionMethod;
    }

    /**
     * @param PromotionMethodCodeType $PromotionMethod
     * @return \EbayWsdl\PromotionRuleType
     */
    public function setPromotionMethod($PromotionMethod)
    {
      $this->PromotionMethod = $PromotionMethod;
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
     * @return \EbayWsdl\PromotionRuleType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
