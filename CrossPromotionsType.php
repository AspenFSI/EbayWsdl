<?php

namespace EbayWsdl;

class CrossPromotionsType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var PromotionSchemeCodeType $PrimaryScheme
     */
    protected $PrimaryScheme = null;

    /**
     * @var PromotionMethodCodeType $PromotionMethod
     */
    protected $PromotionMethod = null;

    /**
     * @var string $SellerID
     */
    protected $SellerID = null;

    /**
     * @var boolean $ShippingDiscount
     */
    protected $ShippingDiscount = null;

    /**
     * @var string $StoreName
     */
    protected $StoreName = null;

    /**
     * @var PromotedItemType[] $PromotedItem
     */
    protected $PromotedItem = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemIDType $ItemID
     * @param PromotionSchemeCodeType $PrimaryScheme
     * @param PromotionMethodCodeType $PromotionMethod
     * @param string $SellerID
     * @param boolean $ShippingDiscount
     * @param string $StoreName
     * @param PromotedItemType[] $PromotedItem
     * @param string $any
     */
    public function __construct($ItemID = null, $PrimaryScheme = null, $PromotionMethod = null, $SellerID = null, $ShippingDiscount = null, $StoreName = null, array $PromotedItem = null, $any = null)
    {
      $this->ItemID = $ItemID;
      $this->PrimaryScheme = $PrimaryScheme;
      $this->PromotionMethod = $PromotionMethod;
      $this->SellerID = $SellerID;
      $this->ShippingDiscount = $ShippingDiscount;
      $this->StoreName = $StoreName;
      $this->PromotedItem = $PromotedItem;
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
     * @return \EbayWsdl\CrossPromotionsType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return PromotionSchemeCodeType
     */
    public function getPrimaryScheme()
    {
      return $this->PrimaryScheme;
    }

    /**
     * @param PromotionSchemeCodeType $PrimaryScheme
     * @return \EbayWsdl\CrossPromotionsType
     */
    public function setPrimaryScheme($PrimaryScheme)
    {
      $this->PrimaryScheme = $PrimaryScheme;
      return $this;
    }

    /**
     * @return PromotionMethodCodeType
     */
    public function getPromotionMethod()
    {
      return $this->PromotionMethod;
    }

    /**
     * @param PromotionMethodCodeType $PromotionMethod
     * @return \EbayWsdl\CrossPromotionsType
     */
    public function setPromotionMethod($PromotionMethod)
    {
      $this->PromotionMethod = $PromotionMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerID()
    {
      return $this->SellerID;
    }

    /**
     * @param string $SellerID
     * @return \EbayWsdl\CrossPromotionsType
     */
    public function setSellerID($SellerID)
    {
      $this->SellerID = $SellerID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShippingDiscount()
    {
      return $this->ShippingDiscount;
    }

    /**
     * @param boolean $ShippingDiscount
     * @return \EbayWsdl\CrossPromotionsType
     */
    public function setShippingDiscount($ShippingDiscount)
    {
      $this->ShippingDiscount = $ShippingDiscount;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreName()
    {
      return $this->StoreName;
    }

    /**
     * @param string $StoreName
     * @return \EbayWsdl\CrossPromotionsType
     */
    public function setStoreName($StoreName)
    {
      $this->StoreName = $StoreName;
      return $this;
    }

    /**
     * @return PromotedItemType[]
     */
    public function getPromotedItem()
    {
      return $this->PromotedItem;
    }

    /**
     * @param PromotedItemType[] $PromotedItem
     * @return \EbayWsdl\CrossPromotionsType
     */
    public function setPromotedItem(array $PromotedItem)
    {
      $this->PromotedItem = $PromotedItem;
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
     * @return \EbayWsdl\CrossPromotionsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
