<?php

namespace EbayWsdl;

class DeleteMyMessagesRequestType extends AbstractRequestType
{

    /**
     * @var MyMessagesAlertIDArrayType $AlertIDs
     */
    protected $AlertIDs = null;

    /**
     * @var MyMessagesMessageIDArrayType $MessageIDs
     */
    protected $MessageIDs = null;

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
     * @param MyMessagesAlertIDArrayType $AlertIDs
     * @param MyMessagesMessageIDArrayType $MessageIDs
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $AlertIDs = null, $MessageIDs = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->AlertIDs = $AlertIDs;
      $this->MessageIDs = $MessageIDs;
    }

    /**
     * @return MyMessagesAlertIDArrayType
     */
    public function getAlertIDs()
    {
      return $this->AlertIDs;
    }

    /**
     * @param MyMessagesAlertIDArrayType $AlertIDs
     * @return \EbayWsdl\DeleteMyMessagesRequestType
     */
    public function setAlertIDs($AlertIDs)
    {
      $this->AlertIDs = $AlertIDs;
      return $this;
    }

    /**
     * @return MyMessagesMessageIDArrayType
     */
    public function getMessageIDs()
    {
      return $this->MessageIDs;
    }

    /**
     * @param MyMessagesMessageIDArrayType $MessageIDs
     * @return \EbayWsdl\DeleteMyMessagesRequestType
     */
    public function setMessageIDs($MessageIDs)
    {
      $this->MessageIDs = $MessageIDs;
      return $this;
    }

}
