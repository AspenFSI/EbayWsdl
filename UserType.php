<?php

namespace EbayWsdl;

class UserType
{

    /**
     * @var boolean $AboutMePage
     */
    protected $AboutMePage = null;

    /**
     * @var string $EIASToken
     */
    protected $EIASToken = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var int $FeedbackScore
     */
    protected $FeedbackScore = null;

    /**
     * @var int $UniqueNegativeFeedbackCount
     */
    protected $UniqueNegativeFeedbackCount = null;

    /**
     * @var int $UniquePositiveFeedbackCount
     */
    protected $UniquePositiveFeedbackCount = null;

    /**
     * @var float $PositiveFeedbackPercent
     */
    protected $PositiveFeedbackPercent = null;

    /**
     * @var boolean $FeedbackPrivate
     */
    protected $FeedbackPrivate = null;

    /**
     * @var FeedbackRatingStarCodeType $FeedbackRatingStar
     */
    protected $FeedbackRatingStar = null;

    /**
     * @var boolean $IDVerified
     */
    protected $IDVerified = null;

    /**
     * @var boolean $eBayGoodStanding
     */
    protected $eBayGoodStanding = null;

    /**
     * @var boolean $NewUser
     */
    protected $NewUser = null;

    /**
     * @var AddressType $RegistrationAddress
     */
    protected $RegistrationAddress = null;

    /**
     * @var \DateTime $RegistrationDate
     */
    protected $RegistrationDate = null;

    /**
     * @var SiteCodeType $Site
     */
    protected $Site = null;

    /**
     * @var UserStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var UserIDType $UserID
     */
    protected $UserID = null;

    /**
     * @var boolean $UserIDChanged
     */
    protected $UserIDChanged = null;

    /**
     * @var \DateTime $UserIDLastChanged
     */
    protected $UserIDLastChanged = null;

    /**
     * @var VATStatusCodeType $VATStatus
     */
    protected $VATStatus = null;

    /**
     * @var BuyerType $BuyerInfo
     */
    protected $BuyerInfo = null;

    /**
     * @var SellerType $SellerInfo
     */
    protected $SellerInfo = null;

    /**
     * @var BusinessRoleType $BusinessRole
     */
    protected $BusinessRole = null;

    /**
     * @var CharityAffiliationsType $CharityAffiliations
     */
    protected $CharityAffiliations = null;

    /**
     * @var PayPalAccountLevelCodeType $PayPalAccountLevel
     */
    protected $PayPalAccountLevel = null;

    /**
     * @var PayPalAccountTypeCodeType $PayPalAccountType
     */
    protected $PayPalAccountType = null;

    /**
     * @var PayPalAccountStatusCodeType $PayPalAccountStatus
     */
    protected $PayPalAccountStatus = null;

    /**
     * @var EBaySubscriptionTypeCodeType[] $UserSubscription
     */
    protected $UserSubscription = null;

    /**
     * @var boolean $SiteVerified
     */
    protected $SiteVerified = null;

    /**
     * @var string[] $SkypeID
     */
    protected $SkypeID = null;

    /**
     * @var boolean $eBayWikiReadOnly
     */
    protected $eBayWikiReadOnly = null;

    /**
     * @var int $TUVLevel
     */
    protected $TUVLevel = null;

    /**
     * @var string $VATID
     */
    protected $VATID = null;

    /**
     * @var boolean $MotorsDealer
     */
    protected $MotorsDealer = null;

    /**
     * @var SellerPaymentMethodCodeType $SellerPaymentMethod
     */
    protected $SellerPaymentMethod = null;

    /**
     * @var BiddingSummaryType $BiddingSummary
     */
    protected $BiddingSummary = null;

    /**
     * @var boolean $UserAnonymized
     */
    protected $UserAnonymized = null;

    /**
     * @var int $UniqueNeutralFeedbackCount
     */
    protected $UniqueNeutralFeedbackCount = null;

