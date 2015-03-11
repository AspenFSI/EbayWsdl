<?php

namespace EbayWsdl\Classes;

class CharacteristicType
{

    /**
     * @var int $AttributeID
     */
    protected $AttributeID = null;

    /**
     * @var string $DateFormat
     */
    protected $DateFormat = null;

    /**
     * @var string $DisplaySequence
     */
    protected $DisplaySequence = null;

    /**
     * @var string $DisplayUOM
     */
    protected $DisplayUOM = null;

    /**
     * @var LabelType $Label
     */
    protected $Label = null;

    /**
     * @var SortOrderCodeType $SortOrder
     */
    protected $SortOrder = null;

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
     * @param string $DateFormat
     * @param string $DisplaySequence
     * @param string $DisplayUOM
     * @param LabelType $Label
     * @param SortOrderCodeType $SortOrder
     * @param ValType[] $ValueList
     * @param string $any
     */
    public function __construct($AttributeID = null, $DateFormat = null, $DisplaySequence = null, $DisplayUOM = null, $Label = null, $SortOrder = null, array $ValueList = null, $any = null)
    {
      $this->AttributeID = $AttributeID;
      $this->DateFormat = $DateFormat;
      $this->DisplaySequence = $DisplaySequence;
      $this->DisplayUOM = $DisplayUOM;
      $this->Label = $Label;
      $this->SortOrder = $SortOrder;
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
     * @return \EbayWsdl\Classes\CharacteristicType
     */
    public function setAttributeID($AttributeID)
    {
      $this->AttributeID = $AttributeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateFormat()
    {
      return $this->DateFormat;
    }

    /**
     * @param string $DateFormat
     * @return \EbayWsdl\Classes\CharacteristicType
     */
    public function setDateFormat($DateFormat)
    {
      $this->DateFormat = $DateFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplaySequence()
    {
      return $this->DisplaySequence;
    }

    /**
     * @param string $DisplaySequence
     * @return \EbayWsdl\Classes\CharacteristicType
     */
    public function setDisplaySequence($DisplaySequence)
    {
      $this->DisplaySequence = $DisplaySequence;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayUOM()
    {
      return $this->DisplayUOM;
    }

    /**
     * @param string $DisplayUOM
     * @return \EbayWsdl\Classes\CharacteristicType
     */
    public function setDisplayUOM($DisplayUOM)
    {
      $this->DisplayUOM = $DisplayUOM;
      return $this;
    }

    /**
     * @return LabelType
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param LabelType $Label
     * @return \EbayWsdl\Classes\CharacteristicType
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return SortOrderCodeType
     */
    public function getSortOrder()
    {
      return $this->SortOrder;
    }

    /**
     * @param SortOrderCodeType $SortOrder
     * @return \EbayWsdl\Classes\CharacteristicType
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
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
     * @return \EbayWsdl\Classes\CharacteristicType
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
     * @return \EbayWsdl\Classes\CharacteristicType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
