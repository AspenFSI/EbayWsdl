<?php

namespace EbayWsdl;

class ProductType
{

    /**
     * @var CharacteristicsSetType $CharacteristicsSet
     */
    protected $CharacteristicsSet = null;

    /**
     * @var anyURI $DetailsURL
     */
    protected $DetailsURL = null;

    /**
     * @var int $NumItems
     */
    protected $NumItems = null;

    /**
     * @var AmountType $MinPrice
     */
    protected $MinPrice = null;

    /**
     * @var AmountType $MaxPrice
     */
    protected $MaxPrice = null;

    /**
     * @var string $ProductReferenceID
     */
    protected $ProductReferenceID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var string $productID
     */
    protected $productID = null;

    /**
     * @var anyURI $stockPhotoURL
     */
    protected $stockPhotoURL = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @param CharacteristicsSetType $CharacteristicsSet
     * @param anyURI $DetailsURL
     * @param int $NumItems
     * @param AmountType $MinPrice
     * @param AmountType $MaxPrice
     * @param string $ProductReferenceID
     * @param string $any
     * @param string $productID
     * @param anyURI $stockPhotoURL
     * @param string $title
     */
    public function __construct($CharacteristicsSet = null, $DetailsURL = null, $NumItems = null, $MinPrice = null, $MaxPrice = null, $ProductReferenceID = null, $any = null, $productID = null, $stockPhotoURL = null, $title = null)
    {
      $this->CharacteristicsSet = $CharacteristicsSet;
      $this->DetailsURL = $DetailsURL;
      $this->NumItems = $NumItems;
      $this->MinPrice = $MinPrice;
      $this->MaxPrice = $MaxPrice;
      $this->ProductReferenceID = $ProductReferenceID;
      $this->any = $any;
      $this->productID = $productID;
      $this->stockPhotoURL = $stockPhotoURL;
      $this->title = $title;
    }

    /**
     * @return CharacteristicsSetType
     */
    public function getCharacteristicsSet()
    {
      return $this->CharacteristicsSet;
    }

    /**
     * @param CharacteristicsSetType $CharacteristicsSet
     * @return \EbayWsdl\ProductType
     */
    public function setCharacteristicsSet($CharacteristicsSet)
    {
      $this->CharacteristicsSet = $CharacteristicsSet;
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
     * @return \EbayWsdl\ProductType
     */
    public function setDetailsURL($DetailsURL)
    {
      $this->DetailsURL = $DetailsURL;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumItems()
    {
      return $this->NumItems;
    }

    /**
     * @param int $NumItems
     * @return \EbayWsdl\ProductType
     */
    public function setNumItems($NumItems)
    {
      $this->NumItems = $NumItems;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMinPrice()
    {
      return $this->MinPrice;
    }

    /**
     * @param AmountType $MinPrice
     * @return \EbayWsdl\ProductType
     */
    public function setMinPrice($MinPrice)
    {
      $this->MinPrice = $MinPrice;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMaxPrice()
    {
      return $this->MaxPrice;
    }

    /**
     * @param AmountType $MaxPrice
     * @return \EbayWsdl\ProductType
     */
    public function setMaxPrice($MaxPrice)
    {
      $this->MaxPrice = $MaxPrice;
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
     * @return \EbayWsdl\ProductType
     */
    public function setProductReferenceID($ProductReferenceID)
    {
      $this->ProductReferenceID = $ProductReferenceID;
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
     * @return \EbayWsdl\ProductType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductID()
    {
      return $this->productID;
    }

    /**
     * @param string $productID
     * @return \EbayWsdl\ProductType
     */
    public function setProductID($productID)
    {
      $this->productID = $productID;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getStockPhotoURL()
    {
      return $this->stockPhotoURL;
    }

    /**
     * @param anyURI $stockPhotoURL
     * @return \EbayWsdl\ProductType
     */
    public function setStockPhotoURL($stockPhotoURL)
    {
      $this->stockPhotoURL = $stockPhotoURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \EbayWsdl\ProductType
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

}
