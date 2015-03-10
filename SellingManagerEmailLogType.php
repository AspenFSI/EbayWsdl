<?php

namespace EbayWsdl;

class SellingManagerEmailLogType
{

    /**
     * @var SellingManagerEmailTypeCodeType $EmailType
     */
    protected $EmailType = null;

    /**
     * @var string $CustomEmailName
     */
    protected $CustomEmailName = null;

    /**
     * @var SellingManagerEmailSentStatusCodeType $EmailState
     */
    protected $EmailState = null;

    /**
     * @var \DateTime $EventTime
     */
    protected $EventTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SellingManagerEmailTypeCodeType $EmailType
     * @param string $CustomEmailName
     * @param SellingManagerEmailSentStatusCodeType $EmailState
     * @param \DateTime $EventTime
     * @param string $any
     */
    public function __construct($EmailType = null, $CustomEmailName = null, $EmailState = null, \DateTime $EventTime = null, $any = null)
    {
      $this->EmailType = $EmailType;
      $this->CustomEmailName = $CustomEmailName;
      $this->EmailState = $EmailState;
      $this->EventTime = $EventTime ? $EventTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return SellingManagerEmailTypeCodeType
     */
    public function getEmailType()
    {
      return $this->EmailType;
    }

    /**
     * @param SellingManagerEmailTypeCodeType $EmailType
     * @return \EbayWsdl\SellingManagerEmailLogType
     */
    public function setEmailType($EmailType)
    {
      $this->EmailType = $EmailType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomEmailName()
    {
      return $this->CustomEmailName;
    }

    /**
     * @param string $CustomEmailName
     * @return \EbayWsdl\SellingManagerEmailLogType
     */
    public function setCustomEmailName($CustomEmailName)
    {
      $this->CustomEmailName = $CustomEmailName;
      return $this;
    }

    /**
     * @return SellingManagerEmailSentStatusCodeType
     */
    public function getEmailState()
    {
      return $this->EmailState;
    }

    /**
     * @param SellingManagerEmailSentStatusCodeType $EmailState
     * @return \EbayWsdl\SellingManagerEmailLogType
     */
    public function setEmailState($EmailState)
    {
      $this->EmailState = $EmailState;
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
     * @return \EbayWsdl\SellingManagerEmailLogType
     */
    public function setEventTime(\DateTime $EventTime)
    {
      $this->EventTime = $EventTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\SellingManagerEmailLogType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
