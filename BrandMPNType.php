<?php

namespace EbayWsdl;

class BrandMPNType
{

    /**
     * @var string $Brand
     */
    protected $Brand = null;

    /**
     * @var string $MPN
     */
    protected $MPN = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Brand
     * @param string $MPN
     * @param string $any
     */
    public function __construct($Brand = null, $MPN = null, $any = null)
    {
      $this->Brand = $Brand;
      $this->MPN = $MPN;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
      return $this->Brand;
    }

    /**
     * @param string $Brand
     * @return \EbayWsdl\BrandMPNType
     */
    public function setBrand($Brand)
    {
      $this->Brand = $Brand;
      return $this;
    }

    /**
     * @return string
     */
    public function getMPN()
    {
      return $this->MPN;
    }

    /**
     * @param string $MPN
     * @return \EbayWsdl\BrandMPNType
     */
    public function setMPN($MPN)
    {
      $this->MPN = $MPN;
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
     * @return \EbayWsdl\BrandMPNType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
