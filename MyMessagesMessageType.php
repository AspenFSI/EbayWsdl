<?php

namespace EbayWsdl;

class MyMessagesMessageType
{

    /**
     * @var string $Sender
     */
    protected $Sender = null;

    /**
     * @var string $RecipientUserID
     */
    protected $RecipientUserID = null;

    /**
     * @var string $SendToName
     */
    protected $SendToName = null;

    /**
     * @var string $Subject
     */
    protected $Subject = null;

    /**
     * @var MyMessagesMessageIDType $MessageID
     */
    protected $MessageID = null;

    /**
     * @var string $ExternalMessageID
     */
    protected $ExternalMessageID = null;

    /**
     * @var string $ContentType
     */
    protected $ContentType = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var boolean $Flagged
     */
    protected $Flagged = null;

    /**
     * @var boolean $Read
     */
    protected $Read = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var \DateTime $ReceiveDate
     */
    protected $ReceiveDate = null;

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var MyMessagesResponseDetailsType $ResponseDetails
     */
    protected $ResponseDetails = null;

    /**
     * @var MyMessagesForwardDetailsType $ForwardDetails
     */
    protected $ForwardDetails = null;

    /**
     * @var MyMessagesFolderType $Folder
     */
    protected $Folder = null;

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @var MessageTypeCodeType $MessageType
     */
    protected $MessageType = null;

    /**
     * @var ListingStatusCodeType $ListingStatus
     */
    protected $ListingStatus = null;

    /**
     * @var QuestionTypeCodeType $QuestionType
     */
    protected $QuestionType = null;

    /**
     * @var boolean $Replied
     */
    protected $Replied = null;

    /**
     * @var boolean $HighPriority
     */
    protected $HighPriority = null;

    /**
     * @var \DateTime $ItemEndTime
     */
    protected $ItemEndTime = null;

    /**
     * @var string $ItemTitle
     */
    protected $ItemTitle = null;

