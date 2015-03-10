<?php

namespace EbayWsdl;

class ThemeGroupType
{

    /**
     * @var int $GroupID
     */
    protected $GroupID = null;

    /**
     * @var string $GroupName
     */
    protected $GroupName = null;

    /**
     * @var int[] $ThemeID
     */
    protected $ThemeID = null;

    /**
     * @var int $ThemeTotal
     */
    protected $ThemeTotal = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $GroupID
     * @param string $GroupName
     * @param int[] $ThemeID
     * @param int $ThemeTotal
     * @param string $any
     */
    public function __construct($GroupID = null, $GroupName = null, array $ThemeID = null, $ThemeTotal = null, $any = null)
    {
      $this->GroupID = $GroupID;
      $this->GroupName = $GroupName;
      $this->ThemeID = $ThemeID;
      $this->ThemeTotal = $ThemeTotal;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getGroupID()
    {
      return $this->GroupID;
    }

    /**
     * @param int $GroupID
     * @return \EbayWsdl\ThemeGroupType
     */
    public function setGroupID($GroupID)
    {
      $this->GroupID = $GroupID;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
      return $this->GroupName;
    }

    /**
     * @param string $GroupName
     * @return \EbayWsdl\ThemeGroupType
     */
    public function setGroupName($GroupName)
    {
      $this->GroupName = $GroupName;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getThemeID()
    {
      return $this->ThemeID;
    }

    /**
     * @param int[] $ThemeID
     * @return \EbayWsdl\ThemeGroupType
     */
    public function setThemeID(array $ThemeID)
    {
      $this->ThemeID = $ThemeID;
      return $this;
    }

    /**
     * @return int
     */
    public function getThemeTotal()
    {
      return $this->ThemeTotal;
    }

    /**
     * @param int $ThemeTotal
     * @return \EbayWsdl\ThemeGroupType
     */
    public function setThemeTotal($ThemeTotal)
    {
      $this->ThemeTotal = $ThemeTotal;
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
     * @return \EbayWsdl\ThemeGroupType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
