<?php

namespace EbayWsdl;

class GetOrdersRequestType extends AbstractRequestType
{

    /**
     * @var OrderIDArrayType $OrderIDArray
     */
    protected $OrderIDArray = null;

    /**
     * @var \DateTime $CreateTimeFrom
     */
    protected $CreateTimeFrom = null;

    /**
     * @var \DateTime $CreateTimeTo
     */
    protected $CreateTimeTo = null;

    /**
     * @var TradingRoleCodeType $OrderRole
     */
    protected $OrderRole = null;

    /**
     * @var OrderStatusCodeType $OrderStatus
     */
    protected $OrderStatus = null;

    /**
     * @var ListingTypeCodeType $ListingType
     */
    protected $ListingType = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

    /**
     * @var \DateTime $ModTimeFrom
     */
    protected $ModTimeFrom = null;

    /**
     * @var \DateTime $ModTimeTo
     */
    protected $ModTimeTo = null;

    /**
     * @var int $NumberOfDays
     */
    protected $NumberOfDays = null;

    /**
     * @var boolean $IncludeFinalValueFee
     */
    protected $IncludeFinalValueFee = null;

    /**
     * @var SortOrderCodeType $SortingOrder
     */
    protected $SortingOrder = null;

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
     * @param OrderIDArrayType $OrderIDArray
     * @param \DateTime $CreateTimeFrom
     * @param \DateTime $CreateTimeTo
     * @param TradingRoleCodeType $OrderRole
     * @param OrderStatusCodeType $OrderStatus
     * @param ListingTypeCodeType $ListingType
     * @param PaginationType $Pagination
     * @param \DateTime $ModTimeFrom
     * @param \DateTime $ModTimeTo
     * @param int $NumberOfDays
     * @param boolean $IncludeFinalValueFee
     * @param SortOrderCodeType $SortingOrder
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $OrderIDArray = null, \DateTime $CreateTimeFrom = null, \DateTime $CreateTimeTo = null, $OrderRole = null, $OrderStatus = null, $ListingType = null, $Pagination = null, \DateTime $ModTimeFrom = null, \DateTime $ModTimeTo = null, $NumberOfDays = null, $IncludeFinalValueFee = null, $SortingOrder = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->OrderIDArray = $OrderIDArray;
      $this->CreateTimeFrom = $CreateTimeFrom ? $CreateTimeFrom->format(\DateTime::ATOM) : null;
      $this->CreateTimeTo = $CreateTimeTo ? $CreateTimeTo->format(\DateTime::ATOM) : null;
      $this->OrderRole = $OrderRole;
      $this->OrderStatus = $OrderStatus;
      $this->ListingType = $ListingType;
      $this->Pagination = $Pagination;
      $this->ModTimeFrom = $ModTimeFrom ? $ModTimeFrom->format(\DateTime::ATOM) : null;
      $this->ModTimeTo = $ModTimeTo ? $ModTimeTo->format(\DateTime::ATOM) : null;
      $this->NumberOfDays = $NumberOfDays;
      $this->IncludeFinalValueFee = $IncludeFinalValueFee;
      $this->SortingOrder = $SortingOrder;
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
     * @return \EbayWsdl\GetOrdersRequestType
     */
    public function setOrderIDArray($OrderIDArray)
    {
      $this->OrderIDArray = $OrderIDArray;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateTimeFrom()
    {
      if ($this->CreateTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateTimeFrom
     * @return \EbayWsdl\GetOrdersRequestType
     */
    public function setCreateTimeFrom(\DateTime $CreateTimeFrom)
    {
      $this->CreateTimeFrom = $CreateTimeFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateTimeTo()
    {
      if ($this->CreateTimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateTimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateTimeTo
     * @return \EbayWsdl\GetOrdersRequestType
     */
    public function setCreateTimeTo(\DateTime $CreateTimeTo)
    {
      $this->CreateTimeTo = $CreateTimeTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return TradingRoleCodeType
     */
    public function getOrderRole()
    {
      return $this->OrderRole;
    }

    /**
     * @param TradingRoleCodeType $OrderRole
     * @return \EbayWsdl\GetOrdersRequestType
     */
    public function setOrderRole($OrderRole)
    {
      $this->OrderRole = $OrderRole;
      return $this;
    }

    /**
     * @return OrderStatusCodeType
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param OrderStatusCodeType $OrderStatus
     * @return \EbayWsdl\GetOrdersRequestType
     */
    public function setOrderStatus($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
      return $this;
    }

    /**
     * @return ListingTypeCodeType
     */
    public function getListingType()
    {
      return $this->ListingType;
    }

    /**
     * @param ListingTypeCodeType $ListingType
     * @return \EbayWsdl\GetOrdersRequestType
     */
    public function setListingType($ListingType)
    {
      $this->ListingType = $ListingType;
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
     * @return \EbayWsdl\GetOrdersRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
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
     * @return \EbayWsdl\GetOrdersRequestType
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
     * @return \EbayWsdl\GetOrdersRequestType
     */
    public function setModTimeTo(\DateTime $ModTimeTo)
    {
      $this->ModTimeTo = $ModTimeTo->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\GetOrdersRequestType
     */
    public function setNumberOfDays($NumberOfDays)
    {
      $this->NumberOfDays = $NumberOfDays;
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
     * @return \EbayWsdl\GetOrdersRequestType
     */
    public function setIncludeFinalValueFee($IncludeFinalValueFee)
    {
      $this->IncludeFinalValueFee = $IncludeFinalValueFee;
      return $this;
    }

    /**
     * @return SortOrderCodeType
     */
    public function getSortingOrder()
    {
      return $this->SortingOrder;
    }

    /**
     * @param SortOrderCodeType $SortingOrder
     * @return \EbayWsdl\GetOrdersRequestType
     */
    public function setSortingOrder($SortingOrder)
    {
      $this->SortingOrder = $SortingOrder;
      return $this;
    }

}
