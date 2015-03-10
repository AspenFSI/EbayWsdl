<?php

namespace EbayWsdl;

class GetItemRecommendationsRequestType extends AbstractRequestType
{

    /**
     * @var GetRecommendationsRequestContainerType[] $GetRecommendationsRequestContainer
     */
    protected $GetRecommendationsRequestContainer = null;

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
     * @param GetRecommendationsRequestContainerType[] $GetRecommendationsRequestContainer
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, array $GetRecommendationsRequestContainer = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->GetRecommendationsRequestContainer = $GetRecommendationsRequestContainer;
    }

    /**
     * @return GetRecommendationsRequestContainerType[]
     */
    public function getGetRecommendationsRequestContainer()
    {
      return $this->GetRecommendationsRequestContainer;
    }

    /**
     * @param GetRecommendationsRequestContainerType[] $GetRecommendationsRequestContainer
     * @return \EbayWsdl\GetItemRecommendationsRequestType
     */
    public function setGetRecommendationsRequestContainer(array $GetRecommendationsRequestContainer)
    {
      $this->GetRecommendationsRequestContainer = $GetRecommendationsRequestContainer;
      return $this;
    }

}
