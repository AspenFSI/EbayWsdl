<?php

namespace EbayWsdl\Classes;

class GetNotificationsUsageResponseType extends AbstractResponseType
{

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var NotificationDetailsArrayType $NotificationDetailsArray
     */
    protected $NotificationDetailsArray = null;

    /**
     * @var MarkUpMarkDownHistoryType $MarkUpMarkDownHistory
     */
    protected $MarkUpMarkDownHistory = null;

    /**
     * @var NotificationStatisticsType $NotificationStatistics
     */
    protected $NotificationStatistics = null;

    /**
     * @param \DateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Message
     * @param string $Version
     * @param string $Build
     * @param string $NotificationEventName
     * @param DuplicateInvocationDetailsType $DuplicateInvocationDetails
     * @param string $RecipientUserID
     * @param string $EIASToken
     * @param string $NotificationSignature
     * @param string $HardExpirationWarning
     * @param BotBlockResponseType $BotBlock
     * @param string $ExternalUserData
     * @param string $any
     * @param \DateTime $StartTime
     * @param \DateTime $EndTime
     * @param NotificationDetailsArrayType $NotificationDetailsArray
     * @param MarkUpMarkDownHistoryType $MarkUpMarkDownHistory
     * @param NotificationStatisticsType $NotificationStatistics
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, \DateTime $StartTime = null, \DateTime $EndTime = null, $NotificationDetailsArray = null, $MarkUpMarkDownHistory = null, $NotificationStatistics = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->StartTime = $StartTime ? $StartTime->format(\DateTime::ATOM) : null;
      $this->EndTime = $EndTime ? $EndTime->format(\DateTime::ATOM) : null;
      $this->NotificationDetailsArray = $NotificationDetailsArray;
      $this->MarkUpMarkDownHistory = $MarkUpMarkDownHistory;
      $this->NotificationStatistics = $NotificationStatistics;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->StartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTime
     * @return \EbayWsdl\Classes\GetNotificationsUsageResponseType
     */
    public function setStartTime(\DateTime $StartTime)
    {
      $this->StartTime = $StartTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->EndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTime
     * @return \EbayWsdl\Classes\GetNotificationsUsageResponseType
     */
    public function setEndTime(\DateTime $EndTime)
    {
      $this->EndTime = $EndTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return NotificationDetailsArrayType
     */
    public function getNotificationDetailsArray()
    {
      return $this->NotificationDetailsArray;
    }

    /**
     * @param NotificationDetailsArrayType $NotificationDetailsArray
     * @return \EbayWsdl\Classes\GetNotificationsUsageResponseType
     */
    public function setNotificationDetailsArray($NotificationDetailsArray)
    {
      $this->NotificationDetailsArray = $NotificationDetailsArray;
      return $this;
    }

    /**
     * @return MarkUpMarkDownHistoryType
     */
    public function getMarkUpMarkDownHistory()
    {
      return $this->MarkUpMarkDownHistory;
    }

    /**
     * @param MarkUpMarkDownHistoryType $MarkUpMarkDownHistory
     * @return \EbayWsdl\Classes\GetNotificationsUsageResponseType
     */
    public function setMarkUpMarkDownHistory($MarkUpMarkDownHistory)
    {
      $this->MarkUpMarkDownHistory = $MarkUpMarkDownHistory;
      return $this;
    }

    /**
     * @return NotificationStatisticsType
     */
    public function getNotificationStatistics()
    {
      return $this->NotificationStatistics;
    }

    /**
     * @param NotificationStatisticsType $NotificationStatistics
     * @return \EbayWsdl\Classes\GetNotificationsUsageResponseType
     */
    public function setNotificationStatistics($NotificationStatistics)
    {
      $this->NotificationStatistics = $NotificationStatistics;
      return $this;
    }

}
