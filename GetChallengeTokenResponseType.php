<?php

namespace EbayWsdl;

class GetChallengeTokenResponseType extends AbstractResponseType
{

    /**
     * @var string $ChallengeToken
     */
    protected $ChallengeToken = null;

    /**
     * @var string $ImageChallengeURL
     */
    protected $ImageChallengeURL = null;

    /**
     * @var string $AudioChallengeURL
     */
    protected $AudioChallengeURL = null;

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
     * @param string $ChallengeToken
     * @param string $ImageChallengeURL
     * @param string $AudioChallengeURL
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $ChallengeToken = null, $ImageChallengeURL = null, $AudioChallengeURL = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->ChallengeToken = $ChallengeToken;
      $this->ImageChallengeURL = $ImageChallengeURL;
      $this->AudioChallengeURL = $AudioChallengeURL;
    }

    /**
     * @return string
     */
    public function getChallengeToken()
    {
      return $this->ChallengeToken;
    }

    /**
     * @param string $ChallengeToken
     * @return \EbayWsdl\GetChallengeTokenResponseType
     */
    public function setChallengeToken($ChallengeToken)
    {
      $this->ChallengeToken = $ChallengeToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageChallengeURL()
    {
      return $this->ImageChallengeURL;
    }

    /**
     * @param string $ImageChallengeURL
     * @return \EbayWsdl\GetChallengeTokenResponseType
     */
    public function setImageChallengeURL($ImageChallengeURL)
    {
      $this->ImageChallengeURL = $ImageChallengeURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getAudioChallengeURL()
    {
      return $this->AudioChallengeURL;
    }

    /**
     * @param string $AudioChallengeURL
     * @return \EbayWsdl\GetChallengeTokenResponseType
     */
    public function setAudioChallengeURL($AudioChallengeURL)
    {
      $this->AudioChallengeURL = $AudioChallengeURL;
      return $this;
    }

}
