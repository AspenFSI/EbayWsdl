<?php

namespace EbayWsdl;

class eBayPaymentMismatchDetailsType
{

    /**
     * @var MismatchTypeCodeType $MismatchType
     */
    protected $MismatchType = null;

    /**
     * @var \DateTime $ActionRequiredBy
     */
    protected $ActionRequiredBy = null;

    /**
     * @var AmountType $MismatchAmount
     */
    protected $MismatchAmount = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param MismatchTypeCodeType $MismatchType
     * @param \DateTime $ActionRequiredBy
     * @param AmountType $MismatchAmount
     * @param string $any
     */
    public function __construct($MismatchType = null, \DateTime $ActionRequiredBy = null, $MismatchAmount = null, $any = null)
    {
      $this->MismatchType = $MismatchType;
      $this->ActionRequiredBy = $ActionRequiredBy ? $ActionRequiredBy->format(\DateTime::ATOM) : null;
      $this->MismatchAmount = $MismatchAmount;
      $this->any = $any;
    }

    /**
     * @return MismatchTypeCodeType
     */
    public function getMismatchType()
    {
      return $this->MismatchType;
    }

    /**
     * @param MismatchTypeCodeType $MismatchType
     * @return \EbayWsdl\eBayPaymentMismatchDetailsType
     */
    public function setMismatchType($MismatchType)
    {
      $this->MismatchType = $MismatchType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActionRequiredBy()
    {
      if ($this->ActionRequiredBy == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ActionRequiredBy);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ActionRequiredBy
     * @return \EbayWsdl\eBayPaymentMismatchDetailsType
     */
    public function setActionRequiredBy(\DateTime $ActionRequiredBy)
    {
      $this->ActionRequiredBy = $ActionRequiredBy->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getMismatchAmount()
    {
      return $this->MismatchAmount;
    }

    /**
     * @param AmountType $MismatchAmount
     * @return \EbayWsdl\eBayPaymentMismatchDetailsType
     */
    public function setMismatchAmount($MismatchAmount)
    {
      $this->MismatchAmount = $MismatchAmount;
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
     * @return \EbayWsdl\eBayPaymentMismatchDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
