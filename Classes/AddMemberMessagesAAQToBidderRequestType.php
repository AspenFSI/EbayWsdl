<?php

namespace EbayWsdl\Classes;

class AddMemberMessagesAAQToBidderRequestType extends AbstractRequestType
{

    /**
     * @var AddMemberMessagesAAQToBidderRequestContainerType[] $AddMemberMessagesAAQToBidderRequestContainer
     */
    protected $AddMemberMessagesAAQToBidderRequestContainer = null;

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
     * @param AddMemberMessagesAAQToBidderRequestContainerType[] $AddMemberMessagesAAQToBidderRequestContainer
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, array $AddMemberMessagesAAQToBidderRequestContainer = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->AddMemberMessagesAAQToBidderRequestContainer = $AddMemberMessagesAAQToBidderRequestContainer;
    }

    /**
     * @return AddMemberMessagesAAQToBidderRequestContainerType[]
     */
    public function getAddMemberMessagesAAQToBidderRequestContainer()
    {
      return $this->AddMemberMessagesAAQToBidderRequestContainer;
    }

    /**
     * @param AddMemberMessagesAAQToBidderRequestContainerType[] $AddMemberMessagesAAQToBidderRequestContainer
     * @return \EbayWsdl\Classes\AddMemberMessagesAAQToBidderRequestType
     */
    public function setAddMemberMessagesAAQToBidderRequestContainer(array $AddMemberMessagesAAQToBidderRequestContainer)
    {
      $this->AddMemberMessagesAAQToBidderRequestContainer = $AddMemberMessagesAAQToBidderRequestContainer;
      return $this;
    }

}
