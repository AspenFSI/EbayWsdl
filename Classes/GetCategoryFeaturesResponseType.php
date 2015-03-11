<?php

namespace EbayWsdl\Classes;

class GetCategoryFeaturesResponseType extends AbstractResponseType
{

    /**
     * @var string $CategoryVersion
     */
    protected $CategoryVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var CategoryFeatureType[] $Category
     */
    protected $Category = null;

    /**
     * @var SiteDefaultsType $SiteDefaults
     */
    protected $SiteDefaults = null;

    /**
     * @var FeatureDefinitionsType $FeatureDefinitions
     */
    protected $FeatureDefinitions = null;

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
     * @param string $CategoryVersion
     * @param \DateTime $UpdateTime
     * @param CategoryFeatureType[] $Category
     * @param SiteDefaultsType $SiteDefaults
     * @param FeatureDefinitionsType $FeatureDefinitions
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $CategoryVersion = null, \DateTime $UpdateTime = null, array $Category = null, $SiteDefaults = null, $FeatureDefinitions = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->CategoryVersion = $CategoryVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->Category = $Category;
      $this->SiteDefaults = $SiteDefaults;
      $this->FeatureDefinitions = $FeatureDefinitions;
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
     * @return \EbayWsdl\Classes\GetCategoryFeaturesResponseType
     */
    public function setCategoryVersion($CategoryVersion)
    {
      $this->CategoryVersion = $CategoryVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\Classes\GetCategoryFeaturesResponseType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return CategoryFeatureType[]
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param CategoryFeatureType[] $Category
     * @return \EbayWsdl\Classes\GetCategoryFeaturesResponseType
     */
    public function setCategory(array $Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return SiteDefaultsType
     */
    public function getSiteDefaults()
    {
      return $this->SiteDefaults;
    }

    /**
     * @param SiteDefaultsType $SiteDefaults
     * @return \EbayWsdl\Classes\GetCategoryFeaturesResponseType
     */
    public function setSiteDefaults($SiteDefaults)
    {
      $this->SiteDefaults = $SiteDefaults;
      return $this;
    }

    /**
     * @return FeatureDefinitionsType
     */
    public function getFeatureDefinitions()
    {
      return $this->FeatureDefinitions;
    }

    /**
     * @param FeatureDefinitionsType $FeatureDefinitions
     * @return \EbayWsdl\Classes\GetCategoryFeaturesResponseType
     */
    public function setFeatureDefinitions($FeatureDefinitions)
    {
      $this->FeatureDefinitions = $FeatureDefinitions;
      return $this;
    }

}
