<?php

namespace EbayWsdl;

class ReviewDetailsType
{

    /**
     * @var float $AverageRating
     */
    protected $AverageRating = null;

    /**
     * @var ReviewType[] $Review
     */
    protected $Review = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param float $AverageRating
     * @param ReviewType[] $Review
     * @param string $any
     */
    public function __construct($AverageRating = null, array $Review = null, $any = null)
    {
      $this->AverageRating = $AverageRating;
      $this->Review = $Review;
      $this->any = $any;
    }

    /**
     * @return float
     */
    public function getAverageRating()
    {
      return $this->AverageRating;
    }

    /**
     * @param float $AverageRating
     * @return \EbayWsdl\ReviewDetailsType
     */
    public function setAverageRating($AverageRating)
    {
      $this->AverageRating = $AverageRating;
      return $this;
    }

    /**
     * @return ReviewType[]
     */
    public function getReview()
    {
      return $this->Review;
    }

    /**
     * @param ReviewType[] $Review
     * @return \EbayWsdl\ReviewDetailsType
     */
    public function setReview(array $Review)
    {
      $this->Review = $Review;
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
     * @return \EbayWsdl\ReviewDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
