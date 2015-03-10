<?php

namespace EbayWsdl;

class GetCategoriesResponseType extends AbstractResponseType
{

    /**
     * @var CategoryArrayType $CategoryArray
     */
    protected $CategoryArray = null;

    /**
     * @var int $CategoryCount
     */
    protected $CategoryCount = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $CategoryVersion
     */
    protected $CategoryVersion = null;

    /**
     * @var boolean $ReservePriceAllowed
     */
    protected $ReservePriceAllowed = null;

    /**
     * @var float $MinimumReservePrice
     */
    protected $MinimumReservePrice = null;

    /**
     * @var boolean $ReduceReserveAllowed
     */
    protected $ReduceReserveAllowed = null;

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
     * @param CategoryArrayType $CategoryArray
     * @param int $CategoryCount
     * @param \DateTime $UpdateTime
     * @param string $CategoryVersion
     * @param boolean $ReservePriceAllowed
     * @param float $MinimumReservePrice
     * @param boolean $ReduceReserveAllowed
     */
    public function __construct(\DateTime $Timestamp = null, $Ack = null, $CorrelationID = null, array $Errors = null, $Message = null, $Version = null, $Build = null, $NotificationEventName = null, $DuplicateInvocationDetails = null, $RecipientUserID = null, $EIASToken = null, $NotificationSignature = null, $HardExpirationWarning = null, $BotBlock = null, $ExternalUserData = null, $any = null, $CategoryArray = null, $CategoryCount = null, \DateTime $UpdateTime = null, $CategoryVersion = null, $ReservePriceAllowed = null, $MinimumReservePrice = null, $ReduceReserveAllowed = null)
    {
      parent::__construct($Timestamp, $Ack, $CorrelationID, $Errors, $Message, $Version, $Build, $NotificationEventName, $DuplicateInvocationDetails, $RecipientUserID, $EIASToken, $NotificationSignature, $HardExpirationWarning, $BotBlock, $ExternalUserData, $any);
      $this->CategoryArray = $CategoryArray;
      $this->CategoryCount = $CategoryCount;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->CategoryVersion = $CategoryVersion;
      $this->ReservePriceAllowed = $ReservePriceAllowed;
      $this->MinimumReservePrice = $MinimumReservePrice;
      $this->ReduceReserveAllowed = $ReduceReserveAllowed;
    }

    /**
     * @return CategoryArrayType
     */
    public function getCategoryArray()
    {
      return $this->CategoryArray;
    }

    /**
     * @param CategoryArrayType $CategoryArray
     * @return \EbayWsdl\GetCategoriesResponseType
     */
    public function setCategoryArray($CategoryArray)
    {
      $this->CategoryArray = $CategoryArray;
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
     * @return \EbayWsdl\GetCategoriesResponseType
     */
    public function setCategoryCount($CategoryCount)
    {
      $this->CategoryCount = $CategoryCount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\GetCategoriesResponseType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryVersion()
    {
      return $this->CategoryVersion;
    }

    /**
     * @param string $CategoryVersion
     * @return \EbayWsdl\GetCategoriesResponseType
     */
    public function setCategoryVersion($CategoryVersion)
    {
      $this->CategoryVersion = $CategoryVersion;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReservePriceAllowed()
    {
      return $this->ReservePriceAllowed;
    }

    /**
     * @param boolean $ReservePriceAllowed
     * @return \EbayWsdl\GetCategoriesResponseType
     */
    public function setReservePriceAllowed($ReservePriceAllowed)
    {
      $this->ReservePriceAllowed = $ReservePriceAllowed;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinimumReservePrice()
    {
      return $this->MinimumReservePrice;
    }

    /**
     * @param float $MinimumReservePrice
     * @return \EbayWsdl\GetCategoriesResponseType
     */
    public function setMinimumReservePrice($MinimumReservePrice)
    {
      $this->MinimumReservePrice = $MinimumReservePrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReduceReserveAllowed()
    {
      return $this->ReduceReserveAllowed;
    }

    /**
     * @param boolean $ReduceReserveAllowed
     * @return \EbayWsdl\GetCategoriesResponseType
     */
    public function setReduceReserveAllowed($ReduceReserveAllowed)
    {
      $this->ReduceReserveAllowed = $ReduceReserveAllowed;
      return $this;
    }

}
