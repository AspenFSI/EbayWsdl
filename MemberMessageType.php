<?php

namespace EbayWsdl;

class MemberMessageType
{

    /**
     * @var MessageTypeCodeType $MessageType
     */
    protected $MessageType = null;

    /**
     * @var QuestionTypeCodeType $QuestionType
     */
    protected $QuestionType = null;

    /**
     * @var boolean $EmailCopyToSender
     */
    protected $EmailCopyToSender = null;

    /**
     * @var boolean $HideSendersEmailAddress
     */
    protected $HideSendersEmailAddress = null;

    /**
     * @var boolean $DisplayToPublic
     */
    protected $DisplayToPublic = null;

    /**
     * @var string $SenderID
     */
    protected $SenderID = null;

    /**
     * @var string $SenderEmail
     */
    protected $SenderEmail = null;

    /**
     * @var string[] $RecipientID
     */
    protected $RecipientID = null;

    /**
     * @var string $Subject
     */
    protected $Subject = null;

    /**
     * @var string $Body
     */
    protected $Body = null;

    /**
     * @var string $MessageID
     */
    protected $MessageID = null;

    /**
     * @var string $ParentMessageID
     */
    protected $ParentMessageID = null;

    /**
     * @var MessageMediaType[] $MessageMedia
     */
    protected $MessageMedia = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param MessageTypeCodeType $MessageType
     * @param QuestionTypeCodeType $QuestionType
     * @param boolean $EmailCopyToSender
     * @param boolean $HideSendersEmailAddress
     * @param boolean $DisplayToPublic
     * @param string $SenderID
     * @param string $SenderEmail
     * @param string[] $RecipientID
     * @param string $Subject
     * @param string $Body
     * @param string $MessageID
     * @param string $ParentMessageID
     * @param MessageMediaType[] $MessageMedia
     * @param string $any
     */
    public function __construct($MessageType = null, $QuestionType = null, $EmailCopyToSender = null, $HideSendersEmailAddress = null, $DisplayToPublic = null, $SenderID = null, $SenderEmail = null, array $RecipientID = null, $Subject = null, $Body = null, $MessageID = null, $ParentMessageID = null, array $MessageMedia = null, $any = null)
    {
      $this->MessageType = $MessageType;
      $this->QuestionType = $QuestionType;
      $this->EmailCopyToSender = $EmailCopyToSender;
      $this->HideSendersEmailAddress = $HideSendersEmailAddress;
      $this->DisplayToPublic = $DisplayToPublic;
      $this->SenderID = $SenderID;
      $this->SenderEmail = $SenderEmail;
      $this->RecipientID = $RecipientID;
      $this->Subject = $Subject;
      $this->Body = $Body;
      $this->MessageID = $MessageID;
      $this->ParentMessageID = $ParentMessageID;
      $this->MessageMedia = $MessageMedia;
      $this->any = $any;
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
     * @return \EbayWsdl\MemberMessageType
     */
    public function setMessageType($MessageType)
    {
      $this->MessageType = $MessageType;
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
     * @return \EbayWsdl\MemberMessageType
     */
    public function setQuestionType($QuestionType)
    {
      $this->QuestionType = $QuestionType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailCopyToSender()
    {
      return $this->EmailCopyToSender;
    }

    /**
     * @param boolean $EmailCopyToSender
     * @return \EbayWsdl\MemberMessageType
     */
    public function setEmailCopyToSender($EmailCopyToSender)
    {
      $this->EmailCopyToSender = $EmailCopyToSender;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideSendersEmailAddress()
    {
      return $this->HideSendersEmailAddress;
    }

    /**
     * @param boolean $HideSendersEmailAddress
     * @return \EbayWsdl\MemberMessageType
     */
    public function setHideSendersEmailAddress($HideSendersEmailAddress)
    {
      $this->HideSendersEmailAddress = $HideSendersEmailAddress;
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
     * @return \EbayWsdl\MemberMessageType
     */
    public function setDisplayToPublic($DisplayToPublic)
    {
      $this->DisplayToPublic = $DisplayToPublic;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderID()
    {
      return $this->SenderID;
    }

    /**
     * @param string $SenderID
     * @return \EbayWsdl\MemberMessageType
     */
    public function setSenderID($SenderID)
    {
      $this->SenderID = $SenderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderEmail()
    {
      return $this->SenderEmail;
    }

    /**
     * @param string $SenderEmail
     * @return \EbayWsdl\MemberMessageType
     */
    public function setSenderEmail($SenderEmail)
    {
      $this->SenderEmail = $SenderEmail;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRecipientID()
    {
      return $this->RecipientID;
    }

    /**
     * @param string[] $RecipientID
     * @return \EbayWsdl\MemberMessageType
     */
    public function setRecipientID(array $RecipientID)
    {
      $this->RecipientID = $RecipientID;
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
     * @return \EbayWsdl\MemberMessageType
     */
    public function setSubject($Subject)
    {
      $this->Subject = $Subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param string $Body
     * @return \EbayWsdl\MemberMessageType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageID()
    {
      return $this->MessageID;
    }

    /**
     * @param string $MessageID
     * @return \EbayWsdl\MemberMessageType
     */
    public function setMessageID($MessageID)
    {
      $this->MessageID = $MessageID;
      return $this;
    }

    /**
     * @return string
     */
    public function getParentMessageID()
    {
      return $this->ParentMessageID;
    }

    /**
     * @param string $ParentMessageID
     * @return \EbayWsdl\MemberMessageType
     */
    public function setParentMessageID($ParentMessageID)
    {
      $this->ParentMessageID = $ParentMessageID;
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
     * @return \EbayWsdl\MemberMessageType
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
     * @return \EbayWsdl\MemberMessageType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
