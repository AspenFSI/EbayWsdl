<?php

namespace EbayWsdl;

class AddItemResponseContainerType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var FeesType $Fees
     */
    protected $Fees = null;

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var string $Category2ID
     */
    protected $Category2ID = null;

    /**
     * @var string $CorrelationID
     */
    protected $CorrelationID = null;

    /**
     * @var ErrorType[] $Errors
     */
    protected $Errors = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var DiscountReasonCodeType[] $DiscountReason
     */
    protected $DiscountReason = null;

    /**
     * @var ListingRecommendationsType $ListingRecommendations
     */
    protected $ListingRecommendations = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemIDType $ItemID
     * @param \DateTime $StartTime
     * @param \DateTime $EndTime
     * @param FeesType $Fees
     * @param string $CategoryID
     * @param string $Category2ID
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Message
     * @param DiscountReasonCodeType[] $DiscountReason
     * @param ListingRecommendationsType $ListingRecommendations
     * @param string $any
     */
    public function __construct($ItemID = null, \DateTime $StartTime = null, \DateTime $EndTime = null, $Fees = null, $CategoryID = null, $Category2ID = null, $CorrelationID = null, array $Errors = null, $Message = null, array $DiscountReason = null, $ListingRecommendations = null, $any = null)
    {
      $this->ItemID = $ItemID;
      $this->StartTime = $StartTime ? $StartTime->format(\DateTime::ATOM) : null;
      $this->EndTime = $EndTime ? $EndTime->format(\DateTime::ATOM) : null;
      $this->Fees = $Fees;
      $this->CategoryID = $CategoryID;
      $this->Category2ID = $Category2ID;
      $this->CorrelationID = $CorrelationID;
      $this->Errors = $Errors;
      $this->Message = $Message;
      $this->DiscountReason = $DiscountReason;
      $this->ListingRecommendations = $ListingRecommendations;
      $this->any = $any;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\AddItemResponseContainerType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->StartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTime
     * @return \EbayWsdl\AddItemResponseContainerType
     */
    public function setStartTime(\DateTime $StartTime)
    {
      $this->StartTime = $StartTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->EndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTime
     * @return \EbayWsdl\AddItemResponseContainerType
     */
    public function setEndTime(\DateTime $EndTime)
    {
      $this->EndTime = $EndTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return FeesType
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param FeesType $Fees
     * @return \EbayWsdl\AddItemResponseContainerType
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param string $CategoryID
     * @return \EbayWsdl\AddItemResponseContainerType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory2ID()
    {
      return $this->Category2ID;
    }

    /**
     * @param string $Category2ID
     * @return \EbayWsdl\AddItemResponseContainerType
     */
    public function setCategory2ID($Category2ID)
    {
      $this->Category2ID = $Category2ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCorrelationID()
    {
      return $this->CorrelationID;
    }

    /**
     * @param string $CorrelationID
     * @return \EbayWsdl\AddItemResponseContainerType
     */
    public function setCorrelationID($CorrelationID)
    {
      $this->CorrelationID = $CorrelationID;
      return $this;
    }

    /**
     * @return ErrorType[]
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param ErrorType[] $Errors
     * @return \EbayWsdl\AddItemResponseContainerType
     */
    public function setErrors(array $Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \EbayWsdl\AddItemResponseContainerType
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return DiscountReasonCodeType[]
     */
    public function getDiscountReason()
    {
      return $this->DiscountReason;
    }

    /**
     * @param DiscountReasonCodeType[] $DiscountReason
     * @return \EbayWsdl\AddItemResponseContainerType
     */
    public function setDiscountReason(array $DiscountReason)
    {
      $this->DiscountReason = $DiscountReason;
      return $this;
    }

    /**
     * @return ListingRecommendationsType
     */
    public function getListingRecommendations()
    {
      return $this->ListingRecommendations;
    }

    /**
     * @param ListingRecommendationsType $ListingRecommendations
     * @return \EbayWsdl\AddItemResponseContainerType
     */
    public function setListingRecommendations($ListingRecommendations)
    {
      $this->ListingRecommendations = $ListingRecommendations;
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
     * @return \EbayWsdl\AddItemResponseContainerType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
