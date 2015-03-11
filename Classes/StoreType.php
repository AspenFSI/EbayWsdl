<?php

namespace EbayWsdl\Classes;

class StoreType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $URLPath
     */
    protected $URLPath = null;

    /**
     * @var anyURI $URL
     */
    protected $URL = null;

    /**
     * @var StoreSubscriptionLevelCodeType $SubscriptionLevel
     */
    protected $SubscriptionLevel = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var StoreLogoType $Logo
     */
    protected $Logo = null;

    /**
     * @var StoreThemeType $Theme
     */
    protected $Theme = null;

    /**
     * @var StoreHeaderStyleCodeType $HeaderStyle
     */
    protected $HeaderStyle = null;

    /**
     * @var int $HomePage
     */
    protected $HomePage = null;

    /**
     * @var StoreItemListLayoutCodeType $ItemListLayout
     */
    protected $ItemListLayout = null;

    /**
     * @var StoreItemListSortOrderCodeType $ItemListSortOrder
     */
    protected $ItemListSortOrder = null;

    /**
     * @var StoreCustomHeaderLayoutCodeType $CustomHeaderLayout
     */
    protected $CustomHeaderLayout = null;

    /**
     * @var string $CustomHeader
     */
    protected $CustomHeader = null;

    /**
     * @var boolean $ExportListings
     */
    protected $ExportListings = null;

    /**
     * @var StoreCustomCategoryArrayType $CustomCategories
     */
    protected $CustomCategories = null;

    /**
     * @var StoreCustomListingHeaderType $CustomListingHeader
     */
    protected $CustomListingHeader = null;

    /**
     * @var MerchDisplayCodeType $MerchDisplay
     */
    protected $MerchDisplay = null;

    /**
     * @var \DateTime $LastOpenedTime
     */
    protected $LastOpenedTime = null;

    /**
     * @var boolean $TitleWithCompatibility
     */
    protected $TitleWithCompatibility = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Name
     * @param string $URLPath
     * @param anyURI $URL
     * @param StoreSubscriptionLevelCodeType $SubscriptionLevel
     * @param string $Description
     * @param StoreLogoType $Logo
     * @param StoreThemeType $Theme
     * @param StoreHeaderStyleCodeType $HeaderStyle
     * @param int $HomePage
     * @param StoreItemListLayoutCodeType $ItemListLayout
     * @param StoreItemListSortOrderCodeType $ItemListSortOrder
     * @param StoreCustomHeaderLayoutCodeType $CustomHeaderLayout
     * @param string $CustomHeader
     * @param boolean $ExportListings
     * @param StoreCustomCategoryArrayType $CustomCategories
     * @param StoreCustomListingHeaderType $CustomListingHeader
     * @param MerchDisplayCodeType $MerchDisplay
     * @param \DateTime $LastOpenedTime
     * @param boolean $TitleWithCompatibility
     * @param string $any
     */
    public function __construct($Name = null, $URLPath = null, $URL = null, $SubscriptionLevel = null, $Description = null, $Logo = null, $Theme = null, $HeaderStyle = null, $HomePage = null, $ItemListLayout = null, $ItemListSortOrder = null, $CustomHeaderLayout = null, $CustomHeader = null, $ExportListings = null, $CustomCategories = null, $CustomListingHeader = null, $MerchDisplay = null, \DateTime $LastOpenedTime = null, $TitleWithCompatibility = null, $any = null)
    {
      $this->Name = $Name;
      $this->URLPath = $URLPath;
      $this->URL = $URL;
      $this->SubscriptionLevel = $SubscriptionLevel;
      $this->Description = $Description;
      $this->Logo = $Logo;
      $this->Theme = $Theme;
      $this->HeaderStyle = $HeaderStyle;
      $this->HomePage = $HomePage;
      $this->ItemListLayout = $ItemListLayout;
      $this->ItemListSortOrder = $ItemListSortOrder;
      $this->CustomHeaderLayout = $CustomHeaderLayout;
      $this->CustomHeader = $CustomHeader;
      $this->ExportListings = $ExportListings;
      $this->CustomCategories = $CustomCategories;
      $this->CustomListingHeader = $CustomListingHeader;
      $this->MerchDisplay = $MerchDisplay;
      $this->LastOpenedTime = $LastOpenedTime ? $LastOpenedTime->format(\DateTime::ATOM) : null;
      $this->TitleWithCompatibility = $TitleWithCompatibility;
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
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \EbayWsdl\Classes\StoreType
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
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
      return $this;
    }

    /**
     * @return StoreSubscriptionLevelCodeType
     */
    public function getSubscriptionLevel()
    {
      return $this->SubscriptionLevel;
    }

    /**
     * @param StoreSubscriptionLevelCodeType $SubscriptionLevel
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setSubscriptionLevel($SubscriptionLevel)
    {
      $this->SubscriptionLevel = $SubscriptionLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StoreLogoType
     */
    public function getLogo()
    {
      return $this->Logo;
    }

    /**
     * @param StoreLogoType $Logo
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setLogo($Logo)
    {
      $this->Logo = $Logo;
      return $this;
    }

    /**
     * @return StoreThemeType
     */
    public function getTheme()
    {
      return $this->Theme;
    }

    /**
     * @param StoreThemeType $Theme
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setTheme($Theme)
    {
      $this->Theme = $Theme;
      return $this;
    }

    /**
     * @return StoreHeaderStyleCodeType
     */
    public function getHeaderStyle()
    {
      return $this->HeaderStyle;
    }

    /**
     * @param StoreHeaderStyleCodeType $HeaderStyle
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setHeaderStyle($HeaderStyle)
    {
      $this->HeaderStyle = $HeaderStyle;
      return $this;
    }

    /**
     * @return int
     */
    public function getHomePage()
    {
      return $this->HomePage;
    }

    /**
     * @param int $HomePage
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setHomePage($HomePage)
    {
      $this->HomePage = $HomePage;
      return $this;
    }

    /**
     * @return StoreItemListLayoutCodeType
     */
    public function getItemListLayout()
    {
      return $this->ItemListLayout;
    }

    /**
     * @param StoreItemListLayoutCodeType $ItemListLayout
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setItemListLayout($ItemListLayout)
    {
      $this->ItemListLayout = $ItemListLayout;
      return $this;
    }

    /**
     * @return StoreItemListSortOrderCodeType
     */
    public function getItemListSortOrder()
    {
      return $this->ItemListSortOrder;
    }

    /**
     * @param StoreItemListSortOrderCodeType $ItemListSortOrder
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setItemListSortOrder($ItemListSortOrder)
    {
      $this->ItemListSortOrder = $ItemListSortOrder;
      return $this;
    }

    /**
     * @return StoreCustomHeaderLayoutCodeType
     */
    public function getCustomHeaderLayout()
    {
      return $this->CustomHeaderLayout;
    }

    /**
     * @param StoreCustomHeaderLayoutCodeType $CustomHeaderLayout
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setCustomHeaderLayout($CustomHeaderLayout)
    {
      $this->CustomHeaderLayout = $CustomHeaderLayout;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomHeader()
    {
      return $this->CustomHeader;
    }

    /**
     * @param string $CustomHeader
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setCustomHeader($CustomHeader)
    {
      $this->CustomHeader = $CustomHeader;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExportListings()
    {
      return $this->ExportListings;
    }

    /**
     * @param boolean $ExportListings
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setExportListings($ExportListings)
    {
      $this->ExportListings = $ExportListings;
      return $this;
    }

    /**
     * @return StoreCustomCategoryArrayType
     */
    public function getCustomCategories()
    {
      return $this->CustomCategories;
    }

    /**
     * @param StoreCustomCategoryArrayType $CustomCategories
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setCustomCategories($CustomCategories)
    {
      $this->CustomCategories = $CustomCategories;
      return $this;
    }

    /**
     * @return StoreCustomListingHeaderType
     */
    public function getCustomListingHeader()
    {
      return $this->CustomListingHeader;
    }

    /**
     * @param StoreCustomListingHeaderType $CustomListingHeader
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setCustomListingHeader($CustomListingHeader)
    {
      $this->CustomListingHeader = $CustomListingHeader;
      return $this;
    }

    /**
     * @return MerchDisplayCodeType
     */
    public function getMerchDisplay()
    {
      return $this->MerchDisplay;
    }

    /**
     * @param MerchDisplayCodeType $MerchDisplay
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setMerchDisplay($MerchDisplay)
    {
      $this->MerchDisplay = $MerchDisplay;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastOpenedTime()
    {
      if ($this->LastOpenedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastOpenedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastOpenedTime
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setLastOpenedTime(\DateTime $LastOpenedTime)
    {
      $this->LastOpenedTime = $LastOpenedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTitleWithCompatibility()
    {
      return $this->TitleWithCompatibility;
    }

    /**
     * @param boolean $TitleWithCompatibility
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setTitleWithCompatibility($TitleWithCompatibility)
    {
      $this->TitleWithCompatibility = $TitleWithCompatibility;
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
     * @return \EbayWsdl\Classes\StoreType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
