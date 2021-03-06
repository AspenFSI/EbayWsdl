<?php

namespace EbayWsdl\Classes;

class FeesType
{

    /**
     * @var FeeType[] $Fee
     */
    protected $Fee = null;

    /**
     * @param FeeType[] $Fee
     */
    public function __construct(array $Fee = null)
    {
      $this->Fee = $Fee;
    }

    /**
     * @return FeeType[]
     */
    public function getFee()
    {
      return $this->Fee;
    }

    /**
     * @param FeeType[] $Fee
     * @return \EbayWsdl\Classes\FeesType
     */
    public function setFee(array $Fee)
    {
      $this->Fee = $Fee;
      return $this;
    }

}
