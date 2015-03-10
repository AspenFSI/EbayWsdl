<?php

namespace EbayWsdl;

class GetWantItNowSearchResultsResponseType extends AbstractResponseType
{

    /**
     * @var WantItNowPostArrayType $WantItNowPostArray
     */
    protected $WantItNowPostArray = null;

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
     * @param WantItNowPostArrayType $WantItNowPostArray
     * @param boolean $HasMoreItems
     * @param int $ItemsPerPage
     * @param int $PageNumber
     * @param PaginationResultType $PaginationResult
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $WantItNowPostArray = null, $HasMoreItems = null, $ItemsPerPage = null, $PageNumber = null, $PaginationResult = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->WantItNowPostArray = $WantItNowPostArray;
      $this->HasMoreItems = $HasMoreItems;
      $this->ItemsPerPage = $ItemsPerPage;
      $this->PageNumber = $PageNumber;
      $this->PaginationResult = $PaginationResult;
    }

    /**
     * @return WantItNowPostArrayType
     */
    public function getWantItNowPostArray()
    {
      return $this->WantItNowPostArray;
    }

    /**
     * @param WantItNowPostArrayType $WantItNowPostArray
     * @return \EbayWsdl\GetWantItNowSearchResultsResponseType
     */
    public function setWantItNowPostArray($WantItNowPostArray)
    {
      $this->WantItNowPostArray = $WantItNowPostArray;
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
     * @return \EbayWsdl\GetWantItNowSearchResultsResponseType
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
     * @return \EbayWsdl\GetWantItNowSearchResultsResponseType
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
     * @return \EbayWsdl\GetWantItNowSearchResultsResponseType
     */
    public function setPageNumber($PageNumber)
    {
      $this->PageNumber = $PageNumber;
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
     * @return \EbayWsdl\GetWantItNowSearchResultsResponseType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
      return $this;
    }

}
