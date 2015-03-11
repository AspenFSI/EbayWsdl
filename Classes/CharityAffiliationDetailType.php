<?php

namespace EbayWsdl\Classes;

class CharityAffiliationDetailType
{

    /**
     * @var string $CharityID
     */
    protected $CharityID = null;

    /**
     * @var CharityAffiliationTypeCodeType $AffiliationType
     */
    protected $AffiliationType = null;

    /**
     * @var \DateTime $LastUsedTime
     */
    protected $LastUsedTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $CharityID
     * @param CharityAffiliationTypeCodeType $AffiliationType
     * @param \DateTime $LastUsedTime
     * @param string $any
     */
    public function __construct($CharityID = null, $AffiliationType = null, \DateTime $LastUsedTime = null, $any = null)
    {
      $this->CharityID = $CharityID;
      $this->AffiliationType = $AffiliationType;
      $this->LastUsedTime = $LastUsedTime ? $LastUsedTime->format(\DateTime::ATOM) : null;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getCharityID()
    {
      return $this->CharityID;
    }

    /**
     * @param string $CharityID
     * @return \EbayWsdl\Classes\CharityAffiliationDetailType
     */
    public function setCharityID($CharityID)
    {
      $this->CharityID = $CharityID;
      return $this;
    }

    /**
     * @return CharityAffiliationTypeCodeType
     */
    public function getAffiliationType()
    {
      return $this->AffiliationType;
    }

    /**
     * @param CharityAffiliationTypeCodeType $AffiliationType
     * @return \EbayWsdl\Classes\CharityAffiliationDetailType
     */
    public function setAffiliationType($AffiliationType)
    {
      $this->AffiliationType = $AffiliationType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUsedTime()
    {
      if ($this->LastUsedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastUsedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastUsedTime
     * @return \EbayWsdl\Classes\CharityAffiliationDetailType
     */
    public function setLastUsedTime(\DateTime $LastUsedTime)
    {
      $this->LastUsedTime = $LastUsedTime->format(\DateTime::ATOM);
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
     * @return \EbayWsdl\Classes\CharityAffiliationDetailType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
