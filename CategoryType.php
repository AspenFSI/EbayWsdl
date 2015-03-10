<?php

namespace EbayWsdl;

class CategoryType
{

    /**
     * @var boolean $BestOfferEnabled
     */
    protected $BestOfferEnabled = null;

    /**
     * @var boolean $AutoPayEnabled
     */
    protected $AutoPayEnabled = null;

    /**
     * @var boolean $B2BVATEnabled
     */
    protected $B2BVATEnabled = null;

    /**
     * @var boolean $CatalogEnabled
     */
    protected $CatalogEnabled = null;

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var int $CategoryLevel
     */
    protected $CategoryLevel = null;

    /**
     * @var string $CategoryName
     */
    protected $CategoryName = null;

    /**
     * @var string[] $CategoryParentID
     */
    protected $CategoryParentID = null;

    /**
     * @var string[] $CategoryParentName
     */
    protected $CategoryParentName = null;

    /**
     * @var boolean $ProductSearchPageAvailable
     */
    protected $ProductSearchPageAvailable = null;

    /**
     * @var ExtendedProductFinderIDType[] $ProductFinderIDs
     */
    protected $ProductFinderIDs = null;

    /**
     * @var CharacteristicsSetType[] $CharacteristicsSets
     */
    protected $CharacteristicsSets = null;

    /**
     * @var boolean $Expired
     */
    protected $Expired = null;

    /**
     * @var boolean $IntlAutosFixedCat
     */
    protected $IntlAutosFixedCat = null;

    /**
     * @var boolean $LeafCategory
     */
    protected $LeafCategory = null;

    /**
     * @var boolean $Virtual
     */
    protected $Virtual = null;

    /**
     * @var int $NumOfItems
     */
    protected $NumOfItems = null;

    /**
     * @var boolean $SellerGuaranteeEligible
     */
    protected $SellerGuaranteeEligible = null;

    /**
     * @var boolean $ORPA
     */
    protected $ORPA = null;

    /**
     * @var boolean $ORRA
     */
    protected $ORRA = null;

    /**
     * @var boolean $LSD
     */
    protected $LSD = null;

