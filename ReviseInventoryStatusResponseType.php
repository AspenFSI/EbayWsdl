<?php

namespace EbayWsdl;

class ReviseInventoryStatusResponseType extends AbstractResponseType
{

    /**
     * @var InventoryStatusType[] $InventoryStatus
     */
    protected $InventoryStatus = null;

    /**
     * @var InventoryFeesType[] $Fees
     */
    protected $Fees = null;

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
     * @param InventoryStatusType[] $InventoryStatus
     * @param InventoryFeesType[] $Fees
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $InventoryStatus = null, array $Fees = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->InventoryStatus = $InventoryStatus;
      $this->Fees = $Fees;
    }

    /**
     * @return InventoryStatusType[]
     */
    public function getInventoryStatus()
    {
      return $this->InventoryStatus;
    }

    /**
     * @param InventoryStatusType[] $InventoryStatus
     * @return \EbayWsdl\ReviseInventoryStatusResponseType
     */
    public function setInventoryStatus(array $InventoryStatus)
    {
      $this->InventoryStatus = $InventoryStatus;
      return $this;
    }

    /**
     * @return InventoryFeesType[]
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param InventoryFeesType[] $Fees
     * @return \EbayWsdl\ReviseInventoryStatusResponseType
     */
    public function setFees(array $Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

}
