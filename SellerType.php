<?php

namespace EbayWsdl;

class SellerType
{

    /**
     * @var int $PaisaPayStatus
     */
    protected $PaisaPayStatus = null;

    /**
     * @var boolean $AllowPaymentEdit
     */
    protected $AllowPaymentEdit = null;

    /**
     * @var CurrencyCodeType $BillingCurrency
     */
    protected $BillingCurrency = null;

    /**
     * @var boolean $CheckoutEnabled
     */
    protected $CheckoutEnabled = null;

    /**
     * @var boolean $CIPBankAccountStored
     */
    protected $CIPBankAccountStored = null;

    /**
     * @var boolean $GoodStanding
     */
    protected $GoodStanding = null;

    /**
     * @var MerchandizingPrefCodeType $MerchandizingPref
     */
    protected $MerchandizingPref = null;

    /**
     * @var boolean $QualifiesForB2BVAT
     */
    protected $QualifiesForB2BVAT = null;

    /**
     * @var SellerGuaranteeLevelCodeType $SellerGuaranteeLevel
     */
    protected $SellerGuaranteeLevel = null;

    /**
     * @var SellerLevelCodeType $SellerLevel
     */
    protected $SellerLevel = null;

    /**
     * @var AddressType $SellerPaymentAddress
     */
    protected $SellerPaymentAddress = null;

    /**
     * @var SchedulingInfoType $SchedulingInfo
     */
    protected $SchedulingInfo = null;

    /**
     * @var boolean $StoreOwner
     */
    protected $StoreOwner = null;

    /**
     * @var anyURI $StoreURL
     */
    protected $StoreURL = null;

    /**
     * @var SellerBusinessCodeType $SellerBusinessType
     */
    protected $SellerBusinessType = null;

    /**
     * @var boolean $RegisteredBusinessSeller
     */
    protected $RegisteredBusinessSeller = null;

    /**
     * @var SiteCodeType $StoreSite
     */
    protected $StoreSite = null;

    /**
     * @var SellerPaymentMethodCodeType $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var ProStoresCheckoutPreferenceType $ProStoresPreference
     */
    protected $ProStoresPreference = null;

    /**
     * @var boolean $CharityRegistered
     */
    protected $CharityRegistered = null;

    /**
     * @var boolean $SafePaymentExempt
     */
    protected $SafePaymentExempt = null;

    /**
     * @var int $PaisaPayEscrowEMIStatus
     */
    protected $PaisaPayEscrowEMIStatus = null;

    /**
     * @var CharityAffiliationDetailsType $CharityAffiliationDetails
     */
    protected $CharityAffiliationDetails = null;

    /**
     * @var float $TransactionPercent
     */
    protected $TransactionPercent = null;

    /**
     * @var IntegratedMerchantCreditCardInfoType $IntegratedMerchantCreditCardInfo
     */
    protected $IntegratedMerchantCreditCardInfo = null;

    /**
     * @var FeatureEligibilityType $FeatureEligibility
     */
    protected $FeatureEligibility = null;

    /**
     * @var boolean $TopRatedSeller
     */
    protected $TopRatedSeller = null;

    /**
     * @var TopRatedSellerDetailsType $TopRatedSellerDetails
     */
    protected $TopRatedSellerDetails = null;

    /**
     * @var RecoupmentPolicyConsentType $RecoupmentPolicyConsent
     */
    protected $RecoupmentPolicyConsent = null;

    /**
     * @var boolean $DomesticRateTable
     */
    protected $DomesticRateTable = null;

    /**
     * @var boolean $InternationalRateTable
     */
    protected $InternationalRateTable = null;

    /**
     * @var SellereBayPaymentProcessStatusCodeType $SellereBayPaymentProcessStatus
     */
    protected $SellereBayPaymentProcessStatus = null;

