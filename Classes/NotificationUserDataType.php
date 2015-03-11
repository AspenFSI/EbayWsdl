<?php

namespace EbayWsdl\Classes;

class NotificationUserDataType
{

    /**
     * @var SMSSubscriptionType $SMSSubscription
     */
    protected $SMSSubscription = null;

    /**
     * @var SummaryEventScheduleType[] $SummarySchedule
     */
    protected $SummarySchedule = null;

    /**
     * @var string $ExternalUserData
     */
    protected $ExternalUserData = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SMSSubscriptionType $SMSSubscription
     * @param SummaryEventScheduleType[] $SummarySchedule
     * @param string $ExternalUserData
     * @param string $any
     */
    public function __construct($SMSSubscription = null, array $SummarySchedule = null, $ExternalUserData = null, $any = null)
    {
      $this->SMSSubscription = $SMSSubscription;
      $this->SummarySchedule = $SummarySchedule;
      $this->ExternalUserData = $ExternalUserData;
      $this->any = $any;
    }

    /**
     * @return SMSSubscriptionType
     */
    public function getSMSSubscription()
    {
      return $this->SMSSubscription;
    }

    /**
     * @param SMSSubscriptionType $SMSSubscription
     * @return \EbayWsdl\Classes\NotificationUserDataType
     */
    public function setSMSSubscription($SMSSubscription)
    {
      $this->SMSSubscription = $SMSSubscription;
      return $this;
    }

    /**
     * @return SummaryEventScheduleType[]
     */
    public function getSummarySchedule()
    {
      return $this->SummarySchedule;
    }

    /**
     * @param SummaryEventScheduleType[] $SummarySchedule
     * @return \EbayWsdl\Classes\NotificationUserDataType
     */
    public function setSummarySchedule(array $SummarySchedule)
    {
      $this->SummarySchedule = $SummarySchedule;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalUserData()
    {
      return $this->ExternalUserData;
    }

    /**
     * @param string $ExternalUserData
     * @return \EbayWsdl\Classes\NotificationUserDataType
     */
    public function setExternalUserData($ExternalUserData)
    {
      $this->ExternalUserData = $ExternalUserData;
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
     * @return \EbayWsdl\Classes\NotificationUserDataType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
