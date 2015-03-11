<?php

namespace EbayWsdl\Classes;

class NotificationStatisticsType
{

    /**
     * @var int $DeliveredCount
     */
    protected $DeliveredCount = null;

    /**
     * @var int $QueuedNewCount
     */
    protected $QueuedNewCount = null;

    /**
     * @var int $QueuedPendingCount
     */
    protected $QueuedPendingCount = null;

    /**
     * @var int $ExpiredCount
     */
    protected $ExpiredCount = null;

    /**
     * @var int $ErrorCount
     */
    protected $ErrorCount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $DeliveredCount
     * @param int $QueuedNewCount
     * @param int $QueuedPendingCount
     * @param int $ExpiredCount
     * @param int $ErrorCount
     * @param string $any
     */
    public function __construct($DeliveredCount = null, $QueuedNewCount = null, $QueuedPendingCount = null, $ExpiredCount = null, $ErrorCount = null, $any = null)
    {
      $this->DeliveredCount = $DeliveredCount;
      $this->QueuedNewCount = $QueuedNewCount;
      $this->QueuedPendingCount = $QueuedPendingCount;
      $this->ExpiredCount = $ExpiredCount;
      $this->ErrorCount = $ErrorCount;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getDeliveredCount()
    {
      return $this->DeliveredCount;
    }

    /**
     * @param int $DeliveredCount
     * @return \EbayWsdl\Classes\NotificationStatisticsType
     */
    public function setDeliveredCount($DeliveredCount)
    {
      $this->DeliveredCount = $DeliveredCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getQueuedNewCount()
    {
      return $this->QueuedNewCount;
    }

    /**
     * @param int $QueuedNewCount
     * @return \EbayWsdl\Classes\NotificationStatisticsType
     */
    public function setQueuedNewCount($QueuedNewCount)
    {
      $this->QueuedNewCount = $QueuedNewCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getQueuedPendingCount()
    {
      return $this->QueuedPendingCount;
    }

    /**
     * @param int $QueuedPendingCount
     * @return \EbayWsdl\Classes\NotificationStatisticsType
     */
    public function setQueuedPendingCount($QueuedPendingCount)
    {
      $this->QueuedPendingCount = $QueuedPendingCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getExpiredCount()
    {
      return $this->ExpiredCount;
    }

    /**
     * @param int $ExpiredCount
     * @return \EbayWsdl\Classes\NotificationStatisticsType
     */
    public function setExpiredCount($ExpiredCount)
    {
      $this->ExpiredCount = $ExpiredCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getErrorCount()
    {
      return $this->ErrorCount;
    }

    /**
     * @param int $ErrorCount
     * @return \EbayWsdl\Classes\NotificationStatisticsType
     */
    public function setErrorCount($ErrorCount)
    {
      $this->ErrorCount = $ErrorCount;
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
     * @return \EbayWsdl\Classes\NotificationStatisticsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
