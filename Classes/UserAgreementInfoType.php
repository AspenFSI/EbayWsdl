<?php

namespace EbayWsdl\Classes;

class UserAgreementInfoType
{

    /**
     * @var SiteCodeType $Site
     */
    protected $Site = null;

    /**
     * @var SellereBayPaymentProcessStatusCodeType $SellereBayPaymentProcessStatus
     */
    protected $SellereBayPaymentProcessStatus = null;

    /**
     * @var \DateTime $AcceptedTime
     */
    protected $AcceptedTime = null;

    /**
     * @var \DateTime $SellereBayPaymentProcessEnableTime
     */
    protected $SellereBayPaymentProcessEnableTime = null;

    /**
     * @var anyURI $UserAgreementURL
     */
    protected $UserAgreementURL = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param SiteCodeType $Site
     * @param SellereBayPaymentProcessStatusCodeType $SellereBayPaymentProcessStatus
     * @param \DateTime $AcceptedTime
     * @param \DateTime $SellereBayPaymentProcessEnableTime
     * @param anyURI $UserAgreementURL
     * @param string $any
     */
    public function __construct($Site = null, $SellereBayPaymentProcessStatus = null, \DateTime $AcceptedTime = null, \DateTime $SellereBayPaymentProcessEnableTime = null, $UserAgreementURL = null, $any = null)
    {
      $this->Site = $Site;
      $this->SellereBayPaymentProcessStatus = $SellereBayPaymentProcessStatus;
      $this->AcceptedTime = $AcceptedTime ? $AcceptedTime->format(\DateTime::ATOM) : null;
      $this->SellereBayPaymentProcessEnableTime = $SellereBayPaymentProcessEnableTime ? $SellereBayPaymentProcessEnableTime->format(\DateTime::ATOM) : null;
      $this->UserAgreementURL = $UserAgreementURL;
      $this->any = $any;
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
     * @return \EbayWsdl\Classes\UserAgreementInfoType
     */
    public function setSite($Site)
    {
      $this->Site = $Site;
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
     * @return \EbayWsdl\Classes\UserAgreementInfoType
     */
    public function setSellereBayPaymentProcessStatus($SellereBayPaymentProcessStatus)
    {
      $this->SellereBayPaymentProcessStatus = $SellereBayPaymentProcessStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAcceptedTime()
    {
      if ($this->AcceptedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AcceptedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AcceptedTime
     * @return \EbayWsdl\Classes\UserAgreementInfoType
     */
    public function setAcceptedTime(\DateTime $AcceptedTime)
    {
      $this->AcceptedTime = $AcceptedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSellereBayPaymentProcessEnableTime()
    {
      if ($this->SellereBayPaymentProcessEnableTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SellereBayPaymentProcessEnableTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SellereBayPaymentProcessEnableTime
     * @return \EbayWsdl\Classes\UserAgreementInfoType
     */
    public function setSellereBayPaymentProcessEnableTime(\DateTime $SellereBayPaymentProcessEnableTime)
    {
      $this->SellereBayPaymentProcessEnableTime = $SellereBayPaymentProcessEnableTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getUserAgreementURL()
    {
      return $this->UserAgreementURL;
    }

    /**
     * @param anyURI $UserAgreementURL
     * @return \EbayWsdl\Classes\UserAgreementInfoType
     */
    public function setUserAgreementURL($UserAgreementURL)
    {
      $this->UserAgreementURL = $UserAgreementURL;
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
     * @return \EbayWsdl\Classes\UserAgreementInfoType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
