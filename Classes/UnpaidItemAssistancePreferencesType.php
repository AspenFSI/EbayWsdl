<?php

namespace EbayWsdl\Classes;

class UnpaidItemAssistancePreferencesType
{

    /**
     * @var int $DelayBeforeOpeningDispute
     */
    protected $DelayBeforeOpeningDispute = null;

    /**
     * @var boolean $OptInStatus
     */
    protected $OptInStatus = null;

    /**
     * @var boolean $AutoRelist
     */
    protected $AutoRelist = null;

    /**
     * @var boolean $RemoveAllExcludedUsers
     */
    protected $RemoveAllExcludedUsers = null;

    /**
     * @var string[] $ExcludedUser
     */
    protected $ExcludedUser = null;

    /**
     * @var boolean $AutoOptDonationRefund
     */
    protected $AutoOptDonationRefund = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $DelayBeforeOpeningDispute
     * @param boolean $OptInStatus
     * @param boolean $AutoRelist
     * @param boolean $RemoveAllExcludedUsers
     * @param string[] $ExcludedUser
     * @param boolean $AutoOptDonationRefund
     * @param string $any
     */
    public function __construct($DelayBeforeOpeningDispute = null, $OptInStatus = null, $AutoRelist = null, $RemoveAllExcludedUsers = null, array $ExcludedUser = null, $AutoOptDonationRefund = null, $any = null)
    {
      $this->DelayBeforeOpeningDispute = $DelayBeforeOpeningDispute;
      $this->OptInStatus = $OptInStatus;
      $this->AutoRelist = $AutoRelist;
      $this->RemoveAllExcludedUsers = $RemoveAllExcludedUsers;
      $this->ExcludedUser = $ExcludedUser;
      $this->AutoOptDonationRefund = $AutoOptDonationRefund;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getDelayBeforeOpeningDispute()
    {
      return $this->DelayBeforeOpeningDispute;
    }

    /**
     * @param int $DelayBeforeOpeningDispute
     * @return \EbayWsdl\Classes\UnpaidItemAssistancePreferencesType
     */
    public function setDelayBeforeOpeningDispute($DelayBeforeOpeningDispute)
    {
      $this->DelayBeforeOpeningDispute = $DelayBeforeOpeningDispute;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOptInStatus()
    {
      return $this->OptInStatus;
    }

    /**
     * @param boolean $OptInStatus
     * @return \EbayWsdl\Classes\UnpaidItemAssistancePreferencesType
     */
    public function setOptInStatus($OptInStatus)
    {
      $this->OptInStatus = $OptInStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoRelist()
    {
      return $this->AutoRelist;
    }

    /**
     * @param boolean $AutoRelist
     * @return \EbayWsdl\Classes\UnpaidItemAssistancePreferencesType
     */
    public function setAutoRelist($AutoRelist)
    {
      $this->AutoRelist = $AutoRelist;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllExcludedUsers()
    {
      return $this->RemoveAllExcludedUsers;
    }

    /**
     * @param boolean $RemoveAllExcludedUsers
     * @return \EbayWsdl\Classes\UnpaidItemAssistancePreferencesType
     */
    public function setRemoveAllExcludedUsers($RemoveAllExcludedUsers)
    {
      $this->RemoveAllExcludedUsers = $RemoveAllExcludedUsers;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getExcludedUser()
    {
      return $this->ExcludedUser;
    }

    /**
     * @param string[] $ExcludedUser
     * @return \EbayWsdl\Classes\UnpaidItemAssistancePreferencesType
     */
    public function setExcludedUser(array $ExcludedUser)
    {
      $this->ExcludedUser = $ExcludedUser;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoOptDonationRefund()
    {
      return $this->AutoOptDonationRefund;
    }

    /**
     * @param boolean $AutoOptDonationRefund
     * @return \EbayWsdl\Classes\UnpaidItemAssistancePreferencesType
     */
    public function setAutoOptDonationRefund($AutoOptDonationRefund)
    {
      $this->AutoOptDonationRefund = $AutoOptDonationRefund;
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
     * @return \EbayWsdl\Classes\UnpaidItemAssistancePreferencesType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
