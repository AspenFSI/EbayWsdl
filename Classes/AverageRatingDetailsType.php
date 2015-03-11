<?php

namespace EbayWsdl\Classes;

class AverageRatingDetailsType
{

    /**
     * @var FeedbackRatingDetailCodeType $RatingDetail
     */
    protected $RatingDetail = null;

    /**
     * @var float $Rating
     */
    protected $Rating = null;

    /**
     * @var int $RatingCount
     */
    protected $RatingCount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param FeedbackRatingDetailCodeType $RatingDetail
     * @param float $Rating
     * @param int $RatingCount
     * @param string $any
     */
    public function __construct($RatingDetail = null, $Rating = null, $RatingCount = null, $any = null)
    {
      $this->RatingDetail = $RatingDetail;
      $this->Rating = $Rating;
      $this->RatingCount = $RatingCount;
      $this->any = $any;
    }

    /**
     * @return FeedbackRatingDetailCodeType
     */
    public function getRatingDetail()
    {
      return $this->RatingDetail;
    }

    /**
     * @param FeedbackRatingDetailCodeType $RatingDetail
     * @return \EbayWsdl\Classes\AverageRatingDetailsType
     */
    public function setRatingDetail($RatingDetail)
    {
      $this->RatingDetail = $RatingDetail;
      return $this;
    }

    /**
     * @return float
     */
    public function getRating()
    {
      return $this->Rating;
    }

    /**
     * @param float $Rating
     * @return \EbayWsdl\Classes\AverageRatingDetailsType
     */
    public function setRating($Rating)
    {
      $this->Rating = $Rating;
      return $this;
    }

    /**
     * @return int
     */
    public function getRatingCount()
    {
      return $this->RatingCount;
    }

    /**
     * @param int $RatingCount
     * @return \EbayWsdl\Classes\AverageRatingDetailsType
     */
    public function setRatingCount($RatingCount)
    {
      $this->RatingCount = $RatingCount;
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
     * @return \EbayWsdl\Classes\AverageRatingDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