    /**
     * @var boolean $EnterpriseSeller
     */
    protected $EnterpriseSeller = null;

    /**
     * @var string $BillingEmail
     */
    protected $BillingEmail = null;

    /**
     * @var boolean $QualifiesForSelling
     */
    protected $QualifiesForSelling = null;

    /**
     * @var string $StaticAlias
     */
    protected $StaticAlias = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $AboutMePage
     * @param string $EIASToken
     * @param string $Email
     * @param int $FeedbackScore
     * @param int $UniqueNegativeFeedbackCount
     * @param int $UniquePositiveFeedbackCount
     * @param float $PositiveFeedbackPercent
     * @param boolean $FeedbackPrivate
     * @param FeedbackRatingStarCodeType $FeedbackRatingStar
     * @param boolean $IDVerified
     * @param boolean $eBayGoodStanding
     * @param boolean $NewUser
     * @param AddressType $RegistrationAddress
     * @param \DateTime $RegistrationDate
     * @param SiteCodeType $Site
     * @param UserStatusCodeType $Status
     * @param UserIDType $UserID
     * @param boolean $UserIDChanged
     * @param \DateTime $UserIDLastChanged
     * @param VATStatusCodeType $VATStatus
     * @param BuyerType $BuyerInfo
     * @param SellerType $SellerInfo
     * @param BusinessRoleType $BusinessRole
     * @param CharityAffiliationsType $CharityAffiliations
     * @param PayPalAccountLevelCodeType $PayPalAccountLevel
     * @param PayPalAccountTypeCodeType $PayPalAccountType
     * @param PayPalAccountStatusCodeType $PayPalAccountStatus
     * @param EBaySubscriptionTypeCodeType[] $UserSubscription
     * @param boolean $SiteVerified
     * @param string[] $SkypeID
     * @param boolean $eBayWikiReadOnly
     * @param int $TUVLevel
     * @param string $VATID
     * @param boolean $MotorsDealer
     * @param SellerPaymentMethodCodeType $SellerPaymentMethod
     * @param BiddingSummaryType $BiddingSummary
     * @param boolean $UserAnonymized
     * @param int $UniqueNeutralFeedbackCount
     * @param boolean $EnterpriseSeller
     * @param string $BillingEmail
     * @param boolean $QualifiesForSelling
     * @param string $StaticAlias
     * @param string $any
     */
    public function __construct($AboutMePage = null, $EIASToken = null, $Email = null, $FeedbackScore = null, $UniqueNegativeFeedbackCount = null, $UniquePositiveFeedbackCount = null, $PositiveFeedbackPercent = null, $FeedbackPrivate = null, $FeedbackRatingStar = null, $IDVerified = null, $eBayGoodStanding = null, $NewUser = null, $RegistrationAddress = null, \DateTime $RegistrationDate = null, $Site = null, $Status = null, $UserID = null, $UserIDChanged = null, \DateTime $UserIDLastChanged = null, $VATStatus = null, $BuyerInfo = null, $SellerInfo = null, $BusinessRole = null, $CharityAffiliations = null, $PayPalAccountLevel = null, $PayPalAccountType = null, $PayPalAccountStatus = null, array $UserSubscription = null, $SiteVerified = null, array $SkypeID = null, $eBayWikiReadOnly = null, $TUVLevel = null, $VATID = null, $MotorsDealer = null, $SellerPaymentMethod = null, $BiddingSummary = null, $UserAnonymized = null, $UniqueNeutralFeedbackCount = null, $EnterpriseSeller = null, $BillingEmail = null, $QualifiesForSelling = null, $StaticAlias = null, $any = null)
    {
      $this->AboutMePage = $AboutMePage;
      $this->EIASToken = $EIASToken;
      $this->Email = $Email;
      $this->FeedbackScore = $FeedbackScore;
      $this->UniqueNegativeFeedbackCount = $UniqueNegativeFeedbackCount;
      $this->UniquePositiveFeedbackCount = $UniquePositiveFeedbackCount;
      $this->PositiveFeedbackPercent = $PositiveFeedbackPercent;
      $this->FeedbackPrivate = $FeedbackPrivate;
      $this->FeedbackRatingStar = $FeedbackRatingStar;
      $this->IDVerified = $IDVerified;
      $this->eBayGoodStanding = $eBayGoodStanding;
      $this->NewUser = $NewUser;
      $this->RegistrationAddress = $RegistrationAddress;
      $this->RegistrationDate = $RegistrationDate ? $RegistrationDate->format(\DateTime::ATOM) : null;
      $this->Site = $Site;
      $this->Status = $Status;
      $this->UserID = $UserID;
      $this->UserIDChanged = $UserIDChanged;
      $this->UserIDLastChanged = $UserIDLastChanged ? $UserIDLastChanged->format(\DateTime::ATOM) : null;
      $this->VATStatus = $VATStatus;
      $this->BuyerInfo = $BuyerInfo;
      $this->SellerInfo = $SellerInfo;
      $this->BusinessRole = $BusinessRole;
      $this->CharityAffiliations = $CharityAffiliations;
      $this->PayPalAccountLevel = $PayPalAccountLevel;
      $this->PayPalAccountType = $PayPalAccountType;
      $this->PayPalAccountStatus = $PayPalAccountStatus;
      $this->UserSubscription = $UserSubscription;
      $this->SiteVerified = $SiteVerified;
      $this->SkypeID = $SkypeID;
      $this->eBayWikiReadOnly = $eBayWikiReadOnly;
      $this->TUVLevel = $TUVLevel;
      $this->VATID = $VATID;
      $this->MotorsDealer = $MotorsDealer;
      $this->SellerPaymentMethod = $SellerPaymentMethod;
      $this->BiddingSummary = $BiddingSummary;
      $this->UserAnonymized = $UserAnonymized;
      $this->UniqueNeutralFeedbackCount = $UniqueNeutralFeedbackCount;
      $this->EnterpriseSeller = $EnterpriseSeller;
      $this->BillingEmail = $BillingEmail;
      $this->QualifiesForSelling = $QualifiesForSelling;
      $this->StaticAlias = $StaticAlias;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getAboutMePage()
    {
      return $this->AboutMePage;
    }

    /**
     * @param boolean $AboutMePage
     * @return \EbayWsdl\UserType
     */
    public function setAboutMePage($AboutMePage)
    {
      $this->AboutMePage = $AboutMePage;
      return $this;
    }

    /**
     * @return string
     */
    public function getEIASToken()
    {
      return $this->EIASToken;
    }

    /**
     * @param string $EIASToken
     * @return \EbayWsdl\UserType
     */
    public function setEIASToken($EIASToken)
    {
      $this->EIASToken = $EIASToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \EbayWsdl\UserType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackScore()
    {
      return $this->FeedbackScore;
    }

    /**
     * @param int $FeedbackScore
     * @return \EbayWsdl\UserType
     */
    public function setFeedbackScore($FeedbackScore)
    {
      $this->FeedbackScore = $FeedbackScore;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueNegativeFeedbackCount()
    {
      return $this->UniqueNegativeFeedbackCount;
    }

    /**
     * @param int $UniqueNegativeFeedbackCount
     * @return \EbayWsdl\UserType
     */
    public function setUniqueNegativeFeedbackCount($UniqueNegativeFeedbackCount)
    {
      $this->UniqueNegativeFeedbackCount = $UniqueNegativeFeedbackCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniquePositiveFeedbackCount()
    {
      return $this->UniquePositiveFeedbackCount;
    }

    /**
     * @param int $UniquePositiveFeedbackCount
     * @return \EbayWsdl\UserType
     */
    public function setUniquePositiveFeedbackCount($UniquePositiveFeedbackCount)
    {
      $this->UniquePositiveFeedbackCount = $UniquePositiveFeedbackCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPositiveFeedbackPercent()
    {
      return $this->PositiveFeedbackPercent;
    }

    /**
     * @param float $PositiveFeedbackPercent
     * @return \EbayWsdl\UserType
     */
    public function setPositiveFeedbackPercent($PositiveFeedbackPercent)
    {
      $this->PositiveFeedbackPercent = $PositiveFeedbackPercent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFeedbackPrivate()
    {
      return $this->FeedbackPrivate;
    }

    /**
     * @param boolean $FeedbackPrivate
     * @return \EbayWsdl\UserType
     */
    public function setFeedbackPrivate($FeedbackPrivate)
    {
      $this->FeedbackPrivate = $FeedbackPrivate;
      return $this;
    }

    /**
     * @return FeedbackRatingStarCodeType
     */
    public function getFeedbackRatingStar()
    {
      return $this->FeedbackRatingStar;
    }

    /**
     * @param FeedbackRatingStarCodeType $FeedbackRatingStar
     * @return \EbayWsdl\UserType
     */
    public function setFeedbackRatingStar($FeedbackRatingStar)
    {
      $this->FeedbackRatingStar = $FeedbackRatingStar;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIDVerified()
    {
      return $this->IDVerified;
    }

    /**
     * @param boolean $IDVerified
     * @return \EbayWsdl\UserType
     */
    public function setIDVerified($IDVerified)
    {
      $this->IDVerified = $IDVerified;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEBayGoodStanding()
    {
      return $this->eBayGoodStanding;
    }

    /**
     * @param boolean $eBayGoodStanding
     * @return \EbayWsdl\UserType
     */
    public function setEBayGoodStanding($eBayGoodStanding)
    {
      $this->eBayGoodStanding = $eBayGoodStanding;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNewUser()
    {
      return $this->NewUser;
    }

    /**
     * @param boolean $NewUser
     * @return \EbayWsdl\UserType
     */
    public function setNewUser($NewUser)
    {
      $this->NewUser = $NewUser;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getRegistrationAddress()
    {
      return $this->RegistrationAddress;
    }

    /**
     * @param AddressType $RegistrationAddress
     * @return \EbayWsdl\UserType
     */
    public function setRegistrationAddress($RegistrationAddress)
    {
      $this->RegistrationAddress = $RegistrationAddress;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
      if ($this->RegistrationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RegistrationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RegistrationDate
     * @return \EbayWsdl\UserType
     */
    public function setRegistrationDate(\DateTime $RegistrationDate)
    {
      $this->RegistrationDate = $RegistrationDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return SiteCodeType
     */
    public function getSite()
    {
      return $this->Site;
    }

    /**
     * @param SiteCodeType $Site
     * @return \EbayWsdl\UserType
     */
    public function setSite($Site)
    {
      $this->Site = $Site;
      return $this;
    }

    /**
     * @return UserStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param UserStatusCodeType $Status
     * @return \EbayWsdl\UserType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return UserIDType
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param UserIDType $UserID
     * @return \EbayWsdl\UserType
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUserIDChanged()
    {
      return $this->UserIDChanged;
    }

    /**
     * @param boolean $UserIDChanged
     * @return \EbayWsdl\UserType
     */
    public function setUserIDChanged($UserIDChanged)
    {
      $this->UserIDChanged = $UserIDChanged;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUserIDLastChanged()
    {
      if ($this->UserIDLastChanged == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UserIDLastChanged);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UserIDLastChanged
     * @return \EbayWsdl\UserType
     */
    public function setUserIDLastChanged(\DateTime $UserIDLastChanged)
    {
      $this->UserIDLastChanged = $UserIDLastChanged->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return VATStatusCodeType
     */
    public function getVATStatus()
    {
      return $this->VATStatus;
    }

    /**
     * @param VATStatusCodeType $VATStatus
     * @return \EbayWsdl\UserType
     */
    public function setVATStatus($VATStatus)
    {
      $this->VATStatus = $VATStatus;
      return $this;
    }

    /**
     * @return BuyerType
     */
    public function getBuyerInfo()
    {
      return $this->BuyerInfo;
    }

    /**
     * @param BuyerType $BuyerInfo
     * @return \EbayWsdl\UserType
     */
    public function setBuyerInfo($BuyerInfo)
    {
      $this->BuyerInfo = $BuyerInfo;
      return $this;
    }

    /**
     * @return SellerType
     */
    public function getSellerInfo()
    {
      return $this->SellerInfo;
    }

    /**
     * @param SellerType $SellerInfo
     * @return \EbayWsdl\UserType
     */
    public function setSellerInfo($SellerInfo)
    {
      $this->SellerInfo = $SellerInfo;
      return $this;
    }

    /**
     * @return BusinessRoleType
     */
    public function getBusinessRole()
    {
      return $this->BusinessRole;
    }

    /**
     * @param BusinessRoleType $BusinessRole
     * @return \EbayWsdl\UserType
     */
    public function setBusinessRole($BusinessRole)
    {
      $this->BusinessRole = $BusinessRole;
      return $this;
    }

    /**
     * @return CharityAffiliationsType
     */
    public function getCharityAffiliations()
    {
      return $this->CharityAffiliations;
    }

    /**
     * @param CharityAffiliationsType $CharityAffiliations
     * @return \EbayWsdl\UserType
     */
    public function setCharityAffiliations($CharityAffiliations)
    {
      $this->CharityAffiliations = $CharityAffiliations;
      return $this;
    }

    /**
     * @return PayPalAccountLevelCodeType
     */
    public function getPayPalAccountLevel()
    {
      return $this->PayPalAccountLevel;
    }

    /**
     * @param PayPalAccountLevelCodeType $PayPalAccountLevel
     * @return \EbayWsdl\UserType
     */
    public function setPayPalAccountLevel($PayPalAccountLevel)
    {
      $this->PayPalAccountLevel = $PayPalAccountLevel;
      return $this;
    }

    /**
     * @return PayPalAccountTypeCodeType
     */
    public function getPayPalAccountType()
    {
      return $this->PayPalAccountType;
    }

    /**
     * @param PayPalAccountTypeCodeType $PayPalAccountType
     * @return \EbayWsdl\UserType
     */
    public function setPayPalAccountType($PayPalAccountType)
    {
      $this->PayPalAccountType = $PayPalAccountType;
      return $this;
    }

    /**
     * @return PayPalAccountStatusCodeType
     */
    public function getPayPalAccountStatus()
    {
      return $this->PayPalAccountStatus;
    }

    /**
     * @param PayPalAccountStatusCodeType $PayPalAccountStatus
     * @return \EbayWsdl\UserType
     */
    public function setPayPalAccountStatus($PayPalAccountStatus)
    {
      $this->PayPalAccountStatus = $PayPalAccountStatus;
      return $this;
    }

    /**
     * @return EBaySubscriptionTypeCodeType[]
     */
    public function getUserSubscription()
    {
      return $this->UserSubscription;
    }

    /**
     * @param EBaySubscriptionTypeCodeType[] $UserSubscription
     * @return \EbayWsdl\UserType
     */
    public function setUserSubscription(array $UserSubscription)
    {
      $this->UserSubscription = $UserSubscription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSiteVerified()
    {
      return $this->SiteVerified;
    }

    /**
     * @param boolean $SiteVerified
     * @return \EbayWsdl\UserType
     */
    public function setSiteVerified($SiteVerified)
    {
      $this->SiteVerified = $SiteVerified;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSkypeID()
    {
      return $this->SkypeID;
    }

    /**
     * @param string[] $SkypeID
     * @return \EbayWsdl\UserType
     */
    public function setSkypeID(array $SkypeID)
    {
      $this->SkypeID = $SkypeID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEBayWikiReadOnly()
    {
      return $this->eBayWikiReadOnly;
    }

    /**
     * @param boolean $eBayWikiReadOnly
     * @return \EbayWsdl\UserType
     */
    public function setEBayWikiReadOnly($eBayWikiReadOnly)
    {
      $this->eBayWikiReadOnly = $eBayWikiReadOnly;
      return $this;
    }

    /**
     * @return int
     */
    public function getTUVLevel()
    {
      return $this->TUVLevel;
    }

    /**
     * @param int $TUVLevel
     * @return \EbayWsdl\UserType
     */
    public function setTUVLevel($TUVLevel)
    {
      $this->TUVLevel = $TUVLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getVATID()
    {
      return $this->VATID;
    }

    /**
     * @param string $VATID
     * @return \EbayWsdl\UserType
     */
    public function setVATID($VATID)
    {
      $this->VATID = $VATID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMotorsDealer()
    {
      return $this->MotorsDealer;
    }

    /**
     * @param boolean $MotorsDealer
     * @return \EbayWsdl\UserType
     */
    public function setMotorsDealer($MotorsDealer)
    {
      $this->MotorsDealer = $MotorsDealer;
      return $this;
    }

    /**
     * @return SellerPaymentMethodCodeType
     */
    public function getSellerPaymentMethod()
    {
      return $this->SellerPaymentMethod;
    }

    /**
     * @param SellerPaymentMethodCodeType $SellerPaymentMethod
     * @return \EbayWsdl\UserType
     */
    public function setSellerPaymentMethod($SellerPaymentMethod)
    {
      $this->SellerPaymentMethod = $SellerPaymentMethod;
      return $this;
    }

    /**
     * @return BiddingSummaryType
     */
    public function getBiddingSummary()
    {
      return $this->BiddingSummary;
    }

    /**
     * @param BiddingSummaryType $BiddingSummary
     * @return \EbayWsdl\UserType
     */
    public function setBiddingSummary($BiddingSummary)
    {
      $this->BiddingSummary = $BiddingSummary;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUserAnonymized()
    {
      return $this->UserAnonymized;
    }

    /**
     * @param boolean $UserAnonymized
     * @return \EbayWsdl\UserType
     */
    public function setUserAnonymized($UserAnonymized)
    {
      $this->UserAnonymized = $UserAnonymized;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueNeutralFeedbackCount()
    {
      return $this->UniqueNeutralFeedbackCount;
    }

    /**
     * @param int $UniqueNeutralFeedbackCount
     * @return \EbayWsdl\UserType
     */
    public function setUniqueNeutralFeedbackCount($UniqueNeutralFeedbackCount)
    {
      $this->UniqueNeutralFeedbackCount = $UniqueNeutralFeedbackCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnterpriseSeller()
    {
      return $this->EnterpriseSeller;
    }

    /**
     * @param boolean $EnterpriseSeller
     * @return \EbayWsdl\UserType
     */
    public function setEnterpriseSeller($EnterpriseSeller)
    {
      $this->EnterpriseSeller = $EnterpriseSeller;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingEmail()
    {
      return $this->BillingEmail;
    }

    /**
     * @param string $BillingEmail
     * @return \EbayWsdl\UserType
     */
    public function setBillingEmail($BillingEmail)
    {
      $this->BillingEmail = $BillingEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getQualifiesForSelling()
    {
      return $this->QualifiesForSelling;
    }

    /**
     * @param boolean $QualifiesForSelling
     * @return \EbayWsdl\UserType
     */
    public function setQualifiesForSelling($QualifiesForSelling)
    {
      $this->QualifiesForSelling = $QualifiesForSelling;
      return $this;
    }

    /**
     * @return string
     */
    public function getStaticAlias()
    {
      return $this->StaticAlias;
    }

    /**
     * @param string $StaticAlias
     * @return \EbayWsdl\UserType
     */
    public function setStaticAlias($StaticAlias)
    {
      $this->StaticAlias = $StaticAlias;
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
     * @return \EbayWsdl\UserType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
