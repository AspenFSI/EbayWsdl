<?php

namespace EbayWsdl;

class GetMyMessagesRequestType extends AbstractRequestType
{

    /**
     * @var MyMessagesAlertIDArrayType $AlertIDs
     */
    protected $AlertIDs = null;

    /**
     * @var MyMessagesMessageIDArrayType $MessageIDs
     */
    protected $MessageIDs = null;

    /**
     * @var int $FolderID
     */
    protected $FolderID = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var MyMessagesExternalMessageIDArrayType $ExternalMessageIDs
     */
    protected $ExternalMessageIDs = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

    /**
     * @var boolean $IncludeHighPriorityMessageOnly
     */
    protected $IncludeHighPriorityMessageOnly = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param MyMessagesAlertIDArrayType $AlertIDs
     * @param MyMessagesMessageIDArrayType $MessageIDs
     * @param int $FolderID
     * @param \DateTime $StartTime
     * @param \DateTime $EndTime
     * @param MyMessagesExternalMessageIDArrayType $ExternalMessageIDs
     * @param PaginationType $Pagination
     * @param boolean $IncludeHighPriorityMessageOnly
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $AlertIDs = null, $MessageIDs = null, $FolderID = null, \DateTime $StartTime = null, \DateTime $EndTime = null, $ExternalMessageIDs = null, $Pagination = null, $IncludeHighPriorityMessageOnly = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->AlertIDs = $AlertIDs;
      $this->MessageIDs = $MessageIDs;
      $this->FolderID = $FolderID;
      $this->StartTime = $StartTime ? $StartTime->format(\DateTime::ATOM) : null;
      $this->EndTime = $EndTime ? $EndTime->format(\DateTime::ATOM) : null;
      $this->ExternalMessageIDs = $ExternalMessageIDs;
      $this->Pagination = $Pagination;
      $this->IncludeHighPriorityMessageOnly = $IncludeHighPriorityMessageOnly;
    }

    /**
     * @return MyMessagesAlertIDArrayType
     */
    public function getAlertIDs()
    {
      return $this->AlertIDs;
    }

    /**
     * @param MyMessagesAlertIDArrayType $AlertIDs
     * @return \EbayWsdl\GetMyMessagesRequestType
     */
    public function setAlertIDs($AlertIDs)
    {
      $this->AlertIDs = $AlertIDs;
      return $this;
    }

    /**
     * @return MyMessagesMessageIDArrayType
     */
    public function getMessageIDs()
    {
      return $this->MessageIDs;
    }

    /**
     * @param MyMessagesMessageIDArrayType $MessageIDs
     * @return \EbayWsdl\GetMyMessagesRequestType
     */
    public function setMessageIDs($MessageIDs)
    {
      $this->MessageIDs = $MessageIDs;
      return $this;
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
     * @return \EbayWsdl\GetMyMessagesRequestType
     */
    public function setFolderID($FolderID)
    {
      $this->FolderID = $FolderID;
      return $this;
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
     * @return \EbayWsdl\GetMyMessagesRequestType
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
     * @return \EbayWsdl\GetMyMessagesRequestType
     */
    public function setEndTime(\DateTime $EndTime)
    {
      $this->EndTime = $EndTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return MyMessagesExternalMessageIDArrayType
     */
    public function getExternalMessageIDs()
    {
      return $this->ExternalMessageIDs;
    }

    /**
     * @param MyMessagesExternalMessageIDArrayType $ExternalMessageIDs
     * @return \EbayWsdl\GetMyMessagesRequestType
     */
    public function setExternalMessageIDs($ExternalMessageIDs)
    {
      $this->ExternalMessageIDs = $ExternalMessageIDs;
      return $this;
    }

    /**
     * @return PaginationType
     */
    public function getPagination()
    {
      return $this->Pagination;
    }

    /**
     * @param PaginationType $Pagination
     * @return \EbayWsdl\GetMyMessagesRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeHighPriorityMessageOnly()
    {
      return $this->IncludeHighPriorityMessageOnly;
    }

    /**
     * @param boolean $IncludeHighPriorityMessageOnly
     * @return \EbayWsdl\GetMyMessagesRequestType
     */
    public function setIncludeHighPriorityMessageOnly($IncludeHighPriorityMessageOnly)
    {
      $this->IncludeHighPriorityMessageOnly = $IncludeHighPriorityMessageOnly;
      return $this;
    }

}
