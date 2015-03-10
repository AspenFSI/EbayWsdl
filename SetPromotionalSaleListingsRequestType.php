<?php

namespace EbayWsdl;

class SetPromotionalSaleListingsRequestType extends AbstractRequestType
{

    /**
     * @var int $PromotionalSaleID
     */
    protected $PromotionalSaleID = null;

    /**
     * @var ModifyActionCodeType $Action
     */
    protected $Action = null;

    /**
     * @var ItemIDArrayType $PromotionalSaleItemIDArray
     */
    protected $PromotionalSaleItemIDArray = null;

    /**
     * @var int $StoreCategoryID
     */
    protected $StoreCategoryID = null;

    /**
     * @var int $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var boolean $AllFixedPriceItems
     */
    protected $AllFixedPriceItems = null;

    /**
     * @var boolean $AllStoreInventoryItems
     */
    protected $AllStoreInventoryItems = null;

    /**
     * @var boolean $AllAuctionItems
     */
    protected $AllAuctionItems = null;

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
     * @param int $PromotionalSaleID
     * @param ModifyActionCodeType $Action
     * @param ItemIDArrayType $PromotionalSaleItemIDArray
     * @param int $StoreCategoryID
     * @param int $CategoryID
     * @param boolean $AllFixedPriceItems
     * @param boolean $AllStoreInventoryItems
     * @param boolean $AllAuctionItems
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $PromotionalSaleID = null, $Action = null, $PromotionalSaleItemIDArray = null, $StoreCategoryID = null, $CategoryID = null, $AllFixedPriceItems = null, $AllStoreInventoryItems = null, $AllAuctionItems = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->PromotionalSaleID = $PromotionalSaleID;
      $this->Action = $Action;
      $this->PromotionalSaleItemIDArray = $PromotionalSaleItemIDArray;
      $this->StoreCategoryID = $StoreCategoryID;
      $this->CategoryID = $CategoryID;
      $this->AllFixedPriceItems = $AllFixedPriceItems;
      $this->AllStoreInventoryItems = $AllStoreInventoryItems;
      $this->AllAuctionItems = $AllAuctionItems;
    }

    /**
     * @return int
     */
    public function getPromotionalSaleID()
    {
      return $this->PromotionalSaleID;
    }

    /**
     * @param int $PromotionalSaleID
     * @return \EbayWsdl\SetPromotionalSaleListingsRequestType
     */
    public function setPromotionalSaleID($PromotionalSaleID)
    {
      $this->PromotionalSaleID = $PromotionalSaleID;
      return $this;
    }

    /**
     * @return ModifyActionCodeType
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param ModifyActionCodeType $Action
     * @return \EbayWsdl\SetPromotionalSaleListingsRequestType
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return ItemIDArrayType
     */
    public function getPromotionalSaleItemIDArray()
    {
      return $this->PromotionalSaleItemIDArray;
    }

    /**
     * @param ItemIDArrayType $PromotionalSaleItemIDArray
     * @return \EbayWsdl\SetPromotionalSaleListingsRequestType
     */
    public function setPromotionalSaleItemIDArray($PromotionalSaleItemIDArray)
    {
      $this->PromotionalSaleItemIDArray = $PromotionalSaleItemIDArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getStoreCategoryID()
    {
      return $this->StoreCategoryID;
    }

    /**
     * @param int $StoreCategoryID
     * @return \EbayWsdl\SetPromotionalSaleListingsRequestType
     */
    public function setStoreCategoryID($StoreCategoryID)
    {
      $this->StoreCategoryID = $StoreCategoryID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param int $CategoryID
     * @return \EbayWsdl\SetPromotionalSaleListingsRequestType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllFixedPriceItems()
    {
      return $this->AllFixedPriceItems;
    }

    /**
     * @param boolean $AllFixedPriceItems
     * @return \EbayWsdl\SetPromotionalSaleListingsRequestType
     */
    public function setAllFixedPriceItems($AllFixedPriceItems)
    {
      $this->AllFixedPriceItems = $AllFixedPriceItems;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllStoreInventoryItems()
    {
      return $this->AllStoreInventoryItems;
    }

    /**
     * @param boolean $AllStoreInventoryItems
     * @return \EbayWsdl\SetPromotionalSaleListingsRequestType
     */
    public function setAllStoreInventoryItems($AllStoreInventoryItems)
    {
      $this->AllStoreInventoryItems = $AllStoreInventoryItems;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllAuctionItems()
    {
      return $this->AllAuctionItems;
    }

    /**
     * @param boolean $AllAuctionItems
     * @return \EbayWsdl\SetPromotionalSaleListingsRequestType
     */
    public function setAllAuctionItems($AllAuctionItems)
    {
      $this->AllAuctionItems = $AllAuctionItems;
      return $this;
    }

}
