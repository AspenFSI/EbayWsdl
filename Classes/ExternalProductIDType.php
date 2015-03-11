<?php

namespace EbayWsdl\Classes;

class ExternalProductIDType
{

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var boolean $ReturnSearchResultOnDuplicates
     */
    protected $ReturnSearchResultOnDuplicates = null;

    /**
     * @var ExternalProductCodeType $Type
     */
    protected $Type = null;

    /**
     * @var string[] $AlternateValue
     */
    protected $AlternateValue = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Value
     * @param boolean $ReturnSearchResultOnDuplicates
     * @param ExternalProductCodeType $Type
     * @param string[] $AlternateValue
     * @param string $any
     */
    public function __construct($Value = null, $ReturnSearchResultOnDuplicates = null, $Type = null, array $AlternateValue = null, $any = null)
    {
      $this->Value = $Value;
      $this->ReturnSearchResultOnDuplicates = $ReturnSearchResultOnDuplicates;
      $this->Type = $Type;
      $this->AlternateValue = $AlternateValue;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\ExternalProductIDType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnSearchResultOnDuplicates()
    {
      return $this->ReturnSearchResultOnDuplicates;
    }

    /**
     * @param boolean $ReturnSearchResultOnDuplicates
     * @return \EbayWsdl\Classes\ExternalProductIDType
     */
    public function setReturnSearchResultOnDuplicates($ReturnSearchResultOnDuplicates)
    {
      $this->ReturnSearchResultOnDuplicates = $ReturnSearchResultOnDuplicates;
      return $this;
    }

    /**
     * @return ExternalProductCodeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ExternalProductCodeType $Type
     * @return \EbayWsdl\Classes\ExternalProductIDType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAlternateValue()
    {
      return $this->AlternateValue;
    }

    /**
     * @param string[] $AlternateValue
     * @return \EbayWsdl\Classes\ExternalProductIDType
     */
    public function setAlternateValue(array $AlternateValue)
    {
      $this->AlternateValue = $AlternateValue;
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
     * @return \EbayWsdl\Classes\ExternalProductIDType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
