<?php

namespace EbayWsdl;

class GetApiAccessRulesResponseType extends AbstractResponseType
{

    /**
     * @var ApiAccessRuleType[] $ApiAccessRule
     */
    protected $ApiAccessRule = null;

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
     * @param ApiAccessRuleType[] $ApiAccessRule
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $ApiAccessRule = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->ApiAccessRule = $ApiAccessRule;
    }

    /**
     * @return ApiAccessRuleType[]
     */
    public function getApiAccessRule()
    {
      return $this->ApiAccessRule;
    }

    /**
     * @param ApiAccessRuleType[] $ApiAccessRule
     * @return \EbayWsdl\GetApiAccessRulesResponseType
     */
    public function setApiAccessRule(array $ApiAccessRule)
    {
      $this->ApiAccessRule = $ApiAccessRule;
      return $this;
    }

}
