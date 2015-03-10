<?php

namespace EbayWsdl;

class PickupDetailsType
{

    /**
     * @var PickupOptionsType[] $PickupOptions
     */
    protected $PickupOptions = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PickupOptionsType[] $PickupOptions
     * @param string $any
     */
    public function __construct(array $PickupOptions = null, $any = null)
    {
      $this->PickupOptions = $PickupOptions;
      $this->any = $any;
    }

    /**
     * @return PickupOptionsType[]
     */
    public function getPickupOptions()
    {
      return $this->PickupOptions;
    }

    /**
     * @param PickupOptionsType[] $PickupOptions
     * @return \EbayWsdl\PickupDetailsType
     */
    public function setPickupOptions(array $PickupOptions)
    {
      $this->PickupOptions = $PickupOptions;
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
     * @return \EbayWsdl\PickupDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
