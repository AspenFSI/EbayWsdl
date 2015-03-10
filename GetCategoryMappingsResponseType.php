<?php

namespace EbayWsdl;

class GetCategoryMappingsResponseType extends AbstractResponseType
{

    /**
     * @var CategoryMappingType[] $CategoryMapping
     */
    protected $CategoryMapping = null;

    /**
     * @var string $CategoryVersion
     */
    protected $CategoryVersion = null;

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
     * @param CategoryMappingType[] $CategoryMapping
     * @param string $CategoryVersion
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $CategoryMapping = null, $CategoryVersion = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->CategoryMapping = $CategoryMapping;
      $this->CategoryVersion = $CategoryVersion;
    }

    /**
     * @return CategoryMappingType[]
     */
    public function getCategoryMapping()
    {
      return $this->CategoryMapping;
    }

    /**
     * @param CategoryMappingType[] $CategoryMapping
     * @return \EbayWsdl\GetCategoryMappingsResponseType
     */
    public function setCategoryMapping(array $CategoryMapping)
    {
      $this->CategoryMapping = $CategoryMapping;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryVersion()
    {
      return $this->CategoryVersion;
    }

    /**
     * @param string $CategoryVersion
     * @return \EbayWsdl\GetCategoryMappingsResponseType
     */
    public function setCategoryVersion($CategoryVersion)
    {
      $this->CategoryVersion = $CategoryVersion;
      return $this;
    }

}
