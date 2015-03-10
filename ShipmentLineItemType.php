<?php

namespace EbayWsdl;

class ShipmentLineItemType
{

    /**
     * @var LineItemType[] $LineItem
     */
    protected $LineItem = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param LineItemType[] $LineItem
     * @param string $any
     */
    public function __construct(array $LineItem = null, $any = null)
    {
      $this->LineItem = $LineItem;
      $this->any = $any;
    }

    /**
     * @return LineItemType[]
     */
    public function getLineItem()
    {
      return $this->LineItem;
    }

    /**
     * @param LineItemType[] $LineItem
     * @return \EbayWsdl\ShipmentLineItemType
     */
    public function setLineItem(array $LineItem)
    {
      $this->LineItem = $LineItem;
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
     * @return \EbayWsdl\ShipmentLineItemType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
