<?php

namespace EbayWsdl\Classes;

class GetStoreCategoryUpdateStatusRequestType extends AbstractRequestType
{

    /**
     * @var int $TaskID
     */
    protected $TaskID = null;

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
     * @param int $TaskID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $TaskID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->TaskID = $TaskID;
    }

    /**
     * @return int
     */
    public function getTaskID()
    {
      return $this->TaskID;
    }

    /**
     * @param int $TaskID
     * @return \EbayWsdl\Classes\GetStoreCategoryUpdateStatusRequestType
     */
    public function setTaskID($TaskID)
    {
      $this->TaskID = $TaskID;
      return $this;
    }

}
