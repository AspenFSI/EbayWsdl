<?php

namespace EbayWsdl\Classes;

class GetSellerTransactionsResponseType extends AbstractResponseType
{

    /**
     * @var PaginationResultType $PaginationResult
     */
    protected $PaginationResult = null;

    /**
     * @var boolean $HasMoreTransactions
     */
    protected $HasMoreTransactions = null;

    /**
     * @var int $TransactionsPerPage
     */
    protected $TransactionsPerPage = null;

    /**
     * @var int $PageNumber
     */
    protected $PageNumber = null;

    /**
     * @var int $ReturnedTransactionCountActual
     */
    protected $ReturnedTransactionCountActual = null;

    /**
     * @var UserType $Seller
     */
    protected $Seller = null;

    /**
     * @var TransactionArrayType $TransactionArray
     */
    protected $TransactionArray = null;

    /**
     * @var boolean $PayPalPreferred
     */
    protected $PayPalPreferred = null;

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
     * @param PaginationResultType $PaginationResult
     * @param boolean $HasMoreTransactions
     * @param int $TransactionsPerPage
     * @param int $PageNumber
     * @param int $ReturnedTransactionCountActual
     * @param UserType $Seller
     * @param TransactionArrayType $TransactionArray
     * @param boolean $PayPalPreferred
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $PaginationResult = null, $HasMoreTransactions = null, $TransactionsPerPage = null, $PageNumber = null, $ReturnedTransactionCountActual = null, $Seller = null, $TransactionArray = null, $PayPalPreferred = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->PaginationResult = $PaginationResult;
      $this->HasMoreTransactions = $HasMoreTransactions;
      $this->TransactionsPerPage = $TransactionsPerPage;
      $this->PageNumber = $PageNumber;
      $this->ReturnedTransactionCountActual = $ReturnedTransactionCountActual;
      $this->Seller = $Seller;
      $this->TransactionArray = $TransactionArray;
      $this->PayPalPreferred = $PayPalPreferred;
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
     * @return \EbayWsdl\Classes\GetSellerTransactionsResponseType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasMoreTransactions()
    {
      return $this->HasMoreTransactions;
    }

    /**
     * @param boolean $HasMoreTransactions
     * @return \EbayWsdl\Classes\GetSellerTransactionsResponseType
     */
    public function setHasMoreTransactions($HasMoreTransactions)
    {
      $this->HasMoreTransactions = $HasMoreTransactions;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionsPerPage()
    {
      return $this->TransactionsPerPage;
    }

    /**
     * @param int $TransactionsPerPage
     * @return \EbayWsdl\Classes\GetSellerTransactionsResponseType
     */
    public function setTransactionsPerPage($TransactionsPerPage)
    {
      $this->TransactionsPerPage = $TransactionsPerPage;
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
     * @return \EbayWsdl\Classes\GetSellerTransactionsResponseType
     */
    public function setPageNumber($PageNumber)
    {
      $this->PageNumber = $PageNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnedTransactionCountActual()
    {
      return $this->ReturnedTransactionCountActual;
    }

    /**
     * @param int $ReturnedTransactionCountActual
     * @return \EbayWsdl\Classes\GetSellerTransactionsResponseType
     */
    public function setReturnedTransactionCountActual($ReturnedTransactionCountActual)
    {
      $this->ReturnedTransactionCountActual = $ReturnedTransactionCountActual;
      return $this;
    }

    /**
     * @return UserType
     */
    public function getSeller()
    {
      return $this->Seller;
    }

    /**
     * @param UserType $Seller
     * @return \EbayWsdl\Classes\GetSellerTransactionsResponseType
     */
    public function setSeller($Seller)
    {
      $this->Seller = $Seller;
      return $this;
    }

    /**
     * @return TransactionArrayType
     */
    public function getTransactionArray()
    {
      return $this->TransactionArray;
    }

    /**
     * @param TransactionArrayType $TransactionArray
     * @return \EbayWsdl\Classes\GetSellerTransactionsResponseType
     */
    public function setTransactionArray($TransactionArray)
    {
      $this->TransactionArray = $TransactionArray;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPayPalPreferred()
    {
      return $this->PayPalPreferred;
    }

    /**
     * @param boolean $PayPalPreferred
     * @return \EbayWsdl\Classes\GetSellerTransactionsResponseType
     */
    public function setPayPalPreferred($PayPalPreferred)
    {
      $this->PayPalPreferred = $PayPalPreferred;
      return $this;
    }

}
