<?php

namespace EbayWsdl\Classes;

class ProductSearchResultType
{

    /**
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @var string $NumProducts
     */
    protected $NumProducts = null;

    /**
     * @var ResponseAttributeSetType[] $AttributeSet
     */
    protected $AttributeSet = null;

    /**
     * @var boolean $DisplayStockPhotos
     */
    protected $DisplayStockPhotos = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ID
     * @param string $NumProducts
     * @param ResponseAttributeSetType[] $AttributeSet
     * @param boolean $DisplayStockPhotos
     * @param string $any
     */
    public function __construct($ID = null, $NumProducts = null, array $AttributeSet = null, $DisplayStockPhotos = null, $any = null)
    {
      $this->ID = $ID;
      $this->NumProducts = $NumProducts;
      $this->AttributeSet = $AttributeSet;
      $this->DisplayStockPhotos = $DisplayStockPhotos;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string $ID
     * @return \EbayWsdl\Classes\ProductSearchResultType
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumProducts()
    {
      return $this->NumProducts;
    }

    /**
     * @param string $NumProducts
     * @return \EbayWsdl\Classes\ProductSearchResultType
     */
    public function setNumProducts($NumProducts)
    {
      $this->NumProducts = $NumProducts;
      return $this;
    }

    /**
     * @return ResponseAttributeSetType[]
     */
    public function getAttributeSet()
    {
      return $this->AttributeSet;
    }

    /**
     * @param ResponseAttributeSetType[] $AttributeSet
     * @return \EbayWsdl\Classes\ProductSearchResultType
     */
    public function setAttributeSet(array $AttributeSet)
    {
      $this->AttributeSet = $AttributeSet;
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
     * @return \EbayWsdl\Classes\ProductSearchResultType
     */
    public function setDisplayStockPhotos($DisplayStockPhotos)
    {
      $this->DisplayStockPhotos = $DisplayStockPhotos;
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
     * @return \EbayWsdl\Classes\ProductSearchResultType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
