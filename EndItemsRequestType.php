<?php

namespace EbayWsdl;

class EndItemsRequestType extends AbstractRequestType
{

    /**
     * @var EndItemRequestContainerType[] $EndItemRequestContainer
     */
    protected $EndItemRequestContainer = null;

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
     * @param EndItemRequestContainerType[] $EndItemRequestContainer
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, array $EndItemRequestContainer = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->EndItemRequestContainer = $EndItemRequestContainer;
    }

    /**
     * @return EndItemRequestContainerType[]
     */
    public function getEndItemRequestContainer()
    {
      return $this->EndItemRequestContainer;
    }

    /**
     * @param EndItemRequestContainerType[] $EndItemRequestContainer
     * @return \EbayWsdl\EndItemsRequestType
     */
    public function setEndItemRequestContainer(array $EndItemRequestContainer)
    {
      $this->EndItemRequestContainer = $EndItemRequestContainer;
      return $this;
    }

}
