<?php

namespace EbayWsdl;

class SMSSubscriptionType
{

    /**
     * @var string $SMSPhone
     */
    protected $SMSPhone = null;

    /**
     * @var SMSSubscriptionUserStatusCodeType $UserStatus
     */
    protected $UserStatus = null;

    /**
     * @var WirelessCarrierIDCodeType $CarrierID
     */
    protected $CarrierID = null;

    /**
     * @var SMSSubscriptionErrorCodeCodeType $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var ItemIDType $ItemToUnsubscribe
     */
    protected $ItemToUnsubscribe = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $SMSPhone
     * @param SMSSubscriptionUserStatusCodeType $UserStatus
     * @param WirelessCarrierIDCodeType $CarrierID
     * @param SMSSubscriptionErrorCodeCodeType $ErrorCode
     * @param ItemIDType $ItemToUnsubscribe
     * @param string $any
     */
    public function __construct($SMSPhone = null, $UserStatus = null, $CarrierID = null, $ErrorCode = null, $ItemToUnsubscribe = null, $any = null)
    {
      $this->SMSPhone = $SMSPhone;
      $this->UserStatus = $UserStatus;
      $this->CarrierID = $CarrierID;
      $this->ErrorCode = $ErrorCode;
      $this->ItemToUnsubscribe = $ItemToUnsubscribe;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getSMSPhone()
    {
      return $this->SMSPhone;
    }

    /**
     * @param string $SMSPhone
     * @return \EbayWsdl\SMSSubscriptionType
     */
    public function setSMSPhone($SMSPhone)
    {
      $this->SMSPhone = $SMSPhone;
      return $this;
    }

    /**
     * @return SMSSubscriptionUserStatusCodeType
     */
    public function getUserStatus()
    {
      return $this->UserStatus;
    }

    /**
     * @param SMSSubscriptionUserStatusCodeType $UserStatus
     * @return \EbayWsdl\SMSSubscriptionType
     */
    public function setUserStatus($UserStatus)
    {
      $this->UserStatus = $UserStatus;
      return $this;
    }

    /**
     * @return WirelessCarrierIDCodeType
     */
    public function getCarrierID()
    {
      return $this->CarrierID;
    }

    /**
     * @param WirelessCarrierIDCodeType $CarrierID
     * @return \EbayWsdl\SMSSubscriptionType
     */
    public function setCarrierID($CarrierID)
    {
      $this->CarrierID = $CarrierID;
      return $this;
    }

    /**
     * @return SMSSubscriptionErrorCodeCodeType
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param SMSSubscriptionErrorCodeCodeType $ErrorCode
     * @return \EbayWsdl\SMSSubscriptionType
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return ItemIDType
     */
    public function getItemToUnsubscribe()
    {
      return $this->ItemToUnsubscribe;
    }

    /**
     * @param ItemIDType $ItemToUnsubscribe
     * @return \EbayWsdl\SMSSubscriptionType
     */
    public function setItemToUnsubscribe($ItemToUnsubscribe)
    {
      $this->ItemToUnsubscribe = $ItemToUnsubscribe;
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
     * @return \EbayWsdl\SMSSubscriptionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
