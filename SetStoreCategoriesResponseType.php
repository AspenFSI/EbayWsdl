<?php

namespace EbayWsdl;

class SetStoreCategoriesResponseType extends AbstractResponseType
{

    /**
     * @var int $TaskID
     */
    protected $TaskID = null;

    /**
     * @var TaskStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var StoreCustomCategoryArrayType $CustomCategory
     */
    protected $CustomCategory = null;

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
     * @param int $TaskID
     * @param TaskStatusCodeType $Status
     * @param StoreCustomCategoryArrayType $CustomCategory
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $TaskID = null, $Status = null, $CustomCategory = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->TaskID = $TaskID;
      $this->Status = $Status;
      $this->CustomCategory = $CustomCategory;
    }

    /**
     * @return int
     */
    public function getTaskID()
    {
      return $this->TaskID;
    }

    /**
     * @param int $TaskID
     * @return \EbayWsdl\SetStoreCategoriesResponseType
     */
    public function setTaskID($TaskID)
    {
      $this->TaskID = $TaskID;
      return $this;
    }

    /**
     * @return TaskStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param TaskStatusCodeType $Status
     * @return \EbayWsdl\SetStoreCategoriesResponseType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return StoreCustomCategoryArrayType
     */
    public function getCustomCategory()
    {
      return $this->CustomCategory;
    }

    /**
     * @param StoreCustomCategoryArrayType $CustomCategory
     * @return \EbayWsdl\SetStoreCategoriesResponseType
     */
    public function setCustomCategory($CustomCategory)
    {
      $this->CustomCategory = $CustomCategory;
      return $this;
    }

}
