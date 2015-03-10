<?php

namespace EbayWsdl;

class DisputeMessageType
{

    /**
     * @var int $MessageID
     */
    protected $MessageID = null;

    /**
     * @var DisputeMessageSourceCodeType $MessageSource
     */
    protected $MessageSource = null;

    /**
     * @var \DateTime $MessageCreationTime
     */
    protected $MessageCreationTime = null;

    /**
     * @var string $MessageText
     */
    protected $MessageText = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $MessageID
     * @param DisputeMessageSourceCodeType $MessageSource
     * @param \DateTime $MessageCreationTime
     * @param string $MessageText
     * @param string $any
     */
    public function __construct($MessageID = null, $MessageSource = null, \DateTime $MessageCreationTime = null, $MessageText = null, $any = null)
    {
      $this->MessageID = $MessageID;
      $this->MessageSource = $MessageSource;
      $this->MessageCreationTime = $MessageCreationTime ? $MessageCreationTime->format(\DateTime::ATOM) : null;
      $this->MessageText = $MessageText;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getMessageID()
    {
      return $this->MessageID;
    }

    /**
     * @param int $MessageID
     * @return \EbayWsdl\DisputeMessageType
     */
    public function setMessageID($MessageID)
    {
      $this->MessageID = $MessageID;
      return $this;
    }

    /**
     * @return DisputeMessageSourceCodeType
     */
    public function getMessageSource()
    {
      return $this->MessageSource;
    }

    /**
     * @param DisputeMessageSourceCodeType $MessageSource
     * @return \EbayWsdl\DisputeMessageType
     */
    public function setMessageSource($MessageSource)
    {
      $this->MessageSource = $MessageSource;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMessageCreationTime()
    {
      if ($this->MessageCreationTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->MessageCreationTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $MessageCreationTime
     * @return \EbayWsdl\DisputeMessageType
     */
    public function setMessageCreationTime(\DateTime $MessageCreationTime)
    {
      $this->MessageCreationTime = $MessageCreationTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
      return $this->MessageText;
    }

    /**
     * @param string $MessageText
     * @return \EbayWsdl\DisputeMessageType
     */
    public function setMessageText($MessageText)
    {
      $this->MessageText = $MessageText;
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
     * @return \EbayWsdl\DisputeMessageType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
