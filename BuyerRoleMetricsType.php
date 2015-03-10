<?php

namespace EbayWsdl;

class BuyerRoleMetricsType
{

    /**
     * @var int $PositiveFeedbackLeftCount
     */
    protected $PositiveFeedbackLeftCount = null;

    /**
     * @var int $NegativeFeedbackLeftCount
     */
    protected $NegativeFeedbackLeftCount = null;

    /**
     * @var int $NeutralFeedbackLeftCount
     */
    protected $NeutralFeedbackLeftCount = null;

    /**
     * @var float $FeedbackLeftPercent
     */
    protected $FeedbackLeftPercent = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $PositiveFeedbackLeftCount
     * @param int $NegativeFeedbackLeftCount
     * @param int $NeutralFeedbackLeftCount
     * @param float $FeedbackLeftPercent
     * @param string $any
     */
    public function __construct($PositiveFeedbackLeftCount = null, $NegativeFeedbackLeftCount = null, $NeutralFeedbackLeftCount = null, $FeedbackLeftPercent = null, $any = null)
    {
      $this->PositiveFeedbackLeftCount = $PositiveFeedbackLeftCount;
      $this->NegativeFeedbackLeftCount = $NegativeFeedbackLeftCount;
      $this->NeutralFeedbackLeftCount = $NeutralFeedbackLeftCount;
      $this->FeedbackLeftPercent = $FeedbackLeftPercent;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getPositiveFeedbackLeftCount()
    {
      return $this->PositiveFeedbackLeftCount;
    }

    /**
     * @param int $PositiveFeedbackLeftCount
     * @return \EbayWsdl\BuyerRoleMetricsType
     */
    public function setPositiveFeedbackLeftCount($PositiveFeedbackLeftCount)
    {
      $this->PositiveFeedbackLeftCount = $PositiveFeedbackLeftCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getNegativeFeedbackLeftCount()
    {
      return $this->NegativeFeedbackLeftCount;
    }

    /**
     * @param int $NegativeFeedbackLeftCount
     * @return \EbayWsdl\BuyerRoleMetricsType
     */
    public function setNegativeFeedbackLeftCount($NegativeFeedbackLeftCount)
    {
      $this->NegativeFeedbackLeftCount = $NegativeFeedbackLeftCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getNeutralFeedbackLeftCount()
    {
      return $this->NeutralFeedbackLeftCount;
    }

    /**
     * @param int $NeutralFeedbackLeftCount
     * @return \EbayWsdl\BuyerRoleMetricsType
     */
    public function setNeutralFeedbackLeftCount($NeutralFeedbackLeftCount)
    {
      $this->NeutralFeedbackLeftCount = $NeutralFeedbackLeftCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getFeedbackLeftPercent()
    {
      return $this->FeedbackLeftPercent;
    }

    /**
     * @param float $FeedbackLeftPercent
     * @return \EbayWsdl\BuyerRoleMetricsType
     */
    public function setFeedbackLeftPercent($FeedbackLeftPercent)
    {
      $this->FeedbackLeftPercent = $FeedbackLeftPercent;
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
     * @return \EbayWsdl\BuyerRoleMetricsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
