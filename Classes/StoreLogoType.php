<?php

namespace EbayWsdl\Classes;

class StoreLogoType
{

    /**
     * @var int $LogoID
     */
    protected $LogoID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var anyURI $URL
     */
    protected $URL = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $LogoID
     * @param string $Name
     * @param anyURI $URL
     * @param string $any
     */
    public function __construct($LogoID = null, $Name = null, $URL = null, $any = null)
    {
      $this->LogoID = $LogoID;
      $this->Name = $Name;
      $this->URL = $URL;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getLogoID()
    {
      return $this->LogoID;
    }

    /**
     * @param int $LogoID
     * @return \EbayWsdl\Classes\StoreLogoType
     */
    public function setLogoID($LogoID)
    {
      $this->LogoID = $LogoID;
      return $this;
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
     * @return \EbayWsdl\Classes\StoreLogoType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param anyURI $URL
     * @return \EbayWsdl\Classes\StoreLogoType
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
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
     * @return \EbayWsdl\Classes\StoreLogoType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
