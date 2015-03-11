<?php

namespace EbayWsdl\Classes;

class SetPromotionalSaleListingsResponseType extends AbstractResponseType
{

    /**
     * @var PromotionalSaleStatusCodeType $Status
     */
    protected $Status = null;

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
     * @param PromotionalSaleStatusCodeType $Status
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $Status = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->Status = $Status;
    }

    /**
     * @return PromotionalSaleStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param PromotionalSaleStatusCodeType $Status
     * @return \EbayWsdl\Classes\SetPromotionalSaleListingsResponseType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
