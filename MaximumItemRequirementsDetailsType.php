<?php

namespace EbayWsdl;

class MaximumItemRequirementsDetailsType
{

    /**
     * @var int[] $MaximumItemCount
     */
    protected $MaximumItemCount = null;

    /**
     * @var int[] $MinimumFeedbackScore
     */
    protected $MinimumFeedbackScore = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int[] $MaximumItemCount
     * @param int[] $MinimumFeedbackScore
     * @param string $any
     */
    public function __construct(array $MaximumItemCount = null, array $MinimumFeedbackScore = null, $any = null)
    {
      $this->MaximumItemCount = $MaximumItemCount;
      $this->MinimumFeedbackScore = $MinimumFeedbackScore;
      $this->any = $any;
    }

    /**
     * @return int[]
     */
    public function getMaximumItemCount()
    {
      return $this->MaximumItemCount;
    }

    /**
     * @param int[] $MaximumItemCount
     * @return \EbayWsdl\MaximumItemRequirementsDetailsType
     */
    public function setMaximumItemCount(array $MaximumItemCount)
    {
      $this->MaximumItemCount = $MaximumItemCount;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getMinimumFeedbackScore()
    {
      return $this->MinimumFeedbackScore;
    }

    /**
     * @param int[] $MinimumFeedbackScore
     * @return \EbayWsdl\MaximumItemRequirementsDetailsType
     */
    public function setMinimumFeedbackScore(array $MinimumFeedbackScore)
    {
      $this->MinimumFeedbackScore = $MinimumFeedbackScore;
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
     * @return \EbayWsdl\MaximumItemRequirementsDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
