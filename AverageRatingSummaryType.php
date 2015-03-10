<?php

namespace EbayWsdl;

class AverageRatingSummaryType
{

    /**
     * @var FeedbackSummaryPeriodCodeType $FeedbackSummaryPeriod
     */
    protected $FeedbackSummaryPeriod = null;

    /**
     * @var AverageRatingDetailsType[] $AverageRatingDetails
     */
    protected $AverageRatingDetails = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param FeedbackSummaryPeriodCodeType $FeedbackSummaryPeriod
     * @param AverageRatingDetailsType[] $AverageRatingDetails
     * @param string $any
     */
    public function __construct($FeedbackSummaryPeriod = null, array $AverageRatingDetails = null, $any = null)
    {
      $this->FeedbackSummaryPeriod = $FeedbackSummaryPeriod;
      $this->AverageRatingDetails = $AverageRatingDetails;
      $this->any = $any;
    }

    /**
     * @return FeedbackSummaryPeriodCodeType
     */
    public function getFeedbackSummaryPeriod()
    {
      return $this->FeedbackSummaryPeriod;
    }

    /**
     * @param FeedbackSummaryPeriodCodeType $FeedbackSummaryPeriod
     * @return \EbayWsdl\AverageRatingSummaryType
     */
    public function setFeedbackSummaryPeriod($FeedbackSummaryPeriod)
    {
      $this->FeedbackSummaryPeriod = $FeedbackSummaryPeriod;
      return $this;
    }

    /**
     * @return AverageRatingDetailsType[]
     */
    public function getAverageRatingDetails()
    {
      return $this->AverageRatingDetails;
    }

    /**
     * @param AverageRatingDetailsType[] $AverageRatingDetails
     * @return \EbayWsdl\AverageRatingSummaryType
     */
    public function setAverageRatingDetails(array $AverageRatingDetails)
    {
      $this->AverageRatingDetails = $AverageRatingDetails;
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
     * @return \EbayWsdl\AverageRatingSummaryType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
