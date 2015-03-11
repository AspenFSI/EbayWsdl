<?php

namespace EbayWsdl\Classes;

class RefundType
{

    /**
     * @var AmountType $RefundFromSeller
     */
    protected $RefundFromSeller = null;

    /**
     * @var AmountType $TotalRefundToBuyer
     */
    protected $TotalRefundToBuyer = null;

    /**
     * @var \DateTime $RefundTime
     */
    protected $RefundTime = null;

    /**
     * @var string $RefundID
     */
    protected $RefundID = null;

    /**
     * @var RefundTransactionArrayType $RefundTransactionArray
     */
    protected $RefundTransactionArray = null;

    /**
     * @var AmountType $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var RefundStatusCodeType $RefundStatus
     */
    protected $RefundStatus = null;

    /**
     * @var RefundFailureReasonType $RefundFailureReason
     */
    protected $RefundFailureReason = null;

    /**
     * @var RefundFundingSourceArrayType $RefundFundingSourceArray
     */
    protected $RefundFundingSourceArray = null;

    /**
     * @var string $ExternalReferenceID
     */
    protected $ExternalReferenceID = null;

    /**
     * @var \DateTime $RefundRequestedTime
     */
    protected $RefundRequestedTime = null;

    /**
     * @var \DateTime $RefundCompletionTime
     */
    protected $RefundCompletionTime = null;

    /**
     * @var \DateTime $EstimatedRefundCompletionTime
     */
    protected $EstimatedRefundCompletionTime = null;

    /**
     * @var string $SellerNoteToBuyer
     */
    protected $SellerNoteToBuyer = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $RefundFromSeller
     * @param AmountType $TotalRefundToBuyer
     * @param \DateTime $RefundTime
     * @param string $RefundID
     * @param RefundTransactionArrayType $RefundTransactionArray
     * @param AmountType $RefundAmount
     * @param RefundStatusCodeType $RefundStatus
     * @param RefundFailureReasonType $RefundFailureReason
     * @param RefundFundingSourceArrayType $RefundFundingSourceArray
     * @param string $ExternalReferenceID
     * @param \DateTime $RefundRequestedTime
     * @param \DateTime $RefundCompletionTime
     * @param \DateTime $EstimatedRefundCompletionTime
     * @param string $SellerNoteToBuyer
     * @param string $any
     */
    public function __construct($RefundFromSeller = null, $TotalRefundToBuyer = null, \DateTime $RefundTime = null, $RefundID = null, $RefundTransactionArray = null, $RefundAmount = null, $RefundStatus = null, $RefundFailureReason = null, $RefundFundingSourceArray = null, $ExternalReferenceID = null, \DateTime $RefundRequestedTime = null, \DateTime $RefundCompletionTime = null, \DateTime $EstimatedRefundCompletionTime = null, $SellerNoteToBuyer = null, $any = null)
    {
      $this->RefundFromSeller = $RefundFromSeller;
      $this->TotalRefundToBuyer = $TotalRefundToBuyer;
      $this->RefundTime = $RefundTime ? $RefundTime->format(\DateTime::ATOM) : null;
      $this->RefundID = $RefundID;
      $this->RefundTransactionArray = $RefundTransactionArray;
      $this->RefundAmount = $RefundAmount;
      $this->RefundStatus = $RefundStatus;
      $this->RefundFailureReason = $RefundFailureReason;
      $this->RefundFundingSourceArray = $RefundFundingSourceArray;
      $this->ExternalReferenceID = $ExternalReferenceID;
      $this->RefundRequestedTime = $RefundRequestedTime ? $RefundRequestedTime->format(\DateTime::ATOM) : null;
      $this->RefundCompletionTime = $RefundCompletionTime ? $RefundCompletionTime->format(\DateTime::ATOM) : null;
      $this->EstimatedRefundCompletionTime = $EstimatedRefundCompletionTime ? $EstimatedRefundCompletionTime->format(\DateTime::ATOM) : null;
      $this->SellerNoteToBuyer = $SellerNoteToBuyer;
      $this->any = $any;
    }

