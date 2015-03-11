<?php

namespace EbayWsdl\Classes;

class GetMyeBayBuyingRequestType extends AbstractRequestType
{

    /**
     * @var ItemListCustomizationType $WatchList
     */
    protected $WatchList = null;

    /**
     * @var ItemListCustomizationType $BidList
     */
    protected $BidList = null;

    /**
     * @var ItemListCustomizationType $BestOfferList
     */
    protected $BestOfferList = null;

    /**
     * @var ItemListCustomizationType $WonList
     */
    protected $WonList = null;

    /**
     * @var ItemListCustomizationType $LostList
     */
    protected $LostList = null;

    /**
     * @var MyeBaySelectionType $FavoriteSearches
     */
    protected $FavoriteSearches = null;

    /**
     * @var MyeBaySelectionType $FavoriteSellers
     */
    protected $FavoriteSellers = null;

    /**
     * @var MyeBaySelectionType $SecondChanceOffer
     */
    protected $SecondChanceOffer = null;

    /**
     * @var BidAssistantListType $BidAssistantList
     */
    protected $BidAssistantList = null;

    /**
     * @var ItemListCustomizationType $DeletedFromWonList
     */
    protected $DeletedFromWonList = null;

    /**
     * @var ItemListCustomizationType $DeletedFromLostList
     */
    protected $DeletedFromLostList = null;

    /**
     * @var ItemListCustomizationType $BuyingSummary
     */
    protected $BuyingSummary = null;

    /**
     * @var MyeBaySelectionType $UserDefinedLists
     */
    protected $UserDefinedLists = null;

    /**
     * @var boolean $HideVariations
     */
    protected $HideVariations = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param ItemListCustomizationType $WatchList
     * @param ItemListCustomizationType $BidList
     * @param ItemListCustomizationType $BestOfferList
     * @param ItemListCustomizationType $WonList
     * @param ItemListCustomizationType $LostList
     * @param MyeBaySelectionType $FavoriteSearches
     * @param MyeBaySelectionType $FavoriteSellers
     * @param MyeBaySelectionType $SecondChanceOffer
     * @param BidAssistantListType $BidAssistantList
     * @param ItemListCustomizationType $DeletedFromWonList
     * @param ItemListCustomizationType $DeletedFromLostList
     * @param ItemListCustomizationType $BuyingSummary
     * @param MyeBaySelectionType $UserDefinedLists
     * @param boolean $HideVariations
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $WatchList = null, $BidList = null, $BestOfferList = null, $WonList = null, $LostList = null, $FavoriteSearches = null, $FavoriteSellers = null, $SecondChanceOffer = null, $BidAssistantList = null, $DeletedFromWonList = null, $DeletedFromLostList = null, $BuyingSummary = null, $UserDefinedLists = null, $HideVariations = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
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
      $this->BuyingSummary = $BuyingSummary;
      $this->UserDefinedLists = $UserDefinedLists;
      $this->HideVariations = $HideVariations;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getWatchList()
    {
      return $this->WatchList;
    }

    /**
     * @param ItemListCustomizationType $WatchList
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setWatchList($WatchList)
    {
      $this->WatchList = $WatchList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getBidList()
    {
      return $this->BidList;
    }

    /**
     * @param ItemListCustomizationType $BidList
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setBidList($BidList)
    {
      $this->BidList = $BidList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getBestOfferList()
    {
      return $this->BestOfferList;
    }

    /**
     * @param ItemListCustomizationType $BestOfferList
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setBestOfferList($BestOfferList)
    {
      $this->BestOfferList = $BestOfferList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getWonList()
    {
      return $this->WonList;
    }

    /**
     * @param ItemListCustomizationType $WonList
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setWonList($WonList)
    {
      $this->WonList = $WonList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getLostList()
    {
      return $this->LostList;
    }

    /**
     * @param ItemListCustomizationType $LostList
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setLostList($LostList)
    {
      $this->LostList = $LostList;
      return $this;
    }

    /**
     * @return MyeBaySelectionType
     */
    public function getFavoriteSearches()
    {
      return $this->FavoriteSearches;
    }

    /**
     * @param MyeBaySelectionType $FavoriteSearches
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setFavoriteSearches($FavoriteSearches)
    {
      $this->FavoriteSearches = $FavoriteSearches;
      return $this;
    }

    /**
     * @return MyeBaySelectionType
     */
    public function getFavoriteSellers()
    {
      return $this->FavoriteSellers;
    }

    /**
     * @param MyeBaySelectionType $FavoriteSellers
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setFavoriteSellers($FavoriteSellers)
    {
      $this->FavoriteSellers = $FavoriteSellers;
      return $this;
    }

    /**
     * @return MyeBaySelectionType
     */
    public function getSecondChanceOffer()
    {
      return $this->SecondChanceOffer;
    }

    /**
     * @param MyeBaySelectionType $SecondChanceOffer
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setSecondChanceOffer($SecondChanceOffer)
    {
      $this->SecondChanceOffer = $SecondChanceOffer;
      return $this;
    }

    /**
     * @return BidAssistantListType
     */
    public function getBidAssistantList()
    {
      return $this->BidAssistantList;
    }

    /**
     * @param BidAssistantListType $BidAssistantList
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setBidAssistantList($BidAssistantList)
    {
      $this->BidAssistantList = $BidAssistantList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getDeletedFromWonList()
    {
      return $this->DeletedFromWonList;
    }

    /**
     * @param ItemListCustomizationType $DeletedFromWonList
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setDeletedFromWonList($DeletedFromWonList)
    {
      $this->DeletedFromWonList = $DeletedFromWonList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getDeletedFromLostList()
    {
      return $this->DeletedFromLostList;
    }

    /**
     * @param ItemListCustomizationType $DeletedFromLostList
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setDeletedFromLostList($DeletedFromLostList)
    {
      $this->DeletedFromLostList = $DeletedFromLostList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getBuyingSummary()
    {
      return $this->BuyingSummary;
    }

    /**
     * @param ItemListCustomizationType $BuyingSummary
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setBuyingSummary($BuyingSummary)
    {
      $this->BuyingSummary = $BuyingSummary;
      return $this;
    }

    /**
     * @return MyeBaySelectionType
     */
    public function getUserDefinedLists()
    {
      return $this->UserDefinedLists;
    }

    /**
     * @param MyeBaySelectionType $UserDefinedLists
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setUserDefinedLists($UserDefinedLists)
    {
      $this->UserDefinedLists = $UserDefinedLists;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideVariations()
    {
      return $this->HideVariations;
    }

    /**
     * @param boolean $HideVariations
     * @return \EbayWsdl\Classes\GetMyeBayBuyingRequestType
     */
    public function setHideVariations($HideVariations)
    {
      $this->HideVariations = $HideVariations;
      return $this;
    }

}
