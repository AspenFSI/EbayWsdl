<?php

namespace EbayWsdl\Classes;

class GetSellingManagerTemplatesRequestType extends AbstractRequestType
{

    /**
     * @var long[] $SaleTemplateID
     */
    protected $SaleTemplateID = null;

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
     * @param long[] $SaleTemplateID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, array $SaleTemplateID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->SaleTemplateID = $SaleTemplateID;
    }

    /**
     * @return long[]
     */
    public function getSaleTemplateID()
    {
      return $this->SaleTemplateID;
    }

    /**
     * @param long[] $SaleTemplateID
     * @return \EbayWsdl\Classes\GetSellingManagerTemplatesRequestType
     */
    public function setSaleTemplateID(array $SaleTemplateID)
    {
      $this->SaleTemplateID = $SaleTemplateID;
      return $this;
    }

}
