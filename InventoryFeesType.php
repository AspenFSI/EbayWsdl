<?php

namespace EbayWsdl;

class InventoryFeesType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var FeeType[] $Fee
     */
    protected $Fee = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemIDType $ItemID
     * @param FeeType[] $Fee
     * @param string $any
     */
    public function __construct($ItemID = null, array $Fee = null, $any = null)
    {
      $this->ItemID = $ItemID;
      $this->Fee = $Fee;
      $this->any = $any;
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
     * @return \EbayWsdl\InventoryFeesType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return FeeType[]
     */
    public function getFee()
    {
      return $this->Fee;
    }

    /**
     * @param FeeType[] $Fee
     * @return \EbayWsdl\InventoryFeesType
     */
    public function setFee(array $Fee)
    {
      $this->Fee = $Fee;
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
     * @return \EbayWsdl\InventoryFeesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
