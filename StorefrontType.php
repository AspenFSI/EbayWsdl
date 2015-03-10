<?php

namespace EbayWsdl;

class StorefrontType
{

    /**
     * @var int $StoreCategoryID
     */
    protected $StoreCategoryID = null;

    /**
     * @var int $StoreCategory2ID
     */
    protected $StoreCategory2ID = null;

    /**
     * @var anyURI $StoreURL
     */
    protected $StoreURL = null;

    /**
     * @var string $StoreName
     */
    protected $StoreName = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $StoreCategoryID
     * @param int $StoreCategory2ID
     * @param anyURI $StoreURL
     * @param string $StoreName
     * @param string $any
     */
    public function __construct($StoreCategoryID = null, $StoreCategory2ID = null, $StoreURL = null, $StoreName = null, $any = null)
    {
      $this->StoreCategoryID = $StoreCategoryID;
      $this->StoreCategory2ID = $StoreCategory2ID;
      $this->StoreURL = $StoreURL;
      $this->StoreName = $StoreName;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getStoreCategoryID()
    {
      return $this->StoreCategoryID;
    }

    /**
     * @param int $StoreCategoryID
     * @return \EbayWsdl\StorefrontType
     */
    public function setStoreCategoryID($StoreCategoryID)
    {
      $this->StoreCategoryID = $StoreCategoryID;
      return $this;
    }

    /**
     * @return int
     */
    public function getStoreCategory2ID()
    {
      return $this->StoreCategory2ID;
    }

    /**
     * @param int $StoreCategory2ID
     * @return \EbayWsdl\StorefrontType
     */
    public function setStoreCategory2ID($StoreCategory2ID)
    {
      $this->StoreCategory2ID = $StoreCategory2ID;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getStoreURL()
    {
      return $this->StoreURL;
    }

    /**
     * @param anyURI $StoreURL
     * @return \EbayWsdl\StorefrontType
     */
    public function setStoreURL($StoreURL)
    {
      $this->StoreURL = $StoreURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreName()
    {
      return $this->StoreName;
    }

    /**
     * @param string $StoreName
     * @return \EbayWsdl\StorefrontType
     */
    public function setStoreName($StoreName)
    {
      $this->StoreName = $StoreName;
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
     * @return \EbayWsdl\StorefrontType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
