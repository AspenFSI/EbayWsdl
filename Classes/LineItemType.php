<?php

namespace EbayWsdl\Classes;

class LineItemType
{

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $CountryOfOrigin
     */
    protected $CountryOfOrigin = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $Quantity
     * @param string $CountryOfOrigin
     * @param string $Description
     * @param ItemIDType $ItemID
     * @param string $TransactionID
     * @param string $any
     */
    public function __construct($Quantity = null, $CountryOfOrigin = null, $Description = null, $ItemID = null, $TransactionID = null, $any = null)
    {
      $this->Quantity = $Quantity;
      $this->CountryOfOrigin = $CountryOfOrigin;
      $this->Description = $Description;
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\LineItemType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfOrigin()
    {
      return $this->CountryOfOrigin;
    }

    /**
     * @param string $CountryOfOrigin
     * @return \EbayWsdl\Classes\LineItemType
     */
    public function setCountryOfOrigin($CountryOfOrigin)
    {
      $this->CountryOfOrigin = $CountryOfOrigin;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\Classes\LineItemType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \EbayWsdl\Classes\LineItemType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
      return $this->TransactionID;
    }

    /**
     * @param string $TransactionID
     * @return \EbayWsdl\Classes\LineItemType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
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
     * @return \EbayWsdl\Classes\LineItemType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
