<?php

namespace EbayWsdl\Classes;

class GetPictureManagerDetailsResponseType extends AbstractResponseType
{

    /**
     * @var PictureManagerDetailsType $PictureManagerDetails
     */
    protected $PictureManagerDetails = null;

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
     * @param PictureManagerDetailsType $PictureManagerDetails
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $PictureManagerDetails = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->PictureManagerDetails = $PictureManagerDetails;
    }

    /**
     * @return PictureManagerDetailsType
     */
    public function getPictureManagerDetails()
    {
      return $this->PictureManagerDetails;
    }

    /**
     * @param PictureManagerDetailsType $PictureManagerDetails
     * @return \EbayWsdl\Classes\GetPictureManagerDetailsResponseType
     */
    public function setPictureManagerDetails($PictureManagerDetails)
    {
      $this->PictureManagerDetails = $PictureManagerDetails;
      return $this;
    }

}
