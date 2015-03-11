<?php

namespace EbayWsdl\Classes;

class AnnouncementMessageType
{

    /**
     * @var \DateTime $AnnouncementStartTime
     */
    protected $AnnouncementStartTime = null;

    /**
     * @var \DateTime $EventTime
     */
    protected $EventTime = null;

    /**
     * @var AnnouncementMessageCodeType $MessageType
     */
    protected $MessageType = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param \DateTime $AnnouncementStartTime
     * @param \DateTime $EventTime
     * @param AnnouncementMessageCodeType $MessageType
     * @param string $any
     */
    public function __construct(\DateTime $AnnouncementStartTime = null, \DateTime $EventTime = null, $MessageType = null, $any = null)
    {
      $this->AnnouncementStartTime = $AnnouncementStartTime ? $AnnouncementStartTime->format(\DateTime::ATOM) : null;
      $this->EventTime = $EventTime ? $EventTime->format(\DateTime::ATOM) : null;
      $this->MessageType = $MessageType;
      $this->any = $any;
    }

    /**
     * @return \DateTime
     */
    public function getAnnouncementStartTime()
    {
      if ($this->AnnouncementStartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AnnouncementStartTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AnnouncementStartTime
     * @return \EbayWsdl\Classes\AnnouncementMessageType
     */
    public function setAnnouncementStartTime(\DateTime $AnnouncementStartTime)
    {
      $this->AnnouncementStartTime = $AnnouncementStartTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEventTime()
    {
      if ($this->EventTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EventTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EventTime
     * @return \EbayWsdl\Classes\AnnouncementMessageType
     */
    public function setEventTime(\DateTime $EventTime)
    {
      $this->EventTime = $EventTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AnnouncementMessageCodeType
     */
    public function getMessageType()
    {
      return $this->MessageType;
    }

    /**
     * @param AnnouncementMessageCodeType $MessageType
     * @return \EbayWsdl\Classes\AnnouncementMessageType
     */
    public function setMessageType($MessageType)
    {
      $this->MessageType = $MessageType;
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
     * @return \EbayWsdl\Classes\AnnouncementMessageType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
