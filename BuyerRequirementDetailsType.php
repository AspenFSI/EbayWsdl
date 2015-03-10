<?php

namespace EbayWsdl;

class BuyerRequirementDetailsType
{

    /**
     * @var boolean $ShipToRegistrationCountry
     */
    protected $ShipToRegistrationCountry = null;

    /**
     * @var boolean $ZeroFeedbackScore
     */
    protected $ZeroFeedbackScore = null;

    /**
     * @var int $MinimumFeedbackScore
     */
    protected $MinimumFeedbackScore = null;

    /**
     * @var MaximumItemRequirementsType $MaximumItemRequirements
     */
    protected $MaximumItemRequirements = null;

    /**
     * @var boolean $LinkedPayPalAccount
     */
    protected $LinkedPayPalAccount = null;

    /**
     * @var VerifiedUserRequirementsType $VerifiedUserRequirements
     */
    protected $VerifiedUserRequirements = null;

    /**
     * @var MaximumUnpaidItemStrikesInfoType $MaximumUnpaidItemStrikesInfo
     */
    protected $MaximumUnpaidItemStrikesInfo = null;

    /**
     * @var MaximumBuyerPolicyViolationsType $MaximumBuyerPolicyViolations
     */
    protected $MaximumBuyerPolicyViolations = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $ShipToRegistrationCountry
     * @param boolean $ZeroFeedbackScore
     * @param int $MinimumFeedbackScore
     * @param MaximumItemRequirementsType $MaximumItemRequirements
     * @param boolean $LinkedPayPalAccount
     * @param VerifiedUserRequirementsType $VerifiedUserRequirements
     * @param MaximumUnpaidItemStrikesInfoType $MaximumUnpaidItemStrikesInfo
     * @param MaximumBuyerPolicyViolationsType $MaximumBuyerPolicyViolations
     * @param string $any
     */
    public function __construct($ShipToRegistrationCountry = null, $ZeroFeedbackScore = null, $MinimumFeedbackScore = null, $MaximumItemRequirements = null, $LinkedPayPalAccount = null, $VerifiedUserRequirements = null, $MaximumUnpaidItemStrikesInfo = null, $MaximumBuyerPolicyViolations = null, $any = null)
    {
      $this->ShipToRegistrationCountry = $ShipToRegistrationCountry;
      $this->ZeroFeedbackScore = $ZeroFeedbackScore;
      $this->MinimumFeedbackScore = $MinimumFeedbackScore;
      $this->MaximumItemRequirements = $MaximumItemRequirements;
      $this->LinkedPayPalAccount = $LinkedPayPalAccount;
      $this->VerifiedUserRequirements = $VerifiedUserRequirements;
      $this->MaximumUnpaidItemStrikesInfo = $MaximumUnpaidItemStrikesInfo;
      $this->MaximumBuyerPolicyViolations = $MaximumBuyerPolicyViolations;
      $this->any = $any;
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
     * @return \EbayWsdl\BuyerRequirementDetailsType
     */
    public function setShipToRegistrationCountry($ShipToRegistrationCountry)
    {
      $this->ShipToRegistrationCountry = $ShipToRegistrationCountry;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZeroFeedbackScore()
    {
      return $this->ZeroFeedbackScore;
    }

    /**
     * @param boolean $ZeroFeedbackScore
     * @return \EbayWsdl\BuyerRequirementDetailsType
     */
    public function setZeroFeedbackScore($ZeroFeedbackScore)
    {
      $this->ZeroFeedbackScore = $ZeroFeedbackScore;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumFeedbackScore()
    {
      return $this->MinimumFeedbackScore;
    }

    /**
     * @param int $MinimumFeedbackScore
     * @return \EbayWsdl\BuyerRequirementDetailsType
     */
    public function setMinimumFeedbackScore($MinimumFeedbackScore)
    {
      $this->MinimumFeedbackScore = $MinimumFeedbackScore;
      return $this;
    }

    /**
     * @return MaximumItemRequirementsType
     */
    public function getMaximumItemRequirements()
    {
      return $this->MaximumItemRequirements;
    }

    /**
     * @param MaximumItemRequirementsType $MaximumItemRequirements
     * @return \EbayWsdl\BuyerRequirementDetailsType
     */
    public function setMaximumItemRequirements($MaximumItemRequirements)
    {
      $this->MaximumItemRequirements = $MaximumItemRequirements;
      return $this;
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
     * @return \EbayWsdl\BuyerRequirementDetailsType
     */
    public function setLinkedPayPalAccount($LinkedPayPalAccount)
    {
      $this->LinkedPayPalAccount = $LinkedPayPalAccount;
      return $this;
    }

    /**
     * @return VerifiedUserRequirementsType
     */
    public function getVerifiedUserRequirements()
    {
      return $this->VerifiedUserRequirements;
    }

    /**
     * @param VerifiedUserRequirementsType $VerifiedUserRequirements
     * @return \EbayWsdl\BuyerRequirementDetailsType
     */
    public function setVerifiedUserRequirements($VerifiedUserRequirements)
    {
      $this->VerifiedUserRequirements = $VerifiedUserRequirements;
      return $this;
    }

    /**
     * @return MaximumUnpaidItemStrikesInfoType
     */
    public function getMaximumUnpaidItemStrikesInfo()
    {
      return $this->MaximumUnpaidItemStrikesInfo;
    }

    /**
     * @param MaximumUnpaidItemStrikesInfoType $MaximumUnpaidItemStrikesInfo
     * @return \EbayWsdl\BuyerRequirementDetailsType
     */
    public function setMaximumUnpaidItemStrikesInfo($MaximumUnpaidItemStrikesInfo)
    {
      $this->MaximumUnpaidItemStrikesInfo = $MaximumUnpaidItemStrikesInfo;
      return $this;
    }

    /**
     * @return MaximumBuyerPolicyViolationsType
     */
    public function getMaximumBuyerPolicyViolations()
    {
      return $this->MaximumBuyerPolicyViolations;
    }

    /**
     * @param MaximumBuyerPolicyViolationsType $MaximumBuyerPolicyViolations
     * @return \EbayWsdl\BuyerRequirementDetailsType
     */
    public function setMaximumBuyerPolicyViolations($MaximumBuyerPolicyViolations)
    {
      $this->MaximumBuyerPolicyViolations = $MaximumBuyerPolicyViolations;
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
     * @return \EbayWsdl\BuyerRequirementDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
