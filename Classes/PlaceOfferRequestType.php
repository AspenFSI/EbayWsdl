<?php

namespace EbayWsdl\Classes;

class PlaceOfferRequestType extends AbstractRequestType
{

    /**
     * @var OfferType $Offer
     */
    protected $Offer = null;

    /**
     * @var ItemIDType $ItemID
     */
    protected $ItemID = null;

    /**
     * @var boolean $BlockOnWarning
     */
    protected $BlockOnWarning = null;

    /**
     * @var AffiliateTrackingDetailsType $AffiliateTrackingDetails
     */
    protected $AffiliateTrackingDetails = null;

    /**
     * @var NameValueListArrayType $VariationSpecifics
     */
    protected $VariationSpecifics = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param OfferType $Offer
     * @param ItemIDType $ItemID
     * @param boolean $BlockOnWarning
     * @param AffiliateTrackingDetailsType $AffiliateTrackingDetails
     * @param NameValueListArrayType $VariationSpecifics
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $Offer = null, $ItemID = null, $BlockOnWarning = null, $AffiliateTrackingDetails = null, $VariationSpecifics = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->Offer = $Offer;
      $this->ItemID = $ItemID;
      $this->BlockOnWarning = $BlockOnWarning;
      $this->AffiliateTrackingDetails = $AffiliateTrackingDetails;
      $this->VariationSpecifics = $VariationSpecifics;
    }

    /**
     * @return OfferType
     */
    public function getOffer()
    {
      return $this->Offer;
    }

    /**
     * @param OfferType $Offer
     * @return \EbayWsdl\Classes\PlaceOfferRequestType
     */
    public function setOffer($Offer)
    {
      $this->Offer = $Offer;
      return $this;
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
     * @return \EbayWsdl\Classes\PlaceOfferRequestType
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBlockOnWarning()
    {
      return $this->BlockOnWarning;
    }

    /**
     * @param boolean $BlockOnWarning
     * @return \EbayWsdl\Classes\PlaceOfferRequestType
     */
    public function setBlockOnWarning($BlockOnWarning)
    {
      $this->BlockOnWarning = $BlockOnWarning;
      return $this;
    }

    /**
     * @return AffiliateTrackingDetailsType
     */
    public function getAffiliateTrackingDetails()
    {
      return $this->AffiliateTrackingDetails;
    }

    /**
     * @param AffiliateTrackingDetailsType $AffiliateTrackingDetails
     * @return \EbayWsdl\Classes\PlaceOfferRequestType
     */
    public function setAffiliateTrackingDetails($AffiliateTrackingDetails)
    {
      $this->AffiliateTrackingDetails = $AffiliateTrackingDetails;
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
     * @return \EbayWsdl\Classes\PlaceOfferRequestType
     */
    public function setVariationSpecifics($VariationSpecifics)
    {
      $this->VariationSpecifics = $VariationSpecifics;
      return $this;
    }

}
