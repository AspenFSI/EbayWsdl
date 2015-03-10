<?php

namespace EbayWsdl;

class GetVeROReportStatusResponseType extends AbstractResponseType
{

    /**
     * @var PaginationResultType $PaginationResult
     */
    protected $PaginationResult = null;

    /**
     * @var boolean $HasMoreItems
     */
    protected $HasMoreItems = null;

    /**
     * @var int $ItemsPerPage
     */
    protected $ItemsPerPage = null;

    /**
     * @var int $PageNumber
     */
    protected $PageNumber = null;

    /**
     * @var int $VeROReportPacketID
     */
    protected $VeROReportPacketID = null;

    /**
     * @var VeROReportPacketStatusCodeType $VeROReportPacketStatus
     */
    protected $VeROReportPacketStatus = null;

    /**
     * @var VeROReportedItemDetailsType $ReportedItemDetails
     */
    protected $ReportedItemDetails = null;

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
     * @param boolean $HasMoreItems
     * @param int $ItemsPerPage
     * @param int $PageNumber
     * @param int $VeROReportPacketID
     * @param VeROReportPacketStatusCodeType $VeROReportPacketStatus
     * @param VeROReportedItemDetailsType $ReportedItemDetails
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $PaginationResult = null, $HasMoreItems = null, $ItemsPerPage = null, $PageNumber = null, $VeROReportPacketID = null, $VeROReportPacketStatus = null, $ReportedItemDetails = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->PaginationResult = $PaginationResult;
      $this->HasMoreItems = $HasMoreItems;
      $this->ItemsPerPage = $ItemsPerPage;
      $this->PageNumber = $PageNumber;
      $this->VeROReportPacketID = $VeROReportPacketID;
      $this->VeROReportPacketStatus = $VeROReportPacketStatus;
      $this->ReportedItemDetails = $ReportedItemDetails;
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
     * @return \EbayWsdl\GetVeROReportStatusResponseType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasMoreItems()
    {
      return $this->HasMoreItems;
    }

    /**
     * @param boolean $HasMoreItems
     * @return \EbayWsdl\GetVeROReportStatusResponseType
     */
    public function setHasMoreItems($HasMoreItems)
    {
      $this->HasMoreItems = $HasMoreItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemsPerPage()
    {
      return $this->ItemsPerPage;
    }

    /**
     * @param int $ItemsPerPage
     * @return \EbayWsdl\GetVeROReportStatusResponseType
     */
    public function setItemsPerPage($ItemsPerPage)
    {
      $this->ItemsPerPage = $ItemsPerPage;
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
     * @return \EbayWsdl\GetVeROReportStatusResponseType
     */
    public function setPageNumber($PageNumber)
    {
      $this->PageNumber = $PageNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getVeROReportPacketID()
    {
      return $this->VeROReportPacketID;
    }

    /**
     * @param int $VeROReportPacketID
     * @return \EbayWsdl\GetVeROReportStatusResponseType
     */
    public function setVeROReportPacketID($VeROReportPacketID)
    {
      $this->VeROReportPacketID = $VeROReportPacketID;
      return $this;
    }

    /**
     * @return VeROReportPacketStatusCodeType
     */
    public function getVeROReportPacketStatus()
    {
      return $this->VeROReportPacketStatus;
    }

    /**
     * @param VeROReportPacketStatusCodeType $VeROReportPacketStatus
     * @return \EbayWsdl\GetVeROReportStatusResponseType
     */
    public function setVeROReportPacketStatus($VeROReportPacketStatus)
    {
      $this->VeROReportPacketStatus = $VeROReportPacketStatus;
      return $this;
    }

    /**
     * @return VeROReportedItemDetailsType
     */
    public function getReportedItemDetails()
    {
      return $this->ReportedItemDetails;
    }

    /**
     * @param VeROReportedItemDetailsType $ReportedItemDetails
     * @return \EbayWsdl\GetVeROReportStatusResponseType
     */
    public function setReportedItemDetails($ReportedItemDetails)
    {
      $this->ReportedItemDetails = $ReportedItemDetails;
      return $this;
    }

}
