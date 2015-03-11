<?php

namespace EbayWsdl\Classes;

class ProductListingDetailsType
{

    /**
     * @var string $ProductID
     */
    protected $ProductID = null;

    /**
     * @var boolean $IncludeStockPhotoURL
     */
    protected $IncludeStockPhotoURL = null;

    /**
     * @var boolean $IncludePrefilledItemInformation
     */
    protected $IncludePrefilledItemInformation = null;

    /**
     * @var boolean $UseStockPhotoURLAsGallery
     */
    protected $UseStockPhotoURLAsGallery = null;

    /**
     * @var anyURI $StockPhotoURL
     */
    protected $StockPhotoURL = null;

    /**
     * @var string[] $Copyright
     */
    protected $Copyright = null;

    /**
     * @var string $ProductReferenceID
     */
    protected $ProductReferenceID = null;

    /**
     * @var anyURI $DetailsURL
     */
    protected $DetailsURL = null;

    /**
     * @var anyURI $ProductDetailsURL
     */
    protected $ProductDetailsURL = null;

    /**
     * @var boolean $ReturnSearchResultOnDuplicates
     */
    protected $ReturnSearchResultOnDuplicates = null;

    /**
     * @var boolean $ListIfNoProduct
     */
    protected $ListIfNoProduct = null;

    /**
     * @var string $GTIN
     */
    protected $GTIN = null;

    /**
     * @var string $ISBN
     */
    protected $ISBN = null;

    /**
     * @var string $UPC
     */
    protected $UPC = null;

    /**
     * @var string $EAN
     */
    protected $EAN = null;

    /**
     * @var BrandMPNType $BrandMPN
     */
    protected $BrandMPN = null;

    /**
     * @var TicketListingDetailsType $TicketListingDetails
     */
    protected $TicketListingDetails = null;

