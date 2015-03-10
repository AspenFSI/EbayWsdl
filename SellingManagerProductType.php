<?php

namespace EbayWsdl;

class SellingManagerProductType
{

    /**
     * @var SellingManagerProductDetailsType $SellingManagerProductDetails
     */
    protected $SellingManagerProductDetails = null;

    /**
     * @var SellingManagerTemplateDetailsArrayType $SellingManagerTemplateDetailsArray
     */
    protected $SellingManagerTemplateDetailsArray = null;

    /**
     * @var SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
     */
    protected $SellingManagerProductInventoryStatus = null;

    /**
     * @var SellingManagerProductSpecificsType $SellingManagerProductSpecifics
     */
    protected $SellingManagerProductSpecifics = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SellingManagerProductDetailsType $SellingManagerProductDetails
     * @param SellingManagerTemplateDetailsArrayType $SellingManagerTemplateDetailsArray
     * @param SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
     * @param SellingManagerProductSpecificsType $SellingManagerProductSpecifics
     * @param string $any
     */
    public function __construct($SellingManagerProductDetails = null, $SellingManagerTemplateDetailsArray = null, $SellingManagerProductInventoryStatus = null, $SellingManagerProductSpecifics = null, $any = null)
    {
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
      $this->SellingManagerTemplateDetailsArray = $SellingManagerTemplateDetailsArray;
      $this->SellingManagerProductInventoryStatus = $SellingManagerProductInventoryStatus;
      $this->SellingManagerProductSpecifics = $SellingManagerProductSpecifics;
      $this->any = $any;
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
     * @return \EbayWsdl\SellingManagerProductType
     */
    public function setSellingManagerProductDetails($SellingManagerProductDetails)
    {
      $this->SellingManagerProductDetails = $SellingManagerProductDetails;
      return $this;
    }

    /**
     * @return SellingManagerTemplateDetailsArrayType
     */
    public function getSellingManagerTemplateDetailsArray()
    {
      return $this->SellingManagerTemplateDetailsArray;
    }

    /**
     * @param SellingManagerTemplateDetailsArrayType $SellingManagerTemplateDetailsArray
     * @return \EbayWsdl\SellingManagerProductType
     */
    public function setSellingManagerTemplateDetailsArray($SellingManagerTemplateDetailsArray)
    {
      $this->SellingManagerTemplateDetailsArray = $SellingManagerTemplateDetailsArray;
      return $this;
    }

    /**
     * @return SellingManagerProductInventoryStatusType
     */
    public function getSellingManagerProductInventoryStatus()
    {
      return $this->SellingManagerProductInventoryStatus;
    }

    /**
     * @param SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus
     * @return \EbayWsdl\SellingManagerProductType
     */
    public function setSellingManagerProductInventoryStatus($SellingManagerProductInventoryStatus)
    {
      $this->SellingManagerProductInventoryStatus = $SellingManagerProductInventoryStatus;
      return $this;
    }

    /**
     * @return SellingManagerProductSpecificsType
     */
    public function getSellingManagerProductSpecifics()
    {
      return $this->SellingManagerProductSpecifics;
    }

    /**
     * @param SellingManagerProductSpecificsType $SellingManagerProductSpecifics
     * @return \EbayWsdl\SellingManagerProductType
     */
    public function setSellingManagerProductSpecifics($SellingManagerProductSpecifics)
    {
      $this->SellingManagerProductSpecifics = $SellingManagerProductSpecifics;
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
     * @return \EbayWsdl\SellingManagerProductType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