    /**
     * @var SellereBayPaymentProcessConsentCodeType $SellereBayPaymentProcessConsent
     */
    protected $SellereBayPaymentProcessConsent = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $PaisaPayStatus
     * @param boolean $AllowPaymentEdit
     * @param CurrencyCodeType $BillingCurrency
     * @param boolean $CheckoutEnabled
     * @param boolean $CIPBankAccountStored
     * @param boolean $GoodStanding
     * @param MerchandizingPrefCodeType $MerchandizingPref
     * @param boolean $QualifiesForB2BVAT
     * @param SellerGuaranteeLevelCodeType $SellerGuaranteeLevel
     * @param SellerLevelCodeType $SellerLevel
     * @param AddressType $SellerPaymentAddress
     * @param SchedulingInfoType $SchedulingInfo
     * @param boolean $StoreOwner
     * @param anyURI $StoreURL
     * @param SellerBusinessCodeType $SellerBusinessType
     * @param boolean $RegisteredBusinessSeller
     * @param SiteCodeType $StoreSite
     * @param SellerPaymentMethodCodeType $PaymentMethod
     * @param ProStoresCheckoutPreferenceType $ProStoresPreference
     * @param boolean $CharityRegistered
     * @param boolean $SafePaymentExempt
     * @param int $PaisaPayEscrowEMIStatus
     * @param CharityAffiliationDetailsType $CharityAffiliationDetails
     * @param float $TransactionPercent
     * @param IntegratedMerchantCreditCardInfoType $IntegratedMerchantCreditCardInfo
     * @param FeatureEligibilityType $FeatureEligibility
     * @param boolean $TopRatedSeller
     * @param TopRatedSellerDetailsType $TopRatedSellerDetails
     * @param RecoupmentPolicyConsentType $RecoupmentPolicyConsent
     * @param boolean $DomesticRateTable
     * @param boolean $InternationalRateTable
     * @param SellereBayPaymentProcessStatusCodeType $SellereBayPaymentProcessStatus
     * @param SellereBayPaymentProcessConsentCodeType $SellereBayPaymentProcessConsent
     * @param string $any
     */
    public function __construct($PaisaPayStatus = null, $AllowPaymentEdit = null, $BillingCurrency = null, $CheckoutEnabled = null, $CIPBankAccountStored = null, $GoodStanding = null, $MerchandizingPref = null, $QualifiesForB2BVAT = null, $SellerGuaranteeLevel = null, $SellerLevel = null, $SellerPaymentAddress = null, $SchedulingInfo = null, $StoreOwner = null, $StoreURL = null, $SellerBusinessType = null, $RegisteredBusinessSeller = null, $StoreSite = null, $PaymentMethod = null, $ProStoresPreference = null, $CharityRegistered = null, $SafePaymentExempt = null, $PaisaPayEscrowEMIStatus = null, $CharityAffiliationDetails = null, $TransactionPercent = null, $IntegratedMerchantCreditCardInfo = null, $FeatureEligibility = null, $TopRatedSeller = null, $TopRatedSellerDetails = null, $RecoupmentPolicyConsent = null, $DomesticRateTable = null, $InternationalRateTable = null, $SellereBayPaymentProcessStatus = null, $SellereBayPaymentProcessConsent = null, $any = null)
    {
      $this->PaisaPayStatus = $PaisaPayStatus;
      $this->AllowPaymentEdit = $AllowPaymentEdit;
      $this->BillingCurrency = $BillingCurrency;
      $this->CheckoutEnabled = $CheckoutEnabled;
      $this->CIPBankAccountStored = $CIPBankAccountStored;
      $this->GoodStanding = $GoodStanding;
      $this->MerchandizingPref = $MerchandizingPref;
      $this->QualifiesForB2BVAT = $QualifiesForB2BVAT;
      $this->SellerGuaranteeLevel = $SellerGuaranteeLevel;
      $this->SellerLevel = $SellerLevel;
      $this->SellerPaymentAddress = $SellerPaymentAddress;
      $this->SchedulingInfo = $SchedulingInfo;
      $this->StoreOwner = $StoreOwner;
      $this->StoreURL = $StoreURL;
      $this->SellerBusinessType = $SellerBusinessType;
      $this->RegisteredBusinessSeller = $RegisteredBusinessSeller;
      $this->StoreSite = $StoreSite;
      $this->PaymentMethod = $PaymentMethod;
      $this->ProStoresPreference = $ProStoresPreference;
      $this->CharityRegistered = $CharityRegistered;
      $this->SafePaymentExempt = $SafePaymentExempt;
      $this->PaisaPayEscrowEMIStatus = $PaisaPayEscrowEMIStatus;
      $this->CharityAffiliationDetails = $CharityAffiliationDetails;
      $this->TransactionPercent = $TransactionPercent;
      $this->IntegratedMerchantCreditCardInfo = $IntegratedMerchantCreditCardInfo;
      $this->FeatureEligibility = $FeatureEligibility;
      $this->TopRatedSeller = $TopRatedSeller;
      $this->TopRatedSellerDetails = $TopRatedSellerDetails;
      $this->RecoupmentPolicyConsent = $RecoupmentPolicyConsent;
      $this->DomesticRateTable = $DomesticRateTable;
      $this->InternationalRateTable = $InternationalRateTable;
      $this->SellereBayPaymentProcessStatus = $SellereBayPaymentProcessStatus;
      $this->SellereBayPaymentProcessConsent = $SellereBayPaymentProcessConsent;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getPaisaPayStatus()
    {
      return $this->PaisaPayStatus;
    }

    /**
     * @param int $PaisaPayStatus
     * @return \EbayWsdl\SellerType
     */
    public function setPaisaPayStatus($PaisaPayStatus)
    {
      $this->PaisaPayStatus = $PaisaPayStatus;
      return $this;
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
     * @return \EbayWsdl\SellerType
     */
    public function setAllowPaymentEdit($AllowPaymentEdit)
    {
      $this->AllowPaymentEdit = $AllowPaymentEdit;
      return $this;
    }

    /**
     * @return CurrencyCodeType
     */
    public function getBillingCurrency()
    {
      return $this->BillingCurrency;
    }

    /**
     * @param CurrencyCodeType $BillingCurrency
     * @return \EbayWsdl\SellerType
     */
    public function setBillingCurrency($BillingCurrency)
    {
      $this->BillingCurrency = $BillingCurrency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCheckoutEnabled()
    {
      return $this->CheckoutEnabled;
    }

    /**
     * @param boolean $CheckoutEnabled
     * @return \EbayWsdl\SellerType
     */
    public function setCheckoutEnabled($CheckoutEnabled)
    {
      $this->CheckoutEnabled = $CheckoutEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCIPBankAccountStored()
    {
      return $this->CIPBankAccountStored;
    }

    /**
     * @param boolean $CIPBankAccountStored
     * @return \EbayWsdl\SellerType
     */
    public function setCIPBankAccountStored($CIPBankAccountStored)
    {
      $this->CIPBankAccountStored = $CIPBankAccountStored;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGoodStanding()
    {
      return $this->GoodStanding;
    }

    /**
     * @param boolean $GoodStanding
     * @return \EbayWsdl\SellerType
     */
    public function setGoodStanding($GoodStanding)
    {
      $this->GoodStanding = $GoodStanding;
      return $this;
    }

    /**
     * @return MerchandizingPrefCodeType
     */
    public function getMerchandizingPref()
    {
      return $this->MerchandizingPref;
    }

    /**
     * @param MerchandizingPrefCodeType $MerchandizingPref
     * @return \EbayWsdl\SellerType
     */
    public function setMerchandizingPref($MerchandizingPref)
    {
      $this->MerchandizingPref = $MerchandizingPref;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getQualifiesForB2BVAT()
    {
      return $this->QualifiesForB2BVAT;
    }

    /**
     * @param boolean $QualifiesForB2BVAT
     * @return \EbayWsdl\SellerType
     */
    public function setQualifiesForB2BVAT($QualifiesForB2BVAT)
    {
      $this->QualifiesForB2BVAT = $QualifiesForB2BVAT;
      return $this;
    }

    /**
     * @return SellerGuaranteeLevelCodeType
     */
    public function getSellerGuaranteeLevel()
    {
      return $this->SellerGuaranteeLevel;
    }

    /**
     * @param SellerGuaranteeLevelCodeType $SellerGuaranteeLevel
     * @return \EbayWsdl\SellerType
     */
    public function setSellerGuaranteeLevel($SellerGuaranteeLevel)
    {
      $this->SellerGuaranteeLevel = $SellerGuaranteeLevel;
      return $this;
    }

    /**
     * @return SellerLevelCodeType
     */
    public function getSellerLevel()
    {
      return $this->SellerLevel;
    }

    /**
     * @param SellerLevelCodeType $SellerLevel
     * @return \EbayWsdl\SellerType
     */
    public function setSellerLevel($SellerLevel)
    {
      $this->SellerLevel = $SellerLevel;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getSellerPaymentAddress()
    {
      return $this->SellerPaymentAddress;
    }

    /**
     * @param AddressType $SellerPaymentAddress
     * @return \EbayWsdl\SellerType
     */
    public function setSellerPaymentAddress($SellerPaymentAddress)
    {
      $this->SellerPaymentAddress = $SellerPaymentAddress;
      return $this;
    }

    /**
     * @return SchedulingInfoType
     */
    public function getSchedulingInfo()
    {
      return $this->SchedulingInfo;
    }

    /**
     * @param SchedulingInfoType $SchedulingInfo
     * @return \EbayWsdl\SellerType
     */
    public function setSchedulingInfo($SchedulingInfo)
    {
      $this->SchedulingInfo = $SchedulingInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStoreOwner()
    {
      return $this->StoreOwner;
    }

    /**
     * @param boolean $StoreOwner
     * @return \EbayWsdl\SellerType
     */
    public function setStoreOwner($StoreOwner)
    {
      $this->StoreOwner = $StoreOwner;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getStoreURL()
    {
      return $this->StoreURL;
    }

    /**
     * @param anyURI $StoreURL
     * @return \EbayWsdl\SellerType
     */
    public function setStoreURL($StoreURL)
    {
      $this->StoreURL = $StoreURL;
      return $this;
    }

    /**
     * @return SellerBusinessCodeType
     */
    public function getSellerBusinessType()
    {
      return $this->SellerBusinessType;
    }

    /**
     * @param SellerBusinessCodeType $SellerBusinessType
     * @return \EbayWsdl\SellerType
     */
    public function setSellerBusinessType($SellerBusinessType)
    {
      $this->SellerBusinessType = $SellerBusinessType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRegisteredBusinessSeller()
    {
      return $this->RegisteredBusinessSeller;
    }

    /**
     * @param boolean $RegisteredBusinessSeller
     * @return \EbayWsdl\SellerType
     */
    public function setRegisteredBusinessSeller($RegisteredBusinessSeller)
    {
      $this->RegisteredBusinessSeller = $RegisteredBusinessSeller;
      return $this;
    }

    /**
     * @return SiteCodeType
     */
    public function getStoreSite()
    {
      return $this->StoreSite;
    }

    /**
     * @param SiteCodeType $StoreSite
     * @return \EbayWsdl\SellerType
     */
    public function setStoreSite($StoreSite)
    {
      $this->StoreSite = $StoreSite;
      return $this;
    }

    /**
     * @return SellerPaymentMethodCodeType
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param SellerPaymentMethodCodeType $PaymentMethod
     * @return \EbayWsdl\SellerType
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

    /**
     * @return ProStoresCheckoutPreferenceType
     */
    public function getProStoresPreference()
    {
      return $this->ProStoresPreference;
    }

    /**
     * @param ProStoresCheckoutPreferenceType $ProStoresPreference
     * @return \EbayWsdl\SellerType
     */
    public function setProStoresPreference($ProStoresPreference)
    {
      $this->ProStoresPreference = $ProStoresPreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCharityRegistered()
    {
      return $this->CharityRegistered;
    }

    /**
     * @param boolean $CharityRegistered
     * @return \EbayWsdl\SellerType
     */
    public function setCharityRegistered($CharityRegistered)
    {
      $this->CharityRegistered = $CharityRegistered;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSafePaymentExempt()
    {
      return $this->SafePaymentExempt;
    }

    /**
     * @param boolean $SafePaymentExempt
     * @return \EbayWsdl\SellerType
     */
    public function setSafePaymentExempt($SafePaymentExempt)
    {
      $this->SafePaymentExempt = $SafePaymentExempt;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaisaPayEscrowEMIStatus()
    {
      return $this->PaisaPayEscrowEMIStatus;
    }

    /**
     * @param int $PaisaPayEscrowEMIStatus
     * @return \EbayWsdl\SellerType
     */
    public function setPaisaPayEscrowEMIStatus($PaisaPayEscrowEMIStatus)
    {
      $this->PaisaPayEscrowEMIStatus = $PaisaPayEscrowEMIStatus;
      return $this;
    }

    /**
     * @return CharityAffiliationDetailsType
     */
    public function getCharityAffiliationDetails()
    {
      return $this->CharityAffiliationDetails;
    }

    /**
     * @param CharityAffiliationDetailsType $CharityAffiliationDetails
     * @return \EbayWsdl\SellerType
     */
    public function setCharityAffiliationDetails($CharityAffiliationDetails)
    {
      $this->CharityAffiliationDetails = $CharityAffiliationDetails;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransactionPercent()
    {
      return $this->TransactionPercent;
    }

    /**
     * @param float $TransactionPercent
     * @return \EbayWsdl\SellerType
     */
    public function setTransactionPercent($TransactionPercent)
    {
      $this->TransactionPercent = $TransactionPercent;
      return $this;
    }

    /**
     * @return IntegratedMerchantCreditCardInfoType
     */
    public function getIntegratedMerchantCreditCardInfo()
    {
      return $this->IntegratedMerchantCreditCardInfo;
    }

    /**
     * @param IntegratedMerchantCreditCardInfoType $IntegratedMerchantCreditCardInfo
     * @return \EbayWsdl\SellerType
     */
    public function setIntegratedMerchantCreditCardInfo($IntegratedMerchantCreditCardInfo)
    {
      $this->IntegratedMerchantCreditCardInfo = $IntegratedMerchantCreditCardInfo;
      return $this;
    }

    /**
     * @return FeatureEligibilityType
     */
    public function getFeatureEligibility()
    {
      return $this->FeatureEligibility;
    }

    /**
     * @param FeatureEligibilityType $FeatureEligibility
     * @return \EbayWsdl\SellerType
     */
    public function setFeatureEligibility($FeatureEligibility)
    {
      $this->FeatureEligibility = $FeatureEligibility;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTopRatedSeller()
    {
      return $this->TopRatedSeller;
    }

    /**
     * @param boolean $TopRatedSeller
     * @return \EbayWsdl\SellerType
     */
    public function setTopRatedSeller($TopRatedSeller)
    {
      $this->TopRatedSeller = $TopRatedSeller;
      return $this;
    }

    /**
     * @return TopRatedSellerDetailsType
     */
    public function getTopRatedSellerDetails()
    {
      return $this->TopRatedSellerDetails;
    }

    /**
     * @param TopRatedSellerDetailsType $TopRatedSellerDetails
     * @return \EbayWsdl\SellerType
     */
    public function setTopRatedSellerDetails($TopRatedSellerDetails)
    {
      $this->TopRatedSellerDetails = $TopRatedSellerDetails;
      return $this;
    }

    /**
     * @return RecoupmentPolicyConsentType
     */
    public function getRecoupmentPolicyConsent()
    {
      return $this->RecoupmentPolicyConsent;
    }

    /**
     * @param RecoupmentPolicyConsentType $RecoupmentPolicyConsent
     * @return \EbayWsdl\SellerType
     */
    public function setRecoupmentPolicyConsent($RecoupmentPolicyConsent)
    {
      $this->RecoupmentPolicyConsent = $RecoupmentPolicyConsent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDomesticRateTable()
    {
      return $this->DomesticRateTable;
    }

    /**
     * @param boolean $DomesticRateTable
     * @return \EbayWsdl\SellerType
     */
    public function setDomesticRateTable($DomesticRateTable)
    {
      $this->DomesticRateTable = $DomesticRateTable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInternationalRateTable()
    {
      return $this->InternationalRateTable;
    }

    /**
     * @param boolean $InternationalRateTable
     * @return \EbayWsdl\SellerType
     */
    public function setInternationalRateTable($InternationalRateTable)
    {
      $this->InternationalRateTable = $InternationalRateTable;
      return $this;
    }

    /**
     * @return SellereBayPaymentProcessStatusCodeType
     */
    public function getSellereBayPaymentProcessStatus()
    {
      return $this->SellereBayPaymentProcessStatus;
    }

    /**
     * @param SellereBayPaymentProcessStatusCodeType $SellereBayPaymentProcessStatus
     * @return \EbayWsdl\SellerType
     */
    public function setSellereBayPaymentProcessStatus($SellereBayPaymentProcessStatus)
    {
      $this->SellereBayPaymentProcessStatus = $SellereBayPaymentProcessStatus;
      return $this;
    }

    /**
     * @return SellereBayPaymentProcessConsentCodeType
     */
    public function getSellereBayPaymentProcessConsent()
    {
      return $this->SellereBayPaymentProcessConsent;
    }

    /**
     * @param SellereBayPaymentProcessConsentCodeType $SellereBayPaymentProcessConsent
     * @return \EbayWsdl\SellerType
     */
    public function setSellereBayPaymentProcessConsent($SellereBayPaymentProcessConsent)
    {
      $this->SellereBayPaymentProcessConsent = $SellereBayPaymentProcessConsent;
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
     * @return \EbayWsdl\SellerType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
