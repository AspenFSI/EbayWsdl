<?php

namespace EbayWsdl\Classes;

class GetAccountRequestType extends AbstractRequestType
{

    /**
     * @var AccountHistorySelectionCodeType $AccountHistorySelection
     */
    protected $AccountHistorySelection = null;

    /**
     * @var \DateTime $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var \DateTime $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

    /**
     * @var boolean $ExcludeBalance
     */
    protected $ExcludeBalance = null;

    /**
     * @var boolean $ExcludeSummary
     */
    protected $ExcludeSummary = null;

    /**
     * @var boolean $IncludeConversionRate
     */
    protected $IncludeConversionRate = null;

    /**
     * @var AccountEntrySortTypeCodeType $AccountEntrySortType
     */
    protected $AccountEntrySortType = null;

    /**
     * @var CurrencyCodeType $Currency
     */
    protected $Currency = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

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
     * @param AccountHistorySelectionCodeType $AccountHistorySelection
     * @param \DateTime $InvoiceDate
     * @param \DateTime $BeginDate
     * @param \DateTime $EndDate
     * @param PaginationType $Pagination
     * @param boolean $ExcludeBalance
     * @param boolean $ExcludeSummary
     * @param boolean $IncludeConversionRate
     * @param AccountEntrySortTypeCodeType $AccountEntrySortType
     * @param CurrencyCodeType $Currency
     * @param ItemIDType $ItemID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $AccountHistorySelection = null, \DateTime $InvoiceDate = null, \DateTime $BeginDate = null, \DateTime $EndDate = null, $Pagination = null, $ExcludeBalance = null, $ExcludeSummary = null, $IncludeConversionRate = null, $AccountEntrySortType = null, $Currency = null, $ItemID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->AccountHistorySelection = $AccountHistorySelection;
      $this->InvoiceDate = $InvoiceDate ? $InvoiceDate->format(\DateTime::ATOM) : null;
      $this->BeginDate = $BeginDate ? $BeginDate->format(\DateTime::ATOM) : null;
      $this->EndDate = $EndDate ? $EndDate->format(\DateTime::ATOM) : null;
      $this->Pagination = $Pagination;
      $this->ExcludeBalance = $ExcludeBalance;
      $this->ExcludeSummary = $ExcludeSummary;
      $this->IncludeConversionRate = $IncludeConversionRate;
      $this->AccountEntrySortType = $AccountEntrySortType;
      $this->Currency = $Currency;
      $this->ItemID = $ItemID;
    }

    /**
     * @return AccountHistorySelectionCodeType
     */
    public function getAccountHistorySelection()
    {
      return $this->AccountHistorySelection;
    }

    /**
     * @param AccountHistorySelectionCodeType $AccountHistorySelection
     * @return \EbayWsdl\Classes\GetAccountRequestType
     */
    public function setAccountHistorySelection($AccountHistorySelection)
    {
      $this->AccountHistorySelection = $AccountHistorySelection;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
      if ($this->InvoiceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceDate
     * @return \EbayWsdl\Classes\GetAccountRequestType
     */
    public function setInvoiceDate(\DateTime $InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginDate()
    {
      if ($this->BeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BeginDate
     * @return \EbayWsdl\Classes\GetAccountRequestType
     */
    public function setBeginDate(\DateTime $BeginDate)
    {
      $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \EbayWsdl\Classes\GetAccountRequestType
     */
    public function setEndDate(\DateTime $EndDate)
    {
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\GetAccountRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeBalance()
    {
      return $this->ExcludeBalance;
    }

    /**
     * @param boolean $ExcludeBalance
     * @return \EbayWsdl\Classes\GetAccountRequestType
     */
    public function setExcludeBalance($ExcludeBalance)
    {
      $this->ExcludeBalance = $ExcludeBalance;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeSummary()
    {
      return $this->ExcludeSummary;
    }

    /**
     * @param boolean $ExcludeSummary
     * @return \EbayWsdl\Classes\GetAccountRequestType
     */
    public function setExcludeSummary($ExcludeSummary)
    {
      $this->ExcludeSummary = $ExcludeSummary;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeConversionRate()
    {
      return $this->IncludeConversionRate;
    }

    /**
     * @param boolean $IncludeConversionRate
     * @return \EbayWsdl\Classes\GetAccountRequestType
     */
    public function setIncludeConversionRate($IncludeConversionRate)
    {
      $this->IncludeConversionRate = $IncludeConversionRate;
      return $this;
    }

    /**
     * @return AccountEntrySortTypeCodeType
     */
    public function getAccountEntrySortType()
    {
      return $this->AccountEntrySortType;
    }

    /**
     * @param AccountEntrySortTypeCodeType $AccountEntrySortType
     * @return \EbayWsdl\Classes\GetAccountRequestType
     */
    public function setAccountEntrySortType($AccountEntrySortType)
    {
      $this->AccountEntrySortType = $AccountEntrySortType;
      return $this;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param CurrencyCodeType $Currency
     * @return \EbayWsdl\Classes\GetAccountRequestType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return \EbayWsdl\Classes\GetAccountRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

}
