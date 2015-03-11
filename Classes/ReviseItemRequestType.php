<?php

namespace EbayWsdl\Classes;

class ReviseItemRequestType extends AbstractRequestType
{

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
     * @param ItemType $Item
     * @param string[] $DeletedField
     * @param boolean $VerifyOnly
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Item = null, array $DeletedField = null, $VerifyOnly = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Item = $Item;
      $this->DeletedField = $DeletedField;
      $this->VerifyOnly = $VerifyOnly;
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
     * @return \EbayWsdl\Classes\ReviseItemRequestType
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
     * @return \EbayWsdl\Classes\ReviseItemRequestType
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
     * @return \EbayWsdl\Classes\ReviseItemRequestType
     */
    public function setVerifyOnly($VerifyOnly)
    {
      $this->VerifyOnly = $VerifyOnly;
      return $this;
    }

}
