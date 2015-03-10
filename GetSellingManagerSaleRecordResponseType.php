<?php

namespace EbayWsdl;

class GetSellingManagerSaleRecordResponseType extends AbstractResponseType
{

    /**
     * @var SellingManagerSoldOrderType $SellingManagerSoldOrder
     */
    protected $SellingManagerSoldOrder = null;

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
     * @param SellingManagerSoldOrderType $SellingManagerSoldOrder
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $SellingManagerSoldOrder = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->SellingManagerSoldOrder = $SellingManagerSoldOrder;
    }

    /**
     * @return SellingManagerSoldOrderType
     */
    public function getSellingManagerSoldOrder()
    {
      return $this->SellingManagerSoldOrder;
    }

    /**
     * @param SellingManagerSoldOrderType $SellingManagerSoldOrder
     * @return \EbayWsdl\GetSellingManagerSaleRecordResponseType
     */
    public function setSellingManagerSoldOrder($SellingManagerSoldOrder)
    {
      $this->SellingManagerSoldOrder = $SellingManagerSoldOrder;
      return $this;
    }

}
