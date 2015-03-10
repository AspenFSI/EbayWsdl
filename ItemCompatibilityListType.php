<?php

namespace EbayWsdl;

class ItemCompatibilityListType
{

    /**
     * @var ItemCompatibilityType[] $Compatibility
     */
    protected $Compatibility = null;

    /**
     * @var boolean $ReplaceAll
     */
    protected $ReplaceAll = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ItemCompatibilityType[] $Compatibility
     * @param boolean $ReplaceAll
     * @param string $any
     */
    public function __construct(array $Compatibility = null, $ReplaceAll = null, $any = null)
    {
      $this->Compatibility = $Compatibility;
      $this->ReplaceAll = $ReplaceAll;
      $this->any = $any;
    }

    /**
     * @return ItemCompatibilityType[]
     */
    public function getCompatibility()
    {
      return $this->Compatibility;
    }

    /**
     * @param ItemCompatibilityType[] $Compatibility
     * @return \EbayWsdl\ItemCompatibilityListType
     */
    public function setCompatibility(array $Compatibility)
    {
      $this->Compatibility = $Compatibility;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->ReplaceAll;
    }

    /**
     * @param boolean $ReplaceAll
     * @return \EbayWsdl\ItemCompatibilityListType
     */
    public function setReplaceAll($ReplaceAll)
    {
      $this->ReplaceAll = $ReplaceAll;
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
     * @return \EbayWsdl\ItemCompatibilityListType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
