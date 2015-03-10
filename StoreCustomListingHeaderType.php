<?php

namespace EbayWsdl;

class StoreCustomListingHeaderType
{

    /**
     * @var StoreCustomListingHeaderDisplayCodeType $DisplayType
     */
    protected $DisplayType = null;

    /**
     * @var boolean $Logo
     */
    protected $Logo = null;

    /**
     * @var boolean $SearchBox
     */
    protected $SearchBox = null;

    /**
     * @var StoreCustomListingHeaderLinkType[] $LinkToInclude
     */
    protected $LinkToInclude = null;

    /**
     * @var boolean $AddToFavoriteStores
     */
    protected $AddToFavoriteStores = null;

    /**
     * @var boolean $SignUpForStoreNewsletter
     */
    protected $SignUpForStoreNewsletter = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param StoreCustomListingHeaderDisplayCodeType $DisplayType
     * @param boolean $Logo
     * @param boolean $SearchBox
     * @param StoreCustomListingHeaderLinkType[] $LinkToInclude
     * @param boolean $AddToFavoriteStores
     * @param boolean $SignUpForStoreNewsletter
     * @param string $any
     */
    public function __construct($DisplayType = null, $Logo = null, $SearchBox = null, array $LinkToInclude = null, $AddToFavoriteStores = null, $SignUpForStoreNewsletter = null, $any = null)
    {
      $this->DisplayType = $DisplayType;
      $this->Logo = $Logo;
      $this->SearchBox = $SearchBox;
      $this->LinkToInclude = $LinkToInclude;
      $this->AddToFavoriteStores = $AddToFavoriteStores;
      $this->SignUpForStoreNewsletter = $SignUpForStoreNewsletter;
      $this->any = $any;
    }

    /**
     * @return StoreCustomListingHeaderDisplayCodeType
     */
    public function getDisplayType()
    {
      return $this->DisplayType;
    }

    /**
     * @param StoreCustomListingHeaderDisplayCodeType $DisplayType
     * @return \EbayWsdl\StoreCustomListingHeaderType
     */
    public function setDisplayType($DisplayType)
    {
      $this->DisplayType = $DisplayType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLogo()
    {
      return $this->Logo;
    }

    /**
     * @param boolean $Logo
     * @return \EbayWsdl\StoreCustomListingHeaderType
     */
    public function setLogo($Logo)
    {
      $this->Logo = $Logo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchBox()
    {
      return $this->SearchBox;
    }

    /**
     * @param boolean $SearchBox
     * @return \EbayWsdl\StoreCustomListingHeaderType
     */
    public function setSearchBox($SearchBox)
    {
      $this->SearchBox = $SearchBox;
      return $this;
    }

    /**
     * @return StoreCustomListingHeaderLinkType[]
     */
    public function getLinkToInclude()
    {
      return $this->LinkToInclude;
    }

    /**
     * @param StoreCustomListingHeaderLinkType[] $LinkToInclude
     * @return \EbayWsdl\StoreCustomListingHeaderType
     */
    public function setLinkToInclude(array $LinkToInclude)
    {
      $this->LinkToInclude = $LinkToInclude;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAddToFavoriteStores()
    {
      return $this->AddToFavoriteStores;
    }

    /**
     * @param boolean $AddToFavoriteStores
     * @return \EbayWsdl\StoreCustomListingHeaderType
     */
    public function setAddToFavoriteStores($AddToFavoriteStores)
    {
      $this->AddToFavoriteStores = $AddToFavoriteStores;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSignUpForStoreNewsletter()
    {
      return $this->SignUpForStoreNewsletter;
    }

    /**
     * @param boolean $SignUpForStoreNewsletter
     * @return \EbayWsdl\StoreCustomListingHeaderType
     */
    public function setSignUpForStoreNewsletter($SignUpForStoreNewsletter)
    {
      $this->SignUpForStoreNewsletter = $SignUpForStoreNewsletter;
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
     * @return \EbayWsdl\StoreCustomListingHeaderType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
