<?php

namespace EbayWsdl\Classes;

class StoreLogoArrayType
{

    /**
     * @var StoreLogoType[] $Logo
     */
    protected $Logo = null;

    /**
     * @param StoreLogoType[] $Logo
     */
    public function __construct(array $Logo = null)
    {
      $this->Logo = $Logo;
    }

    /**
     * @return StoreLogoType[]
     */
    public function getLogo()
    {
      return $this->Logo;
    }

    /**
     * @param StoreLogoType[] $Logo
     * @return \EbayWsdl\Classes\StoreLogoArrayType
     */
    public function setLogo(array $Logo)
    {
      $this->Logo = $Logo;
      return $this;
    }

}
