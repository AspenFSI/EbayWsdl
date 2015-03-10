<?php

namespace EbayWsdl;

class SellerRoleMetricsType
{

    /**
     * @var int $PositiveFeedbackLeftCount
     */
    protected $PositiveFeedbackLeftCount = null;

    /**
     * @var int $NegativeFeedbackLeftCount
     */
    protected $NegativeFeedbackLeftCount = null;

    /**
     * @var int $NeutralFeedbackLeftCount
     */
    protected $NeutralFeedbackLeftCount = null;

    /**
     * @var float $FeedbackLeftPercent
     */
    protected $FeedbackLeftPercent = null;

    /**
     * @var int $RepeatBuyerCount
     */
    protected $RepeatBuyerCount = null;

    /**
     * @var float $RepeatBuyerPercent
     */
    protected $RepeatBuyerPercent = null;

    /**
     * @var int $UniqueBuyerCount
     */
    protected $UniqueBuyerCount = null;

    /**
     * @var float $TransactionPercent
     */
    protected $TransactionPercent = null;

    /**
     * @var int $CrossBorderTransactionCount
     */
    protected $CrossBorderTransactionCount = null;

    /**
     * @var float $CrossBorderTransactionPercent
     */
    protected $CrossBorderTransactionPercent = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $PositiveFeedbackLeftCount
     * @param int $NegativeFeedbackLeftCount
     * @param int $NeutralFeedbackLeftCount
     * @param float $FeedbackLeftPercent
     * @param int $RepeatBuyerCount
     * @param float $RepeatBuyerPercent
     * @param int $UniqueBuyerCount
     * @param float $TransactionPercent
     * @param int $CrossBorderTransactionCount
     * @param float $CrossBorderTransactionPercent
     * @param string $any
     */
    public function __construct($PositiveFeedbackLeftCount = null, $NegativeFeedbackLeftCount = null, $NeutralFeedbackLeftCount = null, $FeedbackLeftPercent = null, $RepeatBuyerCount = null, $RepeatBuyerPercent = null, $UniqueBuyerCount = null, $TransactionPercent = null, $CrossBorderTransactionCount = null, $CrossBorderTransactionPercent = null, $any = null)
    {
      $this->PositiveFeedbackLeftCount = $PositiveFeedbackLeftCount;
      $this->NegativeFeedbackLeftCount = $NegativeFeedbackLeftCount;
      $this->NeutralFeedbackLeftCount = $NeutralFeedbackLeftCount;
      $this->FeedbackLeftPercent = $FeedbackLeftPercent;
      $this->RepeatBuyerCount = $RepeatBuyerCount;
      $this->RepeatBuyerPercent = $RepeatBuyerPercent;
      $this->UniqueBuyerCount = $UniqueBuyerCount;
      $this->TransactionPercent = $TransactionPercent;
      $this->CrossBorderTransactionCount = $CrossBorderTransactionCount;
      $this->CrossBorderTransactionPercent = $CrossBorderTransactionPercent;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getPositiveFeedbackLeftCount()
    {
      return $this->PositiveFeedbackLeftCount;
    }

    /**
     * @param int $PositiveFeedbackLeftCount
     * @return \EbayWsdl\SellerRoleMetricsType
     */
    public function setPositiveFeedbackLeftCount($PositiveFeedbackLeftCount)
    {
      $this->PositiveFeedbackLeftCount = $PositiveFeedbackLeftCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getNegativeFeedbackLeftCount()
    {
      return $this->NegativeFeedbackLeftCount;
    }

    /**
     * @param int $NegativeFeedbackLeftCount
     * @return \EbayWsdl\SellerRoleMetricsType
     */
    public function setNegativeFeedbackLeftCount($NegativeFeedbackLeftCount)
    {
      $this->NegativeFeedbackLeftCount = $NegativeFeedbackLeftCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getNeutralFeedbackLeftCount()
    {
      return $this->NeutralFeedbackLeftCount;
    }

    /**
     * @param int $NeutralFeedbackLeftCount
     * @return \EbayWsdl\SellerRoleMetricsType
     */
    public function setNeutralFeedbackLeftCount($NeutralFeedbackLeftCount)
    {
      $this->NeutralFeedbackLeftCount = $NeutralFeedbackLeftCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getFeedbackLeftPercent()
    {
      return $this->FeedbackLeftPercent;
    }

    /**
     * @param float $FeedbackLeftPercent
     * @return \EbayWsdl\SellerRoleMetricsType
     */
    public function setFeedbackLeftPercent($FeedbackLeftPercent)
    {
      $this->FeedbackLeftPercent = $FeedbackLeftPercent;
      return $this;
    }

    /**
     * @return int
     */
    public function getRepeatBuyerCount()
    {
      return $this->RepeatBuyerCount;
    }

    /**
     * @param int $RepeatBuyerCount
     * @return \EbayWsdl\SellerRoleMetricsType
     */
    public function setRepeatBuyerCount($RepeatBuyerCount)
    {
      $this->RepeatBuyerCount = $RepeatBuyerCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getRepeatBuyerPercent()
    {
      return $this->RepeatBuyerPercent;
    }

    /**
     * @param float $RepeatBuyerPercent
     * @return \EbayWsdl\SellerRoleMetricsType
     */
    public function setRepeatBuyerPercent($RepeatBuyerPercent)
    {
      $this->RepeatBuyerPercent = $RepeatBuyerPercent;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueBuyerCount()
    {
      return $this->UniqueBuyerCount;
    }

    /**
     * @param int $UniqueBuyerCount
     * @return \EbayWsdl\SellerRoleMetricsType
     */
    public function setUniqueBuyerCount($UniqueBuyerCount)
    {
      $this->UniqueBuyerCount = $UniqueBuyerCount;
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
     * @return \EbayWsdl\SellerRoleMetricsType
     */
    public function setTransactionPercent($TransactionPercent)
    {
      $this->TransactionPercent = $TransactionPercent;
      return $this;
    }

    /**
     * @return int
     */
    public function getCrossBorderTransactionCount()
    {
      return $this->CrossBorderTransactionCount;
    }

    /**
     * @param int $CrossBorderTransactionCount
     * @return \EbayWsdl\SellerRoleMetricsType
     */
    public function setCrossBorderTransactionCount($CrossBorderTransactionCount)
    {
      $this->CrossBorderTransactionCount = $CrossBorderTransactionCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getCrossBorderTransactionPercent()
    {
      return $this->CrossBorderTransactionPercent;
    }

    /**
     * @param float $CrossBorderTransactionPercent
     * @return \EbayWsdl\SellerRoleMetricsType
     */
    public function setCrossBorderTransactionPercent($CrossBorderTransactionPercent)
    {
      $this->CrossBorderTransactionPercent = $CrossBorderTransactionPercent;
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
     * @return \EbayWsdl\SellerRoleMetricsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
