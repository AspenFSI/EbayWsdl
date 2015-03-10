<?php

namespace EbayWsdl;

class MyeBayFavoriteSearchType
{

    /**
     * @var string $SearchName
     */
    protected $SearchName = null;

    /**
     * @var string $SearchQuery
     */
    protected $SearchQuery = null;

    /**
     * @var string $QueryKeywords
     */
    protected $QueryKeywords = null;

    /**
     * @var string $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var SimpleItemSortCodeType $ItemSort
     */
    protected $ItemSort = null;

    /**
     * @var SortOrderCodeType $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @var \DateTime $EndTimeFrom
     */
    protected $EndTimeFrom = null;

    /**
     * @var \DateTime $EndTimeTo
     */
    protected $EndTimeTo = null;

    /**
     * @var int $MaxDistance
     */
    protected $MaxDistance = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var ItemTypeCodeType $ItemType
     */
    protected $ItemType = null;

    /**
     * @var AmountType $PriceMax
     */
    protected $PriceMax = null;

    /**
     * @var AmountType $PriceMin
     */
    protected $PriceMin = null;

    /**
     * @var CurrencyCodeType $Currency
     */
    protected $Currency = null;

    /**
     * @var int $BidCountMax
     */
    protected $BidCountMax = null;

    /**
     * @var int $BidCountMin
     */
    protected $BidCountMin = null;

    /**
     * @var SearchFlagCodeType[] $SearchFlag
     */
    protected $SearchFlag = null;

    /**
     * @var PaymentMethodSearchCodeType $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var PreferredLocationCodeType $PreferredLocation
     */
    protected $PreferredLocation = null;

    /**
     * @var string[] $SellerID
     */
    protected $SellerID = null;

    /**
     * @var string[] $SellerIDExclude
     */
    protected $SellerIDExclude = null;

    /**
     * @var CountryCodeType $ItemsAvailableTo
     */
    protected $ItemsAvailableTo = null;

    /**
     * @var CountryCodeType $ItemsLocatedIn
     */
    protected $ItemsLocatedIn = null;

    /**
     * @var SellerBusinessCodeType $SellerBusinessType
     */
    protected $SellerBusinessType = null;

