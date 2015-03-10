<?php

namespace EbayWsdl;

class SellerDiscountType
{

    /**
     * @var int $CampaignID
     */
    protected $CampaignID = null;

    /**
     * @var string $CampaignDisplayName
     */
    protected $CampaignDisplayName = null;

    /**
     * @var AmountType $ItemDiscountAmount
     */
    protected $ItemDiscountAmount = null;

    /**
     * @var AmountType $ShippingDiscountAmount
     */
    protected $ShippingDiscountAmount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $CampaignID
     * @param string $CampaignDisplayName
     * @param AmountType $ItemDiscountAmount
     * @param AmountType $ShippingDiscountAmount
     * @param string $any
     */
    public function __construct($CampaignID = null, $CampaignDisplayName = null, $ItemDiscountAmount = null, $ShippingDiscountAmount = null, $any = null)
    {
      $this->CampaignID = $CampaignID;
      $this->CampaignDisplayName = $CampaignDisplayName;
      $this->ItemDiscountAmount = $ItemDiscountAmount;
      $this->ShippingDiscountAmount = $ShippingDiscountAmount;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getCampaignID()
    {
      return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return \EbayWsdl\SellerDiscountType
     */
    public function setCampaignID($CampaignID)
    {
      $this->CampaignID = $CampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignDisplayName()
    {
      return $this->CampaignDisplayName;
    }

    /**
     * @param string $CampaignDisplayName
     * @return \EbayWsdl\SellerDiscountType
     */
    public function setCampaignDisplayName($CampaignDisplayName)
    {
      $this->CampaignDisplayName = $CampaignDisplayName;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getItemDiscountAmount()
    {
      return $this->ItemDiscountAmount;
    }

    /**
     * @param AmountType $ItemDiscountAmount
     * @return \EbayWsdl\SellerDiscountType
     */
    public function setItemDiscountAmount($ItemDiscountAmount)
    {
      $this->ItemDiscountAmount = $ItemDiscountAmount;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getShippingDiscountAmount()
    {
      return $this->ShippingDiscountAmount;
    }

    /**
     * @param AmountType $ShippingDiscountAmount
     * @return \EbayWsdl\SellerDiscountType
     */
    public function setShippingDiscountAmount($ShippingDiscountAmount)
    {
      $this->ShippingDiscountAmount = $ShippingDiscountAmount;
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
     * @return \EbayWsdl\SellerDiscountType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
