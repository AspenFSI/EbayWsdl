<?php

namespace EbayWsdl\Classes;

class GetSuggestedCategoriesResponseType extends AbstractResponseType
{

    /**
     * @var SuggestedCategoryArrayType $SuggestedCategoryArray
     */
    protected $SuggestedCategoryArray = null;

    /**
     * @var int $CategoryCount
     */
    protected $CategoryCount = null;

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
     * @param SuggestedCategoryArrayType $SuggestedCategoryArray
     * @param int $CategoryCount
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $SuggestedCategoryArray = null, $CategoryCount = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->SuggestedCategoryArray = $SuggestedCategoryArray;
      $this->CategoryCount = $CategoryCount;
    }

    /**
     * @return SuggestedCategoryArrayType
     */
    public function getSuggestedCategoryArray()
    {
      return $this->SuggestedCategoryArray;
    }

    /**
     * @param SuggestedCategoryArrayType $SuggestedCategoryArray
     * @return \EbayWsdl\Classes\GetSuggestedCategoriesResponseType
     */
    public function setSuggestedCategoryArray($SuggestedCategoryArray)
    {
      $this->SuggestedCategoryArray = $SuggestedCategoryArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryCount()
    {
      return $this->CategoryCount;
    }

    /**
     * @param int $CategoryCount
     * @return \EbayWsdl\Classes\GetSuggestedCategoriesResponseType
     */
    public function setCategoryCount($CategoryCount)
    {
      $this->CategoryCount = $CategoryCount;
      return $this;
    }

}
