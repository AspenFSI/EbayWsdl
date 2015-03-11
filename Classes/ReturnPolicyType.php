<?php

namespace EbayWsdl\Classes;

class ReturnPolicyType
{

    /**
     * @var string $RefundOption
     */
    protected $RefundOption = null;

    /**
     * @var string $Refund
     */
    protected $Refund = null;

    /**
     * @var string $ReturnsWithinOption
     */
    protected $ReturnsWithinOption = null;

    /**
     * @var string $ReturnsWithin
     */
    protected $ReturnsWithin = null;

    /**
     * @var string $ReturnsAcceptedOption
     */
    protected $ReturnsAcceptedOption = null;

    /**
     * @var string $ReturnsAccepted
     */
    protected $ReturnsAccepted = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $WarrantyOfferedOption
     */
    protected $WarrantyOfferedOption = null;

    /**
     * @var string $WarrantyOffered
     */
    protected $WarrantyOffered = null;

    /**
     * @var string $WarrantyTypeOption
     */
    protected $WarrantyTypeOption = null;

    /**
     * @var string $WarrantyType
     */
    protected $WarrantyType = null;

    /**
     * @var string $WarrantyDurationOption
     */
    protected $WarrantyDurationOption = null;

    /**
     * @var string $WarrantyDuration
     */
    protected $WarrantyDuration = null;

    /**
     * @var string $EAN
     */
    protected $EAN = null;

    /**
     * @var string $ShippingCostPaidByOption
     */
    protected $ShippingCostPaidByOption = null;

    /**
     * @var string $ShippingCostPaidBy
     */
    protected $ShippingCostPaidBy = null;

    /**
     * @var string $RestockingFeeValue
     */
    protected $RestockingFeeValue = null;

