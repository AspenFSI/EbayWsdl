<?php

namespace EbayWsdl\Classes;

class AttributeArrayType
{

    /**
     * @var AttributeType[] $Attribute
     */
    protected $Attribute = null;

    /**
     * @param AttributeType[] $Attribute
     */
    public function __construct(array $Attribute = null)
    {
      $this->Attribute = $Attribute;
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
     * @return \EbayWsdl\Classes\AttributeArrayType
     */
    public function setAttribute(array $Attribute)
    {
      $this->Attribute = $Attribute;
      return $this;
    }

}
