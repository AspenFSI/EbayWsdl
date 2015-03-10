<?php

namespace EbayWsdl;

class GetSellerPaymentsResponseType extends AbstractResponseType
{

    /**
     * @var PaginationResultType $PaginationResult
     */
    protected $PaginationResult = null;

    /**
     * @var boolean $HasMorePayments
     */
    protected $HasMorePayments = null;

    /**
     * @var SellerPaymentType[] $SellerPayment
     */
    protected $SellerPayment = null;

    /**
     * @var int $PaymentsPerPage
     */
    protected $PaymentsPerPage = null;

    /**
     * @var int $PageNumber
     */
    protected $PageNumber = null;

    /**
     * @var int $ReturnedPaymentCountActual
     */
    protected $ReturnedPaymentCountActual = null;

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
     * @param boolean $HasMorePayments
     * @param SellerPaymentType[] $SellerPayment
     * @param int $PaymentsPerPage
     * @param int $PageNumber
     * @param int $ReturnedPaymentCountActual
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $PaginationResult = null, $HasMorePayments = null, array $SellerPayment = null, $PaymentsPerPage = null, $PageNumber = null, $ReturnedPaymentCountActual = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->PaginationResult = $PaginationResult;
      $this->HasMorePayments = $HasMorePayments;
      $this->SellerPayment = $SellerPayment;
      $this->PaymentsPerPage = $PaymentsPerPage;
      $this->PageNumber = $PageNumber;
      $this->ReturnedPaymentCountActual = $ReturnedPaymentCountActual;
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
     * @return \EbayWsdl\GetSellerPaymentsResponseType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasMorePayments()
    {
      return $this->HasMorePayments;
    }

    /**
     * @param boolean $HasMorePayments
     * @return \EbayWsdl\GetSellerPaymentsResponseType
     */
    public function setHasMorePayments($HasMorePayments)
    {
      $this->HasMorePayments = $HasMorePayments;
      return $this;
    }

    /**
     * @return SellerPaymentType[]
     */
    public function getSellerPayment()
    {
      return $this->SellerPayment;
    }

    /**
     * @param SellerPaymentType[] $SellerPayment
     * @return \EbayWsdl\GetSellerPaymentsResponseType
     */
    public function setSellerPayment(array $SellerPayment)
    {
      $this->SellerPayment = $SellerPayment;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentsPerPage()
    {
      return $this->PaymentsPerPage;
    }

    /**
     * @param int $PaymentsPerPage
     * @return \EbayWsdl\GetSellerPaymentsResponseType
     */
    public function setPaymentsPerPage($PaymentsPerPage)
    {
      $this->PaymentsPerPage = $PaymentsPerPage;
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
     * @return \EbayWsdl\GetSellerPaymentsResponseType
     */
    public function setPageNumber($PageNumber)
    {
      $this->PageNumber = $PageNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnedPaymentCountActual()
    {
      return $this->ReturnedPaymentCountActual;
    }

    /**
     * @param int $ReturnedPaymentCountActual
     * @return \EbayWsdl\GetSellerPaymentsResponseType
     */
    public function setReturnedPaymentCountActual($ReturnedPaymentCountActual)
    {
      $this->ReturnedPaymentCountActual = $ReturnedPaymentCountActual;
      return $this;
    }

}
