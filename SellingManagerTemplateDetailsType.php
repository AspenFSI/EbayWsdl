<?php

namespace EbayWsdl;

class SellingManagerTemplateDetailsType
{

    /**
     * @var string $SaleTemplateID
     */
    protected $SaleTemplateID = null;

    /**
     * @var string $SaleTemplateName
     */
    protected $SaleTemplateName = null;

    /**
     * @var float $SuccessPercent
     */
    protected $SuccessPercent = null;

    /**
     * @var SellingManagerProductDetailsType $SellingManagerProductDetails
     */
    protected $SellingManagerProductDetails = null;

    /**
     * @var ItemType $Template
     */
    protected $Template = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $SaleTemplateID
     * @param string $SaleTemplateName
     * @param float $SuccessPercent
     * @param SellingManagerProductDetailsType $SellingManagerProductDetails
     * @param ItemType $Template
     * @param string $any
     */
    public function __construct($SaleTemplateID = null, $SaleTemplateName = null, $SuccessPercent = null, $SellingManagerProductDetails = null, $Template = null, $any = null)
    {
      $this->SaleTemplateID = $SaleTemplateID;
      $this->SaleTemplateName = $SaleTemplateName;
      $this->SuccessPercent = $SuccessPercent;
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
      $this->Template = $Template;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getSaleTemplateID()
    {
      return $this->SaleTemplateID;
    }

    /**
     * @param string $SaleTemplateID
     * @return \EbayWsdl\SellingManagerTemplateDetailsType
     */
    public function setSaleTemplateID($SaleTemplateID)
    {
      $this->SaleTemplateID = $SaleTemplateID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSaleTemplateName()
    {
      return $this->SaleTemplateName;
    }

    /**
     * @param string $SaleTemplateName
     * @return \EbayWsdl\SellingManagerTemplateDetailsType
     */
    public function setSaleTemplateName($SaleTemplateName)
    {
      $this->SaleTemplateName = $SaleTemplateName;
      return $this;
    }

    /**
     * @return float
     */
    public function getSuccessPercent()
    {
      return $this->SuccessPercent;
    }

    /**
     * @param float $SuccessPercent
     * @return \EbayWsdl\SellingManagerTemplateDetailsType
     */
    public function setSuccessPercent($SuccessPercent)
    {
      $this->SuccessPercent = $SuccessPercent;
      return $this;
    }

    /**
     * @return SellingManagerProductDetailsType
     */
    public function getSellingManagerProductDetails()
    {
      return $this->SellingManagerProductDetails;
    }

    /**
     * @param SellingManagerProductDetailsType $SellingManagerProductDetails
     * @return \EbayWsdl\SellingManagerTemplateDetailsType
     */
    public function setSellingManagerProductDetails($SellingManagerProductDetails)
    {
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
      return $this;
    }

    /**
     * @return ItemType
     */
    public function getTemplate()
    {
      return $this->Template;
    }

    /**
     * @param ItemType $Template
     * @return \EbayWsdl\SellingManagerTemplateDetailsType
     */
    public function setTemplate($Template)
    {
      $this->Template = $Template;
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
     * @return \EbayWsdl\SellingManagerTemplateDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
