<?php

namespace EbayWsdl;

class FetchTokenRequestType extends AbstractRequestType
{

    /**
     * @var string $SecretID
     */
    protected $SecretID = null;

    /**
     * @var string $SessionID
     */
    protected $SessionID = null;

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
     * @param string $SecretID
     * @param string $SessionID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $SecretID = null, $SessionID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->SecretID = $SecretID;
      $this->SessionID = $SessionID;
    }

    /**
     * @return string
     */
    public function getSecretID()
    {
      return $this->SecretID;
    }

    /**
     * @param string $SecretID
     * @return \EbayWsdl\FetchTokenRequestType
     */
    public function setSecretID($SecretID)
    {
      $this->SecretID = $SecretID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
      return $this->SessionID;
    }

    /**
     * @param string $SessionID
     * @return \EbayWsdl\FetchTokenRequestType
     */
    public function setSessionID($SessionID)
    {
      $this->SessionID = $SessionID;
      return $this;
    }

}
