<?php

namespace EbayWsdl;

class PromotionalSaleType
{

    /**
     * @var int $PromotionalSaleID
     */
    protected $PromotionalSaleID = null;

    /**
     * @var string $PromotionalSaleName
     */
    protected $PromotionalSaleName = null;

    /**
     * @var ItemIDArrayType $PromotionalSaleItemIDArray
     */
    protected $PromotionalSaleItemIDArray = null;

    /**
     * @var PromotionalSaleStatusCodeType $Status
     */
    protected $Status = null;

    /**
     * @var DiscountCodeType $DiscountType
     */
    protected $DiscountType = null;

    /**
     * @var float $DiscountValue
     */
    protected $DiscountValue = null;

    /**
     * @var \DateTime $PromotionalSaleStartTime
     */
    protected $PromotionalSaleStartTime = null;

    /**
     * @var \DateTime $PromotionalSaleEndTime
     */
    protected $PromotionalSaleEndTime = null;

    /**
     * @var PromotionalSaleTypeCodeType $PromotionalSaleType
     */
    protected $PromotionalSaleType = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $PromotionalSaleID
     * @param string $PromotionalSaleName
     * @param ItemIDArrayType $PromotionalSaleItemIDArray
     * @param PromotionalSaleStatusCodeType $Status
     * @param DiscountCodeType $DiscountType
     * @param float $DiscountValue
     * @param \DateTime $PromotionalSaleStartTime
     * @param \DateTime $PromotionalSaleEndTime
     * @param PromotionalSaleTypeCodeType $PromotionalSaleType
     * @param string $any
     */
    public function __construct($PromotionalSaleID = null, $PromotionalSaleName = null, $PromotionalSaleItemIDArray = null, $Status = null, $DiscountType = null, $DiscountValue = null, \DateTime $PromotionalSaleStartTime = null, \DateTime $PromotionalSaleEndTime = null, $PromotionalSaleType = null, $any = null)
    {
      $this->PromotionalSaleID = $PromotionalSaleID;
      $this->PromotionalSaleName = $PromotionalSaleName;
      $this->PromotionalSaleItemIDArray = $PromotionalSaleItemIDArray;
      $this->Status = $Status;
      $this->DiscountType = $DiscountType;
      $this->DiscountValue = $DiscountValue;
      $this->PromotionalSaleStartTime = $PromotionalSaleStartTime ? $PromotionalSaleStartTime->format(\DateTime::ATOM) : null;
      $this->PromotionalSaleEndTime = $PromotionalSaleEndTime ? $PromotionalSaleEndTime->format(\DateTime::ATOM) : null;
      $this->PromotionalSaleType = $PromotionalSaleType;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getPromotionalSaleID()
    {
      return $this->PromotionalSaleID;
    }

    /**
     * @param int $PromotionalSaleID
     * @return \EbayWsdl\PromotionalSaleType
     */
    public function setPromotionalSaleID($PromotionalSaleID)
    {
      $this->PromotionalSaleID = $PromotionalSaleID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotionalSaleName()
    {
      return $this->PromotionalSaleName;
    }

    /**
     * @param string $PromotionalSaleName
     * @return \EbayWsdl\PromotionalSaleType
     */
    public function setPromotionalSaleName($PromotionalSaleName)
    {
      $this->PromotionalSaleName = $PromotionalSaleName;
      return $this;
    }

    /**
     * @return ItemIDArrayType
     */
    public function getPromotionalSaleItemIDArray()
    {
      return $this->PromotionalSaleItemIDArray;
    }

    /**
     * @param ItemIDArrayType $PromotionalSaleItemIDArray
     * @return \EbayWsdl\PromotionalSaleType
     */
    public function setPromotionalSaleItemIDArray($PromotionalSaleItemIDArray)
    {
      $this->PromotionalSaleItemIDArray = $PromotionalSaleItemIDArray;
      return $this;
    }

    /**
     * @return PromotionalSaleStatusCodeType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param PromotionalSaleStatusCodeType $Status
     * @return \EbayWsdl\PromotionalSaleType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return DiscountCodeType
     */
    public function getDiscountType()
    {
      return $this->DiscountType;
    }

    /**
     * @param DiscountCodeType $DiscountType
     * @return \EbayWsdl\PromotionalSaleType
     */
    public function setDiscountType($DiscountType)
    {
      $this->DiscountType = $DiscountType;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountValue()
    {
      return $this->DiscountValue;
    }

    /**
     * @param float $DiscountValue
     * @return \EbayWsdl\PromotionalSaleType
     */
    public function setDiscountValue($DiscountValue)
    {
      $this->DiscountValue = $DiscountValue;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPromotionalSaleStartTime()
    {
      if ($this->PromotionalSaleStartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PromotionalSaleStartTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PromotionalSaleStartTime
     * @return \EbayWsdl\PromotionalSaleType
     */
    public function setPromotionalSaleStartTime(\DateTime $PromotionalSaleStartTime)
    {
      $this->PromotionalSaleStartTime = $PromotionalSaleStartTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPromotionalSaleEndTime()
    {
      if ($this->PromotionalSaleEndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PromotionalSaleEndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PromotionalSaleEndTime
     * @return \EbayWsdl\PromotionalSaleType
     */
    public function setPromotionalSaleEndTime(\DateTime $PromotionalSaleEndTime)
    {
      $this->PromotionalSaleEndTime = $PromotionalSaleEndTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return PromotionalSaleTypeCodeType
     */
    public function getPromotionalSaleType()
    {
      return $this->PromotionalSaleType;
    }

    /**
     * @param PromotionalSaleTypeCodeType $PromotionalSaleType
     * @return \EbayWsdl\PromotionalSaleType
     */
    public function setPromotionalSaleType($PromotionalSaleType)
    {
      $this->PromotionalSaleType = $PromotionalSaleType;
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
     * @return \EbayWsdl\PromotionalSaleType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
