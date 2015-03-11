<?php

namespace EbayWsdl\Classes;

class GetMyeBayRemindersResponseType extends AbstractResponseType
{

    /**
     * @var RemindersType $BuyingReminders
     */
    protected $BuyingReminders = null;

    /**
     * @var RemindersType $SellingReminders
     */
    protected $SellingReminders = null;

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
     * @param RemindersType $BuyingReminders
     * @param RemindersType $SellingReminders
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $BuyingReminders = null, $SellingReminders = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->BuyingReminders = $BuyingReminders;
      $this->SellingReminders = $SellingReminders;
    }

    /**
     * @return RemindersType
     */
    public function getBuyingReminders()
    {
      return $this->BuyingReminders;
    }

    /**
     * @param RemindersType $BuyingReminders
     * @return \EbayWsdl\Classes\GetMyeBayRemindersResponseType
     */
    public function setBuyingReminders($BuyingReminders)
    {
      $this->BuyingReminders = $BuyingReminders;
      return $this;
    }

    /**
     * @return RemindersType
     */
    public function getSellingReminders()
    {
      return $this->SellingReminders;
    }

    /**
     * @param RemindersType $SellingReminders
     * @return \EbayWsdl\Classes\GetMyeBayRemindersResponseType
     */
    public function setSellingReminders($SellingReminders)
    {
      $this->SellingReminders = $SellingReminders;
      return $this;
    }

}
