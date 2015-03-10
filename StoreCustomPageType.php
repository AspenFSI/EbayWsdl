<?php

namespace EbayWsdl;

class StoreCustomPageType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $PageID
     */
    protected $PageID = null;

    /**
     * @var string $URLPath
     */
    protected $URLPath = null;

    /**
     * @var anyURI $URL
     */
    protected $URL = null;

    /**
     * @var StoreCustomPageStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @var boolean $LeftNav
     */
    protected $LeftNav = null;

    /**
     * @var boolean $PreviewEnabled
     */
    protected $PreviewEnabled = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Name
     * @param int $PageID
     * @param string $URLPath
     * @param anyURI $URL
     * @param StoreCustomPageStatusCodeType $Status
     * @param string $Content
     * @param boolean $LeftNav
     * @param boolean $PreviewEnabled
     * @param int $Order
     * @param string $any
     */
    public function __construct($Name = null, $PageID = null, $URLPath = null, $URL = null, $Status = null, $Content = null, $LeftNav = null, $PreviewEnabled = null, $Order = null, $any = null)
    {
      $this->Name = $Name;
      $this->PageID = $PageID;
      $this->URLPath = $URLPath;
      $this->URL = $URL;
      $this->Status = $Status;
      $this->Content = $Content;
      $this->LeftNav = $LeftNav;
      $this->PreviewEnabled = $PreviewEnabled;
      $this->Order = $Order;
      $this->any = $any;
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
     * @return \EbayWsdl\StoreCustomPageType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageID()
    {
      return $this->PageID;
    }

    /**
     * @param int $PageID
     * @return \EbayWsdl\StoreCustomPageType
     */
    public function setPageID($PageID)
    {
      $this->PageID = $PageID;
      return $this;
    }

    /**
     * @return string
     */
    public function getURLPath()
    {
      return $this->URLPath;
    }

    /**
     * @param string $URLPath
     * @return \EbayWsdl\StoreCustomPageType
     */
    public function setURLPath($URLPath)
    {
      $this->URLPath = $URLPath;
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
     * @return \EbayWsdl\StoreCustomPageType
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
      return $this;
    }

    /**
     * @return StoreCustomPageStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param StoreCustomPageStatusCodeType $Status
     * @return \EbayWsdl\StoreCustomPageType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return \EbayWsdl\StoreCustomPageType
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLeftNav()
    {
      return $this->LeftNav;
    }

    /**
     * @param boolean $LeftNav
     * @return \EbayWsdl\StoreCustomPageType
     */
    public function setLeftNav($LeftNav)
    {
      $this->LeftNav = $LeftNav;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreviewEnabled()
    {
      return $this->PreviewEnabled;
    }

    /**
     * @param boolean $PreviewEnabled
     * @return \EbayWsdl\StoreCustomPageType
     */
    public function setPreviewEnabled($PreviewEnabled)
    {
      $this->PreviewEnabled = $PreviewEnabled;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param int $Order
     * @return \EbayWsdl\StoreCustomPageType
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
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
     * @return \EbayWsdl\StoreCustomPageType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
