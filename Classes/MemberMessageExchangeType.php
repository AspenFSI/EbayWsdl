<?php

namespace EbayWsdl\Classes;

class MemberMessageExchangeType
{

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

    /**
     * @var MemberMessageType $Question
     */
    protected $Question = null;

    /**
     * @var string[] $Response
     */
    protected $Response = null;

    /**
     * @var MessageStatusTypeCodeType $MessageStatus
     */
    protected $MessageStatus = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var MessageMediaType[] $MessageMedia
     */
    protected $MessageMedia = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemType $Item
     * @param MemberMessageType $Question
     * @param string[] $Response
     * @param MessageStatusTypeCodeType $MessageStatus
     * @param \DateTime $CreationDate
     * @param \DateTime $LastModifiedDate
     * @param MessageMediaType[] $MessageMedia
     * @param string $any
     */
    public function __construct($Item = null, $Question = null, array $Response = null, $MessageStatus = null, \DateTime $CreationDate = null, \DateTime $LastModifiedDate = null, array $MessageMedia = null, $any = null)
    {
      $this->Item = $Item;
      $this->Question = $Question;
      $this->Response = $Response;
      $this->MessageStatus = $MessageStatus;
      $this->CreationDate = $CreationDate ? $CreationDate->format(\DateTime::ATOM) : null;
      $this->LastModifiedDate = $LastModifiedDate ? $LastModifiedDate->format(\DateTime::ATOM) : null;
      $this->MessageMedia = $MessageMedia;
      $this->any = $any;
    }

    /**
     * @return ItemType
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ItemType $Item
     * @return \EbayWsdl\Classes\MemberMessageExchangeType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return MemberMessageType
     */
    public function getQuestion()
    {
      return $this->Question;
    }

    /**
     * @param MemberMessageType $Question
     * @return \EbayWsdl\Classes\MemberMessageExchangeType
     */
    public function setQuestion($Question)
    {
      $this->Question = $Question;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getResponse()
    {
      return $this->Response;
    }

    /**
     * @param string[] $Response
     * @return \EbayWsdl\Classes\MemberMessageExchangeType
     */
    public function setResponse(array $Response)
    {
      $this->Response = $Response;
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
     * @return \EbayWsdl\Classes\MemberMessageExchangeType
     */
    public function setMessageStatus($MessageStatus)
    {
      $this->MessageStatus = $MessageStatus;
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
     * @return \EbayWsdl\Classes\MemberMessageExchangeType
     */
    public function setCreationDate(\DateTime $CreationDate)
    {
      $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return \EbayWsdl\Classes\MemberMessageExchangeType
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\MemberMessageExchangeType
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
     * @return \EbayWsdl\Classes\MemberMessageExchangeType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
