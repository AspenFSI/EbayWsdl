<?php

namespace EbayWsdl;

class MaximumBuyerPolicyViolationsDetailsType
{

    /**
     * @var NumberOfPolicyViolationsDetailsType $NumberOfPolicyViolations
     */
    protected $NumberOfPolicyViolations = null;

    /**
     * @var PolicyViolationDurationDetailsType[] $PolicyViolationDuration
     */
    protected $PolicyViolationDuration = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param NumberOfPolicyViolationsDetailsType $NumberOfPolicyViolations
     * @param PolicyViolationDurationDetailsType[] $PolicyViolationDuration
     * @param string $any
     */
    public function __construct($NumberOfPolicyViolations = null, array $PolicyViolationDuration = null, $any = null)
    {
      $this->NumberOfPolicyViolations = $NumberOfPolicyViolations;
      $this->PolicyViolationDuration = $PolicyViolationDuration;
      $this->any = $any;
    }

    /**
     * @return NumberOfPolicyViolationsDetailsType
     */
    public function getNumberOfPolicyViolations()
    {
      return $this->NumberOfPolicyViolations;
    }

    /**
     * @param NumberOfPolicyViolationsDetailsType $NumberOfPolicyViolations
     * @return \EbayWsdl\MaximumBuyerPolicyViolationsDetailsType
     */
    public function setNumberOfPolicyViolations($NumberOfPolicyViolations)
    {
      $this->NumberOfPolicyViolations = $NumberOfPolicyViolations;
      return $this;
    }

    /**
     * @return PolicyViolationDurationDetailsType[]
     */
    public function getPolicyViolationDuration()
    {
      return $this->PolicyViolationDuration;
    }

    /**
     * @param PolicyViolationDurationDetailsType[] $PolicyViolationDuration
     * @return \EbayWsdl\MaximumBuyerPolicyViolationsDetailsType
     */
    public function setPolicyViolationDuration(array $PolicyViolationDuration)
    {
      $this->PolicyViolationDuration = $PolicyViolationDuration;
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
     * @return \EbayWsdl\MaximumBuyerPolicyViolationsDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
