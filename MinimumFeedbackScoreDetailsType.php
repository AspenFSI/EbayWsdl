<?php

namespace EbayWsdl;

class MinimumFeedbackScoreDetailsType
{

    /**
     * @var int[] $FeedbackScore
     */
    protected $FeedbackScore = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int[] $FeedbackScore
     * @param string $any
     */
    public function __construct(array $FeedbackScore = null, $any = null)
    {
      $this->FeedbackScore = $FeedbackScore;
      $this->any = $any;
    }

    /**
     * @return int[]
     */
    public function getFeedbackScore()
    {
      return $this->FeedbackScore;
    }

    /**
     * @param int[] $FeedbackScore
     * @return \EbayWsdl\MinimumFeedbackScoreDetailsType
     */
    public function setFeedbackScore(array $FeedbackScore)
    {
      $this->FeedbackScore = $FeedbackScore;
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
     * @return \EbayWsdl\MinimumFeedbackScoreDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
