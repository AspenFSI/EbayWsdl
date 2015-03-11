<?php

namespace EbayWsdl\Classes;

class RespondToBestOfferResponseType extends AbstractResponseType
{

    /**
     * @var BestOfferArrayType $RespondToBestOffer
     */
    protected $RespondToBestOffer = null;

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
     * @param BestOfferArrayType $RespondToBestOffer
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $RespondToBestOffer = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->RespondToBestOffer = $RespondToBestOffer;
    }

    /**
     * @return BestOfferArrayType
     */
    public function getRespondToBestOffer()
    {
      return $this->RespondToBestOffer;
    }

    /**
     * @param BestOfferArrayType $RespondToBestOffer
     * @return \EbayWsdl\Classes\RespondToBestOfferResponseType
     */
    public function setRespondToBestOffer($RespondToBestOffer)
    {
      $this->RespondToBestOffer = $RespondToBestOffer;
      return $this;
    }

}
