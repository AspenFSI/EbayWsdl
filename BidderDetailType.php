<?php

namespace EbayWsdl;

class BidderDetailType
{

    /**
     * @var UserIDType $UserID
     */
    protected $UserID = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var int $FeedbackScore
     */
    protected $FeedbackScore = null;

    /**
     * @var int $UniqueNegativeFeedbackCount
     */
    protected $UniqueNegativeFeedbackCount = null;

    /**
     * @var int $UniquePositiveFeedbackCount
     */
    protected $UniquePositiveFeedbackCount = null;

    /**
     * @var int $UniqueNeutralFeedbackCount
     */
    protected $UniqueNeutralFeedbackCount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param UserIDType $UserID
     * @param string $Email
     * @param int $FeedbackScore
     * @param int $UniqueNegativeFeedbackCount
     * @param int $UniquePositiveFeedbackCount
     * @param int $UniqueNeutralFeedbackCount
     * @param string $any
     */
    public function __construct($UserID = null, $Email = null, $FeedbackScore = null, $UniqueNegativeFeedbackCount = null, $UniquePositiveFeedbackCount = null, $UniqueNeutralFeedbackCount = null, $any = null)
    {
      $this->UserID = $UserID;
      $this->Email = $Email;
      $this->FeedbackScore = $FeedbackScore;
      $this->UniqueNegativeFeedbackCount = $UniqueNegativeFeedbackCount;
      $this->UniquePositiveFeedbackCount = $UniquePositiveFeedbackCount;
      $this->UniqueNeutralFeedbackCount = $UniqueNeutralFeedbackCount;
      $this->any = $any;
    }

    /**
     * @return UserIDType
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param UserIDType $UserID
     * @return \EbayWsdl\BidderDetailType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \EbayWsdl\BidderDetailType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackScore()
    {
      return $this->FeedbackScore;
    }

    /**
     * @param int $FeedbackScore
     * @return \EbayWsdl\BidderDetailType
     */
    public function setFeedbackScore($FeedbackScore)
    {
      $this->FeedbackScore = $FeedbackScore;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueNegativeFeedbackCount()
    {
      return $this->UniqueNegativeFeedbackCount;
    }

    /**
     * @param int $UniqueNegativeFeedbackCount
     * @return \EbayWsdl\BidderDetailType
     */
    public function setUniqueNegativeFeedbackCount($UniqueNegativeFeedbackCount)
    {
      $this->UniqueNegativeFeedbackCount = $UniqueNegativeFeedbackCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniquePositiveFeedbackCount()
    {
      return $this->UniquePositiveFeedbackCount;
    }

    /**
     * @param int $UniquePositiveFeedbackCount
     * @return \EbayWsdl\BidderDetailType
     */
    public function setUniquePositiveFeedbackCount($UniquePositiveFeedbackCount)
    {
      $this->UniquePositiveFeedbackCount = $UniquePositiveFeedbackCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueNeutralFeedbackCount()
    {
      return $this->UniqueNeutralFeedbackCount;
    }

    /**
     * @param int $UniqueNeutralFeedbackCount
     * @return \EbayWsdl\BidderDetailType
     */
    public function setUniqueNeutralFeedbackCount($UniqueNeutralFeedbackCount)
    {
      $this->UniqueNeutralFeedbackCount = $UniqueNeutralFeedbackCount;
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
     * @return \EbayWsdl\BidderDetailType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
