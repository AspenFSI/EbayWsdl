<?php

namespace EbayWsdl\Classes;

class MaximumItemRequirementsType
{

    /**
     * @var int $MaximumItemCount
     */
    protected $MaximumItemCount = null;

    /**
     * @var int $MinimumFeedbackScore
     */
    protected $MinimumFeedbackScore = null;

    /**
     * @param int $MaximumItemCount
     * @param int $MinimumFeedbackScore
     */
    public function __construct($MaximumItemCount = null, $MinimumFeedbackScore = null)
    {
      $this->MaximumItemCount = $MaximumItemCount;
      $this->MinimumFeedbackScore = $MinimumFeedbackScore;
    }

    /**
     * @return int
     */
    public function getMaximumItemCount()
    {
      return $this->MaximumItemCount;
    }

    /**
     * @param int $MaximumItemCount
     * @return \EbayWsdl\Classes\MaximumItemRequirementsType
     */
    public function setMaximumItemCount($MaximumItemCount)
    {
      $this->MaximumItemCount = $MaximumItemCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumFeedbackScore()
    {
      return $this->MinimumFeedbackScore;
    }

    /**
     * @param int $MinimumFeedbackScore
     * @return \EbayWsdl\Classes\MaximumItemRequirementsType
     */
    public function setMinimumFeedbackScore($MinimumFeedbackScore)
    {
      $this->MinimumFeedbackScore = $MinimumFeedbackScore;
      return $this;
    }

}
