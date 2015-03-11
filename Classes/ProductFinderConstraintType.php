<?php

namespace EbayWsdl\Classes;

class ProductFinderConstraintType
{

    /**
     * @var string $DisplayName
     */
    protected $DisplayName = null;

    /**
     * @var string $DisplayValue
     */
    protected $DisplayValue = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $DisplayName
     * @param string $DisplayValue
     * @param string $any
     */
    public function __construct($DisplayName = null, $DisplayValue = null, $any = null)
    {
      $this->DisplayName = $DisplayName;
      $this->DisplayValue = $DisplayValue;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->DisplayName;
    }

    /**
     * @param string $DisplayName
     * @return \EbayWsdl\Classes\ProductFinderConstraintType
     */
    public function setDisplayName($DisplayName)
    {
      $this->DisplayName = $DisplayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayValue()
    {
      return $this->DisplayValue;
    }

    /**
     * @param string $DisplayValue
     * @return \EbayWsdl\Classes\ProductFinderConstraintType
     */
    public function setDisplayValue($DisplayValue)
    {
      $this->DisplayValue = $DisplayValue;
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
     * @return \EbayWsdl\Classes\ProductFinderConstraintType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
