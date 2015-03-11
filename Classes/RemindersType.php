<?php

namespace EbayWsdl\Classes;

class RemindersType
{

    /**
     * @var int $PaymentToSendCount
     */
    protected $PaymentToSendCount = null;

    /**
     * @var int $FeedbackToReceiveCount
     */
    protected $FeedbackToReceiveCount = null;

    /**
     * @var int $FeedbackToSendCount
     */
    protected $FeedbackToSendCount = null;

    /**
     * @var int $OutbidCount
     */
    protected $OutbidCount = null;

    /**
     * @var int $PaymentToReceiveCount
     */
    protected $PaymentToReceiveCount = null;

    /**
     * @var int $SecondChanceOfferCount
     */
    protected $SecondChanceOfferCount = null;

    /**
     * @var int $ShippingNeededCount
     */
    protected $ShippingNeededCount = null;

    /**
     * @var int $RelistingNeededCount
     */
    protected $RelistingNeededCount = null;

    /**
     * @var int $TotalNewLeadsCount
     */
    protected $TotalNewLeadsCount = null;

    /**
     * @var int $DocsForCCProcessingToSendCount
     */
    protected $DocsForCCProcessingToSendCount = null;

    /**
     * @var int $RTEToProcessCount
     */
    protected $RTEToProcessCount = null;

    /**
     * @var int $ItemReceiptToConfirmCount
     */
    protected $ItemReceiptToConfirmCount = null;

    /**
     * @var int $RefundOnHoldCount
     */
    protected $RefundOnHoldCount = null;

    /**
     * @var int $RefundCancelledCount
     */
    protected $RefundCancelledCount = null;

    /**
     * @var int $ShippingDetailsToBeProvidedCount
     */
    protected $ShippingDetailsToBeProvidedCount = null;

    /**
     * @var int $ItemReceiptConfirmationToReceiveCount
     */
    protected $ItemReceiptConfirmationToReceiveCount = null;

    /**
     * @var int $RefundInitiatedCount
     */
    protected $RefundInitiatedCount = null;

    /**
     * @var int $PendingRTERequestCount
     */
    protected $PendingRTERequestCount = null;

