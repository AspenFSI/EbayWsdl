<?php

namespace EbayWsdl\Classes;

class AddMemberMessageRTQRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var MemberMessageType $MemberMessage
     */
    protected $MemberMessage = null;

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
     * @param ItemIDType $ItemID
     * @param MemberMessageType $MemberMessage
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $MemberMessage = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->MemberMessage = $MemberMessage;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\Classes\AddMemberMessageRTQRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return MemberMessageType
     */
    public function getMemberMessage()
    {
      return $this->MemberMessage;
    }

    /**
     * @param MemberMessageType $MemberMessage
     * @return \EbayWsdl\Classes\AddMemberMessageRTQRequestType
     */
    public function setMemberMessage($MemberMessage)
    {
      $this->MemberMessage = $MemberMessage;
      return $this;
    }

}
