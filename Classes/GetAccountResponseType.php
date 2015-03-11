<?php

namespace EbayWsdl\Classes;

class GetAccountResponseType extends AbstractResponseType
{

    /**
     * @var string $AccountID
     */
    protected $AccountID = null;

    /**
     * @var AccountSummaryType $AccountSummary
     */
    protected $AccountSummary = null;

    /**
     * @var CurrencyCodeType $Currency
     */
    protected $Currency = null;

    /**
     * @var AccountEntriesType $AccountEntries
     */
    protected $AccountEntries = null;

    /**
     * @var PaginationResultType $PaginationResult
     */
    protected $PaginationResult = null;

    /**
     * @var boolean $HasMoreEntries
     */
    protected $HasMoreEntries = null;

    /**
     * @var int $EntriesPerPage
     */
    protected $EntriesPerPage = null;

    /**
     * @var int $PageNumber
     */
    protected $PageNumber = null;

    /**
     * @param \DateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Message
     * @param string $Version
     * @param string $Build
     * @param string $NotificationEventName
     * @param DuplicateInvocationDetailsType $DuplicateInvocationDetails
     * @param string $RecipientUserID
     * @param string $EIASToken
     * @param string $NotificationSignature
     * @param string $HardExpirationWarning
     * @param BotBlockResponseType $BotBlock
     * @param string $ExternalUserData
     * @param string $any
     * @param string $AccountID
     * @param AccountSummaryType $AccountSummary
     * @param CurrencyCodeType $Currency
     * @param AccountEntriesType $AccountEntries
     * @param PaginationResultType $PaginationResult
     * @param boolean $HasMoreEntries
     * @param int $EntriesPerPage
     * @param int $PageNumber
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $AccountID = null, $AccountSummary = null, $Currency = null, $AccountEntries = null, $PaginationResult = null, $HasMoreEntries = null, $EntriesPerPage = null, $PageNumber = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->AccountID = $AccountID;
      $this->AccountSummary = $AccountSummary;
      $this->Currency = $Currency;
      $this->AccountEntries = $AccountEntries;
      $this->PaginationResult = $PaginationResult;
      $this->HasMoreEntries = $HasMoreEntries;
      $this->EntriesPerPage = $EntriesPerPage;
      $this->PageNumber = $PageNumber;
    }

    /**
     * @return string
     */
    public function getAccountID()
    {
      return $this->AccountID;
    }

    /**
     * @param string $AccountID
     * @return \EbayWsdl\Classes\GetAccountResponseType
     */
    public function setAccountID($AccountID)
    {
      $this->AccountID = $AccountID;
      return $this;
    }

    /**
     * @return AccountSummaryType
     */
    public function getAccountSummary()
    {
      return $this->AccountSummary;
    }

    /**
     * @param AccountSummaryType $AccountSummary
     * @return \EbayWsdl\Classes\GetAccountResponseType
     */
    public function setAccountSummary($AccountSummary)
    {
      $this->AccountSummary = $AccountSummary;
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
     * @return \EbayWsdl\Classes\GetAccountResponseType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return AccountEntriesType
     */
    public function getAccountEntries()
    {
      return $this->AccountEntries;
    }

    /**
     * @param AccountEntriesType $AccountEntries
     * @return \EbayWsdl\Classes\GetAccountResponseType
     */
    public function setAccountEntries($AccountEntries)
    {
      $this->AccountEntries = $AccountEntries;
      return $this;
    }

    /**
     * @return PaginationResultType
     */
    public function getPaginationResult()
    {
      return $this->PaginationResult;
    }

    /**
     * @param PaginationResultType $PaginationResult
     * @return \EbayWsdl\Classes\GetAccountResponseType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasMoreEntries()
    {
      return $this->HasMoreEntries;
    }

    /**
     * @param boolean $HasMoreEntries
     * @return \EbayWsdl\Classes\GetAccountResponseType
     */
    public function setHasMoreEntries($HasMoreEntries)
    {
      $this->HasMoreEntries = $HasMoreEntries;
      return $this;
    }

    /**
     * @return int
     */
    public function getEntriesPerPage()
    {
      return $this->EntriesPerPage;
    }

    /**
     * @param int $EntriesPerPage
     * @return \EbayWsdl\Classes\GetAccountResponseType
     */
    public function setEntriesPerPage($EntriesPerPage)
    {
      $this->EntriesPerPage = $EntriesPerPage;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
      return $this->PageNumber;
    }

    /**
     * @param int $PageNumber
     * @return \EbayWsdl\Classes\GetAccountResponseType
     */
    public function setPageNumber($PageNumber)
    {
      $this->PageNumber = $PageNumber;
      return $this;
    }

}
