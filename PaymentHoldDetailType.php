<?php

namespace EbayWsdl;

class PaymentHoldDetailType
{

    /**
     * @var \DateTime $ExpectedReleaseDate
     */
    protected $ExpectedReleaseDate = null;

    /**
     * @var RequiredSellerActionArrayType $RequiredSellerActionArray
     */
    protected $RequiredSellerActionArray = null;

    /**
     * @var int $NumOfReqSellerActions
     */
    protected $NumOfReqSellerActions = null;

    /**
     * @var PaymentHoldReasonCodeType $PaymentHoldReason
     */
    protected $PaymentHoldReason = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param \DateTime $ExpectedReleaseDate
     * @param RequiredSellerActionArrayType $RequiredSellerActionArray
     * @param int $NumOfReqSellerActions
     * @param PaymentHoldReasonCodeType $PaymentHoldReason
     * @param string $any
     */
    public function __construct(\DateTime $ExpectedReleaseDate = null, $RequiredSellerActionArray = null, $NumOfReqSellerActions = null, $PaymentHoldReason = null, $any = null)
    {
      $this->ExpectedReleaseDate = $ExpectedReleaseDate ? $ExpectedReleaseDate->format(\DateTime::ATOM) : null;
      $this->RequiredSellerActionArray = $RequiredSellerActionArray;
      $this->NumOfReqSellerActions = $NumOfReqSellerActions;
      $this->PaymentHoldReason = $PaymentHoldReason;
      $this->any = $any;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedReleaseDate()
    {
      if ($this->ExpectedReleaseDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpectedReleaseDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpectedReleaseDate
     * @return \EbayWsdl\PaymentHoldDetailType
     */
    public function setExpectedReleaseDate(\DateTime $ExpectedReleaseDate)
    {
      $this->ExpectedReleaseDate = $ExpectedReleaseDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return RequiredSellerActionArrayType
     */
    public function getRequiredSellerActionArray()
    {
      return $this->RequiredSellerActionArray;
    }

    /**
     * @param RequiredSellerActionArrayType $RequiredSellerActionArray
     * @return \EbayWsdl\PaymentHoldDetailType
     */
    public function setRequiredSellerActionArray($RequiredSellerActionArray)
    {
      $this->RequiredSellerActionArray = $RequiredSellerActionArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumOfReqSellerActions()
    {
      return $this->NumOfReqSellerActions;
    }

    /**
     * @param int $NumOfReqSellerActions
     * @return \EbayWsdl\PaymentHoldDetailType
     */
    public function setNumOfReqSellerActions($NumOfReqSellerActions)
    {
      $this->NumOfReqSellerActions = $NumOfReqSellerActions;
      return $this;
    }

    /**
     * @return PaymentHoldReasonCodeType
     */
    public function getPaymentHoldReason()
    {
      return $this->PaymentHoldReason;
    }

    /**
     * @param PaymentHoldReasonCodeType $PaymentHoldReason
     * @return \EbayWsdl\PaymentHoldDetailType
     */
    public function setPaymentHoldReason($PaymentHoldReason)
    {
      $this->PaymentHoldReason = $PaymentHoldReason;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \EbayWsdl\PaymentHoldDetailType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
