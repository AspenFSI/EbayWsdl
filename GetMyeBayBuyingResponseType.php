<?php

namespace EbayWsdl;

class GetMyeBayBuyingResponseType extends AbstractResponseType
{

    /**
     * @var BuyingSummaryType $BuyingSummary
     */
    protected $BuyingSummary = null;

    /**
     * @var PaginatedItemArrayType $WatchList
     */
    protected $WatchList = null;

    /**
     * @var PaginatedItemArrayType $BidList
     */
    protected $BidList = null;

    /**
     * @var PaginatedItemArrayType $BestOfferList
     */
    protected $BestOfferList = null;

    /**
     * @var PaginatedOrderTransactionArrayType $WonList
     */
    protected $WonList = null;

    /**
     * @var PaginatedItemArrayType $LostList
     */
    protected $LostList = null;

    /**
     * @var MyeBayFavoriteSearchListType $FavoriteSearches
     */
    protected $FavoriteSearches = null;

    /**
     * @var MyeBayFavoriteSellerListType $FavoriteSellers
     */
    protected $FavoriteSellers = null;

    /**
     * @var ItemType[] $SecondChanceOffer
     */
    protected $SecondChanceOffer = null;

    /**
     * @var BidGroupArrayType $BidAssistantList
     */
    protected $BidAssistantList = null;

    /**
     * @var PaginatedOrderTransactionArrayType $DeletedFromWonList
     */
    protected $DeletedFromWonList = null;

    /**
     * @var PaginatedItemArrayType $DeletedFromLostList
     */
    protected $DeletedFromLostList = null;

