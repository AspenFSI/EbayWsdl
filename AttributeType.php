<?php

namespace EbayWsdl;

class AttributeType
{

    /**
     * @var ValType[] $Value
     */
    protected $Value = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var int $attributeID
     */
    protected $attributeID = null;

    /**
     * @var string $attributeLabel
     */
    protected $attributeLabel = null;

    /**
     * @param ValType[] $Value
     * @param string $any
     * @param int $attributeID
     * @param string $attributeLabel
     */
    public function __construct(array $Value = null, $any = null, $attributeID = null, $attributeLabel = null)
    {
      $this->Value = $Value;
      $this->any = $any;
      $this->attributeID = $attributeID;
      $this->attributeLabel = $attributeLabel;
    }

    /**
     * @return ValType[]
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param ValType[] $Value
     * @return \EbayWsdl\AttributeType
     */
    public function setValue(array $Value)
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
     * @return \EbayWsdl\AttributeType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return int
     */
    public function getAttributeID()
    {
      return $this->attributeID;
    }

    /**
     * @param int $attributeID
     * @return \EbayWsdl\AttributeType
     */
    public function setAttributeID($attributeID)
    {
      $this->attributeID = $attributeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttributeLabel()
    {
      return $this->attributeLabel;
    }

    /**
     * @param string $attributeLabel
     * @return \EbayWsdl\AttributeType
     */
    public function setAttributeLabel($attributeLabel)
    {
      $this->attributeLabel = $attributeLabel;
      return $this;
    }

}
