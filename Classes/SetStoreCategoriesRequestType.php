<?php

namespace EbayWsdl\Classes;

class SetStoreCategoriesRequestType extends AbstractRequestType
{

    /**
     * @var StoreCategoryUpdateActionCodeType $Action
     */
    protected $Action = null;

    /**
     * @var int $ItemDestinationCategoryID
     */
    protected $ItemDestinationCategoryID = null;

    /**
     * @var int $DestinationParentCategoryID
     */
    protected $DestinationParentCategoryID = null;

    /**
     * @var StoreCustomCategoryArrayType $StoreCategories
     */
    protected $StoreCategories = null;

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
     * @param StoreCategoryUpdateActionCodeType $Action
     * @param int $ItemDestinationCategoryID
     * @param int $DestinationParentCategoryID
     * @param StoreCustomCategoryArrayType $StoreCategories
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Action = null, $ItemDestinationCategoryID = null, $DestinationParentCategoryID = null, $StoreCategories = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Action = $Action;
      $this->ItemDestinationCategoryID = $ItemDestinationCategoryID;
      $this->DestinationParentCategoryID = $DestinationParentCategoryID;
      $this->StoreCategories = $StoreCategories;
    }

    /**
     * @return StoreCategoryUpdateActionCodeType
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param StoreCategoryUpdateActionCodeType $Action
     * @return \EbayWsdl\Classes\SetStoreCategoriesRequestType
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemDestinationCategoryID()
    {
      return $this->ItemDestinationCategoryID;
    }

    /**
     * @param int $ItemDestinationCategoryID
     * @return \EbayWsdl\Classes\SetStoreCategoriesRequestType
     */
    public function setItemDestinationCategoryID($ItemDestinationCategoryID)
    {
      $this->ItemDestinationCategoryID = $ItemDestinationCategoryID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDestinationParentCategoryID()
    {
      return $this->DestinationParentCategoryID;
    }

    /**
     * @param int $DestinationParentCategoryID
     * @return \EbayWsdl\Classes\SetStoreCategoriesRequestType
     */
    public function setDestinationParentCategoryID($DestinationParentCategoryID)
    {
      $this->DestinationParentCategoryID = $DestinationParentCategoryID;
      return $this;
    }

    /**
     * @return StoreCustomCategoryArrayType
     */
    public function getStoreCategories()
    {
      return $this->StoreCategories;
    }

    /**
     * @param StoreCustomCategoryArrayType $StoreCategories
     * @return \EbayWsdl\Classes\SetStoreCategoriesRequestType
     */
    public function setStoreCategories($StoreCategories)
    {
      $this->StoreCategories = $StoreCategories;
      return $this;
    }

}
