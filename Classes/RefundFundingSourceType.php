<?php

namespace EbayWsdl\Classes;

class RefundFundingSourceType
{

    /**
     * @var RefundingSourceTypeCodeType $RefundingSourceType
     */
    protected $RefundingSourceType = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var AmountType $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var string $SellerExternalTransactionID
     */
    protected $SellerExternalTransactionID = null;

    /**
     * @var string $BuyerExternalTransactionID
     */
    protected $BuyerExternalTransactionID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RefundingSourceTypeCodeType $RefundingSourceType
     * @param string $AccountNumber
     * @param AmountType $RefundAmount
     * @param string $SellerExternalTransactionID
     * @param string $BuyerExternalTransactionID
     * @param string $any
     */
    public function __construct($RefundingSourceType = null, $AccountNumber = null, $RefundAmount = null, $SellerExternalTransactionID = null, $BuyerExternalTransactionID = null, $any = null)
    {
      $this->RefundingSourceType = $RefundingSourceType;
      $this->AccountNumber = $AccountNumber;
      $this->RefundAmount = $RefundAmount;
      $this->SellerExternalTransactionID = $SellerExternalTransactionID;
      $this->BuyerExternalTransactionID = $BuyerExternalTransactionID;
      $this->any = $any;
    }

    /**
     * @return RefundingSourceTypeCodeType
     */
    public function getRefundingSourceType()
    {
      return $this->RefundingSourceType;
    }

    /**
     * @param RefundingSourceTypeCodeType $RefundingSourceType
     * @return \EbayWsdl\Classes\RefundFundingSourceType
     */
    public function setRefundingSourceType($RefundingSourceType)
    {
      $this->RefundingSourceType = $RefundingSourceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \EbayWsdl\Classes\RefundFundingSourceType
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getRefundAmount()
    {
      return $this->RefundAmount;
    }

    /**
     * @param AmountType $RefundAmount
     * @return \EbayWsdl\Classes\RefundFundingSourceType
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerExternalTransactionID()
    {
      return $this->SellerExternalTransactionID;
    }

    /**
     * @param string $SellerExternalTransactionID
     * @return \EbayWsdl\Classes\RefundFundingSourceType
     */
    public function setSellerExternalTransactionID($SellerExternalTransactionID)
    {
      $this->SellerExternalTransactionID = $SellerExternalTransactionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerExternalTransactionID()
    {
      return $this->BuyerExternalTransactionID;
    }

    /**
     * @param string $BuyerExternalTransactionID
     * @return \EbayWsdl\Classes\RefundFundingSourceType
     */
    public function setBuyerExternalTransactionID($BuyerExternalTransactionID)
    {
      $this->BuyerExternalTransactionID = $BuyerExternalTransactionID;
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
     * @return \EbayWsdl\Classes\RefundFundingSourceType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
