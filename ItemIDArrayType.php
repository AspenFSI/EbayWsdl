<?php

namespace EbayWsdl;

class ItemIDArrayType
{

    /**
     * @var ItemIDType[] $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemIDType[] $ItemID
     * @param string $any
     */
    public function __construct(array $ItemID = null, $any = null)
    {
      $this->ItemID = $ItemID;
      $this->any = $any;
    }

    /**
     * @return ItemIDType[]
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param ItemIDType[] $ItemID
     * @return \EbayWsdl\ItemIDArrayType
     */
    public function setItemID(array $ItemID)
    {
      $this->ItemID = $ItemID;
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
     * @return \EbayWsdl\ItemIDArrayType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
