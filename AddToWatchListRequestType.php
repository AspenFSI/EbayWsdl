<?php

namespace EbayWsdl;

class AddToWatchListRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType[] $ItemID
     */
    protected $ItemID = null;

    /**
     * @var VariationKeyType[] $VariationKey
     */
    protected $VariationKey = null;

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
     * @param ItemIDType[] $ItemID
     * @param VariationKeyType[] $VariationKey
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, array $ItemID = null, array $VariationKey = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->VariationKey = $VariationKey;
    }

    /**
     * @return ItemIDType[]
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType[] $ItemID
     * @return \EbayWsdl\AddToWatchListRequestType
     */
    public function setItemID(array $ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return VariationKeyType[]
     */
    public function getVariationKey()
    {
      return $this->VariationKey;
    }

    /**
     * @param VariationKeyType[] $VariationKey
     * @return \EbayWsdl\AddToWatchListRequestType
     */
    public function setVariationKey(array $VariationKey)
    {
      $this->VariationKey = $VariationKey;
      return $this;
    }

}
