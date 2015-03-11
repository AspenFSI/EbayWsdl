<?php

namespace EbayWsdl\Classes;

class GetSellerPaymentsRequestType extends AbstractRequestType
{

    /**
     * @var RCSPaymentStatusCodeType $PaymentStatus
     */
    protected $PaymentStatus = null;

    /**
     * @var \DateTime $PaymentTimeFrom
     */
    protected $PaymentTimeFrom = null;

    /**
     * @var \DateTime $PaymentTimeTo
     */
    protected $PaymentTimeTo = null;

    /**
     * @var PaginationType $Pagination
     */
    protected $Pagination = null;

    /**
     * @param DetailLevelCodeType[] $DetailLevel
     * @param string $ErrorLanguage
     * @param string $MessageID
     * @param string $Version
     * @param string $EndUserIP
     * @param ErrorHandlingCodeType $ErrorHandling
     * @param UUIDType $InvocationID
     * @param string[] $OutputSelector
     * @param WarningLevelCodeType $WarningLevel
     * @param BotBlockRequestType $BotBlock
     * @param string $any
     * @param RCSPaymentStatusCodeType $PaymentStatus
     * @param \DateTime $PaymentTimeFrom
     * @param \DateTime $PaymentTimeTo
     * @param PaginationType $Pagination
     */
    public function __construct(array $DetailLevel = null, $ErrorLanguage = null, $MessageID = null, $Version = null, $EndUserIP = null, $ErrorHandling = null, $InvocationID = null, array $OutputSelector = null, $WarningLevel = null, $BotBlock = null, $any = null, $PaymentStatus = null, \DateTime $PaymentTimeFrom = null, \DateTime $PaymentTimeTo = null, $Pagination = null)
    {
      parent::__construct($DetailLevel, $ErrorLanguage, $MessageID, $Version, $EndUserIP, $ErrorHandling, $InvocationID, $OutputSelector, $WarningLevel, $BotBlock, $any);
      $this->PaymentStatus = $PaymentStatus;
      $this->PaymentTimeFrom = $PaymentTimeFrom ? $PaymentTimeFrom->format(\DateTime::ATOM) : null;
      $this->PaymentTimeTo = $PaymentTimeTo ? $PaymentTimeTo->format(\DateTime::ATOM) : null;
      $this->Pagination = $Pagination;
    }

    /**
     * @return RCSPaymentStatusCodeType
     */
    public function getPaymentStatus()
    {
      return $this->PaymentStatus;
    }

    /**
     * @param RCSPaymentStatusCodeType $PaymentStatus
     * @return \EbayWsdl\Classes\GetSellerPaymentsRequestType
     */
    public function setPaymentStatus($PaymentStatus)
    {
      $this->PaymentStatus = $PaymentStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaymentTimeFrom()
    {
      if ($this->PaymentTimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PaymentTimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PaymentTimeFrom
     * @return \EbayWsdl\Classes\GetSellerPaymentsRequestType
     */
    public function setPaymentTimeFrom(\DateTime $PaymentTimeFrom)
    {
      $this->PaymentTimeFrom = $PaymentTimeFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaymentTimeTo()
    {
      if ($this->PaymentTimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PaymentTimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PaymentTimeTo
     * @return \EbayWsdl\Classes\GetSellerPaymentsRequestType
     */
    public function setPaymentTimeTo(\DateTime $PaymentTimeTo)
    {
      $this->PaymentTimeTo = $PaymentTimeTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return PaginationType
     */
    public function getPagination()
    {
      return $this->Pagination;
    }

    /**
     * @param PaginationType $Pagination
     * @return \EbayWsdl\Classes\GetSellerPaymentsRequestType
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

}
