<?php

namespace EbayWsdl\Classes;

class VeROReportItemsResponseType extends AbstractResponseType
{

    /**
     * @var int $VeROReportPacketID
     */
    protected $VeROReportPacketID = null;

    /**
     * @var VeROReportPacketStatusCodeType $VeROReportPacketStatus
     */
    protected $VeROReportPacketStatus = null;

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
     * @param int $VeROReportPacketID
     * @param VeROReportPacketStatusCodeType $VeROReportPacketStatus
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $VeROReportPacketID = null, $VeROReportPacketStatus = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->VeROReportPacketID = $VeROReportPacketID;
      $this->VeROReportPacketStatus = $VeROReportPacketStatus;
    }

    /**
     * @return int
     */
    public function getVeROReportPacketID()
    {
      return $this->VeROReportPacketID;
    }

    /**
     * @param int $VeROReportPacketID
     * @return \EbayWsdl\Classes\VeROReportItemsResponseType
     */
    public function setVeROReportPacketID($VeROReportPacketID)
    {
      $this->VeROReportPacketID = $VeROReportPacketID;
      return $this;
    }

    /**
     * @return VeROReportPacketStatusCodeType
     */
    public function getVeROReportPacketStatus()
    {
      return $this->VeROReportPacketStatus;
    }

    /**
     * @param VeROReportPacketStatusCodeType $VeROReportPacketStatus
     * @return \EbayWsdl\Classes\VeROReportItemsResponseType
     */
    public function setVeROReportPacketStatus($VeROReportPacketStatus)
    {
      $this->VeROReportPacketStatus = $VeROReportPacketStatus;
      return $this;
    }

}
