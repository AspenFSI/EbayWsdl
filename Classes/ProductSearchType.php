<?php

namespace EbayWsdl\Classes;

class ProductSearchType
{

    /**
     * @var string $ProductSearchID
     */
    protected $ProductSearchID = null;

    /**
     * @var int $AttributeSetID
     */
    protected $AttributeSetID = null;

    /**
     * @var int $ProductFinderID
     */
    protected $ProductFinderID = null;

    /**
     * @var string $ProductID
     */
    protected $ProductID = null;

    /**
     * @var int $SortAttributeID
     */
    protected $SortAttributeID = null;

    /**
     * @var int $MaxChildrenPerFamily
     */
    protected $MaxChildrenPerFamily = null;

    /**
     * @var SearchAttributesType[] $SearchAttributes
     */
    protected $SearchAttributes = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

    /**
     * @var boolean $AvailableItemsOnly
     */
    protected $AvailableItemsOnly = null;

    /**
     * @var string $QueryKeywords
     */
    protected $QueryKeywords = null;

    /**
     * @var CharacteristicSetIDsType $CharacteristicSetIDs
     */
    protected $CharacteristicSetIDs = null;

    /**
     * @var string $ProductReferenceID
     */
    protected $ProductReferenceID = null;

    /**
     * @var ExternalProductIDType $ExternalProductID
     */
    protected $ExternalProductID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ProductSearchID
     * @param int $AttributeSetID
     * @param int $ProductFinderID
     * @param string $ProductID
     * @param int $SortAttributeID
     * @param int $MaxChildrenPerFamily
     * @param SearchAttributesType[] $SearchAttributes
     * @param PaginationType $Pagination
     * @param boolean $AvailableItemsOnly
     * @param string $QueryKeywords
     * @param CharacteristicSetIDsType $CharacteristicSetIDs
     * @param string $ProductReferenceID
     * @param ExternalProductIDType $ExternalProductID
     * @param string $any
     */
    public function __construct($ProductSearchID = null, $AttributeSetID = null, $ProductFinderID = null, $ProductID = null, $SortAttributeID = null, $MaxChildrenPerFamily = null, array $SearchAttributes = null, $Pagination = null, $AvailableItemsOnly = null, $QueryKeywords = null, $CharacteristicSetIDs = null, $ProductReferenceID = null, $ExternalProductID = null, $any = null)
    {
      $this->ProductSearchID = $ProductSearchID;
      $this->AttributeSetID = $AttributeSetID;
      $this->ProductFinderID = $ProductFinderID;
      $this->ProductID = $ProductID;
      $this->SortAttributeID = $SortAttributeID;
      $this->MaxChildrenPerFamily = $MaxChildrenPerFamily;
      $this->SearchAttributes = $SearchAttributes;
      $this->Pagination = $Pagination;
      $this->AvailableItemsOnly = $AvailableItemsOnly;
      $this->QueryKeywords = $QueryKeywords;
      $this->CharacteristicSetIDs = $CharacteristicSetIDs;
      $this->ProductReferenceID = $ProductReferenceID;
      $this->ExternalProductID = $ExternalProductID;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getProductSearchID()
    {
      return $this->ProductSearchID;
    }

    /**
     * @param string $ProductSearchID
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setProductSearchID($ProductSearchID)
    {
      $this->ProductSearchID = $ProductSearchID;
      return $this;
    }

    /**
     * @return int
     */
    public function getAttributeSetID()
    {
      return $this->AttributeSetID;
    }

    /**
     * @param int $AttributeSetID
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setAttributeSetID($AttributeSetID)
    {
      $this->AttributeSetID = $AttributeSetID;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductFinderID()
    {
      return $this->ProductFinderID;
    }

    /**
     * @param int $ProductFinderID
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setProductFinderID($ProductFinderID)
    {
      $this->ProductFinderID = $ProductFinderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param string $ProductID
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

    /**
     * @return int
     */
    public function getSortAttributeID()
    {
      return $this->SortAttributeID;
    }

    /**
     * @param int $SortAttributeID
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setSortAttributeID($SortAttributeID)
    {
      $this->SortAttributeID = $SortAttributeID;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxChildrenPerFamily()
    {
      return $this->MaxChildrenPerFamily;
    }

    /**
     * @param int $MaxChildrenPerFamily
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setMaxChildrenPerFamily($MaxChildrenPerFamily)
    {
      $this->MaxChildrenPerFamily = $MaxChildrenPerFamily;
      return $this;
    }

    /**
     * @return SearchAttributesType[]
     */
    public function getSearchAttributes()
    {
      return $this->SearchAttributes;
    }

    /**
     * @param SearchAttributesType[] $SearchAttributes
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setSearchAttributes(array $SearchAttributes)
    {
      $this->SearchAttributes = $SearchAttributes;
      return $this;
    }

    /**
     * @return PaginationType
     */
    public function getPagination()
    {
      return $this->Pagination;
    }

    /**
     * @param PaginationType $Pagination
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableItemsOnly()
    {
      return $this->AvailableItemsOnly;
    }

    /**
     * @param boolean $AvailableItemsOnly
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setAvailableItemsOnly($AvailableItemsOnly)
    {
      $this->AvailableItemsOnly = $AvailableItemsOnly;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueryKeywords()
    {
      return $this->QueryKeywords;
    }

    /**
     * @param string $QueryKeywords
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setQueryKeywords($QueryKeywords)
    {
      $this->QueryKeywords = $QueryKeywords;
      return $this;
    }

    /**
     * @return CharacteristicSetIDsType
     */
    public function getCharacteristicSetIDs()
    {
      return $this->CharacteristicSetIDs;
    }

    /**
     * @param CharacteristicSetIDsType $CharacteristicSetIDs
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setCharacteristicSetIDs($CharacteristicSetIDs)
    {
      $this->CharacteristicSetIDs = $CharacteristicSetIDs;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductReferenceID()
    {
      return $this->ProductReferenceID;
    }

    /**
     * @param string $ProductReferenceID
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setProductReferenceID($ProductReferenceID)
    {
      $this->ProductReferenceID = $ProductReferenceID;
      return $this;
    }

    /**
     * @return ExternalProductIDType
     */
    public function getExternalProductID()
    {
      return $this->ExternalProductID;
    }

    /**
     * @param ExternalProductIDType $ExternalProductID
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setExternalProductID($ExternalProductID)
    {
      $this->ExternalProductID = $ExternalProductID;
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
     * @return \EbayWsdl\Classes\ProductSearchType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
