<?php

namespace EbayWsdl;

class ExpressItemRequirementsType
{

    /**
     * @var boolean $SellerExpressEligible
     */
    protected $SellerExpressEligible = null;

    /**
     * @var boolean $ExpressOptOut
     */
    protected $ExpressOptOut = null;

    /**
     * @var boolean $ExpressApproved
     */
    protected $ExpressApproved = null;

    /**
     * @var boolean $ExpressEligibleListingType
     */
    protected $ExpressEligibleListingType = null;

    /**
     * @var boolean $ExpressEnabledCategory
     */
    protected $ExpressEnabledCategory = null;

    /**
     * @var boolean $EligiblePayPalAccount
     */
    protected $EligiblePayPalAccount = null;

    /**
     * @var boolean $DomesticShippingCost
     */
    protected $DomesticShippingCost = null;

    /**
     * @var boolean $EligibleReturnPolicy
     */
    protected $EligibleReturnPolicy = null;

    /**
     * @var boolean $Picture
     */
    protected $Picture = null;

    /**
     * @var boolean $EligibleItemCondition
     */
    protected $EligibleItemCondition = null;

    /**
     * @var boolean $PriceAboveMinimum
     */
    protected $PriceAboveMinimum = null;

    /**
     * @var boolean $PriceBelowMaximum
     */
    protected $PriceBelowMaximum = null;

    /**
     * @var boolean $EligibleCheckout
     */
    protected $EligibleCheckout = null;

    /**
     * @var boolean $NoPreapprovedBidderList
     */
    protected $NoPreapprovedBidderList = null;

    /**
     * @var boolean $NoCharity
     */
    protected $NoCharity = null;

    /**
     * @var boolean $CombinedShippingDiscount
     */
    protected $CombinedShippingDiscount = null;

    /**
     * @var boolean $ShipFromEligibleCountry
     */
    protected $ShipFromEligibleCountry = null;

