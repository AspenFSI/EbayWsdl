<?php

namespace EbayWsdl;

class NameValueRelationshipType
{

    /**
     * @var string $ParentName
     */
    protected $ParentName = null;

    /**
     * @var string $ParentValue
     */
    protected $ParentValue = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ParentName
     * @param string $ParentValue
     * @param string $any
     */
    public function __construct($ParentName = null, $ParentValue = null, $any = null)
    {
      $this->ParentName = $ParentName;
      $this->ParentValue = $ParentValue;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getParentName()
    {
      return $this->ParentName;
    }

    /**
     * @param string $ParentName
     * @return \EbayWsdl\NameValueRelationshipType
     */
    public function setParentName($ParentName)
    {
      $this->ParentName = $ParentName;
      return $this;
    }

    /**
     * @return string
     */
    public function getParentValue()
    {
      return $this->ParentValue;
    }

    /**
     * @param string $ParentValue
     * @return \EbayWsdl\NameValueRelationshipType
     */
    public function setParentValue($ParentValue)
    {
      $this->ParentValue = $ParentValue;
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
     * @return \EbayWsdl\NameValueRelationshipType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
