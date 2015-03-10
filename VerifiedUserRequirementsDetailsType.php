<?php

namespace EbayWsdl;

class VerifiedUserRequirementsDetailsType
{

    /**
     * @var boolean $VerifiedUser
     */
    protected $VerifiedUser = null;

    /**
     * @var int[] $FeedbackScore
     */
    protected $FeedbackScore = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $VerifiedUser
     * @param int[] $FeedbackScore
     * @param string $any
     */
    public function __construct($VerifiedUser = null, array $FeedbackScore = null, $any = null)
    {
      $this->VerifiedUser = $VerifiedUser;
      $this->FeedbackScore = $FeedbackScore;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getVerifiedUser()
    {
      return $this->VerifiedUser;
    }

    /**
     * @param boolean $VerifiedUser
     * @return \EbayWsdl\VerifiedUserRequirementsDetailsType
     */
    public function setVerifiedUser($VerifiedUser)
    {
      $this->VerifiedUser = $VerifiedUser;
      return $this;
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
     * @return \EbayWsdl\VerifiedUserRequirementsDetailsType
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
     * @return \EbayWsdl\VerifiedUserRequirementsDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
