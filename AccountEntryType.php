<?php

namespace EbayWsdl;

class AccountEntryType
{

    /**
     * @var AccountDetailEntryCodeType $AccountDetailsEntryType
     */
    protected $AccountDetailsEntryType = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var AmountType $Balance
     */
    protected $Balance = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var AmountType $GrossDetailAmount
     */
    protected $GrossDetailAmount = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $Memo
     */
    protected $Memo = null;

    /**
     * @var AmountType $ConversionRate
     */
    protected $ConversionRate = null;

    /**
     * @var AmountType $NetDetailAmount
     */
    protected $NetDetailAmount = null;

    /**
     * @var string $RefNumber
     */
    protected $RefNumber = null;

    /**
     * @var float $VATPercent
     */
    protected $VATPercent = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $OrderLineItemID
     */
    protected $OrderLineItemID = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var boolean $ReceivedTopRatedDiscount
     */
    protected $ReceivedTopRatedDiscount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AccountDetailEntryCodeType $AccountDetailsEntryType
     * @param string $Description
     * @param AmountType $Balance
     * @param \DateTime $Date
     * @param AmountType $GrossDetailAmount
     * @param ItemIDType $ItemID
     * @param string $Memo
     * @param AmountType $ConversionRate
     * @param AmountType $NetDetailAmount
     * @param string $RefNumber
     * @param float $VATPercent
     * @param string $Title
     * @param string $OrderLineItemID
     * @param string $TransactionID
     * @param boolean $ReceivedTopRatedDiscount
     * @param string $any
     */
    public function __construct($AccountDetailsEntryType = null, $Description = null, $Balance = null, \DateTime $Date = null, $GrossDetailAmount = null, $ItemID = null, $Memo = null, $ConversionRate = null, $NetDetailAmount = null, $RefNumber = null, $VATPercent = null, $Title = null, $OrderLineItemID = null, $TransactionID = null, $ReceivedTopRatedDiscount = null, $any = null)
    {
      $this->AccountDetailsEntryType = $AccountDetailsEntryType;
      $this->Description = $Description;
      $this->Balance = $Balance;
      $this->Date = $Date ? $Date->format(\DateTime::ATOM) : null;
      $this->GrossDetailAmount = $GrossDetailAmount;
      $this->ItemID = $ItemID;
      $this->Memo = $Memo;
      $this->ConversionRate = $ConversionRate;
      $this->NetDetailAmount = $NetDetailAmount;
      $this->RefNumber = $RefNumber;
      $this->VATPercent = $VATPercent;
      $this->Title = $Title;
      $this->OrderLineItemID = $OrderLineItemID;
      $this->TransactionID = $TransactionID;
      $this->ReceivedTopRatedDiscount = $ReceivedTopRatedDiscount;
      $this->any = $any;
    }

    /**
     * @return AccountDetailEntryCodeType
     */
    public function getAccountDetailsEntryType()
    {
      return $this->AccountDetailsEntryType;
    }

    /**
     * @param AccountDetailEntryCodeType $AccountDetailsEntryType
     * @return \EbayWsdl\AccountEntryType
     */
    public function setAccountDetailsEntryType($AccountDetailsEntryType)
    {
      $this->AccountDetailsEntryType = $AccountDetailsEntryType;
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
     * @return \EbayWsdl\AccountEntryType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getBalance()
    {
      return $this->Balance;
    }

    /**
     * @param AmountType $Balance
     * @return \EbayWsdl\AccountEntryType
     */
    public function setBalance($Balance)
    {
      $this->Balance = $Balance;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \EbayWsdl\AccountEntryType
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getGrossDetailAmount()
    {
      return $this->GrossDetailAmount;
    }

    /**
     * @param AmountType $GrossDetailAmount
     * @return \EbayWsdl\AccountEntryType
     */
    public function setGrossDetailAmount($GrossDetailAmount)
    {
      $this->GrossDetailAmount = $GrossDetailAmount;
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
     * @return \EbayWsdl\AccountEntryType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->Memo;
    }

    /**
     * @param string $Memo
     * @return \EbayWsdl\AccountEntryType
     */
    public function setMemo($Memo)
    {
      $this->Memo = $Memo;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getConversionRate()
    {
      return $this->ConversionRate;
    }

    /**
     * @param AmountType $ConversionRate
     * @return \EbayWsdl\AccountEntryType
     */
    public function setConversionRate($ConversionRate)
    {
      $this->ConversionRate = $ConversionRate;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getNetDetailAmount()
    {
      return $this->NetDetailAmount;
    }

    /**
     * @param AmountType $NetDetailAmount
     * @return \EbayWsdl\AccountEntryType
     */
    public function setNetDetailAmount($NetDetailAmount)
    {
      $this->NetDetailAmount = $NetDetailAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefNumber()
    {
      return $this->RefNumber;
    }

    /**
     * @param string $RefNumber
     * @return \EbayWsdl\AccountEntryType
     */
    public function setRefNumber($RefNumber)
    {
      $this->RefNumber = $RefNumber;
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
     * @return \EbayWsdl\AccountEntryType
     */
    public function setVATPercent($VATPercent)
    {
      $this->VATPercent = $VATPercent;
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
     * @return \EbayWsdl\AccountEntryType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
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
     * @return \EbayWsdl\AccountEntryType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
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
     * @return \EbayWsdl\AccountEntryType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReceivedTopRatedDiscount()
    {
      return $this->ReceivedTopRatedDiscount;
    }

    /**
     * @param boolean $ReceivedTopRatedDiscount
     * @return \EbayWsdl\AccountEntryType
     */
    public function setReceivedTopRatedDiscount($ReceivedTopRatedDiscount)
    {
      $this->ReceivedTopRatedDiscount = $ReceivedTopRatedDiscount;
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
     * @return \EbayWsdl\AccountEntryType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
