<?php

namespace EbayWsdl\Classes;

class GetProductFinderResponseType extends AbstractResponseType
{

    /**
     * @var string $AttributeSystemVersion
     */
    protected $AttributeSystemVersion = null;

    /**
     * @var string $ProductFinderData
     */
    protected $ProductFinderData = null;

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
     * @param string $AttributeSystemVersion
     * @param string $ProductFinderData
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $AttributeSystemVersion = null, $ProductFinderData = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->AttributeSystemVersion = $AttributeSystemVersion;
      $this->ProductFinderData = $ProductFinderData;
    }

    /**
     * @return string
     */
    public function getAttributeSystemVersion()
    {
      return $this->AttributeSystemVersion;
    }

    /**
     * @param string $AttributeSystemVersion
     * @return \EbayWsdl\Classes\GetProductFinderResponseType
     */
    public function setAttributeSystemVersion($AttributeSystemVersion)
    {
      $this->AttributeSystemVersion = $AttributeSystemVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductFinderData()
    {
      return $this->ProductFinderData;
    }

    /**
     * @param string $ProductFinderData
     * @return \EbayWsdl\Classes\GetProductFinderResponseType
     */
    public function setProductFinderData($ProductFinderData)
    {
      $this->ProductFinderData = $ProductFinderData;
      return $this;
    }

}
