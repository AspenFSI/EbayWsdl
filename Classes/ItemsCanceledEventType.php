<?php

namespace EbayWsdl\Classes;

class ItemsCanceledEventType extends AbstractResponseType
{

    /**
     * @var ItemIDArrayType $CanceledItemIDArray
     */
    protected $CanceledItemIDArray = null;

    /**
     * @var boolean $EligibleForRelist
     */
    protected $EligibleForRelist = null;

    /**
     * @var UserIDType $SellerID
     */
    protected $SellerID = null;

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
     * @param ItemIDArrayType $CanceledItemIDArray
     * @param boolean $EligibleForRelist
     * @param UserIDType $SellerID
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $CanceledItemIDArray = null, $EligibleForRelist = null, $SellerID = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->CanceledItemIDArray = $CanceledItemIDArray;
      $this->EligibleForRelist = $EligibleForRelist;
      $this->SellerID = $SellerID;
    }

    /**
     * @return ItemIDArrayType
     */
    public function getCanceledItemIDArray()
    {
      return $this->CanceledItemIDArray;
    }

    /**
     * @param ItemIDArrayType $CanceledItemIDArray
     * @return \EbayWsdl\Classes\ItemsCanceledEventType
     */
    public function setCanceledItemIDArray($CanceledItemIDArray)
    {
      $this->CanceledItemIDArray = $CanceledItemIDArray;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEligibleForRelist()
    {
      return $this->EligibleForRelist;
    }

    /**
     * @param boolean $EligibleForRelist
     * @return \EbayWsdl\Classes\ItemsCanceledEventType
     */
    public function setEligibleForRelist($EligibleForRelist)
    {
      $this->EligibleForRelist = $EligibleForRelist;
      return $this;
    }

    /**
     * @return UserIDType
     */
    public function getSellerID()
    {
      return $this->SellerID;
    }

    /**
     * @param UserIDType $SellerID
     * @return \EbayWsdl\Classes\ItemsCanceledEventType
     */
    public function setSellerID($SellerID)
    {
      $this->SellerID = $SellerID;
      return $this;
    }

}
