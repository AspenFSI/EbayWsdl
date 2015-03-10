<?php

namespace EbayWsdl;

class SetStoreRequestType extends AbstractRequestType
{

    /**
     * @var StoreType $Store
     */
    protected $Store = null;

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
     * @param StoreType $Store
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Store = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Store = $Store;
    }

    /**
     * @return StoreType
     */
    public function getStore()
    {
      return $this->Store;
    }

    /**
     * @param StoreType $Store
     * @return \EbayWsdl\SetStoreRequestType
     */
    public function setStore($Store)
    {
      $this->Store = $Store;
      return $this;
    }

}