    /**
     * @var int $DeclinedRTERequestCount
     */
    protected $DeclinedRTERequestCount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $PaymentToSendCount
     * @param int $FeedbackToReceiveCount
     * @param int $FeedbackToSendCount
     * @param int $OutbidCount
     * @param int $PaymentToReceiveCount
     * @param int $SecondChanceOfferCount
     * @param int $ShippingNeededCount
     * @param int $RelistingNeededCount
     * @param int $TotalNewLeadsCount
     * @param int $DocsForCCProcessingToSendCount
     * @param int $RTEToProcessCount
     * @param int $ItemReceiptToConfirmCount
     * @param int $RefundOnHoldCount
     * @param int $RefundCancelledCount
     * @param int $ShippingDetailsToBeProvidedCount
     * @param int $ItemReceiptConfirmationToReceiveCount
     * @param int $RefundInitiatedCount
     * @param int $PendingRTERequestCount
     * @param int $DeclinedRTERequestCount
     * @param string $any
     */
    public function __construct($PaymentToSendCount = null, $FeedbackToReceiveCount = null, $FeedbackToSendCount = null, $OutbidCount = null, $PaymentToReceiveCount = null, $SecondChanceOfferCount = null, $ShippingNeededCount = null, $RelistingNeededCount = null, $TotalNewLeadsCount = null, $DocsForCCProcessingToSendCount = null, $RTEToProcessCount = null, $ItemReceiptToConfirmCount = null, $RefundOnHoldCount = null, $RefundCancelledCount = null, $ShippingDetailsToBeProvidedCount = null, $ItemReceiptConfirmationToReceiveCount = null, $RefundInitiatedCount = null, $PendingRTERequestCount = null, $DeclinedRTERequestCount = null, $any = null)
    {
      $this->PaymentToSendCount = $PaymentToSendCount;
      $this->FeedbackToReceiveCount = $FeedbackToReceiveCount;
      $this->FeedbackToSendCount = $FeedbackToSendCount;
      $this->OutbidCount = $OutbidCount;
      $this->PaymentToReceiveCount = $PaymentToReceiveCount;
      $this->SecondChanceOfferCount = $SecondChanceOfferCount;
      $this->ShippingNeededCount = $ShippingNeededCount;
      $this->RelistingNeededCount = $RelistingNeededCount;
      $this->TotalNewLeadsCount = $TotalNewLeadsCount;
      $this->DocsForCCProcessingToSendCount = $DocsForCCProcessingToSendCount;
      $this->RTEToProcessCount = $RTEToProcessCount;
      $this->ItemReceiptToConfirmCount = $ItemReceiptToConfirmCount;
      $this->RefundOnHoldCount = $RefundOnHoldCount;
      $this->RefundCancelledCount = $RefundCancelledCount;
      $this->ShippingDetailsToBeProvidedCount = $ShippingDetailsToBeProvidedCount;
      $this->ItemReceiptConfirmationToReceiveCount = $ItemReceiptConfirmationToReceiveCount;
      $this->RefundInitiatedCount = $RefundInitiatedCount;
      $this->PendingRTERequestCount = $PendingRTERequestCount;
      $this->DeclinedRTERequestCount = $DeclinedRTERequestCount;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getPaymentToSendCount()
    {
      return $this->PaymentToSendCount;
    }

    /**
     * @param int $PaymentToSendCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setPaymentToSendCount($PaymentToSendCount)
    {
      $this->PaymentToSendCount = $PaymentToSendCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackToReceiveCount()
    {
      return $this->FeedbackToReceiveCount;
    }

    /**
     * @param int $FeedbackToReceiveCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setFeedbackToReceiveCount($FeedbackToReceiveCount)
    {
      $this->FeedbackToReceiveCount = $FeedbackToReceiveCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackToSendCount()
    {
      return $this->FeedbackToSendCount;
    }

    /**
     * @param int $FeedbackToSendCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setFeedbackToSendCount($FeedbackToSendCount)
    {
      $this->FeedbackToSendCount = $FeedbackToSendCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getOutbidCount()
    {
      return $this->OutbidCount;
    }

    /**
     * @param int $OutbidCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setOutbidCount($OutbidCount)
    {
      $this->OutbidCount = $OutbidCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentToReceiveCount()
    {
      return $this->PaymentToReceiveCount;
    }

    /**
     * @param int $PaymentToReceiveCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setPaymentToReceiveCount($PaymentToReceiveCount)
    {
      $this->PaymentToReceiveCount = $PaymentToReceiveCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getSecondChanceOfferCount()
    {
      return $this->SecondChanceOfferCount;
    }

    /**
     * @param int $SecondChanceOfferCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setSecondChanceOfferCount($SecondChanceOfferCount)
    {
      $this->SecondChanceOfferCount = $SecondChanceOfferCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingNeededCount()
    {
      return $this->ShippingNeededCount;
    }

    /**
     * @param int $ShippingNeededCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setShippingNeededCount($ShippingNeededCount)
    {
      $this->ShippingNeededCount = $ShippingNeededCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelistingNeededCount()
    {
      return $this->RelistingNeededCount;
    }

    /**
     * @param int $RelistingNeededCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setRelistingNeededCount($RelistingNeededCount)
    {
      $this->RelistingNeededCount = $RelistingNeededCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalNewLeadsCount()
    {
      return $this->TotalNewLeadsCount;
    }

    /**
     * @param int $TotalNewLeadsCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setTotalNewLeadsCount($TotalNewLeadsCount)
    {
      $this->TotalNewLeadsCount = $TotalNewLeadsCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getDocsForCCProcessingToSendCount()
    {
      return $this->DocsForCCProcessingToSendCount;
    }

    /**
     * @param int $DocsForCCProcessingToSendCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setDocsForCCProcessingToSendCount($DocsForCCProcessingToSendCount)
    {
      $this->DocsForCCProcessingToSendCount = $DocsForCCProcessingToSendCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getRTEToProcessCount()
    {
      return $this->RTEToProcessCount;
    }

    /**
     * @param int $RTEToProcessCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setRTEToProcessCount($RTEToProcessCount)
    {
      $this->RTEToProcessCount = $RTEToProcessCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemReceiptToConfirmCount()
    {
      return $this->ItemReceiptToConfirmCount;
    }

    /**
     * @param int $ItemReceiptToConfirmCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setItemReceiptToConfirmCount($ItemReceiptToConfirmCount)
    {
      $this->ItemReceiptToConfirmCount = $ItemReceiptToConfirmCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefundOnHoldCount()
    {
      return $this->RefundOnHoldCount;
    }

    /**
     * @param int $RefundOnHoldCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setRefundOnHoldCount($RefundOnHoldCount)
    {
      $this->RefundOnHoldCount = $RefundOnHoldCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefundCancelledCount()
    {
      return $this->RefundCancelledCount;
    }

    /**
     * @param int $RefundCancelledCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setRefundCancelledCount($RefundCancelledCount)
    {
      $this->RefundCancelledCount = $RefundCancelledCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingDetailsToBeProvidedCount()
    {
      return $this->ShippingDetailsToBeProvidedCount;
    }

    /**
     * @param int $ShippingDetailsToBeProvidedCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setShippingDetailsToBeProvidedCount($ShippingDetailsToBeProvidedCount)
    {
      $this->ShippingDetailsToBeProvidedCount = $ShippingDetailsToBeProvidedCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemReceiptConfirmationToReceiveCount()
    {
      return $this->ItemReceiptConfirmationToReceiveCount;
    }

    /**
     * @param int $ItemReceiptConfirmationToReceiveCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setItemReceiptConfirmationToReceiveCount($ItemReceiptConfirmationToReceiveCount)
    {
      $this->ItemReceiptConfirmationToReceiveCount = $ItemReceiptConfirmationToReceiveCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefundInitiatedCount()
    {
      return $this->RefundInitiatedCount;
    }

    /**
     * @param int $RefundInitiatedCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setRefundInitiatedCount($RefundInitiatedCount)
    {
      $this->RefundInitiatedCount = $RefundInitiatedCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPendingRTERequestCount()
    {
      return $this->PendingRTERequestCount;
    }

    /**
     * @param int $PendingRTERequestCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setPendingRTERequestCount($PendingRTERequestCount)
    {
      $this->PendingRTERequestCount = $PendingRTERequestCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeclinedRTERequestCount()
    {
      return $this->DeclinedRTERequestCount;
    }

    /**
     * @param int $DeclinedRTERequestCount
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setDeclinedRTERequestCount($DeclinedRTERequestCount)
    {
      $this->DeclinedRTERequestCount = $DeclinedRTERequestCount;
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
     * @return \EbayWsdl\Classes\RemindersType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
