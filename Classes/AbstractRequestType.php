<?php

namespace EbayWsdl\Classes;

abstract class AbstractRequestType
{

    /**
     * @var DetailLevelCodeType[] $DetailLevel
     */
    protected $DetailLevel = null;

    /**
     * @var string $ErrorLanguage
     */
    protected $ErrorLanguage = null;

    /**
     * @var string $MessageID
     */
    protected $MessageID = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @var string $EndUserIP
     */
    protected $EndUserIP = null;

    /**
     * @var ErrorHandlingCodeType $ErrorHandling
     */
    protected $ErrorHandling = null;

    /**
     * @var UUIDType $InvocationID
     */
    protected $InvocationID = null;

    /**
     * @var string[] $OutputSelector
     */
    protected $OutputSelector = null;

    /**
     * @var WarningLevelCodeType $WarningLevel
     */
    protected $WarningLevel = null;

    /**
     * @var BotBlockRequestType $BotBlock
     */
    protected $BotBlock = null;

    /**
     * @var string $any
     */
    protected $any = null;

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
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null)
    {
      $this->DetailLevel = $DetailLevel;
      $this->ErrorLanguage = $ErrorLanguage;
      $this->MessageID = $MessageID;
      $this->Version = $Version;
      $this->EndUserIP = $EndUserIP;
      $this->ErrorHandling = $ErrorHandling;
      $this->InvocationID = $InvocationID;
      $this->OutputSelector = $OutputSelector;
      $this->WarningLevel = $WarningLevel;
      $this->BotBlock = $BotBlock;
      $this->any = $any;
    }

    /**
     * @return DetailLevelCodeType[]
     */
    public function getDetailLevel()
    {
      return $this->DetailLevel;
    }

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @return \EbayWsdl\Classes\AbstractRequestType
     */
    public function setDetailLevel(array $DetailLevel)
    {
      $this->DetailLevel = $DetailLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorLanguage()
    {
      return $this->ErrorLanguage;
    }

    /**
     * @param string $ErrorLanguage
     * @return \EbayWsdl\Classes\AbstractRequestType
     */
    public function setErrorLanguage($ErrorLanguage)
    {
      $this->ErrorLanguage = $ErrorLanguage;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageID()
    {
      return $this->MessageID;
    }

    /**
     * @param string $MessageID
     * @return \EbayWsdl\Classes\AbstractRequestType
     */
    public function setMessageID($MessageID)
    {
      $this->MessageID = $MessageID;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return \EbayWsdl\Classes\AbstractRequestType
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndUserIP()
    {
      return $this->EndUserIP;
    }

    /**
     * @param string $EndUserIP
     * @return \EbayWsdl\Classes\AbstractRequestType
     */
    public function setEndUserIP($EndUserIP)
    {
      $this->EndUserIP = $EndUserIP;
      return $this;
    }

    /**
     * @return ErrorHandlingCodeType
     */
    public function getErrorHandling()
    {
      return $this->ErrorHandling;
    }

    /**
     * @param ErrorHandlingCodeType $ErrorHandling
     * @return \EbayWsdl\Classes\AbstractRequestType
     */
    public function setErrorHandling($ErrorHandling)
    {
      $this->ErrorHandling = $ErrorHandling;
      return $this;
    }

    /**
     * @return UUIDType
     */
    public function getInvocationID()
    {
      return $this->InvocationID;
    }

    /**
     * @param UUIDType $InvocationID
     * @return \EbayWsdl\Classes\AbstractRequestType
     */
    public function setInvocationID($InvocationID)
    {
      $this->InvocationID = $InvocationID;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getOutputSelector()
    {
      return $this->OutputSelector;
    }

    /**
     * @param string[] $OutputSelector
     * @return \EbayWsdl\Classes\AbstractRequestType
     */
    public function setOutputSelector(array $OutputSelector)
    {
      $this->OutputSelector = $OutputSelector;
      return $this;
    }

    /**
     * @return WarningLevelCodeType
     */
    public function getWarningLevel()
    {
      return $this->WarningLevel;
    }

    /**
     * @param WarningLevelCodeType $WarningLevel
     * @return \EbayWsdl\Classes\AbstractRequestType
     */
    public function setWarningLevel($WarningLevel)
    {
      $this->WarningLevel = $WarningLevel;
      return $this;
    }

    /**
     * @return BotBlockRequestType
     */
    public function getBotBlock()
    {
      return $this->BotBlock;
    }

    /**
     * @param BotBlockRequestType $BotBlock
     * @return \EbayWsdl\Classes\AbstractRequestType
     */
    public function setBotBlock($BotBlock)
    {
      $this->BotBlock = $BotBlock;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \EbayWsdl\Classes\AbstractRequestType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
