<?php

namespace EbayWsdl;

class GetItemRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var boolean $IncludeWatchCount
     */
    protected $IncludeWatchCount = null;

    /**
     * @var boolean $IncludeCrossPromotion
     */
    protected $IncludeCrossPromotion = null;

    /**
     * @var boolean $IncludeItemSpecifics
     */
    protected $IncludeItemSpecifics = null;

    /**
     * @var boolean $IncludeTaxTable
     */
    protected $IncludeTaxTable = null;

    /**
     * @var SKUType $SKU
     */
    protected $SKU = null;

    /**
     * @var SKUType $VariationSKU
     */
    protected $VariationSKU = null;

    /**
     * @var NameValueListArrayType $VariationSpecifics
     */
    protected $VariationSpecifics = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var boolean $IncludeItemCompatibilityList
     */
    protected $IncludeItemCompatibilityList = null;

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
     * @param ItemIDType $ItemID
     * @param boolean $IncludeWatchCount
     * @param boolean $IncludeCrossPromotion
     * @param boolean $IncludeItemSpecifics
     * @param boolean $IncludeTaxTable
     * @param SKUType $SKU
     * @param SKUType $VariationSKU
     * @param NameValueListArrayType $VariationSpecifics
     * @param string $TransactionID
     * @param boolean $IncludeItemCompatibilityList
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $IncludeWatchCount = null, $IncludeCrossPromotion = null, $IncludeItemSpecifics = null, $IncludeTaxTable = null, $SKU = null, $VariationSKU = null, $VariationSpecifics = null, $TransactionID = null, $IncludeItemCompatibilityList = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->IncludeWatchCount = $IncludeWatchCount;
      $this->IncludeCrossPromotion = $IncludeCrossPromotion;
      $this->IncludeItemSpecifics = $IncludeItemSpecifics;
      $this->IncludeTaxTable = $IncludeTaxTable;
      $this->SKU = $SKU;
      $this->VariationSKU = $VariationSKU;
      $this->VariationSpecifics = $VariationSpecifics;
      $this->TransactionID = $TransactionID;
      $this->IncludeItemCompatibilityList = $IncludeItemCompatibilityList;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\GetItemRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeWatchCount()
    {
      return $this->IncludeWatchCount;
    }

    /**
     * @param boolean $IncludeWatchCount
     * @return \EbayWsdl\GetItemRequestType
     */
    public function setIncludeWatchCount($IncludeWatchCount)
    {
      $this->IncludeWatchCount = $IncludeWatchCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeCrossPromotion()
    {
      return $this->IncludeCrossPromotion;
    }

    /**
     * @param boolean $IncludeCrossPromotion
     * @return \EbayWsdl\GetItemRequestType
     */
    public function setIncludeCrossPromotion($IncludeCrossPromotion)
    {
      $this->IncludeCrossPromotion = $IncludeCrossPromotion;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeItemSpecifics()
    {
      return $this->IncludeItemSpecifics;
    }

    /**
     * @param boolean $IncludeItemSpecifics
     * @return \EbayWsdl\GetItemRequestType
     */
    public function setIncludeItemSpecifics($IncludeItemSpecifics)
    {
      $this->IncludeItemSpecifics = $IncludeItemSpecifics;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeTaxTable()
    {
      return $this->IncludeTaxTable;
    }

    /**
     * @param boolean $IncludeTaxTable
     * @return \EbayWsdl\GetItemRequestType
     */
    public function setIncludeTaxTable($IncludeTaxTable)
    {
      $this->IncludeTaxTable = $IncludeTaxTable;
      return $this;
    }

    /**
     * @return SKUType
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param SKUType $SKU
     * @return \EbayWsdl\GetItemRequestType
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return SKUType
     */
    public function getVariationSKU()
    {
      return $this->VariationSKU;
    }

    /**
     * @param SKUType $VariationSKU
     * @return \EbayWsdl\GetItemRequestType
     */
    public function setVariationSKU($VariationSKU)
    {
      $this->VariationSKU = $VariationSKU;
      return $this;
    }

    /**
     * @return NameValueListArrayType
     */
    public function getVariationSpecifics()
    {
      return $this->VariationSpecifics;
    }

    /**
     * @param NameValueListArrayType $VariationSpecifics
     * @return \EbayWsdl\GetItemRequestType
     */
    public function setVariationSpecifics($VariationSpecifics)
    {
      $this->VariationSpecifics = $VariationSpecifics;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
      return $this->TransactionID;
    }

    /**
     * @param string $TransactionID
     * @return \EbayWsdl\GetItemRequestType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeItemCompatibilityList()
    {
      return $this->IncludeItemCompatibilityList;
    }

    /**
     * @param boolean $IncludeItemCompatibilityList
     * @return \EbayWsdl\GetItemRequestType
     */
    public function setIncludeItemCompatibilityList($IncludeItemCompatibilityList)
    {
      $this->IncludeItemCompatibilityList = $IncludeItemCompatibilityList;
      return $this;
    }

}
