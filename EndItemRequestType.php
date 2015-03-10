<?php

namespace EbayWsdl;

class EndItemRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var EndReasonCodeType $EndingReason
     */
    protected $EndingReason = null;

    /**
     * @var string $SellerInventoryID
     */
    protected $SellerInventoryID = null;

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
     * @param EndReasonCodeType $EndingReason
     * @param string $SellerInventoryID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $EndingReason = null, $SellerInventoryID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->EndingReason = $EndingReason;
      $this->SellerInventoryID = $SellerInventoryID;
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
     * @return \EbayWsdl\EndItemRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return EndReasonCodeType
     */
    public function getEndingReason()
    {
      return $this->EndingReason;
    }

    /**
     * @param EndReasonCodeType $EndingReason
     * @return \EbayWsdl\EndItemRequestType
     */
    public function setEndingReason($EndingReason)
    {
      $this->EndingReason = $EndingReason;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerInventoryID()
    {
      return $this->SellerInventoryID;
    }

    /**
     * @param string $SellerInventoryID
     * @return \EbayWsdl\EndItemRequestType
     */
    public function setSellerInventoryID($SellerInventoryID)
    {
      $this->SellerInventoryID = $SellerInventoryID;
      return $this;
    }

}
