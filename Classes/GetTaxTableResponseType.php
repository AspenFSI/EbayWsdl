<?php

namespace EbayWsdl\Classes;

class GetTaxTableResponseType extends AbstractResponseType
{

    /**
     * @var \DateTime $LastUpdateTime
     */
    protected $LastUpdateTime = null;

    /**
     * @var TaxTableType $TaxTable
     */
    protected $TaxTable = null;

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
     * @param \DateTime $LastUpdateTime
     * @param TaxTableType $TaxTable
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, \DateTime $LastUpdateTime = null, $TaxTable = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->LastUpdateTime = $LastUpdateTime ? $LastUpdateTime->format(\DateTime::ATOM) : null;
      $this->TaxTable = $TaxTable;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdateTime()
    {
      if ($this->LastUpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastUpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastUpdateTime
     * @return \EbayWsdl\Classes\GetTaxTableResponseType
     */
    public function setLastUpdateTime(\DateTime $LastUpdateTime)
    {
      $this->LastUpdateTime = $LastUpdateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return TaxTableType
     */
    public function getTaxTable()
    {
      return $this->TaxTable;
    }

    /**
     * @param TaxTableType $TaxTable
     * @return \EbayWsdl\Classes\GetTaxTableResponseType
     */
    public function setTaxTable($TaxTable)
    {
      $this->TaxTable = $TaxTable;
      return $this;
    }

}
