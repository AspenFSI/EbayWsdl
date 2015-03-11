<?php

namespace EbayWsdl\Classes;

class StoreSubscriptionType
{

    /**
     * @var StoreSubscriptionLevelCodeType $Level
     */
    protected $Level = null;

    /**
     * @var AmountType $Fee
     */
    protected $Fee = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param StoreSubscriptionLevelCodeType $Level
     * @param AmountType $Fee
     * @param string $any
     */
    public function __construct($Level = null, $Fee = null, $any = null)
    {
      $this->Level = $Level;
      $this->Fee = $Fee;
      $this->any = $any;
    }

    /**
     * @return StoreSubscriptionLevelCodeType
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param StoreSubscriptionLevelCodeType $Level
     * @return \EbayWsdl\Classes\StoreSubscriptionType
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getFee()
    {
      return $this->Fee;
    }

    /**
     * @param AmountType $Fee
     * @return \EbayWsdl\Classes\StoreSubscriptionType
     */
    public function setFee($Fee)
    {
      $this->Fee = $Fee;
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
     * @return \EbayWsdl\Classes\StoreSubscriptionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
