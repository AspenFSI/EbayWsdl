<?php

namespace EbayWsdl\Classes;

class GetMyeBaySellingRequestType extends AbstractRequestType
{

    /**
     * @var ItemListCustomizationType $ScheduledList
     */
    protected $ScheduledList = null;

    /**
     * @var ItemListCustomizationType $ActiveList
     */
    protected $ActiveList = null;

    /**
     * @var ItemListCustomizationType $SoldList
     */
    protected $SoldList = null;

    /**
     * @var ItemListCustomizationType $UnsoldList
     */
    protected $UnsoldList = null;

    /**
     * @var ItemListCustomizationType $BidList
     */
    protected $BidList = null;

    /**
     * @var ItemListCustomizationType $DeletedFromSoldList
     */
    protected $DeletedFromSoldList = null;

    /**
     * @var ItemListCustomizationType $DeletedFromUnsoldList
     */
    protected $DeletedFromUnsoldList = null;

    /**
     * @var ItemListCustomizationType $SellingSummary
     */
    protected $SellingSummary = null;

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
     * @param ItemListCustomizationType $ScheduledList
     * @param ItemListCustomizationType $ActiveList
     * @param ItemListCustomizationType $SoldList
     * @param ItemListCustomizationType $UnsoldList
     * @param ItemListCustomizationType $BidList
     * @param ItemListCustomizationType $DeletedFromSoldList
     * @param ItemListCustomizationType $DeletedFromUnsoldList
     * @param ItemListCustomizationType $SellingSummary
     * @param boolean $HideVariations
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ScheduledList = null, $ActiveList = null, $SoldList = null, $UnsoldList = null, $BidList = null, $DeletedFromSoldList = null, $DeletedFromUnsoldList = null, $SellingSummary = null, $HideVariations = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ScheduledList = $ScheduledList;
      $this->ActiveList = $ActiveList;
      $this->SoldList = $SoldList;
      $this->UnsoldList = $UnsoldList;
      $this->BidList = $BidList;
      $this->DeletedFromSoldList = $DeletedFromSoldList;
      $this->DeletedFromUnsoldList = $DeletedFromUnsoldList;
      $this->SellingSummary = $SellingSummary;
      $this->HideVariations = $HideVariations;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getScheduledList()
    {
      return $this->ScheduledList;
    }

    /**
     * @param ItemListCustomizationType $ScheduledList
     * @return \EbayWsdl\Classes\GetMyeBaySellingRequestType
     */
    public function setScheduledList($ScheduledList)
    {
      $this->ScheduledList = $ScheduledList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getActiveList()
    {
      return $this->ActiveList;
    }

    /**
     * @param ItemListCustomizationType $ActiveList
     * @return \EbayWsdl\Classes\GetMyeBaySellingRequestType
     */
    public function setActiveList($ActiveList)
    {
      $this->ActiveList = $ActiveList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getSoldList()
    {
      return $this->SoldList;
    }

    /**
     * @param ItemListCustomizationType $SoldList
     * @return \EbayWsdl\Classes\GetMyeBaySellingRequestType
     */
    public function setSoldList($SoldList)
    {
      $this->SoldList = $SoldList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getUnsoldList()
    {
      return $this->UnsoldList;
    }

    /**
     * @param ItemListCustomizationType $UnsoldList
     * @return \EbayWsdl\Classes\GetMyeBaySellingRequestType
     */
    public function setUnsoldList($UnsoldList)
    {
      $this->UnsoldList = $UnsoldList;
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
     * @return \EbayWsdl\Classes\GetMyeBaySellingRequestType
     */
    public function setBidList($BidList)
    {
      $this->BidList = $BidList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getDeletedFromSoldList()
    {
      return $this->DeletedFromSoldList;
    }

    /**
     * @param ItemListCustomizationType $DeletedFromSoldList
     * @return \EbayWsdl\Classes\GetMyeBaySellingRequestType
     */
    public function setDeletedFromSoldList($DeletedFromSoldList)
    {
      $this->DeletedFromSoldList = $DeletedFromSoldList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getDeletedFromUnsoldList()
    {
      return $this->DeletedFromUnsoldList;
    }

    /**
     * @param ItemListCustomizationType $DeletedFromUnsoldList
     * @return \EbayWsdl\Classes\GetMyeBaySellingRequestType
     */
    public function setDeletedFromUnsoldList($DeletedFromUnsoldList)
    {
      $this->DeletedFromUnsoldList = $DeletedFromUnsoldList;
      return $this;
    }

    /**
     * @return ItemListCustomizationType
     */
    public function getSellingSummary()
    {
      return $this->SellingSummary;
    }

    /**
     * @param ItemListCustomizationType $SellingSummary
     * @return \EbayWsdl\Classes\GetMyeBaySellingRequestType
     */
    public function setSellingSummary($SellingSummary)
    {
      $this->SellingSummary = $SellingSummary;
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
     * @return \EbayWsdl\Classes\GetMyeBaySellingRequestType
     */
    public function setHideVariations($HideVariations)
    {
      $this->HideVariations = $HideVariations;
      return $this;
    }

}
