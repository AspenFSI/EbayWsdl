<?php

namespace EbayWsdl\Classes;

class StoreCustomListingHeaderLinkType
{

    /**
     * @var int $LinkID
     */
    protected $LinkID = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @var StoreCustomListingHeaderLinkCodeType $LinkType
     */
    protected $LinkType = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $LinkID
     * @param int $Order
     * @param StoreCustomListingHeaderLinkCodeType $LinkType
     * @param string $any
     */
    public function __construct($LinkID = null, $Order = null, $LinkType = null, $any = null)
    {
      $this->LinkID = $LinkID;
      $this->Order = $Order;
      $this->LinkType = $LinkType;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getLinkID()
    {
      return $this->LinkID;
    }

    /**
     * @param int $LinkID
     * @return \EbayWsdl\Classes\StoreCustomListingHeaderLinkType
     */
    public function setLinkID($LinkID)
    {
      $this->LinkID = $LinkID;
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
     * @return \EbayWsdl\Classes\StoreCustomListingHeaderLinkType
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return StoreCustomListingHeaderLinkCodeType
     */
    public function getLinkType()
    {
      return $this->LinkType;
    }

    /**
     * @param StoreCustomListingHeaderLinkCodeType $LinkType
     * @return \EbayWsdl\Classes\StoreCustomListingHeaderLinkType
     */
    public function setLinkType($LinkType)
    {
      $this->LinkType = $LinkType;
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
     * @return \EbayWsdl\Classes\StoreCustomListingHeaderLinkType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
