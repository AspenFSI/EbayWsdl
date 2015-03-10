<?php

namespace EbayWsdl;

class GetPromotionalSaleDetailsResponseType extends AbstractResponseType
{

    /**
     * @var PromotionalSaleArrayType $PromotionalSaleDetails
     */
    protected $PromotionalSaleDetails = null;

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
     * @param PromotionalSaleArrayType $PromotionalSaleDetails
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $PromotionalSaleDetails = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->PromotionalSaleDetails = $PromotionalSaleDetails;
    }

    /**
     * @return PromotionalSaleArrayType
     */
    public function getPromotionalSaleDetails()
    {
      return $this->PromotionalSaleDetails;
    }

    /**
     * @param PromotionalSaleArrayType $PromotionalSaleDetails
     * @return \EbayWsdl\GetPromotionalSaleDetailsResponseType
     */
    public function setPromotionalSaleDetails($PromotionalSaleDetails)
    {
      $this->PromotionalSaleDetails = $PromotionalSaleDetails;
      return $this;
    }

}
