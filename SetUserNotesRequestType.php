<?php

namespace EbayWsdl;

class SetUserNotesRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var SetUserNotesActionCodeType $Action
     */
    protected $Action = null;

    /**
     * @var string $NoteText
     */
    protected $NoteText = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var NameValueListArrayType $VariationSpecifics
     */
    protected $VariationSpecifics = null;

    /**
     * @var SKUType $SKU
     */
    protected $SKU = null;

    /**
     * @var string $OrderLineItemID
     */
    protected $OrderLineItemID = null;

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
     * @param SetUserNotesActionCodeType $Action
     * @param string $NoteText
     * @param string $TransactionID
     * @param NameValueListArrayType $VariationSpecifics
     * @param SKUType $SKU
     * @param string $OrderLineItemID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $Action = null, $NoteText = null, $TransactionID = null, $VariationSpecifics = null, $SKU = null, $OrderLineItemID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->Action = $Action;
      $this->NoteText = $NoteText;
      $this->TransactionID = $TransactionID;
      $this->VariationSpecifics = $VariationSpecifics;
      $this->SKU = $SKU;
      $this->OrderLineItemID = $OrderLineItemID;
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
     * @return \EbayWsdl\SetUserNotesRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return SetUserNotesActionCodeType
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param SetUserNotesActionCodeType $Action
     * @return \EbayWsdl\SetUserNotesRequestType
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoteText()
    {
      return $this->NoteText;
    }

    /**
     * @param string $NoteText
     * @return \EbayWsdl\SetUserNotesRequestType
     */
    public function setNoteText($NoteText)
    {
      $this->NoteText = $NoteText;
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
     * @return \EbayWsdl\SetUserNotesRequestType
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
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
     * @return \EbayWsdl\SetUserNotesRequestType
     */
    public function setVariationSpecifics($VariationSpecifics)
    {
      $this->VariationSpecifics = $VariationSpecifics;
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
     * @return \EbayWsdl\SetUserNotesRequestType
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineItemID()
    {
      return $this->OrderLineItemID;
    }

    /**
     * @param string $OrderLineItemID
     * @return \EbayWsdl\SetUserNotesRequestType
     */
    public function setOrderLineItemID($OrderLineItemID)
    {
      $this->OrderLineItemID = $OrderLineItemID;
      return $this;
    }

}
