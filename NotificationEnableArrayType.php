<?php

namespace EbayWsdl;

class NotificationEnableArrayType
{

    /**
     * @var NotificationEnableType[] $NotificationEnable
     */
    protected $NotificationEnable = null;

    /**
     * @param NotificationEnableType[] $NotificationEnable
     */
    public function __construct(array $NotificationEnable = null)
    {
      $this->NotificationEnable = $NotificationEnable;
    }

    /**
     * @return NotificationEnableType[]
     */
    public function getNotificationEnable()
    {
      return $this->NotificationEnable;
    }

    /**
     * @param NotificationEnableType[] $NotificationEnable
     * @return \EbayWsdl\NotificationEnableArrayType
     */
    public function setNotificationEnable(array $NotificationEnable)
    {
      $this->NotificationEnable = $NotificationEnable;
      return $this;
    }

}
