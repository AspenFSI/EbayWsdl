<?php

namespace EbayWsdl;

class GetMemberMessagesResponseType extends AbstractResponseType
{

    /**
     * @var MemberMessageExchangeArrayType $MemberMessage
     */
    protected $MemberMessage = null;

    /**
     * @var PaginationResultType $PaginationResult
     */
    protected $PaginationResult = null;

    /**
     * @var boolean $HasMoreItems
     */
    protected $HasMoreItems = null;

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
     * @param MemberMessageExchangeArrayType $MemberMessage
     * @param PaginationResultType $PaginationResult
     * @param boolean $HasMoreItems
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $MemberMessage = null, $PaginationResult = null, $HasMoreItems = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->MemberMessage = $MemberMessage;
      $this->PaginationResult = $PaginationResult;
      $this->HasMoreItems = $HasMoreItems;
    }

    /**
     * @return MemberMessageExchangeArrayType
     */
    public function getMemberMessage()
    {
      return $this->MemberMessage;
    }

    /**
     * @param MemberMessageExchangeArrayType $MemberMessage
     * @return \EbayWsdl\GetMemberMessagesResponseType
     */
    public function setMemberMessage($MemberMessage)
    {
      $this->MemberMessage = $MemberMessage;
      return $this;
    }

    /**
     * @return PaginationResultType
     */
    public function getPaginationResult()
    {
      return $this->PaginationResult;
    }

    /**
     * @param PaginationResultType $PaginationResult
     * @return \EbayWsdl\GetMemberMessagesResponseType
     */
    public function setPaginationResult($PaginationResult)
    {
      $this->PaginationResult = $PaginationResult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasMoreItems()
    {
      return $this->HasMoreItems;
    }

    /**
     * @param boolean $HasMoreItems
     * @return \EbayWsdl\GetMemberMessagesResponseType
     */
    public function setHasMoreItems($HasMoreItems)
    {
      $this->HasMoreItems = $HasMoreItems;
      return $this;
    }

}
