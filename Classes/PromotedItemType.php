<?php

namespace EbayWsdl\Classes;

class PromotedItemType
{

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $PictureURL
     */
    protected $PictureURL = null;

    /**
     * @var int $Position
     */
    protected $Position = null;

    /**
     * @var PromotionItemSelectionCodeType $SelectionType
     */
    protected $SelectionType = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var ListingTypeCodeType $ListingType
     */
    protected $ListingType = null;

    /**
     * @var PromotionDetailsType[] $PromotionDetails
     */
    protected $PromotionDetails = null;

    /**
     * @var duration $TimeLeft
     */
    protected $TimeLeft = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemIDType $ItemID
     * @param string $PictureURL
     * @param int $Position
     * @param PromotionItemSelectionCodeType $SelectionType
     * @param string $Title
     * @param ListingTypeCodeType $ListingType
     * @param PromotionDetailsType[] $PromotionDetails
     * @param duration $TimeLeft
     * @param string $any
     */
    public function __construct($ItemID = null, $PictureURL = null, $Position = null, $SelectionType = null, $Title = null, $ListingType = null, array $PromotionDetails = null, $TimeLeft = null, $any = null)
    {
      $this->ItemID = $ItemID;
      $this->PictureURL = $PictureURL;
      $this->Position = $Position;
      $this->SelectionType = $SelectionType;
      $this->Title = $Title;
      $this->ListingType = $ListingType;
      $this->PromotionDetails = $PromotionDetails;
      $this->TimeLeft = $TimeLeft;
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
     * @return \EbayWsdl\Classes\PromotedItemType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPictureURL()
    {
      return $this->PictureURL;
    }

    /**
     * @param string $PictureURL
     * @return \EbayWsdl\Classes\PromotedItemType
     */
    public function setPictureURL($PictureURL)
    {
      $this->PictureURL = $PictureURL;
      return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param int $Position
     * @return \EbayWsdl\Classes\PromotedItemType
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
    }

    /**
     * @return PromotionItemSelectionCodeType
     */
    public function getSelectionType()
    {
      return $this->SelectionType;
    }

    /**
     * @param PromotionItemSelectionCodeType $SelectionType
     * @return \EbayWsdl\Classes\PromotedItemType
     */
    public function setSelectionType($SelectionType)
    {
      $this->SelectionType = $SelectionType;
      return $this;
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
     * @return \EbayWsdl\Classes\PromotedItemType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return ListingTypeCodeType
     */
    public function getListingType()
    {
      return $this->ListingType;
    }

    /**
     * @param ListingTypeCodeType $ListingType
     * @return \EbayWsdl\Classes\PromotedItemType
     */
    public function setListingType($ListingType)
    {
      $this->ListingType = $ListingType;
      return $this;
    }

    /**
     * @return PromotionDetailsType[]
     */
    public function getPromotionDetails()
    {
      return $this->PromotionDetails;
    }

    /**
     * @param PromotionDetailsType[] $PromotionDetails
     * @return \EbayWsdl\Classes\PromotedItemType
     */
    public function setPromotionDetails(array $PromotionDetails)
    {
      $this->PromotionDetails = $PromotionDetails;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTimeLeft()
    {
      return $this->TimeLeft;
    }

    /**
     * @param duration $TimeLeft
     * @return \EbayWsdl\Classes\PromotedItemType
     */
    public function setTimeLeft($TimeLeft)
    {
      $this->TimeLeft = $TimeLeft;
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
     * @return \EbayWsdl\Classes\PromotedItemType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
