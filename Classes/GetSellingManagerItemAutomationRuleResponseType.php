<?php

namespace EbayWsdl\Classes;

class GetSellingManagerItemAutomationRuleResponseType extends AbstractResponseType
{

    /**
     * @var SellingManagerAutoListType $AutomatedListingRule
     */
    protected $AutomatedListingRule = null;

    /**
     * @var SellingManagerAutoRelistType $AutomatedRelistingRule
     */
    protected $AutomatedRelistingRule = null;

    /**
     * @var SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
     */
    protected $AutomatedSecondChanceOfferRule = null;

    /**
     * @var FeesType $Fees
     */
    protected $Fees = null;

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
     * @param SellingManagerAutoListType $AutomatedListingRule
     * @param SellingManagerAutoRelistType $AutomatedRelistingRule
     * @param SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
     * @param FeesType $Fees
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $AutomatedListingRule = null, $AutomatedRelistingRule = null, $AutomatedSecondChanceOfferRule = null, $Fees = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->AutomatedListingRule = $AutomatedListingRule;
      $this->AutomatedRelistingRule = $AutomatedRelistingRule;
      $this->AutomatedSecondChanceOfferRule = $AutomatedSecondChanceOfferRule;
      $this->Fees = $Fees;
    }

    /**
     * @return SellingManagerAutoListType
     */
    public function getAutomatedListingRule()
    {
      return $this->AutomatedListingRule;
    }

    /**
     * @param SellingManagerAutoListType $AutomatedListingRule
     * @return \EbayWsdl\Classes\GetSellingManagerItemAutomationRuleResponseType
     */
    public function setAutomatedListingRule($AutomatedListingRule)
    {
      $this->AutomatedListingRule = $AutomatedListingRule;
      return $this;
    }

    /**
     * @return SellingManagerAutoRelistType
     */
    public function getAutomatedRelistingRule()
    {
      return $this->AutomatedRelistingRule;
    }

    /**
     * @param SellingManagerAutoRelistType $AutomatedRelistingRule
     * @return \EbayWsdl\Classes\GetSellingManagerItemAutomationRuleResponseType
     */
    public function setAutomatedRelistingRule($AutomatedRelistingRule)
    {
      $this->AutomatedRelistingRule = $AutomatedRelistingRule;
      return $this;
    }

    /**
     * @return SellingManagerAutoSecondChanceOfferType
     */
    public function getAutomatedSecondChanceOfferRule()
    {
      return $this->AutomatedSecondChanceOfferRule;
    }

    /**
     * @param SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule
     * @return \EbayWsdl\Classes\GetSellingManagerItemAutomationRuleResponseType
     */
    public function setAutomatedSecondChanceOfferRule($AutomatedSecondChanceOfferRule)
    {
      $this->AutomatedSecondChanceOfferRule = $AutomatedSecondChanceOfferRule;
      return $this;
    }

    /**
     * @return FeesType
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param FeesType $Fees
     * @return \EbayWsdl\Classes\GetSellingManagerItemAutomationRuleResponseType
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

}
