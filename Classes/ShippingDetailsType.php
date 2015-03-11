<?php

namespace EbayWsdl\Classes;

class ShippingDetailsType
{

    /**
     * @var boolean $AllowPaymentEdit
     */
    protected $AllowPaymentEdit = null;

    /**
     * @var boolean $ApplyShippingDiscount
     */
    protected $ApplyShippingDiscount = null;

    /**
     * @var boolean $GlobalShipping
     */
    protected $GlobalShipping = null;

    /**
     * @var CalculatedShippingRateType $CalculatedShippingRate
     */
    protected $CalculatedShippingRate = null;

    /**
     * @var boolean $ChangePaymentInstructions
     */
    protected $ChangePaymentInstructions = null;

    /**
     * @var AmountType $InsuranceFee
     */
    protected $InsuranceFee = null;

    /**
     * @var InsuranceOptionCodeType $InsuranceOption
     */
    protected $InsuranceOption = null;

    /**
     * @var boolean $InsuranceWanted
     */
    protected $InsuranceWanted = null;

    /**
     * @var boolean $PaymentEdited
     */
    protected $PaymentEdited = null;

    /**
     * @var string $PaymentInstructions
     */
    protected $PaymentInstructions = null;

    /**
     * @var SalesTaxType $SalesTax
     */
    protected $SalesTax = null;

    /**
     * @var string $ShippingRateErrorMessage
     */
    protected $ShippingRateErrorMessage = null;

    /**
     * @var ShippingRateTypeCodeType $ShippingRateType
     */
    protected $ShippingRateType = null;

    /**
     * @var ShippingServiceOptionsType[] $ShippingServiceOptions
     */
    protected $ShippingServiceOptions = null;

    /**
     * @var InternationalShippingServiceOptionsType[] $InternationalShippingServiceOption
     */
    protected $InternationalShippingServiceOption = null;

    /**
     * @var ShippingTypeCodeType $ShippingType
     */
    protected $ShippingType = null;

    /**
     * @var int $SellingManagerSalesRecordNumber
     */
    protected $SellingManagerSalesRecordNumber = null;

    /**
     * @var boolean $ThirdPartyCheckout
     */
    protected $ThirdPartyCheckout = null;

    /**
     * @var TaxTableType $TaxTable
     */
    protected $TaxTable = null;

    /**
     * @var boolean $GetItFast
     */
    protected $GetItFast = null;

    /**
     * @var string $ShippingServiceUsed
     */
    protected $ShippingServiceUsed = null;

    /**
     * @var AmountType $DefaultShippingCost
     */
    protected $DefaultShippingCost = null;

    /**
     * @var InsuranceDetailsType $InsuranceDetails
     */
    protected $InsuranceDetails = null;

    /**
     * @var InsuranceDetailsType $InternationalInsuranceDetails
     */
    protected $InternationalInsuranceDetails = null;

    /**
     * @var string $ShippingDiscountProfileID
     */
    protected $ShippingDiscountProfileID = null;

    /**
     * @var FlatShippingDiscountType $FlatShippingDiscount
     */
    protected $FlatShippingDiscount = null;

    /**
     * @var CalculatedShippingDiscountType $CalculatedShippingDiscount
     */
    protected $CalculatedShippingDiscount = null;

    /**
     * @var boolean $PromotionalShippingDiscount
     */
    protected $PromotionalShippingDiscount = null;

    /**
     * @var string $InternationalShippingDiscountProfileID
     */
    protected $InternationalShippingDiscountProfileID = null;

    /**
     * @var FlatShippingDiscountType $InternationalFlatShippingDiscount
     */
    protected $InternationalFlatShippingDiscount = null;

    /**
     * @var CalculatedShippingDiscountType $InternationalCalculatedShippingDiscount
     */
    protected $InternationalCalculatedShippingDiscount = null;

    /**
     * @var boolean $InternationalPromotionalShippingDiscount
     */
    protected $InternationalPromotionalShippingDiscount = null;

