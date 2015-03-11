<?php

namespace EbayWsdl\Classes;

class SetTaxTableRequestType extends AbstractRequestType
{

    /**
     * @var TaxTableType $TaxTable
     */
    protected $TaxTable = null;

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
     * @param TaxTableType $TaxTable
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $TaxTable = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->TaxTable = $TaxTable;
    }

    /**
     * @return TaxTableType
     */
    public function getTaxTable()
    {
      return $this->TaxTable;
    }

    /**
     * @param TaxTableType $TaxTable
     * @return \EbayWsdl\Classes\SetTaxTableRequestType
     */
    public function setTaxTable($TaxTable)
    {
      $this->TaxTable = $TaxTable;
      return $this;
    }

}
