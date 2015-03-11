<?php

namespace EbayWsdl\Classes;

class VerifiedUserRequirementsType
{

    /**
     * @var boolean $VerifiedUser
     */
    protected $VerifiedUser = null;

    /**
     * @var int $MinimumFeedbackScore
     */
    protected $MinimumFeedbackScore = null;

    /**
     * @param boolean $VerifiedUser
     * @param int $MinimumFeedbackScore
     */
    public function __construct($VerifiedUser = null, $MinimumFeedbackScore = null)
    {
      $this->VerifiedUser = $VerifiedUser;
      $this->MinimumFeedbackScore = $MinimumFeedbackScore;
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
     * @return \EbayWsdl\Classes\VerifiedUserRequirementsType
     */
    public function setVerifiedUser($VerifiedUser)
    {
      $this->VerifiedUser = $VerifiedUser;
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
     * @return \EbayWsdl\Classes\VerifiedUserRequirementsType
     */
    public function setMinimumFeedbackScore($MinimumFeedbackScore)
    {
      $this->MinimumFeedbackScore = $MinimumFeedbackScore;
      return $this;
    }

}
