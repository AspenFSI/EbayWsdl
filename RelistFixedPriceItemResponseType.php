<?php

namespace EbayWsdl;

class RelistFixedPriceItemResponseType extends AbstractResponseType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var SKUType $SKU
     */
    protected $SKU = null;

    /**
     * @var FeesType $Fees
     */
    protected $Fees = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var string $Category2ID
     */
    protected $Category2ID = null;

    /**
     * @var DiscountReasonCodeType[] $DiscountReason
     */
    protected $DiscountReason = null;

    /**
     * @var ProductSuggestionsType $ProductSuggestions
     */
    protected $ProductSuggestions = null;

    /**
     * @var ListingRecommendationsType $ListingRecommendations
     */
    protected $ListingRecommendations = null;

    /**
     * @param \DateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Message
     * @param string $Version
     * @param string $Build
     * @param string $NotificationEventName
     * @param DuplicateInvocationDetailsType $DuplicateInvocationDetails
     * @param string $RecipientUserID
     * @param string $EIASToken
     * @param string $NotificationSignature
     * @param string $HardExpirationWarning
     * @param BotBlockResponseType $BotBlock
     * @param string $ExternalUserData
     * @param string $any
     * @param ItemIDType $ItemID
     * @param SKUType $SKU
     * @param FeesType $Fees
     * @param \DateTime $StartTime
     * @param \DateTime $EndTime
     * @param string $CategoryID
     * @param string $Category2ID
     * @param DiscountReasonCodeType[] $DiscountReason
     * @param ProductSuggestionsType $ProductSuggestions
     * @param ListingRecommendationsType $ListingRecommendations
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $ItemID = null, $SKU = null, $Fees = null, \DateTime $StartTime = null, \DateTime $EndTime = null, $CategoryID = null, $Category2ID = null, array $DiscountReason = null, $ProductSuggestions = null, $ListingRecommendations = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->ItemID = $ItemID;
      $this->SKU = $SKU;
      $this->Fees = $Fees;
      $this->StartTime = $StartTime ? $StartTime->format(\DateTime::ATOM) : null;
      $this->EndTime = $EndTime ? $EndTime->format(\DateTime::ATOM) : null;
      $this->CategoryID = $CategoryID;
      $this->Category2ID = $Category2ID;
      $this->DiscountReason = $DiscountReason;
      $this->ProductSuggestions = $ProductSuggestions;
      $this->ListingRecommendations = $ListingRecommendations;
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
     * @return \EbayWsdl\RelistFixedPriceItemResponseType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return SKUType
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param SKUType $SKU
     * @return \EbayWsdl\RelistFixedPriceItemResponseType
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
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
     * @return \EbayWsdl\RelistFixedPriceItemResponseType
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
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
     * @return \EbayWsdl\RelistFixedPriceItemResponseType
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
     * @return \EbayWsdl\RelistFixedPriceItemResponseType
     */
    public function setEndTime(\DateTime $EndTime)
    {
      $this->EndTime = $EndTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\RelistFixedPriceItemResponseType
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
     * @return \EbayWsdl\RelistFixedPriceItemResponseType
     */
    public function setCategory2ID($Category2ID)
    {
      $this->Category2ID = $Category2ID;
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
     * @return \EbayWsdl\RelistFixedPriceItemResponseType
     */
    public function setDiscountReason(array $DiscountReason)
    {
      $this->DiscountReason = $DiscountReason;
      return $this;
    }

    /**
     * @return ProductSuggestionsType
     */
    public function getProductSuggestions()
    {
      return $this->ProductSuggestions;
    }

    /**
     * @param ProductSuggestionsType $ProductSuggestions
     * @return \EbayWsdl\RelistFixedPriceItemResponseType
     */
    public function setProductSuggestions($ProductSuggestions)
    {
      $this->ProductSuggestions = $ProductSuggestions;
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
     * @return \EbayWsdl\RelistFixedPriceItemResponseType
     */
    public function setListingRecommendations($ListingRecommendations)
    {
      $this->ListingRecommendations = $ListingRecommendations;
      return $this;
    }

}
