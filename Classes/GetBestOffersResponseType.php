<?php

namespace EbayWsdl\Classes;

class GetBestOffersResponseType extends AbstractResponseType
{

    /**
     * @var BestOfferArrayType $BestOfferArray
     */
    protected $BestOfferArray = null;

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

    /**
     * @var ItemBestOffersArrayType $ItemBestOffersArray
     */
    protected $ItemBestOffersArray = null;

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
     * @param BestOfferArrayType $BestOfferArray
     * @param ItemType $Item
     * @param ItemBestOffersArrayType $ItemBestOffersArray
     * @param int $PageNumber
     * @param PaginationResultType $PaginationResult
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $BestOfferArray = null, $Item = null, $ItemBestOffersArray = null, $PageNumber = null, $PaginationResult = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->BestOfferArray = $BestOfferArray;
      $this->Item = $Item;
      $this->ItemBestOffersArray = $ItemBestOffersArray;
      $this->PageNumber = $PageNumber;
      $this->PaginationResult = $PaginationResult;
    }

    /**
     * @return BestOfferArrayType
     */
    public function getBestOfferArray()
    {
      return $this->BestOfferArray;
    }

    /**
     * @param BestOfferArrayType $BestOfferArray
     * @return \EbayWsdl\Classes\GetBestOffersResponseType
     */
    public function setBestOfferArray($BestOfferArray)
    {
      $this->BestOfferArray = $BestOfferArray;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ItemType $Item
     * @return \EbayWsdl\Classes\GetBestOffersResponseType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return ItemBestOffersArrayType
     */
    public function getItemBestOffersArray()
    {
      return $this->ItemBestOffersArray;
    }

    /**
     * @param ItemBestOffersArrayType $ItemBestOffersArray
     * @return \EbayWsdl\Classes\GetBestOffersResponseType
     */
    public function setItemBestOffersArray($ItemBestOffersArray)
    {
      $this->ItemBestOffersArray = $ItemBestOffersArray;
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
     * @return \EbayWsdl\Classes\GetBestOffersResponseType
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
     * @return \EbayWsdl\Classes\GetBestOffersResponseType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
      return $this;
    }

}
