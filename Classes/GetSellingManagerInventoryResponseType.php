<?php

namespace EbayWsdl\Classes;

class GetSellingManagerInventoryResponseType extends AbstractResponseType
{

    /**
     * @var \DateTime $InventoryCountLastCalculatedDate
     */
    protected $InventoryCountLastCalculatedDate = null;

    /**
     * @var SellingManagerProductType[] $SellingManagerProduct
     */
    protected $SellingManagerProduct = null;

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
     * @param \DateTime $InventoryCountLastCalculatedDate
     * @param SellingManagerProductType[] $SellingManagerProduct
     * @param PaginationResultType $PaginationResult
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, \DateTime $InventoryCountLastCalculatedDate = null, array $SellingManagerProduct = null, $PaginationResult = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->InventoryCountLastCalculatedDate = $InventoryCountLastCalculatedDate ? $InventoryCountLastCalculatedDate->format(\DateTime::ATOM) : null;
      $this->SellingManagerProduct = $SellingManagerProduct;
      $this->PaginationResult = $PaginationResult;
    }

    /**
     * @return \DateTime
     */
    public function getInventoryCountLastCalculatedDate()
    {
      if ($this->InventoryCountLastCalculatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InventoryCountLastCalculatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InventoryCountLastCalculatedDate
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryResponseType
     */
    public function setInventoryCountLastCalculatedDate(\DateTime $InventoryCountLastCalculatedDate)
    {
      $this->InventoryCountLastCalculatedDate = $InventoryCountLastCalculatedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return SellingManagerProductType[]
     */
    public function getSellingManagerProduct()
    {
      return $this->SellingManagerProduct;
    }

    /**
     * @param SellingManagerProductType[] $SellingManagerProduct
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryResponseType
     */
    public function setSellingManagerProduct(array $SellingManagerProduct)
    {
      $this->SellingManagerProduct = $SellingManagerProduct;
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
     * @return \EbayWsdl\Classes\GetSellingManagerInventoryResponseType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
      return $this;
    }

}
