<?php

namespace EbayWsdl;

class CartItemType
{

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

    /**
     * @var int $ReferenceID
     */
    protected $ReferenceID = null;

    /**
     * @var ModifyActionCodeType $Action
     */
    protected $Action = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemType $Item
     * @param int $ReferenceID
     * @param ModifyActionCodeType $Action
     * @param string $any
     */
    public function __construct($Item = null, $ReferenceID = null, $Action = null, $any = null)
    {
      $this->Item = $Item;
      $this->ReferenceID = $ReferenceID;
      $this->Action = $Action;
      $this->any = $any;
    }

    /**
     * @return ItemType
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ItemType $Item
     * @return \EbayWsdl\CartItemType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return int
     */
    public function getReferenceID()
    {
      return $this->ReferenceID;
    }

    /**
     * @param int $ReferenceID
     * @return \EbayWsdl\CartItemType
     */
    public function setReferenceID($ReferenceID)
    {
      $this->ReferenceID = $ReferenceID;
      return $this;
    }

    /**
     * @return ModifyActionCodeType
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param ModifyActionCodeType $Action
     * @return \EbayWsdl\CartItemType
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
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
     * @return \EbayWsdl\CartItemType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
