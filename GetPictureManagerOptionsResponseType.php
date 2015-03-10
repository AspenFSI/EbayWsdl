<?php

namespace EbayWsdl;

class GetPictureManagerOptionsResponseType extends AbstractResponseType
{

    /**
     * @var PictureManagerSubscriptionType[] $Subscription
     */
    protected $Subscription = null;

    /**
     * @var PictureManagerPictureDisplayType[] $PictureType
     */
    protected $PictureType = null;

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
     * @param PictureManagerSubscriptionType[] $Subscription
     * @param PictureManagerPictureDisplayType[] $PictureType
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $Subscription = null, array $PictureType = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->Subscription = $Subscription;
      $this->PictureType = $PictureType;
    }

    /**
     * @return PictureManagerSubscriptionType[]
     */
    public function getSubscription()
    {
      return $this->Subscription;
    }

    /**
     * @param PictureManagerSubscriptionType[] $Subscription
     * @return \EbayWsdl\GetPictureManagerOptionsResponseType
     */
    public function setSubscription(array $Subscription)
    {
      $this->Subscription = $Subscription;
      return $this;
    }

    /**
     * @return PictureManagerPictureDisplayType[]
     */
    public function getPictureType()
    {
      return $this->PictureType;
    }

    /**
     * @param PictureManagerPictureDisplayType[] $PictureType
     * @return \EbayWsdl\GetPictureManagerOptionsResponseType
     */
    public function setPictureType(array $PictureType)
    {
      $this->PictureType = $PictureType;
      return $this;
    }

}
