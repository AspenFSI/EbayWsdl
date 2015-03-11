<?php

namespace EbayWsdl\Classes;

class GetStoreOptionsResponseType extends AbstractResponseType
{

    /**
     * @var StoreThemeArrayType $BasicThemeArray
     */
    protected $BasicThemeArray = null;

    /**
     * @var StoreThemeArrayType $AdvancedThemeArray
     */
    protected $AdvancedThemeArray = null;

    /**
     * @var StoreLogoArrayType $LogoArray
     */
    protected $LogoArray = null;

    /**
     * @var StoreSubscriptionArrayType $SubscriptionArray
     */
    protected $SubscriptionArray = null;

    /**
     * @var int $MaxCategories
     */
    protected $MaxCategories = null;

    /**
     * @var int $MaxCategoryLevels
     */
    protected $MaxCategoryLevels = null;

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
     * @param StoreThemeArrayType $BasicThemeArray
     * @param StoreThemeArrayType $AdvancedThemeArray
     * @param StoreLogoArrayType $LogoArray
     * @param StoreSubscriptionArrayType $SubscriptionArray
     * @param int $MaxCategories
     * @param int $MaxCategoryLevels
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $BasicThemeArray = null, $AdvancedThemeArray = null, $LogoArray = null, $SubscriptionArray = null, $MaxCategories = null, $MaxCategoryLevels = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->BasicThemeArray = $BasicThemeArray;
      $this->AdvancedThemeArray = $AdvancedThemeArray;
      $this->LogoArray = $LogoArray;
      $this->SubscriptionArray = $SubscriptionArray;
      $this->MaxCategories = $MaxCategories;
      $this->MaxCategoryLevels = $MaxCategoryLevels;
    }

    /**
     * @return StoreThemeArrayType
     */
    public function getBasicThemeArray()
    {
      return $this->BasicThemeArray;
    }

    /**
     * @param StoreThemeArrayType $BasicThemeArray
     * @return \EbayWsdl\Classes\GetStoreOptionsResponseType
     */
    public function setBasicThemeArray($BasicThemeArray)
    {
      $this->BasicThemeArray = $BasicThemeArray;
      return $this;
    }

    /**
     * @return StoreThemeArrayType
     */
    public function getAdvancedThemeArray()
    {
      return $this->AdvancedThemeArray;
    }

    /**
     * @param StoreThemeArrayType $AdvancedThemeArray
     * @return \EbayWsdl\Classes\GetStoreOptionsResponseType
     */
    public function setAdvancedThemeArray($AdvancedThemeArray)
    {
      $this->AdvancedThemeArray = $AdvancedThemeArray;
      return $this;
    }

    /**
     * @return StoreLogoArrayType
     */
    public function getLogoArray()
    {
      return $this->LogoArray;
    }

    /**
     * @param StoreLogoArrayType $LogoArray
     * @return \EbayWsdl\Classes\GetStoreOptionsResponseType
     */
    public function setLogoArray($LogoArray)
    {
      $this->LogoArray = $LogoArray;
      return $this;
    }

    /**
     * @return StoreSubscriptionArrayType
     */
    public function getSubscriptionArray()
    {
      return $this->SubscriptionArray;
    }

    /**
     * @param StoreSubscriptionArrayType $SubscriptionArray
     * @return \EbayWsdl\Classes\GetStoreOptionsResponseType
     */
    public function setSubscriptionArray($SubscriptionArray)
    {
      $this->SubscriptionArray = $SubscriptionArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxCategories()
    {
      return $this->MaxCategories;
    }

    /**
     * @param int $MaxCategories
     * @return \EbayWsdl\Classes\GetStoreOptionsResponseType
     */
    public function setMaxCategories($MaxCategories)
    {
      $this->MaxCategories = $MaxCategories;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxCategoryLevels()
    {
      return $this->MaxCategoryLevels;
    }

    /**
     * @param int $MaxCategoryLevels
     * @return \EbayWsdl\Classes\GetStoreOptionsResponseType
     */
    public function setMaxCategoryLevels($MaxCategoryLevels)
    {
      $this->MaxCategoryLevels = $MaxCategoryLevels;
      return $this;
    }

}
