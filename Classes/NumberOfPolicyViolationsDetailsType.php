<?php

namespace EbayWsdl\Classes;

class NumberOfPolicyViolationsDetailsType
{

    /**
     * @var int[] $Count
     */
    protected $Count = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int[] $Count
     * @param string $any
     */
    public function __construct(array $Count = null, $any = null)
    {
      $this->Count = $Count;
      $this->any = $any;
    }

    /**
     * @return int[]
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int[] $Count
     * @return \EbayWsdl\Classes\NumberOfPolicyViolationsDetailsType
     */
    public function setCount(array $Count)
    {
      $this->Count = $Count;
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
     * @return \EbayWsdl\Classes\NumberOfPolicyViolationsDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