    /**
     * @var PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
     */
    protected $PromotionalShippingDiscountDetails = null;

    /**
     * @var AmountType $CODCost
     */
    protected $CODCost = null;

    /**
     * @var string[] $ExcludeShipToLocation
     */
    protected $ExcludeShipToLocation = null;

    /**
     * @var boolean $SellerExcludeShipToLocationsPreference
     */
    protected $SellerExcludeShipToLocationsPreference = null;

    /**
     * @var ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
     */
    protected $ShipmentTrackingDetails = null;

    /**
     * @var RateTableDetailsType $RateTableDetails
     */
    protected $RateTableDetails = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $AllowPaymentEdit
     * @param boolean $ApplyShippingDiscount
     * @param boolean $GlobalShipping
     * @param CalculatedShippingRateType $CalculatedShippingRate
     * @param boolean $ChangePaymentInstructions
     * @param AmountType $InsuranceFee
     * @param InsuranceOptionCodeType $InsuranceOption
     * @param boolean $InsuranceWanted
     * @param boolean $PaymentEdited
     * @param string $PaymentInstructions
     * @param SalesTaxType $SalesTax
     * @param string $ShippingRateErrorMessage
     * @param ShippingRateTypeCodeType $ShippingRateType
     * @param ShippingServiceOptionsType[] $ShippingServiceOptions
     * @param InternationalShippingServiceOptionsType[] $InternationalShippingServiceOption
     * @param ShippingTypeCodeType $ShippingType
     * @param int $SellingManagerSalesRecordNumber
     * @param boolean $ThirdPartyCheckout
     * @param TaxTableType $TaxTable
     * @param boolean $GetItFast
     * @param string $ShippingServiceUsed
     * @param AmountType $DefaultShippingCost
     * @param InsuranceDetailsType $InsuranceDetails
     * @param InsuranceDetailsType $InternationalInsuranceDetails
     * @param string $ShippingDiscountProfileID
     * @param FlatShippingDiscountType $FlatShippingDiscount
     * @param CalculatedShippingDiscountType $CalculatedShippingDiscount
     * @param boolean $PromotionalShippingDiscount
     * @param string $InternationalShippingDiscountProfileID
     * @param FlatShippingDiscountType $InternationalFlatShippingDiscount
     * @param CalculatedShippingDiscountType $InternationalCalculatedShippingDiscount
     * @param boolean $InternationalPromotionalShippingDiscount
     * @param PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
     * @param AmountType $CODCost
     * @param string[] $ExcludeShipToLocation
     * @param boolean $SellerExcludeShipToLocationsPreference
     * @param ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
     * @param RateTableDetailsType $RateTableDetails
     * @param string $any
     */
    public function __construct($AllowPaymentEdit = null, $ApplyShippingDiscount = null, $GlobalShipping = null, $CalculatedShippingRate = null, $ChangePaymentInstructions = null, $InsuranceFee = null, $InsuranceOption = null, $InsuranceWanted = null, $PaymentEdited = null, $PaymentInstructions = null, $SalesTax = null, $ShippingRateErrorMessage = null, $ShippingRateType = null, array $ShippingServiceOptions = null, array $InternationalShippingServiceOption = null, $ShippingType = null, $SellingManagerSalesRecordNumber = null, $ThirdPartyCheckout = null, $TaxTable = null, $GetItFast = null, $ShippingServiceUsed = null, $DefaultShippingCost = null, $InsuranceDetails = null, $InternationalInsuranceDetails = null, $ShippingDiscountProfileID = null, $FlatShippingDiscount = null, $CalculatedShippingDiscount = null, $PromotionalShippingDiscount = null, $InternationalShippingDiscountProfileID = null, $InternationalFlatShippingDiscount = null, $InternationalCalculatedShippingDiscount = null, $InternationalPromotionalShippingDiscount = null, $PromotionalShippingDiscountDetails = null, $CODCost = null, array $ExcludeShipToLocation = null, $SellerExcludeShipToLocationsPreference = null, array $ShipmentTrackingDetails = null, $RateTableDetails = null, $any = null)
    {
      $this->AllowPaymentEdit = $AllowPaymentEdit;
      $this->ApplyShippingDiscount = $ApplyShippingDiscount;
      $this->GlobalShipping = $GlobalShipping;
      $this->CalculatedShippingRate = $CalculatedShippingRate;
      $this->ChangePaymentInstructions = $ChangePaymentInstructions;
      $this->InsuranceFee = $InsuranceFee;
      $this->InsuranceOption = $InsuranceOption;
      $this->InsuranceWanted = $InsuranceWanted;
      $this->PaymentEdited = $PaymentEdited;
      $this->PaymentInstructions = $PaymentInstructions;
      $this->SalesTax = $SalesTax;
      $this->ShippingRateErrorMessage = $ShippingRateErrorMessage;
      $this->ShippingRateType = $ShippingRateType;
      $this->ShippingServiceOptions = $ShippingServiceOptions;
      $this->InternationalShippingServiceOption = $InternationalShippingServiceOption;
      $this->ShippingType = $ShippingType;
      $this->SellingManagerSalesRecordNumber = $SellingManagerSalesRecordNumber;
      $this->ThirdPartyCheckout = $ThirdPartyCheckout;
      $this->TaxTable = $TaxTable;
      $this->GetItFast = $GetItFast;
      $this->ShippingServiceUsed = $ShippingServiceUsed;
      $this->DefaultShippingCost = $DefaultShippingCost;
      $this->InsuranceDetails = $InsuranceDetails;
      $this->InternationalInsuranceDetails = $InternationalInsuranceDetails;
      $this->ShippingDiscountProfileID = $ShippingDiscountProfileID;
      $this->FlatShippingDiscount = $FlatShippingDiscount;
      $this->CalculatedShippingDiscount = $CalculatedShippingDiscount;
      $this->PromotionalShippingDiscount = $PromotionalShippingDiscount;
      $this->InternationalShippingDiscountProfileID = $InternationalShippingDiscountProfileID;
      $this->InternationalFlatShippingDiscount = $InternationalFlatShippingDiscount;
      $this->InternationalCalculatedShippingDiscount = $InternationalCalculatedShippingDiscount;
      $this->InternationalPromotionalShippingDiscount = $InternationalPromotionalShippingDiscount;
      $this->PromotionalShippingDiscountDetails = $PromotionalShippingDiscountDetails;
      $this->CODCost = $CODCost;
      $this->ExcludeShipToLocation = $ExcludeShipToLocation;
      $this->SellerExcludeShipToLocationsPreference = $SellerExcludeShipToLocationsPreference;
      $this->ShipmentTrackingDetails = $ShipmentTrackingDetails;
      $this->RateTableDetails = $RateTableDetails;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getAllowPaymentEdit()
    {
      return $this->AllowPaymentEdit;
    }

    /**
     * @param boolean $AllowPaymentEdit
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setAllowPaymentEdit($AllowPaymentEdit)
    {
      $this->AllowPaymentEdit = $AllowPaymentEdit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyShippingDiscount()
    {
      return $this->ApplyShippingDiscount;
    }

    /**
     * @param boolean $ApplyShippingDiscount
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setApplyShippingDiscount($ApplyShippingDiscount)
    {
      $this->ApplyShippingDiscount = $ApplyShippingDiscount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGlobalShipping()
    {
      return $this->GlobalShipping;
    }

    /**
     * @param boolean $GlobalShipping
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setGlobalShipping($GlobalShipping)
    {
      $this->GlobalShipping = $GlobalShipping;
      return $this;
    }

    /**
     * @return CalculatedShippingRateType
     */
    public function getCalculatedShippingRate()
    {
      return $this->CalculatedShippingRate;
    }

    /**
     * @param CalculatedShippingRateType $CalculatedShippingRate
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setCalculatedShippingRate($CalculatedShippingRate)
    {
      $this->CalculatedShippingRate = $CalculatedShippingRate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChangePaymentInstructions()
    {
      return $this->ChangePaymentInstructions;
    }

    /**
     * @param boolean $ChangePaymentInstructions
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setChangePaymentInstructions($ChangePaymentInstructions)
    {
      $this->ChangePaymentInstructions = $ChangePaymentInstructions;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getInsuranceFee()
    {
      return $this->InsuranceFee;
    }

    /**
     * @param AmountType $InsuranceFee
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setInsuranceFee($InsuranceFee)
    {
      $this->InsuranceFee = $InsuranceFee;
      return $this;
    }

    /**
     * @return InsuranceOptionCodeType
     */
    public function getInsuranceOption()
    {
      return $this->InsuranceOption;
    }

    /**
     * @param InsuranceOptionCodeType $InsuranceOption
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setInsuranceOption($InsuranceOption)
    {
      $this->InsuranceOption = $InsuranceOption;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInsuranceWanted()
    {
      return $this->InsuranceWanted;
    }

    /**
     * @param boolean $InsuranceWanted
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setInsuranceWanted($InsuranceWanted)
    {
      $this->InsuranceWanted = $InsuranceWanted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaymentEdited()
    {
      return $this->PaymentEdited;
    }

    /**
     * @param boolean $PaymentEdited
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setPaymentEdited($PaymentEdited)
    {
      $this->PaymentEdited = $PaymentEdited;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentInstructions()
    {
      return $this->PaymentInstructions;
    }

    /**
     * @param string $PaymentInstructions
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setPaymentInstructions($PaymentInstructions)
    {
      $this->PaymentInstructions = $PaymentInstructions;
      return $this;
    }

    /**
     * @return SalesTaxType
     */
    public function getSalesTax()
    {
      return $this->SalesTax;
    }

    /**
     * @param SalesTaxType $SalesTax
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setSalesTax($SalesTax)
    {
      $this->SalesTax = $SalesTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingRateErrorMessage()
    {
      return $this->ShippingRateErrorMessage;
    }

    /**
     * @param string $ShippingRateErrorMessage
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setShippingRateErrorMessage($ShippingRateErrorMessage)
    {
      $this->ShippingRateErrorMessage = $ShippingRateErrorMessage;
      return $this;
    }

    /**
     * @return ShippingRateTypeCodeType
     */
    public function getShippingRateType()
    {
      return $this->ShippingRateType;
    }

    /**
     * @param ShippingRateTypeCodeType $ShippingRateType
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setShippingRateType($ShippingRateType)
    {
      $this->ShippingRateType = $ShippingRateType;
      return $this;
    }

    /**
     * @return ShippingServiceOptionsType[]
     */
    public function getShippingServiceOptions()
    {
      return $this->ShippingServiceOptions;
    }

    /**
     * @param ShippingServiceOptionsType[] $ShippingServiceOptions
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setShippingServiceOptions(array $ShippingServiceOptions)
    {
      $this->ShippingServiceOptions = $ShippingServiceOptions;
      return $this;
    }

    /**
     * @return InternationalShippingServiceOptionsType[]
     */
    public function getInternationalShippingServiceOption()
    {
      return $this->InternationalShippingServiceOption;
    }

    /**
     * @param InternationalShippingServiceOptionsType[] $InternationalShippingServiceOption
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setInternationalShippingServiceOption(array $InternationalShippingServiceOption)
    {
      $this->InternationalShippingServiceOption = $InternationalShippingServiceOption;
      return $this;
    }

    /**
     * @return ShippingTypeCodeType
     */
    public function getShippingType()
    {
      return $this->ShippingType;
    }

    /**
     * @param ShippingTypeCodeType $ShippingType
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setShippingType($ShippingType)
    {
      $this->ShippingType = $ShippingType;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellingManagerSalesRecordNumber()
    {
      return $this->SellingManagerSalesRecordNumber;
    }

    /**
     * @param int $SellingManagerSalesRecordNumber
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setSellingManagerSalesRecordNumber($SellingManagerSalesRecordNumber)
    {
      $this->SellingManagerSalesRecordNumber = $SellingManagerSalesRecordNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThirdPartyCheckout()
    {
      return $this->ThirdPartyCheckout;
    }

    /**
     * @param boolean $ThirdPartyCheckout
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setThirdPartyCheckout($ThirdPartyCheckout)
    {
      $this->ThirdPartyCheckout = $ThirdPartyCheckout;
      return $this;
    }

    /**
     * @return TaxTableType
     */
    public function getTaxTable()
    {
      return $this->TaxTable;
    }

    /**
     * @param TaxTableType $TaxTable
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setTaxTable($TaxTable)
    {
      $this->TaxTable = $TaxTable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGetItFast()
    {
      return $this->GetItFast;
    }

    /**
     * @param boolean $GetItFast
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setGetItFast($GetItFast)
    {
      $this->GetItFast = $GetItFast;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingServiceUsed()
    {
      return $this->ShippingServiceUsed;
    }

    /**
     * @param string $ShippingServiceUsed
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setShippingServiceUsed($ShippingServiceUsed)
    {
      $this->ShippingServiceUsed = $ShippingServiceUsed;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getDefaultShippingCost()
    {
      return $this->DefaultShippingCost;
    }

    /**
     * @param AmountType $DefaultShippingCost
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setDefaultShippingCost($DefaultShippingCost)
    {
      $this->DefaultShippingCost = $DefaultShippingCost;
      return $this;
    }

    /**
     * @return InsuranceDetailsType
     */
    public function getInsuranceDetails()
    {
      return $this->InsuranceDetails;
    }

    /**
     * @param InsuranceDetailsType $InsuranceDetails
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setInsuranceDetails($InsuranceDetails)
    {
      $this->InsuranceDetails = $InsuranceDetails;
      return $this;
    }

    /**
     * @return InsuranceDetailsType
     */
    public function getInternationalInsuranceDetails()
    {
      return $this->InternationalInsuranceDetails;
    }

    /**
     * @param InsuranceDetailsType $InternationalInsuranceDetails
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setInternationalInsuranceDetails($InternationalInsuranceDetails)
    {
      $this->InternationalInsuranceDetails = $InternationalInsuranceDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingDiscountProfileID()
    {
      return $this->ShippingDiscountProfileID;
    }

    /**
     * @param string $ShippingDiscountProfileID
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setShippingDiscountProfileID($ShippingDiscountProfileID)
    {
      $this->ShippingDiscountProfileID = $ShippingDiscountProfileID;
      return $this;
    }

    /**
     * @return FlatShippingDiscountType
     */
    public function getFlatShippingDiscount()
    {
      return $this->FlatShippingDiscount;
    }

    /**
     * @param FlatShippingDiscountType $FlatShippingDiscount
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setFlatShippingDiscount($FlatShippingDiscount)
    {
      $this->FlatShippingDiscount = $FlatShippingDiscount;
      return $this;
    }

    /**
     * @return CalculatedShippingDiscountType
     */
    public function getCalculatedShippingDiscount()
    {
      return $this->CalculatedShippingDiscount;
    }

    /**
     * @param CalculatedShippingDiscountType $CalculatedShippingDiscount
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setCalculatedShippingDiscount($CalculatedShippingDiscount)
    {
      $this->CalculatedShippingDiscount = $CalculatedShippingDiscount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPromotionalShippingDiscount()
    {
      return $this->PromotionalShippingDiscount;
    }

    /**
     * @param boolean $PromotionalShippingDiscount
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setPromotionalShippingDiscount($PromotionalShippingDiscount)
    {
      $this->PromotionalShippingDiscount = $PromotionalShippingDiscount;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternationalShippingDiscountProfileID()
    {
      return $this->InternationalShippingDiscountProfileID;
    }

    /**
     * @param string $InternationalShippingDiscountProfileID
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setInternationalShippingDiscountProfileID($InternationalShippingDiscountProfileID)
    {
      $this->InternationalShippingDiscountProfileID = $InternationalShippingDiscountProfileID;
      return $this;
    }

    /**
     * @return FlatShippingDiscountType
     */
    public function getInternationalFlatShippingDiscount()
    {
      return $this->InternationalFlatShippingDiscount;
    }

    /**
     * @param FlatShippingDiscountType $InternationalFlatShippingDiscount
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setInternationalFlatShippingDiscount($InternationalFlatShippingDiscount)
    {
      $this->InternationalFlatShippingDiscount = $InternationalFlatShippingDiscount;
      return $this;
    }

    /**
     * @return CalculatedShippingDiscountType
     */
    public function getInternationalCalculatedShippingDiscount()
    {
      return $this->InternationalCalculatedShippingDiscount;
    }

    /**
     * @param CalculatedShippingDiscountType $InternationalCalculatedShippingDiscount
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setInternationalCalculatedShippingDiscount($InternationalCalculatedShippingDiscount)
    {
      $this->InternationalCalculatedShippingDiscount = $InternationalCalculatedShippingDiscount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInternationalPromotionalShippingDiscount()
    {
      return $this->InternationalPromotionalShippingDiscount;
    }

    /**
     * @param boolean $InternationalPromotionalShippingDiscount
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setInternationalPromotionalShippingDiscount($InternationalPromotionalShippingDiscount)
    {
      $this->InternationalPromotionalShippingDiscount = $InternationalPromotionalShippingDiscount;
      return $this;
    }

    /**
     * @return PromotionalShippingDiscountDetailsType
     */
    public function getPromotionalShippingDiscountDetails()
    {
      return $this->PromotionalShippingDiscountDetails;
    }

    /**
     * @param PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setPromotionalShippingDiscountDetails($PromotionalShippingDiscountDetails)
    {
      $this->PromotionalShippingDiscountDetails = $PromotionalShippingDiscountDetails;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getCODCost()
    {
      return $this->CODCost;
    }

    /**
     * @param AmountType $CODCost
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setCODCost($CODCost)
    {
      $this->CODCost = $CODCost;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getExcludeShipToLocation()
    {
      return $this->ExcludeShipToLocation;
    }

    /**
     * @param string[] $ExcludeShipToLocation
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setExcludeShipToLocation(array $ExcludeShipToLocation)
    {
      $this->ExcludeShipToLocation = $ExcludeShipToLocation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellerExcludeShipToLocationsPreference()
    {
      return $this->SellerExcludeShipToLocationsPreference;
    }

    /**
     * @param boolean $SellerExcludeShipToLocationsPreference
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setSellerExcludeShipToLocationsPreference($SellerExcludeShipToLocationsPreference)
    {
      $this->SellerExcludeShipToLocationsPreference = $SellerExcludeShipToLocationsPreference;
      return $this;
    }

    /**
     * @return ShipmentTrackingDetailsType[]
     */
    public function getShipmentTrackingDetails()
    {
      return $this->ShipmentTrackingDetails;
    }

    /**
     * @param ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setShipmentTrackingDetails(array $ShipmentTrackingDetails)
    {
      $this->ShipmentTrackingDetails = $ShipmentTrackingDetails;
      return $this;
    }

    /**
     * @return RateTableDetailsType
     */
    public function getRateTableDetails()
    {
      return $this->RateTableDetails;
    }

    /**
     * @param RateTableDetailsType $RateTableDetails
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setRateTableDetails($RateTableDetails)
    {
      $this->RateTableDetails = $RateTableDetails;
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
     * @return \EbayWsdl\Classes\ShippingDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
