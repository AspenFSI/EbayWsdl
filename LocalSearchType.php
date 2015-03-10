<?php

namespace EbayWsdl;

class LocalSearchType
{

    /**
     * @var int $MaxDistance
     */
    protected $MaxDistance = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $MaxDistance
     * @param string $PostalCode
     * @param string $any
     */
    public function __construct($MaxDistance = null, $PostalCode = null, $any = null)
    {
      $this->MaxDistance = $MaxDistance;
      $this->PostalCode = $PostalCode;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getMaxDistance()
    {
      return $this->MaxDistance;
    }

    /**
     * @param int $MaxDistance
     * @return \EbayWsdl\LocalSearchType
     */
    public function setMaxDistance($MaxDistance)
    {
      $this->MaxDistance = $MaxDistance;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \EbayWsdl\LocalSearchType
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
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
     * @return \EbayWsdl\LocalSearchType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
