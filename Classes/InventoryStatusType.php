<?php

namespace EbayWsdl\Classes;

class InventoryStatusType
{

    /**
     * @var SKUType $SKU
     */
    protected $SKU = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var AmountType $StartPrice
     */
    protected $StartPrice = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SKUType $SKU
     * @param ItemIDType $ItemID
     * @param AmountType $StartPrice
     * @param int $Quantity
     * @param string $any
     */
    public function __construct($SKU = null, $ItemID = null, $StartPrice = null, $Quantity = null, $any = null)
    {
      $this->SKU = $SKU;
      $this->ItemID = $ItemID;
      $this->StartPrice = $StartPrice;
      $this->Quantity = $Quantity;
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
     * @return \EbayWsdl\Classes\InventoryStatusType
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\Classes\InventoryStatusType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
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
     * @return \EbayWsdl\Classes\InventoryStatusType
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
     * @return \EbayWsdl\Classes\InventoryStatusType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return \EbayWsdl\Classes\InventoryStatusType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
