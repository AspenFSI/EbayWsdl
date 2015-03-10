<?php

namespace EbayWsdl;

class ReturnPolicyDetailsType
{

    /**
     * @var RefundDetailsType[] $Refund
     */
    protected $Refund = null;

    /**
     * @var ReturnsWithinDetailsType[] $ReturnsWithin
     */
    protected $ReturnsWithin = null;

    /**
     * @var ReturnsAcceptedDetailsType[] $ReturnsAccepted
     */
    protected $ReturnsAccepted = null;

    /**
     * @var boolean $Description
     */
    protected $Description = null;

    /**
     * @var WarrantyOfferedDetailsType[] $WarrantyOffered
     */
    protected $WarrantyOffered = null;

    /**
     * @var WarrantyTypeDetailsType[] $WarrantyType
     */
    protected $WarrantyType = null;

    /**
     * @var WarrantyDurationDetailsType[] $WarrantyDuration
     */
    protected $WarrantyDuration = null;

    /**
     * @var boolean $EAN
     */
    protected $EAN = null;

    /**
     * @var ShippingCostPaidByDetailsType[] $ShippingCostPaidBy
     */
    protected $ShippingCostPaidBy = null;

    /**
     * @var RestockingFeeValueDetailsType[] $RestockingFeeValue
     */
    protected $RestockingFeeValue = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RefundDetailsType[] $Refund
     * @param ReturnsWithinDetailsType[] $ReturnsWithin
     * @param ReturnsAcceptedDetailsType[] $ReturnsAccepted
     * @param boolean $Description
     * @param WarrantyOfferedDetailsType[] $WarrantyOffered
     * @param WarrantyTypeDetailsType[] $WarrantyType
     * @param WarrantyDurationDetailsType[] $WarrantyDuration
     * @param boolean $EAN
     * @param ShippingCostPaidByDetailsType[] $ShippingCostPaidBy
     * @param RestockingFeeValueDetailsType[] $RestockingFeeValue
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct(array $Refund = null, array $ReturnsWithin = null, array $ReturnsAccepted = null, $Description = null, array $WarrantyOffered = null, array $WarrantyType = null, array $WarrantyDuration = null, $EAN = null, array $ShippingCostPaidBy = null, array $RestockingFeeValue = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->Refund = $Refund;
      $this->ReturnsWithin = $ReturnsWithin;
      $this->ReturnsAccepted = $ReturnsAccepted;
      $this->Description = $Description;
      $this->WarrantyOffered = $WarrantyOffered;
      $this->WarrantyType = $WarrantyType;
      $this->WarrantyDuration = $WarrantyDuration;
      $this->EAN = $EAN;
      $this->ShippingCostPaidBy = $ShippingCostPaidBy;
      $this->RestockingFeeValue = $RestockingFeeValue;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return RefundDetailsType[]
     */
    public function getRefund()
    {
      return $this->Refund;
    }

    /**
     * @param RefundDetailsType[] $Refund
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setRefund(array $Refund)
    {
      $this->Refund = $Refund;
      return $this;
    }

    /**
     * @return ReturnsWithinDetailsType[]
     */
    public function getReturnsWithin()
    {
      return $this->ReturnsWithin;
    }

    /**
     * @param ReturnsWithinDetailsType[] $ReturnsWithin
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setReturnsWithin(array $ReturnsWithin)
    {
      $this->ReturnsWithin = $ReturnsWithin;
      return $this;
    }

    /**
     * @return ReturnsAcceptedDetailsType[]
     */
    public function getReturnsAccepted()
    {
      return $this->ReturnsAccepted;
    }

    /**
     * @param ReturnsAcceptedDetailsType[] $ReturnsAccepted
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setReturnsAccepted(array $ReturnsAccepted)
    {
      $this->ReturnsAccepted = $ReturnsAccepted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param boolean $Description
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return WarrantyOfferedDetailsType[]
     */
    public function getWarrantyOffered()
    {
      return $this->WarrantyOffered;
    }

    /**
     * @param WarrantyOfferedDetailsType[] $WarrantyOffered
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setWarrantyOffered(array $WarrantyOffered)
    {
      $this->WarrantyOffered = $WarrantyOffered;
      return $this;
    }

    /**
     * @return WarrantyTypeDetailsType[]
     */
    public function getWarrantyType()
    {
      return $this->WarrantyType;
    }

    /**
     * @param WarrantyTypeDetailsType[] $WarrantyType
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setWarrantyType(array $WarrantyType)
    {
      $this->WarrantyType = $WarrantyType;
      return $this;
    }

    /**
     * @return WarrantyDurationDetailsType[]
     */
    public function getWarrantyDuration()
    {
      return $this->WarrantyDuration;
    }

    /**
     * @param WarrantyDurationDetailsType[] $WarrantyDuration
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setWarrantyDuration(array $WarrantyDuration)
    {
      $this->WarrantyDuration = $WarrantyDuration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEAN()
    {
      return $this->EAN;
    }

    /**
     * @param boolean $EAN
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setEAN($EAN)
    {
      $this->EAN = $EAN;
      return $this;
    }

    /**
     * @return ShippingCostPaidByDetailsType[]
     */
    public function getShippingCostPaidBy()
    {
      return $this->ShippingCostPaidBy;
    }

    /**
     * @param ShippingCostPaidByDetailsType[] $ShippingCostPaidBy
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setShippingCostPaidBy(array $ShippingCostPaidBy)
    {
      $this->ShippingCostPaidBy = $ShippingCostPaidBy;
      return $this;
    }

    /**
     * @return RestockingFeeValueDetailsType[]
     */
    public function getRestockingFeeValue()
    {
      return $this->RestockingFeeValue;
    }

    /**
     * @param RestockingFeeValueDetailsType[] $RestockingFeeValue
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setRestockingFeeValue(array $RestockingFeeValue)
    {
      $this->RestockingFeeValue = $RestockingFeeValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailVersion()
    {
      return $this->DetailVersion;
    }

    /**
     * @param string $DetailVersion
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setDetailVersion($DetailVersion)
    {
      $this->DetailVersion = $DetailVersion;
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
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\ReturnPolicyDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
