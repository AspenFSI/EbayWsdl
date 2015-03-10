<?php

namespace EbayWsdl;

class GetSellerEventsResponseType extends AbstractResponseType
{

    /**
     * @var \DateTime $TimeTo
     */
    protected $TimeTo = null;

    /**
     * @var ItemArrayType $ItemArray
     */
    protected $ItemArray = null;

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
     * @param \DateTime $TimeTo
     * @param ItemArrayType $ItemArray
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, \DateTime $TimeTo = null, $ItemArray = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->TimeTo = $TimeTo ? $TimeTo->format(\DateTime::ATOM) : null;
      $this->ItemArray = $ItemArray;
    }

    /**
     * @return \DateTime
     */
    public function getTimeTo()
    {
      if ($this->TimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeTo
     * @return \EbayWsdl\GetSellerEventsResponseType
     */
    public function setTimeTo(\DateTime $TimeTo)
    {
      $this->TimeTo = $TimeTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ItemArrayType
     */
    public function getItemArray()
    {
      return $this->ItemArray;
    }

    /**
     * @param ItemArrayType $ItemArray
     * @return \EbayWsdl\GetSellerEventsResponseType
     */
    public function setItemArray($ItemArray)
    {
      $this->ItemArray = $ItemArray;
      return $this;
    }

}
