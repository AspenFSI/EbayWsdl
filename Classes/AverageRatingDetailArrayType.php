<?php

namespace EbayWsdl\Classes;

class AverageRatingDetailArrayType
{

    /**
     * @var AverageRatingDetailsType[] $AverageRatingDetails
     */
    protected $AverageRatingDetails = null;

    /**
     * @param AverageRatingDetailsType[] $AverageRatingDetails
     */
    public function __construct(array $AverageRatingDetails = null)
    {
      $this->AverageRatingDetails = $AverageRatingDetails;
    }

    /**
     * @return AverageRatingDetailsType[]
     */
    public function getAverageRatingDetails()
    {
      return $this->AverageRatingDetails;
    }

    /**
     * @param AverageRatingDetailsType[] $AverageRatingDetails
     * @return \EbayWsdl\Classes\AverageRatingDetailArrayType
     */
    public function setAverageRatingDetails(array $AverageRatingDetails)
    {
      $this->AverageRatingDetails = $AverageRatingDetails;
      return $this;
    }

}
