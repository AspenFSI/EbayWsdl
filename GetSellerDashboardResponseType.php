<?php

namespace EbayWsdl;

class GetSellerDashboardResponseType extends AbstractResponseType
{

    /**
     * @var SearchStandingDashboardType $SearchStanding
     */
    protected $SearchStanding = null;

    /**
     * @var SellerFeeDiscountDashboardType $SellerFeeDiscount
     */
    protected $SellerFeeDiscount = null;

    /**
     * @var PowerSellerDashboardType $PowerSellerStatus
     */
    protected $PowerSellerStatus = null;

    /**
     * @var PolicyComplianceDashboardType $PolicyCompliance
     */
    protected $PolicyCompliance = null;

    /**
     * @var BuyerSatisfactionDashboardType $BuyerSatisfaction
     */
    protected $BuyerSatisfaction = null;

    /**
     * @var SellerAccountDashboardType $SellerAccount
     */
    protected $SellerAccount = null;

    /**
     * @var PerformanceDashboardType[] $Performance
     */
    protected $Performance = null;

    /**
     * @param \DateTime $Timestamp
     * @param AckCodeType $Ack
     * @param string $CorrelationID
     * @param ErrorType[] $Errors
     * @param string $Message
     * @param string $Version
     * @param string $Build
     * @param string $NotificationEventName
     * @param DuplicateInvocationDetailsType $DuplicateInvocationDetails
     * @param string $RecipientUserID
     * @param string $EIASToken
     * @param string $NotificationSignature
     * @param string $HardExpirationWarning
     * @param BotBlockResponseType $BotBlock
     * @param string $ExternalUserData
     * @param string $any
     * @param SearchStandingDashboardType $SearchStanding
     * @param SellerFeeDiscountDashboardType $SellerFeeDiscount
     * @param PowerSellerDashboardType $PowerSellerStatus
     * @param PolicyComplianceDashboardType $PolicyCompliance
     * @param BuyerSatisfactionDashboardType $BuyerSatisfaction
     * @param SellerAccountDashboardType $SellerAccount
     * @param PerformanceDashboardType[] $Performance
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $SearchStanding = null, $SellerFeeDiscount = null, $PowerSellerStatus = null, $PolicyCompliance = null, $BuyerSatisfaction = null, $SellerAccount = null, array $Performance = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->SearchStanding = $SearchStanding;
      $this->SellerFeeDiscount = $SellerFeeDiscount;
      $this->PowerSellerStatus = $PowerSellerStatus;
      $this->PolicyCompliance = $PolicyCompliance;
      $this->BuyerSatisfaction = $BuyerSatisfaction;
      $this->SellerAccount = $SellerAccount;
      $this->Performance = $Performance;
    }

    /**
     * @return SearchStandingDashboardType
     */
    public function getSearchStanding()
    {
      return $this->SearchStanding;
    }

    /**
     * @param SearchStandingDashboardType $SearchStanding
     * @return \EbayWsdl\GetSellerDashboardResponseType
     */
    public function setSearchStanding($SearchStanding)
    {
      $this->SearchStanding = $SearchStanding;
      return $this;
    }

    /**
     * @return SellerFeeDiscountDashboardType
     */
    public function getSellerFeeDiscount()
    {
      return $this->SellerFeeDiscount;
    }

    /**
     * @param SellerFeeDiscountDashboardType $SellerFeeDiscount
     * @return \EbayWsdl\GetSellerDashboardResponseType
     */
    public function setSellerFeeDiscount($SellerFeeDiscount)
    {
      $this->SellerFeeDiscount = $SellerFeeDiscount;
      return $this;
    }

    /**
     * @return PowerSellerDashboardType
     */
    public function getPowerSellerStatus()
    {
      return $this->PowerSellerStatus;
    }

    /**
     * @param PowerSellerDashboardType $PowerSellerStatus
     * @return \EbayWsdl\GetSellerDashboardResponseType
     */
    public function setPowerSellerStatus($PowerSellerStatus)
    {
      $this->PowerSellerStatus = $PowerSellerStatus;
      return $this;
    }

    /**
     * @return PolicyComplianceDashboardType
     */
    public function getPolicyCompliance()
    {
      return $this->PolicyCompliance;
    }

    /**
     * @param PolicyComplianceDashboardType $PolicyCompliance
     * @return \EbayWsdl\GetSellerDashboardResponseType
     */
    public function setPolicyCompliance($PolicyCompliance)
    {
      $this->PolicyCompliance = $PolicyCompliance;
      return $this;
    }

    /**
     * @return BuyerSatisfactionDashboardType
     */
    public function getBuyerSatisfaction()
    {
      return $this->BuyerSatisfaction;
    }

    /**
     * @param BuyerSatisfactionDashboardType $BuyerSatisfaction
     * @return \EbayWsdl\GetSellerDashboardResponseType
     */
    public function setBuyerSatisfaction($BuyerSatisfaction)
    {
      $this->BuyerSatisfaction = $BuyerSatisfaction;
      return $this;
    }

    /**
     * @return SellerAccountDashboardType
     */
    public function getSellerAccount()
    {
      return $this->SellerAccount;
    }

    /**
     * @param SellerAccountDashboardType $SellerAccount
     * @return \EbayWsdl\GetSellerDashboardResponseType
     */
    public function setSellerAccount($SellerAccount)
    {
      $this->SellerAccount = $SellerAccount;
      return $this;
    }

    /**
     * @return PerformanceDashboardType[]
     */
    public function getPerformance()
    {
      return $this->Performance;
    }

    /**
     * @param PerformanceDashboardType[] $Performance
     * @return \EbayWsdl\GetSellerDashboardResponseType
     */
    public function setPerformance(array $Performance)
    {
      $this->Performance = $Performance;
      return $this;
    }

}
