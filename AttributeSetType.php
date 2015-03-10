<?php

namespace EbayWsdl;

class AttributeSetType
{

    /**
     * @var AttributeType[] $Attribute
     */
    protected $Attribute = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var int $attributeSetID
     */
    protected $attributeSetID = null;

    /**
     * @var string $attributeSetVersion
     */
    protected $attributeSetVersion = null;

    /**
     * @param AttributeType[] $Attribute
     * @param string $any
     * @param int $attributeSetID
     * @param string $attributeSetVersion
     */
    public function __construct(array $Attribute = null, $any = null, $attributeSetID = null, $attributeSetVersion = null)
    {
      $this->Attribute = $Attribute;
      $this->any = $any;
      $this->attributeSetID = $attributeSetID;
      $this->attributeSetVersion = $attributeSetVersion;
    }

    /**
     * @return AttributeType[]
     */
    public function getAttribute()
    {
      return $this->Attribute;
    }

    /**
     * @param AttributeType[] $Attribute
     * @return \EbayWsdl\AttributeSetType
     */
    public function setAttribute(array $Attribute)
    {
      $this->Attribute = $Attribute;
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
     * @return \EbayWsdl\AttributeSetType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return int
     */
    public function getAttributeSetID()
    {
      return $this->attributeSetID;
    }

    /**
     * @param int $attributeSetID
     * @return \EbayWsdl\AttributeSetType
     */
    public function setAttributeSetID($attributeSetID)
    {
      $this->attributeSetID = $attributeSetID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttributeSetVersion()
    {
      return $this->attributeSetVersion;
    }

    /**
     * @param string $attributeSetVersion
     * @return \EbayWsdl\AttributeSetType
     */
    public function setAttributeSetVersion($attributeSetVersion)
    {
      $this->attributeSetVersion = $attributeSetVersion;
      return $this;
    }

}
