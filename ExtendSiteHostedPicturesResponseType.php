<?php

namespace EbayWsdl;

class ExtendSiteHostedPicturesResponseType extends AbstractResponseType
{

    /**
     * @var anyURI[] $PictureURL
     */
    protected $PictureURL = null;

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
     * @param anyURI[] $PictureURL
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $PictureURL = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->PictureURL = $PictureURL;
    }

    /**
     * @return anyURI[]
     */
    public function getPictureURL()
    {
      return $this->PictureURL;
    }

    /**
     * @param anyURI[] $PictureURL
     * @return \EbayWsdl\ExtendSiteHostedPicturesResponseType
     */
    public function setPictureURL(array $PictureURL)
    {
      $this->PictureURL = $PictureURL;
      return $this;
    }

}
