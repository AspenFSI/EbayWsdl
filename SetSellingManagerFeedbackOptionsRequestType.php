<?php

namespace EbayWsdl;

class SetSellingManagerFeedbackOptionsRequestType extends AbstractRequestType
{

    /**
     * @var AutomatedLeaveFeedbackEventCodeType $AutomatedLeaveFeedbackEvent
     */
    protected $AutomatedLeaveFeedbackEvent = null;

    /**
     * @var FeedbackCommentArrayType $StoredComments
     */
    protected $StoredComments = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param AutomatedLeaveFeedbackEventCodeType $AutomatedLeaveFeedbackEvent
     * @param FeedbackCommentArrayType $StoredComments
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $AutomatedLeaveFeedbackEvent = null, $StoredComments = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->AutomatedLeaveFeedbackEvent = $AutomatedLeaveFeedbackEvent;
      $this->StoredComments = $StoredComments;
    }

    /**
     * @return AutomatedLeaveFeedbackEventCodeType
     */
    public function getAutomatedLeaveFeedbackEvent()
    {
      return $this->AutomatedLeaveFeedbackEvent;
    }

    /**
     * @param AutomatedLeaveFeedbackEventCodeType $AutomatedLeaveFeedbackEvent
     * @return \EbayWsdl\SetSellingManagerFeedbackOptionsRequestType
     */
    public function setAutomatedLeaveFeedbackEvent($AutomatedLeaveFeedbackEvent)
    {
      $this->AutomatedLeaveFeedbackEvent = $AutomatedLeaveFeedbackEvent;
      return $this;
    }

    /**
     * @return FeedbackCommentArrayType
     */
    public function getStoredComments()
    {
      return $this->StoredComments;
    }

    /**
     * @param FeedbackCommentArrayType $StoredComments
     * @return \EbayWsdl\SetSellingManagerFeedbackOptionsRequestType
     */
    public function setStoredComments($StoredComments)
    {
      $this->StoredComments = $StoredComments;
      return $this;
    }

}
