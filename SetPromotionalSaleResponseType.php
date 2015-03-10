<?php

namespace EbayWsdl;

class SetPromotionalSaleResponseType extends AbstractResponseType
{

    /**
     * @var PromotionalSaleStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var int $PromotionalSaleID
     */
    protected $PromotionalSaleID = null;

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
     * @param int $PromotionalSaleID
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $Status = null, $PromotionalSaleID = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->Status = $Status;
      $this->PromotionalSaleID = $PromotionalSaleID;
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
     * @return \EbayWsdl\SetPromotionalSaleResponseType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getPromotionalSaleID()
    {
      return $this->PromotionalSaleID;
    }

    /**
     * @param int $PromotionalSaleID
     * @return \EbayWsdl\SetPromotionalSaleResponseType
     */
    public function setPromotionalSaleID($PromotionalSaleID)
    {
      $this->PromotionalSaleID = $PromotionalSaleID;
      return $this;
    }

}
