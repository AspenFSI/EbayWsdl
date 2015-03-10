<?php

namespace EbayWsdl;

class AddItemsRequestType extends AbstractRequestType
{

    /**
     * @var AddItemRequestContainerType[] $AddItemRequestContainer
     */
    protected $AddItemRequestContainer = null;

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
     * @param AddItemRequestContainerType[] $AddItemRequestContainer
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, array $AddItemRequestContainer = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->AddItemRequestContainer = $AddItemRequestContainer;
    }

    /**
     * @return AddItemRequestContainerType[]
     */
    public function getAddItemRequestContainer()
    {
      return $this->AddItemRequestContainer;
    }

    /**
     * @param AddItemRequestContainerType[] $AddItemRequestContainer
     * @return \EbayWsdl\AddItemsRequestType
     */
    public function setAddItemRequestContainer(array $AddItemRequestContainer)
    {
      $this->AddItemRequestContainer = $AddItemRequestContainer;
      return $this;
    }

}
