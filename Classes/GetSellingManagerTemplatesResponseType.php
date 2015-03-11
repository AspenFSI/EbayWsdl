<?php

namespace EbayWsdl\Classes;

class GetSellingManagerTemplatesResponseType extends AbstractResponseType
{

    /**
     * @var SellingManagerTemplateDetailsArrayType $SellingManagerTemplateDetailsArray
     */
    protected $SellingManagerTemplateDetailsArray = null;

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
     * @param SellingManagerTemplateDetailsArrayType $SellingManagerTemplateDetailsArray
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $SellingManagerTemplateDetailsArray = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->SellingManagerTemplateDetailsArray = $SellingManagerTemplateDetailsArray;
    }

    /**
     * @return SellingManagerTemplateDetailsArrayType
     */
    public function getSellingManagerTemplateDetailsArray()
    {
      return $this->SellingManagerTemplateDetailsArray;
    }

    /**
     * @param SellingManagerTemplateDetailsArrayType $SellingManagerTemplateDetailsArray
     * @return \EbayWsdl\Classes\GetSellingManagerTemplatesResponseType
     */
    public function setSellingManagerTemplateDetailsArray($SellingManagerTemplateDetailsArray)
    {
      $this->SellingManagerTemplateDetailsArray = $SellingManagerTemplateDetailsArray;
      return $this;
    }

}
