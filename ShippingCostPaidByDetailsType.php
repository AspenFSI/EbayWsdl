<?php

namespace EbayWsdl;

class ShippingCostPaidByDetailsType
{

    /**
     * @var string $ShippingCostPaidByOption
     */
    protected $ShippingCostPaidByOption = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $ShippingCostPaidByOption
     * @param string $Description
     * @param string $any
     */
    public function __construct($ShippingCostPaidByOption = null, $Description = null, $any = null)
    {
      $this->ShippingCostPaidByOption = $ShippingCostPaidByOption;
      $this->Description = $Description;
      $this->any = $any;
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
     * @return \EbayWsdl\ShippingCostPaidByDetailsType
     */
    public function setShippingCostPaidByOption($ShippingCostPaidByOption)
    {
      $this->ShippingCostPaidByOption = $ShippingCostPaidByOption;
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
     * @return \EbayWsdl\ShippingCostPaidByDetailsType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \EbayWsdl\ShippingCostPaidByDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
