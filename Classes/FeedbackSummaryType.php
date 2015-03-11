<?php

namespace EbayWsdl\Classes;

class FeedbackSummaryType
{

    /**
     * @var FeedbackPeriodArrayType $BidRetractionFeedbackPeriodArray
     */
    protected $BidRetractionFeedbackPeriodArray = null;

    /**
     * @var FeedbackPeriodArrayType $NegativeFeedbackPeriodArray
     */
    protected $NegativeFeedbackPeriodArray = null;

    /**
     * @var FeedbackPeriodArrayType $NeutralFeedbackPeriodArray
     */
    protected $NeutralFeedbackPeriodArray = null;

    /**
     * @var FeedbackPeriodArrayType $PositiveFeedbackPeriodArray
     */
    protected $PositiveFeedbackPeriodArray = null;

    /**
     * @var FeedbackPeriodArrayType $TotalFeedbackPeriodArray
     */
    protected $TotalFeedbackPeriodArray = null;

    /**
     * @var int $NeutralCommentCountFromSuspendedUsers
     */
    protected $NeutralCommentCountFromSuspendedUsers = null;

    /**
     * @var int $UniqueNegativeFeedbackCount
     */
    protected $UniqueNegativeFeedbackCount = null;

    /**
     * @var int $UniquePositiveFeedbackCount
     */
    protected $UniquePositiveFeedbackCount = null;

    /**
     * @var int $UniqueNeutralFeedbackCount
     */
    protected $UniqueNeutralFeedbackCount = null;

    /**
     * @var SellerRatingSummaryArrayType $SellerRatingSummaryArray
     */
    protected $SellerRatingSummaryArray = null;

    /**
     * @var SellerRoleMetricsType $SellerRoleMetrics
     */
    protected $SellerRoleMetrics = null;

    /**
     * @var BuyerRoleMetricsType $BuyerRoleMetrics
     */
    protected $BuyerRoleMetrics = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param FeedbackPeriodArrayType $BidRetractionFeedbackPeriodArray
     * @param FeedbackPeriodArrayType $NegativeFeedbackPeriodArray
     * @param FeedbackPeriodArrayType $NeutralFeedbackPeriodArray
     * @param FeedbackPeriodArrayType $PositiveFeedbackPeriodArray
     * @param FeedbackPeriodArrayType $TotalFeedbackPeriodArray
     * @param int $NeutralCommentCountFromSuspendedUsers
     * @param int $UniqueNegativeFeedbackCount
     * @param int $UniquePositiveFeedbackCount
     * @param int $UniqueNeutralFeedbackCount
     * @param SellerRatingSummaryArrayType $SellerRatingSummaryArray
     * @param SellerRoleMetricsType $SellerRoleMetrics
     * @param BuyerRoleMetricsType $BuyerRoleMetrics
     * @param string $any
     */
    public function __construct($BidRetractionFeedbackPeriodArray = null, $NegativeFeedbackPeriodArray = null, $NeutralFeedbackPeriodArray = null, $PositiveFeedbackPeriodArray = null, $TotalFeedbackPeriodArray = null, $NeutralCommentCountFromSuspendedUsers = null, $UniqueNegativeFeedbackCount = null, $UniquePositiveFeedbackCount = null, $UniqueNeutralFeedbackCount = null, $SellerRatingSummaryArray = null, $SellerRoleMetrics = null, $BuyerRoleMetrics = null, $any = null)
    {
      $this->BidRetractionFeedbackPeriodArray = $BidRetractionFeedbackPeriodArray;
      $this->NegativeFeedbackPeriodArray = $NegativeFeedbackPeriodArray;
      $this->NeutralFeedbackPeriodArray = $NeutralFeedbackPeriodArray;
      $this->PositiveFeedbackPeriodArray = $PositiveFeedbackPeriodArray;
      $this->TotalFeedbackPeriodArray = $TotalFeedbackPeriodArray;
      $this->NeutralCommentCountFromSuspendedUsers = $NeutralCommentCountFromSuspendedUsers;
      $this->UniqueNegativeFeedbackCount = $UniqueNegativeFeedbackCount;
      $this->UniquePositiveFeedbackCount = $UniquePositiveFeedbackCount;
      $this->UniqueNeutralFeedbackCount = $UniqueNeutralFeedbackCount;
      $this->SellerRatingSummaryArray = $SellerRatingSummaryArray;
      $this->SellerRoleMetrics = $SellerRoleMetrics;
      $this->BuyerRoleMetrics = $BuyerRoleMetrics;
      $this->any = $any;
    }

    /**
     * @return FeedbackPeriodArrayType
     */
    public function getBidRetractionFeedbackPeriodArray()
    {
      return $this->BidRetractionFeedbackPeriodArray;
    }

    /**
     * @param FeedbackPeriodArrayType $BidRetractionFeedbackPeriodArray
     * @return \EbayWsdl\Classes\FeedbackSummaryType
     */
    public function setBidRetractionFeedbackPeriodArray($BidRetractionFeedbackPeriodArray)
    {
      $this->BidRetractionFeedbackPeriodArray = $BidRetractionFeedbackPeriodArray;
      return $this;
    }

