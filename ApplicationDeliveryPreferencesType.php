<?php

namespace EbayWsdl;

class ApplicationDeliveryPreferencesType
{

    /**
     * @var anyURI $ApplicationURL
     */
    protected $ApplicationURL = null;

    /**
     * @var EnableCodeType $ApplicationEnable
     */
    protected $ApplicationEnable = null;

    /**
     * @var anyURI $AlertEmail
     */
    protected $AlertEmail = null;

    /**
     * @var EnableCodeType $AlertEnable
     */
    protected $AlertEnable = null;

    /**
     * @var NotificationPayloadTypeCodeType $NotificationPayloadType
     */
    protected $NotificationPayloadType = null;

    /**
     * @var DeviceTypeCodeType $DeviceType
     */
    protected $DeviceType = null;

    /**
     * @var string $PayloadVersion
     */
    protected $PayloadVersion = null;

    /**
     * @var DeliveryURLDetailType[] $DeliveryURLDetails
     */
    protected $DeliveryURLDetails = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $ApplicationURL
     * @param EnableCodeType $ApplicationEnable
     * @param anyURI $AlertEmail
     * @param EnableCodeType $AlertEnable
     * @param NotificationPayloadTypeCodeType $NotificationPayloadType
     * @param DeviceTypeCodeType $DeviceType
     * @param string $PayloadVersion
     * @param DeliveryURLDetailType[] $DeliveryURLDetails
     * @param string $any
     */
    public function __construct($ApplicationURL = null, $ApplicationEnable = null, $AlertEmail = null, $AlertEnable = null, $NotificationPayloadType = null, $DeviceType = null, $PayloadVersion = null, array $DeliveryURLDetails = null, $any = null)
    {
      $this->ApplicationURL = $ApplicationURL;
      $this->ApplicationEnable = $ApplicationEnable;
      $this->AlertEmail = $AlertEmail;
      $this->AlertEnable = $AlertEnable;
      $this->NotificationPayloadType = $NotificationPayloadType;
      $this->DeviceType = $DeviceType;
      $this->PayloadVersion = $PayloadVersion;
      $this->DeliveryURLDetails = $DeliveryURLDetails;
      $this->any = $any;
    }

    /**
     * @return anyURI
     */
    public function getApplicationURL()
    {
      return $this->ApplicationURL;
    }

    /**
     * @param anyURI $ApplicationURL
     * @return \EbayWsdl\ApplicationDeliveryPreferencesType
     */
    public function setApplicationURL($ApplicationURL)
    {
      $this->ApplicationURL = $ApplicationURL;
      return $this;
    }

    /**
     * @return EnableCodeType
     */
    public function getApplicationEnable()
    {
      return $this->ApplicationEnable;
    }

    /**
     * @param EnableCodeType $ApplicationEnable
     * @return \EbayWsdl\ApplicationDeliveryPreferencesType
     */
    public function setApplicationEnable($ApplicationEnable)
    {
      $this->ApplicationEnable = $ApplicationEnable;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getAlertEmail()
    {
      return $this->AlertEmail;
    }

    /**
     * @param anyURI $AlertEmail
     * @return \EbayWsdl\ApplicationDeliveryPreferencesType
     */
    public function setAlertEmail($AlertEmail)
    {
      $this->AlertEmail = $AlertEmail;
      return $this;
    }

    /**
     * @return EnableCodeType
     */
    public function getAlertEnable()
    {
      return $this->AlertEnable;
    }

    /**
     * @param EnableCodeType $AlertEnable
     * @return \EbayWsdl\ApplicationDeliveryPreferencesType
     */
    public function setAlertEnable($AlertEnable)
    {
      $this->AlertEnable = $AlertEnable;
      return $this;
    }

    /**
     * @return NotificationPayloadTypeCodeType
     */
    public function getNotificationPayloadType()
    {
      return $this->NotificationPayloadType;
    }

    /**
     * @param NotificationPayloadTypeCodeType $NotificationPayloadType
     * @return \EbayWsdl\ApplicationDeliveryPreferencesType
     */
    public function setNotificationPayloadType($NotificationPayloadType)
    {
      $this->NotificationPayloadType = $NotificationPayloadType;
      return $this;
    }

    /**
     * @return DeviceTypeCodeType
     */
    public function getDeviceType()
    {
      return $this->DeviceType;
    }

    /**
     * @param DeviceTypeCodeType $DeviceType
     * @return \EbayWsdl\ApplicationDeliveryPreferencesType
     */
    public function setDeviceType($DeviceType)
    {
      $this->DeviceType = $DeviceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayloadVersion()
    {
      return $this->PayloadVersion;
    }

    /**
     * @param string $PayloadVersion
     * @return \EbayWsdl\ApplicationDeliveryPreferencesType
     */
    public function setPayloadVersion($PayloadVersion)
    {
      $this->PayloadVersion = $PayloadVersion;
      return $this;
    }

    /**
     * @return DeliveryURLDetailType[]
     */
    public function getDeliveryURLDetails()
    {
      return $this->DeliveryURLDetails;
    }

    /**
     * @param DeliveryURLDetailType[] $DeliveryURLDetails
     * @return \EbayWsdl\ApplicationDeliveryPreferencesType
     */
    public function setDeliveryURLDetails(array $DeliveryURLDetails)
    {
      $this->DeliveryURLDetails = $DeliveryURLDetails;
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
     * @return \EbayWsdl\ApplicationDeliveryPreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
