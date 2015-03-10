<?php

namespace EbayWsdl;

class SellerReturnPreferencesType
{

    /**
     * @var boolean $OptedIn
     */
    protected $OptedIn = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $OptedIn
     * @param string $any
     */
    public function __construct($OptedIn = null, $any = null)
    {
      $this->OptedIn = $OptedIn;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getOptedIn()
    {
      return $this->OptedIn;
    }

    /**
     * @param boolean $OptedIn
     * @return \EbayWsdl\SellerReturnPreferencesType
     */
    public function setOptedIn($OptedIn)
    {
      $this->OptedIn = $OptedIn;
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
     * @return \EbayWsdl\SellerReturnPreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
