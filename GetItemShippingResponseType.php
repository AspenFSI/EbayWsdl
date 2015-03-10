<?php

namespace EbayWsdl;

class GetItemShippingResponseType extends AbstractResponseType
{

    /**
     * @var ShippingDetailsType $ShippingDetails
     */
    protected $ShippingDetails = null;

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
     * @param ShippingDetailsType $ShippingDetails
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $ShippingDetails = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->ShippingDetails = $ShippingDetails;
    }

    /**
     * @return ShippingDetailsType
     */
    public function getShippingDetails()
    {
      return $this->ShippingDetails;
    }

    /**
     * @param ShippingDetailsType $ShippingDetails
     * @return \EbayWsdl\GetItemShippingResponseType
     */
    public function setShippingDetails($ShippingDetails)
    {
      $this->ShippingDetails = $ShippingDetails;
      return $this;
    }

}