    /**
     * @return AmountType
     */
    public function getRefundFromSeller()
    {
      return $this->RefundFromSeller;
    }

    /**
     * @param AmountType $RefundFromSeller
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setRefundFromSeller($RefundFromSeller)
    {
      $this->RefundFromSeller = $RefundFromSeller;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getTotalRefundToBuyer()
    {
      return $this->TotalRefundToBuyer;
    }

    /**
     * @param AmountType $TotalRefundToBuyer
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setTotalRefundToBuyer($TotalRefundToBuyer)
    {
      $this->TotalRefundToBuyer = $TotalRefundToBuyer;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRefundTime()
    {
      if ($this->RefundTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RefundTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RefundTime
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setRefundTime(\DateTime $RefundTime)
    {
      $this->RefundTime = $RefundTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getRefundID()
    {
      return $this->RefundID;
    }

    /**
     * @param string $RefundID
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setRefundID($RefundID)
    {
      $this->RefundID = $RefundID;
      return $this;
    }

    /**
     * @return RefundTransactionArrayType
     */
    public function getRefundTransactionArray()
    {
      return $this->RefundTransactionArray;
    }

    /**
     * @param RefundTransactionArrayType $RefundTransactionArray
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setRefundTransactionArray($RefundTransactionArray)
    {
      $this->RefundTransactionArray = $RefundTransactionArray;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getRefundAmount()
    {
      return $this->RefundAmount;
    }

    /**
     * @param AmountType $RefundAmount
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return RefundStatusCodeType
     */
    public function getRefundStatus()
    {
      return $this->RefundStatus;
    }

    /**
     * @param RefundStatusCodeType $RefundStatus
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setRefundStatus($RefundStatus)
    {
      $this->RefundStatus = $RefundStatus;
      return $this;
    }

    /**
     * @return RefundFailureReasonType
     */
    public function getRefundFailureReason()
    {
      return $this->RefundFailureReason;
    }

    /**
     * @param RefundFailureReasonType $RefundFailureReason
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setRefundFailureReason($RefundFailureReason)
    {
      $this->RefundFailureReason = $RefundFailureReason;
      return $this;
    }

    /**
     * @return RefundFundingSourceArrayType
     */
    public function getRefundFundingSourceArray()
    {
      return $this->RefundFundingSourceArray;
    }

    /**
     * @param RefundFundingSourceArrayType $RefundFundingSourceArray
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setRefundFundingSourceArray($RefundFundingSourceArray)
    {
      $this->RefundFundingSourceArray = $RefundFundingSourceArray;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalReferenceID()
    {
      return $this->ExternalReferenceID;
    }

    /**
     * @param string $ExternalReferenceID
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setExternalReferenceID($ExternalReferenceID)
    {
      $this->ExternalReferenceID = $ExternalReferenceID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRefundRequestedTime()
    {
      if ($this->RefundRequestedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RefundRequestedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RefundRequestedTime
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setRefundRequestedTime(\DateTime $RefundRequestedTime)
    {
      $this->RefundRequestedTime = $RefundRequestedTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRefundCompletionTime()
    {
      if ($this->RefundCompletionTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RefundCompletionTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RefundCompletionTime
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setRefundCompletionTime(\DateTime $RefundCompletionTime)
    {
      $this->RefundCompletionTime = $RefundCompletionTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEstimatedRefundCompletionTime()
    {
      if ($this->EstimatedRefundCompletionTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EstimatedRefundCompletionTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EstimatedRefundCompletionTime
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setEstimatedRefundCompletionTime(\DateTime $EstimatedRefundCompletionTime)
    {
      $this->EstimatedRefundCompletionTime = $EstimatedRefundCompletionTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerNoteToBuyer()
    {
      return $this->SellerNoteToBuyer;
    }

    /**
     * @param string $SellerNoteToBuyer
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setSellerNoteToBuyer($SellerNoteToBuyer)
    {
      $this->SellerNoteToBuyer = $SellerNoteToBuyer;
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
     * @return \EbayWsdl\Classes\RefundType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
