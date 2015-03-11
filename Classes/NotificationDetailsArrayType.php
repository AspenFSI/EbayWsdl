<?php

namespace EbayWsdl\Classes;

class NotificationDetailsArrayType
{

    /**
     * @var NotificationDetailsType[] $NotificationDetails
     */
    protected $NotificationDetails = null;

    /**
     * @param NotificationDetailsType[] $NotificationDetails
     */
    public function __construct(array $NotificationDetails = null)
    {
      $this->NotificationDetails = $NotificationDetails;
    }

    /**
     * @return NotificationDetailsType[]
     */
    public function getNotificationDetails()
    {
      return $this->NotificationDetails;
    }

    /**
     * @param NotificationDetailsType[] $NotificationDetails
     * @return \EbayWsdl\Classes\NotificationDetailsArrayType
     */
    public function setNotificationDetails(array $NotificationDetails)
    {
      $this->NotificationDetails = $NotificationDetails;
      return $this;
    }

}
