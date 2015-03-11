<?php

namespace EbayWsdl\Classes;

class CatalogProductType
{

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var anyURI $DetailsURL
     */
    protected $DetailsURL = null;

    /**
     * @var anyURI $StockPhotoURL
     */
    protected $StockPhotoURL = null;

    /**
     * @var boolean $DisplayStockPhotos
     */
    protected $DisplayStockPhotos = null;

    /**
     * @var int $ItemCount
     */
    protected $ItemCount = null;

    /**
     * @var ExternalProductIDType $ExternalProductID
     */
    protected $ExternalProductID = null;

    /**
     * @var int $ProductReferenceID
     */
    protected $ProductReferenceID = null;

    /**
     * @var int $AttributeSetID
     */
    protected $AttributeSetID = null;

    /**
     * @var NameValueListArrayType $ItemSpecifics
     */
    protected $ItemSpecifics = null;

    /**
     * @var int $ReviewCount
     */
    protected $ReviewCount = null;

    /**
     * @var ReviewDetailsType $ReviewDetails
     */
    protected $ReviewDetails = null;

    /**
     * @var ProductStateCodeType $ProductState
     */
    protected $ProductState = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Title
     * @param anyURI $DetailsURL
     * @param anyURI $StockPhotoURL
     * @param boolean $DisplayStockPhotos
     * @param int $ItemCount
     * @param ExternalProductIDType $ExternalProductID
     * @param int $ProductReferenceID
     * @param int $AttributeSetID
     * @param NameValueListArrayType $ItemSpecifics
     * @param int $ReviewCount
     * @param ReviewDetailsType $ReviewDetails
     * @param ProductStateCodeType $ProductState
     * @param string $any
     */
    public function __construct($Title = null, $DetailsURL = null, $StockPhotoURL = null, $DisplayStockPhotos = null, $ItemCount = null, $ExternalProductID = null, $ProductReferenceID = null, $AttributeSetID = null, $ItemSpecifics = null, $ReviewCount = null, $ReviewDetails = null, $ProductState = null, $any = null)
    {
      $this->Title = $Title;
      $this->DetailsURL = $DetailsURL;
      $this->StockPhotoURL = $StockPhotoURL;
      $this->DisplayStockPhotos = $DisplayStockPhotos;
      $this->ItemCount = $ItemCount;
      $this->ExternalProductID = $ExternalProductID;
      $this->ProductReferenceID = $ProductReferenceID;
      $this->AttributeSetID = $AttributeSetID;
      $this->ItemSpecifics = $ItemSpecifics;
      $this->ReviewCount = $ReviewCount;
      $this->ReviewDetails = $ReviewDetails;
      $this->ProductState = $ProductState;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
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
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setDetailsURL($DetailsURL)
    {
      $this->DetailsURL = $DetailsURL;
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
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setStockPhotoURL($StockPhotoURL)
    {
      $this->StockPhotoURL = $StockPhotoURL;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayStockPhotos()
    {
      return $this->DisplayStockPhotos;
    }

    /**
     * @param boolean $DisplayStockPhotos
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setDisplayStockPhotos($DisplayStockPhotos)
    {
      $this->DisplayStockPhotos = $DisplayStockPhotos;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemCount()
    {
      return $this->ItemCount;
    }

    /**
     * @param int $ItemCount
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setItemCount($ItemCount)
    {
      $this->ItemCount = $ItemCount;
      return $this;
    }

    /**
     * @return ExternalProductIDType
     */
    public function getExternalProductID()
    {
      return $this->ExternalProductID;
    }

    /**
     * @param ExternalProductIDType $ExternalProductID
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setExternalProductID($ExternalProductID)
    {
      $this->ExternalProductID = $ExternalProductID;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductReferenceID()
    {
      return $this->ProductReferenceID;
    }

    /**
     * @param int $ProductReferenceID
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setProductReferenceID($ProductReferenceID)
    {
      $this->ProductReferenceID = $ProductReferenceID;
      return $this;
    }

    /**
     * @return int
     */
    public function getAttributeSetID()
    {
      return $this->AttributeSetID;
    }

    /**
     * @param int $AttributeSetID
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setAttributeSetID($AttributeSetID)
    {
      $this->AttributeSetID = $AttributeSetID;
      return $this;
    }

    /**
     * @return NameValueListArrayType
     */
    public function getItemSpecifics()
    {
      return $this->ItemSpecifics;
    }

    /**
     * @param NameValueListArrayType $ItemSpecifics
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setItemSpecifics($ItemSpecifics)
    {
      $this->ItemSpecifics = $ItemSpecifics;
      return $this;
    }

    /**
     * @return int
     */
    public function getReviewCount()
    {
      return $this->ReviewCount;
    }

    /**
     * @param int $ReviewCount
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setReviewCount($ReviewCount)
    {
      $this->ReviewCount = $ReviewCount;
      return $this;
    }

    /**
     * @return ReviewDetailsType
     */
    public function getReviewDetails()
    {
      return $this->ReviewDetails;
    }

    /**
     * @param ReviewDetailsType $ReviewDetails
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setReviewDetails($ReviewDetails)
    {
      $this->ReviewDetails = $ReviewDetails;
      return $this;
    }

    /**
     * @return ProductStateCodeType
     */
    public function getProductState()
    {
      return $this->ProductState;
    }

    /**
     * @param ProductStateCodeType $ProductState
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setProductState($ProductState)
    {
      $this->ProductState = $ProductState;
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
     * @return \EbayWsdl\Classes\CatalogProductType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
