<?php

namespace EbayWsdl\Classes;

class AddOrderResponseType extends AbstractResponseType
{

    /**
     * @var OrderIDType $OrderID
     */
    protected $OrderID = null;

    /**
     * @var \DateTime $CreatedTime
     */
    protected $CreatedTime = null;

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
     * @param OrderIDType $OrderID
     * @param \DateTime $CreatedTime
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $OrderID = null, \DateTime $CreatedTime = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->OrderID = $OrderID;
      $this->CreatedTime = $CreatedTime ? $CreatedTime->format(\DateTime::ATOM) : null;
    }

    /**
     * @return OrderIDType
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param OrderIDType $OrderID
     * @return \EbayWsdl\Classes\AddOrderResponseType
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedTime()
    {
      if ($this->CreatedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedTime
     * @return \EbayWsdl\Classes\AddOrderResponseType
     */
    public function setCreatedTime(\DateTime $CreatedTime)
    {
      $this->CreatedTime = $CreatedTime->format(\DateTime::ATOM);
      return $this;
    }

}
