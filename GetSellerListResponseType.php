<?php

namespace EbayWsdl;

class GetSellerListResponseType extends AbstractResponseType
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
     * @var ItemArrayType $ItemArray
     */
    protected $ItemArray = null;

    /**
     * @var int $ItemsPerPage
     */
    protected $ItemsPerPage = null;

    /**
     * @var int $PageNumber
     */
    protected $PageNumber = null;

    /**
     * @var int $ReturnedItemCountActual
     */
    protected $ReturnedItemCountActual = null;

    /**
     * @var UserType $Seller
     */
    protected $Seller = null;

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
     * @param ItemArrayType $ItemArray
     * @param int $ItemsPerPage
     * @param int $PageNumber
     * @param int $ReturnedItemCountActual
     * @param UserType $Seller
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $PaginationResult = null, $HasMoreItems = null, $ItemArray = null, $ItemsPerPage = null, $PageNumber = null, $ReturnedItemCountActual = null, $Seller = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->PaginationResult = $PaginationResult;
      $this->HasMoreItems = $HasMoreItems;
      $this->ItemArray = $ItemArray;
      $this->ItemsPerPage = $ItemsPerPage;
      $this->PageNumber = $PageNumber;
      $this->ReturnedItemCountActual = $ReturnedItemCountActual;
      $this->Seller = $Seller;
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
     * @return \EbayWsdl\GetSellerListResponseType
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
     * @return \EbayWsdl\GetSellerListResponseType
     */
    public function setHasMoreItems($HasMoreItems)
    {
      $this->HasMoreItems = $HasMoreItems;
      return $this;
    }

    /**
     * @return ItemArrayType
     */
    public function getItemArray()
    {
      return $this->ItemArray;
    }

    /**
     * @param ItemArrayType $ItemArray
     * @return \EbayWsdl\GetSellerListResponseType
     */
    public function setItemArray($ItemArray)
    {
      $this->ItemArray = $ItemArray;
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
     * @return \EbayWsdl\GetSellerListResponseType
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
     * @return \EbayWsdl\GetSellerListResponseType
     */
    public function setPageNumber($PageNumber)
    {
      $this->PageNumber = $PageNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnedItemCountActual()
    {
      return $this->ReturnedItemCountActual;
    }

    /**
     * @param int $ReturnedItemCountActual
     * @return \EbayWsdl\GetSellerListResponseType
     */
    public function setReturnedItemCountActual($ReturnedItemCountActual)
    {
      $this->ReturnedItemCountActual = $ReturnedItemCountActual;
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
     * @return \EbayWsdl\GetSellerListResponseType
     */
    public function setSeller($Seller)
    {
      $this->Seller = $Seller;
      return $this;
    }

}
