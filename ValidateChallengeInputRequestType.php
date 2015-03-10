<?php

namespace EbayWsdl;

class ValidateChallengeInputRequestType extends AbstractRequestType
{

    /**
     * @var string $ChallengeToken
     */
    protected $ChallengeToken = null;

    /**
     * @var string $UserInput
     */
    protected $UserInput = null;

    /**
     * @var boolean $KeepTokenValid
     */
    protected $KeepTokenValid = null;

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
     * @param string $ChallengeToken
     * @param string $UserInput
     * @param boolean $KeepTokenValid
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ChallengeToken = null, $UserInput = null, $KeepTokenValid = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ChallengeToken = $ChallengeToken;
      $this->UserInput = $UserInput;
      $this->KeepTokenValid = $KeepTokenValid;
    }

    /**
     * @return string
     */
    public function getChallengeToken()
    {
      return $this->ChallengeToken;
    }

    /**
     * @param string $ChallengeToken
     * @return \EbayWsdl\ValidateChallengeInputRequestType
     */
    public function setChallengeToken($ChallengeToken)
    {
      $this->ChallengeToken = $ChallengeToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserInput()
    {
      return $this->UserInput;
    }

    /**
     * @param string $UserInput
     * @return \EbayWsdl\ValidateChallengeInputRequestType
     */
    public function setUserInput($UserInput)
    {
      $this->UserInput = $UserInput;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeepTokenValid()
    {
      return $this->KeepTokenValid;
    }

    /**
     * @param boolean $KeepTokenValid
     * @return \EbayWsdl\ValidateChallengeInputRequestType
     */
    public function setKeepTokenValid($KeepTokenValid)
    {
      $this->KeepTokenValid = $KeepTokenValid;
      return $this;
    }

}
