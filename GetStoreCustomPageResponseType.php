<?php

namespace EbayWsdl;

class GetStoreCustomPageResponseType extends AbstractResponseType
{

    /**
     * @var StoreCustomPageArrayType $CustomPageArray
     */
    protected $CustomPageArray = null;

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
     * @param StoreCustomPageArrayType $CustomPageArray
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $CustomPageArray = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->CustomPageArray = $CustomPageArray;
    }

    /**
     * @return StoreCustomPageArrayType
     */
    public function getCustomPageArray()
    {
      return $this->CustomPageArray;
    }

    /**
     * @param StoreCustomPageArrayType $CustomPageArray
     * @return \EbayWsdl\GetStoreCustomPageResponseType
     */
    public function setCustomPageArray($CustomPageArray)
    {
      $this->CustomPageArray = $CustomPageArray;
      return $this;
    }

}