    /**
     * @return FeedbackPeriodArrayType
     */
    public function getNegativeFeedbackPeriodArray()
    {
      return $this->NegativeFeedbackPeriodArray;
    }

    /**
     * @param FeedbackPeriodArrayType $NegativeFeedbackPeriodArray
     * @return \EbayWsdl\Classes\FeedbackSummaryType
     */
    public function setNegativeFeedbackPeriodArray($NegativeFeedbackPeriodArray)
    {
      $this->NegativeFeedbackPeriodArray = $NegativeFeedbackPeriodArray;
      return $this;
    }

    /**
     * @return FeedbackPeriodArrayType
     */
    public function getNeutralFeedbackPeriodArray()
    {
      return $this->NeutralFeedbackPeriodArray;
    }

    /**
     * @param FeedbackPeriodArrayType $NeutralFeedbackPeriodArray
     * @return \EbayWsdl\Classes\FeedbackSummaryType
     */
    public function setNeutralFeedbackPeriodArray($NeutralFeedbackPeriodArray)
    {
      $this->NeutralFeedbackPeriodArray = $NeutralFeedbackPeriodArray;
      return $this;
    }

    /**
     * @return FeedbackPeriodArrayType
     */
    public function getPositiveFeedbackPeriodArray()
    {
      return $this->PositiveFeedbackPeriodArray;
    }

    /**
     * @param FeedbackPeriodArrayType $PositiveFeedbackPeriodArray
     * @return \EbayWsdl\Classes\FeedbackSummaryType
     */
    public function setPositiveFeedbackPeriodArray($PositiveFeedbackPeriodArray)
    {
      $this->PositiveFeedbackPeriodArray = $PositiveFeedbackPeriodArray;
      return $this;
    }

    /**
     * @return FeedbackPeriodArrayType
     */
    public function getTotalFeedbackPeriodArray()
    {
      return $this->TotalFeedbackPeriodArray;
    }

    /**
     * @param FeedbackPeriodArrayType $TotalFeedbackPeriodArray
     * @return \EbayWsdl\Classes\FeedbackSummaryType
     */
    public function setTotalFeedbackPeriodArray($TotalFeedbackPeriodArray)
    {
      $this->TotalFeedbackPeriodArray = $TotalFeedbackPeriodArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getNeutralCommentCountFromSuspendedUsers()
    {
      return $this->NeutralCommentCountFromSuspendedUsers;
    }

    /**
     * @param int $NeutralCommentCountFromSuspendedUsers
     * @return \EbayWsdl\Classes\FeedbackSummaryType
     */
    public function setNeutralCommentCountFromSuspendedUsers($NeutralCommentCountFromSuspendedUsers)
    {
      $this->NeutralCommentCountFromSuspendedUsers = $NeutralCommentCountFromSuspendedUsers;
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
     * @return \EbayWsdl\Classes\FeedbackSummaryType
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
     * @return \EbayWsdl\Classes\FeedbackSummaryType
     */
    public function setUniquePositiveFeedbackCount($UniquePositiveFeedbackCount)
    {
      $this->UniquePositiveFeedbackCount = $UniquePositiveFeedbackCount;
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
     * @return \EbayWsdl\Classes\FeedbackSummaryType
     */
    public function setUniqueNeutralFeedbackCount($UniqueNeutralFeedbackCount)
    {
      $this->UniqueNeutralFeedbackCount = $UniqueNeutralFeedbackCount;
      return $this;
    }

    /**
     * @return SellerRatingSummaryArrayType
     */
    public function getSellerRatingSummaryArray()
    {
      return $this->SellerRatingSummaryArray;
    }

    /**
     * @param SellerRatingSummaryArrayType $SellerRatingSummaryArray
     * @return \EbayWsdl\Classes\FeedbackSummaryType
     */
    public function setSellerRatingSummaryArray($SellerRatingSummaryArray)
    {
      $this->SellerRatingSummaryArray = $SellerRatingSummaryArray;
      return $this;
    }

    /**
     * @return SellerRoleMetricsType
     */
    public function getSellerRoleMetrics()
    {
      return $this->SellerRoleMetrics;
    }

    /**
     * @param SellerRoleMetricsType $SellerRoleMetrics
     * @return \EbayWsdl\Classes\FeedbackSummaryType
     */
    public function setSellerRoleMetrics($SellerRoleMetrics)
    {
      $this->SellerRoleMetrics = $SellerRoleMetrics;
      return $this;
    }

    /**
     * @return BuyerRoleMetricsType
     */
    public function getBuyerRoleMetrics()
    {
      return $this->BuyerRoleMetrics;
    }

    /**
     * @param BuyerRoleMetricsType $BuyerRoleMetrics
     * @return \EbayWsdl\Classes\FeedbackSummaryType
     */
    public function setBuyerRoleMetrics($BuyerRoleMetrics)
    {
      $this->BuyerRoleMetrics = $BuyerRoleMetrics;
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
     * @return \EbayWsdl\Classes\FeedbackSummaryType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
