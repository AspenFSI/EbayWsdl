<?php

namespace EbayWsdl;

class ProductSuggestionType
{

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $EPID
     */
    protected $EPID = null;

    /**
     * @var string $StockPhoto
     */
    protected $StockPhoto = null;

    /**
     * @var boolean $Recommended
     */
    protected $Recommended = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Title
     * @param string $EPID
     * @param string $StockPhoto
     * @param boolean $Recommended
     * @param string $any
     */
    public function __construct($Title = null, $EPID = null, $StockPhoto = null, $Recommended = null, $any = null)
    {
      $this->Title = $Title;
      $this->EPID = $EPID;
      $this->StockPhoto = $StockPhoto;
      $this->Recommended = $Recommended;
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
     * @return \EbayWsdl\ProductSuggestionType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return string
     */
    public function getEPID()
    {
      return $this->EPID;
    }

    /**
     * @param string $EPID
     * @return \EbayWsdl\ProductSuggestionType
     */
    public function setEPID($EPID)
    {
      $this->EPID = $EPID;
      return $this;
    }

    /**
     * @return string
     */
    public function getStockPhoto()
    {
      return $this->StockPhoto;
    }

    /**
     * @param string $StockPhoto
     * @return \EbayWsdl\ProductSuggestionType
     */
    public function setStockPhoto($StockPhoto)
    {
      $this->StockPhoto = $StockPhoto;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRecommended()
    {
      return $this->Recommended;
    }

    /**
     * @param boolean $Recommended
     * @return \EbayWsdl\ProductSuggestionType
     */
    public function setRecommended($Recommended)
    {
      $this->Recommended = $Recommended;
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
     * @return \EbayWsdl\ProductSuggestionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
