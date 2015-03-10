<?php

namespace EbayWsdl;

class CrossPromotionPreferencesType
{

    /**
     * @var boolean $CrossPromotionEnabled
     */
    protected $CrossPromotionEnabled = null;

    /**
     * @var ItemFormatSortFilterCodeType $CrossSellItemFormatSortFilter
     */
    protected $CrossSellItemFormatSortFilter = null;

    /**
     * @var GallerySortFilterCodeType $CrossSellGallerySortFilter
     */
    protected $CrossSellGallerySortFilter = null;

    /**
     * @var ItemSortFilterCodeType $CrossSellItemSortFilter
     */
    protected $CrossSellItemSortFilter = null;

    /**
     * @var ItemFormatSortFilterCodeType $UpSellItemFormatSortFilter
     */
    protected $UpSellItemFormatSortFilter = null;

    /**
     * @var GallerySortFilterCodeType $UpSellGallerySortFilter
     */
    protected $UpSellGallerySortFilter = null;

    /**
     * @var ItemSortFilterCodeType $UpSellItemSortFilter
     */
    protected $UpSellItemSortFilter = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $CrossPromotionEnabled
     * @param ItemFormatSortFilterCodeType $CrossSellItemFormatSortFilter
     * @param GallerySortFilterCodeType $CrossSellGallerySortFilter
     * @param ItemSortFilterCodeType $CrossSellItemSortFilter
     * @param ItemFormatSortFilterCodeType $UpSellItemFormatSortFilter
     * @param GallerySortFilterCodeType $UpSellGallerySortFilter
     * @param ItemSortFilterCodeType $UpSellItemSortFilter
     * @param string $any
     */
    public function __construct($CrossPromotionEnabled = null, $CrossSellItemFormatSortFilter = null, $CrossSellGallerySortFilter = null, $CrossSellItemSortFilter = null, $UpSellItemFormatSortFilter = null, $UpSellGallerySortFilter = null, $UpSellItemSortFilter = null, $any = null)
    {
      $this->CrossPromotionEnabled = $CrossPromotionEnabled;
      $this->CrossSellItemFormatSortFilter = $CrossSellItemFormatSortFilter;
      $this->CrossSellGallerySortFilter = $CrossSellGallerySortFilter;
      $this->CrossSellItemSortFilter = $CrossSellItemSortFilter;
      $this->UpSellItemFormatSortFilter = $UpSellItemFormatSortFilter;
      $this->UpSellGallerySortFilter = $UpSellGallerySortFilter;
      $this->UpSellItemSortFilter = $UpSellItemSortFilter;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getCrossPromotionEnabled()
    {
      return $this->CrossPromotionEnabled;
    }

    /**
     * @param boolean $CrossPromotionEnabled
     * @return \EbayWsdl\CrossPromotionPreferencesType
     */
    public function setCrossPromotionEnabled($CrossPromotionEnabled)
    {
      $this->CrossPromotionEnabled = $CrossPromotionEnabled;
      return $this;
    }

    /**
     * @return ItemFormatSortFilterCodeType
     */
    public function getCrossSellItemFormatSortFilter()
    {
      return $this->CrossSellItemFormatSortFilter;
    }

    /**
     * @param ItemFormatSortFilterCodeType $CrossSellItemFormatSortFilter
     * @return \EbayWsdl\CrossPromotionPreferencesType
     */
    public function setCrossSellItemFormatSortFilter($CrossSellItemFormatSortFilter)
    {
      $this->CrossSellItemFormatSortFilter = $CrossSellItemFormatSortFilter;
      return $this;
    }

    /**
     * @return GallerySortFilterCodeType
     */
    public function getCrossSellGallerySortFilter()
    {
      return $this->CrossSellGallerySortFilter;
    }

    /**
     * @param GallerySortFilterCodeType $CrossSellGallerySortFilter
     * @return \EbayWsdl\CrossPromotionPreferencesType
     */
    public function setCrossSellGallerySortFilter($CrossSellGallerySortFilter)
    {
      $this->CrossSellGallerySortFilter = $CrossSellGallerySortFilter;
      return $this;
    }

    /**
     * @return ItemSortFilterCodeType
     */
    public function getCrossSellItemSortFilter()
    {
      return $this->CrossSellItemSortFilter;
    }

    /**
     * @param ItemSortFilterCodeType $CrossSellItemSortFilter
     * @return \EbayWsdl\CrossPromotionPreferencesType
     */
    public function setCrossSellItemSortFilter($CrossSellItemSortFilter)
    {
      $this->CrossSellItemSortFilter = $CrossSellItemSortFilter;
      return $this;
    }

    /**
     * @return ItemFormatSortFilterCodeType
     */
    public function getUpSellItemFormatSortFilter()
    {
      return $this->UpSellItemFormatSortFilter;
    }

    /**
     * @param ItemFormatSortFilterCodeType $UpSellItemFormatSortFilter
     * @return \EbayWsdl\CrossPromotionPreferencesType
     */
    public function setUpSellItemFormatSortFilter($UpSellItemFormatSortFilter)
    {
      $this->UpSellItemFormatSortFilter = $UpSellItemFormatSortFilter;
      return $this;
    }

    /**
     * @return GallerySortFilterCodeType
     */
    public function getUpSellGallerySortFilter()
    {
      return $this->UpSellGallerySortFilter;
    }

    /**
     * @param GallerySortFilterCodeType $UpSellGallerySortFilter
     * @return \EbayWsdl\CrossPromotionPreferencesType
     */
    public function setUpSellGallerySortFilter($UpSellGallerySortFilter)
    {
      $this->UpSellGallerySortFilter = $UpSellGallerySortFilter;
      return $this;
    }

    /**
     * @return ItemSortFilterCodeType
     */
    public function getUpSellItemSortFilter()
    {
      return $this->UpSellItemSortFilter;
    }

    /**
     * @param ItemSortFilterCodeType $UpSellItemSortFilter
     * @return \EbayWsdl\CrossPromotionPreferencesType
     */
    public function setUpSellItemSortFilter($UpSellItemSortFilter)
    {
      $this->UpSellItemSortFilter = $UpSellItemSortFilter;
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
     * @return \EbayWsdl\CrossPromotionPreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
