<?php

namespace EbayWsdl\Classes;

class GetCategorySpecificsResponseType extends AbstractResponseType
{

    /**
     * @var RecommendationsType[] $Recommendations
     */
    protected $Recommendations = null;

    /**
     * @var string $TaskReferenceID
     */
    protected $TaskReferenceID = null;

    /**
     * @var string $FileReferenceID
     */
    protected $FileReferenceID = null;

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
     * @param RecommendationsType[] $Recommendations
     * @param string $TaskReferenceID
     * @param string $FileReferenceID
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, array $Recommendations = null, $TaskReferenceID = null, $FileReferenceID = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->Recommendations = $Recommendations;
      $this->TaskReferenceID = $TaskReferenceID;
      $this->FileReferenceID = $FileReferenceID;
    }

    /**
     * @return RecommendationsType[]
     */
    public function getRecommendations()
    {
      return $this->Recommendations;
    }

    /**
     * @param RecommendationsType[] $Recommendations
     * @return \EbayWsdl\Classes\GetCategorySpecificsResponseType
     */
    public function setRecommendations(array $Recommendations)
    {
      $this->Recommendations = $Recommendations;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaskReferenceID()
    {
      return $this->TaskReferenceID;
    }

    /**
     * @param string $TaskReferenceID
     * @return \EbayWsdl\Classes\GetCategorySpecificsResponseType
     */
    public function setTaskReferenceID($TaskReferenceID)
    {
      $this->TaskReferenceID = $TaskReferenceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileReferenceID()
    {
      return $this->FileReferenceID;
    }

    /**
     * @param string $FileReferenceID
     * @return \EbayWsdl\Classes\GetCategorySpecificsResponseType
     */
    public function setFileReferenceID($FileReferenceID)
    {
      $this->FileReferenceID = $FileReferenceID;
      return $this;
    }

}
