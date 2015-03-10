<?php

namespace EbayWsdl;

class SearchAttributesType
{

    /**
     * @var int $AttributeID
     */
    protected $AttributeID = null;

    /**
     * @var DateSpecifierCodeType $DateSpecifier
     */
    protected $DateSpecifier = null;

    /**
     * @var RangeCodeType $RangeSpecifier
     */
    protected $RangeSpecifier = null;

    /**
     * @var ValType[] $ValueList
     */
    protected $ValueList = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $AttributeID
     * @param DateSpecifierCodeType $DateSpecifier
     * @param RangeCodeType $RangeSpecifier
     * @param ValType[] $ValueList
     * @param string $any
     */
    public function __construct($AttributeID = null, $DateSpecifier = null, $RangeSpecifier = null, array $ValueList = null, $any = null)
    {
      $this->AttributeID = $AttributeID;
      $this->DateSpecifier = $DateSpecifier;
      $this->RangeSpecifier = $RangeSpecifier;
      $this->ValueList = $ValueList;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getAttributeID()
    {
      return $this->AttributeID;
    }

    /**
     * @param int $AttributeID
     * @return \EbayWsdl\SearchAttributesType
     */
    public function setAttributeID($AttributeID)
    {
      $this->AttributeID = $AttributeID;
      return $this;
    }

    /**
     * @return DateSpecifierCodeType
     */
    public function getDateSpecifier()
    {
      return $this->DateSpecifier;
    }

    /**
     * @param DateSpecifierCodeType $DateSpecifier
     * @return \EbayWsdl\SearchAttributesType
     */
    public function setDateSpecifier($DateSpecifier)
    {
      $this->DateSpecifier = $DateSpecifier;
      return $this;
    }

    /**
     * @return RangeCodeType
     */
    public function getRangeSpecifier()
    {
      return $this->RangeSpecifier;
    }

    /**
     * @param RangeCodeType $RangeSpecifier
     * @return \EbayWsdl\SearchAttributesType
     */
    public function setRangeSpecifier($RangeSpecifier)
    {
      $this->RangeSpecifier = $RangeSpecifier;
      return $this;
    }

    /**
     * @return ValType[]
     */
    public function getValueList()
    {
      return $this->ValueList;
    }

    /**
     * @param ValType[] $ValueList
     * @return \EbayWsdl\SearchAttributesType
     */
    public function setValueList(array $ValueList)
    {
      $this->ValueList = $ValueList;
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
     * @return \EbayWsdl\SearchAttributesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
