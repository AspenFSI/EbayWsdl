<?php

namespace EbayWsdl;

class ExtendedContactDetailsType
{

    /**
     * @var ContactHoursDetailsType $ContactHoursDetails
     */
    protected $ContactHoursDetails = null;

    /**
     * @var boolean $ClassifiedAdContactByEmailEnabled
     */
    protected $ClassifiedAdContactByEmailEnabled = null;

    /**
     * @var string $PayPerLeadPhoneNumber
     */
    protected $PayPerLeadPhoneNumber = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ContactHoursDetailsType $ContactHoursDetails
     * @param boolean $ClassifiedAdContactByEmailEnabled
     * @param string $PayPerLeadPhoneNumber
     * @param string $any
     */
    public function __construct($ContactHoursDetails = null, $ClassifiedAdContactByEmailEnabled = null, $PayPerLeadPhoneNumber = null, $any = null)
    {
      $this->ContactHoursDetails = $ContactHoursDetails;
      $this->ClassifiedAdContactByEmailEnabled = $ClassifiedAdContactByEmailEnabled;
      $this->PayPerLeadPhoneNumber = $PayPerLeadPhoneNumber;
      $this->any = $any;
    }

    /**
     * @return ContactHoursDetailsType
     */
    public function getContactHoursDetails()
    {
      return $this->ContactHoursDetails;
    }

    /**
     * @param ContactHoursDetailsType $ContactHoursDetails
     * @return \EbayWsdl\ExtendedContactDetailsType
     */
    public function setContactHoursDetails($ContactHoursDetails)
    {
      $this->ContactHoursDetails = $ContactHoursDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
      return $this->ClassifiedAdContactByEmailEnabled;
    }

    /**
     * @param boolean $ClassifiedAdContactByEmailEnabled
     * @return \EbayWsdl\ExtendedContactDetailsType
     */
    public function setClassifiedAdContactByEmailEnabled($ClassifiedAdContactByEmailEnabled)
    {
      $this->ClassifiedAdContactByEmailEnabled = $ClassifiedAdContactByEmailEnabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayPerLeadPhoneNumber()
    {
      return $this->PayPerLeadPhoneNumber;
    }

    /**
     * @param string $PayPerLeadPhoneNumber
     * @return \EbayWsdl\ExtendedContactDetailsType
     */
    public function setPayPerLeadPhoneNumber($PayPerLeadPhoneNumber)
    {
      $this->PayPerLeadPhoneNumber = $PayPerLeadPhoneNumber;
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
     * @return \EbayWsdl\ExtendedContactDetailsType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
