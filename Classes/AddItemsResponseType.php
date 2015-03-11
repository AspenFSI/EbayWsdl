<?php

namespace EbayWsdl\Classes;

class AddItemsResponseType extends AbstractResponseType
{

    /**
     * @var AddItemResponseContainerType[] $AddItemResponseContainer
     */
    protected $AddItemResponseContainer = null;

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
     * @param AddItemResponseContainerType[] $AddItemResponseContainer
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $AddItemResponseContainer = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->AddItemResponseContainer = $AddItemResponseContainer;
    }

    /**
     * @return AddItemResponseContainerType[]
     */
    public function getAddItemResponseContainer()
    {
      return $this->AddItemResponseContainer;
    }

    /**
     * @param AddItemResponseContainerType[] $AddItemResponseContainer
     * @return \EbayWsdl\Classes\AddItemsResponseType
     */
    public function setAddItemResponseContainer(array $AddItemResponseContainer)
    {
      $this->AddItemResponseContainer = $AddItemResponseContainer;
      return $this;
    }

}
