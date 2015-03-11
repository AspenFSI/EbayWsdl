<?php

namespace EbayWsdl\Classes;

class GetItemTransactionsRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var \DateTime $ModTimeFrom
     */
    protected $ModTimeFrom = null;

    /**
     * @var \DateTime $ModTimeTo
     */
    protected $ModTimeTo = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

    /**
     * @var boolean $IncludeFinalValueFee
     */
    protected $IncludeFinalValueFee = null;

    /**
     * @var boolean $IncludeContainingOrder
     */
    protected $IncludeContainingOrder = null;

    /**
     * @var TransactionPlatformCodeType $Platform
     */
    protected $Platform = null;

    /**
     * @var int $NumberOfDays
     */
    protected $NumberOfDays = null;

    /**
     * @var boolean $IncludeVariations
     */
    protected $IncludeVariations = null;

    /**
     * @var string $OrderLineItemID
     */
    protected $OrderLineItemID = null;

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
     * @param ItemIDType $ItemID
     * @param \DateTime $ModTimeFrom
     * @param \DateTime $ModTimeTo
     * @param string $TransactionID
     * @param PaginationType $Pagination
     * @param boolean $IncludeFinalValueFee
     * @param boolean $IncludeContainingOrder
     * @param TransactionPlatformCodeType $Platform
     * @param int $NumberOfDays
     * @param boolean $IncludeVariations
     * @param string $OrderLineItemID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, \DateTime $ModTimeFrom = null, \DateTime $ModTimeTo = null, $TransactionID = null, $Pagination = null, $IncludeFinalValueFee = null, $IncludeContainingOrder = null, $Platform = null, $NumberOfDays = null, $IncludeVariations = null, $OrderLineItemID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->ModTimeFrom = $ModTimeFrom ? $ModTimeFrom->format(\DateTime::ATOM) : null;
      $this->ModTimeTo = $ModTimeTo ? $ModTimeTo->format(\DateTime::ATOM) : null;
      $this->TransactionID = $TransactionID;
      $this->Pagination = $Pagination;
      $this->IncludeFinalValueFee = $IncludeFinalValueFee;
      $this->IncludeContainingOrder = $IncludeContainingOrder;
      $this->Platform = $Platform;
      $this->NumberOfDays = $NumberOfDays;
      $this->IncludeVariations = $IncludeVariations;
      $this->OrderLineItemID = $OrderLineItemID;
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
     * @return \EbayWsdl\Classes\GetItemTransactionsRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModTimeFrom()
    {
      if ($this->ModTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModTimeFrom
     * @return \EbayWsdl\Classes\GetItemTransactionsRequestType
     */
    public function setModTimeFrom(\DateTime $ModTimeFrom)
    {
      $this->ModTimeFrom = $ModTimeFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModTimeTo()
    {
      if ($this->ModTimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModTimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModTimeTo
     * @return \EbayWsdl\Classes\GetItemTransactionsRequestType
     */
    public function setModTimeTo(\DateTime $ModTimeTo)
    {
      $this->ModTimeTo = $ModTimeTo->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\GetItemTransactionsRequestType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return PaginationType
     */
    public function getPagination()
    {
      return $this->Pagination;
    }

    /**
     * @param PaginationType $Pagination
     * @return \EbayWsdl\Classes\GetItemTransactionsRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeFinalValueFee()
    {
      return $this->IncludeFinalValueFee;
    }

    /**
     * @param boolean $IncludeFinalValueFee
     * @return \EbayWsdl\Classes\GetItemTransactionsRequestType
     */
    public function setIncludeFinalValueFee($IncludeFinalValueFee)
    {
      $this->IncludeFinalValueFee = $IncludeFinalValueFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeContainingOrder()
    {
      return $this->IncludeContainingOrder;
    }

    /**
     * @param boolean $IncludeContainingOrder
     * @return \EbayWsdl\Classes\GetItemTransactionsRequestType
     */
    public function setIncludeContainingOrder($IncludeContainingOrder)
    {
      $this->IncludeContainingOrder = $IncludeContainingOrder;
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
     * @return \EbayWsdl\Classes\GetItemTransactionsRequestType
     */
    public function setPlatform($Platform)
    {
      $this->Platform = $Platform;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfDays()
    {
      return $this->NumberOfDays;
    }

    /**
     * @param int $NumberOfDays
     * @return \EbayWsdl\Classes\GetItemTransactionsRequestType
     */
    public function setNumberOfDays($NumberOfDays)
    {
      $this->NumberOfDays = $NumberOfDays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeVariations()
    {
      return $this->IncludeVariations;
    }

    /**
     * @param boolean $IncludeVariations
     * @return \EbayWsdl\Classes\GetItemTransactionsRequestType
     */
    public function setIncludeVariations($IncludeVariations)
    {
      $this->IncludeVariations = $IncludeVariations;
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
     * @return \EbayWsdl\Classes\GetItemTransactionsRequestType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

}
