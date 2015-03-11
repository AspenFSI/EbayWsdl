<?php

namespace EbayWsdl\Classes;

class GetOrderTransactionsRequestType extends AbstractRequestType
{

    /**
     * @var ItemTransactionIDArrayType $ItemTransactionIDArray
     */
    protected $ItemTransactionIDArray = null;

    /**
     * @var OrderIDArrayType $OrderIDArray
     */
    protected $OrderIDArray = null;

    /**
     * @var TransactionPlatformCodeType $Platform
     */
    protected $Platform = null;

    /**
     * @var boolean $IncludeFinalValueFees
     */
    protected $IncludeFinalValueFees = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param ItemTransactionIDArrayType $ItemTransactionIDArray
     * @param OrderIDArrayType $OrderIDArray
     * @param TransactionPlatformCodeType $Platform
     * @param boolean $IncludeFinalValueFees
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemTransactionIDArray = null, $OrderIDArray = null, $Platform = null, $IncludeFinalValueFees = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemTransactionIDArray = $ItemTransactionIDArray;
      $this->OrderIDArray = $OrderIDArray;
      $this->Platform = $Platform;
      $this->IncludeFinalValueFees = $IncludeFinalValueFees;
    }

    /**
     * @return ItemTransactionIDArrayType
     */
    public function getItemTransactionIDArray()
    {
      return $this->ItemTransactionIDArray;
    }

    /**
     * @param ItemTransactionIDArrayType $ItemTransactionIDArray
     * @return \EbayWsdl\Classes\GetOrderTransactionsRequestType
     */
    public function setItemTransactionIDArray($ItemTransactionIDArray)
    {
      $this->ItemTransactionIDArray = $ItemTransactionIDArray;
      return $this;
    }

    /**
     * @return OrderIDArrayType
     */
    public function getOrderIDArray()
    {
      return $this->OrderIDArray;
    }

    /**
     * @param OrderIDArrayType $OrderIDArray
     * @return \EbayWsdl\Classes\GetOrderTransactionsRequestType
     */
    public function setOrderIDArray($OrderIDArray)
    {
      $this->OrderIDArray = $OrderIDArray;
      return $this;
    }

    /**
     * @return TransactionPlatformCodeType
     */
    public function getPlatform()
    {
      return $this->Platform;
    }

    /**
     * @param TransactionPlatformCodeType $Platform
     * @return \EbayWsdl\Classes\GetOrderTransactionsRequestType
     */
    public function setPlatform($Platform)
    {
      $this->Platform = $Platform;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeFinalValueFees()
    {
      return $this->IncludeFinalValueFees;
    }

    /**
     * @param boolean $IncludeFinalValueFees
     * @return \EbayWsdl\Classes\GetOrderTransactionsRequestType
     */
    public function setIncludeFinalValueFees($IncludeFinalValueFees)
    {
      $this->IncludeFinalValueFees = $IncludeFinalValueFees;
      return $this;
    }

}
