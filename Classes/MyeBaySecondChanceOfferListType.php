<?php

namespace EbayWsdl\Classes;

class MyeBaySecondChanceOfferListType
{

    /**
     * @var int $TotalAvailable
     */
    protected $TotalAvailable = null;

    /**
     * @var ItemType[] $SecondChanceOffer
     */
    protected $SecondChanceOffer = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $TotalAvailable
     * @param ItemType[] $SecondChanceOffer
     * @param string $any
     */
    public function __construct($TotalAvailable = null, array $SecondChanceOffer = null, $any = null)
    {
      $this->TotalAvailable = $TotalAvailable;
      $this->SecondChanceOffer = $SecondChanceOffer;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getTotalAvailable()
    {
      return $this->TotalAvailable;
    }

    /**
     * @param int $TotalAvailable
     * @return \EbayWsdl\Classes\MyeBaySecondChanceOfferListType
     */
    public function setTotalAvailable($TotalAvailable)
    {
      $this->TotalAvailable = $TotalAvailable;
      return $this;
    }

    /**
     * @return ItemType[]
     */
    public function getSecondChanceOffer()
    {
      return $this->SecondChanceOffer;
    }

    /**
     * @param ItemType[] $SecondChanceOffer
     * @return \EbayWsdl\Classes\MyeBaySecondChanceOfferListType
     */
    public function setSecondChanceOffer(array $SecondChanceOffer)
    {
      $this->SecondChanceOffer = $SecondChanceOffer;
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
     * @return \EbayWsdl\Classes\MyeBaySecondChanceOfferListType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
