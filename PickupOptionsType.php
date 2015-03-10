<?php

namespace EbayWsdl;

class PickupOptionsType
{

    /**
     * @var string $PickupMethod
     */
    protected $PickupMethod = null;

    /**
     * @var int $PickupPriority
     */
    protected $PickupPriority = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $PickupMethod
     * @param int $PickupPriority
     * @param string $any
     */
    public function __construct($PickupMethod = null, $PickupPriority = null, $any = null)
    {
      $this->PickupMethod = $PickupMethod;
      $this->PickupPriority = $PickupPriority;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getPickupMethod()
    {
      return $this->PickupMethod;
    }

    /**
     * @param string $PickupMethod
     * @return \EbayWsdl\PickupOptionsType
     */
    public function setPickupMethod($PickupMethod)
    {
      $this->PickupMethod = $PickupMethod;
      return $this;
    }

    /**
     * @return int
     */
    public function getPickupPriority()
    {
      return $this->PickupPriority;
    }

    /**
     * @param int $PickupPriority
     * @return \EbayWsdl\PickupOptionsType
     */
    public function setPickupPriority($PickupPriority)
    {
      $this->PickupPriority = $PickupPriority;
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
     * @return \EbayWsdl\PickupOptionsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
