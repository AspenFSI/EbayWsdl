<?php

namespace EbayWsdl\Classes;

class SaveItemToSellingManagerTemplateRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $TemplateName
     */
    protected $TemplateName = null;

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
     * @param int $ProductID
     * @param string $TemplateName
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $ProductID = null, $TemplateName = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->ProductID = $ProductID;
      $this->TemplateName = $TemplateName;
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
     * @return \EbayWsdl\Classes\SaveItemToSellingManagerTemplateRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
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
     * @return \EbayWsdl\Classes\SaveItemToSellingManagerTemplateRequestType
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
      return $this->TemplateName;
    }

    /**
     * @param string $TemplateName
     * @return \EbayWsdl\Classes\SaveItemToSellingManagerTemplateRequestType
     */
    public function setTemplateName($TemplateName)
    {
      $this->TemplateName = $TemplateName;
      return $this;
    }

}
