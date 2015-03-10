<?php

namespace EbayWsdl;

class VATRateType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var float $VATPercent
     */
    protected $VATPercent = null;

    /**
     * @var string $OrderLineItemID
     */
    protected $OrderLineItemID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemIDType $ItemID
     * @param string $TransactionID
     * @param float $VATPercent
     * @param string $OrderLineItemID
     * @param string $any
     */
    public function __construct($ItemID = null, $TransactionID = null, $VATPercent = null, $OrderLineItemID = null, $any = null)
    {
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->VATPercent = $VATPercent;
      $this->OrderLineItemID = $OrderLineItemID;
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
     * @return \EbayWsdl\VATRateType
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
     * @return \EbayWsdl\VATRateType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return float
     */
    public function getVATPercent()
    {
      return $this->VATPercent;
    }

    /**
     * @param float $VATPercent
     * @return \EbayWsdl\VATRateType
     */
    public function setVATPercent($VATPercent)
    {
      $this->VATPercent = $VATPercent;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineItemID()
    {
      return $this->OrderLineItemID;
    }

    /**
     * @param string $OrderLineItemID
     * @return \EbayWsdl\VATRateType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
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
     * @return \EbayWsdl\VATRateType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