    /**
     * @var string $RestockingFeeValueOption
     */
    protected $RestockingFeeValueOption = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $RefundOption
     * @param string $Refund
     * @param string $ReturnsWithinOption
     * @param string $ReturnsWithin
     * @param string $ReturnsAcceptedOption
     * @param string $ReturnsAccepted
     * @param string $Description
     * @param string $WarrantyOfferedOption
     * @param string $WarrantyOffered
     * @param string $WarrantyTypeOption
     * @param string $WarrantyType
     * @param string $WarrantyDurationOption
     * @param string $WarrantyDuration
     * @param string $EAN
     * @param string $ShippingCostPaidByOption
     * @param string $ShippingCostPaidBy
     * @param string $RestockingFeeValue
     * @param string $RestockingFeeValueOption
     * @param string $any
     */
    public function __construct($RefundOption = null, $Refund = null, $ReturnsWithinOption = null, $ReturnsWithin = null, $ReturnsAcceptedOption = null, $ReturnsAccepted = null, $Description = null, $WarrantyOfferedOption = null, $WarrantyOffered = null, $WarrantyTypeOption = null, $WarrantyType = null, $WarrantyDurationOption = null, $WarrantyDuration = null, $EAN = null, $ShippingCostPaidByOption = null, $ShippingCostPaidBy = null, $RestockingFeeValue = null, $RestockingFeeValueOption = null, $any = null)
    {
      $this->RefundOption = $RefundOption;
      $this->Refund = $Refund;
      $this->ReturnsWithinOption = $ReturnsWithinOption;
      $this->ReturnsWithin = $ReturnsWithin;
      $this->ReturnsAcceptedOption = $ReturnsAcceptedOption;
      $this->ReturnsAccepted = $ReturnsAccepted;
      $this->Description = $Description;
      $this->WarrantyOfferedOption = $WarrantyOfferedOption;
      $this->WarrantyOffered = $WarrantyOffered;
      $this->WarrantyTypeOption = $WarrantyTypeOption;
      $this->WarrantyType = $WarrantyType;
      $this->WarrantyDurationOption = $WarrantyDurationOption;
      $this->WarrantyDuration = $WarrantyDuration;
      $this->EAN = $EAN;
      $this->ShippingCostPaidByOption = $ShippingCostPaidByOption;
      $this->ShippingCostPaidBy = $ShippingCostPaidBy;
      $this->RestockingFeeValue = $RestockingFeeValue;
      $this->RestockingFeeValueOption = $RestockingFeeValueOption;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getRefundOption()
    {
      return $this->RefundOption;
    }

    /**
     * @param string $RefundOption
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setRefundOption($RefundOption)
    {
      $this->RefundOption = $RefundOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefund()
    {
      return $this->Refund;
    }

    /**
     * @param string $Refund
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setRefund($Refund)
    {
      $this->Refund = $Refund;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnsWithinOption()
    {
      return $this->ReturnsWithinOption;
    }

    /**
     * @param string $ReturnsWithinOption
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setReturnsWithinOption($ReturnsWithinOption)
    {
      $this->ReturnsWithinOption = $ReturnsWithinOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnsWithin()
    {
      return $this->ReturnsWithin;
    }

    /**
     * @param string $ReturnsWithin
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setReturnsWithin($ReturnsWithin)
    {
      $this->ReturnsWithin = $ReturnsWithin;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnsAcceptedOption()
    {
      return $this->ReturnsAcceptedOption;
    }

    /**
     * @param string $ReturnsAcceptedOption
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setReturnsAcceptedOption($ReturnsAcceptedOption)
    {
      $this->ReturnsAcceptedOption = $ReturnsAcceptedOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnsAccepted()
    {
      return $this->ReturnsAccepted;
    }

    /**
     * @param string $ReturnsAccepted
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setReturnsAccepted($ReturnsAccepted)
    {
      $this->ReturnsAccepted = $ReturnsAccepted;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarrantyOfferedOption()
    {
      return $this->WarrantyOfferedOption;
    }

    /**
     * @param string $WarrantyOfferedOption
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setWarrantyOfferedOption($WarrantyOfferedOption)
    {
      $this->WarrantyOfferedOption = $WarrantyOfferedOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarrantyOffered()
    {
      return $this->WarrantyOffered;
    }

    /**
     * @param string $WarrantyOffered
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setWarrantyOffered($WarrantyOffered)
    {
      $this->WarrantyOffered = $WarrantyOffered;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarrantyTypeOption()
    {
      return $this->WarrantyTypeOption;
    }

    /**
     * @param string $WarrantyTypeOption
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setWarrantyTypeOption($WarrantyTypeOption)
    {
      $this->WarrantyTypeOption = $WarrantyTypeOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarrantyType()
    {
      return $this->WarrantyType;
    }

    /**
     * @param string $WarrantyType
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setWarrantyType($WarrantyType)
    {
      $this->WarrantyType = $WarrantyType;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarrantyDurationOption()
    {
      return $this->WarrantyDurationOption;
    }

    /**
     * @param string $WarrantyDurationOption
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setWarrantyDurationOption($WarrantyDurationOption)
    {
      $this->WarrantyDurationOption = $WarrantyDurationOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarrantyDuration()
    {
      return $this->WarrantyDuration;
    }

    /**
     * @param string $WarrantyDuration
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setWarrantyDuration($WarrantyDuration)
    {
      $this->WarrantyDuration = $WarrantyDuration;
      return $this;
    }

    /**
     * @return string
     */
    public function getEAN()
    {
      return $this->EAN;
    }

    /**
     * @param string $EAN
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setEAN($EAN)
    {
      $this->EAN = $EAN;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCostPaidByOption()
    {
      return $this->ShippingCostPaidByOption;
    }

    /**
     * @param string $ShippingCostPaidByOption
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setShippingCostPaidByOption($ShippingCostPaidByOption)
    {
      $this->ShippingCostPaidByOption = $ShippingCostPaidByOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCostPaidBy()
    {
      return $this->ShippingCostPaidBy;
    }

    /**
     * @param string $ShippingCostPaidBy
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setShippingCostPaidBy($ShippingCostPaidBy)
    {
      $this->ShippingCostPaidBy = $ShippingCostPaidBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getRestockingFeeValue()
    {
      return $this->RestockingFeeValue;
    }

    /**
     * @param string $RestockingFeeValue
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setRestockingFeeValue($RestockingFeeValue)
    {
      $this->RestockingFeeValue = $RestockingFeeValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getRestockingFeeValueOption()
    {
      return $this->RestockingFeeValueOption;
    }

    /**
     * @param string $RestockingFeeValueOption
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setRestockingFeeValueOption($RestockingFeeValueOption)
    {
      $this->RestockingFeeValueOption = $RestockingFeeValueOption;
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
     * @return \EbayWsdl\Classes\ReturnPolicyType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