    /**
     * @var boolean $PayPalAccountAcceptsUnconfirmedAddress
     */
    protected $PayPalAccountAcceptsUnconfirmedAddress = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $SellerExpressEligible
     * @param boolean $ExpressOptOut
     * @param boolean $ExpressApproved
     * @param boolean $ExpressEligibleListingType
     * @param boolean $ExpressEnabledCategory
     * @param boolean $EligiblePayPalAccount
     * @param boolean $DomesticShippingCost
     * @param boolean $EligibleReturnPolicy
     * @param boolean $Picture
     * @param boolean $EligibleItemCondition
     * @param boolean $PriceAboveMinimum
     * @param boolean $PriceBelowMaximum
     * @param boolean $EligibleCheckout
     * @param boolean $NoPreapprovedBidderList
     * @param boolean $NoCharity
     * @param boolean $CombinedShippingDiscount
     * @param boolean $ShipFromEligibleCountry
     * @param boolean $PayPalAccountAcceptsUnconfirmedAddress
     * @param string $any
     */
    public function __construct($SellerExpressEligible = null, $ExpressOptOut = null, $ExpressApproved = null, $ExpressEligibleListingType = null, $ExpressEnabledCategory = null, $EligiblePayPalAccount = null, $DomesticShippingCost = null, $EligibleReturnPolicy = null, $Picture = null, $EligibleItemCondition = null, $PriceAboveMinimum = null, $PriceBelowMaximum = null, $EligibleCheckout = null, $NoPreapprovedBidderList = null, $NoCharity = null, $CombinedShippingDiscount = null, $ShipFromEligibleCountry = null, $PayPalAccountAcceptsUnconfirmedAddress = null, $any = null)
    {
      $this->SellerExpressEligible = $SellerExpressEligible;
      $this->ExpressOptOut = $ExpressOptOut;
      $this->ExpressApproved = $ExpressApproved;
      $this->ExpressEligibleListingType = $ExpressEligibleListingType;
      $this->ExpressEnabledCategory = $ExpressEnabledCategory;
      $this->EligiblePayPalAccount = $EligiblePayPalAccount;
      $this->DomesticShippingCost = $DomesticShippingCost;
      $this->EligibleReturnPolicy = $EligibleReturnPolicy;
      $this->Picture = $Picture;
      $this->EligibleItemCondition = $EligibleItemCondition;
      $this->PriceAboveMinimum = $PriceAboveMinimum;
      $this->PriceBelowMaximum = $PriceBelowMaximum;
      $this->EligibleCheckout = $EligibleCheckout;
      $this->NoPreapprovedBidderList = $NoPreapprovedBidderList;
      $this->NoCharity = $NoCharity;
      $this->CombinedShippingDiscount = $CombinedShippingDiscount;
      $this->ShipFromEligibleCountry = $ShipFromEligibleCountry;
      $this->PayPalAccountAcceptsUnconfirmedAddress = $PayPalAccountAcceptsUnconfirmedAddress;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getSellerExpressEligible()
    {
      return $this->SellerExpressEligible;
    }

    /**
     * @param boolean $SellerExpressEligible
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setSellerExpressEligible($SellerExpressEligible)
    {
      $this->SellerExpressEligible = $SellerExpressEligible;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpressOptOut()
    {
      return $this->ExpressOptOut;
    }

    /**
     * @param boolean $ExpressOptOut
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setExpressOptOut($ExpressOptOut)
    {
      $this->ExpressOptOut = $ExpressOptOut;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpressApproved()
    {
      return $this->ExpressApproved;
    }

    /**
     * @param boolean $ExpressApproved
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setExpressApproved($ExpressApproved)
    {
      $this->ExpressApproved = $ExpressApproved;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpressEligibleListingType()
    {
      return $this->ExpressEligibleListingType;
    }

    /**
     * @param boolean $ExpressEligibleListingType
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setExpressEligibleListingType($ExpressEligibleListingType)
    {
      $this->ExpressEligibleListingType = $ExpressEligibleListingType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpressEnabledCategory()
    {
      return $this->ExpressEnabledCategory;
    }

    /**
     * @param boolean $ExpressEnabledCategory
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setExpressEnabledCategory($ExpressEnabledCategory)
    {
      $this->ExpressEnabledCategory = $ExpressEnabledCategory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEligiblePayPalAccount()
    {
      return $this->EligiblePayPalAccount;
    }

    /**
     * @param boolean $EligiblePayPalAccount
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setEligiblePayPalAccount($EligiblePayPalAccount)
    {
      $this->EligiblePayPalAccount = $EligiblePayPalAccount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDomesticShippingCost()
    {
      return $this->DomesticShippingCost;
    }

    /**
     * @param boolean $DomesticShippingCost
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setDomesticShippingCost($DomesticShippingCost)
    {
      $this->DomesticShippingCost = $DomesticShippingCost;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEligibleReturnPolicy()
    {
      return $this->EligibleReturnPolicy;
    }

    /**
     * @param boolean $EligibleReturnPolicy
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setEligibleReturnPolicy($EligibleReturnPolicy)
    {
      $this->EligibleReturnPolicy = $EligibleReturnPolicy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPicture()
    {
      return $this->Picture;
    }

    /**
     * @param boolean $Picture
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setPicture($Picture)
    {
      $this->Picture = $Picture;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEligibleItemCondition()
    {
      return $this->EligibleItemCondition;
    }

    /**
     * @param boolean $EligibleItemCondition
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setEligibleItemCondition($EligibleItemCondition)
    {
      $this->EligibleItemCondition = $EligibleItemCondition;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPriceAboveMinimum()
    {
      return $this->PriceAboveMinimum;
    }

    /**
     * @param boolean $PriceAboveMinimum
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setPriceAboveMinimum($PriceAboveMinimum)
    {
      $this->PriceAboveMinimum = $PriceAboveMinimum;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPriceBelowMaximum()
    {
      return $this->PriceBelowMaximum;
    }

    /**
     * @param boolean $PriceBelowMaximum
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setPriceBelowMaximum($PriceBelowMaximum)
    {
      $this->PriceBelowMaximum = $PriceBelowMaximum;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEligibleCheckout()
    {
      return $this->EligibleCheckout;
    }

    /**
     * @param boolean $EligibleCheckout
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setEligibleCheckout($EligibleCheckout)
    {
      $this->EligibleCheckout = $EligibleCheckout;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNoPreapprovedBidderList()
    {
      return $this->NoPreapprovedBidderList;
    }

    /**
     * @param boolean $NoPreapprovedBidderList
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setNoPreapprovedBidderList($NoPreapprovedBidderList)
    {
      $this->NoPreapprovedBidderList = $NoPreapprovedBidderList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNoCharity()
    {
      return $this->NoCharity;
    }

    /**
     * @param boolean $NoCharity
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setNoCharity($NoCharity)
    {
      $this->NoCharity = $NoCharity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCombinedShippingDiscount()
    {
      return $this->CombinedShippingDiscount;
    }

    /**
     * @param boolean $CombinedShippingDiscount
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setCombinedShippingDiscount($CombinedShippingDiscount)
    {
      $this->CombinedShippingDiscount = $CombinedShippingDiscount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipFromEligibleCountry()
    {
      return $this->ShipFromEligibleCountry;
    }

    /**
     * @param boolean $ShipFromEligibleCountry
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setShipFromEligibleCountry($ShipFromEligibleCountry)
    {
      $this->ShipFromEligibleCountry = $ShipFromEligibleCountry;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPayPalAccountAcceptsUnconfirmedAddress()
    {
      return $this->PayPalAccountAcceptsUnconfirmedAddress;
    }

    /**
     * @param boolean $PayPalAccountAcceptsUnconfirmedAddress
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setPayPalAccountAcceptsUnconfirmedAddress($PayPalAccountAcceptsUnconfirmedAddress)
    {
      $this->PayPalAccountAcceptsUnconfirmedAddress = $PayPalAccountAcceptsUnconfirmedAddress;
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
     * @return \EbayWsdl\ExpressItemRequirementsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
