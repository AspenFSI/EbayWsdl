<?php

namespace EbayWsdl\Classes;

class VariationKeyType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var NameValueListArrayType $VariationSpecifics
     */
    protected $VariationSpecifics = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemIDType $ItemID
     * @param NameValueListArrayType $VariationSpecifics
     * @param string $any
     */
    public function __construct($ItemID = null, $VariationSpecifics = null, $any = null)
    {
      $this->ItemID = $ItemID;
      $this->VariationSpecifics = $VariationSpecifics;
      $this->any = $any;
    }

    /**
     * @return ItemIDType
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType $ItemID
     * @return \EbayWsdl\Classes\VariationKeyType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return NameValueListArrayType
     */
    public function getVariationSpecifics()
    {
      return $this->VariationSpecifics;
    }

    /**
     * @param NameValueListArrayType $VariationSpecifics
     * @return \EbayWsdl\Classes\VariationKeyType
     */
    public function setVariationSpecifics($VariationSpecifics)
    {
      $this->VariationSpecifics = $VariationSpecifics;
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
     * @return \EbayWsdl\Classes\VariationKeyType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
