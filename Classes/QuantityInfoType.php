<?php

namespace EbayWsdl\Classes;

class QuantityInfoType
{

    /**
     * @var int $MinimumRemnantSet
     */
    protected $MinimumRemnantSet = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $MinimumRemnantSet
     * @param string $any
     */
    public function __construct($MinimumRemnantSet = null, $any = null)
    {
      $this->MinimumRemnantSet = $MinimumRemnantSet;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getMinimumRemnantSet()
    {
      return $this->MinimumRemnantSet;
    }

    /**
     * @param int $MinimumRemnantSet
     * @return \EbayWsdl\Classes\QuantityInfoType
     */
    public function setMinimumRemnantSet($MinimumRemnantSet)
    {
      $this->MinimumRemnantSet = $MinimumRemnantSet;
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
     * @return \EbayWsdl\Classes\QuantityInfoType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
