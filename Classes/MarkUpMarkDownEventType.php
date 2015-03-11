<?php

namespace EbayWsdl\Classes;

class MarkUpMarkDownEventType
{

    /**
     * @var MarkUpMarkDownEventTypeCodeType $Type
     */
    protected $Type = null;

    /**
     * @var \DateTime $Time
     */
    protected $Time = null;

    /**
     * @var string $Reason
     */
    protected $Reason = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param MarkUpMarkDownEventTypeCodeType $Type
     * @param \DateTime $Time
     * @param string $Reason
     * @param string $any
     */
    public function __construct($Type = null, \DateTime $Time = null, $Reason = null, $any = null)
    {
      $this->Type = $Type;
      $this->Time = $Time ? $Time->format(\DateTime::ATOM) : null;
      $this->Reason = $Reason;
      $this->any = $any;
    }

    /**
     * @return MarkUpMarkDownEventTypeCodeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param MarkUpMarkDownEventTypeCodeType $Type
     * @return \EbayWsdl\Classes\MarkUpMarkDownEventType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
      if ($this->Time == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Time);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Time
     * @return \EbayWsdl\Classes\MarkUpMarkDownEventType
     */
    public function setTime(\DateTime $Time)
    {
      $this->Time = $Time->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return \EbayWsdl\Classes\MarkUpMarkDownEventType
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
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
     * @return \EbayWsdl\Classes\MarkUpMarkDownEventType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
