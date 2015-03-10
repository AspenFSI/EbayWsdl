<?php

namespace EbayWsdl;

class ErrorType
{

    /**
     * @var string $ShortMessage
     */
    protected $ShortMessage = null;

    /**
     * @var string $LongMessage
     */
    protected $LongMessage = null;

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var boolean $UserDisplayHint
     */
    protected $UserDisplayHint = null;

    /**
     * @var SeverityCodeType $SeverityCode
     */
    protected $SeverityCode = null;

    /**
     * @var ErrorParameterType[] $ErrorParameters
     */
    protected $ErrorParameters = null;

    /**
     * @var ErrorClassificationCodeType $ErrorClassification
     */
    protected $ErrorClassification = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ShortMessage
     * @param string $LongMessage
     * @param string $ErrorCode
     * @param boolean $UserDisplayHint
     * @param SeverityCodeType $SeverityCode
     * @param ErrorParameterType[] $ErrorParameters
     * @param ErrorClassificationCodeType $ErrorClassification
     * @param string $any
     */
    public function __construct($ShortMessage = null, $LongMessage = null, $ErrorCode = null, $UserDisplayHint = null, $SeverityCode = null, array $ErrorParameters = null, $ErrorClassification = null, $any = null)
    {
      $this->ShortMessage = $ShortMessage;
      $this->LongMessage = $LongMessage;
      $this->ErrorCode = $ErrorCode;
      $this->UserDisplayHint = $UserDisplayHint;
      $this->SeverityCode = $SeverityCode;
      $this->ErrorParameters = $ErrorParameters;
      $this->ErrorClassification = $ErrorClassification;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getShortMessage()
    {
      return $this->ShortMessage;
    }

    /**
     * @param string $ShortMessage
     * @return \EbayWsdl\ErrorType
     */
    public function setShortMessage($ShortMessage)
    {
      $this->ShortMessage = $ShortMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongMessage()
    {
      return $this->LongMessage;
    }

    /**
     * @param string $LongMessage
     * @return \EbayWsdl\ErrorType
     */
    public function setLongMessage($LongMessage)
    {
      $this->LongMessage = $LongMessage;
      return $this;
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
     * @return \EbayWsdl\ErrorType
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUserDisplayHint()
    {
      return $this->UserDisplayHint;
    }

    /**
     * @param boolean $UserDisplayHint
     * @return \EbayWsdl\ErrorType
     */
    public function setUserDisplayHint($UserDisplayHint)
    {
      $this->UserDisplayHint = $UserDisplayHint;
      return $this;
    }

    /**
     * @return SeverityCodeType
     */
    public function getSeverityCode()
    {
      return $this->SeverityCode;
    }

    /**
     * @param SeverityCodeType $SeverityCode
     * @return \EbayWsdl\ErrorType
     */
    public function setSeverityCode($SeverityCode)
    {
      $this->SeverityCode = $SeverityCode;
      return $this;
    }

    /**
     * @return ErrorParameterType[]
     */
    public function getErrorParameters()
    {
      return $this->ErrorParameters;
    }

    /**
     * @param ErrorParameterType[] $ErrorParameters
     * @return \EbayWsdl\ErrorType
     */
    public function setErrorParameters(array $ErrorParameters)
    {
      $this->ErrorParameters = $ErrorParameters;
      return $this;
    }

    /**
     * @return ErrorClassificationCodeType
     */
    public function getErrorClassification()
    {
      return $this->ErrorClassification;
    }

    /**
     * @param ErrorClassificationCodeType $ErrorClassification
     * @return \EbayWsdl\ErrorType
     */
    public function setErrorClassification($ErrorClassification)
    {
      $this->ErrorClassification = $ErrorClassification;
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
     * @return \EbayWsdl\ErrorType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
