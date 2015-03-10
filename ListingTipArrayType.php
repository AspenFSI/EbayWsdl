<?php

namespace EbayWsdl;

class ListingTipArrayType
{

    /**
     * @var ListingTipType[] $ListingTip
     */
    protected $ListingTip = null;

    /**
     * @param ListingTipType[] $ListingTip
     */
    public function __construct(array $ListingTip = null)
    {
      $this->ListingTip = $ListingTip;
    }

    /**
     * @return ListingTipType[]
     */
    public function getListingTip()
    {
      return $this->ListingTip;
    }

    /**
     * @param ListingTipType[] $ListingTip
     * @return \EbayWsdl\ListingTipArrayType
     */
    public function setListingTip(array $ListingTip)
    {
      $this->ListingTip = $ListingTip;
      return $this;
    }

}
