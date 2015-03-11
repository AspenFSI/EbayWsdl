<?php

namespace EbayWsdl\Classes;

class IssueRefundResponseType extends AbstractResponseType
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
     * @param AmountType $RefundFromSeller
     * @param AmountType $TotalRefundToBuyer
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $RefundFromSeller = null, $TotalRefundToBuyer = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->RefundFromSeller = $RefundFromSeller;
      $this->TotalRefundToBuyer = $TotalRefundToBuyer;
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
     * @return \EbayWsdl\Classes\IssueRefundResponseType
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
     * @return \EbayWsdl\Classes\IssueRefundResponseType
     */
    public function setTotalRefundToBuyer($TotalRefundToBuyer)
    {
      $this->TotalRefundToBuyer = $TotalRefundToBuyer;
      return $this;
    }

}
