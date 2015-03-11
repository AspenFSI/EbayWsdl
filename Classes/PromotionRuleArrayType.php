<?php

namespace EbayWsdl\Classes;

class PromotionRuleArrayType
{

    /**
     * @var PromotionRuleType[] $PromotionRule
     */
    protected $PromotionRule = null;

    /**
     * @param PromotionRuleType[] $PromotionRule
     */
    public function __construct(array $PromotionRule = null)
    {
      $this->PromotionRule = $PromotionRule;
    }

    /**
     * @return PromotionRuleType[]
     */
    public function getPromotionRule()
    {
      return $this->PromotionRule;
    }

    /**
     * @param PromotionRuleType[] $PromotionRule
     * @return \EbayWsdl\Classes\PromotionRuleArrayType
     */
    public function setPromotionRule(array $PromotionRule)
    {
      $this->PromotionRule = $PromotionRule;
      return $this;
    }

}