    /**
     * @var MessageMediaType[] $MessageMedia
     */
    protected $MessageMedia = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Sender
     * @param string $RecipientUserID
     * @param string $SendToName
     * @param string $Subject
     * @param MyMessagesMessageIDType $MessageID
     * @param string $ExternalMessageID
     * @param string $ContentType
     * @param string $Text
     * @param boolean $Flagged
     * @param boolean $Read
     * @param \DateTime $CreationDate
     * @param \DateTime $ReceiveDate
     * @param \DateTime $ExpirationDate
     * @param ItemIDType $ItemID
     * @param MyMessagesResponseDetailsType $ResponseDetails
     * @param MyMessagesForwardDetailsType $ForwardDetails
     * @param MyMessagesFolderType $Folder
     * @param string $Content
     * @param MessageTypeCodeType $MessageType
     * @param ListingStatusCodeType $ListingStatus
     * @param QuestionTypeCodeType $QuestionType
     * @param boolean $Replied
     * @param boolean $HighPriority
     * @param \DateTime $ItemEndTime
     * @param string $ItemTitle
     * @param MessageMediaType[] $MessageMedia
     * @param string $any
     */
    public function __construct($Sender = null, $RecipientUserID = null, $SendToName = null, $Subject = null, $MessageID = null, $ExternalMessageID = null, $ContentType = null, $Text = null, $Flagged = null, $Read = null, \DateTime $CreationDate = null, \DateTime $ReceiveDate = null, \DateTime $ExpirationDate = null, $ItemID = null, $ResponseDetails = null, $ForwardDetails = null, $Folder = null, $Content = null, $MessageType = null, $ListingStatus = null, $QuestionType = null, $Replied = null, $HighPriority = null, \DateTime $ItemEndTime = null, $ItemTitle = null, array $MessageMedia = null, $any = null)
    {
      $this->Sender = $Sender;
      $this->RecipientUserID = $RecipientUserID;
      $this->SendToName = $SendToName;
      $this->Subject = $Subject;
      $this->MessageID = $MessageID;
      $this->ExternalMessageID = $ExternalMessageID;
      $this->ContentType = $ContentType;
      $this->Text = $Text;
      $this->Flagged = $Flagged;
      $this->Read = $Read;
      $this->CreationDate = $CreationDate ? $CreationDate->format(\DateTime::ATOM) : null;
      $this->ReceiveDate = $ReceiveDate ? $ReceiveDate->format(\DateTime::ATOM) : null;
      $this->ExpirationDate = $ExpirationDate ? $ExpirationDate->format(\DateTime::ATOM) : null;
      $this->ItemID = $ItemID;
      $this->ResponseDetails = $ResponseDetails;
      $this->ForwardDetails = $ForwardDetails;
      $this->Folder = $Folder;
      $this->Content = $Content;
      $this->MessageType = $MessageType;
      $this->ListingStatus = $ListingStatus;
      $this->QuestionType = $QuestionType;
      $this->Replied = $Replied;
      $this->HighPriority = $HighPriority;
      $this->ItemEndTime = $ItemEndTime ? $ItemEndTime->format(\DateTime::ATOM) : null;
      $this->ItemTitle = $ItemTitle;
      $this->MessageMedia = $MessageMedia;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getSender()
    {
      return $this->Sender;
    }

    /**
     * @param string $Sender
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setSender($Sender)
    {
      $this->Sender = $Sender;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientUserID()
    {
      return $this->RecipientUserID;
    }

    /**
     * @param string $RecipientUserID
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setRecipientUserID($RecipientUserID)
    {
      $this->RecipientUserID = $RecipientUserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendToName()
    {
      return $this->SendToName;
    }

    /**
     * @param string $SendToName
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setSendToName($SendToName)
    {
      $this->SendToName = $SendToName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->Subject;
    }

    /**
     * @param string $Subject
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setSubject($Subject)
    {
      $this->Subject = $Subject;
      return $this;
    }

    /**
     * @return MyMessagesMessageIDType
     */
    public function getMessageID()
    {
      return $this->MessageID;
    }

    /**
     * @param MyMessagesMessageIDType $MessageID
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setMessageID($MessageID)
    {
      $this->MessageID = $MessageID;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalMessageID()
    {
      return $this->ExternalMessageID;
    }

    /**
     * @param string $ExternalMessageID
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setExternalMessageID($ExternalMessageID)
    {
      $this->ExternalMessageID = $ExternalMessageID;
      return $this;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
      return $this->ContentType;
    }

    /**
     * @param string $ContentType
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setContentType($ContentType)
    {
      $this->ContentType = $ContentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFlagged()
    {
      return $this->Flagged;
    }

    /**
     * @param boolean $Flagged
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setFlagged($Flagged)
    {
      $this->Flagged = $Flagged;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRead()
    {
      return $this->Read;
    }

    /**
     * @param boolean $Read
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setRead($Read)
    {
      $this->Read = $Read;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
      if ($this->CreationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationDate
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setCreationDate(\DateTime $CreationDate)
    {
      $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReceiveDate()
    {
      if ($this->ReceiveDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReceiveDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReceiveDate
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setReceiveDate(\DateTime $ReceiveDate)
    {
      $this->ReceiveDate = $ReceiveDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->ExpirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationDate
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setExpirationDate(\DateTime $ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      return $this;
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
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return MyMessagesResponseDetailsType
     */
    public function getResponseDetails()
    {
      return $this->ResponseDetails;
    }

    /**
     * @param MyMessagesResponseDetailsType $ResponseDetails
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setResponseDetails($ResponseDetails)
    {
      $this->ResponseDetails = $ResponseDetails;
      return $this;
    }

    /**
     * @return MyMessagesForwardDetailsType
     */
    public function getForwardDetails()
    {
      return $this->ForwardDetails;
    }

    /**
     * @param MyMessagesForwardDetailsType $ForwardDetails
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setForwardDetails($ForwardDetails)
    {
      $this->ForwardDetails = $ForwardDetails;
      return $this;
    }

    /**
     * @return MyMessagesFolderType
     */
    public function getFolder()
    {
      return $this->Folder;
    }

    /**
     * @param MyMessagesFolderType $Folder
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setFolder($Folder)
    {
      $this->Folder = $Folder;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return MessageTypeCodeType
     */
    public function getMessageType()
    {
      return $this->MessageType;
    }

    /**
     * @param MessageTypeCodeType $MessageType
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setMessageType($MessageType)
    {
      $this->MessageType = $MessageType;
      return $this;
    }

    /**
     * @return ListingStatusCodeType
     */
    public function getListingStatus()
    {
      return $this->ListingStatus;
    }

    /**
     * @param ListingStatusCodeType $ListingStatus
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setListingStatus($ListingStatus)
    {
      $this->ListingStatus = $ListingStatus;
      return $this;
    }

    /**
     * @return QuestionTypeCodeType
     */
    public function getQuestionType()
    {
      return $this->QuestionType;
    }

    /**
     * @param QuestionTypeCodeType $QuestionType
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setQuestionType($QuestionType)
    {
      $this->QuestionType = $QuestionType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplied()
    {
      return $this->Replied;
    }

    /**
     * @param boolean $Replied
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setReplied($Replied)
    {
      $this->Replied = $Replied;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHighPriority()
    {
      return $this->HighPriority;
    }

    /**
     * @param boolean $HighPriority
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setHighPriority($HighPriority)
    {
      $this->HighPriority = $HighPriority;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getItemEndTime()
    {
      if ($this->ItemEndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ItemEndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ItemEndTime
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setItemEndTime(\DateTime $ItemEndTime)
    {
      $this->ItemEndTime = $ItemEndTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getItemTitle()
    {
      return $this->ItemTitle;
    }

    /**
     * @param string $ItemTitle
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setItemTitle($ItemTitle)
    {
      $this->ItemTitle = $ItemTitle;
      return $this;
    }

    /**
     * @return MessageMediaType[]
     */
    public function getMessageMedia()
    {
      return $this->MessageMedia;
    }

    /**
     * @param MessageMediaType[] $MessageMedia
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setMessageMedia(array $MessageMedia)
    {
      $this->MessageMedia = $MessageMedia;
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
     * @return \EbayWsdl\MyMessagesMessageType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
