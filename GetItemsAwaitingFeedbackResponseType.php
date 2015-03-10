<?php

namespace EbayWsdl;

class GetItemsAwaitingFeedbackResponseType extends AbstractResponseType
{

    /**
     * @var PaginatedTransactionArrayType $ItemsAwaitingFeedback
     */
    protected $ItemsAwaitingFeedback = null;

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
     * @param PaginatedTransactionArrayType $ItemsAwaitingFeedback
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $ItemsAwaitingFeedback = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->ItemsAwaitingFeedback = $ItemsAwaitingFeedback;
    }

    /**
     * @return PaginatedTransactionArrayType
     */
    public function getItemsAwaitingFeedback()
    {
      return $this->ItemsAwaitingFeedback;
    }

    /**
     * @param PaginatedTransactionArrayType $ItemsAwaitingFeedback
     * @return \EbayWsdl\GetItemsAwaitingFeedbackResponseType
     */
    public function setItemsAwaitingFeedback($ItemsAwaitingFeedback)
    {
      $this->ItemsAwaitingFeedback = $ItemsAwaitingFeedback;
      return $this;
    }

}
