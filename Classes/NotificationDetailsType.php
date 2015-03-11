<?php

namespace EbayWsdl\Classes;

class NotificationDetailsType
{

    /**
     * @var anyURI $DeliveryURL
     */
    protected $DeliveryURL = null;

    /**
     * @var string $ReferenceID
     */
    protected $ReferenceID = null;

    /**
     * @var \DateTime $ExpirationTime
     */
    protected $ExpirationTime = null;

    /**
     * @var NotificationEventTypeCodeType $Type
     */
    protected $Type = null;

    /**
     * @var int $Retries
     */
    protected $Retries = null;

    /**
     * @var NotificationEventStateCodeType $DeliveryStatus
     */
    protected $DeliveryStatus = null;

    /**
     * @var \DateTime $NextRetryTime
     */
    protected $NextRetryTime = null;

    /**
     * @var \DateTime $DeliveryTime
     */
    protected $DeliveryTime = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var string $DeliveryURLName
     */
    protected $DeliveryURLName = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $DeliveryURL
     * @param string $ReferenceID
     * @param \DateTime $ExpirationTime
     * @param NotificationEventTypeCodeType $Type
     * @param int $Retries
     * @param NotificationEventStateCodeType $DeliveryStatus
     * @param \DateTime $NextRetryTime
     * @param \DateTime $DeliveryTime
     * @param string $ErrorMessage
     * @param string $DeliveryURLName
     * @param string $any
     */
    public function __construct($DeliveryURL = null, $ReferenceID = null, \DateTime $ExpirationTime = null, $Type = null, $Retries = null, $DeliveryStatus = null, \DateTime $NextRetryTime = null, \DateTime $DeliveryTime = null, $ErrorMessage = null, $DeliveryURLName = null, $any = null)
    {
      $this->DeliveryURL = $DeliveryURL;
      $this->ReferenceID = $ReferenceID;
      $this->ExpirationTime = $ExpirationTime ? $ExpirationTime->format(\DateTime::ATOM) : null;
      $this->Type = $Type;
      $this->Retries = $Retries;
      $this->DeliveryStatus = $DeliveryStatus;
      $this->NextRetryTime = $NextRetryTime ? $NextRetryTime->format(\DateTime::ATOM) : null;
      $this->DeliveryTime = $DeliveryTime ? $DeliveryTime->format(\DateTime::ATOM) : null;
      $this->ErrorMessage = $ErrorMessage;
      $this->DeliveryURLName = $DeliveryURLName;
      $this->any = $any;
    }

    /**
     * @return anyURI
     */
    public function getDeliveryURL()
    {
      return $this->DeliveryURL;
    }

    /**
     * @param anyURI $DeliveryURL
     * @return \EbayWsdl\Classes\NotificationDetailsType
     */
    public function setDeliveryURL($DeliveryURL)
    {
      $this->DeliveryURL = $DeliveryURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceID()
    {
      return $this->ReferenceID;
    }

    /**
     * @param string $ReferenceID
     * @return \EbayWsdl\Classes\NotificationDetailsType
     */
    public function setReferenceID($ReferenceID)
    {
      $this->ReferenceID = $ReferenceID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationTime()
    {
      if ($this->ExpirationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationTime
     * @return \EbayWsdl\Classes\NotificationDetailsType
     */
    public function setExpirationTime(\DateTime $ExpirationTime)
    {
      $this->ExpirationTime = $ExpirationTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return NotificationEventTypeCodeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param NotificationEventTypeCodeType $Type
     * @return \EbayWsdl\Classes\NotificationDetailsType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getRetries()
    {
      return $this->Retries;
    }

    /**
     * @param int $Retries
     * @return \EbayWsdl\Classes\NotificationDetailsType
     */
    public function setRetries($Retries)
    {
      $this->Retries = $Retries;
      return $this;
    }

    /**
     * @return NotificationEventStateCodeType
     */
    public function getDeliveryStatus()
    {
      return $this->DeliveryStatus;
    }

    /**
     * @param NotificationEventStateCodeType $DeliveryStatus
     * @return \EbayWsdl\Classes\NotificationDetailsType
     */
    public function setDeliveryStatus($DeliveryStatus)
    {
      $this->DeliveryStatus = $DeliveryStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextRetryTime()
    {
      if ($this->NextRetryTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NextRetryTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NextRetryTime
     * @return \EbayWsdl\Classes\NotificationDetailsType
     */
    public function setNextRetryTime(\DateTime $NextRetryTime)
    {
      $this->NextRetryTime = $NextRetryTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryTime()
    {
      if ($this->DeliveryTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryTime
     * @return \EbayWsdl\Classes\NotificationDetailsType
     */
    public function setDeliveryTime(\DateTime $DeliveryTime)
    {
      $this->DeliveryTime = $DeliveryTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \EbayWsdl\Classes\NotificationDetailsType
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryURLName()
    {
      return $this->DeliveryURLName;
    }

    /**
     * @param string $DeliveryURLName
     * @return \EbayWsdl\Classes\NotificationDetailsType
     */
    public function setDeliveryURLName($DeliveryURLName)
    {
      $this->DeliveryURLName = $DeliveryURLName;
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
     * @return \EbayWsdl\Classes\NotificationDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
