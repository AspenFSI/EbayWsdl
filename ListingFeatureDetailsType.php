<?php

namespace EbayWsdl;

class ListingFeatureDetailsType
{

    /**
     * @var BoldTitleCodeType $BoldTitle
     */
    protected $BoldTitle = null;

    /**
     * @var BorderCodeType $Border
     */
    protected $Border = null;

    /**
     * @var HighlightCodeType $Highlight
     */
    protected $Highlight = null;

    /**
     * @var GiftIconCodeType $GiftIcon
     */
    protected $GiftIcon = null;

    /**
     * @var HomePageFeaturedCodeType $HomePageFeatured
     */
    protected $HomePageFeatured = null;

    /**
     * @var FeaturedFirstCodeType $FeaturedFirst
     */
    protected $FeaturedFirst = null;

    /**
     * @var FeaturedPlusCodeType $FeaturedPlus
     */
    protected $FeaturedPlus = null;

    /**
     * @var ProPackCodeType $ProPack
     */
    protected $ProPack = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param BoldTitleCodeType $BoldTitle
     * @param BorderCodeType $Border
     * @param HighlightCodeType $Highlight
     * @param GiftIconCodeType $GiftIcon
     * @param HomePageFeaturedCodeType $HomePageFeatured
     * @param FeaturedFirstCodeType $FeaturedFirst
     * @param FeaturedPlusCodeType $FeaturedPlus
     * @param ProPackCodeType $ProPack
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($BoldTitle = null, $Border = null, $Highlight = null, $GiftIcon = null, $HomePageFeatured = null, $FeaturedFirst = null, $FeaturedPlus = null, $ProPack = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->BoldTitle = $BoldTitle;
      $this->Border = $Border;
      $this->Highlight = $Highlight;
      $this->GiftIcon = $GiftIcon;
      $this->HomePageFeatured = $HomePageFeatured;
      $this->FeaturedFirst = $FeaturedFirst;
      $this->FeaturedPlus = $FeaturedPlus;
      $this->ProPack = $ProPack;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return BoldTitleCodeType
     */
    public function getBoldTitle()
    {
      return $this->BoldTitle;
    }

    /**
     * @param BoldTitleCodeType $BoldTitle
     * @return \EbayWsdl\ListingFeatureDetailsType
     */
    public function setBoldTitle($BoldTitle)
    {
      $this->BoldTitle = $BoldTitle;
      return $this;
    }

    /**
     * @return BorderCodeType
     */
    public function getBorder()
    {
      return $this->Border;
    }

    /**
     * @param BorderCodeType $Border
     * @return \EbayWsdl\ListingFeatureDetailsType
     */
    public function setBorder($Border)
    {
      $this->Border = $Border;
      return $this;
    }

    /**
     * @return HighlightCodeType
     */
    public function getHighlight()
    {
      return $this->Highlight;
    }

    /**
     * @param HighlightCodeType $Highlight
     * @return \EbayWsdl\ListingFeatureDetailsType
     */
    public function setHighlight($Highlight)
    {
      $this->Highlight = $Highlight;
      return $this;
    }

    /**
     * @return GiftIconCodeType
     */
    public function getGiftIcon()
    {
      return $this->GiftIcon;
    }

    /**
     * @param GiftIconCodeType $GiftIcon
     * @return \EbayWsdl\ListingFeatureDetailsType
     */
    public function setGiftIcon($GiftIcon)
    {
      $this->GiftIcon = $GiftIcon;
      return $this;
    }

    /**
     * @return HomePageFeaturedCodeType
     */
    public function getHomePageFeatured()
    {
      return $this->HomePageFeatured;
    }

    /**
     * @param HomePageFeaturedCodeType $HomePageFeatured
     * @return \EbayWsdl\ListingFeatureDetailsType
     */
    public function setHomePageFeatured($HomePageFeatured)
    {
      $this->HomePageFeatured = $HomePageFeatured;
      return $this;
    }

    /**
     * @return FeaturedFirstCodeType
     */
    public function getFeaturedFirst()
    {
      return $this->FeaturedFirst;
    }

    /**
     * @param FeaturedFirstCodeType $FeaturedFirst
     * @return \EbayWsdl\ListingFeatureDetailsType
     */
    public function setFeaturedFirst($FeaturedFirst)
    {
      $this->FeaturedFirst = $FeaturedFirst;
      return $this;
    }

    /**
     * @return FeaturedPlusCodeType
     */
    public function getFeaturedPlus()
    {
      return $this->FeaturedPlus;
    }

    /**
     * @param FeaturedPlusCodeType $FeaturedPlus
     * @return \EbayWsdl\ListingFeatureDetailsType
     */
    public function setFeaturedPlus($FeaturedPlus)
    {
      $this->FeaturedPlus = $FeaturedPlus;
      return $this;
    }

    /**
     * @return ProPackCodeType
     */
    public function getProPack()
    {
      return $this->ProPack;
    }

    /**
     * @param ProPackCodeType $ProPack
     * @return \EbayWsdl\ListingFeatureDetailsType
     */
    public function setProPack($ProPack)
    {
      $this->ProPack = $ProPack;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailVersion()
    {
      return $this->DetailVersion;
    }

    /**
     * @param string $DetailVersion
     * @return \EbayWsdl\ListingFeatureDetailsType
     */
    public function setDetailVersion($DetailVersion)
    {
      $this->DetailVersion = $DetailVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\ListingFeatureDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\ListingFeatureDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
