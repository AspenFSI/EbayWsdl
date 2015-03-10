<?php

namespace EbayWsdl;

class GetPromotionRulesResponseType extends AbstractResponseType
{

    /**
     * @var PromotionRuleArrayType $PromotionRuleArray
     */
    protected $PromotionRuleArray = null;

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
     * @param PromotionRuleArrayType $PromotionRuleArray
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $PromotionRuleArray = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->PromotionRuleArray = $PromotionRuleArray;
    }

    /**
     * @return PromotionRuleArrayType
     */
    public function getPromotionRuleArray()
    {
      return $this->PromotionRuleArray;
    }

    /**
     * @param PromotionRuleArrayType $PromotionRuleArray
     * @return \EbayWsdl\GetPromotionRulesResponseType
     */
    public function setPromotionRuleArray($PromotionRuleArray)
    {
      $this->PromotionRuleArray = $PromotionRuleArray;
      return $this;
    }

}
