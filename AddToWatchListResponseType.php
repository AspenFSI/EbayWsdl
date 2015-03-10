<?php

namespace EbayWsdl;

class AddToWatchListResponseType extends AbstractResponseType
{

    /**
     * @var int $WatchListCount
     */
    protected $WatchListCount = null;

    /**
     * @var int $WatchListMaximum
     */
    protected $WatchListMaximum = null;

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
     * @param int $WatchListCount
     * @param int $WatchListMaximum
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $WatchListCount = null, $WatchListMaximum = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->WatchListCount = $WatchListCount;
      $this->WatchListMaximum = $WatchListMaximum;
    }

    /**
     * @return int
     */
    public function getWatchListCount()
    {
      return $this->WatchListCount;
    }

    /**
     * @param int $WatchListCount
     * @return \EbayWsdl\AddToWatchListResponseType
     */
    public function setWatchListCount($WatchListCount)
    {
      $this->WatchListCount = $WatchListCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getWatchListMaximum()
    {
      return $this->WatchListMaximum;
    }

    /**
     * @param int $WatchListMaximum
     * @return \EbayWsdl\AddToWatchListResponseType
     */
    public function setWatchListMaximum($WatchListMaximum)
    {
      $this->WatchListMaximum = $WatchListMaximum;
      return $this;
    }

}
