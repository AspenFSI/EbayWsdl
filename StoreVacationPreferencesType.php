<?php

namespace EbayWsdl;

class StoreVacationPreferencesType
{

    /**
     * @var boolean $OnVacation
     */
    protected $OnVacation = null;

    /**
     * @var \DateTime $ReturnDate
     */
    protected $ReturnDate = null;

    /**
     * @var boolean $HideFixedPriceStoreItems
     */
    protected $HideFixedPriceStoreItems = null;

    /**
     * @var boolean $MessageItem
     */
    protected $MessageItem = null;

    /**
     * @var boolean $MessageStore
     */
    protected $MessageStore = null;

    /**
     * @var boolean $DisplayMessageStoreCustomText
     */
    protected $DisplayMessageStoreCustomText = null;

    /**
     * @var string $MessageStoreCustomText
     */
    protected $MessageStoreCustomText = null;

    /**
     * @param boolean $OnVacation
     * @param \DateTime $ReturnDate
     * @param boolean $HideFixedPriceStoreItems
     * @param boolean $MessageItem
     * @param boolean $MessageStore
     * @param boolean $DisplayMessageStoreCustomText
     * @param string $MessageStoreCustomText
     */
    public function __construct($OnVacation = null, \DateTime $ReturnDate = null, $HideFixedPriceStoreItems = null, $MessageItem = null, $MessageStore = null, $DisplayMessageStoreCustomText = null, $MessageStoreCustomText = null)
    {
      $this->OnVacation = $OnVacation;
      $this->ReturnDate = $ReturnDate ? $ReturnDate->format(\DateTime::ATOM) : null;
      $this->HideFixedPriceStoreItems = $HideFixedPriceStoreItems;
      $this->MessageItem = $MessageItem;
      $this->MessageStore = $MessageStore;
      $this->DisplayMessageStoreCustomText = $DisplayMessageStoreCustomText;
      $this->MessageStoreCustomText = $MessageStoreCustomText;
    }

    /**
     * @return boolean
     */
    public function getOnVacation()
    {
      return $this->OnVacation;
    }

    /**
     * @param boolean $OnVacation
     * @return \EbayWsdl\StoreVacationPreferencesType
     */
    public function setOnVacation($OnVacation)
    {
      $this->OnVacation = $OnVacation;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReturnDate()
    {
      if ($this->ReturnDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReturnDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReturnDate
     * @return \EbayWsdl\StoreVacationPreferencesType
     */
    public function setReturnDate(\DateTime $ReturnDate)
    {
      $this->ReturnDate = $ReturnDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideFixedPriceStoreItems()
    {
      return $this->HideFixedPriceStoreItems;
    }

    /**
     * @param boolean $HideFixedPriceStoreItems
     * @return \EbayWsdl\StoreVacationPreferencesType
     */
    public function setHideFixedPriceStoreItems($HideFixedPriceStoreItems)
    {
      $this->HideFixedPriceStoreItems = $HideFixedPriceStoreItems;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMessageItem()
    {
      return $this->MessageItem;
    }

    /**
     * @param boolean $MessageItem
     * @return \EbayWsdl\StoreVacationPreferencesType
     */
    public function setMessageItem($MessageItem)
    {
      $this->MessageItem = $MessageItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMessageStore()
    {
      return $this->MessageStore;
    }

    /**
     * @param boolean $MessageStore
     * @return \EbayWsdl\StoreVacationPreferencesType
     */
    public function setMessageStore($MessageStore)
    {
      $this->MessageStore = $MessageStore;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayMessageStoreCustomText()
    {
      return $this->DisplayMessageStoreCustomText;
    }

    /**
     * @param boolean $DisplayMessageStoreCustomText
     * @return \EbayWsdl\StoreVacationPreferencesType
     */
    public function setDisplayMessageStoreCustomText($DisplayMessageStoreCustomText)
    {
      $this->DisplayMessageStoreCustomText = $DisplayMessageStoreCustomText;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageStoreCustomText()
    {
      return $this->MessageStoreCustomText;
    }

    /**
     * @param string $MessageStoreCustomText
     * @return \EbayWsdl\StoreVacationPreferencesType
     */
    public function setMessageStoreCustomText($MessageStoreCustomText)
    {
      $this->MessageStoreCustomText = $MessageStoreCustomText;
      return $this;
    }

}
