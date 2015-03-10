<?php

namespace EbayWsdl;

class SellereBayPaymentProcessConsentCodeType
{

    /**
     * @var boolean $PayoutMethodSet
     */
    protected $PayoutMethodSet = null;

    /**
     * @var PayoutMethodType $PayoutMethod
     */
    protected $PayoutMethod = null;

    /**
     * @var UserAgreementInfoType[] $UserAgreementInfo
     */
    protected $UserAgreementInfo = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $PayoutMethodSet
     * @param PayoutMethodType $PayoutMethod
     * @param UserAgreementInfoType[] $UserAgreementInfo
     * @param string $any
     */
    public function __construct($PayoutMethodSet = null, $PayoutMethod = null, array $UserAgreementInfo = null, $any = null)
    {
      $this->PayoutMethodSet = $PayoutMethodSet;
      $this->PayoutMethod = $PayoutMethod;
      $this->UserAgreementInfo = $UserAgreementInfo;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getPayoutMethodSet()
    {
      return $this->PayoutMethodSet;
    }

    /**
     * @param boolean $PayoutMethodSet
     * @return \EbayWsdl\SellereBayPaymentProcessConsentCodeType
     */
    public function setPayoutMethodSet($PayoutMethodSet)
    {
      $this->PayoutMethodSet = $PayoutMethodSet;
      return $this;
    }

    /**
     * @return PayoutMethodType
     */
    public function getPayoutMethod()
    {
      return $this->PayoutMethod;
    }

    /**
     * @param PayoutMethodType $PayoutMethod
     * @return \EbayWsdl\SellereBayPaymentProcessConsentCodeType
     */
    public function setPayoutMethod($PayoutMethod)
    {
      $this->PayoutMethod = $PayoutMethod;
      return $this;
    }

    /**
     * @return UserAgreementInfoType[]
     */
    public function getUserAgreementInfo()
    {
      return $this->UserAgreementInfo;
    }

    /**
     * @param UserAgreementInfoType[] $UserAgreementInfo
     * @return \EbayWsdl\SellereBayPaymentProcessConsentCodeType
     */
    public function setUserAgreementInfo(array $UserAgreementInfo)
    {
      $this->UserAgreementInfo = $UserAgreementInfo;
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
     * @return \EbayWsdl\SellereBayPaymentProcessConsentCodeType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
