<?php

namespace EbayWsdl\Classes;

class ListingRecommendationType
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Group
     */
    protected $Group = null;

    /**
     * @var string $FieldName
     */
    protected $FieldName = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string[] $Value
     */
    protected $Value = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Type
     * @param string $Group
     * @param string $FieldName
     * @param string $Code
     * @param string[] $Value
     * @param string $Message
     * @param string $any
     */
    public function __construct($Type = null, $Group = null, $FieldName = null, $Code = null, array $Value = null, $Message = null, $any = null)
    {
      $this->Type = $Type;
      $this->Group = $Group;
      $this->FieldName = $FieldName;
      $this->Code = $Code;
      $this->Value = $Value;
      $this->Message = $Message;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \EbayWsdl\Classes\ListingRecommendationType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
      return $this->Group;
    }

    /**
     * @param string $Group
     * @return \EbayWsdl\Classes\ListingRecommendationType
     */
    public function setGroup($Group)
    {
      $this->Group = $Group;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
      return $this->FieldName;
    }

    /**
     * @param string $FieldName
     * @return \EbayWsdl\Classes\ListingRecommendationType
     */
    public function setFieldName($FieldName)
    {
      $this->FieldName = $FieldName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \EbayWsdl\Classes\ListingRecommendationType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string[] $Value
     * @return \EbayWsdl\Classes\ListingRecommendationType
     */
    public function setValue(array $Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \EbayWsdl\Classes\ListingRecommendationType
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
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
     * @return \EbayWsdl\Classes\ListingRecommendationType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
