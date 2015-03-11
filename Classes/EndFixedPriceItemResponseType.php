<?php

namespace EbayWsdl\Classes;

class EndFixedPriceItemResponseType extends AbstractResponseType
{

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var SKUType $SKU
     */
    protected $SKU = null;

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
     * @param \DateTime $EndTime
     * @param SKUType $SKU
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, \DateTime $EndTime = null, $SKU = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->EndTime = $EndTime ? $EndTime->format(\DateTime::ATOM) : null;
      $this->SKU = $SKU;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->EndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTime
     * @return \EbayWsdl\Classes\EndFixedPriceItemResponseType
     */
    public function setEndTime(\DateTime $EndTime)
    {
      $this->EndTime = $EndTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return SKUType
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param SKUType $SKU
     * @return \EbayWsdl\Classes\EndFixedPriceItemResponseType
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

}
