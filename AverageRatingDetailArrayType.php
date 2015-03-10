<?php

namespace EbayWsdl;

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
     * @return \EbayWsdl\AverageRatingDetailArrayType
     */
    public function setAverageRatingDetails(array $AverageRatingDetails)
    {
      $this->AverageRatingDetails = $AverageRatingDetails;
      return $this;
    }

}
