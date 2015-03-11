<?php

namespace EbayWsdl\Classes;

class RefundTransactionType
{

    /**
     * @var string $OrderID
     */
    protected $OrderID = null;

    /**
     * @var string $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var RefundLineArrayType $RefundLineArray
     */
    protected $RefundLineArray = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $OrderID
     * @param string $ItemID
     * @param string $TransactionID
     * @param RefundLineArrayType $RefundLineArray
     * @param string $any
     */
    public function __construct($OrderID = null, $ItemID = null, $TransactionID = null, $RefundLineArray = null, $any = null)
    {
      $this->OrderID = $OrderID;
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->RefundLineArray = $RefundLineArray;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param string $OrderID
     * @return \EbayWsdl\Classes\RefundTransactionType
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param string $ItemID
     * @return \EbayWsdl\Classes\RefundTransactionType
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
     * @return \EbayWsdl\Classes\RefundTransactionType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return RefundLineArrayType
     */
    public function getRefundLineArray()
    {
      return $this->RefundLineArray;
    }

    /**
     * @param RefundLineArrayType $RefundLineArray
     * @return \EbayWsdl\Classes\RefundTransactionType
     */
    public function setRefundLineArray($RefundLineArray)
    {
      $this->RefundLineArray = $RefundLineArray;
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
     * @return \EbayWsdl\Classes\RefundTransactionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
