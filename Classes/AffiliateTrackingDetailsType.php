<?php

namespace EbayWsdl\Classes;

class AffiliateTrackingDetailsType
{

    /**
     * @var string $TrackingID
     */
    protected $TrackingID = null;

    /**
     * @var string $TrackingPartnerCode
     */
    protected $TrackingPartnerCode = null;

    /**
     * @var ApplicationDeviceTypeCodeType $ApplicationDeviceType
     */
    protected $ApplicationDeviceType = null;

    /**
     * @var string $AffiliateUserID
     */
    protected $AffiliateUserID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $TrackingID
     * @param string $TrackingPartnerCode
     * @param ApplicationDeviceTypeCodeType $ApplicationDeviceType
     * @param string $AffiliateUserID
     * @param string $any
     */
    public function __construct($TrackingID = null, $TrackingPartnerCode = null, $ApplicationDeviceType = null, $AffiliateUserID = null, $any = null)
    {
      $this->TrackingID = $TrackingID;
      $this->TrackingPartnerCode = $TrackingPartnerCode;
      $this->ApplicationDeviceType = $ApplicationDeviceType;
      $this->AffiliateUserID = $AffiliateUserID;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getTrackingID()
    {
      return $this->TrackingID;
    }

    /**
     * @param string $TrackingID
     * @return \EbayWsdl\Classes\AffiliateTrackingDetailsType
     */
    public function setTrackingID($TrackingID)
    {
      $this->TrackingID = $TrackingID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingPartnerCode()
    {
      return $this->TrackingPartnerCode;
    }

    /**
     * @param string $TrackingPartnerCode
     * @return \EbayWsdl\Classes\AffiliateTrackingDetailsType
     */
    public function setTrackingPartnerCode($TrackingPartnerCode)
    {
      $this->TrackingPartnerCode = $TrackingPartnerCode;
      return $this;
    }

    /**
     * @return ApplicationDeviceTypeCodeType
     */
    public function getApplicationDeviceType()
    {
      return $this->ApplicationDeviceType;
    }

    /**
     * @param ApplicationDeviceTypeCodeType $ApplicationDeviceType
     * @return \EbayWsdl\Classes\AffiliateTrackingDetailsType
     */
    public function setApplicationDeviceType($ApplicationDeviceType)
    {
      $this->ApplicationDeviceType = $ApplicationDeviceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAffiliateUserID()
    {
      return $this->AffiliateUserID;
    }

    /**
     * @param string $AffiliateUserID
     * @return \EbayWsdl\Classes\AffiliateTrackingDetailsType
     */
    public function setAffiliateUserID($AffiliateUserID)
    {
      $this->AffiliateUserID = $AffiliateUserID;
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
     * @return \EbayWsdl\Classes\AffiliateTrackingDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
