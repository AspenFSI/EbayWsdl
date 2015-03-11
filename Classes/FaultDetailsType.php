<?php

namespace EbayWsdl\Classes;

class FaultDetailsType
{

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var string $Severity
     */
    protected $Severity = null;

    /**
     * @var string $DetailedMessage
     */
    protected $DetailedMessage = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ErrorCode
     * @param string $Severity
     * @param string $DetailedMessage
     * @param string $any
     */
    public function __construct($ErrorCode = null, $Severity = null, $DetailedMessage = null, $any = null)
    {
      $this->ErrorCode = $ErrorCode;
      $this->Severity = $Severity;
      $this->DetailedMessage = $DetailedMessage;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \EbayWsdl\Classes\FaultDetailsType
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeverity()
    {
      return $this->Severity;
    }

    /**
     * @param string $Severity
     * @return \EbayWsdl\Classes\FaultDetailsType
     */
    public function setSeverity($Severity)
    {
      $this->Severity = $Severity;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailedMessage()
    {
      return $this->DetailedMessage;
    }

    /**
     * @param string $DetailedMessage
     * @return \EbayWsdl\Classes\FaultDetailsType
     */
    public function setDetailedMessage($DetailedMessage)
    {
      $this->DetailedMessage = $DetailedMessage;
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
     * @return \EbayWsdl\Classes\FaultDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
