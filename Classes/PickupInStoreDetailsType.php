<?php

namespace EbayWsdl\Classes;

class PickupInStoreDetailsType
{

    /**
     * @var boolean $EligibleForPickupInStore
     */
    protected $EligibleForPickupInStore = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $EligibleForPickupInStore
     * @param string $any
     */
    public function __construct($EligibleForPickupInStore = null, $any = null)
    {
      $this->EligibleForPickupInStore = $EligibleForPickupInStore;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getEligibleForPickupInStore()
    {
      return $this->EligibleForPickupInStore;
    }

    /**
     * @param boolean $EligibleForPickupInStore
     * @return \EbayWsdl\Classes\PickupInStoreDetailsType
     */
    public function setEligibleForPickupInStore($EligibleForPickupInStore)
    {
      $this->EligibleForPickupInStore = $EligibleForPickupInStore;
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
     * @return \EbayWsdl\Classes\PickupInStoreDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
