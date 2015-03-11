<?php

namespace EbayWsdl\Classes;

class CategoryGroupType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $IsDefault
     */
    protected $IsDefault = null;

    /**
     * @param string $Name
     * @param boolean $IsDefault
     */
    public function __construct($Name = null, $IsDefault = null)
    {
      $this->Name = $Name;
      $this->IsDefault = $IsDefault;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \EbayWsdl\Classes\CategoryGroupType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefault()
    {
      return $this->IsDefault;
    }

    /**
     * @param boolean $IsDefault
     * @return \EbayWsdl\Classes\CategoryGroupType
     */
    public function setIsDefault($IsDefault)
    {
      $this->IsDefault = $IsDefault;
      return $this;
    }

}
