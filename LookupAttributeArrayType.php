<?php

namespace EbayWsdl;

class LookupAttributeArrayType
{

    /**
     * @var LookupAttributeType[] $LookupAttribute
     */
    protected $LookupAttribute = null;

    /**
     * @param LookupAttributeType[] $LookupAttribute
     */
    public function __construct(array $LookupAttribute = null)
    {
      $this->LookupAttribute = $LookupAttribute;
    }

    /**
     * @return LookupAttributeType[]
     */
    public function getLookupAttribute()
    {
      return $this->LookupAttribute;
    }

    /**
     * @param LookupAttributeType[] $LookupAttribute
     * @return \EbayWsdl\LookupAttributeArrayType
     */
    public function setLookupAttribute(array $LookupAttribute)
    {
      $this->LookupAttribute = $LookupAttribute;
      return $this;
    }

}
