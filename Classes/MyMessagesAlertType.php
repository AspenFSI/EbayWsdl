<?php

namespace EbayWsdl\Classes;

class MyMessagesAlertType
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
     * @var string $Subject
     */
    protected $Subject = null;

    /**
     * @var string $Priority
     */
    protected $Priority = null;

    /**
     * @var MyMessagesAlertIDType $AlertID
     */
    protected $AlertID = null;

    /**
     * @var string $ExternalAlertID
     */
    protected $ExternalAlertID = null;

    /**
     * @var string $ContentType
     */
    protected $ContentType = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var MyMessagesAlertResolutionStatusCode $ResolutionStatus
     */
    protected $ResolutionStatus = null;

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
     * @var \DateTime $ResolutionDate
     */
    protected $ResolutionDate = null;

    /**
     * @var \DateTime $LastReadDate
     */
    protected $LastReadDate = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var boolean $IsTimedResolution
     */
    protected $IsTimedResolution = null;

    /**
     * @var string $ActionURL
     */
    protected $ActionURL = null;

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
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Sender
     * @param string $RecipientUserID
     * @param string $Subject
     * @param string $Priority
     * @param MyMessagesAlertIDType $AlertID
     * @param string $ExternalAlertID
     * @param string $ContentType
     * @param string $Text
     * @param MyMessagesAlertResolutionStatusCode $ResolutionStatus
     * @param boolean $Read
     * @param \DateTime $CreationDate
     * @param \DateTime $ReceiveDate
     * @param \DateTime $ExpirationDate
     * @param \DateTime $ResolutionDate
     * @param \DateTime $LastReadDate
     * @param ItemIDType $ItemID
     * @param boolean $IsTimedResolution
     * @param string $ActionURL
     * @param MyMessagesResponseDetailsType $ResponseDetails
     * @param MyMessagesForwardDetailsType $ForwardDetails
     * @param MyMessagesFolderType $Folder
     * @param string $any
     */
    public function __construct($Sender = null, $RecipientUserID = null, $Subject = null, $Priority = null, $AlertID = null, $ExternalAlertID = null, $ContentType = null, $Text = null, $ResolutionStatus = null, $Read = null, \DateTime $CreationDate = null, \DateTime $ReceiveDate = null, \DateTime $ExpirationDate = null, \DateTime $ResolutionDate = null, \DateTime $LastReadDate = null, $ItemID = null, $IsTimedResolution = null, $ActionURL = null, $ResponseDetails = null, $ForwardDetails = null, $Folder = null, $any = null)
    {
      $this->Sender = $Sender;
      $this->RecipientUserID = $RecipientUserID;
      $this->Subject = $Subject;
      $this->Priority = $Priority;
      $this->AlertID = $AlertID;
      $this->ExternalAlertID = $ExternalAlertID;
      $this->ContentType = $ContentType;
      $this->Text = $Text;
      $this->ResolutionStatus = $ResolutionStatus;
      $this->Read = $Read;
      $this->CreationDate = $CreationDate ? $CreationDate->format(\DateTime::ATOM) : null;
      $this->ReceiveDate = $ReceiveDate ? $ReceiveDate->format(\DateTime::ATOM) : null;
      $this->ExpirationDate = $ExpirationDate ? $ExpirationDate->format(\DateTime::ATOM) : null;
      $this->ResolutionDate = $ResolutionDate ? $ResolutionDate->format(\DateTime::ATOM) : null;
      $this->LastReadDate = $LastReadDate ? $LastReadDate->format(\DateTime::ATOM) : null;
      $this->ItemID = $ItemID;
      $this->IsTimedResolution = $IsTimedResolution;
      $this->ActionURL = $ActionURL;
      $this->ResponseDetails = $ResponseDetails;
      $this->ForwardDetails = $ForwardDetails;
      $this->Folder = $Folder;
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setRecipientUserID($RecipientUserID)
    {
      $this->RecipientUserID = $RecipientUserID;
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setSubject($Subject)
    {
      $this->Subject = $Subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param string $Priority
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return MyMessagesAlertIDType
     */
    public function getAlertID()
    {
      return $this->AlertID;
    }

    /**
     * @param MyMessagesAlertIDType $AlertID
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setAlertID($AlertID)
    {
      $this->AlertID = $AlertID;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalAlertID()
    {
      return $this->ExternalAlertID;
    }

    /**
     * @param string $ExternalAlertID
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setExternalAlertID($ExternalAlertID)
    {
      $this->ExternalAlertID = $ExternalAlertID;
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return MyMessagesAlertResolutionStatusCode
     */
    public function getResolutionStatus()
    {
      return $this->ResolutionStatus;
    }

    /**
     * @param MyMessagesAlertResolutionStatusCode $ResolutionStatus
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setResolutionStatus($ResolutionStatus)
    {
      $this->ResolutionStatus = $ResolutionStatus;
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setExpirationDate(\DateTime $ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getResolutionDate()
    {
      if ($this->ResolutionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ResolutionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ResolutionDate
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setResolutionDate(\DateTime $ResolutionDate)
    {
      $this->ResolutionDate = $ResolutionDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastReadDate()
    {
      if ($this->LastReadDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastReadDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastReadDate
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setLastReadDate(\DateTime $LastReadDate)
    {
      $this->LastReadDate = $LastReadDate->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTimedResolution()
    {
      return $this->IsTimedResolution;
    }

    /**
     * @param boolean $IsTimedResolution
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setIsTimedResolution($IsTimedResolution)
    {
      $this->IsTimedResolution = $IsTimedResolution;
      return $this;
    }

    /**
     * @return string
     */
    public function getActionURL()
    {
      return $this->ActionURL;
    }

    /**
     * @param string $ActionURL
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setActionURL($ActionURL)
    {
      $this->ActionURL = $ActionURL;
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setFolder($Folder)
    {
      $this->Folder = $Folder;
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
     * @return \EbayWsdl\Classes\MyMessagesAlertType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
