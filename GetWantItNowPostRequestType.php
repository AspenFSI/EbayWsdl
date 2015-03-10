<?php

namespace EbayWsdl;

class GetWantItNowPostRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $PostID
     */
    protected $PostID = null;

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
     * @param ItemIDType $PostID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $PostID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->PostID = $PostID;
    }

    /**
     * @return ItemIDType
     */
    public function getPostID()
    {
      return $this->PostID;
    }

    /**
     * @param ItemIDType $PostID
     * @return \EbayWsdl\GetWantItNowPostRequestType
     */
    public function setPostID($PostID)
    {
      $this->PostID = $PostID;
      return $this;
    }

}
