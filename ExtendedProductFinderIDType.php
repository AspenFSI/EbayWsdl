<?php

namespace EbayWsdl;

class ExtendedProductFinderIDType
{

    /**
     * @var int $ProductFinderID
     */
    protected $ProductFinderID = null;

    /**
     * @var boolean $ProductFinderBuySide
     */
    protected $ProductFinderBuySide = null;

    /**
     * @param int $ProductFinderID
     * @param boolean $ProductFinderBuySide
     */
    public function __construct($ProductFinderID = null, $ProductFinderBuySide = null)
    {
      $this->ProductFinderID = $ProductFinderID;
      $this->ProductFinderBuySide = $ProductFinderBuySide;
    }

    /**
     * @return int
     */
    public function getProductFinderID()
    {
      return $this->ProductFinderID;
    }

    /**
     * @param int $ProductFinderID
     * @return \EbayWsdl\ExtendedProductFinderIDType
     */
    public function setProductFinderID($ProductFinderID)
    {
      $this->ProductFinderID = $ProductFinderID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProductFinderBuySide()
    {
      return $this->ProductFinderBuySide;
    }

    /**
     * @param boolean $ProductFinderBuySide
     * @return \EbayWsdl\ExtendedProductFinderIDType
     */
    public function setProductFinderBuySide($ProductFinderBuySide)
    {
      $this->ProductFinderBuySide = $ProductFinderBuySide;
      return $this;
    }

}
