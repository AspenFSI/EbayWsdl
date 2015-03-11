<?php

namespace EbayWsdl\Classes;

class VariationType
{

    /**
     * @var SKUType $SKU
     */
    protected $SKU = null;

    /**
     * @var AmountType $StartPrice
     */
    protected $StartPrice = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var NameValueListArrayType $VariationSpecifics
     */
    protected $VariationSpecifics = null;

    /**
     * @var int $UnitsAvailable
     */
    protected $UnitsAvailable = null;

    /**
     * @var AmountType $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var SellingStatusType $SellingStatus
     */
    protected $SellingStatus = null;

    /**
     * @var string $VariationTitle
     */
    protected $VariationTitle = null;

    /**
     * @var anyURI $VariationViewItemURL
     */
    protected $VariationViewItemURL = null;

    /**
     * @var boolean $Delete
     */
    protected $Delete = null;

    /**
     * @var SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
     */
    protected $SellingManagerProductInventoryStatus = null;

    /**
     * @var int $WatchCount
     */
    protected $WatchCount = null;

    /**
     * @var string $PrivateNotes
     */
    protected $PrivateNotes = null;

    /**
     * @var DiscountPriceInfoType $DiscountPriceInfo
     */
    protected $DiscountPriceInfo = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SKUType $SKU
     * @param AmountType $StartPrice
     * @param int $Quantity
     * @param NameValueListArrayType $VariationSpecifics
     * @param int $UnitsAvailable
     * @param AmountType $UnitCost
     * @param SellingStatusType $SellingStatus
     * @param string $VariationTitle
     * @param anyURI $VariationViewItemURL
     * @param boolean $Delete
     * @param SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
     * @param int $WatchCount
     * @param string $PrivateNotes
     * @param DiscountPriceInfoType $DiscountPriceInfo
     * @param string $any
     */
    public function __construct($SKU = null, $StartPrice = null, $Quantity = null, $VariationSpecifics = null, $UnitsAvailable = null, $UnitCost = null, $SellingStatus = null, $VariationTitle = null, $VariationViewItemURL = null, $Delete = null, $SellingManagerProductInventoryStatus = null, $WatchCount = null, $PrivateNotes = null, $DiscountPriceInfo = null, $any = null)
    {
      $this->SKU = $SKU;
      $this->StartPrice = $StartPrice;
      $this->Quantity = $Quantity;
      $this->VariationSpecifics = $VariationSpecifics;
      $this->UnitsAvailable = $UnitsAvailable;
      $this->UnitCost = $UnitCost;
      $this->SellingStatus = $SellingStatus;
      $this->VariationTitle = $VariationTitle;
      $this->VariationViewItemURL = $VariationViewItemURL;
      $this->Delete = $Delete;
      $this->SellingManagerProductInventoryStatus = $SellingManagerProductInventoryStatus;
      $this->WatchCount = $WatchCount;
      $this->PrivateNotes = $PrivateNotes;
      $this->DiscountPriceInfo = $DiscountPriceInfo;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getStartPrice()
    {
      return $this->StartPrice;
    }

    /**
     * @param AmountType $StartPrice
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setStartPrice($StartPrice)
    {
      $this->StartPrice = $StartPrice;
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
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return NameValueListArrayType
     */
    public function getVariationSpecifics()
    {
      return $this->VariationSpecifics;
    }

    /**
     * @param NameValueListArrayType $VariationSpecifics
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setVariationSpecifics($VariationSpecifics)
    {
      $this->VariationSpecifics = $VariationSpecifics;
      return $this;
    }

    /**
     * @return int
     */
    public function getUnitsAvailable()
    {
      return $this->UnitsAvailable;
    }

    /**
     * @param int $UnitsAvailable
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setUnitsAvailable($UnitsAvailable)
    {
      $this->UnitsAvailable = $UnitsAvailable;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getUnitCost()
    {
      return $this->UnitCost;
    }

    /**
     * @param AmountType $UnitCost
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

    /**
     * @return SellingStatusType
     */
    public function getSellingStatus()
    {
      return $this->SellingStatus;
    }

    /**
     * @param SellingStatusType $SellingStatus
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setSellingStatus($SellingStatus)
    {
      $this->SellingStatus = $SellingStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariationTitle()
    {
      return $this->VariationTitle;
    }

    /**
     * @param string $VariationTitle
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setVariationTitle($VariationTitle)
    {
      $this->VariationTitle = $VariationTitle;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getVariationViewItemURL()
    {
      return $this->VariationViewItemURL;
    }

    /**
     * @param anyURI $VariationViewItemURL
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setVariationViewItemURL($VariationViewItemURL)
    {
      $this->VariationViewItemURL = $VariationViewItemURL;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDelete()
    {
      return $this->Delete;
    }

    /**
     * @param boolean $Delete
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setDelete($Delete)
    {
      $this->Delete = $Delete;
      return $this;
    }

    /**
     * @return SellingManagerProductInventoryStatusType
     */
    public function getSellingManagerProductInventoryStatus()
    {
      return $this->SellingManagerProductInventoryStatus;
    }

    /**
     * @param SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setSellingManagerProductInventoryStatus($SellingManagerProductInventoryStatus)
    {
      $this->SellingManagerProductInventoryStatus = $SellingManagerProductInventoryStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getWatchCount()
    {
      return $this->WatchCount;
    }

    /**
     * @param int $WatchCount
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setWatchCount($WatchCount)
    {
      $this->WatchCount = $WatchCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrivateNotes()
    {
      return $this->PrivateNotes;
    }

    /**
     * @param string $PrivateNotes
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setPrivateNotes($PrivateNotes)
    {
      $this->PrivateNotes = $PrivateNotes;
      return $this;
    }

    /**
     * @return DiscountPriceInfoType
     */
    public function getDiscountPriceInfo()
    {
      return $this->DiscountPriceInfo;
    }

    /**
     * @param DiscountPriceInfoType $DiscountPriceInfo
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setDiscountPriceInfo($DiscountPriceInfo)
    {
      $this->DiscountPriceInfo = $DiscountPriceInfo;
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
     * @return \EbayWsdl\Classes\VariationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
