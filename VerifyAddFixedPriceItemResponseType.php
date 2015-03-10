<?php

namespace EbayWsdl;

class VerifyAddFixedPriceItemResponseType extends AbstractResponseType
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
     * @var boolean $ExpressListing
     */
    protected $ExpressListing = null;

    /**
     * @var ExpressItemRequirementsType $ExpressItemRequirements
     */
    protected $ExpressItemRequirements = null;

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
     * @param boolean $ExpressListing
     * @param ExpressItemRequirementsType $ExpressItemRequirements
     * @param string $CategoryID
     * @param string $Category2ID
     * @param DiscountReasonCodeType[] $DiscountReason
     * @param ListingRecommendationsType $ListingRecommendations
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $ItemID = null, $SKU = null, $Fees = null, $ExpressListing = null, $ExpressItemRequirements = null, $CategoryID = null, $Category2ID = null, array $DiscountReason = null, $ListingRecommendations = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->ItemID = $ItemID;
      $this->SKU = $SKU;
      $this->Fees = $Fees;
      $this->ExpressListing = $ExpressListing;
      $this->ExpressItemRequirements = $ExpressItemRequirements;
      $this->CategoryID = $CategoryID;
      $this->Category2ID = $Category2ID;
      $this->DiscountReason = $DiscountReason;
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
     * @return \EbayWsdl\VerifyAddFixedPriceItemResponseType
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
     * @return \EbayWsdl\VerifyAddFixedPriceItemResponseType
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
     * @return \EbayWsdl\VerifyAddFixedPriceItemResponseType
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpressListing()
    {
      return $this->ExpressListing;
    }

    /**
     * @param boolean $ExpressListing
     * @return \EbayWsdl\VerifyAddFixedPriceItemResponseType
     */
    public function setExpressListing($ExpressListing)
    {
      $this->ExpressListing = $ExpressListing;
      return $this;
    }

    /**
     * @return ExpressItemRequirementsType
     */
    public function getExpressItemRequirements()
    {
      return $this->ExpressItemRequirements;
    }

    /**
     * @param ExpressItemRequirementsType $ExpressItemRequirements
     * @return \EbayWsdl\VerifyAddFixedPriceItemResponseType
     */
    public function setExpressItemRequirements($ExpressItemRequirements)
    {
      $this->ExpressItemRequirements = $ExpressItemRequirements;
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
     * @return \EbayWsdl\VerifyAddFixedPriceItemResponseType
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
     * @return \EbayWsdl\VerifyAddFixedPriceItemResponseType
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
     * @return \EbayWsdl\VerifyAddFixedPriceItemResponseType
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
     * @return \EbayWsdl\VerifyAddFixedPriceItemResponseType
     */
    public function setListingRecommendations($ListingRecommendations)
    {
      $this->ListingRecommendations = $ListingRecommendations;
      return $this;
    }

}
