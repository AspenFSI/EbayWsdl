<?php

namespace EbayWsdl\Classes;

class ItemBestOffersArrayType
{

    /**
     * @var ItemBestOffersType[] $ItemBestOffers
     */
    protected $ItemBestOffers = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemBestOffersType[] $ItemBestOffers
     * @param string $any
     */
    public function __construct(array $ItemBestOffers = null, $any = null)
    {
      $this->ItemBestOffers = $ItemBestOffers;
      $this->any = $any;
    }

    /**
     * @return ItemBestOffersType[]
     */
    public function getItemBestOffers()
    {
      return $this->ItemBestOffers;
    }

    /**
     * @param ItemBestOffersType[] $ItemBestOffers
     * @return \EbayWsdl\Classes\ItemBestOffersArrayType
     */
    public function setItemBestOffers(array $ItemBestOffers)
    {
      $this->ItemBestOffers = $ItemBestOffers;
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
     * @return \EbayWsdl\Classes\ItemBestOffersArrayType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