    /**
     * @var ItemConditionCodeType $Condition
     */
    protected $Condition = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var QuantityOperatorCodeType $QuantityOperator
     */
    protected $QuantityOperator = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $SearchName
     * @param string $SearchQuery
     * @param string $QueryKeywords
     * @param string $CategoryID
     * @param SimpleItemSortCodeType $ItemSort
     * @param SortOrderCodeType $SortOrder
     * @param \DateTime $EndTimeFrom
     * @param \DateTime $EndTimeTo
     * @param int $MaxDistance
     * @param string $PostalCode
     * @param ItemTypeCodeType $ItemType
     * @param AmountType $PriceMax
     * @param AmountType $PriceMin
     * @param CurrencyCodeType $Currency
     * @param int $BidCountMax
     * @param int $BidCountMin
     * @param SearchFlagCodeType[] $SearchFlag
     * @param PaymentMethodSearchCodeType $PaymentMethod
     * @param PreferredLocationCodeType $PreferredLocation
     * @param string[] $SellerID
     * @param string[] $SellerIDExclude
     * @param CountryCodeType $ItemsAvailableTo
     * @param CountryCodeType $ItemsLocatedIn
     * @param SellerBusinessCodeType $SellerBusinessType
     * @param ItemConditionCodeType $Condition
     * @param int $Quantity
     * @param QuantityOperatorCodeType $QuantityOperator
     * @param string $any
     */
    public function __construct($SearchName = null, $SearchQuery = null, $QueryKeywords = null, $CategoryID = null, $ItemSort = null, $SortOrder = null, \DateTime $EndTimeFrom = null, \DateTime $EndTimeTo = null, $MaxDistance = null, $PostalCode = null, $ItemType = null, $PriceMax = null, $PriceMin = null, $Currency = null, $BidCountMax = null, $BidCountMin = null, array $SearchFlag = null, $PaymentMethod = null, $PreferredLocation = null, array $SellerID = null, array $SellerIDExclude = null, $ItemsAvailableTo = null, $ItemsLocatedIn = null, $SellerBusinessType = null, $Condition = null, $Quantity = null, $QuantityOperator = null, $any = null)
    {
      $this->SearchName = $SearchName;
      $this->SearchQuery = $SearchQuery;
      $this->QueryKeywords = $QueryKeywords;
      $this->CategoryID = $CategoryID;
      $this->ItemSort = $ItemSort;
      $this->SortOrder = $SortOrder;
      $this->EndTimeFrom = $EndTimeFrom ? $EndTimeFrom->format(\DateTime::ATOM) : null;
      $this->EndTimeTo = $EndTimeTo ? $EndTimeTo->format(\DateTime::ATOM) : null;
      $this->MaxDistance = $MaxDistance;
      $this->PostalCode = $PostalCode;
      $this->ItemType = $ItemType;
      $this->PriceMax = $PriceMax;
      $this->PriceMin = $PriceMin;
      $this->Currency = $Currency;
      $this->BidCountMax = $BidCountMax;
      $this->BidCountMin = $BidCountMin;
      $this->SearchFlag = $SearchFlag;
      $this->PaymentMethod = $PaymentMethod;
      $this->PreferredLocation = $PreferredLocation;
      $this->SellerID = $SellerID;
      $this->SellerIDExclude = $SellerIDExclude;
      $this->ItemsAvailableTo = $ItemsAvailableTo;
      $this->ItemsLocatedIn = $ItemsLocatedIn;
      $this->SellerBusinessType = $SellerBusinessType;
      $this->Condition = $Condition;
      $this->Quantity = $Quantity;
      $this->QuantityOperator = $QuantityOperator;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getSearchName()
    {
      return $this->SearchName;
    }

    /**
     * @param string $SearchName
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setSearchName($SearchName)
    {
      $this->SearchName = $SearchName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchQuery()
    {
      return $this->SearchQuery;
    }

    /**
     * @param string $SearchQuery
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setSearchQuery($SearchQuery)
    {
      $this->SearchQuery = $SearchQuery;
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
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setQueryKeywords($QueryKeywords)
    {
      $this->QueryKeywords = $QueryKeywords;
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
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return SimpleItemSortCodeType
     */
    public function getItemSort()
    {
      return $this->ItemSort;
    }

    /**
     * @param SimpleItemSortCodeType $ItemSort
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setItemSort($ItemSort)
    {
      $this->ItemSort = $ItemSort;
      return $this;
    }

    /**
     * @return SortOrderCodeType
     */
    public function getSortOrder()
    {
      return $this->SortOrder;
    }

    /**
     * @param SortOrderCodeType $SortOrder
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTimeFrom()
    {
      if ($this->EndTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTimeFrom
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setEndTimeFrom(\DateTime $EndTimeFrom)
    {
      $this->EndTimeFrom = $EndTimeFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTimeTo()
    {
      if ($this->EndTimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTimeTo
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setEndTimeTo(\DateTime $EndTimeTo)
    {
      $this->EndTimeTo = $EndTimeTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxDistance()
    {
      return $this->MaxDistance;
    }

    /**
     * @param int $MaxDistance
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setMaxDistance($MaxDistance)
    {
      $this->MaxDistance = $MaxDistance;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return ItemTypeCodeType
     */
    public function getItemType()
    {
      return $this->ItemType;
    }

    /**
     * @param ItemTypeCodeType $ItemType
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setItemType($ItemType)
    {
      $this->ItemType = $ItemType;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getPriceMax()
    {
      return $this->PriceMax;
    }

    /**
     * @param AmountType $PriceMax
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setPriceMax($PriceMax)
    {
      $this->PriceMax = $PriceMax;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getPriceMin()
    {
      return $this->PriceMin;
    }

    /**
     * @param AmountType $PriceMin
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setPriceMin($PriceMin)
    {
      $this->PriceMin = $PriceMin;
      return $this;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param CurrencyCodeType $Currency
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidCountMax()
    {
      return $this->BidCountMax;
    }

    /**
     * @param int $BidCountMax
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setBidCountMax($BidCountMax)
    {
      $this->BidCountMax = $BidCountMax;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidCountMin()
    {
      return $this->BidCountMin;
    }

    /**
     * @param int $BidCountMin
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setBidCountMin($BidCountMin)
    {
      $this->BidCountMin = $BidCountMin;
      return $this;
    }

    /**
     * @return SearchFlagCodeType[]
     */
    public function getSearchFlag()
    {
      return $this->SearchFlag;
    }

    /**
     * @param SearchFlagCodeType[] $SearchFlag
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setSearchFlag(array $SearchFlag)
    {
      $this->SearchFlag = $SearchFlag;
      return $this;
    }

    /**
     * @return PaymentMethodSearchCodeType
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param PaymentMethodSearchCodeType $PaymentMethod
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

    /**
     * @return PreferredLocationCodeType
     */
    public function getPreferredLocation()
    {
      return $this->PreferredLocation;
    }

    /**
     * @param PreferredLocationCodeType $PreferredLocation
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setPreferredLocation($PreferredLocation)
    {
      $this->PreferredLocation = $PreferredLocation;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSellerID()
    {
      return $this->SellerID;
    }

    /**
     * @param string[] $SellerID
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setSellerID(array $SellerID)
    {
      $this->SellerID = $SellerID;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSellerIDExclude()
    {
      return $this->SellerIDExclude;
    }

    /**
     * @param string[] $SellerIDExclude
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setSellerIDExclude(array $SellerIDExclude)
    {
      $this->SellerIDExclude = $SellerIDExclude;
      return $this;
    }

    /**
     * @return CountryCodeType
     */
    public function getItemsAvailableTo()
    {
      return $this->ItemsAvailableTo;
    }

    /**
     * @param CountryCodeType $ItemsAvailableTo
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setItemsAvailableTo($ItemsAvailableTo)
    {
      $this->ItemsAvailableTo = $ItemsAvailableTo;
      return $this;
    }

    /**
     * @return CountryCodeType
     */
    public function getItemsLocatedIn()
    {
      return $this->ItemsLocatedIn;
    }

    /**
     * @param CountryCodeType $ItemsLocatedIn
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setItemsLocatedIn($ItemsLocatedIn)
    {
      $this->ItemsLocatedIn = $ItemsLocatedIn;
      return $this;
    }

    /**
     * @return SellerBusinessCodeType
     */
    public function getSellerBusinessType()
    {
      return $this->SellerBusinessType;
    }

    /**
     * @param SellerBusinessCodeType $SellerBusinessType
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setSellerBusinessType($SellerBusinessType)
    {
      $this->SellerBusinessType = $SellerBusinessType;
      return $this;
    }

    /**
     * @return ItemConditionCodeType
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param ItemConditionCodeType $Condition
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setCondition($Condition)
    {
      $this->Condition = $Condition;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return QuantityOperatorCodeType
     */
    public function getQuantityOperator()
    {
      return $this->QuantityOperator;
    }

    /**
     * @param QuantityOperatorCodeType $QuantityOperator
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setQuantityOperator($QuantityOperator)
    {
      $this->QuantityOperator = $QuantityOperator;
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
     * @return \EbayWsdl\MyeBayFavoriteSearchType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
