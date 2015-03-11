<?php

namespace EbayWsdl\Classes;

class PurchaseReminderEmailPreferencesType
{

    /**
     * @var boolean $PurchaseReminderEmailPreferences
     */
    protected $PurchaseReminderEmailPreferences = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $PurchaseReminderEmailPreferences
     * @param string $any
     */
    public function __construct($PurchaseReminderEmailPreferences = null, $any = null)
    {
      $this->PurchaseReminderEmailPreferences = $PurchaseReminderEmailPreferences;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getPurchaseReminderEmailPreferences()
    {
      return $this->PurchaseReminderEmailPreferences;
    }

    /**
     * @param boolean $PurchaseReminderEmailPreferences
     * @return \EbayWsdl\Classes\PurchaseReminderEmailPreferencesType
     */
    public function setPurchaseReminderEmailPreferences($PurchaseReminderEmailPreferences)
    {
      $this->PurchaseReminderEmailPreferences = $PurchaseReminderEmailPreferences;
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
     * @return \EbayWsdl\Classes\PurchaseReminderEmailPreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
