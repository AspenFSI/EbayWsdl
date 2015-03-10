<?php

namespace EbayWsdl;

class GetAdFormatLeadsResponseType extends AbstractResponseType
{

    /**
     * @var AdFormatLeadType[] $AdFormatLead
     */
    protected $AdFormatLead = null;

    /**
     * @var int $AdFormatLeadCount
     */
    protected $AdFormatLeadCount = null;

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
     * @param AdFormatLeadType[] $AdFormatLead
     * @param int $AdFormatLeadCount
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $AdFormatLead = null, $AdFormatLeadCount = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->AdFormatLead = $AdFormatLead;
      $this->AdFormatLeadCount = $AdFormatLeadCount;
    }

    /**
     * @return AdFormatLeadType[]
     */
    public function getAdFormatLead()
    {
      return $this->AdFormatLead;
    }

    /**
     * @param AdFormatLeadType[] $AdFormatLead
     * @return \EbayWsdl\GetAdFormatLeadsResponseType
     */
    public function setAdFormatLead(array $AdFormatLead)
    {
      $this->AdFormatLead = $AdFormatLead;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdFormatLeadCount()
    {
      return $this->AdFormatLeadCount;
    }

    /**
     * @param int $AdFormatLeadCount
     * @return \EbayWsdl\GetAdFormatLeadsResponseType
     */
    public function setAdFormatLeadCount($AdFormatLeadCount)
    {
      $this->AdFormatLeadCount = $AdFormatLeadCount;
      return $this;
    }

}
