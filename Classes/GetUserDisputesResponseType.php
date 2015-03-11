<?php

namespace EbayWsdl\Classes;

class GetUserDisputesResponseType extends AbstractResponseType
{

    /**
     * @var DisputeIDType $StartingDisputeID
     */
    protected $StartingDisputeID = null;

    /**
     * @var DisputeIDType $EndingDisputeID
     */
    protected $EndingDisputeID = null;

    /**
     * @var DisputeArrayType $DisputeArray
     */
    protected $DisputeArray = null;

    /**
     * @var int $ItemsPerPage
     */
    protected $ItemsPerPage = null;

    /**
     * @var int $PageNumber
     */
    protected $PageNumber = null;

    /**
     * @var DisputeFilterCountType[] $DisputeFilterCount
     */
    protected $DisputeFilterCount = null;

    /**
     * @var PaginationResultType $PaginationResult
     */
    protected $PaginationResult = null;

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
     * @param DisputeIDType $StartingDisputeID
     * @param DisputeIDType $EndingDisputeID
     * @param DisputeArrayType $DisputeArray
     * @param int $ItemsPerPage
     * @param int $PageNumber
     * @param DisputeFilterCountType[] $DisputeFilterCount
     * @param PaginationResultType $PaginationResult
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $StartingDisputeID = null, $EndingDisputeID = null, $DisputeArray = null, $ItemsPerPage = null, $PageNumber = null, array $DisputeFilterCount = null, $PaginationResult = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->StartingDisputeID = $StartingDisputeID;
      $this->EndingDisputeID = $EndingDisputeID;
      $this->DisputeArray = $DisputeArray;
      $this->ItemsPerPage = $ItemsPerPage;
      $this->PageNumber = $PageNumber;
      $this->DisputeFilterCount = $DisputeFilterCount;
      $this->PaginationResult = $PaginationResult;
    }

    /**
     * @return DisputeIDType
     */
    public function getStartingDisputeID()
    {
      return $this->StartingDisputeID;
    }

    /**
     * @param DisputeIDType $StartingDisputeID
     * @return \EbayWsdl\Classes\GetUserDisputesResponseType
     */
    public function setStartingDisputeID($StartingDisputeID)
    {
      $this->StartingDisputeID = $StartingDisputeID;
      return $this;
    }

    /**
     * @return DisputeIDType
     */
    public function getEndingDisputeID()
    {
      return $this->EndingDisputeID;
    }

    /**
     * @param DisputeIDType $EndingDisputeID
     * @return \EbayWsdl\Classes\GetUserDisputesResponseType
     */
    public function setEndingDisputeID($EndingDisputeID)
    {
      $this->EndingDisputeID = $EndingDisputeID;
      return $this;
    }

    /**
     * @return DisputeArrayType
     */
    public function getDisputeArray()
    {
      return $this->DisputeArray;
    }

    /**
     * @param DisputeArrayType $DisputeArray
     * @return \EbayWsdl\Classes\GetUserDisputesResponseType
     */
    public function setDisputeArray($DisputeArray)
    {
      $this->DisputeArray = $DisputeArray;
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
     * @return \EbayWsdl\Classes\GetUserDisputesResponseType
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
     * @return \EbayWsdl\Classes\GetUserDisputesResponseType
     */
    public function setPageNumber($PageNumber)
    {
      $this->PageNumber = $PageNumber;
      return $this;
    }

    /**
     * @return DisputeFilterCountType[]
     */
    public function getDisputeFilterCount()
    {
      return $this->DisputeFilterCount;
    }

    /**
     * @param DisputeFilterCountType[] $DisputeFilterCount
     * @return \EbayWsdl\Classes\GetUserDisputesResponseType
     */
    public function setDisputeFilterCount(array $DisputeFilterCount)
    {
      $this->DisputeFilterCount = $DisputeFilterCount;
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
     * @return \EbayWsdl\Classes\GetUserDisputesResponseType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
      return $this;
    }

}
