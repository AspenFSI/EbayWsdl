<?php

namespace EbayWsdl\Classes;

class EndItemRequestContainerType
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
     * @var string $MessageID
     */
    protected $MessageID = null;

    /**
     * @var string $SellerInventoryID
     */
    protected $SellerInventoryID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemIDType $ItemID
     * @param EndReasonCodeType $EndingReason
     * @param string $MessageID
     * @param string $SellerInventoryID
     * @param string $any
     */
    public function __construct($ItemID = null, $EndingReason = null, $MessageID = null, $SellerInventoryID = null, $any = null)
    {
      $this->ItemID = $ItemID;
      $this->EndingReason = $EndingReason;
      $this->MessageID = $MessageID;
      $this->SellerInventoryID = $SellerInventoryID;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\EndItemRequestContainerType
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
     * @return \EbayWsdl\Classes\EndItemRequestContainerType
     */
    public function setEndingReason($EndingReason)
    {
      $this->EndingReason = $EndingReason;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageID()
    {
      return $this->MessageID;
    }

    /**
     * @param string $MessageID
     * @return \EbayWsdl\Classes\EndItemRequestContainerType
     */
    public function setMessageID($MessageID)
    {
      $this->MessageID = $MessageID;
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
     * @return \EbayWsdl\Classes\EndItemRequestContainerType
     */
    public function setSellerInventoryID($SellerInventoryID)
    {
      $this->SellerInventoryID = $SellerInventoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \EbayWsdl\Classes\EndItemRequestContainerType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
