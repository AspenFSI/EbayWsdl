<?php

namespace EbayWsdl;

class GetProductSearchPageResponseType extends AbstractResponseType
{

    /**
     * @var string $AttributeSystemVersion
     */
    protected $AttributeSystemVersion = null;

    /**
     * @var ProductSearchPageType[] $ProductSearchPage
     */
    protected $ProductSearchPage = null;

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
     * @param ProductSearchPageType[] $ProductSearchPage
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $AttributeSystemVersion = null, array $ProductSearchPage = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->AttributeSystemVersion = $AttributeSystemVersion;
      $this->ProductSearchPage = $ProductSearchPage;
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
     * @return \EbayWsdl\GetProductSearchPageResponseType
     */
    public function setAttributeSystemVersion($AttributeSystemVersion)
    {
      $this->AttributeSystemVersion = $AttributeSystemVersion;
      return $this;
    }

    /**
     * @return ProductSearchPageType[]
     */
    public function getProductSearchPage()
    {
      return $this->ProductSearchPage;
    }

    /**
     * @param ProductSearchPageType[] $ProductSearchPage
     * @return \EbayWsdl\GetProductSearchPageResponseType
     */
    public function setProductSearchPage(array $ProductSearchPage)
    {
      $this->ProductSearchPage = $ProductSearchPage;
      return $this;
    }

}
