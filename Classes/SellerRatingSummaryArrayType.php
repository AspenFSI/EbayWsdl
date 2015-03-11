<?php

namespace EbayWsdl\Classes;

class SellerRatingSummaryArrayType
{

    /**
     * @var AverageRatingSummaryType[] $AverageRatingSummary
     */
    protected $AverageRatingSummary = null;

    /**
     * @param AverageRatingSummaryType[] $AverageRatingSummary
     */
    public function __construct(array $AverageRatingSummary = null)
    {
      $this->AverageRatingSummary = $AverageRatingSummary;
    }

    /**
     * @return AverageRatingSummaryType[]
     */
    public function getAverageRatingSummary()
    {
      return $this->AverageRatingSummary;
    }

    /**
     * @param AverageRatingSummaryType[] $AverageRatingSummary
     * @return \EbayWsdl\Classes\SellerRatingSummaryArrayType
     */
    public function setAverageRatingSummary(array $AverageRatingSummary)
    {
      $this->AverageRatingSummary = $AverageRatingSummary;
      return $this;
    }

}
