<?php

namespace EbayWsdl\Classes;

class ItemSpecificDetailsType
{

    /**
     * @var int $MaxItemSpecificsPerItem
     */
    protected $MaxItemSpecificsPerItem = null;

    /**
     * @var int $MaxValuesPerName
     */
    protected $MaxValuesPerName = null;

    /**
     * @var int $MaxCharactersPerValue
     */
    protected $MaxCharactersPerValue = null;

    /**
     * @var int $MaxCharactersPerName
     */
    protected $MaxCharactersPerName = null;

    /**
     * @var string $DetailVersion
     */
    protected $DetailVersion = null;

    /**
     * @var \DateTime $UpdateTime
     */
    protected $UpdateTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $MaxItemSpecificsPerItem
     * @param int $MaxValuesPerName
     * @param int $MaxCharactersPerValue
     * @param int $MaxCharactersPerName
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($MaxItemSpecificsPerItem = null, $MaxValuesPerName = null, $MaxCharactersPerValue = null, $MaxCharactersPerName = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->MaxItemSpecificsPerItem = $MaxItemSpecificsPerItem;
      $this->MaxValuesPerName = $MaxValuesPerName;
      $this->MaxCharactersPerValue = $MaxCharactersPerValue;
      $this->MaxCharactersPerName = $MaxCharactersPerName;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getMaxItemSpecificsPerItem()
    {
      return $this->MaxItemSpecificsPerItem;
    }

    /**
     * @param int $MaxItemSpecificsPerItem
     * @return \EbayWsdl\Classes\ItemSpecificDetailsType
     */
    public function setMaxItemSpecificsPerItem($MaxItemSpecificsPerItem)
    {
      $this->MaxItemSpecificsPerItem = $MaxItemSpecificsPerItem;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxValuesPerName()
    {
      return $this->MaxValuesPerName;
    }

    /**
     * @param int $MaxValuesPerName
     * @return \EbayWsdl\Classes\ItemSpecificDetailsType
     */
    public function setMaxValuesPerName($MaxValuesPerName)
    {
      $this->MaxValuesPerName = $MaxValuesPerName;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxCharactersPerValue()
    {
      return $this->MaxCharactersPerValue;
    }

    /**
     * @param int $MaxCharactersPerValue
     * @return \EbayWsdl\Classes\ItemSpecificDetailsType
     */
    public function setMaxCharactersPerValue($MaxCharactersPerValue)
    {
      $this->MaxCharactersPerValue = $MaxCharactersPerValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxCharactersPerName()
    {
      return $this->MaxCharactersPerName;
    }

    /**
     * @param int $MaxCharactersPerName
     * @return \EbayWsdl\Classes\ItemSpecificDetailsType
     */
    public function setMaxCharactersPerName($MaxCharactersPerName)
    {
      $this->MaxCharactersPerName = $MaxCharactersPerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailVersion()
    {
      return $this->DetailVersion;
    }

    /**
     * @param string $DetailVersion
     * @return \EbayWsdl\Classes\ItemSpecificDetailsType
     */
    public function setDetailVersion($DetailVersion)
    {
      $this->DetailVersion = $DetailVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateTime()
    {
      if ($this->UpdateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateTime
     * @return \EbayWsdl\Classes\ItemSpecificDetailsType
     */
    public function setUpdateTime(\DateTime $UpdateTime)
    {
      $this->UpdateTime = $UpdateTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\ItemSpecificDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
