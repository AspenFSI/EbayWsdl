<?php

namespace EbayWsdl;

class GetSellingManagerSoldListingsResponseType extends AbstractResponseType
{

    /**
     * @var SellingManagerSoldOrderType[] $SaleRecord
     */
    protected $SaleRecord = null;

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
     * @param SellingManagerSoldOrderType[] $SaleRecord
     * @param PaginationResultType $PaginationResult
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $SaleRecord = null, $PaginationResult = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->SaleRecord = $SaleRecord;
      $this->PaginationResult = $PaginationResult;
    }

    /**
     * @return SellingManagerSoldOrderType[]
     */
    public function getSaleRecord()
    {
      return $this->SaleRecord;
    }

    /**
     * @param SellingManagerSoldOrderType[] $SaleRecord
     * @return \EbayWsdl\GetSellingManagerSoldListingsResponseType
     */
    public function setSaleRecord(array $SaleRecord)
    {
      $this->SaleRecord = $SaleRecord;
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
     * @return \EbayWsdl\GetSellingManagerSoldListingsResponseType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
      return $this;
    }

}
