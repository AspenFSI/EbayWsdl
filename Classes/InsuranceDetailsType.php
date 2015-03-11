<?php

namespace EbayWsdl\Classes;

class InsuranceDetailsType
{

    /**
     * @var AmountType $InsuranceFee
     */
    protected $InsuranceFee = null;

    /**
     * @var InsuranceOptionCodeType $InsuranceOption
     */
    protected $InsuranceOption = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AmountType $InsuranceFee
     * @param InsuranceOptionCodeType $InsuranceOption
     * @param string $any
     */
    public function __construct($InsuranceFee = null, $InsuranceOption = null, $any = null)
    {
      $this->InsuranceFee = $InsuranceFee;
      $this->InsuranceOption = $InsuranceOption;
      $this->any = $any;
    }

    /**
     * @return AmountType
     */
    public function getInsuranceFee()
    {
      return $this->InsuranceFee;
    }

    /**
     * @param AmountType $InsuranceFee
     * @return \EbayWsdl\Classes\InsuranceDetailsType
     */
    public function setInsuranceFee($InsuranceFee)
    {
      $this->InsuranceFee = $InsuranceFee;
      return $this;
    }

    /**
     * @return InsuranceOptionCodeType
     */
    public function getInsuranceOption()
    {
      return $this->InsuranceOption;
    }

    /**
     * @param InsuranceOptionCodeType $InsuranceOption
     * @return \EbayWsdl\Classes\InsuranceDetailsType
     */
    public function setInsuranceOption($InsuranceOption)
    {
      $this->InsuranceOption = $InsuranceOption;
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
     * @return \EbayWsdl\Classes\InsuranceDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
