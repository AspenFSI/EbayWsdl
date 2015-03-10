<?php

namespace EbayWsdl;

class GetDescriptionTemplatesResponseType extends AbstractResponseType
{

    /**
     * @var DescriptionTemplateType[] $DescriptionTemplate
     */
    protected $DescriptionTemplate = null;

    /**
     * @var int $LayoutTotal
     */
    protected $LayoutTotal = null;

    /**
     * @var int[] $ObsoleteLayoutID
     */
    protected $ObsoleteLayoutID = null;

    /**
     * @var int[] $ObsoleteThemeID
     */
    protected $ObsoleteThemeID = null;

    /**
     * @var ThemeGroupType[] $ThemeGroup
     */
    protected $ThemeGroup = null;

    /**
     * @var int $ThemeTotal
     */
    protected $ThemeTotal = null;

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
     * @param DescriptionTemplateType[] $DescriptionTemplate
     * @param int $LayoutTotal
     * @param int[] $ObsoleteLayoutID
     * @param int[] $ObsoleteThemeID
     * @param ThemeGroupType[] $ThemeGroup
     * @param int $ThemeTotal
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $DescriptionTemplate = null, $LayoutTotal = null, array $ObsoleteLayoutID = null, array $ObsoleteThemeID = null, array $ThemeGroup = null, $ThemeTotal = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->DescriptionTemplate = $DescriptionTemplate;
      $this->LayoutTotal = $LayoutTotal;
      $this->ObsoleteLayoutID = $ObsoleteLayoutID;
      $this->ObsoleteThemeID = $ObsoleteThemeID;
      $this->ThemeGroup = $ThemeGroup;
      $this->ThemeTotal = $ThemeTotal;
    }

    /**
     * @return DescriptionTemplateType[]
     */
    public function getDescriptionTemplate()
    {
      return $this->DescriptionTemplate;
    }

    /**
     * @param DescriptionTemplateType[] $DescriptionTemplate
     * @return \EbayWsdl\GetDescriptionTemplatesResponseType
     */
    public function setDescriptionTemplate(array $DescriptionTemplate)
    {
      $this->DescriptionTemplate = $DescriptionTemplate;
      return $this;
    }

    /**
     * @return int
     */
    public function getLayoutTotal()
    {
      return $this->LayoutTotal;
    }

    /**
     * @param int $LayoutTotal
     * @return \EbayWsdl\GetDescriptionTemplatesResponseType
     */
    public function setLayoutTotal($LayoutTotal)
    {
      $this->LayoutTotal = $LayoutTotal;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getObsoleteLayoutID()
    {
      return $this->ObsoleteLayoutID;
    }

    /**
     * @param int[] $ObsoleteLayoutID
     * @return \EbayWsdl\GetDescriptionTemplatesResponseType
     */
    public function setObsoleteLayoutID(array $ObsoleteLayoutID)
    {
      $this->ObsoleteLayoutID = $ObsoleteLayoutID;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getObsoleteThemeID()
    {
      return $this->ObsoleteThemeID;
    }

    /**
     * @param int[] $ObsoleteThemeID
     * @return \EbayWsdl\GetDescriptionTemplatesResponseType
     */
    public function setObsoleteThemeID(array $ObsoleteThemeID)
    {
      $this->ObsoleteThemeID = $ObsoleteThemeID;
      return $this;
    }

    /**
     * @return ThemeGroupType[]
     */
    public function getThemeGroup()
    {
      return $this->ThemeGroup;
    }

    /**
     * @param ThemeGroupType[] $ThemeGroup
     * @return \EbayWsdl\GetDescriptionTemplatesResponseType
     */
    public function setThemeGroup(array $ThemeGroup)
    {
      $this->ThemeGroup = $ThemeGroup;
      return $this;
    }

    /**
     * @return int
     */
    public function getThemeTotal()
    {
      return $this->ThemeTotal;
    }

    /**
     * @param int $ThemeTotal
     * @return \EbayWsdl\GetDescriptionTemplatesResponseType
     */
    public function setThemeTotal($ThemeTotal)
    {
      $this->ThemeTotal = $ThemeTotal;
      return $this;
    }

}
