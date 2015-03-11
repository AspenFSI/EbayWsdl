<?php

namespace EbayWsdl\Classes;

class GetMyeBayRemindersRequestType extends AbstractRequestType
{

    /**
     * @var ReminderCustomizationType $BuyingReminders
     */
    protected $BuyingReminders = null;

    /**
     * @var ReminderCustomizationType $SellingReminders
     */
    protected $SellingReminders = null;

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
     * @param ReminderCustomizationType $BuyingReminders
     * @param ReminderCustomizationType $SellingReminders
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $BuyingReminders = null, $SellingReminders = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->BuyingReminders = $BuyingReminders;
      $this->SellingReminders = $SellingReminders;
    }

    /**
     * @return ReminderCustomizationType
     */
    public function getBuyingReminders()
    {
      return $this->BuyingReminders;
    }

    /**
     * @param ReminderCustomizationType $BuyingReminders
     * @return \EbayWsdl\Classes\GetMyeBayRemindersRequestType
     */
    public function setBuyingReminders($BuyingReminders)
    {
      $this->BuyingReminders = $BuyingReminders;
      return $this;
    }

    /**
     * @return ReminderCustomizationType
     */
    public function getSellingReminders()
    {
      return $this->SellingReminders;
    }

    /**
     * @param ReminderCustomizationType $SellingReminders
     * @return \EbayWsdl\Classes\GetMyeBayRemindersRequestType
     */
    public function setSellingReminders($SellingReminders)
    {
      $this->SellingReminders = $SellingReminders;
      return $this;
    }

}
