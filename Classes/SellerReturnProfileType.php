<?php

namespace EbayWsdl\Classes;

class SellerReturnProfileType
{

    /**
     * @var int $ReturnProfileID
     */
    protected $ReturnProfileID = null;

    /**
     * @var string $ReturnProfileName
     */
    protected $ReturnProfileName = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $ReturnProfileID
     * @param string $ReturnProfileName
     * @param string $any
     */
    public function __construct($ReturnProfileID = null, $ReturnProfileName = null, $any = null)
    {
      $this->ReturnProfileID = $ReturnProfileID;
      $this->ReturnProfileName = $ReturnProfileName;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getReturnProfileID()
    {
      return $this->ReturnProfileID;
    }

    /**
     * @param int $ReturnProfileID
     * @return \EbayWsdl\Classes\SellerReturnProfileType
     */
    public function setReturnProfileID($ReturnProfileID)
    {
      $this->ReturnProfileID = $ReturnProfileID;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnProfileName()
    {
      return $this->ReturnProfileName;
    }

    /**
     * @param string $ReturnProfileName
     * @return \EbayWsdl\Classes\SellerReturnProfileType
     */
    public function setReturnProfileName($ReturnProfileName)
    {
      $this->ReturnProfileName = $ReturnProfileName;
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
     * @return \EbayWsdl\Classes\SellerReturnProfileType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
