<?php

namespace EbayWsdl\Classes;

class AddItemRequestContainerType
{

    /**
     * @var ItemType $Item
     */
    protected $Item = null;

    /**
     * @var string $MessageID
     */
    protected $MessageID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemType $Item
     * @param string $MessageID
     * @param string $any
     */
    public function __construct($Item = null, $MessageID = null, $any = null)
    {
      $this->Item = $Item;
      $this->MessageID = $MessageID;
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
     * @return \EbayWsdl\Classes\AddItemRequestContainerType
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageID()
    {
      return $this->MessageID;
    }

    /**
     * @param string $MessageID
     * @return \EbayWsdl\Classes\AddItemRequestContainerType
     */
    public function setMessageID($MessageID)
    {
      $this->MessageID = $MessageID;
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
     * @return \EbayWsdl\Classes\AddItemRequestContainerType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
