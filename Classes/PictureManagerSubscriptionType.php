<?php

namespace EbayWsdl\Classes;

class PictureManagerSubscriptionType
{

    /**
     * @var PictureManagerSubscriptionLevelCodeType $SubscriptionLevel
     */
    protected $SubscriptionLevel = null;

    /**
     * @var AmountType $Fee
     */
    protected $Fee = null;

    /**
     * @var int $StorageSize
     */
    protected $StorageSize = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PictureManagerSubscriptionLevelCodeType $SubscriptionLevel
     * @param AmountType $Fee
     * @param int $StorageSize
     * @param string $any
     */
    public function __construct($SubscriptionLevel = null, $Fee = null, $StorageSize = null, $any = null)
    {
      $this->SubscriptionLevel = $SubscriptionLevel;
      $this->Fee = $Fee;
      $this->StorageSize = $StorageSize;
      $this->any = $any;
    }

    /**
     * @return PictureManagerSubscriptionLevelCodeType
     */
    public function getSubscriptionLevel()
    {
      return $this->SubscriptionLevel;
    }

    /**
     * @param PictureManagerSubscriptionLevelCodeType $SubscriptionLevel
     * @return \EbayWsdl\Classes\PictureManagerSubscriptionType
     */
    public function setSubscriptionLevel($SubscriptionLevel)
    {
      $this->SubscriptionLevel = $SubscriptionLevel;
      return $this;
    }

    /**
     * @return AmountType
     */
    public function getFee()
    {
      return $this->Fee;
    }

    /**
     * @param AmountType $Fee
     * @return \EbayWsdl\Classes\PictureManagerSubscriptionType
     */
    public function setFee($Fee)
    {
      $this->Fee = $Fee;
      return $this;
    }

    /**
     * @return int
     */
    public function getStorageSize()
    {
      return $this->StorageSize;
    }

    /**
     * @param int $StorageSize
     * @return \EbayWsdl\Classes\PictureManagerSubscriptionType
     */
    public function setStorageSize($StorageSize)
    {
      $this->StorageSize = $StorageSize;
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
     * @return \EbayWsdl\Classes\PictureManagerSubscriptionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
