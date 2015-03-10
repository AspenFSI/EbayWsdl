<?php

namespace EbayWsdl;

class GetCategory2CSResponseType extends AbstractResponseType
{

    /**
     * @var CategoryArrayType $MappedCategoryArray
     */
    protected $MappedCategoryArray = null;

    /**
     * @var CategoryArrayType $UnmappedCategoryArray
     */
    protected $UnmappedCategoryArray = null;

    /**
     * @var string $AttributeSystemVersion
     */
    protected $AttributeSystemVersion = null;

    /**
     * @var SiteWideCharacteristicsType[] $SiteWideCharacteristicSets
     */
    protected $SiteWideCharacteristicSets = null;

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
     * @param CategoryArrayType $MappedCategoryArray
     * @param CategoryArrayType $UnmappedCategoryArray
     * @param string $AttributeSystemVersion
     * @param SiteWideCharacteristicsType[] $SiteWideCharacteristicSets
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $MappedCategoryArray = null, $UnmappedCategoryArray = null, $AttributeSystemVersion = null, array $SiteWideCharacteristicSets = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->MappedCategoryArray = $MappedCategoryArray;
      $this->UnmappedCategoryArray = $UnmappedCategoryArray;
      $this->AttributeSystemVersion = $AttributeSystemVersion;
      $this->SiteWideCharacteristicSets = $SiteWideCharacteristicSets;
    }

    /**
     * @return CategoryArrayType
     */
    public function getMappedCategoryArray()
    {
      return $this->MappedCategoryArray;
    }

    /**
     * @param CategoryArrayType $MappedCategoryArray
     * @return \EbayWsdl\GetCategory2CSResponseType
     */
    public function setMappedCategoryArray($MappedCategoryArray)
    {
      $this->MappedCategoryArray = $MappedCategoryArray;
      return $this;
    }

    /**
     * @return CategoryArrayType
     */
    public function getUnmappedCategoryArray()
    {
      return $this->UnmappedCategoryArray;
    }

    /**
     * @param CategoryArrayType $UnmappedCategoryArray
     * @return \EbayWsdl\GetCategory2CSResponseType
     */
    public function setUnmappedCategoryArray($UnmappedCategoryArray)
    {
      $this->UnmappedCategoryArray = $UnmappedCategoryArray;
      return $this;
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
     * @return \EbayWsdl\GetCategory2CSResponseType
     */
    public function setAttributeSystemVersion($AttributeSystemVersion)
    {
      $this->AttributeSystemVersion = $AttributeSystemVersion;
      return $this;
    }

    /**
     * @return SiteWideCharacteristicsType[]
     */
    public function getSiteWideCharacteristicSets()
    {
      return $this->SiteWideCharacteristicSets;
    }

    /**
     * @param SiteWideCharacteristicsType[] $SiteWideCharacteristicSets
     * @return \EbayWsdl\GetCategory2CSResponseType
     */
    public function setSiteWideCharacteristicSets(array $SiteWideCharacteristicSets)
    {
      $this->SiteWideCharacteristicSets = $SiteWideCharacteristicSets;
      return $this;
    }

}
