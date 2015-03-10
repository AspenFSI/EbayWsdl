<?php

namespace EbayWsdl;

class GetSellerTransactionsRequestType extends AbstractRequestType
{

    /**
     * @var \DateTime $ModTimeFrom
     */
    protected $ModTimeFrom = null;

    /**
     * @var \DateTime $ModTimeTo
     */
    protected $ModTimeTo = null;

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
     * @var SKUArrayType $SKUArray
     */
    protected $SKUArray = null;

    /**
     * @var TransactionPlatformCodeType $Platform
     */
    protected $Platform = null;

    /**
     * @var int $NumberOfDays
     */
    protected $NumberOfDays = null;

    /**
     * @var InventoryTrackingMethodCodeType $InventoryTrackingMethod
     */
    protected $InventoryTrackingMethod = null;

    /**
     * @var boolean $IncludeCodiceFiscale
     */
    protected $IncludeCodiceFiscale = null;

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
     * @param \DateTime $ModTimeFrom
     * @param \DateTime $ModTimeTo
     * @param PaginationType $Pagination
     * @param boolean $IncludeFinalValueFee
     * @param boolean $IncludeContainingOrder
     * @param SKUArrayType $SKUArray
     * @param TransactionPlatformCodeType $Platform
     * @param int $NumberOfDays
     * @param InventoryTrackingMethodCodeType $InventoryTrackingMethod
     * @param boolean $IncludeCodiceFiscale
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, \DateTime $ModTimeFrom = null, \DateTime $ModTimeTo = null, $Pagination = null, $IncludeFinalValueFee = null, $IncludeContainingOrder = null, $SKUArray = null, $Platform = null, $NumberOfDays = null, $InventoryTrackingMethod = null, $IncludeCodiceFiscale = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ModTimeFrom = $ModTimeFrom ? $ModTimeFrom->format(\DateTime::ATOM) : null;
      $this->ModTimeTo = $ModTimeTo ? $ModTimeTo->format(\DateTime::ATOM) : null;
      $this->Pagination = $Pagination;
      $this->IncludeFinalValueFee = $IncludeFinalValueFee;
      $this->IncludeContainingOrder = $IncludeContainingOrder;
      $this->SKUArray = $SKUArray;
      $this->Platform = $Platform;
      $this->NumberOfDays = $NumberOfDays;
      $this->InventoryTrackingMethod = $InventoryTrackingMethod;
      $this->IncludeCodiceFiscale = $IncludeCodiceFiscale;
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
     * @return \EbayWsdl\GetSellerTransactionsRequestType
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
     * @return \EbayWsdl\GetSellerTransactionsRequestType
     */
    public function setModTimeTo(\DateTime $ModTimeTo)
    {
      $this->ModTimeTo = $ModTimeTo->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\GetSellerTransactionsRequestType
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
     * @return \EbayWsdl\GetSellerTransactionsRequestType
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
     * @return \EbayWsdl\GetSellerTransactionsRequestType
     */
    public function setIncludeContainingOrder($IncludeContainingOrder)
    {
      $this->IncludeContainingOrder = $IncludeContainingOrder;
      return $this;
    }

    /**
     * @return SKUArrayType
     */
    public function getSKUArray()
    {
      return $this->SKUArray;
    }

    /**
     * @param SKUArrayType $SKUArray
     * @return \EbayWsdl\GetSellerTransactionsRequestType
     */
    public function setSKUArray($SKUArray)
    {
      $this->SKUArray = $SKUArray;
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
     * @return \EbayWsdl\GetSellerTransactionsRequestType
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
     * @return \EbayWsdl\GetSellerTransactionsRequestType
     */
    public function setNumberOfDays($NumberOfDays)
    {
      $this->NumberOfDays = $NumberOfDays;
      return $this;
    }

    /**
     * @return InventoryTrackingMethodCodeType
     */
    public function getInventoryTrackingMethod()
    {
      return $this->InventoryTrackingMethod;
    }

    /**
     * @param InventoryTrackingMethodCodeType $InventoryTrackingMethod
     * @return \EbayWsdl\GetSellerTransactionsRequestType
     */
    public function setInventoryTrackingMethod($InventoryTrackingMethod)
    {
      $this->InventoryTrackingMethod = $InventoryTrackingMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeCodiceFiscale()
    {
      return $this->IncludeCodiceFiscale;
    }

    /**
     * @param boolean $IncludeCodiceFiscale
     * @return \EbayWsdl\GetSellerTransactionsRequestType
     */
    public function setIncludeCodiceFiscale($IncludeCodiceFiscale)
    {
      $this->IncludeCodiceFiscale = $IncludeCodiceFiscale;
      return $this;
    }

}
