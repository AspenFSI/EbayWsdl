<?php

namespace EbayWsdl\Classes;

class EndItemsResponseType extends AbstractResponseType
{

    /**
     * @var EndItemResponseContainerType[] $EndItemResponseContainer
     */
    protected $EndItemResponseContainer = null;

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
     * @param EndItemResponseContainerType[] $EndItemResponseContainer
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $EndItemResponseContainer = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->EndItemResponseContainer = $EndItemResponseContainer;
    }

    /**
     * @return EndItemResponseContainerType[]
     */
    public function getEndItemResponseContainer()
    {
      return $this->EndItemResponseContainer;
    }

    /**
     * @param EndItemResponseContainerType[] $EndItemResponseContainer
     * @return \EbayWsdl\Classes\EndItemsResponseType
     */
    public function setEndItemResponseContainer(array $EndItemResponseContainer)
    {
      $this->EndItemResponseContainer = $EndItemResponseContainer;
      return $this;
    }

}
