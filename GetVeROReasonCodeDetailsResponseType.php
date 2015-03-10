<?php

namespace EbayWsdl;

class GetVeROReasonCodeDetailsResponseType extends AbstractResponseType
{

    /**
     * @var VeROReasonCodeDetailsType $VeROReasonCodeDetails
     */
    protected $VeROReasonCodeDetails = null;

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
     * @param VeROReasonCodeDetailsType $VeROReasonCodeDetails
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $VeROReasonCodeDetails = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->VeROReasonCodeDetails = $VeROReasonCodeDetails;
    }

    /**
     * @return VeROReasonCodeDetailsType
     */
    public function getVeROReasonCodeDetails()
    {
      return $this->VeROReasonCodeDetails;
    }

    /**
     * @param VeROReasonCodeDetailsType $VeROReasonCodeDetails
     * @return \EbayWsdl\GetVeROReasonCodeDetailsResponseType
     */
    public function setVeROReasonCodeDetails($VeROReasonCodeDetails)
    {
      $this->VeROReasonCodeDetails = $VeROReasonCodeDetails;
      return $this;
    }

}
