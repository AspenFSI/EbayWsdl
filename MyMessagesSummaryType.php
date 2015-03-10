<?php

namespace EbayWsdl;

class MyMessagesSummaryType
{

    /**
     * @var MyMessagesFolderSummaryType[] $FolderSummary
     */
    protected $FolderSummary = null;

    /**
     * @var int $NewAlertCount
     */
    protected $NewAlertCount = null;

    /**
     * @var int $NewMessageCount
     */
    protected $NewMessageCount = null;

    /**
     * @var int $UnresolvedAlertCount
     */
    protected $UnresolvedAlertCount = null;

    /**
     * @var int $FlaggedMessageCount
     */
    protected $FlaggedMessageCount = null;

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
     * @param MyMessagesFolderSummaryType[] $FolderSummary
     * @param int $NewAlertCount
     * @param int $NewMessageCount
     * @param int $UnresolvedAlertCount
     * @param int $FlaggedMessageCount
     * @param int $TotalAlertCount
     * @param int $TotalMessageCount
     * @param int $NewHighPriorityCount
     * @param int $TotalHighPriorityCount
     */
    public function __construct(array $FolderSummary = null, $NewAlertCount = null, $NewMessageCount = null, $UnresolvedAlertCount = null, $FlaggedMessageCount = null, $TotalAlertCount = null, $TotalMessageCount = null, $NewHighPriorityCount = null, $TotalHighPriorityCount = null)
    {
      $this->FolderSummary = $FolderSummary;
      $this->NewAlertCount = $NewAlertCount;
      $this->NewMessageCount = $NewMessageCount;
      $this->UnresolvedAlertCount = $UnresolvedAlertCount;
      $this->FlaggedMessageCount = $FlaggedMessageCount;
      $this->TotalAlertCount = $TotalAlertCount;
      $this->TotalMessageCount = $TotalMessageCount;
      $this->NewHighPriorityCount = $NewHighPriorityCount;
      $this->TotalHighPriorityCount = $TotalHighPriorityCount;
    }

    /**
     * @return MyMessagesFolderSummaryType[]
     */
    public function getFolderSummary()
    {
      return $this->FolderSummary;
    }

    /**
     * @param MyMessagesFolderSummaryType[] $FolderSummary
     * @return \EbayWsdl\MyMessagesSummaryType
     */
    public function setFolderSummary(array $FolderSummary)
    {
      $this->FolderSummary = $FolderSummary;
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
     * @return \EbayWsdl\MyMessagesSummaryType
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
     * @return \EbayWsdl\MyMessagesSummaryType
     */
    public function setNewMessageCount($NewMessageCount)
    {
      $this->NewMessageCount = $NewMessageCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getUnresolvedAlertCount()
    {
      return $this->UnresolvedAlertCount;
    }

    /**
     * @param int $UnresolvedAlertCount
     * @return \EbayWsdl\MyMessagesSummaryType
     */
    public function setUnresolvedAlertCount($UnresolvedAlertCount)
    {
      $this->UnresolvedAlertCount = $UnresolvedAlertCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getFlaggedMessageCount()
    {
      return $this->FlaggedMessageCount;
    }

    /**
     * @param int $FlaggedMessageCount
     * @return \EbayWsdl\MyMessagesSummaryType
     */
    public function setFlaggedMessageCount($FlaggedMessageCount)
    {
      $this->FlaggedMessageCount = $FlaggedMessageCount;
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
     * @return \EbayWsdl\MyMessagesSummaryType
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
     * @return \EbayWsdl\MyMessagesSummaryType
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
     * @return \EbayWsdl\MyMessagesSummaryType
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
     * @return \EbayWsdl\MyMessagesSummaryType
     */
    public function setTotalHighPriorityCount($TotalHighPriorityCount)
    {
      $this->TotalHighPriorityCount = $TotalHighPriorityCount;
      return $this;
    }

}
