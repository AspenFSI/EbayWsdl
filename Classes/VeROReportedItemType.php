<?php

namespace EbayWsdl\Classes;

class VeROReportedItemType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var VeROItemStatusCodeType $ItemStatus
     */
    protected $ItemStatus = null;

    /**
     * @var string $ItemReasonForFailure
     */
    protected $ItemReasonForFailure = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemIDType $ItemID
     * @param VeROItemStatusCodeType $ItemStatus
     * @param string $ItemReasonForFailure
     * @param string $any
     */
    public function __construct($ItemID = null, $ItemStatus = null, $ItemReasonForFailure = null, $any = null)
    {
      $this->ItemID = $ItemID;
      $this->ItemStatus = $ItemStatus;
      $this->ItemReasonForFailure = $ItemReasonForFailure;
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
     * @return \EbayWsdl\Classes\VeROReportedItemType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return VeROItemStatusCodeType
     */
    public function getItemStatus()
    {
      return $this->ItemStatus;
    }

    /**
     * @param VeROItemStatusCodeType $ItemStatus
     * @return \EbayWsdl\Classes\VeROReportedItemType
     */
    public function setItemStatus($ItemStatus)
    {
      $this->ItemStatus = $ItemStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemReasonForFailure()
    {
      return $this->ItemReasonForFailure;
    }

    /**
     * @param string $ItemReasonForFailure
     * @return \EbayWsdl\Classes\VeROReportedItemType
     */
    public function setItemReasonForFailure($ItemReasonForFailure)
    {
      $this->ItemReasonForFailure = $ItemReasonForFailure;
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
     * @return \EbayWsdl\Classes\VeROReportedItemType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
