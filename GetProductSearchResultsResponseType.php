<?php

namespace EbayWsdl;

class GetProductSearchResultsResponseType extends AbstractResponseType
{

    /**
     * @var DataElementSetType[] $DataElementSets
     */
    protected $DataElementSets = null;

    /**
     * @var ProductSearchResultType[] $ProductSearchResult
     */
    protected $ProductSearchResult = null;

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
     * @param DataElementSetType[] $DataElementSets
     * @param ProductSearchResultType[] $ProductSearchResult
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $DataElementSets = null, array $ProductSearchResult = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->DataElementSets = $DataElementSets;
      $this->ProductSearchResult = $ProductSearchResult;
    }

    /**
     * @return DataElementSetType[]
     */
    public function getDataElementSets()
    {
      return $this->DataElementSets;
    }

    /**
     * @param DataElementSetType[] $DataElementSets
     * @return \EbayWsdl\GetProductSearchResultsResponseType
     */
    public function setDataElementSets(array $DataElementSets)
    {
      $this->DataElementSets = $DataElementSets;
      return $this;
    }

    /**
     * @return ProductSearchResultType[]
     */
    public function getProductSearchResult()
    {
      return $this->ProductSearchResult;
    }

    /**
     * @param ProductSearchResultType[] $ProductSearchResult
     * @return \EbayWsdl\GetProductSearchResultsResponseType
     */
    public function setProductSearchResult(array $ProductSearchResult)
    {
      $this->ProductSearchResult = $ProductSearchResult;
      return $this;
    }

}
