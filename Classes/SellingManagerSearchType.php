<?php

namespace EbayWsdl\Classes;

class SellingManagerSearchType
{

    /**
     * @var SellingManagerSearchTypeCodeType $SearchType
     */
    protected $SearchType = null;

    /**
     * @var string $SearchValue
     */
    protected $SearchValue = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SellingManagerSearchTypeCodeType $SearchType
     * @param string $SearchValue
     * @param string $any
     */
    public function __construct($SearchType = null, $SearchValue = null, $any = null)
    {
      $this->SearchType = $SearchType;
      $this->SearchValue = $SearchValue;
      $this->any = $any;
    }

    /**
     * @return SellingManagerSearchTypeCodeType
     */
    public function getSearchType()
    {
      return $this->SearchType;
    }

    /**
     * @param SellingManagerSearchTypeCodeType $SearchType
     * @return \EbayWsdl\Classes\SellingManagerSearchType
     */
    public function setSearchType($SearchType)
    {
      $this->SearchType = $SearchType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchValue()
    {
      return $this->SearchValue;
    }

    /**
     * @param string $SearchValue
     * @return \EbayWsdl\Classes\SellingManagerSearchType
     */
    public function setSearchValue($SearchValue)
    {
      $this->SearchValue = $SearchValue;
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
     * @return \EbayWsdl\Classes\SellingManagerSearchType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
