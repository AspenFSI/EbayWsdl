<?php

namespace EbayWsdl;

class ErrorParameterType
{

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var string $ParamID
     */
    protected $ParamID = null;

    /**
     * @param string $Value
     * @param string $any
     * @param string $ParamID
     */
    public function __construct($Value = null, $any = null, $ParamID = null)
    {
      $this->Value = $Value;
      $this->any = $any;
      $this->ParamID = $ParamID;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \EbayWsdl\ErrorParameterType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
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
     * @return \EbayWsdl\ErrorParameterType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return string
     */
    public function getParamID()
    {
      return $this->ParamID;
    }

    /**
     * @param string $ParamID
     * @return \EbayWsdl\ErrorParameterType
     */
    public function setParamID($ParamID)
    {
      $this->ParamID = $ParamID;
      return $this;
    }

}
