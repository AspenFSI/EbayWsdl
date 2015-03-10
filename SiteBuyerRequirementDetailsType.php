<?php

namespace EbayWsdl;

class SiteBuyerRequirementDetailsType
{

    /**
     * @var boolean $LinkedPayPalAccount
     */
    protected $LinkedPayPalAccount = null;

    /**
     * @var MaximumBuyerPolicyViolationsDetailsType $MaximumBuyerPolicyViolations
     */
    protected $MaximumBuyerPolicyViolations = null;

    /**
     * @var MaximumItemRequirementsDetailsType $MaximumItemRequirements
     */
    protected $MaximumItemRequirements = null;

    /**
     * @var MaximumUnpaidItemStrikesInfoDetailsType $MaximumUnpaidItemStrikesInfo
     */
    protected $MaximumUnpaidItemStrikesInfo = null;

    /**
     * @var MinimumFeedbackScoreDetailsType $MinimumFeedbackScore
     */
    protected $MinimumFeedbackScore = null;

    /**
     * @var boolean $ShipToRegistrationCountry
     */
    protected $ShipToRegistrationCountry = null;

    /**
     * @var VerifiedUserRequirementsDetailsType $VerifiedUserRequirements
     */
    protected $VerifiedUserRequirements = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $LinkedPayPalAccount
     * @param MaximumBuyerPolicyViolationsDetailsType $MaximumBuyerPolicyViolations
     * @param MaximumItemRequirementsDetailsType $MaximumItemRequirements
     * @param MaximumUnpaidItemStrikesInfoDetailsType $MaximumUnpaidItemStrikesInfo
     * @param MinimumFeedbackScoreDetailsType $MinimumFeedbackScore
     * @param boolean $ShipToRegistrationCountry
     * @param VerifiedUserRequirementsDetailsType $VerifiedUserRequirements
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($LinkedPayPalAccount = null, $MaximumBuyerPolicyViolations = null, $MaximumItemRequirements = null, $MaximumUnpaidItemStrikesInfo = null, $MinimumFeedbackScore = null, $ShipToRegistrationCountry = null, $VerifiedUserRequirements = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->LinkedPayPalAccount = $LinkedPayPalAccount;
      $this->MaximumBuyerPolicyViolations = $MaximumBuyerPolicyViolations;
      $this->MaximumItemRequirements = $MaximumItemRequirements;
      $this->MaximumUnpaidItemStrikesInfo = $MaximumUnpaidItemStrikesInfo;
      $this->MinimumFeedbackScore = $MinimumFeedbackScore;
      $this->ShipToRegistrationCountry = $ShipToRegistrationCountry;
      $this->VerifiedUserRequirements = $VerifiedUserRequirements;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getLinkedPayPalAccount()
    {
      return $this->LinkedPayPalAccount;
    }

    /**
     * @param boolean $LinkedPayPalAccount
     * @return \EbayWsdl\SiteBuyerRequirementDetailsType
     */
    public function setLinkedPayPalAccount($LinkedPayPalAccount)
    {
      $this->LinkedPayPalAccount = $LinkedPayPalAccount;
      return $this;
    }

    /**
     * @return MaximumBuyerPolicyViolationsDetailsType
     */
    public function getMaximumBuyerPolicyViolations()
    {
      return $this->MaximumBuyerPolicyViolations;
    }

    /**
     * @param MaximumBuyerPolicyViolationsDetailsType $MaximumBuyerPolicyViolations
     * @return \EbayWsdl\SiteBuyerRequirementDetailsType
     */
    public function setMaximumBuyerPolicyViolations($MaximumBuyerPolicyViolations)
    {
      $this->MaximumBuyerPolicyViolations = $MaximumBuyerPolicyViolations;
      return $this;
    }

    /**
     * @return MaximumItemRequirementsDetailsType
     */
    public function getMaximumItemRequirements()
    {
      return $this->MaximumItemRequirements;
    }

    /**
     * @param MaximumItemRequirementsDetailsType $MaximumItemRequirements
     * @return \EbayWsdl\SiteBuyerRequirementDetailsType
     */
    public function setMaximumItemRequirements($MaximumItemRequirements)
    {
      $this->MaximumItemRequirements = $MaximumItemRequirements;
      return $this;
    }

    /**
     * @return MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function getMaximumUnpaidItemStrikesInfo()
    {
      return $this->MaximumUnpaidItemStrikesInfo;
    }

    /**
     * @param MaximumUnpaidItemStrikesInfoDetailsType $MaximumUnpaidItemStrikesInfo
     * @return \EbayWsdl\SiteBuyerRequirementDetailsType
     */
    public function setMaximumUnpaidItemStrikesInfo($MaximumUnpaidItemStrikesInfo)
    {
      $this->MaximumUnpaidItemStrikesInfo = $MaximumUnpaidItemStrikesInfo;
      return $this;
    }

    /**
     * @return MinimumFeedbackScoreDetailsType
     */
    public function getMinimumFeedbackScore()
    {
      return $this->MinimumFeedbackScore;
    }

    /**
     * @param MinimumFeedbackScoreDetailsType $MinimumFeedbackScore
     * @return \EbayWsdl\SiteBuyerRequirementDetailsType
     */
    public function setMinimumFeedbackScore($MinimumFeedbackScore)
    {
      $this->MinimumFeedbackScore = $MinimumFeedbackScore;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipToRegistrationCountry()
    {
      return $this->ShipToRegistrationCountry;
    }

    /**
     * @param boolean $ShipToRegistrationCountry
     * @return \EbayWsdl\SiteBuyerRequirementDetailsType
     */
    public function setShipToRegistrationCountry($ShipToRegistrationCountry)
    {
      $this->ShipToRegistrationCountry = $ShipToRegistrationCountry;
      return $this;
    }

    /**
     * @return VerifiedUserRequirementsDetailsType
     */
    public function getVerifiedUserRequirements()
    {
      return $this->VerifiedUserRequirements;
    }

    /**
     * @param VerifiedUserRequirementsDetailsType $VerifiedUserRequirements
     * @return \EbayWsdl\SiteBuyerRequirementDetailsType
     */
    public function setVerifiedUserRequirements($VerifiedUserRequirements)
    {
      $this->VerifiedUserRequirements = $VerifiedUserRequirements;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailVersion()
    {
      return $this->DetailVersion;
    }

    /**
     * @param string $DetailVersion
     * @return \EbayWsdl\SiteBuyerRequirementDetailsType
     */
    public function setDetailVersion($DetailVersion)
    {
      $this->DetailVersion = $DetailVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\SiteBuyerRequirementDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\SiteBuyerRequirementDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
