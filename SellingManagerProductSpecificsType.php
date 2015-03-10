<?php

namespace EbayWsdl;

class SellingManagerProductSpecificsType
{

    /**
     * @var string $PrimaryCategoryID
     */
    protected $PrimaryCategoryID = null;

    /**
     * @var VariationsType $Variations
     */
    protected $Variations = null;

    /**
     * @var NameValueListArrayType $ItemSpecifics
     */
    protected $ItemSpecifics = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $PrimaryCategoryID
     * @param VariationsType $Variations
     * @param NameValueListArrayType $ItemSpecifics
     * @param string $any
     */
    public function __construct($PrimaryCategoryID = null, $Variations = null, $ItemSpecifics = null, $any = null)
    {
      $this->PrimaryCategoryID = $PrimaryCategoryID;
      $this->Variations = $Variations;
      $this->ItemSpecifics = $ItemSpecifics;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getPrimaryCategoryID()
    {
      return $this->PrimaryCategoryID;
    }

    /**
     * @param string $PrimaryCategoryID
     * @return \EbayWsdl\SellingManagerProductSpecificsType
     */
    public function setPrimaryCategoryID($PrimaryCategoryID)
    {
      $this->PrimaryCategoryID = $PrimaryCategoryID;
      return $this;
    }

    /**
     * @return VariationsType
     */
    public function getVariations()
    {
      return $this->Variations;
    }

    /**
     * @param VariationsType $Variations
     * @return \EbayWsdl\SellingManagerProductSpecificsType
     */
    public function setVariations($Variations)
    {
      $this->Variations = $Variations;
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
     * @return \EbayWsdl\SellingManagerProductSpecificsType
     */
    public function setItemSpecifics($ItemSpecifics)
    {
      $this->ItemSpecifics = $ItemSpecifics;
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
     * @return \EbayWsdl\SellingManagerProductSpecificsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