    /**
     * @var string $Keywords
     */
    protected $Keywords = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $BestOfferEnabled
     * @param boolean $AutoPayEnabled
     * @param boolean $B2BVATEnabled
     * @param boolean $CatalogEnabled
     * @param string $CategoryID
     * @param int $CategoryLevel
     * @param string $CategoryName
     * @param string[] $CategoryParentID
     * @param string[] $CategoryParentName
     * @param boolean $ProductSearchPageAvailable
     * @param ExtendedProductFinderIDType[] $ProductFinderIDs
     * @param CharacteristicsSetType[] $CharacteristicsSets
     * @param boolean $Expired
     * @param boolean $IntlAutosFixedCat
     * @param boolean $LeafCategory
     * @param boolean $Virtual
     * @param int $NumOfItems
     * @param boolean $SellerGuaranteeEligible
     * @param boolean $ORPA
     * @param boolean $ORRA
     * @param boolean $LSD
     * @param string $Keywords
     * @param string $any
     */
    public function __construct($BestOfferEnabled = null, $AutoPayEnabled = null, $B2BVATEnabled = null, $CatalogEnabled = null, $CategoryID = null, $CategoryLevel = null, $CategoryName = null, array $CategoryParentID = null, array $CategoryParentName = null, $ProductSearchPageAvailable = null, array $ProductFinderIDs = null, array $CharacteristicsSets = null, $Expired = null, $IntlAutosFixedCat = null, $LeafCategory = null, $Virtual = null, $NumOfItems = null, $SellerGuaranteeEligible = null, $ORPA = null, $ORRA = null, $LSD = null, $Keywords = null, $any = null)
    {
      $this->BestOfferEnabled = $BestOfferEnabled;
      $this->AutoPayEnabled = $AutoPayEnabled;
      $this->B2BVATEnabled = $B2BVATEnabled;
      $this->CatalogEnabled = $CatalogEnabled;
      $this->CategoryID = $CategoryID;
      $this->CategoryLevel = $CategoryLevel;
      $this->CategoryName = $CategoryName;
      $this->CategoryParentID = $CategoryParentID;
      $this->CategoryParentName = $CategoryParentName;
      $this->ProductSearchPageAvailable = $ProductSearchPageAvailable;
      $this->ProductFinderIDs = $ProductFinderIDs;
      $this->CharacteristicsSets = $CharacteristicsSets;
      $this->Expired = $Expired;
      $this->IntlAutosFixedCat = $IntlAutosFixedCat;
      $this->LeafCategory = $LeafCategory;
      $this->Virtual = $Virtual;
      $this->NumOfItems = $NumOfItems;
      $this->SellerGuaranteeEligible = $SellerGuaranteeEligible;
      $this->ORPA = $ORPA;
      $this->ORRA = $ORRA;
      $this->LSD = $LSD;
      $this->Keywords = $Keywords;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getBestOfferEnabled()
    {
      return $this->BestOfferEnabled;
    }

    /**
     * @param boolean $BestOfferEnabled
     * @return \EbayWsdl\CategoryType
     */
    public function setBestOfferEnabled($BestOfferEnabled)
    {
      $this->BestOfferEnabled = $BestOfferEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoPayEnabled()
    {
      return $this->AutoPayEnabled;
    }

    /**
     * @param boolean $AutoPayEnabled
     * @return \EbayWsdl\CategoryType
     */
    public function setAutoPayEnabled($AutoPayEnabled)
    {
      $this->AutoPayEnabled = $AutoPayEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getB2BVATEnabled()
    {
      return $this->B2BVATEnabled;
    }

    /**
     * @param boolean $B2BVATEnabled
     * @return \EbayWsdl\CategoryType
     */
    public function setB2BVATEnabled($B2BVATEnabled)
    {
      $this->B2BVATEnabled = $B2BVATEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCatalogEnabled()
    {
      return $this->CatalogEnabled;
    }

    /**
     * @param boolean $CatalogEnabled
     * @return \EbayWsdl\CategoryType
     */
    public function setCatalogEnabled($CatalogEnabled)
    {
      $this->CatalogEnabled = $CatalogEnabled;
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
     * @return \EbayWsdl\CategoryType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryLevel()
    {
      return $this->CategoryLevel;
    }

    /**
     * @param int $CategoryLevel
     * @return \EbayWsdl\CategoryType
     */
    public function setCategoryLevel($CategoryLevel)
    {
      $this->CategoryLevel = $CategoryLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
      return $this->CategoryName;
    }

    /**
     * @param string $CategoryName
     * @return \EbayWsdl\CategoryType
     */
    public function setCategoryName($CategoryName)
    {
      $this->CategoryName = $CategoryName;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCategoryParentID()
    {
      return $this->CategoryParentID;
    }

    /**
     * @param string[] $CategoryParentID
     * @return \EbayWsdl\CategoryType
     */
    public function setCategoryParentID(array $CategoryParentID)
    {
      $this->CategoryParentID = $CategoryParentID;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCategoryParentName()
    {
      return $this->CategoryParentName;
    }

    /**
     * @param string[] $CategoryParentName
     * @return \EbayWsdl\CategoryType
     */
    public function setCategoryParentName(array $CategoryParentName)
    {
      $this->CategoryParentName = $CategoryParentName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProductSearchPageAvailable()
    {
      return $this->ProductSearchPageAvailable;
    }

    /**
     * @param boolean $ProductSearchPageAvailable
     * @return \EbayWsdl\CategoryType
     */
    public function setProductSearchPageAvailable($ProductSearchPageAvailable)
    {
      $this->ProductSearchPageAvailable = $ProductSearchPageAvailable;
      return $this;
    }

    /**
     * @return ExtendedProductFinderIDType[]
     */
    public function getProductFinderIDs()
    {
      return $this->ProductFinderIDs;
    }

    /**
     * @param ExtendedProductFinderIDType[] $ProductFinderIDs
     * @return \EbayWsdl\CategoryType
     */
    public function setProductFinderIDs(array $ProductFinderIDs)
    {
      $this->ProductFinderIDs = $ProductFinderIDs;
      return $this;
    }

    /**
     * @return CharacteristicsSetType[]
     */
    public function getCharacteristicsSets()
    {
      return $this->CharacteristicsSets;
    }

    /**
     * @param CharacteristicsSetType[] $CharacteristicsSets
     * @return \EbayWsdl\CategoryType
     */
    public function setCharacteristicsSets(array $CharacteristicsSets)
    {
      $this->CharacteristicsSets = $CharacteristicsSets;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpired()
    {
      return $this->Expired;
    }

    /**
     * @param boolean $Expired
     * @return \EbayWsdl\CategoryType
     */
    public function setExpired($Expired)
    {
      $this->Expired = $Expired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIntlAutosFixedCat()
    {
      return $this->IntlAutosFixedCat;
    }

    /**
     * @param boolean $IntlAutosFixedCat
     * @return \EbayWsdl\CategoryType
     */
    public function setIntlAutosFixedCat($IntlAutosFixedCat)
    {
      $this->IntlAutosFixedCat = $IntlAutosFixedCat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLeafCategory()
    {
      return $this->LeafCategory;
    }

    /**
     * @param boolean $LeafCategory
     * @return \EbayWsdl\CategoryType
     */
    public function setLeafCategory($LeafCategory)
    {
      $this->LeafCategory = $LeafCategory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVirtual()
    {
      return $this->Virtual;
    }

    /**
     * @param boolean $Virtual
     * @return \EbayWsdl\CategoryType
     */
    public function setVirtual($Virtual)
    {
      $this->Virtual = $Virtual;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumOfItems()
    {
      return $this->NumOfItems;
    }

    /**
     * @param int $NumOfItems
     * @return \EbayWsdl\CategoryType
     */
    public function setNumOfItems($NumOfItems)
    {
      $this->NumOfItems = $NumOfItems;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellerGuaranteeEligible()
    {
      return $this->SellerGuaranteeEligible;
    }

    /**
     * @param boolean $SellerGuaranteeEligible
     * @return \EbayWsdl\CategoryType
     */
    public function setSellerGuaranteeEligible($SellerGuaranteeEligible)
    {
      $this->SellerGuaranteeEligible = $SellerGuaranteeEligible;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getORPA()
    {
      return $this->ORPA;
    }

    /**
     * @param boolean $ORPA
     * @return \EbayWsdl\CategoryType
     */
    public function setORPA($ORPA)
    {
      $this->ORPA = $ORPA;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getORRA()
    {
      return $this->ORRA;
    }

    /**
     * @param boolean $ORRA
     * @return \EbayWsdl\CategoryType
     */
    public function setORRA($ORRA)
    {
      $this->ORRA = $ORRA;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLSD()
    {
      return $this->LSD;
    }

    /**
     * @param boolean $LSD
     * @return \EbayWsdl\CategoryType
     */
    public function setLSD($LSD)
    {
      $this->LSD = $LSD;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
      return $this->Keywords;
    }

    /**
     * @param string $Keywords
     * @return \EbayWsdl\CategoryType
     */
    public function setKeywords($Keywords)
    {
      $this->Keywords = $Keywords;
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
     * @return \EbayWsdl\CategoryType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
