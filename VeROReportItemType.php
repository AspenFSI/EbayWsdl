<?php

namespace EbayWsdl;

class VeROReportItemType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var int $VeROReasonCodeID
     */
    protected $VeROReasonCodeID = null;

    /**
     * @var string $MessageToSeller
     */
    protected $MessageToSeller = null;

    /**
     * @var boolean $CopyEmailToRightsOwner
     */
    protected $CopyEmailToRightsOwner = null;

    /**
     * @var ShippingRegionCodeType[] $Region
     */
    protected $Region = null;

    /**
     * @var CountryCodeType[] $Country
     */
    protected $Country = null;

    /**
     * @var string $Patent
     */
    protected $Patent = null;

    /**
     * @var string $DetailedMessage
     */
    protected $DetailedMessage = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemIDType $ItemID
     * @param int $VeROReasonCodeID
     * @param string $MessageToSeller
     * @param boolean $CopyEmailToRightsOwner
     * @param ShippingRegionCodeType[] $Region
     * @param CountryCodeType[] $Country
     * @param string $Patent
     * @param string $DetailedMessage
     * @param string $any
     */
    public function __construct($ItemID = null, $VeROReasonCodeID = null, $MessageToSeller = null, $CopyEmailToRightsOwner = null, array $Region = null, array $Country = null, $Patent = null, $DetailedMessage = null, $any = null)
    {
      $this->ItemID = $ItemID;
      $this->VeROReasonCodeID = $VeROReasonCodeID;
      $this->MessageToSeller = $MessageToSeller;
      $this->CopyEmailToRightsOwner = $CopyEmailToRightsOwner;
      $this->Region = $Region;
      $this->Country = $Country;
      $this->Patent = $Patent;
      $this->DetailedMessage = $DetailedMessage;
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
     * @return \EbayWsdl\VeROReportItemType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return int
     */
    public function getVeROReasonCodeID()
    {
      return $this->VeROReasonCodeID;
    }

    /**
     * @param int $VeROReasonCodeID
     * @return \EbayWsdl\VeROReportItemType
     */
    public function setVeROReasonCodeID($VeROReasonCodeID)
    {
      $this->VeROReasonCodeID = $VeROReasonCodeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageToSeller()
    {
      return $this->MessageToSeller;
    }

    /**
     * @param string $MessageToSeller
     * @return \EbayWsdl\VeROReportItemType
     */
    public function setMessageToSeller($MessageToSeller)
    {
      $this->MessageToSeller = $MessageToSeller;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCopyEmailToRightsOwner()
    {
      return $this->CopyEmailToRightsOwner;
    }

    /**
     * @param boolean $CopyEmailToRightsOwner
     * @return \EbayWsdl\VeROReportItemType
     */
    public function setCopyEmailToRightsOwner($CopyEmailToRightsOwner)
    {
      $this->CopyEmailToRightsOwner = $CopyEmailToRightsOwner;
      return $this;
    }

    /**
     * @return ShippingRegionCodeType[]
     */
    public function getRegion()
    {
      return $this->Region;
    }

    /**
     * @param ShippingRegionCodeType[] $Region
     * @return \EbayWsdl\VeROReportItemType
     */
    public function setRegion(array $Region)
    {
      $this->Region = $Region;
      return $this;
    }

    /**
     * @return CountryCodeType[]
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param CountryCodeType[] $Country
     * @return \EbayWsdl\VeROReportItemType
     */
    public function setCountry(array $Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getPatent()
    {
      return $this->Patent;
    }

    /**
     * @param string $Patent
     * @return \EbayWsdl\VeROReportItemType
     */
    public function setPatent($Patent)
    {
      $this->Patent = $Patent;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailedMessage()
    {
      return $this->DetailedMessage;
    }

    /**
     * @param string $DetailedMessage
     * @return \EbayWsdl\VeROReportItemType
     */
    public function setDetailedMessage($DetailedMessage)
    {
      $this->DetailedMessage = $DetailedMessage;
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
     * @return \EbayWsdl\VeROReportItemType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
