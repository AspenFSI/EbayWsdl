<?php

namespace EbayWsdl;

class MaximumUnpaidItemStrikesInfoDetailsType
{

    /**
     * @var MaximumUnpaidItemStrikesCountDetailsType $MaximumUnpaidItemStrikesCount
     */
    protected $MaximumUnpaidItemStrikesCount = null;

    /**
     * @var MaximumUnpaidItemStrikesDurationDetailsType[] $MaximumUnpaidItemStrikesDuration
     */
    protected $MaximumUnpaidItemStrikesDuration = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param MaximumUnpaidItemStrikesCountDetailsType $MaximumUnpaidItemStrikesCount
     * @param MaximumUnpaidItemStrikesDurationDetailsType[] $MaximumUnpaidItemStrikesDuration
     * @param string $any
     */
    public function __construct($MaximumUnpaidItemStrikesCount = null, array $MaximumUnpaidItemStrikesDuration = null, $any = null)
    {
      $this->MaximumUnpaidItemStrikesCount = $MaximumUnpaidItemStrikesCount;
      $this->MaximumUnpaidItemStrikesDuration = $MaximumUnpaidItemStrikesDuration;
      $this->any = $any;
    }

    /**
     * @return MaximumUnpaidItemStrikesCountDetailsType
     */
    public function getMaximumUnpaidItemStrikesCount()
    {
      return $this->MaximumUnpaidItemStrikesCount;
    }

    /**
     * @param MaximumUnpaidItemStrikesCountDetailsType $MaximumUnpaidItemStrikesCount
     * @return \EbayWsdl\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function setMaximumUnpaidItemStrikesCount($MaximumUnpaidItemStrikesCount)
    {
      $this->MaximumUnpaidItemStrikesCount = $MaximumUnpaidItemStrikesCount;
      return $this;
    }

    /**
     * @return MaximumUnpaidItemStrikesDurationDetailsType[]
     */
    public function getMaximumUnpaidItemStrikesDuration()
    {
      return $this->MaximumUnpaidItemStrikesDuration;
    }

    /**
     * @param MaximumUnpaidItemStrikesDurationDetailsType[] $MaximumUnpaidItemStrikesDuration
     * @return \EbayWsdl\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function setMaximumUnpaidItemStrikesDuration(array $MaximumUnpaidItemStrikesDuration)
    {
      $this->MaximumUnpaidItemStrikesDuration = $MaximumUnpaidItemStrikesDuration;
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
     * @return \EbayWsdl\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
