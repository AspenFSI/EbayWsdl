<?php

namespace EbayWsdl\Classes;

class AddSellingManagerTemplateRequestType extends AbstractRequestType
{

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

    /**
     * @var string $SaleTemplateName
     */
    protected $SaleTemplateName = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

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
     * @param ItemType $Item
     * @param string $SaleTemplateName
     * @param int $ProductID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Item = null, $SaleTemplateName = null, $ProductID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Item = $Item;
      $this->SaleTemplateName = $SaleTemplateName;
      $this->ProductID = $ProductID;
    }

    /**
     * @return ItemType
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ItemType $Item
     * @return \EbayWsdl\Classes\AddSellingManagerTemplateRequestType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return string
     */
    public function getSaleTemplateName()
    {
      return $this->SaleTemplateName;
    }

    /**
     * @param string $SaleTemplateName
     * @return \EbayWsdl\Classes\AddSellingManagerTemplateRequestType
     */
    public function setSaleTemplateName($SaleTemplateName)
    {
      $this->SaleTemplateName = $SaleTemplateName;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return \EbayWsdl\Classes\AddSellingManagerTemplateRequestType
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

}
