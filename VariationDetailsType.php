<?php

namespace EbayWsdl;

class VariationDetailsType
{

    /**
     * @var int $MaxVariationsPerItem
     */
    protected $MaxVariationsPerItem = null;

    /**
     * @var int $MaxNamesPerVariationSpecificsSet
     */
    protected $MaxNamesPerVariationSpecificsSet = null;

    /**
     * @var int $MaxValuesPerVariationSpecificsSetName
     */
    protected $MaxValuesPerVariationSpecificsSetName = null;

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
     * @param int $MaxVariationsPerItem
     * @param int $MaxNamesPerVariationSpecificsSet
     * @param int $MaxValuesPerVariationSpecificsSetName
     * @param string $DetailVersion
     * @param \DateTime $UpdateTime
     * @param string $any
     */
    public function __construct($MaxVariationsPerItem = null, $MaxNamesPerVariationSpecificsSet = null, $MaxValuesPerVariationSpecificsSetName = null, $DetailVersion = null, \DateTime $UpdateTime = null, $any = null)
    {
      $this->MaxVariationsPerItem = $MaxVariationsPerItem;
      $this->MaxNamesPerVariationSpecificsSet = $MaxNamesPerVariationSpecificsSet;
      $this->MaxValuesPerVariationSpecificsSetName = $MaxValuesPerVariationSpecificsSetName;
      $this->DetailVersion = $DetailVersion;
      $this->UpdateTime = $UpdateTime ? $UpdateTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getMaxVariationsPerItem()
    {
      return $this->MaxVariationsPerItem;
    }

    /**
     * @param int $MaxVariationsPerItem
     * @return \EbayWsdl\VariationDetailsType
     */
    public function setMaxVariationsPerItem($MaxVariationsPerItem)
    {
      $this->MaxVariationsPerItem = $MaxVariationsPerItem;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNamesPerVariationSpecificsSet()
    {
      return $this->MaxNamesPerVariationSpecificsSet;
    }

    /**
     * @param int $MaxNamesPerVariationSpecificsSet
     * @return \EbayWsdl\VariationDetailsType
     */
    public function setMaxNamesPerVariationSpecificsSet($MaxNamesPerVariationSpecificsSet)
    {
      $this->MaxNamesPerVariationSpecificsSet = $MaxNamesPerVariationSpecificsSet;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxValuesPerVariationSpecificsSetName()
    {
      return $this->MaxValuesPerVariationSpecificsSetName;
    }

    /**
     * @param int $MaxValuesPerVariationSpecificsSetName
     * @return \EbayWsdl\VariationDetailsType
     */
    public function setMaxValuesPerVariationSpecificsSetName($MaxValuesPerVariationSpecificsSetName)
    {
      $this->MaxValuesPerVariationSpecificsSetName = $MaxValuesPerVariationSpecificsSetName;
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
     * @return \EbayWsdl\VariationDetailsType
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
     * @return \EbayWsdl\VariationDetailsType
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
     * @return \EbayWsdl\VariationDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