    /**
     * @var boolean $UseFirstProduct
     */
    protected $UseFirstProduct = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ProductID
     * @param boolean $IncludeStockPhotoURL
     * @param boolean $IncludePrefilledItemInformation
     * @param boolean $UseStockPhotoURLAsGallery
     * @param anyURI $StockPhotoURL
     * @param string[] $Copyright
     * @param string $ProductReferenceID
     * @param anyURI $DetailsURL
     * @param anyURI $ProductDetailsURL
     * @param boolean $ReturnSearchResultOnDuplicates
     * @param boolean $ListIfNoProduct
     * @param string $GTIN
     * @param string $ISBN
     * @param string $UPC
     * @param string $EAN
     * @param BrandMPNType $BrandMPN
     * @param TicketListingDetailsType $TicketListingDetails
     * @param boolean $UseFirstProduct
     * @param string $any
     */
    public function __construct($ProductID = null, $IncludeStockPhotoURL = null, $IncludePrefilledItemInformation = null, $UseStockPhotoURLAsGallery = null, $StockPhotoURL = null, array $Copyright = null, $ProductReferenceID = null, $DetailsURL = null, $ProductDetailsURL = null, $ReturnSearchResultOnDuplicates = null, $ListIfNoProduct = null, $GTIN = null, $ISBN = null, $UPC = null, $EAN = null, $BrandMPN = null, $TicketListingDetails = null, $UseFirstProduct = null, $any = null)
    {
      $this->ProductID = $ProductID;
      $this->IncludeStockPhotoURL = $IncludeStockPhotoURL;
      $this->IncludePrefilledItemInformation = $IncludePrefilledItemInformation;
      $this->UseStockPhotoURLAsGallery = $UseStockPhotoURLAsGallery;
      $this->StockPhotoURL = $StockPhotoURL;
      $this->Copyright = $Copyright;
      $this->ProductReferenceID = $ProductReferenceID;
      $this->DetailsURL = $DetailsURL;
      $this->ProductDetailsURL = $ProductDetailsURL;
      $this->ReturnSearchResultOnDuplicates = $ReturnSearchResultOnDuplicates;
      $this->ListIfNoProduct = $ListIfNoProduct;
      $this->GTIN = $GTIN;
      $this->ISBN = $ISBN;
      $this->UPC = $UPC;
      $this->EAN = $EAN;
      $this->BrandMPN = $BrandMPN;
      $this->TicketListingDetails = $TicketListingDetails;
      $this->UseFirstProduct = $UseFirstProduct;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param string $ProductID
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeStockPhotoURL()
    {
      return $this->IncludeStockPhotoURL;
    }

    /**
     * @param boolean $IncludeStockPhotoURL
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setIncludeStockPhotoURL($IncludeStockPhotoURL)
    {
      $this->IncludeStockPhotoURL = $IncludeStockPhotoURL;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludePrefilledItemInformation()
    {
      return $this->IncludePrefilledItemInformation;
    }

    /**
     * @param boolean $IncludePrefilledItemInformation
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setIncludePrefilledItemInformation($IncludePrefilledItemInformation)
    {
      $this->IncludePrefilledItemInformation = $IncludePrefilledItemInformation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseStockPhotoURLAsGallery()
    {
      return $this->UseStockPhotoURLAsGallery;
    }

    /**
     * @param boolean $UseStockPhotoURLAsGallery
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setUseStockPhotoURLAsGallery($UseStockPhotoURLAsGallery)
    {
      $this->UseStockPhotoURLAsGallery = $UseStockPhotoURLAsGallery;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getStockPhotoURL()
    {
      return $this->StockPhotoURL;
    }

    /**
     * @param anyURI $StockPhotoURL
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setStockPhotoURL($StockPhotoURL)
    {
      $this->StockPhotoURL = $StockPhotoURL;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCopyright()
    {
      return $this->Copyright;
    }

    /**
     * @param string[] $Copyright
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setCopyright(array $Copyright)
    {
      $this->Copyright = $Copyright;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductReferenceID()
    {
      return $this->ProductReferenceID;
    }

    /**
     * @param string $ProductReferenceID
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setProductReferenceID($ProductReferenceID)
    {
      $this->ProductReferenceID = $ProductReferenceID;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDetailsURL()
    {
      return $this->DetailsURL;
    }

    /**
     * @param anyURI $DetailsURL
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setDetailsURL($DetailsURL)
    {
      $this->DetailsURL = $DetailsURL;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getProductDetailsURL()
    {
      return $this->ProductDetailsURL;
    }

    /**
     * @param anyURI $ProductDetailsURL
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setProductDetailsURL($ProductDetailsURL)
    {
      $this->ProductDetailsURL = $ProductDetailsURL;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnSearchResultOnDuplicates()
    {
      return $this->ReturnSearchResultOnDuplicates;
    }

    /**
     * @param boolean $ReturnSearchResultOnDuplicates
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setReturnSearchResultOnDuplicates($ReturnSearchResultOnDuplicates)
    {
      $this->ReturnSearchResultOnDuplicates = $ReturnSearchResultOnDuplicates;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getListIfNoProduct()
    {
      return $this->ListIfNoProduct;
    }

    /**
     * @param boolean $ListIfNoProduct
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setListIfNoProduct($ListIfNoProduct)
    {
      $this->ListIfNoProduct = $ListIfNoProduct;
      return $this;
    }

    /**
     * @return string
     */
    public function getGTIN()
    {
      return $this->GTIN;
    }

    /**
     * @param string $GTIN
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setGTIN($GTIN)
    {
      $this->GTIN = $GTIN;
      return $this;
    }

    /**
     * @return string
     */
    public function getISBN()
    {
      return $this->ISBN;
    }

    /**
     * @param string $ISBN
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setISBN($ISBN)
    {
      $this->ISBN = $ISBN;
      return $this;
    }

    /**
     * @return string
     */
    public function getUPC()
    {
      return $this->UPC;
    }

    /**
     * @param string $UPC
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setUPC($UPC)
    {
      $this->UPC = $UPC;
      return $this;
    }

    /**
     * @return string
     */
    public function getEAN()
    {
      return $this->EAN;
    }

    /**
     * @param string $EAN
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setEAN($EAN)
    {
      $this->EAN = $EAN;
      return $this;
    }

    /**
     * @return BrandMPNType
     */
    public function getBrandMPN()
    {
      return $this->BrandMPN;
    }

    /**
     * @param BrandMPNType $BrandMPN
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setBrandMPN($BrandMPN)
    {
      $this->BrandMPN = $BrandMPN;
      return $this;
    }

    /**
     * @return TicketListingDetailsType
     */
    public function getTicketListingDetails()
    {
      return $this->TicketListingDetails;
    }

    /**
     * @param TicketListingDetailsType $TicketListingDetails
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setTicketListingDetails($TicketListingDetails)
    {
      $this->TicketListingDetails = $TicketListingDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseFirstProduct()
    {
      return $this->UseFirstProduct;
    }

    /**
     * @param boolean $UseFirstProduct
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setUseFirstProduct($UseFirstProduct)
    {
      $this->UseFirstProduct = $UseFirstProduct;
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
     * @return \EbayWsdl\Classes\ProductListingDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
