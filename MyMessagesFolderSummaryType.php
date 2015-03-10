<?php

namespace EbayWsdl;

class MyMessagesFolderSummaryType
{

    /**
     * @var int $FolderID
     */
    protected $FolderID = null;

    /**
     * @var string $FolderName
     */
    protected $FolderName = null;

    /**
     * @var int $NewAlertCount
     */
    protected $NewAlertCount = null;

    /**
     * @var int $NewMessageCount
     */
    protected $NewMessageCount = null;

    /**
     * @var int $TotalAlertCount
     */
    protected $TotalAlertCount = null;

    /**
     * @var int $TotalMessageCount
     */
    protected $TotalMessageCount = null;

    /**
     * @var int $NewHighPriorityCount
     */
    protected $NewHighPriorityCount = null;

    /**
     * @var int $TotalHighPriorityCount
     */
    protected $TotalHighPriorityCount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $FolderID
     * @param string $FolderName
     * @param int $NewAlertCount
     * @param int $NewMessageCount
     * @param int $TotalAlertCount
     * @param int $TotalMessageCount
     * @param int $NewHighPriorityCount
     * @param int $TotalHighPriorityCount
     * @param string $any
     */
    public function __construct($FolderID = null, $FolderName = null, $NewAlertCount = null, $NewMessageCount = null, $TotalAlertCount = null, $TotalMessageCount = null, $NewHighPriorityCount = null, $TotalHighPriorityCount = null, $any = null)
    {
      $this->FolderID = $FolderID;
      $this->FolderName = $FolderName;
      $this->NewAlertCount = $NewAlertCount;
      $this->NewMessageCount = $NewMessageCount;
      $this->TotalAlertCount = $TotalAlertCount;
      $this->TotalMessageCount = $TotalMessageCount;
      $this->NewHighPriorityCount = $NewHighPriorityCount;
      $this->TotalHighPriorityCount = $TotalHighPriorityCount;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getFolderID()
    {
      return $this->FolderID;
    }

    /**
     * @param int $FolderID
     * @return \EbayWsdl\MyMessagesFolderSummaryType
     */
    public function setFolderID($FolderID)
    {
      $this->FolderID = $FolderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFolderName()
    {
      return $this->FolderName;
    }

    /**
     * @param string $FolderName
     * @return \EbayWsdl\MyMessagesFolderSummaryType
     */
    public function setFolderName($FolderName)
    {
      $this->FolderName = $FolderName;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewAlertCount()
    {
      return $this->NewAlertCount;
    }

    /**
     * @param int $NewAlertCount
     * @return \EbayWsdl\MyMessagesFolderSummaryType
     */
    public function setNewAlertCount($NewAlertCount)
    {
      $this->NewAlertCount = $NewAlertCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewMessageCount()
    {
      return $this->NewMessageCount;
    }

    /**
     * @param int $NewMessageCount
     * @return \EbayWsdl\MyMessagesFolderSummaryType
     */
    public function setNewMessageCount($NewMessageCount)
    {
      $this->NewMessageCount = $NewMessageCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalAlertCount()
    {
      return $this->TotalAlertCount;
    }

    /**
     * @param int $TotalAlertCount
     * @return \EbayWsdl\MyMessagesFolderSummaryType
     */
    public function setTotalAlertCount($TotalAlertCount)
    {
      $this->TotalAlertCount = $TotalAlertCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalMessageCount()
    {
      return $this->TotalMessageCount;
    }

    /**
     * @param int $TotalMessageCount
     * @return \EbayWsdl\MyMessagesFolderSummaryType
     */
    public function setTotalMessageCount($TotalMessageCount)
    {
      $this->TotalMessageCount = $TotalMessageCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewHighPriorityCount()
    {
      return $this->NewHighPriorityCount;
    }

    /**
     * @param int $NewHighPriorityCount
     * @return \EbayWsdl\MyMessagesFolderSummaryType
     */
    public function setNewHighPriorityCount($NewHighPriorityCount)
    {
      $this->NewHighPriorityCount = $NewHighPriorityCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalHighPriorityCount()
    {
      return $this->TotalHighPriorityCount;
    }

    /**
     * @param int $TotalHighPriorityCount
     * @return \EbayWsdl\MyMessagesFolderSummaryType
     */
    public function setTotalHighPriorityCount($TotalHighPriorityCount)
    {
      $this->TotalHighPriorityCount = $TotalHighPriorityCount;
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
     * @return \EbayWsdl\MyMessagesFolderSummaryType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
