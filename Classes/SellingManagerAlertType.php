<?php

namespace EbayWsdl\Classes;

class SellingManagerAlertType
{

    /**
     * @var SellingManagerAlertTypeCodeType $AlertType
     */
    protected $AlertType = null;

    /**
     * @var SellingManagerSoldListingsPropertyTypeCodeType $SoldAlert
     */
    protected $SoldAlert = null;

    /**
     * @var SellingManagerInventoryPropertyTypeCodeType $InventoryAlert
     */
    protected $InventoryAlert = null;

    /**
     * @var SellingManagerAutomationPropertyTypeCodeType $AutomationAlert
     */
    protected $AutomationAlert = null;

    /**
     * @var SellingManagerPaisaPayPropertyTypeCodeType $PaisaPayAlert
     */
    protected $PaisaPayAlert = null;

    /**
     * @var SellingManagerGeneralPropertyTypeCodeType $GeneralAlert
     */
    protected $GeneralAlert = null;

    /**
     * @var int $DurationInDays
     */
    protected $DurationInDays = null;

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SellingManagerAlertTypeCodeType $AlertType
     * @param SellingManagerSoldListingsPropertyTypeCodeType $SoldAlert
     * @param SellingManagerInventoryPropertyTypeCodeType $InventoryAlert
     * @param SellingManagerAutomationPropertyTypeCodeType $AutomationAlert
     * @param SellingManagerPaisaPayPropertyTypeCodeType $PaisaPayAlert
     * @param SellingManagerGeneralPropertyTypeCodeType $GeneralAlert
     * @param int $DurationInDays
     * @param int $Count
     * @param string $any
     */
    public function __construct($AlertType = null, $SoldAlert = null, $InventoryAlert = null, $AutomationAlert = null, $PaisaPayAlert = null, $GeneralAlert = null, $DurationInDays = null, $Count = null, $any = null)
    {
      $this->AlertType = $AlertType;
      $this->SoldAlert = $SoldAlert;
      $this->InventoryAlert = $InventoryAlert;
      $this->AutomationAlert = $AutomationAlert;
      $this->PaisaPayAlert = $PaisaPayAlert;
      $this->GeneralAlert = $GeneralAlert;
      $this->DurationInDays = $DurationInDays;
      $this->Count = $Count;
      $this->any = $any;
    }

    /**
     * @return SellingManagerAlertTypeCodeType
     */
    public function getAlertType()
    {
      return $this->AlertType;
    }

    /**
     * @param SellingManagerAlertTypeCodeType $AlertType
     * @return \EbayWsdl\Classes\SellingManagerAlertType
     */
    public function setAlertType($AlertType)
    {
      $this->AlertType = $AlertType;
      return $this;
    }

    /**
     * @return SellingManagerSoldListingsPropertyTypeCodeType
     */
    public function getSoldAlert()
    {
      return $this->SoldAlert;
    }

    /**
     * @param SellingManagerSoldListingsPropertyTypeCodeType $SoldAlert
     * @return \EbayWsdl\Classes\SellingManagerAlertType
     */
    public function setSoldAlert($SoldAlert)
    {
      $this->SoldAlert = $SoldAlert;
      return $this;
    }

    /**
     * @return SellingManagerInventoryPropertyTypeCodeType
     */
    public function getInventoryAlert()
    {
      return $this->InventoryAlert;
    }

    /**
     * @param SellingManagerInventoryPropertyTypeCodeType $InventoryAlert
     * @return \EbayWsdl\Classes\SellingManagerAlertType
     */
    public function setInventoryAlert($InventoryAlert)
    {
      $this->InventoryAlert = $InventoryAlert;
      return $this;
    }

    /**
     * @return SellingManagerAutomationPropertyTypeCodeType
     */
    public function getAutomationAlert()
    {
      return $this->AutomationAlert;
    }

    /**
     * @param SellingManagerAutomationPropertyTypeCodeType $AutomationAlert
     * @return \EbayWsdl\Classes\SellingManagerAlertType
     */
    public function setAutomationAlert($AutomationAlert)
    {
      $this->AutomationAlert = $AutomationAlert;
      return $this;
    }

    /**
     * @return SellingManagerPaisaPayPropertyTypeCodeType
     */
    public function getPaisaPayAlert()
    {
      return $this->PaisaPayAlert;
    }

    /**
     * @param SellingManagerPaisaPayPropertyTypeCodeType $PaisaPayAlert
     * @return \EbayWsdl\Classes\SellingManagerAlertType
     */
    public function setPaisaPayAlert($PaisaPayAlert)
    {
      $this->PaisaPayAlert = $PaisaPayAlert;
      return $this;
    }

    /**
     * @return SellingManagerGeneralPropertyTypeCodeType
     */
    public function getGeneralAlert()
    {
      return $this->GeneralAlert;
    }

    /**
     * @param SellingManagerGeneralPropertyTypeCodeType $GeneralAlert
     * @return \EbayWsdl\Classes\SellingManagerAlertType
     */
    public function setGeneralAlert($GeneralAlert)
    {
      $this->GeneralAlert = $GeneralAlert;
      return $this;
    }

    /**
     * @return int
     */
    public function getDurationInDays()
    {
      return $this->DurationInDays;
    }

    /**
     * @param int $DurationInDays
     * @return \EbayWsdl\Classes\SellingManagerAlertType
     */
    public function setDurationInDays($DurationInDays)
    {
      $this->DurationInDays = $DurationInDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \EbayWsdl\Classes\SellingManagerAlertType
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
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
     * @return \EbayWsdl\Classes\SellingManagerAlertType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
