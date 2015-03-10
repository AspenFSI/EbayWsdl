<?php

namespace EbayWsdl;

class SellingManagerProductDetailsType
{

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $CustomLabel
     */
    protected $CustomLabel = null;

    /**
     * @var int $QuantityAvailable
     */
    protected $QuantityAvailable = null;

    /**
     * @var AmountType $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var int $FolderID
     */
    protected $FolderID = null;

    /**
     * @var boolean $RestockAlert
     */
    protected $RestockAlert = null;

    /**
     * @var int $RestockThreshold
     */
    protected $RestockThreshold = null;

    /**
     * @var SellingManagerVendorDetailsType $VendorInfo
     */
    protected $VendorInfo = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ProductName
     * @param int $ProductID
     * @param string $CustomLabel
     * @param int $QuantityAvailable
     * @param AmountType $UnitCost
     * @param int $FolderID
     * @param boolean $RestockAlert
     * @param int $RestockThreshold
     * @param SellingManagerVendorDetailsType $VendorInfo
     * @param string $Note
     * @param string $any
     */
    public function __construct($ProductName = null, $ProductID = null, $CustomLabel = null, $QuantityAvailable = null, $UnitCost = null, $FolderID = null, $RestockAlert = null, $RestockThreshold = null, $VendorInfo = null, $Note = null, $any = null)
    {
      $this->ProductName = $ProductName;
      $this->ProductID = $ProductID;
      $this->CustomLabel = $CustomLabel;
      $this->QuantityAvailable = $QuantityAvailable;
      $this->UnitCost = $UnitCost;
      $this->FolderID = $FolderID;
      $this->RestockAlert = $RestockAlert;
      $this->RestockThreshold = $RestockThreshold;
      $this->VendorInfo = $VendorInfo;
      $this->Note = $Note;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return \EbayWsdl\SellingManagerProductDetailsType
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return \EbayWsdl\SellingManagerProductDetailsType
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomLabel()
    {
      return $this->CustomLabel;
    }

    /**
     * @param string $CustomLabel
     * @return \EbayWsdl\SellingManagerProductDetailsType
     */
    public function setCustomLabel($CustomLabel)
    {
      $this->CustomLabel = $CustomLabel;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityAvailable()
    {
      return $this->QuantityAvailable;
    }

    /**
     * @param int $QuantityAvailable
     * @return \EbayWsdl\SellingManagerProductDetailsType
     */
    public function setQuantityAvailable($QuantityAvailable)
    {
      $this->QuantityAvailable = $QuantityAvailable;
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
     * @return \EbayWsdl\SellingManagerProductDetailsType
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

    /**
     * @return int
     */
    public function getFolderID()
    {
      return $this->FolderID;
    }

    /**
     * @param int $FolderID
     * @return \EbayWsdl\SellingManagerProductDetailsType
     */
    public function setFolderID($FolderID)
    {
      $this->FolderID = $FolderID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestockAlert()
    {
      return $this->RestockAlert;
    }

    /**
     * @param boolean $RestockAlert
     * @return \EbayWsdl\SellingManagerProductDetailsType
     */
    public function setRestockAlert($RestockAlert)
    {
      $this->RestockAlert = $RestockAlert;
      return $this;
    }

    /**
     * @return int
     */
    public function getRestockThreshold()
    {
      return $this->RestockThreshold;
    }

    /**
     * @param int $RestockThreshold
     * @return \EbayWsdl\SellingManagerProductDetailsType
     */
    public function setRestockThreshold($RestockThreshold)
    {
      $this->RestockThreshold = $RestockThreshold;
      return $this;
    }

    /**
     * @return SellingManagerVendorDetailsType
     */
    public function getVendorInfo()
    {
      return $this->VendorInfo;
    }

    /**
     * @param SellingManagerVendorDetailsType $VendorInfo
     * @return \EbayWsdl\SellingManagerProductDetailsType
     */
    public function setVendorInfo($VendorInfo)
    {
      $this->VendorInfo = $VendorInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param string $Note
     * @return \EbayWsdl\SellingManagerProductDetailsType
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
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
     * @return \EbayWsdl\SellingManagerProductDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
