<?php

namespace EbayWsdl;

class ItemRatingDetailsType
{

    /**
     * @var FeedbackRatingDetailCodeType $RatingDetail
     */
    protected $RatingDetail = null;

    /**
     * @var int $Rating
     */
    protected $Rating = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param FeedbackRatingDetailCodeType $RatingDetail
     * @param int $Rating
     * @param string $any
     */
    public function __construct($RatingDetail = null, $Rating = null, $any = null)
    {
      $this->RatingDetail = $RatingDetail;
      $this->Rating = $Rating;
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
     * @return \EbayWsdl\ItemRatingDetailsType
     */
    public function setRatingDetail($RatingDetail)
    {
      $this->RatingDetail = $RatingDetail;
      return $this;
    }

    /**
     * @return int
     */
    public function getRating()
    {
      return $this->Rating;
    }

    /**
     * @param int $Rating
     * @return \EbayWsdl\ItemRatingDetailsType
     */
    public function setRating($Rating)
    {
      $this->Rating = $Rating;
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
     * @return \EbayWsdl\ItemRatingDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
