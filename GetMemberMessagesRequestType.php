<?php

namespace EbayWsdl;

class GetMemberMessagesRequestType extends AbstractRequestType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var MessageTypeCodeType $MailMessageType
     */
    protected $MailMessageType = null;

    /**
     * @var MessageStatusTypeCodeType $MessageStatus
     */
    protected $MessageStatus = null;

    /**
     * @var boolean $DisplayToPublic
     */
    protected $DisplayToPublic = null;

    /**
     * @var \DateTime $StartCreationTime
     */
    protected $StartCreationTime = null;

    /**
     * @var \DateTime $EndCreationTime
     */
    protected $EndCreationTime = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

    /**
     * @var string $MemberMessageID
     */
    protected $MemberMessageID = null;

    /**
     * @var UserIDType $SenderID
     */
    protected $SenderID = null;

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
     * @param ItemIDType $ItemID
     * @param MessageTypeCodeType $MailMessageType
     * @param MessageStatusTypeCodeType $MessageStatus
     * @param boolean $DisplayToPublic
     * @param \DateTime $StartCreationTime
     * @param \DateTime $EndCreationTime
     * @param PaginationType $Pagination
     * @param string $MemberMessageID
     * @param UserIDType $SenderID
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $ItemID = null, $MailMessageType = null, $MessageStatus = null, $DisplayToPublic = null, \DateTime $StartCreationTime = null, \DateTime $EndCreationTime = null, $Pagination = null, $MemberMessageID = null, $SenderID = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->ItemID = $ItemID;
      $this->MailMessageType = $MailMessageType;
      $this->MessageStatus = $MessageStatus;
      $this->DisplayToPublic = $DisplayToPublic;
      $this->StartCreationTime = $StartCreationTime ? $StartCreationTime->format(\DateTime::ATOM) : null;
      $this->EndCreationTime = $EndCreationTime ? $EndCreationTime->format(\DateTime::ATOM) : null;
      $this->Pagination = $Pagination;
      $this->MemberMessageID = $MemberMessageID;
      $this->SenderID = $SenderID;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\GetMemberMessagesRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return MessageTypeCodeType
     */
    public function getMailMessageType()
    {
      return $this->MailMessageType;
    }

    /**
     * @param MessageTypeCodeType $MailMessageType
     * @return \EbayWsdl\GetMemberMessagesRequestType
     */
    public function setMailMessageType($MailMessageType)
    {
      $this->MailMessageType = $MailMessageType;
      return $this;
    }

    /**
     * @return MessageStatusTypeCodeType
     */
    public function getMessageStatus()
    {
      return $this->MessageStatus;
    }

    /**
     * @param MessageStatusTypeCodeType $MessageStatus
     * @return \EbayWsdl\GetMemberMessagesRequestType
     */
    public function setMessageStatus($MessageStatus)
    {
      $this->MessageStatus = $MessageStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayToPublic()
    {
      return $this->DisplayToPublic;
    }

    /**
     * @param boolean $DisplayToPublic
     * @return \EbayWsdl\GetMemberMessagesRequestType
     */
    public function setDisplayToPublic($DisplayToPublic)
    {
      $this->DisplayToPublic = $DisplayToPublic;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartCreationTime()
    {
      if ($this->StartCreationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartCreationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartCreationTime
     * @return \EbayWsdl\GetMemberMessagesRequestType
     */
    public function setStartCreationTime(\DateTime $StartCreationTime)
    {
      $this->StartCreationTime = $StartCreationTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndCreationTime()
    {
      if ($this->EndCreationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndCreationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndCreationTime
     * @return \EbayWsdl\GetMemberMessagesRequestType
     */
    public function setEndCreationTime(\DateTime $EndCreationTime)
    {
      $this->EndCreationTime = $EndCreationTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\GetMemberMessagesRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemberMessageID()
    {
      return $this->MemberMessageID;
    }

    /**
     * @param string $MemberMessageID
     * @return \EbayWsdl\GetMemberMessagesRequestType
     */
    public function setMemberMessageID($MemberMessageID)
    {
      $this->MemberMessageID = $MemberMessageID;
      return $this;
    }

    /**
     * @return UserIDType
     */
    public function getSenderID()
    {
      return $this->SenderID;
    }

    /**
     * @param UserIDType $SenderID
     * @return \EbayWsdl\GetMemberMessagesRequestType
     */
    public function setSenderID($SenderID)
    {
      $this->SenderID = $SenderID;
      return $this;
    }

}
