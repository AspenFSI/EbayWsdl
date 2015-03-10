<?php

namespace EbayWsdl;

class PickupMethodSelectedType
{

    /**
     * @var string $PickupMethod
     */
    protected $PickupMethod = null;

    /**
     * @var string $PickupStoreID
     */
    protected $PickupStoreID = null;

    /**
     * @var PickupStatusCodeType $PickupStatus
     */
    protected $PickupStatus = null;

    /**
     * @var string $MerchantPickupCode
     */
    protected $MerchantPickupCode = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $PickupMethod
     * @param string $PickupStoreID
     * @param PickupStatusCodeType $PickupStatus
     * @param string $MerchantPickupCode
     * @param string $any
     */
    public function __construct($PickupMethod = null, $PickupStoreID = null, $PickupStatus = null, $MerchantPickupCode = null, $any = null)
    {
      $this->PickupMethod = $PickupMethod;
      $this->PickupStoreID = $PickupStoreID;
      $this->PickupStatus = $PickupStatus;
      $this->MerchantPickupCode = $MerchantPickupCode;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getPickupMethod()
    {
      return $this->PickupMethod;
    }

    /**
     * @param string $PickupMethod
     * @return \EbayWsdl\PickupMethodSelectedType
     */
    public function setPickupMethod($PickupMethod)
    {
      $this->PickupMethod = $PickupMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupStoreID()
    {
      return $this->PickupStoreID;
    }

    /**
     * @param string $PickupStoreID
     * @return \EbayWsdl\PickupMethodSelectedType
     */
    public function setPickupStoreID($PickupStoreID)
    {
      $this->PickupStoreID = $PickupStoreID;
      return $this;
    }

    /**
     * @return PickupStatusCodeType
     */
    public function getPickupStatus()
    {
      return $this->PickupStatus;
    }

    /**
     * @param PickupStatusCodeType $PickupStatus
     * @return \EbayWsdl\PickupMethodSelectedType
     */
    public function setPickupStatus($PickupStatus)
    {
      $this->PickupStatus = $PickupStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchantPickupCode()
    {
      return $this->MerchantPickupCode;
    }

    /**
     * @param string $MerchantPickupCode
     * @return \EbayWsdl\PickupMethodSelectedType
     */
    public function setMerchantPickupCode($MerchantPickupCode)
    {
      $this->MerchantPickupCode = $MerchantPickupCode;
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
     * @return \EbayWsdl\PickupMethodSelectedType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
