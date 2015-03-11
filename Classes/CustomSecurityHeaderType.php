<?php

namespace EbayWsdl\Classes;

class CustomSecurityHeaderType
{

    /**
     * @var string $eBayAuthToken
     */
    protected $eBayAuthToken = null;

    /**
     * @var string $HardExpirationWarning
     */
    protected $HardExpirationWarning = null;

    /**
     * @var UserIdPasswordType $Credentials
     */
    protected $Credentials = null;

    /**
     * @var string $NotificationSignature
     */
    protected $NotificationSignature = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $eBayAuthToken
     * @param string $HardExpirationWarning
     * @param UserIdPasswordType $Credentials
     * @param string $NotificationSignature
     * @param string $any
     */
    public function __construct($eBayAuthToken = null, $HardExpirationWarning = null, $Credentials = null, $NotificationSignature = null, $any = null)
    {
      $this->eBayAuthToken = $eBayAuthToken;
      $this->HardExpirationWarning = $HardExpirationWarning;
      $this->Credentials = $Credentials;
      $this->NotificationSignature = $NotificationSignature;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getEBayAuthToken()
    {
      return $this->eBayAuthToken;
    }

    /**
     * @param string $eBayAuthToken
     * @return \EbayWsdl\Classes\CustomSecurityHeaderType
     */
    public function setEBayAuthToken($eBayAuthToken)
    {
      $this->eBayAuthToken = $eBayAuthToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getHardExpirationWarning()
    {
      return $this->HardExpirationWarning;
    }

    /**
     * @param string $HardExpirationWarning
     * @return \EbayWsdl\Classes\CustomSecurityHeaderType
     */
    public function setHardExpirationWarning($HardExpirationWarning)
    {
      $this->HardExpirationWarning = $HardExpirationWarning;
      return $this;
    }

    /**
     * @return UserIdPasswordType
     */
    public function getCredentials()
    {
      return $this->Credentials;
    }

    /**
     * @param UserIdPasswordType $Credentials
     * @return \EbayWsdl\Classes\CustomSecurityHeaderType
     */
    public function setCredentials($Credentials)
    {
      $this->Credentials = $Credentials;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotificationSignature()
    {
      return $this->NotificationSignature;
    }

    /**
     * @param string $NotificationSignature
     * @return \EbayWsdl\Classes\CustomSecurityHeaderType
     */
    public function setNotificationSignature($NotificationSignature)
    {
      $this->NotificationSignature = $NotificationSignature;
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
     * @return \EbayWsdl\Classes\CustomSecurityHeaderType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
