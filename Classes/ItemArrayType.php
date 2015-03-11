<?php

namespace EbayWsdl\Classes;

class ItemArrayType
{

    /**
     * @var ItemType[] $Item
     */
    protected $Item = null;

    /**
     * @param ItemType[] $Item
     */
    public function __construct(array $Item = null)
    {
      $this->Item = $Item;
    }

    /**
     * @return ItemType[]
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param ItemType[] $Item
     * @return \EbayWsdl\Classes\ItemArrayType
     */
    public function setItem(array $Item)
    {
      $this->Item = $Item;
      return $this;
    }

}