    /**
     * @var UserDefinedListType[] $UserDefinedList
     */
    protected $UserDefinedList = null;

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
     * @param BuyingSummaryType $BuyingSummary
     * @param PaginatedItemArrayType $WatchList
     * @param PaginatedItemArrayType $BidList
     * @param PaginatedItemArrayType $BestOfferList
     * @param PaginatedOrderTransactionArrayType $WonList
     * @param PaginatedItemArrayType $LostList
     * @param MyeBayFavoriteSearchListType $FavoriteSearches
     * @param MyeBayFavoriteSellerListType $FavoriteSellers
     * @param ItemType[] $SecondChanceOffer
     * @param BidGroupArrayType $BidAssistantList
     * @param PaginatedOrderTransactionArrayType $DeletedFromWonList
     * @param PaginatedItemArrayType $DeletedFromLostList
     * @param UserDefinedListType[] $UserDefinedList
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $BuyingSummary = null, $WatchList = null, $BidList = null, $BestOfferList = null, $WonList = null, $LostList = null, $FavoriteSearches = null, $FavoriteSellers = null, array $SecondChanceOffer = null, $BidAssistantList = null, $DeletedFromWonList = null, $DeletedFromLostList = null, array $UserDefinedList = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->BuyingSummary = $BuyingSummary;
      $this->WatchList = $WatchList;
      $this->BidList = $BidList;
      $this->BestOfferList = $BestOfferList;
      $this->WonList = $WonList;
      $this->LostList = $LostList;
      $this->FavoriteSearches = $FavoriteSearches;
      $this->FavoriteSellers = $FavoriteSellers;
      $this->SecondChanceOffer = $SecondChanceOffer;
      $this->BidAssistantList = $BidAssistantList;
      $this->DeletedFromWonList = $DeletedFromWonList;
      $this->DeletedFromLostList = $DeletedFromLostList;
      $this->UserDefinedList = $UserDefinedList;
    }

    /**
     * @return BuyingSummaryType
     */
    public function getBuyingSummary()
    {
      return $this->BuyingSummary;
    }

    /**
     * @param BuyingSummaryType $BuyingSummary
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setBuyingSummary($BuyingSummary)
    {
      $this->BuyingSummary = $BuyingSummary;
      return $this;
    }

    /**
     * @return PaginatedItemArrayType
     */
    public function getWatchList()
    {
      return $this->WatchList;
    }

    /**
     * @param PaginatedItemArrayType $WatchList
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setWatchList($WatchList)
    {
      $this->WatchList = $WatchList;
      return $this;
    }

    /**
     * @return PaginatedItemArrayType
     */
    public function getBidList()
    {
      return $this->BidList;
    }

    /**
     * @param PaginatedItemArrayType $BidList
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setBidList($BidList)
    {
      $this->BidList = $BidList;
      return $this;
    }

    /**
     * @return PaginatedItemArrayType
     */
    public function getBestOfferList()
    {
      return $this->BestOfferList;
    }

    /**
     * @param PaginatedItemArrayType $BestOfferList
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setBestOfferList($BestOfferList)
    {
      $this->BestOfferList = $BestOfferList;
      return $this;
    }

    /**
     * @return PaginatedOrderTransactionArrayType
     */
    public function getWonList()
    {
      return $this->WonList;
    }

    /**
     * @param PaginatedOrderTransactionArrayType $WonList
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setWonList($WonList)
    {
      $this->WonList = $WonList;
      return $this;
    }

    /**
     * @return PaginatedItemArrayType
     */
    public function getLostList()
    {
      return $this->LostList;
    }

    /**
     * @param PaginatedItemArrayType $LostList
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setLostList($LostList)
    {
      $this->LostList = $LostList;
      return $this;
    }

    /**
     * @return MyeBayFavoriteSearchListType
     */
    public function getFavoriteSearches()
    {
      return $this->FavoriteSearches;
    }

    /**
     * @param MyeBayFavoriteSearchListType $FavoriteSearches
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setFavoriteSearches($FavoriteSearches)
    {
      $this->FavoriteSearches = $FavoriteSearches;
      return $this;
    }

    /**
     * @return MyeBayFavoriteSellerListType
     */
    public function getFavoriteSellers()
    {
      return $this->FavoriteSellers;
    }

    /**
     * @param MyeBayFavoriteSellerListType $FavoriteSellers
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setFavoriteSellers($FavoriteSellers)
    {
      $this->FavoriteSellers = $FavoriteSellers;
      return $this;
    }

    /**
     * @return ItemType[]
     */
    public function getSecondChanceOffer()
    {
      return $this->SecondChanceOffer;
    }

    /**
     * @param ItemType[] $SecondChanceOffer
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setSecondChanceOffer(array $SecondChanceOffer)
    {
      $this->SecondChanceOffer = $SecondChanceOffer;
      return $this;
    }

    /**
     * @return BidGroupArrayType
     */
    public function getBidAssistantList()
    {
      return $this->BidAssistantList;
    }

    /**
     * @param BidGroupArrayType $BidAssistantList
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setBidAssistantList($BidAssistantList)
    {
      $this->BidAssistantList = $BidAssistantList;
      return $this;
    }

    /**
     * @return PaginatedOrderTransactionArrayType
     */
    public function getDeletedFromWonList()
    {
      return $this->DeletedFromWonList;
    }

    /**
     * @param PaginatedOrderTransactionArrayType $DeletedFromWonList
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setDeletedFromWonList($DeletedFromWonList)
    {
      $this->DeletedFromWonList = $DeletedFromWonList;
      return $this;
    }

    /**
     * @return PaginatedItemArrayType
     */
    public function getDeletedFromLostList()
    {
      return $this->DeletedFromLostList;
    }

    /**
     * @param PaginatedItemArrayType $DeletedFromLostList
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setDeletedFromLostList($DeletedFromLostList)
    {
      $this->DeletedFromLostList = $DeletedFromLostList;
      return $this;
    }

    /**
     * @return UserDefinedListType[]
     */
    public function getUserDefinedList()
    {
      return $this->UserDefinedList;
    }

    /**
     * @param UserDefinedListType[] $UserDefinedList
     * @return \EbayWsdl\GetMyeBayBuyingResponseType
     */
    public function setUserDefinedList(array $UserDefinedList)
    {
      $this->UserDefinedList = $UserDefinedList;
      return $this;
    }

}
