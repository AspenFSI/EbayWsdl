<?php

namespace EbayWsdl;

class ItemBestOffersType
{

    /**
     * @var TradingRoleCodeType $Role
     */
    protected $Role = null;

    /**
     * @var BestOfferArrayType $BestOfferArray
     */
    protected $BestOfferArray = null;

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param TradingRoleCodeType $Role
     * @param BestOfferArrayType $BestOfferArray
     * @param ItemType $Item
     * @param string $any
     */
    public function __construct($Role = null, $BestOfferArray = null, $Item = null, $any = null)
    {
      $this->Role = $Role;
      $this->BestOfferArray = $BestOfferArray;
      $this->Item = $Item;
      $this->any = $any;
    }

    /**
     * @return TradingRoleCodeType
     */
    public function getRole()
    {
      return $this->Role;
    }

    /**
     * @param TradingRoleCodeType $Role
     * @return \EbayWsdl\ItemBestOffersType
     */
    public function setRole($Role)
    {
      $this->Role = $Role;
      return $this;
    }

    /**
     * @return BestOfferArrayType
     */
    public function getBestOfferArray()
    {
      return $this->BestOfferArray;
    }

    /**
     * @param BestOfferArrayType $BestOfferArray
     * @return \EbayWsdl\ItemBestOffersType
     */
    public function setBestOfferArray($BestOfferArray)
    {
      $this->BestOfferArray = $BestOfferArray;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ItemType $Item
     * @return \EbayWsdl\ItemBestOffersType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
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
     * @return \EbayWsdl\ItemBestOffersType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
