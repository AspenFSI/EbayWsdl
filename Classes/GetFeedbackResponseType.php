<?php

namespace EbayWsdl\Classes;

class GetFeedbackResponseType extends AbstractResponseType
{

    /**
     * @var FeedbackDetailArrayType $FeedbackDetailArray
     */
    protected $FeedbackDetailArray = null;

    /**
     * @var int $FeedbackDetailItemTotal
     */
    protected $FeedbackDetailItemTotal = null;

    /**
     * @var FeedbackSummaryType $FeedbackSummary
     */
    protected $FeedbackSummary = null;

    /**
     * @var int $FeedbackScore
     */
    protected $FeedbackScore = null;

    /**
     * @var PaginationResultType $PaginationResult
     */
    protected $PaginationResult = null;

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
     * @param FeedbackDetailArrayType $FeedbackDetailArray
     * @param int $FeedbackDetailItemTotal
     * @param FeedbackSummaryType $FeedbackSummary
     * @param int $FeedbackScore
     * @param PaginationResultType $PaginationResult
     * @param int $EntriesPerPage
     * @param int $PageNumber
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $FeedbackDetailArray = null, $FeedbackDetailItemTotal = null, $FeedbackSummary = null, $FeedbackScore = null, $PaginationResult = null, $EntriesPerPage = null, $PageNumber = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->FeedbackDetailArray = $FeedbackDetailArray;
      $this->FeedbackDetailItemTotal = $FeedbackDetailItemTotal;
      $this->FeedbackSummary = $FeedbackSummary;
      $this->FeedbackScore = $FeedbackScore;
      $this->PaginationResult = $PaginationResult;
      $this->EntriesPerPage = $EntriesPerPage;
      $this->PageNumber = $PageNumber;
    }

    /**
     * @return FeedbackDetailArrayType
     */
    public function getFeedbackDetailArray()
    {
      return $this->FeedbackDetailArray;
    }

    /**
     * @param FeedbackDetailArrayType $FeedbackDetailArray
     * @return \EbayWsdl\Classes\GetFeedbackResponseType
     */
    public function setFeedbackDetailArray($FeedbackDetailArray)
    {
      $this->FeedbackDetailArray = $FeedbackDetailArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackDetailItemTotal()
    {
      return $this->FeedbackDetailItemTotal;
    }

    /**
     * @param int $FeedbackDetailItemTotal
     * @return \EbayWsdl\Classes\GetFeedbackResponseType
     */
    public function setFeedbackDetailItemTotal($FeedbackDetailItemTotal)
    {
      $this->FeedbackDetailItemTotal = $FeedbackDetailItemTotal;
      return $this;
    }

    /**
     * @return FeedbackSummaryType
     */
    public function getFeedbackSummary()
    {
      return $this->FeedbackSummary;
    }

    /**
     * @param FeedbackSummaryType $FeedbackSummary
     * @return \EbayWsdl\Classes\GetFeedbackResponseType
     */
    public function setFeedbackSummary($FeedbackSummary)
    {
      $this->FeedbackSummary = $FeedbackSummary;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackScore()
    {
      return $this->FeedbackScore;
    }

    /**
     * @param int $FeedbackScore
     * @return \EbayWsdl\Classes\GetFeedbackResponseType
     */
    public function setFeedbackScore($FeedbackScore)
    {
      $this->FeedbackScore = $FeedbackScore;
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
     * @return \EbayWsdl\Classes\GetFeedbackResponseType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
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
     * @return \EbayWsdl\Classes\GetFeedbackResponseType
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
     * @return \EbayWsdl\Classes\GetFeedbackResponseType
     */
    public function setPageNumber($PageNumber)
    {
      $this->PageNumber = $PageNumber;
      return $this;
    }

}
