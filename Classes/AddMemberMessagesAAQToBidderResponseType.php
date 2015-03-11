<?php

namespace EbayWsdl\Classes;

class AddMemberMessagesAAQToBidderResponseType extends AbstractResponseType
{

    /**
     * @var AddMemberMessagesAAQToBidderResponseContainerType[] $AddMemberMessagesAAQToBidderResponseContainer
     */
    protected $AddMemberMessagesAAQToBidderResponseContainer = null;

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
     * @param AddMemberMessagesAAQToBidderResponseContainerType[] $AddMemberMessagesAAQToBidderResponseContainer
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $AddMemberMessagesAAQToBidderResponseContainer = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->AddMemberMessagesAAQToBidderResponseContainer = $AddMemberMessagesAAQToBidderResponseContainer;
    }

    /**
     * @return AddMemberMessagesAAQToBidderResponseContainerType[]
     */
    public function getAddMemberMessagesAAQToBidderResponseContainer()
    {
      return $this->AddMemberMessagesAAQToBidderResponseContainer;
    }

    /**
     * @param AddMemberMessagesAAQToBidderResponseContainerType[] $AddMemberMessagesAAQToBidderResponseContainer
     * @return \EbayWsdl\Classes\AddMemberMessagesAAQToBidderResponseType
     */
    public function setAddMemberMessagesAAQToBidderResponseContainer(array $AddMemberMessagesAAQToBidderResponseContainer)
    {
      $this->AddMemberMessagesAAQToBidderResponseContainer = $AddMemberMessagesAAQToBidderResponseContainer;
      return $this;
    }

}
