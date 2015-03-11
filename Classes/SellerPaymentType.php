<?php

namespace EbayWsdl\Classes;

class SellerPaymentType
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
     * @var OrderIDType $OrderID
     */
    protected $OrderID = null;

    /**
     * @var string $SellerInventoryID
     */
    protected $SellerInventoryID = null;

    /**
     * @var string $PrivateNotes
     */
    protected $PrivateNotes = null;

    /**
     * @var ExternalProductIDType $ExternalProductID
     */
    protected $ExternalProductID = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var PaymentTypeCodeType $PaymentType
     */
    protected $PaymentType = null;

    /**
     * @var AmountType $TransactionPrice
     */
    protected $TransactionPrice = null;

    /**
     * @var AmountType $ShippingReimbursement
     */
    protected $ShippingReimbursement = null;

    /**
     * @var AmountType $Commission
     */
    protected $Commission = null;

    /**
     * @var AmountType $AmountPaid
     */
    protected $AmountPaid = null;

    /**
     * @var \DateTime $PaidTime
     */
    protected $PaidTime = null;

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
     * @param OrderIDType $OrderID
     * @param string $SellerInventoryID
     * @param string $PrivateNotes
     * @param ExternalProductIDType $ExternalProductID
     * @param string $Title
     * @param PaymentTypeCodeType $PaymentType
     * @param AmountType $TransactionPrice
     * @param AmountType $ShippingReimbursement
     * @param AmountType $Commission
     * @param AmountType $AmountPaid
     * @param \DateTime $PaidTime
     * @param string $OrderLineItemID
     * @param string $any
     */
    public function __construct($ItemID = null, $TransactionID = null, $OrderID = null, $SellerInventoryID = null, $PrivateNotes = null, $ExternalProductID = null, $Title = null, $PaymentType = null, $TransactionPrice = null, $ShippingReimbursement = null, $Commission = null, $AmountPaid = null, \DateTime $PaidTime = null, $OrderLineItemID = null, $any = null)
    {
      $this->ItemID = $ItemID;
      $this->TransactionID = $TransactionID;
      $this->OrderID = $OrderID;
      $this->SellerInventoryID = $SellerInventoryID;
      $this->PrivateNotes = $PrivateNotes;
      $this->ExternalProductID = $ExternalProductID;
      $this->Title = $Title;
      $this->PaymentType = $PaymentType;
      $this->TransactionPrice = $TransactionPrice;
      $this->ShippingReimbursement = $ShippingReimbursement;
      $this->Commission = $Commission;
      $this->AmountPaid = $AmountPaid;
      $this->PaidTime = $PaidTime ? $PaidTime->format(\DateTime::ATOM) : null;
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
     * @return \EbayWsdl\Classes\SellerPaymentType
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
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return OrderIDType
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param OrderIDType $OrderID
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerInventoryID()
    {
      return $this->SellerInventoryID;
    }

    /**
     * @param string $SellerInventoryID
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setSellerInventoryID($SellerInventoryID)
    {
      $this->SellerInventoryID = $SellerInventoryID;
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
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setPrivateNotes($PrivateNotes)
    {
      $this->PrivateNotes = $PrivateNotes;
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
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setExternalProductID($ExternalProductID)
    {
      $this->ExternalProductID = $ExternalProductID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return PaymentTypeCodeType
     */
    public function getPaymentType()
    {
      return $this->PaymentType;
    }

    /**
     * @param PaymentTypeCodeType $PaymentType
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTransactionPrice()
    {
      return $this->TransactionPrice;
    }

    /**
     * @param AmountType $TransactionPrice
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setTransactionPrice($TransactionPrice)
    {
      $this->TransactionPrice = $TransactionPrice;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getShippingReimbursement()
    {
      return $this->ShippingReimbursement;
    }

    /**
     * @param AmountType $ShippingReimbursement
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setShippingReimbursement($ShippingReimbursement)
    {
      $this->ShippingReimbursement = $ShippingReimbursement;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param AmountType $Commission
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getAmountPaid()
    {
      return $this->AmountPaid;
    }

    /**
     * @param AmountType $AmountPaid
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setAmountPaid($AmountPaid)
    {
      $this->AmountPaid = $AmountPaid;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaidTime()
    {
      if ($this->PaidTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PaidTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PaidTime
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setPaidTime(\DateTime $PaidTime)
    {
      $this->PaidTime = $PaidTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\SellerPaymentType
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
     * @return \EbayWsdl\Classes\SellerPaymentType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
