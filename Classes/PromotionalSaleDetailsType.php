<?php

namespace EbayWsdl\Classes;

class PromotionalSaleDetailsType
{

    /**
     * @var AmountType $OriginalPrice
     */
    protected $OriginalPrice = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $OriginalPrice
     * @param \DateTime $StartTime
     * @param \DateTime $EndTime
     * @param string $any
     */
    public function __construct($OriginalPrice = null, \DateTime $StartTime = null, \DateTime $EndTime = null, $any = null)
    {
      $this->OriginalPrice = $OriginalPrice;
      $this->StartTime = $StartTime ? $StartTime->format(\DateTime::ATOM) : null;
      $this->EndTime = $EndTime ? $EndTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return AmountType
     */
    public function getOriginalPrice()
    {
      return $this->OriginalPrice;
    }

    /**
     * @param AmountType $OriginalPrice
     * @return \EbayWsdl\Classes\PromotionalSaleDetailsType
     */
    public function setOriginalPrice($OriginalPrice)
    {
      $this->OriginalPrice = $OriginalPrice;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->StartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTime
     * @return \EbayWsdl\Classes\PromotionalSaleDetailsType
     */
    public function setStartTime(\DateTime $StartTime)
    {
      $this->StartTime = $StartTime->format(\DateTime::ATOM);
      return $this;
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
     * @return \EbayWsdl\Classes\PromotionalSaleDetailsType
     */
    public function setEndTime(\DateTime $EndTime)
    {
      $this->EndTime = $EndTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\PromotionalSaleDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
