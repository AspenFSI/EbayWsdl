<?php

namespace EbayWsdl\Classes;

class GetCharitiesResponseType extends AbstractResponseType
{

    /**
     * @var CharityInfoType[] $Charity
     */
    protected $Charity = null;

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
     * @param CharityInfoType[] $Charity
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $Charity = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->Charity = $Charity;
    }

    /**
     * @return CharityInfoType[]
     */
    public function getCharity()
    {
      return $this->Charity;
    }

    /**
     * @param CharityInfoType[] $Charity
     * @return \EbayWsdl\Classes\GetCharitiesResponseType
     */
    public function setCharity(array $Charity)
    {
      $this->Charity = $Charity;
      return $this;
    }

}
