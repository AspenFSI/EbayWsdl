<?php

namespace EbayWsdl\Classes;

class ReviseInventoryStatusRequestType extends AbstractRequestType
{

    /**
     * @var InventoryStatusType[] $InventoryStatus
     */
    protected $InventoryStatus = null;

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
     * @param InventoryStatusType[] $InventoryStatus
     * @param string $any
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, array $InventoryStatus = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->InventoryStatus = $InventoryStatus;
      $this->any = $any;
    }

    /**
     * @return InventoryStatusType[]
     */
    public function getInventoryStatus()
    {
      return $this->InventoryStatus;
    }

    /**
     * @param InventoryStatusType[] $InventoryStatus
     * @return \EbayWsdl\Classes\ReviseInventoryStatusRequestType
     */
    public function setInventoryStatus(array $InventoryStatus)
    {
      $this->InventoryStatus = $InventoryStatus;
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
     * @return \EbayWsdl\Classes\ReviseInventoryStatusRequestType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
