<?php

namespace EbayWsdl;

class GetItemRecommendationsResponseType extends AbstractResponseType
{

    /**
     * @var GetRecommendationsResponseContainerType[] $GetRecommendationsResponseContainer
     */
    protected $GetRecommendationsResponseContainer = null;

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
     * @param GetRecommendationsResponseContainerType[] $GetRecommendationsResponseContainer
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $GetRecommendationsResponseContainer = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->GetRecommendationsResponseContainer = $GetRecommendationsResponseContainer;
    }

    /**
     * @return GetRecommendationsResponseContainerType[]
     */
    public function getGetRecommendationsResponseContainer()
    {
      return $this->GetRecommendationsResponseContainer;
    }

    /**
     * @param GetRecommendationsResponseContainerType[] $GetRecommendationsResponseContainer
     * @return \EbayWsdl\GetItemRecommendationsResponseType
     */
    public function setGetRecommendationsResponseContainer(array $GetRecommendationsResponseContainer)
    {
      $this->GetRecommendationsResponseContainer = $GetRecommendationsResponseContainer;
      return $this;
    }

}
