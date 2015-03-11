<?php

namespace EbayWsdl\Classes;

class AttributeSetArrayType
{

    /**
     * @var AttributeSetType[] $AttributeSet
     */
    protected $AttributeSet = null;

    /**
     * @param AttributeSetType[] $AttributeSet
     */
    public function __construct(array $AttributeSet = null)
    {
      $this->AttributeSet = $AttributeSet;
    }

    /**
     * @return AttributeSetType[]
     */
    public function getAttributeSet()
    {
      return $this->AttributeSet;
    }

    /**
     * @param AttributeSetType[] $AttributeSet
     * @return \EbayWsdl\Classes\AttributeSetArrayType
     */
    public function setAttributeSet(array $AttributeSet)
    {
      $this->AttributeSet = $AttributeSet;
      return $this;
    }

}
