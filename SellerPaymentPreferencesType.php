<?php

namespace EbayWsdl;

class SellerPaymentPreferencesType
{

    /**
     * @var boolean $AlwaysUseThisPaymentAddress
     */
    protected $AlwaysUseThisPaymentAddress = null;

    /**
     * @var DisplayPayNowButtonCodeType $DisplayPayNowButton
     */
    protected $DisplayPayNowButton = null;

    /**
     * @var boolean $PayPalPreferred
     */
    protected $PayPalPreferred = null;

    /**
     * @var string $DefaultPayPalEmailAddress
     */
    protected $DefaultPayPalEmailAddress = null;

    /**
     * @var boolean $PayPalAlwaysOn
     */
    protected $PayPalAlwaysOn = null;

    /**
     * @var AddressType $SellerPaymentAddress
     */
    protected $SellerPaymentAddress = null;

    /**
     * @var UPSRateOptionCodeType $UPSRateOption
     */
    protected $UPSRateOption = null;

    /**
     * @var FedExRateOptionCodeType $FedExRateOption
     */
    protected $FedExRateOption = null;

    /**
     * @var USPSRateOptionCodeType $USPSRateOption
     */
    protected $USPSRateOption = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $AlwaysUseThisPaymentAddress
     * @param DisplayPayNowButtonCodeType $DisplayPayNowButton
     * @param boolean $PayPalPreferred
     * @param string $DefaultPayPalEmailAddress
     * @param boolean $PayPalAlwaysOn
     * @param AddressType $SellerPaymentAddress
     * @param UPSRateOptionCodeType $UPSRateOption
     * @param FedExRateOptionCodeType $FedExRateOption
     * @param USPSRateOptionCodeType $USPSRateOption
     * @param string $any
     */
    public function __construct($AlwaysUseThisPaymentAddress = null, $DisplayPayNowButton = null, $PayPalPreferred = null, $DefaultPayPalEmailAddress = null, $PayPalAlwaysOn = null, $SellerPaymentAddress = null, $UPSRateOption = null, $FedExRateOption = null, $USPSRateOption = null, $any = null)
    {
      $this->AlwaysUseThisPaymentAddress = $AlwaysUseThisPaymentAddress;
      $this->DisplayPayNowButton = $DisplayPayNowButton;
      $this->PayPalPreferred = $PayPalPreferred;
      $this->DefaultPayPalEmailAddress = $DefaultPayPalEmailAddress;
      $this->PayPalAlwaysOn = $PayPalAlwaysOn;
      $this->SellerPaymentAddress = $SellerPaymentAddress;
      $this->UPSRateOption = $UPSRateOption;
      $this->FedExRateOption = $FedExRateOption;
      $this->USPSRateOption = $USPSRateOption;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getAlwaysUseThisPaymentAddress()
    {
      return $this->AlwaysUseThisPaymentAddress;
    }

    /**
     * @param boolean $AlwaysUseThisPaymentAddress
     * @return \EbayWsdl\SellerPaymentPreferencesType
     */
    public function setAlwaysUseThisPaymentAddress($AlwaysUseThisPaymentAddress)
    {
      $this->AlwaysUseThisPaymentAddress = $AlwaysUseThisPaymentAddress;
      return $this;
    }

    /**
     * @return DisplayPayNowButtonCodeType
     */
    public function getDisplayPayNowButton()
    {
      return $this->DisplayPayNowButton;
    }

    /**
     * @param DisplayPayNowButtonCodeType $DisplayPayNowButton
     * @return \EbayWsdl\SellerPaymentPreferencesType
     */
    public function setDisplayPayNowButton($DisplayPayNowButton)
    {
      $this->DisplayPayNowButton = $DisplayPayNowButton;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPayPalPreferred()
    {
      return $this->PayPalPreferred;
    }

    /**
     * @param boolean $PayPalPreferred
     * @return \EbayWsdl\SellerPaymentPreferencesType
     */
    public function setPayPalPreferred($PayPalPreferred)
    {
      $this->PayPalPreferred = $PayPalPreferred;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultPayPalEmailAddress()
    {
      return $this->DefaultPayPalEmailAddress;
    }

    /**
     * @param string $DefaultPayPalEmailAddress
     * @return \EbayWsdl\SellerPaymentPreferencesType
     */
    public function setDefaultPayPalEmailAddress($DefaultPayPalEmailAddress)
    {
      $this->DefaultPayPalEmailAddress = $DefaultPayPalEmailAddress;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPayPalAlwaysOn()
    {
      return $this->PayPalAlwaysOn;
    }

    /**
     * @param boolean $PayPalAlwaysOn
     * @return \EbayWsdl\SellerPaymentPreferencesType
     */
    public function setPayPalAlwaysOn($PayPalAlwaysOn)
    {
      $this->PayPalAlwaysOn = $PayPalAlwaysOn;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getSellerPaymentAddress()
    {
      return $this->SellerPaymentAddress;
    }

    /**
     * @param AddressType $SellerPaymentAddress
     * @return \EbayWsdl\SellerPaymentPreferencesType
     */
    public function setSellerPaymentAddress($SellerPaymentAddress)
    {
      $this->SellerPaymentAddress = $SellerPaymentAddress;
      return $this;
    }

    /**
     * @return UPSRateOptionCodeType
     */
    public function getUPSRateOption()
    {
      return $this->UPSRateOption;
    }

    /**
     * @param UPSRateOptionCodeType $UPSRateOption
     * @return \EbayWsdl\SellerPaymentPreferencesType
     */
    public function setUPSRateOption($UPSRateOption)
    {
      $this->UPSRateOption = $UPSRateOption;
      return $this;
    }

    /**
     * @return FedExRateOptionCodeType
     */
    public function getFedExRateOption()
    {
      return $this->FedExRateOption;
    }

    /**
     * @param FedExRateOptionCodeType $FedExRateOption
     * @return \EbayWsdl\SellerPaymentPreferencesType
     */
    public function setFedExRateOption($FedExRateOption)
    {
      $this->FedExRateOption = $FedExRateOption;
      return $this;
    }

    /**
     * @return USPSRateOptionCodeType
     */
    public function getUSPSRateOption()
    {
      return $this->USPSRateOption;
    }

    /**
     * @param USPSRateOptionCodeType $USPSRateOption
     * @return \EbayWsdl\SellerPaymentPreferencesType
     */
    public function setUSPSRateOption($USPSRateOption)
    {
      $this->USPSRateOption = $USPSRateOption;
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
     * @return \EbayWsdl\SellerPaymentPreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
