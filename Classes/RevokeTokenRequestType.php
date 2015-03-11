<?php

namespace EbayWsdl\Classes;

class RevokeTokenRequestType extends AbstractRequestType
{

    /**
     * @var boolean $UnsubscribeNotification
     */
    protected $UnsubscribeNotification = null;

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
     * @param boolean $UnsubscribeNotification
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $UnsubscribeNotification = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->UnsubscribeNotification = $UnsubscribeNotification;
    }

    /**
     * @return boolean
     */
    public function getUnsubscribeNotification()
    {
      return $this->UnsubscribeNotification;
    }

    /**
     * @param boolean $UnsubscribeNotification
     * @return \EbayWsdl\Classes\RevokeTokenRequestType
     */
    public function setUnsubscribeNotification($UnsubscribeNotification)
    {
      $this->UnsubscribeNotification = $UnsubscribeNotification;
      return $this;
    }

}
