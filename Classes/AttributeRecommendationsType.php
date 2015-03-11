<?php

namespace EbayWsdl\Classes;

class AttributeRecommendationsType
{

    /**
     * @var AttributeSetArrayType $AttributeSetArray
     */
    protected $AttributeSetArray = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AttributeSetArrayType $AttributeSetArray
     * @param string $any
     */
    public function __construct($AttributeSetArray = null, $any = null)
    {
      $this->AttributeSetArray = $AttributeSetArray;
      $this->any = $any;
    }

    /**
     * @return AttributeSetArrayType
     */
    public function getAttributeSetArray()
    {
      return $this->AttributeSetArray;
    }

    /**
     * @param AttributeSetArrayType $AttributeSetArray
     * @return \EbayWsdl\Classes\AttributeRecommendationsType
     */
    public function setAttributeSetArray($AttributeSetArray)
    {
      $this->AttributeSetArray = $AttributeSetArray;
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
     * @return \EbayWsdl\Classes\AttributeRecommendationsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
