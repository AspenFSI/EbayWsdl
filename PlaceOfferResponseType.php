<?php

namespace EbayWsdl;

class PlaceOfferResponseType extends AbstractResponseType
{

    /**
     * @var SellingStatusType $SellingStatus
     */
    protected $SellingStatus = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var BestOfferType $BestOffer
     */
    protected $BestOffer = null;

    /**
     * @var string $OrderLineItemID
     */
    protected $OrderLineItemID = null;

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
     * @param SellingStatusType $SellingStatus
     * @param string $TransactionID
     * @param BestOfferType $BestOffer
     * @param string $OrderLineItemID
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $SellingStatus = null, $TransactionID = null, $BestOffer = null, $OrderLineItemID = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->SellingStatus = $SellingStatus;
      $this->TransactionID = $TransactionID;
      $this->BestOffer = $BestOffer;
      $this->OrderLineItemID = $OrderLineItemID;
    }

    /**
     * @return SellingStatusType
     */
    public function getSellingStatus()
    {
      return $this->SellingStatus;
    }

    /**
     * @param SellingStatusType $SellingStatus
     * @return \EbayWsdl\PlaceOfferResponseType
     */
    public function setSellingStatus($SellingStatus)
    {
      $this->SellingStatus = $SellingStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
      return $this->TransactionID;
    }

    /**
     * @param string $TransactionID
     * @return \EbayWsdl\PlaceOfferResponseType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return BestOfferType
     */
    public function getBestOffer()
    {
      return $this->BestOffer;
    }

    /**
     * @param BestOfferType $BestOffer
     * @return \EbayWsdl\PlaceOfferResponseType
     */
    public function setBestOffer($BestOffer)
    {
      $this->BestOffer = $BestOffer;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineItemID()
    {
      return $this->OrderLineItemID;
    }

    /**
     * @param string $OrderLineItemID
     * @return \EbayWsdl\PlaceOfferResponseType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

}
