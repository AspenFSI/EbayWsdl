<?php

namespace EbayWsdl\Classes;

class GetMyeBaySellingResponseType extends AbstractResponseType
{

    /**
     * @var SellingSummaryType $SellingSummary
     */
    protected $SellingSummary = null;

    /**
     * @var PaginatedItemArrayType $ScheduledList
     */
    protected $ScheduledList = null;

    /**
     * @var PaginatedItemArrayType $ActiveList
     */
    protected $ActiveList = null;

    /**
     * @var PaginatedOrderTransactionArrayType $SoldList
     */
    protected $SoldList = null;

    /**
     * @var PaginatedItemArrayType $UnsoldList
     */
    protected $UnsoldList = null;

    /**
     * @var MyeBaySellingSummaryType $Summary
     */
    protected $Summary = null;

    /**
     * @var PaginatedItemArrayType $BidList
     */
    protected $BidList = null;

    /**
     * @var PaginatedOrderTransactionArrayType $DeletedFromSoldList
     */
    protected $DeletedFromSoldList = null;

    /**
     * @var PaginatedItemArrayType $DeletedFromUnsoldList
     */
    protected $DeletedFromUnsoldList = null;

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
     * @param SellingSummaryType $SellingSummary
     * @param PaginatedItemArrayType $ScheduledList
     * @param PaginatedItemArrayType $ActiveList
     * @param PaginatedOrderTransactionArrayType $SoldList
     * @param PaginatedItemArrayType $UnsoldList
     * @param MyeBaySellingSummaryType $Summary
     * @param PaginatedItemArrayType $BidList
     * @param PaginatedOrderTransactionArrayType $DeletedFromSoldList
     * @param PaginatedItemArrayType $DeletedFromUnsoldList
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $SellingSummary = null, $ScheduledList = null, $ActiveList = null, $SoldList = null, $UnsoldList = null, $Summary = null, $BidList = null, $DeletedFromSoldList = null, $DeletedFromUnsoldList = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->SellingSummary = $SellingSummary;
      $this->ScheduledList = $ScheduledList;
      $this->ActiveList = $ActiveList;
      $this->SoldList = $SoldList;
      $this->UnsoldList = $UnsoldList;
      $this->Summary = $Summary;
      $this->BidList = $BidList;
      $this->DeletedFromSoldList = $DeletedFromSoldList;
      $this->DeletedFromUnsoldList = $DeletedFromUnsoldList;
    }

    /**
     * @return SellingSummaryType
     */
    public function getSellingSummary()
    {
      return $this->SellingSummary;
    }

    /**
     * @param SellingSummaryType $SellingSummary
     * @return \EbayWsdl\Classes\GetMyeBaySellingResponseType
     */
    public function setSellingSummary($SellingSummary)
    {
      $this->SellingSummary = $SellingSummary;
      return $this;
    }

    /**
     * @return PaginatedItemArrayType
     */
    public function getScheduledList()
    {
      return $this->ScheduledList;
    }

    /**
     * @param PaginatedItemArrayType $ScheduledList
     * @return \EbayWsdl\Classes\GetMyeBaySellingResponseType
     */
    public function setScheduledList($ScheduledList)
    {
      $this->ScheduledList = $ScheduledList;
      return $this;
    }

    /**
     * @return PaginatedItemArrayType
     */
    public function getActiveList()
    {
      return $this->ActiveList;
    }

    /**
     * @param PaginatedItemArrayType $ActiveList
     * @return \EbayWsdl\Classes\GetMyeBaySellingResponseType
     */
    public function setActiveList($ActiveList)
    {
      $this->ActiveList = $ActiveList;
      return $this;
    }

    /**
     * @return PaginatedOrderTransactionArrayType
     */
    public function getSoldList()
    {
      return $this->SoldList;
    }

    /**
     * @param PaginatedOrderTransactionArrayType $SoldList
     * @return \EbayWsdl\Classes\GetMyeBaySellingResponseType
     */
    public function setSoldList($SoldList)
    {
      $this->SoldList = $SoldList;
      return $this;
    }

    /**
     * @return PaginatedItemArrayType
     */
    public function getUnsoldList()
    {
      return $this->UnsoldList;
    }

    /**
     * @param PaginatedItemArrayType $UnsoldList
     * @return \EbayWsdl\Classes\GetMyeBaySellingResponseType
     */
    public function setUnsoldList($UnsoldList)
    {
      $this->UnsoldList = $UnsoldList;
      return $this;
    }

    /**
     * @return MyeBaySellingSummaryType
     */
    public function getSummary()
    {
      return $this->Summary;
    }

    /**
     * @param MyeBaySellingSummaryType $Summary
     * @return \EbayWsdl\Classes\GetMyeBaySellingResponseType
     */
    public function setSummary($Summary)
    {
      $this->Summary = $Summary;
      return $this;
    }

    /**
     * @return PaginatedItemArrayType
     */
    public function getBidList()
    {
      return $this->BidList;
    }

    /**
     * @param PaginatedItemArrayType $BidList
     * @return \EbayWsdl\Classes\GetMyeBaySellingResponseType
     */
    public function setBidList($BidList)
    {
      $this->BidList = $BidList;
      return $this;
    }

    /**
     * @return PaginatedOrderTransactionArrayType
     */
    public function getDeletedFromSoldList()
    {
      return $this->DeletedFromSoldList;
    }

    /**
     * @param PaginatedOrderTransactionArrayType $DeletedFromSoldList
     * @return \EbayWsdl\Classes\GetMyeBaySellingResponseType
     */
    public function setDeletedFromSoldList($DeletedFromSoldList)
    {
      $this->DeletedFromSoldList = $DeletedFromSoldList;
      return $this;
    }

    /**
     * @return PaginatedItemArrayType
     */
    public function getDeletedFromUnsoldList()
    {
      return $this->DeletedFromUnsoldList;
    }

    /**
     * @param PaginatedItemArrayType $DeletedFromUnsoldList
     * @return \EbayWsdl\Classes\GetMyeBaySellingResponseType
     */
    public function setDeletedFromUnsoldList($DeletedFromUnsoldList)
    {
      $this->DeletedFromUnsoldList = $DeletedFromUnsoldList;
      return $this;
    }

}
