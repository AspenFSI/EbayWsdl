<?php

namespace EbayWsdl\Classes;

class ReviseSellingManagerTemplateRequestType extends AbstractRequestType
{

    /**
     * @var int $SaleTemplateID
     */
    protected $SaleTemplateID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $SaleTemplateName
     */
    protected $SaleTemplateName = null;

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

    /**
     * @var string[] $DeletedField
     */
    protected $DeletedField = null;

    /**
     * @var boolean $VerifyOnly
     */
    protected $VerifyOnly = null;

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
     * @param int $SaleTemplateID
     * @param int $ProductID
     * @param string $SaleTemplateName
     * @param ItemType $Item
     * @param string[] $DeletedField
     * @param boolean $VerifyOnly
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $SaleTemplateID = null, $ProductID = null, $SaleTemplateName = null, $Item = null, array $DeletedField = null, $VerifyOnly = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->SaleTemplateID = $SaleTemplateID;
      $this->ProductID = $ProductID;
      $this->SaleTemplateName = $SaleTemplateName;
      $this->Item = $Item;
      $this->DeletedField = $DeletedField;
      $this->VerifyOnly = $VerifyOnly;
    }

    /**
     * @return int
     */
    public function getSaleTemplateID()
    {
      return $this->SaleTemplateID;
    }

    /**
     * @param int $SaleTemplateID
     * @return \EbayWsdl\Classes\ReviseSellingManagerTemplateRequestType
     */
    public function setSaleTemplateID($SaleTemplateID)
    {
      $this->SaleTemplateID = $SaleTemplateID;
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
     * @return \EbayWsdl\Classes\ReviseSellingManagerTemplateRequestType
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
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
     * @return \EbayWsdl\Classes\ReviseSellingManagerTemplateRequestType
     */
    public function setSaleTemplateName($SaleTemplateName)
    {
      $this->SaleTemplateName = $SaleTemplateName;
      return $this;
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
     * @return \EbayWsdl\Classes\ReviseSellingManagerTemplateRequestType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDeletedField()
    {
      return $this->DeletedField;
    }

    /**
     * @param string[] $DeletedField
     * @return \EbayWsdl\Classes\ReviseSellingManagerTemplateRequestType
     */
    public function setDeletedField(array $DeletedField)
    {
      $this->DeletedField = $DeletedField;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVerifyOnly()
    {
      return $this->VerifyOnly;
    }

    /**
     * @param boolean $VerifyOnly
     * @return \EbayWsdl\Classes\ReviseSellingManagerTemplateRequestType
     */
    public function setVerifyOnly($VerifyOnly)
    {
      $this->VerifyOnly = $VerifyOnly;
      return $this;
    }

}
